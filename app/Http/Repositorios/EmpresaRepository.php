<?php


namespace App\Http\Repositorios;


use App\Models\Empresa;

class EmpresaRepository
{
    public function __construct()
    {
        $this->empresa = new Empresa();
    }
    public function getAll($status)
    {
        return $this->empresa->getWithStatus($status);
    }
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
    }
    public function add($empresa)
    {
        return $this->empresa->add($empresa);
    }
    public function getWithId($empresaId)
    {
        return $this->empresa->getWithId($empresaId);
    }
    public function edit($empresa)
    {
        return $this->empresa->edit($empresa);
    }
}
