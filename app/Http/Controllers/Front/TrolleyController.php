<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Trolley;

class TrolleyController extends Controller
{
    
    protected $trolley;

    public function __construct(Trolley $trolley)
    {
        $this->trolley = $trolley;
    }
    
    public function index()
    {

        $view = View::make('front.pages.trolley.index');
                
        if(request()->ajax()) {
            
            $sections = $view->renderSections();
                
            return response()->json([
            
                'content' => $sections['content'],
            ]); 
        }

        return $view;
    }
}