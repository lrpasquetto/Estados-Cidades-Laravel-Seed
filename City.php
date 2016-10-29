<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class City
 * @package App\Models
 * @version September 4, 2016, 8:24 pm UTC
 */
class City extends Model
{

    public $table = 'cities';


    public $fillable = [
        'state_id',
        'ibge_code',
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'state_id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function companies()
    {
      return $this->hasMany('\App\Models\Company','id','city');
    }


    
}
