<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Debugbar;

class ProductController extends Controller{

    protected $product;

    public function __construct(Product $product)
    {


        $this->product = $product;
        
        
    }
    
    public function index()
    {

        $view = View::make('front.pages.products.index')
        ->with('products', $this->product->where('active', 1)->where('visible',1)->get());
    

        return $view;
    }

    public function show(Product $product){
          
        $view = View::make('front.pages.products.index')
        ->with('product', $product);
    
    
        if(request()->ajax()) {

            $sections = $view->renderSections();

            return response()->json([
                'content' => $sections['content'],
            ]);
        }

        return $view;
        
    }
      



    public function filter( Product $filter){

        $view = View::make('front.pages.products.index')
        ->with('products', $filter);
        
        // if('name' == request()->filter) {
        //     $view->with();$filter->products->where('visible,1')->where('name', 'like', 'curs%'.request()->value.'curs%');

        // }

        if(request()->ajax()) {

            $sections = $view->renderSections();

            return response()->json([
                'content' => $sections['content'],
            ]);
    }

    return $view;


}  
} 