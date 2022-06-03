<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Http\Requests\Front\ContactRequest;
use Debugbar;



class ContactController extends Controller
{
    

    protected $contact;

   

    public function __construct(Contact $contact)// constructor arranca y da valor a las proiedades del objeto antes de que aranque index
    {
        // Debugbar::info($this->contact); //la propiedad contactcontroller todavia no tiene ningún valor
        // Debugbar::info($contact); // ahora uso el codigo del objeto contactcontroller quiero el objeto modelo contact           

        $this->contact = $contact;

        // Debugbar::info($this->contact);
    }
    
    public function index()
    {

        

        $view = View::make('front.pages.contact.contact');
                
      
        //Debugbar::info($view);

        if(request()->ajax()) {
            
            $sections = $view->renderSections();
                
            return response()->json([
            
                'form' => $sections['form'],
            ]); 
        }

        return $view;
    }


    public function store(contactRequest $request)
    {            
        

        $contact = $this->contact->updateOrCreate([
                'id' => request('id')],[
                'name' => request('name'),
                'surname' => request('surname'),
                'mobile' => request('mobile'),
                'email' => request('email'),
                'message' => request('message'),
                'active' => 1,
        ]);
            
        $view = View::make('front.pages.contact.contact')
        ->with('contacts', $this->contact->where('active', 1)->get())
        ->with('contact', $contact)
        ->renderSections();        

        return response()->json([
            'form' => $view['form'],
            
        ]);
    }

}