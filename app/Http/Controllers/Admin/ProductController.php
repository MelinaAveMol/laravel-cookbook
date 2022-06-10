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

    public function store(CustoemerRequest $request )
    {            
        

        $product = $this->product->updateOrCreate([
                'id' => request('id')],[
                'name' => request('name'),
                'title' => request('title'),
                'price' => request('price'),
                'description' => request('description'),
                'category_id' => request('category_id'),
                'features' => request('features'),
                'visible' => 1,
                'active' => 1,
        ]);

        $view = View::make('admin.pages.products.index')
        ->with('products', $this->product->where('active', 1)->get())
        ->with('product', $product)
        ->renderSections();        

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
            'id' => $product->id,
        ]);
    }


    // public function show(Product $product){
        
    //     $view = View::make('front.pages.product.index')
    //     ->with('products', $this->product->where('active', 1)->where('visible', 1)->get());
                
      
        
    

}
