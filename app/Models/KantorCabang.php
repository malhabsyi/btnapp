<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KantorCabang extends Model
{
    use HasFactory;
    protected $fillable = [
        'kantor_cabang_id',
        'kantor_cabang_name',
        'kantor_cabang_location',
    ];
    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function outlet()
    {
        return $this->hasMany(OutletBtn::class);
    }
    public function atm()
    {
        return $this->hasMany(Atm::class);
    }
}
