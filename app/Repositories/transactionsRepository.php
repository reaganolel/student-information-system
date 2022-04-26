<?php

namespace App\Repositories;

use App\Models\transactions;
use App\Repositories\BaseRepository;

/**
 * Class transactionsRepository
 * @package App\Repositories
 * @version April 26, 2022, 4:25 pm UTC
*/

class transactionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_id',
        'fee_id',
        'user_id',
        'paid',
        'transaction_date',
        'remarks',
        'description'
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
        return transactions::class;
    }
}
