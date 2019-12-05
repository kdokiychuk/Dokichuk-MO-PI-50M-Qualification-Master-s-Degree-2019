<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App;

class viddilenyaController extends Controller
{
    public function view()
    {
        $masRoleWorker = App\viddilenyaModel::paginate(10);
        $coutFroPag =  App\viddilenyaModel::all()->count();
        return view('admin.viddilenya.view',[
            'masRoleWorker' => $masRoleWorker,
            'coutFroPag' => $coutFroPag
        ]);
    }
    public function edit($id_role_worker)
    {
        $masRoleWorkerOne = App\viddilenyaModel::find($id_role_worker);
        return view('admin.viddilenya.edit',[
            'masRoleWorkerOne' => $masRoleWorkerOne
        ]);
    }
    public function editRecord(Request $request, $id_role_worker)
    {
        $changeRecord =  App\viddilenyaModel::find($id_role_worker);
        $changeRecord->name_viddilenya = $request->name_viddilenya;
        $changeRecord->address_viddilenya = $request->address_viddilenya;
        $changeRecord->city_viddilenya = $request->city_viddilenya;
        $changeRecord->chas_robotu_viddilenya = $request->chas_robotu_viddilenya;
        $changeRecord->save();

        return redirect('admin/viddilenya/view');
    }
    public function create()
    {
        $masRoleWorkerLast = App\viddilenyaModel::all()->last();

        return view('admin.viddilenya.create',[
            'masRoleWorkerLast' => $masRoleWorkerLast
        ]);
    }
    public function createRecord(Request $request)
    {
        /* $validator = Validator::make($request->all(),[
            'name_type_tovar' => '|required|name_type_tovar'
         ]);
         if($validator->fails()){
             return redirect('admin/viddilenya/view')->withInput()->withErrors($validator);
         }*/

        $createRecord = new App\viddilenyaModel;
        $createRecord->name_viddilenya = $request->name_viddilenya;
        $createRecord->address_viddilenya = $request->address_viddilenya;
        $createRecord->city_viddilenya = $request->city_viddilenya;
        $createRecord->chas_robotu_viddilenya = $request->chas_robotu_viddilenya;
        $createRecord->save();
        return redirect('admin/viddilenya/view');
    }
    public function delete($id_role_worker)
    {
        App\viddilenyaModel::destroy($id_role_worker);
        return redirect('admin/viddilenya/view');
    }
    public function search(Request $request)
    {
        $nameVid = $request->searcFile;
        $masRoleWorker = App\viddilenyaModel::all()->where('name_viddilenya', $nameVid);
        $coutFroPag =  App\viddilenyaModel::all()->where('name_viddilenya', $nameVid)->count();
        return view('admin.viddilenya.view',[
            'masRoleWorker' => $masRoleWorker,
            'coutFroPag' => $coutFroPag
        ]);
    }
    public function searchVidPage(Request $request)
    {
        $nameVid = $request->searcFile;
        $masRoleWorker = App\viddilenyaModel::all()->where('name_viddilenya', $nameVid);
        $coutFroPag =  App\viddilenyaModel::all()->where('name_viddilenya', $nameVid)->count();
        return view('viddilenyaPage',[
            'masRoleWorker' => $masRoleWorker,
            'coutFroPag' => $coutFroPag
        ]);
    }
}
