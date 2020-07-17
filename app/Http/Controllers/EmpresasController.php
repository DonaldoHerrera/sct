<?php

namespace App\Http\Controllers;

use App\Http\Repositorios\EmpresaRepository;
use App\Http\Requests\EmpresaStoreRequest;
use App\Imports\EmpresasImport;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade as PDF;

class EmpresasController extends Controller
{

    public function __construct()
    {
        $this->middleware('user_rols')->only(['create','store','edit','update','delete','import']);
    }

    public function index(Request $request, EmpresaRepository $empresaRepository)
    {
        $empresas = null;
        if($request->like == 1) {
            
            $empresas = Empresa::like($request)->select('id','nombre','rfc','rep_legal','entidad','contacto','invitacion','contrato','experiencia')
            ->orderBy('id','desc')->get();
        }else{
            $empresas = $empresaRepository->getAll($request->status)->get();
        }
       
        return view('empresas.index',compact('empresas'));
    }
    public function create()
    {
        $empresa = new Empresa();
        return view('empresas.create',compact('empresa'));
    }
    public function store(EmpresaStoreRequest $request, EmpresaRepository $empresaRepository)
    {
        try {

            $empresa = $empresaRepository->add($request->all());

            if($request->hasFile('cv')) {
                $file = $request->file('cv');
                $cvName  = 'cv_empresa_'.$empresa->id.'.pdf';
                $path = public_path().'/cvs/';
                $file->move($path,$cvName);

                $empresa->url_cv = 'cvs/'.$cvName;
                $empresa->save();
            }

            return redirect('empresas');

        }catch (\Exception $e) {
            dd($e);
        }
    }
    public function import(Request $request)
    {
        try {
            
                        
            Excel::import(new EmpresasImport, $request->file('file-import'));
            
            return redirect('/empresas');
        
        }catch (\Exception $e) {
            dd($e);
        }

    }
    public function show(Request $request,$id)
    {   
        $pdfLoad = $request->pdf;

        $empresa = Empresa::findOrFail($id);
        if ($pdfLoad) {
            $pdf = \PDF::loadView('pdf-empresa', compact('empresa'));
            return $pdf->download('empresa-detalle.pdf');
        }

        return view('empresas.show',compact('empresa'));
    }
    public function edit($id)
    {
        $empresa = Empresa::findOrFail($id);
        return view('empresas.edit',compact('empresa'));
    }
    public function update(Request $request, $id,EmpresaRepository $empresaRepository)
    {
        try {
            $empresa = $empresaRepository->getWithId($id);
            $empresaRepository->setEmpresa($empresa);
            $empresaRepository->edit($request->all());

            if($request->hasFile('cv')) {
                //eliminar archivo existente CV.pdf
                if($empresa->url_cv) {
                    Storage::delete($empresa->url_cv);
                }
                $file = $request->file('cv');
                $cvName  = 'cv_empresa_'.$empresa->id.'.pdf';
                $path = public_path().'/cvs/';
                //almacenar nuevo archivo
                $file->move($path,$cvName);

                //actualizar la ruta del nuevo archivo de la base de datos
                $empresa->url_cv = 'cvs/'.$cvName;
                $empresa->save();
            }
            return redirect('/empresas/'.$id);
        }catch (\Exception $e) {
            dd($e);
        }
    }
    public function destroy($id)
    {
        //
    }
}
