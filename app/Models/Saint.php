<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saint extends Model
{
    use HasFactory;

    public $name;
    public $luogo_di_nascita;
    public $data_denedizione;
    public $numero_miracoli;
    
}
