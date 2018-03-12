<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meni extends Model
{
    //
    protected $table = 'menis';

  //  public $primarykey = 'id';

    public $timestamps = true;

    protected $fillable = [
       'naziv', 'cijena', 'sastojci', 'link'
   ];
}
