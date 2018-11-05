<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contact";
    protected $primaryKey = "id_contact";
    public $timestamp = false;

    public function insertContact($name, $email, $address, $phone, $message){
        return $this->insert(array('name'=>$name, 'email'=>$email, 'address'=>$address, 'phone'=>$phone, 'message'=>$message));
    }
}
