<?php

namespace App\Http\Controllers\Auth;
use App\Http\Requests\RegisterFormRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\KasanegiFormRequest;
use App\Models\ContactModel;
use App\Models\KasanegiModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $Kasanegidb = new KasanegiModel();
        
        $images = $request->file('images');

        foreach($images as $image){
            $image->storeAS('images','');

        }
        // // $Kasanegidb->img1 = $path;
        // // $Kasanegidb->img2 = $images[1];
        // // $Kasanegidb->img3 = $images[2];
        // // $Kasanegidb->img4 = $images[3];
        // // $Kasanegidb->img5 = $images[4];
        // // $Kasanegidb->img6 = $images[5];
        // $Kasanegidb->userUid = Auth::user()->userUid;
        // $Kasanegidb->img1 = $request->file;
        // $Kasanegidb->series = $request->series;
        // $Kasanegidb->concept = $request->concept;
        // $Kasanegidb->comment = $request->comment;
        // $Kasanegidb->sex = $request->sex;
        // $Kasanegidb->head = $request->head;
        // $Kasanegidb->body = $request->body;
        // $Kasanegidb->arm = $request->arm;
        // $Kasanegidb->waist = $request->waist;
        // $Kasanegidb->foot = $request->foot;

        // $Kasanegidb->save();

        // redirect()->route('Kasanegi.show')->with('successTheUploadKasanegi','投稿されました！');
        
    }


}
