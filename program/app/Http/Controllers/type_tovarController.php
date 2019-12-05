<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App;

class type_tovarController extends Controller
{
    public function view()
    {
        $masRoleWorker = App\type_tovarModel::all();
        return view('admin.tovar_type_tovar.view',[
            'masRoleWorker' => $masRoleWorker
        ]);
    }
    public function edit($id_role_worker)
    {
        $masRoleWorkerOne = App\type_tovarModel::find($id_role_worker);
        return view('admin.tovar_type_tovar.edit',[
            'masRoleWorkerOne' => $masRoleWorkerOne
        ]);
    }
    public function editRecord(Request $request, $id_role_worker)
    {
        $changeRecord =  App\type_tovarModel::find($id_role_worker);
        $changeRecord->name_type_tovar = $request->name_type_tovar;
        $changeRecord->save();

        return redirect('admin/tovar_type_tovar/view');
    }
    public function create()
    {
        $masRoleWorkerLast = App\type_tovarModel::all()->last();

        return view('admin.tovar_type_tovar.create',[
            'masRoleWorkerLast' => $masRoleWorkerLast
        ]);
    }
    public function createRecord(Request $request)
    {
        /* $validator = Validator::make($request->all(),[
            'name_type_tovar' => '|required|name_type_tovar'
         ]);
         if($validator->fails()){
             return redirect('admin/tovar_type_tovar/view')->withInput()->withErrors($validator);
         }*/

        $createRecord = new App\type_tovarModel;
        $createRecord->name_type_tovar = $request->name_type_tovar;
        $createRecord->save();
        return redirect('admin/tovar_type_tovar/view');
    }
    public function delete($id_role_worker)
    {
        App\type_tovarModel::destroy($id_role_worker);
        return redirect('admin/tovar_type_tovar/view');
    }
}
