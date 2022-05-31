<?php

namespace App\Http\Controllers\Admin;

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

        

        $view = View::make('front.pages.contacts.index')
                ->with('contact', $this->contact)
                ->with('contacts', $this->contact->where('active', 1)->get());
            
      
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
        

       $view = View::make('front.pages.contacts.index')
        ->with('contact', $this->contact)
        ->renderSections();

        // debugbar::info($view['form']);


        return response()->json([
            'form' => $view['form']
        ]);
    }

    public function store(contactRequest $request)
    {            
        

        $contact = $this->contact->updateOrCreate([
                'id' => request('id')],[
                'name' => request('name'),
                'title' => request('title'),
                'description' => request('description'),
                'visible' => 1,
                'active' => 1,
        ]);
            
        $view = View::make('front.pages.contacts.index')
        ->with('contacts', $this->contact->where('active', 1)->get())
        ->with('contact', $contact)
        ->renderSections();        

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
            'id' => $contact->id,
        ]);
    }

    public function edit(contact $contact)
    {
        $view = View::make('front.pages.contacts.index')
        ->with('contact', $contact)
        ->with('contacts', $this->contact->where('active', 1)->get());   
        
        if(request()->ajax()) {

            $sections = $view->renderSections(); 
    
            return response()->json([
                'form' => $sections['form'],
            ]); 
        }
                
        return $view;
    }

    public function show(contact $contact){

    }

    public function destroy(contact $contact)
    {
        $contact->active = 0;
        $contact->save();

        $view = View::make('front.pages.contacts.index')
            ->with('contact', $this->contact)
            ->with('contacts', $this->contact->where('active', 1)->get())
            ->renderSections();
        
        return response()->json([
            'table' => $view['table'],
            'form' => $view['form']
        ]);
    }
}