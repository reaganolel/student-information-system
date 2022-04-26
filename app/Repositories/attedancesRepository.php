<?php

namespace App\Repositories;

use App\Models\attedances;
use App\Repositories\BaseRepository;

/**
 * Class attedancesRepository
 * @package App\Repositories
 * @version April 26, 2022, 4:23 pm UTC
*/

class attedancesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_id',
        'class_id',
        'subject_id',
        'teacher_id',
        'attedance_status'
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
        return attedances::class;
    }
}
