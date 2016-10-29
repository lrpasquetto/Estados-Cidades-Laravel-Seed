<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class State
 * @package App\Models
 * @version September 4, 2016, 8:13 pm UTC
 */
class State extends Model
{

    public $table = 'states';
    

    public $fillable = [
        'abbreviation',
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'abbreviation' => 'string',
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
        return $this->hasMany('\App\Models\Company','state');
    }
    
}
