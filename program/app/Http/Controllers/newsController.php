<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class newsController extends Controller
{
    public function view()
    {
        $masRoleWorker = App\newsModel::paginate(5);
        $coutFroPag =  App\newsModel::all()->count();
        return view('admin.news.view',[
            'masRoleWorker' => $masRoleWorker,
            'coutFroPag' => $coutFroPag
        ]);
    }
    public function edit($id_role_worker)
    {
        $masRoleWorkerOne = App\newsModel::find($id_role_worker);
        return view('admin.news.edit',[
            'masRoleWorkerOne' => $masRoleWorkerOne
        ]);
    }
    public function editRecord(Request $request, $id_role_worker)
    {
        $changeRecord =  App\newsModel::find($id_role_worker);
        $changeRecord->name_news = $request->name_news;
        $changeRecord->text_news = $request->text_news;
        $changeRecord->date_news = $request->date_news;
        $changeRecord->shortDesk_news = $request->shortDesk_news;
        $changeRecord->save();

        return redirect('admin/news/view');
    }
    public function create()
    {
        $masRoleWorkerLast = App\newsModel::all()->last();

        return view('admin.news.create',[
            'masRoleWorkerLast' => $masRoleWorkerLast
        ]);
    }
    public function createRecord(Request $request)
    {
        $createRecord = new App\newsModel;
        $createRecord->name_news = $request->name_news;
        $createRecord->text_news = $request->text_news;
        $createRecord->date_news = $request->date_news;
        $createRecord->shortDesk_news = $request->shortDesk_news;
        $createRecord->save();
        return redirect('admin/news/view');
    }
    public function delete($id_role_worker)
    {
        App\newsModel::destroy($id_role_worker);
        return redirect('admin/news/view');
    }
    public function search(Request $request)
    {
        $nameVid = $request->searcFile;
        $masRoleWorker = App\newsModel::all()->where('name_news', $nameVid);
        $coutFroPag =  App\newsModel::all()->where('name_news', $nameVid)->count();
        return view('admin.news.view',[
            'masRoleWorker' => $masRoleWorker,
            'coutFroPag' => $coutFroPag
        ]);
    }
}
