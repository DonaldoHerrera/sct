<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'rfc',
        'rep_legal',
        'entidad',
        'tipo_empresa',
        'c_mic',
        'fecha_creacion',
        'domicilio_fiscal',
        'accionistas',
        'contacto',
        'experiencia',
        'empresas_relacion',
        'is_active',
        'date_delete',
        'invitacion',
        'contrato'

    ];

    public function getWithStatus($status = true)
    {

        if($status == null) { $status = true; }

        return $this->where('is_active',$status)
            ->select('id','nombre','rfc','rep_legal','entidad','contacto','invitacion','contrato','experiencia')
            ->orderBy('id','desc');
    }

    public function add($empresa)
    {
        return Empresa::create($empresa);
    }
    public function getWithId($empresaId)
    {
        return $this->findOrFail($empresaId);
    }
    public function edit($empresa)
    {
        return $this->fill($empresa)->save();
    }

    public function scopeLike($query,$request) {
        return $query->likeNameEmpresa($request)->likeRepLegal($request)->likeExperiencia($request)->likeInvitacion($request)->likeContrato($request);
    }

    public function scopeLikeNameEmpresa($query,$request) {
        if($request->nombre){
            return $query->where('nombre','LIKE',"%{$request->nombre}%");
        }
        return;   
    }

    public function scopeLikeRepLegal($query,$request) {
        if($request->rep_legal) {
            return $query->orWhere('rep_legal','LIKE',"%{$request->rep_legal}%");
        }
        return ;
    }

    public function scopeLikeExperiencia($query,$request) {
        if($request->experiencia) {
            return $query->orWhere('experiencia','LIKE',"%{$request->experiencia}%");
        }
        return ;
    }

    public function scopeLikeInvitacion($query,$request) {
        if($request->invitacion) {
            return $query->orWhere('invitacion','LIKE',"%{$request->invitacion}%");
        }
        return ;
    }
    
    public function scopeLikeContrato($query,$request) {
        if($request->contrato) {
            return $query->orWhere('contrato','LIKE',"%{$request->contrato}%");
        }
        return ;
    }

}
