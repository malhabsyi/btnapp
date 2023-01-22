<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutletBtn extends Model
{
    use HasFactory;
    protected $fillable = [
        'outlet_id',
        'outlet_name',
        'outlet_status',
        'outlet_location',
        'outlet_deadline',
        'kantor_cabang_id',

    ];

    public function kantorcabang()
    {
        return $this->belongsTo(KantorCabang::class,'kantor_cabang_id');
    }
    public function itemoutlet()
    {
        return $this->hasMany(ItemOutlet::class);
    }
    public function atm()
    {
        return $this->hasMany(Atm::class);
    }

}
