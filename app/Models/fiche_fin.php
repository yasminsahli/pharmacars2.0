<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fiche_fin extends Model
{
    use HasFactory;
    protected $table = 'Fiche_Fin_Utilisation';
    protected $primaryKey = 'FICHEId';
    public $incrementing = false;
    protected $connection = 'mysql';
    protected $keyType = 'int';
    public function Fiche_Fin_Utilisation() {
        return $this->hasMany(fiche_fin::class, 'FICHEId', 'FICHEId');
    }
}
