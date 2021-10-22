<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use JamesDordoy\LaravelVueDatatable\Traits\LaravelVueDatatableTrait;
use Carbon\Carbon;
use App\Traits\MyTrait;

class Division extends Model
{
    use MyTrait;
    protected $fillable = [
        'nombre',
        'Dsup_id',
        'nombre_Dsup',
        'num_subd',
        'nivel',
        'cantidad',
        'embajador',
        'estado'
    ];

    public static function boot()
	{   parent::boot();
		static::saving(function ($model) {
            $model->nombre = $model->setCapitalize('nombre',$model->nombre);
            $model->nombre_Dsup = $model->setCapitalize('nombre_Dsup',$model->nombre_Dsup);
            $model->embajador = $model->setCapitalize('embajador',$model->embajador); 
        });
	}
}
