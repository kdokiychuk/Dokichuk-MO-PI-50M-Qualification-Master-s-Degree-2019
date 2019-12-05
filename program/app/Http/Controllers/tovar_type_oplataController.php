<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App;

class tovar_type_oplataController extends Controller
{
    public function view()
    {
        $masRoleWorker = App\tovar_type_oplataModel::all();
        return view('admin.tovar_type_oplata.view',[
            'masRoleWorker' => $masRoleWorker
        ]);
    }
    public function edit($id_role_worker)
    {
        $masRoleWorkerOne = App\tovar_type_oplataModel::find($id_role_worker);
        return view('admin.tovar_type_oplata.edit',[
            'masRoleWorkerOne' => $masRoleWorkerOne
        ]);
    }
    public function editRecord(Request $request, $id_role_worker)
    {
        $changeRecord =  App\tovar_type_oplataModel::find($id_role_worker);
        $changeRecord->name_type_oplata_tovar = $request->name_type_oplata_tovar;
        $changeRecord->save();

        return redirect('admin/tovar_type_oplata/view');
    }
    public function create()
    {
        $masRoleWorkerLast = App\tovar_type_oplataModel::all()->last();

        return view('admin.tovar_type_oplata.create',[
            'masRoleWorkerLast' => $masRoleWorkerLast
        ]);
    }
    public function createRecord(Request $request)
    {
        /* $validator = Validator::make($request->all(),[
            'name_type_oplata_tovar' => '|required|name_type_oplata_tovar'
         ]);
         if($validator->fails()){
             return redirect('admin/tovar_type_oplata/view')->withInput()->withErrors($validator);
         }*/

        $createRecord = new App\tovar_type_oplataModel;
        $createRecord->name_type_oplata_tovar = $request->name_type_oplata_tovar;
        $createRecord->save();
        return redirect('admin/tovar_type_oplata/view');
    }
    public function delete($id_role_worker)
    {
        App\tovar_type_oplataModel::destroy($id_role_worker);
        return redirect('admin/tovar_type_oplata/view');
    }
}
