<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class class_schedullings
 * @package App\Models
 * @version April 26, 2022, 4:25 pm UTC
 *
 * @property integer $course_id
 * @property integer $level_id
 * @property integer $shift_id
 * @property boolean $classroom_id
 * @property boolean $batch_id
 * @property boolean $day_id
 * @property boolean $time_id
 * @property boolean $teacher_id
 * @property time $start_time
 * @property time $end_time
 * @property boolean $status
 */
class class_schedullings extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'class_schedullings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'course_id',
        'level_id',
        'shift_id',
        'classroom_id',
        'batch_id',
        'day_id',
        'time_id',
        'teacher_id',
        'start_time',
        'end_time',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'schedule_id' => 'integer',
        'course_id' => 'integer',
        'level_id' => 'integer',
        'shift_id' => 'integer',
        'classroom_id' => 'boolean',
        'batch_id' => 'boolean',
        'day_id' => 'boolean',
        'time_id' => 'boolean',
        'teacher_id' => 'boolean',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_id' => 'required|integer',
        'level_id' => 'required|integer',
        'shift_id' => 'required|integer',
        'classroom_id' => 'required|boolean',
        'batch_id' => 'required|boolean',
        'day_id' => 'required|boolean',
        'time_id' => 'required|boolean',
        'teacher_id' => 'required|boolean',
        'start_time' => 'required',
        'end_time' => 'required',
        'status' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
