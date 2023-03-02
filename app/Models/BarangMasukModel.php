<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BarangMasukModel extends Model
{
    use HasFactory;

    protected $table = 'barangmasuk';
    // nama PK
    protected $primaryKey = 'id_barang_masuk';
    // agar timestamps tidak otomatis masuk
    public $timestamps = false;
    // PK integer AI
    public $incrementing = true;

    protected $fillable = ['supplier', 'adder', 'nama_barang', 'jml_masuk', 'tgl_masuk', ];


    public function Supplier(): BelongsTo
    {
        return $this->belongsTo(SupplierModel::class, 'id_supplier', 'id_supplier');
    }

    

}
