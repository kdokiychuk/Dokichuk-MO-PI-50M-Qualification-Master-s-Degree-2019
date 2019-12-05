<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App;

class userController extends Controller
{
    public function view()
    {
        $allTovars = App\User::all()->count();
        $masRoleWorker = App\User::paginate(10);
        $coutFroPag =  App\User::all()->count();

        return view('admin.users.view',[
            'masRoleWorker' => $masRoleWorker,
            'coutFroPag' => $coutFroPag,
            'allTovars' => $allTovars
        ]);
    }
    public function edit($id_role_worker)
    {
        $masRoleWorkerOne = App\User::find($id_role_worker);


        return view('admin.users.edit',[
            'masRoleWorkerOne' => $masRoleWorkerOne
        ]);
    }
    public function editRecord(Request $request, $id_role_worker)
    {
        $changeRecord =  App\User::find($id_role_worker);
        $changeRecord->name_users = $request->name_users;
        $changeRecord->surname_users = $request->surname_users;
        $changeRecord->phone_users = $request->phone_users;
        $changeRecord->address_users = $request->address_users;
        $changeRecord->email = $request->email;
        $changeRecord->password = $request->password;
        $changeRecord->save();

        return redirect('admin/users/view');
    }
    public function create()
    {
        $masRoleWorkerLast = App\User::all()->last();

        return view('admin.users.create',[
            'masRoleWorkerLast' => $masRoleWorkerLast
        ]);
    }
    public function createRecord(Request $request)
    {
        $createRecord = new App\User;
        $createRecord->name_users = $request->name_users;
        $createRecord->surname_users = $request->surname_users;
        $createRecord->phone_users = $request->phone_users;
        $createRecord->address_users = $request->address_users;
        $createRecord->email = $request->email;
        $createRecord->password = $request->password;
        $createRecord->save();
        return redirect('admin/users/view');
    }
    public function delete($id_role_worker)
    {
        App\User::destroy($id_role_worker);
        return redirect('admin/users/view');
    }
    public function search(Request $request)
    {
        $nameVid = $request->searcFile;
        $masRoleWorker = App\User::paginate(10)->where('phone_users', $nameVid);
        $coutFroPag =  App\User::all()->where('phone_users', $nameVid)->count();
        return view('admin.users.view',[
            'masRoleWorker' => $masRoleWorker,
            'coutFroPag' => $coutFroPag
        ]);
    }
}
