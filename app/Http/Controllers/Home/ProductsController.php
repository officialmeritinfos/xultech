<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use App\Models\OurProduct;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //landing page
    public function index()
    {
        $web = GeneralSetting::first();

        return view('home.products.index')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => "{$web->name} Products",
                'products' => OurProduct::where('status','active')->latest()->get(),
            ]);
    }
    //product detail
    public function productDetail($productSlug, $productId)
    {
        $web = GeneralSetting::first();
        $product = OurProduct::where([
            'id' => $productId,
        ])->firstOrFail();

        return view('home.products.detail')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => "{$product->name}",
                'product' => $product,
            ]);
    }
}
