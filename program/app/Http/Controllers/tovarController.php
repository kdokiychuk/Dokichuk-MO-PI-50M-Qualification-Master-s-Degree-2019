<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App;

class tovarController extends Controller
{
    public function view()
    {
        //$masRoleWorker = App\tovarModel::all();
        $allTovars = App\tovarModel::all()->count();
        $masRoleWorker = App\tovarModel::paginate(10);
        $coutFroPag =  App\tovarModel::all()->count();
        $masVidl = App\tovarModel::join('viddilenya', 'id_viddilenya', '=', 'viddilenya.id_viddilenya')
            ->select('name_viddilenya');
        return view('admin.tovar.view',[
            'masRoleWorker' => $masRoleWorker,
            'allTovars' => $allTovars,
            'coutFroPag' => $coutFroPag,
            'masVidl' => $masVidl

        ]);
    }
    public function edit($id_role_worker)
    {
        $masRoleWorkerOne = App\tovarModel::find($id_role_worker);
        $viddilennya  = App\viddilenyaModel::all();
        $users  = App\User::all();
        $status_tovara  = App\status_tovarModel::all();
        $worker  = App\workerModel::all();
        $type_dostavka  = App\type_dostavkaModel::all();
        $type_tovar  = App\type_tovarModel::all();
        $tovar_type_oplata  = App\tovar_type_oplataModel::all();

        return view('admin.tovar.edit',[
            'viddilennya' => $viddilennya,
            'masRoleWorkerOne' => $masRoleWorkerOne,
            'status_tovara' => $status_tovara,
            'users' => $users,
            'worker' => $worker,
            'type_dostavka' => $type_dostavka,
            'type_tovar' => $type_tovar,
            'tovar_type_oplata' => $tovar_type_oplata,
        ]);
    }
    public function editRecord(Request $request, $id_role_worker)
    {
        $changeRecord =  App\tovarModel::find($id_role_worker);
        $changeRecord->id_viddilenya = $request->id_viddilenya;
        $changeRecord->id_viddilenya_otrumuvach = $request->id_viddilenya_otrumuvach;
        $changeRecord->id_vidpravlyvach = $request->id_vidpravlyvach;
        $changeRecord->id_otrumyvach = $request->id_otrumyvach;
        $changeRecord->data_vidpravlennya = $request->data_vidpravlennya;
        $changeRecord->data_otrumannya = $request->data_otrumannya;
        $changeRecord->id_worker = $request->id_worker;
        $changeRecord->id_status_tovara = $request->id_status_tovara;
        $changeRecord->id_type_dostavka = $request->id_type_dostavka;
        $changeRecord->id_type_tovar = $request->id_type_tovar;
        $changeRecord->name_address = $request->name_address;
        $changeRecord->id_type_oplata_tovar = $request->id_type_oplata_tovar;
        $changeRecord->price = $request->price;
        $changeRecord->save();

        return redirect('admin/tovar/view');
    }
    public function create()
    {
        $masRoleWorkerLast = App\tovarModel::all()->last();
        $viddilennya  = App\viddilenyaModel::all();
        $users  = App\User::all();
        $status_tovara  = App\status_tovarModel::all();
        $worker  = App\workerModel::all();
        $type_dostavka  = App\type_dostavkaModel::all();
        $type_tovar  = App\type_tovarModel::all();
        $tovar_type_oplata  = App\tovar_type_oplataModel::all();

        return view('admin.tovar.create',[
            'masRoleWorkerLast' => $masRoleWorkerLast,
            'viddilennya' => $viddilennya,
            'status_tovara' => $status_tovara,
            'users' => $users,
            'worker' => $worker,
            'type_dostavka' => $type_dostavka,
            'type_tovar' => $type_tovar,
            'tovar_type_oplata' => $tovar_type_oplata,
        ]);
    }
    public function createRecord(Request $request)
    {
        $createRecord = new App\tovarModel;
        $createRecord->id_viddilenya = $request->id_viddilenya;
        $createRecord->id_viddilenya_otrumuvach = $request->id_viddilenya_otrumuvach;
        $createRecord->id_vidpravlyvach = $request->id_vidpravlyvach;
        $createRecord->id_otrumyvach = $request->id_otrumyvach;
        $createRecord->data_vidpravlennya = $request->data_vidpravlennya;
        $createRecord->data_otrumannya = $request->data_otrumannya;
        $createRecord->id_worker = $request->id_worker;
        $createRecord->id_status_tovara = $request->id_status_tovara;
        $createRecord->id_type_dostavka = $request->id_type_dostavka;
        $createRecord->name_address = $request->name_address;
        $createRecord->id_type_tovar = $request->id_type_tovar;
        $createRecord->id_type_oplata_tovar = $request->id_type_oplata_tovar;
        $createRecord->price = $request->price;
        $createRecord->save();
        return redirect('admin/tovar/view');
    }
    public function delete($id_role_worker)
    {
        App\tovarModel::destroy($id_role_worker);
        return redirect('admin/tovar/view');
    }
    public function search(Request $request)
    {
        $allTovars = App\tovarModel::all()->count();
        $nameVid = $request->searcFile;
        $coutFroPag =  App\tovarModel::all()->where('id_tovar', $nameVid)->count();
        $masRoleWorker = App\tovarModel::all()->where('id_tovar', $nameVid);
        return view('admin.tovar.view',[
            'masRoleWorker' => $masRoleWorker,
            'coutFroPag' => $coutFroPag,
            'allTovars' => $allTovars
        ]);
    }
}
