<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    public function classe()
    {
        // pour une relation OneToMeny
        return $this->belongsTo(Classe::class);
    }
    public function profilEtudiant()
    {
        return asset('storage/imageprofils', $this->photoProfil);
    }
}
