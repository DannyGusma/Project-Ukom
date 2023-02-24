<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PenggunaModel extends Model
{
    use HasFactory;

    protected $table = 'pengguna';
    // nama PK
    protected $primaryKey = 'id_pengguna';
    // agar timestamps tidak otomatis masuk
    public $timestamps = false;
    // PK integer AI
    public $incrementing = true;

    protected $fillable = ['id_level', 'username', 'email', 'password', 'foto'];

    public function LevelUser(): BelongsTo
    {
        return $this->belongsTo(LevelUser::class, 'id_level', 'id_level');
    }

    public function Kepsek(): HasMany
    {
        return $this->hasMany(Manajemen::class, 'id_pengguna', 'id_pengguna');
    }

    public function Admin(): HasMany
    {
        return $this->hasMany(AdminModel::class, 'id_pengguna', 'id_pengguna');
    }

}
