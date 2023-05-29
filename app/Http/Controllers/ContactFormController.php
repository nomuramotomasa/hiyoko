<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;//Eloquent ORM

class ContactFormController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        // dd($contacts);


        //viwe()表示するbladeファイル
        //viwe('フォルダ名。ファイル名')
        //変数をcontriller->viweに渡す　compact
        return view('contact_form.index', compact('contacts'));
    }

    //メソッド名(クラス名　インスタンスをいれる変数名)
    public function confirm(Request $request){

        //バリデーション
        $validatedData = $request->validate([
            'name' => ['required', 'min:2', 'max:20'],
        ]);

    //var/dump+止める
    // dd($request, $request->name);

        //compact(　)というphpの関数
        return view('contact_form.comfirm', compact('request'));
    }

    public function store(Request $request){
        //本来はバリデーション
        // dd($request);

        // DB保存処理
        // インスタンス化するパターン
        // phpだったら
        // ステートメント、bindValue, placeholderなどがいった
        // ORM使うとこれだけになる
        // 裏側でPDO動いてるけどきにしないでok
        $contact = new Contact;
        // インスタンスのプロパティ(変数) = フォームから渡ってきている情報
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->gender = $request->gender;
        $contact->age = $request->age;
        $contact->message = $request->message;
        // 保存 save()
        // dd($contact->gender, $request->gender);
        $contact->save();

        // 保存の後はredirectかけないとうまく表示されない
        return redirect('contact_form'); // ContactForm
    }

    public function show($id){
        //$id　でidが一番なら１がはいる
        //DBから情報を取りたい
        $contact = Contact::find($id);
        // dd($contact);

        return view('contact_form.show', compact('contact'));
    }

    public function edit($id){
        $contact = Contact::find($id);
        return view('contact_form.edit', compact('contact'));
    }

    //更新は引数二つ　　ふぉrmの値、ルートパラメータ
    public function update(Request $request, $id){
        $contact = Contact::find($id);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->gender = $request->gender;
        $contact->age = $request->age;
        $contact->message = $request->message;
        $contact->save();

        // 保存の後はredirectかけないとうまく表示されない
        return redirect('contact_form');
    }

    public function delete($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('contact_form');
    }
}

