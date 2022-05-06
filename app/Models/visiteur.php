<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visiteur extends Model
{
    use HasFactory;
    protected $table = 'Visiteur';
    protected $primaryKey = 'VISITId';
    public $incrementing = false;
    protected $connection = 'mysql';
    protected $keyType = 'int';
    public function Visiteur() {

        return $this->hasMany(visiteur::class, 'VISITId', 'VISITId');
    }
}
