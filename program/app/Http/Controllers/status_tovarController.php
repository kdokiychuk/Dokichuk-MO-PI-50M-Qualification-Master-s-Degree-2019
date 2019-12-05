<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App;

class status_tovarController extends Controller
{
    public function view()
    {
        $masRoleWorker = App\status_tovarModel::all();
        return view('admin.status_tovar.view',[
            'masRoleWorker' => $masRoleWorker
        ]);
    }
    public function edit($id_role_worker)
    {
        $masRoleWorkerOne = App\status_tovarModel::find($id_role_worker);
        return view('admin.status_tovar.edit',[
            'masRoleWorkerOne' => $masRoleWorkerOne
        ]);
    }
    public function editRecord(Request $request, $id_role_worker)
    {
        $changeRecord =  App\status_tovarModel::find($id_role_worker);
        $changeRecord->name_status_tovara = $request->name_status_tovara;
        $changeRecord->save();

        return redirect('admin/status_tovar/view');
    }
    public function create()
    {
        $masRoleWorkerLast = App\status_tovarModel::all()->last();

        return view('admin.status_tovar.create',[
            'masRoleWorkerLast' => $masRoleWorkerLast
        ]);
    }
    public function createRecord(Request $request)
    {
        /* $validator = Validator::make($request->all(),[
            'name_status_tovara' => '|required|name_status_tovara'
         ]);
         if($validator->fails()){
             return redirect('admin/status_tovar/view')->withInput()->withErrors($validator);
         }*/

        $createRecord = new App\status_tovarModel;
        $createRecord->name_status_tovara = $request->name_status_tovara;
        $createRecord->save();
        return redirect('admin/status_tovar/view');
    }
    public function delete($id_role_worker)
    {
        App\status_tovarModel::destroy($id_role_worker);
        return redirect('admin/status_tovar/view');
    }
}
