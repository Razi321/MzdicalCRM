<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $tabel ='stock';
    //primary key
    public $primarykey ='id';
    //timestamps
    public $timestamps =true ;
}
