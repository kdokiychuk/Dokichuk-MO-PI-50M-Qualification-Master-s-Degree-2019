<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App;

class tovar_type_dostavkaController extends Controller
{
    public function view()
    {
        $masRoleWorker = App\type_dostavkaModel::all();
        return view('admin.tovar_type_dostavka.view',[
            'masRoleWorker' => $masRoleWorker
        ]);
    }
    public function edit($id_role_worker)
    {
        $masRoleWorkerOne = App\type_dostavkaModel::find($id_role_worker);
        return view('admin.tovar_type_dostavka.edit',[
            'masRoleWorkerOne' => $masRoleWorkerOne
        ]);
    }
    public function editRecord(Request $request, $id_role_worker)
    {
        $changeRecord =  App\type_dostavkaModel::find($id_role_worker);
        $changeRecord->name_type_dostavka = $request->name_type_dostavka;
        $changeRecord->save();

        return redirect('admin/tovar_type_dostavka/view');
    }
    public function create()
    {
        $masRoleWorkerLast = App\type_dostavkaModel::all()->last();

        return view('admin.tovar_type_dostavka.create',[
            'masRoleWorkerLast' => $masRoleWorkerLast
        ]);
    }
    public function createRecord(Request $request)
    {
        /* $validator = Validator::make($request->all(),[
            'name_type_dostavka' => '|required|name_type_dostavka'
         ]);
         if($validator->fails()){
             return redirect('admin/tovar_type_dostavka/view')->withInput()->withErrors($validator);
         }*/

        $createRecord = new App\type_dostavkaModel;
        $createRecord->name_type_dostavka = $request->name_type_dostavka;
        $createRecord->save();
        return redirect('admin/tovar_type_dostavka/view');
    }
    public function delete($id_role_worker)
    {
        App\type_dostavkaModel::destroy($id_role_worker);
        return redirect('admin/tovar_type_dostavka/view');
    }
}
