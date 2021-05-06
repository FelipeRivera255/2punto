<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $table = 'animal';
    protected $fillable=[
    'Nombre',
    'Especie',
    'Raza'];
    protected $hidden=['created_at','updated_at'];
}
