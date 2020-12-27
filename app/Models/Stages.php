<?php
 namespace App\Models;
 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;
 class Stages extends Model
 {
     protected $table = 'stages' ;
     protected $fillable = [
     'nom_entreprise',
     'profil_demande',
     'duree_stage',
     'message' ,
     'fichier' ,
    ];
 }