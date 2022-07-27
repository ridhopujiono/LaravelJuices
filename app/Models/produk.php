<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class produk
 * @package App\Models
 * @version July 27, 2022, 4:02 am UTC
 *
 * @property string $nama_barang
 * @property string $harga
 * @property body $keterangan
 * @property string $foto
 */
class produk extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'produks';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_barang',
        'harga',
        'keterangan',
        'foto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama_barang' => 'string',
        'harga' => 'string',
        'foto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_barang' => 'required',
        'harga' => 'required',
        'keterangan' => 'required',
        'foto' => 'required'
    ];

    
}
