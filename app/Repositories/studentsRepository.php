<?php

namespace App\Repositories;

use App\Models\students;
use App\Repositories\BaseRepository;

/**
 * Class studentsRepository
 * @package App\Repositories
 * @version April 26, 2022, 11:25 am UTC
*/

class studentsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'admission_number',
        'first_name',
        'last_name',
        'email_address',
        'course_name',
        'year',
        'department_name',
        'sex',
        'phone_number',
        'index_number'
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
        return students::class;
    }
}
