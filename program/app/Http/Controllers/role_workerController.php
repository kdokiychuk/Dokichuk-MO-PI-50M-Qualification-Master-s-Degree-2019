<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App;

class role_workerController extends Controller
{
    public function view()
    {
        $masRoleWorker = App\role_workerModel::all();
        return view('admin.role_worker.view',[
            'masRoleWorker' => $masRoleWorker
        ]);
    }
    public function edit($id_role_worker)
    {
        $masRoleWorkerOne = App\role_workerModel::find($id_role_worker);
        return view('admin.role_worker.edit',[
            'masRoleWorkerOne' => $masRoleWorkerOne
        ]);
    }
    public function editRecord(Request $request, $id_role_worker)
    {
        $changeRecord =  App\role_workerModel::find($id_role_worker);
        $changeRecord->name_role_worker = $request->name_role_worker;
        $changeRecord->save();

        return redirect('admin/role_worker/view');
    }
    public function create()
    {
        $masRoleWorkerLast = App\role_workerModel::all()->last();

        return view('admin.role_worker.create',[
            'masRoleWorkerLast' => $masRoleWorkerLast
        ]);
    }
    public function createRecord(Request $request)
    {
       /* $validator = Validator::make($request->all(),[
           'name_role_worker' => '|required|name_role_worker'
        ]);
        if($validator->fails()){
            return redirect('admin/role_worker/view')->withInput()->withErrors($validator);
        }*/

        $createRecord = new App\role_workerModel;
        $createRecord->name_role_worker = $request->name_role_worker;
        $createRecord->save();
        return redirect('admin/role_worker/view');
    }
    public function delete($id_role_worker)
    {
        App\role_workerModel::destroy($id_role_worker);
        return redirect('admin/role_worker/view');
    }

}
