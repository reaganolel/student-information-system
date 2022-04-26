<?php

namespace App\Repositories;

use App\Models\days;
use App\Repositories\BaseRepository;

/**
 * Class daysRepository
 * @package App\Repositories
 * @version April 26, 2022, 4:24 pm UTC
*/

class daysRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'namme'
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
        return days::class;
    }
}
