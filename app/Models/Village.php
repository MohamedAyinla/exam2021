<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;

    protected $primaryKey = "idVillage";

    protected $fillable = [
        "nom",
    ];

    public function arrondissement() {
        return $this->belongsTo(Arrondissement::class, "idArrondissement", "idArrondissement");
    }
}
