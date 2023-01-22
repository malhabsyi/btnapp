<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atm extends Model
{
    use HasFactory;
    protected $fillable = [
        'atm_id',
        'atm_location',
        'outlet_id',
        'kantor_cabang_id',
        'atm_deadline',
        'atm_note',
        'atm_status'
    ];
    public function outlet()
    {
        return $this->belongsTo(OutletBtn::class,'outlet_id');
    }
    public function itematm()
    {
        return $this->hasMany(ItemAtm::class);
    }
}
