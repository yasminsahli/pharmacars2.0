<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicule extends Model
{
    use HasFactory;
    protected $table = 'Vehicule';
    protected $primaryKey = 'VEHId';
    public $incrementing = false;
    protected $connection = 'mysql';
    protected $keyType = 'int';
    public function Vehicule() {

        return $this->hasMany(vehicule::class, 'VEHId', 'VEHId');
    }
}
