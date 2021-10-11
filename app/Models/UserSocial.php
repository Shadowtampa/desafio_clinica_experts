<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSocial extends Model
{
    use HasFactory;

    public $timestamps = FALSE;
    
    protected $fillable = [
        'id_user', 
        'id_estabelecimento'
    ];
}
