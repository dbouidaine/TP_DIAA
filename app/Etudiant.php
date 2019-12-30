<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*!
	* La classe contient la table 'etudiants'
*/

class Etudiant extends Model
{
    protected $table = 'etudiants';

    public $timestamps = false;
}
