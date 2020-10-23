<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function show($greet)
    {
        
        
        
        switch ($greet) 
        {
            case 'morning':
                $greet = 'おはようございます';
                $greet2 = '朝のあいさつ';
    
                break;
            
                case 'afternoon':
                    
                    $greet = 'こんにちは';
                $greet2 = '昼のあいさつ';
                break;
            
            case 'evening':
 
                $greet = 'こんばんは';
                $greet2 = '夕方のあいさつ';
                break;
            
            case 'night':
                // $kodai =$num1 / $num2;
                $greet = 'おやすみ';
                $greet2 = '夜のあいさつ';
                break;
            
            default:
            echo  'koudai';
                break;
    }
    return view('views.show', ['greet' => $greet, 'greet2' => $greet2]);
}




public function kodai($msg) 
{     
    $data = ['msg' => $msg];
    return view('views.show2', $data);
}





public function random()
{

    // $array = ['おはよう','こんにちは','こんばんは','おやすみ'];
    
    // $message = 'ランダムなメッセージ';
        // $message2 = $array[array_rand($array)];
        // return view('views.show3', ['message' => $message, 'message2' => $message2]);
        
        $message = ["おはよう", "こんにちは", "こんばんは", "おやすみ"];
        $message2 = $message[array_rand( $message)];
        return view( 'views.show3', ['message2' => $message2]);
    }
    
    

    
}