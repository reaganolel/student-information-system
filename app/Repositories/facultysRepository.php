<?php

namespace App\Repositories;

use App\Models\facultys;
use App\Repositories\BaseRepository;

/**
 * Class facultysRepository
 * @package App\Repositories
 * @version April 26, 2022, 4:22 pm UTC
*/

class facultysRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'faculty_name',
        'faculty_code',
        'course_code',
        'faculty_description',
        'faculty_status'
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
        return facultys::class;
    }
}
