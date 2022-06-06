<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\Admin\ProductRequest;
use Debugbar;


class ProductController extends Controller

{

    protected $product;


    public function __construct(Product $product) 
    {

        $this->product = $product;
     

         // Debugbar::info($this->product);
    }

    public function index()
    {
        $view = View::make ('admin.pages.products.index')
        
        ->with ('product', $this->product)
        ->with ('products', $this->product ->where('active' , 1)->get());
        

        if(request()->ajax()) {
            
            $sections = $view->renderSections();
                
            return response()->json([
                'table' => $sections['table'],
                'form' => $sections['form'],
            ]); 
        }

        return $view;
    }


    public function show(Product $product){
        
    }

}
    

