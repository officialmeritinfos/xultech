<?php

namespace App\Http\Controllers\Admin\OurProducts;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use App\Models\OurProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OurProductController extends Controller
{
    //landing page
    public function landingPage()
    {
        $user = Auth::user();
        $web = GeneralSetting::first();

        return view('dashboards.admin.ourProducts.index')
            ->with([
                'user' => $user,
                'web' => $web,
                'siteName'=>$web->name,
                'pageName'=>'Our Products',
            ]);
    }
    //create
    public function newProduct()
    {
        $user = Auth::user();
        $web = GeneralSetting::first();

        return view('dashboards.admin.ourProducts.new')
            ->with([
                'user' => $user,
                'web' => $web,
                'siteName'=>$web->name,
                'pageName'=>'Add New Product',
            ]);
    }
    //edit product
    public function editProduct($id)
    {
        $user = Auth::user();
        $web = GeneralSetting::first();
        $product = OurProduct::find($id);

        return view('dashboards.admin.ourProducts.edit')
            ->with([
                'user' => $user,
                'web' => $web,
                'siteName'=>$web->name,
                'pageName'=>'Edit: '.$product->name,
                'product'=>$product,
            ]);
    }
}
