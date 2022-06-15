<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];
    protected $table = "customers";
    // with
    //fillable

    public  function ()
    {
        return $this->belongsTo(Sale::class)->('customer_id');
    
    }

    public  function ()
    {
        return $this->hasMany(FingerSprint::class)->('customer_id');
    
    }
}