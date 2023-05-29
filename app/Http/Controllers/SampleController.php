<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // ORM
use Illuminate\Support\Facades\DB; // DBファサード

class SampleController extends Controller
{
    public function index(){
        
        //ORM　モデルファイル
        //クエリビルダ＋独自機能（リレーション、スコープ、etc)
        // $eloquent = Contact::all();これつかえ
        // $eloquentFind = Contact::find(1);
        // dd($eloquent, $eloquentFind);



        $eloquentSelect = Contact::select('id', 'name');
        $where = $eloquentSelect->where('id', 1)->toSql();
        dd($eloquentSelect, $where);




        //　DBファサード
        // $queryBuilderGet = DB::table('contacts')->get();




        // $queryBuilderFirst = DB::table('contacts')->first();

        // $collection = collect(['aaa', 'bbb']);

        // dd($eloquent, $queryBuilderGet);
        // $queryBuilderFirst, $collection);

    }
}
