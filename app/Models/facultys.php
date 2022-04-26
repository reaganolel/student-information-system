<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class facultys
 * @package App\Models
 * @version April 26, 2022, 4:22 pm UTC
 *
 * @property string $faculty_name
 * @property integer $faculty_code
 * @property integer $course_code
 * @property string $faculty_description
 * @property boolean $faculty_status
 */
class facultys extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'facultys';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'faculty_name',
        'faculty_code',
        'course_code',
        'faculty_description',
        'faculty_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'faculty_id' => 'integer',
        'faculty_name' => 'string',
        'faculty_code' => 'integer',
        'course_code' => 'integer',
        'faculty_description' => 'string',
        'faculty_status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'faculty_name' => 'required|string|max:255',
        'faculty_code' => 'required|integer',
        'course_code' => 'required|integer',
        'faculty_description' => 'required|string',
        'faculty_status' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
