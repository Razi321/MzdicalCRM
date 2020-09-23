<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiche extends Model
{
    use HasFactory;

    protected $tabel ='fiches';
    //primary key
    public $primarykey ='id';
    //timestamps
    public $timestamps =true ;

    public function clients(){
        return $this->belongsTo('App\Models\Client','client_id');
    }

    public function services(){
        return $this->belongsTo('App\Models\Service','service_id');
    }
}
