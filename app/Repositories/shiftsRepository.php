<?php

namespace App\Repositories;

use App\Models\shifts;
use App\Repositories\BaseRepository;

/**
 * Class shiftsRepository
 * @package App\Repositories
 * @version April 26, 2022, 4:20 pm UTC
*/

class shiftsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'shift'
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
        return shifts::class;
    }
}
