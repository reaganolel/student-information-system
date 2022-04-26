<?php

namespace App\Repositories;

use App\Models\classrooms;
use App\Repositories\BaseRepository;

/**
 * Class classroomsRepository
 * @package App\Repositories
 * @version April 26, 2022, 2:02 pm UTC
*/

class classroomsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'class_name',
        'class_code'
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
        return classrooms::class;
    }
}
