<?php

namespace App\Http\Controllers\Auth;
use App\Http\Requests\RegisterFormRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\DefFormRequest;
use App\Http\Requests\KasanegiFormRequest;
use App\Models\ContactModel;
use App\Models\HomeModel;
use App\Models\KasanegiModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function createUser(RegisterFormRequest $request){

        //コンストラクト化
        $Userdb = new User();
    
        $Userdb->userUid = $request->userUid;
        $Userdb->name = $request->firstName." ".$request->lastName;
        $Userdb->email = $request->email;
        $Userdb->password = Hash::make($request->password);
        
        $Userdb->save();
        
        return redirect()->route('login.show')->with('successCreateAccount','アカウント作成できました。ログインしてください。');
    }

    public function sendContact(ContactFormRequest $request)
    {
            $Contactdb = new ContactModel();
        
            $Contactdb->name = $request->firstName." ".$request->lastName;
            $Contactdb->email = $request->email;
            $Contactdb->subject = $request->subject;
            $Contactdb->message = $request->message;

        $Contactdb->save();

        return redirect()->route('Contact.show')->with('successSendMessage','ご連絡いただきありがとうございます。返信には数日かかる場合がございます。ご了承くださいませ。');
    }

    public function uploadKasanegi(KasanegiFormRequest $request)
    {   
        
        $d = 1;//[1-5]
        $i = 0;//[0-4]
        $image_count = 0;
        //楽用
        $Kasanegidb = new KasanegiModel();
        //配列で受け取った画像データを$imagesにぶち込む
        $images = $request->file('images');
        //サムネイル
        $thumbnail = $request->file('thumbnail');
        //保存している
        $thumbnail_path = Storage::putFile('/public',$thumbnail);
        //ファイル指定
        $thumbnail_path = explode('/',$thumbnail_path);

        //$imagesの配列を順に$imageに移す
        foreach($images as $image){
            
            //保存している
	        $path = Storage::putFile('/public',$image);
            //ファイル指定
            $path = explode('/',$path);
            // //テーブル複数
            $table_name = 'img'.$d;
            $Kasanegidb->$table_name = $path[1];
            
            $d++;
            $image_count++;
        }

        $Kasanegidb->thumbnail = $thumbnail_path[1];
        $Kasanegidb->userUid = Auth::user()->userUid;
        $Kasanegidb->series = $request->series;
        $Kasanegidb->concept = $request->concept;
        $Kasanegidb->comment = $request->comment;
        $Kasanegidb->sex = $request->sex;
        $Kasanegidb->head = $request->head;
        $Kasanegidb->body = $request->body;
        $Kasanegidb->arm = $request->arm;
        $Kasanegidb->waist = $request->waist;
        $Kasanegidb->foot = $request->foot;
        $Kasanegidb->image_count = $image_count + 1;
        $Kasanegidb->save();

        return redirect()->route('upKasanegi.show')->with('success','無事アップロードされました！');
        
    }

    public function uploadDef(DefFormRequest $request){
 
        $Defdb = new HomeModel();

        $d = 1;//[1-5]
        $i = 0;//[0-4]
        $image_count = 0;
        //配列で受け取った画像データを$imagesにぶち込む
        $images = $request->file('images');

        $thumbnail = $request->file('thumbnail');

        //保存している
        $thumbnail_path = Storage::putFile('/public',$thumbnail);
        //ファイル指定
        $thumbnail_path = explode('/',$thumbnail_path);

        //$imagesの配列を順に$imageに移す
        foreach($images as $image){
            
            //保存している
	        $path = Storage::putFile('/public',$image);
            //ファイル指定
            $path = explode('/',$path);
            // //テーブル複数
            $table_name = 'img'.$d;
            $Defdb->$table_name = $path[1];
            
            $d++;
            $image_count++;
        }
        $Defdb->thumbnail = $thumbnail_path[1];
        $Defdb->userUid = Auth::user()->userUid;
        $Defdb->series = $request->series;
        $Defdb->title = $request->title;
        $Defdb->comment = $request->comment;
        $Defdb->image_count = $image_count + 1;
        $Defdb->save();

        return redirect()->route('upDef.show')->with('success','無事アップロードされました！');


    }

}
