<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Site
 * @package App\Models
 * @version September 27, 2020, 1:17 pm GMT
 *
 * @property string $name
 * @property string $link
 * @property string $description
 * @property string $logo
 */
class Site extends Model
{
    use SoftDeletes;

    public $table = 'sites';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'link',
        'description',
        'logo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'link' => 'string',
        'description' => 'string',
        'logo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
