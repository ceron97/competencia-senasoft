<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursales extends Model
{
    use HasFactory;

    public function empresa()
    {
        return $this->belongsTo(Empresas::class, 'id_empresa');
    }

    public function municipio()
    {
        return $this->belongsTo(Municipios::class, 'id_municipio');
    }

    public function departamento()
    {
        return $this->belongsTo(Departamentos::class, 'id_departamento');
    }
}
