<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class mainPageController extends Controller
{
    public function view()
    {
        $masRoleWorker = App\newsModel::paginate(6);
        $coutFroPag =  App\newsModel::all()->count();
        $infoPos = false;
        $infoPosMes="";
        return view('welcome',[
            'masRoleWorker' => $masRoleWorker,
            'coutFroPag' => $coutFroPag,
            'infoPosMes' => $infoPosMes,
            'infoPos' => $infoPos
        ]);
    }
    public function viewNews()
    {
        $masRoleWorker = App\newsModel::paginate(6);
        $coutFroPag =  App\newsModel::all()->count();
        $infoPos = false;
        $infoPosMes="";
        return view('newsPage',[
            'masRoleWorker' => $masRoleWorker,
            'coutFroPag' => $coutFroPag,
            'infoPosMes' => $infoPosMes,
            'infoPos' => $infoPos
        ]);
    }
    public function viewNewsContacts()
    {
        $masRoleWorker = App\newsModel::paginate(6);
        $coutFroPag =  App\newsModel::all()->count();
        $infoPos = false;
        $infoPosMes="";
        return view('contactsPage',[
            'masRoleWorker' => $masRoleWorker,
            'coutFroPag' => $coutFroPag,
            'infoPosMes' => $infoPosMes,
            'infoPos' => $infoPos
        ]);
    }
    public function more($id_role_worker)
    {
        $masNews = App\newsModel::find($id_role_worker);
        $masRoleWorker = App\newsModel::paginate(6);
        return view('detailNews',[
            'masRoleWorker' => $masRoleWorker,
            'masNews' => $masNews
        ]);
    }
    public function seachPosulka(Request $request)
    {
        $nameVid = $request->keyword;
        $infoPos = App\tovarModel::all()->where('id_tovar', $nameVid)->first();
        if ($infoPos){
            $infoPos = $infoPos->id_viddilenya;
            $infoPos = App\viddilenyaModel::all()->where('id_viddilenya', $infoPos)->first();
            $infoPosVid = $infoPos->name_viddilenya;
            $infoPosCity = $infoPos->city_viddilenya;
            $infoPosAddress = $infoPos->address_viddilenya;
        }else{
            $infoPosVid="Посилки не існує";
            $infoPosCity="";
            $infoPosAddress="";
        }
        echo $infoPosVid . "\t";
        echo $infoPosCity . "\t";
        echo $infoPosAddress;
    }

    
}
