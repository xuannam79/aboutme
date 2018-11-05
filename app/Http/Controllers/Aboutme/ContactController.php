<?php

namespace App\Http\Controllers\Aboutme;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Contact;

class ContactController extends Controller
{
	public function __construct(Contact $myContact){
        $this->myContact = $myContact;
    }

    public function getIndex(){
        return view('aboutme.contact.index');
    }

    public function postIndex(Request $request){
        $name = $request->name;
        $email = $request->email;
        $address = $request->address;
        $phone = $request->phone;
        $message = $request->message;

        if($this->myContact->insertContact($name, $email, $address, $phone, $message)){
            return redirect()->route('aboutme.contact.index')->with('msg', 'Gửi thông tin thành công');
        }else{
            return redirect()->route('aboutme.contact.index')->with('msg', 'Gửi thông tin thất bại');
        }
    }
}
