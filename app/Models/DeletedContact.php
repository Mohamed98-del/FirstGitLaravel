<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class DeletedContact extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'num'
    ];
}
