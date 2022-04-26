<?php

namespace App\Repositories;

use App\Models\class_schedullings;
use App\Repositories\BaseRepository;

/**
 * Class class_schedullingsRepository
 * @package App\Repositories
 * @version April 26, 2022, 4:25 pm UTC
*/

class class_schedullingsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return class_schedullings::class;
    }
}
