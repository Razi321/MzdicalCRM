<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;


    protected $tabel ='services';
    //primary key
    public $primarykey ='id';
    //timestamps
    public $timestamps =true ;
}
