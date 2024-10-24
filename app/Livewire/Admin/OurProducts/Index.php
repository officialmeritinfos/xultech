<?php

namespace App\Livewire\Admin\OurProducts;

use App\Models\OurProduct;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, LivewireAlert;
    #[Url]
    public $status="all";
    #[Url]
    public $show=15;
    #[Url]
    public $search="";

    protected $listeners = [
        'renderAds' => 'render',
        'deleteConfirmed'
    ];
    public function render()
    {
        $products = OurProduct::query()
            ->when($this->status !== "all", function ($query) {
                $query->where('status', $this->status);
            })
            ->when($this->search, function ($query) {
                $query->where(function ($query) {
                    $query->where('name', 'like', '%' . $this->search . '%')
                        ->orWhere('description', 'like', '%' . $this->search . '%')
                        ->orWhere('created_at', 'like', '%' . $this->search . '%')
                        ->orWhere('category', 'like', '%' . $this->search . '%');
                });
            })
            ->latest()
            ->paginate($this->show);

        return view('livewire.admin.our-products.index',[
            'products' => $products
        ]);
    }
    //delete post
    public function deleteProduct($id)
    {
        try {
            $product = OurProduct::where([
                'id' => $id
            ])->first();

            //open a dialog to confirm action
            $this->alert('warning', '', [
                'text' => 'Do you want to delete ' . $product->name,
                'showConfirmButton' => true,
                'confirmButtonText' => 'Yes',
                'showCancelButton' => true,
                'cancelButtonText' => 'Cancel',
                'onConfirmed' => 'deleteConfirmed',
                'data' => [
                    'id' => $id
                ],
                'timer' => null
            ]);
        } catch (\Exception $exception) {
            Log::info('An error occurred while trying to delete an ad');
            $this->alert('error', '', [
                'position' => 'top-end',
                'timer' => 5000,
                'toast' => true,
                'text' => 'An error occurred while creating an ad for merchant.s',
                'width' => '400',
            ]);
            return;
        }
    }
    //delete confirmed
    public function deleteConfirmed($data)
    {
        $id = $data['id'] ?? null;

        if ($id) {
            $product = OurProduct::where([
                'id' => $id
            ])->first();

            if ($product) {
                $product->delete();
            }
        }

        $this->dispatch('renderAds');
    }
}
