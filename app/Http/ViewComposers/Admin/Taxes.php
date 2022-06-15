<?php

namespace App\Http\ViewComposers\Admin;

use Illuminate\View\View;
use App\Models\Tax;

class Taxes
{
    
    static $composed;
    //Esta función se ejecuta cuando la vista ase carga
    //Injección de dependencias

    public function __construct(Tax $tax)
    {
        //Llamamos al modelo y  le damos un alias
        $this->tax = $tax;
    }

    public function compose(View $view)
    {
        // stati- Si le doy un valor a la variable, la variable  se guarda en la memoria y no se puede cambiar.
        if(static::$composed)
        {
            return $view->with('taxes', static::$composed);
        }
        //Este valor que se le da al static::$composed nos  epuede cambiar.
        static::$composed = $this->tax->where('active', 1)->where('valid', 1)->orderBy('type', 'asc')->get();

        //Le doy el valor al view.
        $view->with('taxes', static::$composed);

    }
}
