<?php

namespace App\Livewire\Admin\OurProducts;

use App\Models\OurProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewProduct extends Component
{
    use LivewireAlert, WithFileUploads;
    public $name;
    public $description;
    public $category;
    public $status;
    public $website;
    public $features;
    public $icon;
    public $files=[];
    public $versions;
    public $licenseType;

    public function render()
    {
        return view('livewire.admin.our-products.new-product');
    }

    public function addProduct(Request $request)
    {
        $user = Auth::user();
        $this->validate([
            'name' => ['required','string','max:255'],
            'description' => ['required','string'],
            'features' => ['required','string'],
            'category' => ['required','string'],
            'website' => ['required','string','url','max:255'],
            'versions' => ['required','string'],
            'licenseType' => ['required','string'],
            'icon' => ['required','mimes:jpg,jpeg,png,webp,gif,avif','max:2048'],
            'files.*' => ['required','mimes:jpg,jpeg,png,webp,gif,avif','max:2048'],
        ]);
        DB::beginTransaction();

        try {
            //let us upload the file
            if ($this->icon){
                $iconLink = googleUpload($this->icon);
                $icon = $iconLink['link'];
            }

            // Collect uploaded file paths
            $uploadedFiles = [];
            foreach ($this->files as $file) {
                $link = googleUpload($file);
                $featuredImage = $link['link'];
                $uploadedFiles[] = $featuredImage;
            }

            $product = OurProduct::create([
                'name' => $this->name,
                'description' => $this->description,
                'category' => $this->category,
                'license_type' => $this->licenseType,
                'website' => $this->website,
                'icon_path' => $icon,
                'features' => $this->features,
                'media_files' => json_encode($uploadedFiles),
                'versions' => $this->versions,
            ]);
            if ($product) {
                $this->alert('success', '', [
                    'position' => 'top-end',
                    'timer' => 5000,
                    'toast' => true,
                    'text' => 'Product successfully published',
                    'width' => '400',
                ]);
                DB::commit();

                return $this->redirect(route('admin.our-products'));
            }

            $this->alert('error', '', [
                'position' => 'top-end',
                'timer' => 5000,
                'toast' => true,
                'text' => 'We could not add your product at the moment',
                'width' => '400',
            ]);
        }catch (\Exception $e){
            DB::rollBack();
            logger($e->getMessage());
            $this->alert('error', '', [
                'position' => 'top-end',
                'timer' => 5000,
                'toast' => true,
                'text' => 'An error occurred. No worries, we are working on it.',
                'width' => '400',
            ]);
        }
    }
}
