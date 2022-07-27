<?php

namespace App\Repositories;

use App\Models\barang;
use App\Repositories\BaseRepository;

/**
 * Class barangRepository
 * @package App\Repositories
 * @version July 27, 2022, 3:49 am UTC
*/

class barangRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_barang'
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
        return barang::class;
    }
}
