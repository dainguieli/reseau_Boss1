<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tache_user extends Model
{
    protected $table = 'tache_user'; // Nom de la table de liaison
    protected $fillable = [
        'tache_id',
        'user_id',
 
    ];
    // Relation avec le modèle Tache
    public function taches()
    {
        return $this->belongsToMany(Tache::class, 'tache_user', 'user_id', 'tache_id');
    }

    // Relation avec le modèle User
    public function users()
    {
        return $this->belongsToMany(User::class, 'tache_user', 'tache_id', 'user_id');
    }
}
