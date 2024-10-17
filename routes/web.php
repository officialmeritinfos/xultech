<?php

use App\Http\Controllers\Home\CompanyController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\IndustryController;
use App\Http\Controllers\Home\ProductsController;
use App\Http\Controllers\Home\ResourcesController;
use App\Http\Controllers\Home\SolutionController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function (){
    Route::get('/',[HomeController::class,'landingPage'])->name('landingPage');
    Route::get('book-us',[HomeController::class,'bookingPage'])->name('bookUsPage');
    //Company Page
    Route::prefix('company')->name('company.')->group(function (){
        Route::get('about-us',[CompanyController::class,'aboutUs'])->name('aboutUs');
        Route::get('our-team',[CompanyController::class,'ourTeamPage'])->name('ourTeam');
        Route::get('career',[CompanyController::class,'careerPage'])->name('career');
        Route::get('contact-us',[CompanyController::class,'contactPage'])->name('contact');
    });
    //Solutions Page
    Route::prefix('solutions')->name('solutions.')->group(function (){
        Route::get('ui-design',[SolutionController::class,'uiDesign'])->name('uiDesign');
        Route::get('web-development',[SolutionController::class,'webDevelopment'])->name('webDevelopment');
        Route::get('mobile-app-development',[SolutionController::class,'mobileDevelopment'])->name('mobileDevelopment');
        Route::get('custom-software-development',[SolutionController::class,'customSoftware'])->name('customSoftware');
        Route::get('ecommerce-solutions',[SolutionController::class,'ecommerceSolutions'])->name('ecommerceSolutions');
        Route::get('crm-solutions',[SolutionController::class,'crmSolutions'])->name('crmSolutions');
        Route::get('business-management-system',[SolutionController::class,'businessManagementSolutions'])->name('businessManagementSolutions');
        Route::get('consulting-solutions',[SolutionController::class,'consultingSolutions'])->name('consultingSolutions');
        Route::get('inventory-sales-management-system',[SolutionController::class,'inventorySystems'])->name('inventory-systems');
        Route::get('school-solutions',[SolutionController::class,'schoolSolution'])->name('schoolSolution');
        Route::get('booking-solutions',[SolutionController::class,'bookingSolutions'])->name('bookingSolutions');
    });
    //industries Page
    Route::prefix('industries')->name('industry.')->group(function (){
        Route::get('health-care',[IndustryController::class,'healthCare'])->name('healthCare');
        Route::get('finance',[IndustryController::class,'finance'])->name('finance');
        Route::get('retail',[IndustryController::class,'retail'])->name('retail');
        Route::get('education',[IndustryController::class,'education'])->name('education');
        Route::get('real-estate',[IndustryController::class,'realEstate'])->name('realEstate');
        Route::get('logistics',[IndustryController::class,'logistics'])->name('logistics');
        Route::get('manufacturing',[IndustryController::class,'manufacturing'])->name('manufacturing');
        Route::get('hospitality',[IndustryController::class,'hospitality'])->name('hospitality');
    });
    //product Page
    Route::prefix('product')->name('product.')->group(function (){
        Route::get('index',[ProductsController::class,'index'])->name('index');
        Route::get('detail/{slug}/{id}',[ProductsController::class,'productDetail'])->name('detail');
    });
    //Resources page
    Route::prefix('resources')->name('resources.')->group(function (){
        Route::get('index',[ResourcesController::class,'index'])->name('index');
        Route::get('blogs',[ResourcesController::class,'blogPage'])->name('blogs');
        Route::get('terms-of-service',[ResourcesController::class,'termsOfService'])->name('termsOfService');
        Route::get('privacy-policy',[ResourcesController::class,'privacyPolicy'])->name('privacyPolicy');
        Route::get('work-process',[ResourcesController::class,'ourWorkProcess'])->name('work-process');
    });

});
