<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
    use HasFactory;

    protected $primaryKey = "idCluster";

    protected $fillable = [
        "nom",
        "idFiliere",
        "idVillage",
    ];

    public function filiere()
    {
        return $this->belongsTo(Filiere::class, "idFiliere", "idFiliere");
    }

    public function village()
    {
        return $this->belongsTo(Village::class, "idVillage", "idVillage");
    }
}
