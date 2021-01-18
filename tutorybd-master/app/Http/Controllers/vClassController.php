<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vClassController extends Controller
{
    public function vClass(){

        $return_data    =   array();
       
        $api_key            =   "qO6YbOeZTgGmyNKcZa3nGg";
        $api_secret         =   "D1vTreEEjmi7anJnSk14JFioJiR15gwv33iR";
        $meeting_number     =   "45685496";        
        $role               =   "1";

        $signature= $this->generate_signature($api_key, $api_secret, $meeting_number, $role);

        $return_data['api_key']             =  $api_key ;
        $return_data['meeting_number']      =  $meeting_number ;
        $return_data['role']                =  $role ;
        $return_data['meeting_signature']   =  $signature ;


        return view('zoom.vClass')->with('return_data', $return_data);

    }

    public function generate_signature ( $api_key, $api_secret, $meeting_number, $role){

        $time = time() * 1000 - 30000;  //time in milliseconds (or close enough)
        
        $data = base64_encode($api_key . $meeting_number . $time . $role);
        
        $hash = hash_hmac('sha256', $data, $api_secret, true);
        
        $_sig = $api_key . "." . $meeting_number . "." . $time . "." . $role . "." . base64_encode($hash);
        
        //return signature, url safe base64 encoded
        return rtrim(strtr(base64_encode($_sig), '+/', '-_'), '=');
    }
}
