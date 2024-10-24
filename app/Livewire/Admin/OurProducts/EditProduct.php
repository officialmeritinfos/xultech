<?php

namespace App\Livewire\Admin\OurProducts;

use App\Models\OurProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProduct extends Component
{
    use LivewireAlert, WithFileUploads;
    public $product;
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

    public function mount(OurProduct $product)
    {
        $this->product = $product;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->category = $product->category;
        $this->status = $product->status;
        $this->website = $product->website;
        $this->features = $product->features;
        $this->versions = $product->versions;
        $this->licenseType = $product->license_type;
    }

    public function submit(Request $request)
    {
        $this->validate([
            'name' => ['required','string','max:255'],
            'description' => ['required','string'],
            'features' => ['required','string'],
            'category' => ['required','string'],
            'website' => ['required','string','url','max:255'],
            'versions' => ['required','string'],
            'licenseType' => ['required','string'],
            'icon' => ['nullable','mimes:jpg,jpeg,png,webp,gif,avif','max:2048'],
        ]);
        DB::beginTransaction();

        try {
            //let us upload the file
            if ($this->icon){
                $iconLink = googleUpload($this->icon);
                $icon = $iconLink['link'];
            }else{
                $icon = $this->product->icon_path;
            }


            $update = OurProduct::where('id',$this->product->id)->update([
                'name' => $this->name,
                'description' => $this->description,
                'category' => $this->category,
                'license_type' => $this->licenseType,
                'website' => $this->website,
                'icon_path' => $icon,
                'features' => $this->features,
                'versions' => $this->versions,
            ]);
            if ($update) {
                $this->alert('success', '', [
                    'position' => 'top-end',
                    'timer' => 5000,
                    'toast' => true,
                    'text' => 'Product successfully updated',
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

    public function render()
    {
        return view('livewire.admin.our-products.edit-product');
    }
}
