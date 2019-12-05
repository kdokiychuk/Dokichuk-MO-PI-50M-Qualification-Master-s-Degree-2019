<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App;

class workerController extends Controller
{
    public function view()
    {
        $masRoleWorker = App\workerModel::paginate(10);
        $coutFroPag =  App\workerModel::all()->count();
        return view('admin.worker.view',[
            'masRoleWorker' => $masRoleWorker,
            'coutFroPag' => $coutFroPag
        ]);
    }
    public function edit($id_role_worker)
    {
        $masRoleWorkerOne = App\workerModel::find($id_role_worker);
        $users  = App\User::all();
        $role_worker  = App\role_workerModel::all();
        $viddilennya  = App\viddilenyaModel::all();
        return view('admin.worker.edit',[
            'masRoleWorkerOne' => $masRoleWorkerOne,
            'role_worker' => $role_worker,
            'users' => $users,
            'viddilennya' => $viddilennya
        ]);
    }
    public function editRecord(Request $request, $id_role_worker)
    {
        $changeRecord =  App\workerModel::find($id_role_worker);
        $changeRecord->id_users = $request->id_users;
        $changeRecord->pasport_worker = $request->pasport_worker;
        $changeRecord->id_viddilennya = $request->id_viddilennya;
        $changeRecord->id_role_worker = $request->id_role_worker;
        $changeRecord->save();

        return redirect('admin/worker/view');
    }
    public function create()
    {
        $masRoleWorkerLast = App\workerModel::all()->last();
        $users  = App\User::all();
        $role_worker  = App\role_workerModel::all();
        $viddilennya  = App\viddilenyaModel::all();

        return view('admin.worker.create',[
            'masRoleWorkerLast' => $masRoleWorkerLast,
            'role_worker' => $role_worker,
            'users' => $users,
            'viddilennya' => $viddilennya
        ]);
    }
    public function createRecord(Request $request)
    {
        $createRecord = new App\workerModel;
        $createRecord->id_users = $request->id_users;
        $createRecord->pasport_worker = $request->pasport_worker;
        $createRecord->id_viddilennya = $request->id_viddilennya;
        $createRecord->id_role_worker = $request->id_role_worker;
        $createRecord->save();
        return redirect('admin/worker/view');
    }
    public function delete($id_role_worker)
    {
        App\workerModel::destroy($id_role_worker);
        return redirect('admin/worker/view');
    }
    public function search(Request $request)
    {
        $nameVid = $request->searcFile;
        $coutFroPag =  App\workerModel::all()->where('id_tovar', $nameVid)->count();
        $masRoleWorker = App\workerModel::all()->where('id_tovar', $nameVid);
        return view('admin.worker.view',[
            'masRoleWorker' => $masRoleWorker,
            'coutFroPag' => $coutFroPag
        ]);
    }
}
