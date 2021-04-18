<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;
 
class MailController extends Controller
{
    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->sender = 'Assel.Yembergenova';
        $objDemo->receiver = 'Assel.Yembergenova';
 
        Mail::to("190103021@stu.sdu.edu.kz")->send(new OrderMail($objDemo));
    }
}