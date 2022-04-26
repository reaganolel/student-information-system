<?php

namespace App\Repositories;

use App\Models\academics;
use App\Repositories\BaseRepository;

/**
 * Class academicsRepository
 * @package App\Repositories
 * @version April 26, 2022, 4:23 pm UTC
*/

class academicsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'academic_year'
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
        return academics::class;
    }
}
