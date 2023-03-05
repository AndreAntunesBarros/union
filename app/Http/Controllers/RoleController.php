<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Resource;
use App\Models\Tabela;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       /* if(Gate::denies('roles.index')){
            return dd('nao tenho autorizacao');
        }*/
      //$users = User::paginate(15);
      

        
      $roles=  Role::paginate(15);
        
      return view('role.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   $tabelas =   Tabela::all();
        $resources =    Resource::all();
        return view('role.create',compact('resources','tabelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
       
        try {
           
            $dados          =   $request->all();
            $role           =   Role::create($dados);
            $role->resources()->syncWithoutDetaching($request->resource_id);
            flash('Função cadastrada com uscesso')->success();
            return redirect()->back();

        } catch (\Throwable $th) {
            $message    =   env('APP_DEBUG') ? $th->getMessage() : 'Erro ao processar sau requisicao!';
            flash($message)->success();
          
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role      =    Role::findOrfail($id);
        $resource  = new Resource();
        $tabelas =   Tabela::all();
        $resources_list =     $resource->all();
        
      
      

       

        return view('role.edit', compact('role', 'resources_list','tabelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
           $role    =   Role::find($id);
           $dados   =   $request->all();
          
           //verifi se veio algum valor dos campos checkbox, senao atribui um array vazio para o campo 
           if(isset($dados['resource_id'])){
                 $resources_id = $dados['resource_id'];
           }else{
                $resources_id =[];
           }
          
          
            
           $role->update($dados);
           $role->resources()->sync($resources_id);
           
           return redirect()->back();

        } catch (\Throwable $th) {

           
            $message    =   env('APP_DEBUG') ? $th->getMessage() : 'Erro ao processar sau requisicao!';
            dd($message );
            //flash($message)->warning();
            return redirect()->back();
            //throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
