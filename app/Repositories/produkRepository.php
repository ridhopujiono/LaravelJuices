<?php

namespace App\Repositories;

use App\Models\produk;
use App\Repositories\BaseRepository;

/**
 * Class produkRepository
 * @package App\Repositories
 * @version July 27, 2022, 4:02 am UTC
*/

class produkRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_barang',
        'harga',
        'keterangan',
        'foto'
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
        return produk::class;
    }
}
