<?php

namespace App\Http\Controllers;
use App\Models\Message;
use App\Models\User;
use App\Models\Company;
use Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;


class ChatController extends Controller
{
    public function getUserChat($id){
        $messages = Message::where('company_id', $id)->where('user_id', Auth::user()->id)->get();
        $contacts = Message::where('user_id', Auth::user()->id)->get()->unique('company_id');
        $company = Company::where('id', $id)->get()->first();
        return view('chat')->with([
            'messages' => $messages,
            'contacts' => $contacts,
            'company' => $company,

        ]);
    }
    
    public function getChat($id){
        $messages = Message::where('user_id', $id)->where('company_id', Auth::guard('company')->user()->id)->get();
        $contacts = Message::where('company_id', Auth::guard('company')->user()->id)->orderBy('created_at', 'desc')->get()->unique('user_id');
        $user = User::where('id', $id)->get()->first();
        return view('company.chat')->with([
            'messages' => $messages,
            'contacts' => $contacts,
            'user' => $user,

        ]);
    }
    public function getChatsPage(){
        $messages = [];
        $contacts = Message::where('company_id', Auth::guard('company')->user()->id)->orderBy('created_at', 'desc')->get()->unique('user_id');
        $user = $object = new User;
                $object->first_name = 'Latest Chats';
                $object->id = 0;

        return view('company.chat')->with([
            'messages' => $messages,
            'contacts' => $contacts,
            'user' => $user,

        ]);
    }
    
    public function messageDelete($id){
        Message::where('id', $id)->delete();
        return redirect()->back();
    }

    public function addMessage(Request $request, $id){
        if(Auth::guard('company')->check()){
            $message = Message::create([
                'user_id'=> $id,
                'company_id'=> Auth::guard('company')->user()->id,
                'message' => $request->message,
                'message_by' => 'company',
            ]);
        }
        else{
            $message = Message::create([
                'user_id'=> Auth::user()->id,
                'company_id'=> $id,
                'message' => $request->message,
                'message_by' => 'user',
            ]);
        }
          
        return redirect()->back();
    
}
}
