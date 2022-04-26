<?php

namespace App\Repositories;

use App\Models\times;
use App\Repositories\BaseRepository;

/**
 * Class timesRepository
 * @package App\Repositories
 * @version April 26, 2022, 4:22 pm UTC
*/

class timesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'time'
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
        return times::class;
    }
}
