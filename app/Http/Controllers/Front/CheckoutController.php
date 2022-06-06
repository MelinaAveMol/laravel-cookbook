<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Checkout;
use App\Http\Requests\Front\CheckoutRequest;


class CheckoutController extends Controller
{

    protected $checkout;

    public function __construct(Checkout $checkout)// constructor arranca y da valor a las proiedades del objeto antes de que aranque index
    {
        // Debugbar::info($this->contact); //la propiedad contactcontroller todavia no tiene ningún valor
        // Debugbar::info($contact); // ahora uso el codigo del objeto contactcontroller quiero el objeto modelo contact           

        $this->checkout = $checkout;

        // Debugbar::info($this->contact);
    }
    
    public function index()
    {

        

        $view = View::make('front.pages.checkout.checkout');
                
      
        //Debugbar::info($view);

        if(request()->ajax()) {
            
            $sections = $view->renderSections();
                
            return response()->json([
            
                'content' => $sections['content'],
            ]); 
        }

        return $view;
    }


    public function store(CheckoutRequest $request)
    {            
        

        $checkout = $this->checkout->updateOrCreate([
                'id' => request('id')],[
                'name' => request('name'),
                'surname' => request('surname'),
                'mobile' => request('mobile'),
                'email' => request('email'),
                'message' => request('message'),
                'active' => 1,
        ]);
            
        $view = View::make('front.pages.checkout.checkout')
        ->with('checkouts', $this->contact->where('active', 1)->get())
        ->with('checkout', $checkout)
        ->renderSections();        

        return response()->json([
            'form' => $view['form'],
            
        ]);
    }

}