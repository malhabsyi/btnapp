<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemAtm extends Model
{
    use HasFactory;
    protected $fillable = [
        'itematm_id',
        'itematm_name',
        'atm_id',
        'itematm_note',
        'itematm_image',
    ];
    public function atm()
    {
        return $this->belongsTo(Atm::class,'atm_id');
    }
    public function itematm()
    {
        return $this->hasMany(PenliaianItemAtm::class);
    }
}
