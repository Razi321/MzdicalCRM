<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

     //table name
 protected $tabel ='clients';
 //primary key
 public $primarykey ='id';
 //timestamps
 public $timestamps =true ;

 public function fiches()
    {
        return $this->hasMany('App\Models\Fiche','client_id','id');
    }

}
