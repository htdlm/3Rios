<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table = 'loc';

    protected $fillable = ['CliId', 'DesLoc', 'IndLoc', 'NomLoc', 'ConLoc', 'DirLoc', 'ConLoc', 'DirLoc', 'TelLoc', 'NexLoc', 'EmaLoc', 'RfcLoc', 'DisLoc', 'ObsLoc'];

    protected $primaryKey = 'LocId';

    /* Una localidad pertenece a un cliente*/
    public function cliente()
    {
        return $this->belongsTo(Cliente::class,'CliId');
    }

    /*Una localidad tiene asiganda una tarifa*/
    public function tarifa()
    {
      return $this->hasOne(Tarifa::class,'LocId');
    }

    /* Hay una relacion de moviemientos
a localidades, pero creo que no es
necesaria marcarla aqui*/
}
