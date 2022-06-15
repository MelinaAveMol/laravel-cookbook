<?php

namespace App\Http\Controllers\Admin;

// Los use equivalen a los import de javascript, es una forma de traer
// otros archivos que contienen código a este archivo
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Http\Requests\Admin\ProductCategoryRequest;
use Debugbar;


class ProductCategoryController extends Controller
{
    

    protected $product_category;

    

    public function __construct(ProductCategory $product_category)
    {

        
        $this->product_category = $product_category;
        $this->product_category->visible = 1;
        // Debugbar::info($this->productCategory);
    }
    
    public function index()
    {
    
        $view = View::make('admin.pages.product_categories.index')
                ->with('product_category', $this->product_category)
                ->with('product_categories', $this->product_category->where('active', 1)->get());
            
      
        // Debugbar::info($view);

        if(request()->ajax()) {
            
            $sections = $view->renderSections();
                
            return response()->json([
                'table' => $sections['table'],
                'form' => $sections['form'],
            ]); 
        }

        return $view;
    }

    public function create()
    {
      

       $view = View::make('admin.pages.product_categories.index')
        ->with('product_category', $this->product_category)
        ->renderSections();

        // debugbar::info($view['form']);

      

        return response()->json([
            'form' => $view['form']
        ]);
    }

    public function store(ProductCategoryRequest $request)
    {            
        

        $product_category = $this->product_category->updateOrCreate([
                'id' => request('id')],[
                'name' => request('name'),
                'title' => request('title'),
                'visible' => 1,
                'active' => 1,
        ]);
            
        $view = View::make('admin.pages.product_categories.index')
        ->with('product_categories', $this->product_category->where('active', 1)->get())
        ->with('product_category', $product_category)
        ->renderSections();        

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
            'id' => $product_category->id,
        ]);
    }

    public function edit(ProductCategory $product_category)
    {
        $view = View::make('admin.pages.product_categories.index')
        ->with('product_category', $product_categories)
        ->with('product_categories', $this->product_category->where('active', 1)->get());   
        
        if(request()->ajax()) {

            $sections = $view->renderSections(); 
    
            return response()->json([
                'form' => $sections['form'],
            ]); 
        }
                
        return $view;
    }

    public function show(ProductCategory $product_categories){

    }

    public function destroy(ProductCategory $product_categories)
    {
        $product_categories->active = 0;
        $product_categories->save();

        $view = View::make('admin.pages.product_categories.index')
            ->with('product_category', $this->product_category)
            ->with('product_categories', $this->product_category->where('active', 1)->get())
            ->renderSections();
        
        return response()->json([
            'table' => $view['table'],
            'form' => $view['form']
        ]);
    }

    
}