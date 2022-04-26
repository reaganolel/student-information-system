<?php

namespace App\Repositories;

use App\Models\batches;
use App\Repositories\BaseRepository;

/**
 * Class batchesRepository
 * @package App\Repositories
 * @version April 26, 2022, 2:38 pm UTC
*/

class batchesRepository extends BaseRepository
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
        return batches::class;
    }
}
