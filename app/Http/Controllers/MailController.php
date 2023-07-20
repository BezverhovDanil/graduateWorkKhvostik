<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormEmail;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Part\TextPart;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'petName' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $name = $request->input('name');
        $petName = $request->input('petName');
        $email = $request->input('email');
        $message = $request->input('message');

        Mail::raw("Здравствуйте к вам $name, на обследование своего питомца $petName. У питомца $message. Контактные данные пациента: $email ", function ($message) use ($name) {
            $message->to('vetdoc003@mail.ru')
                ->subject('Вам новый пациент!')
                ->from(config('mail.from.address'), $name);
        });
        return view('sendsuccess');
        
    }

    
    public function sendEmailTelegram()
    {
            /* https://api.telegram.org/bot5922255477:AAESqXjoBXgcwszmmRFP_C2K2eJo_cPAve4/getUpdates,
        где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

        $name = $_POST['name'];
        $petName = $_POST['petName'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $token = urlencode("5922255477:AAESqXjoBXgcwszmmRFP_C2K2eJo_cPAve4");
        $chat_id = urlencode("-992025261");
        $arr = array(
        'Имя пользователя: ' => $name,
        'Имя питомца: ' => $petName,
        'Email: ' => $email,
        'Какие жалобы у питомца: ' => $message
        );
        $txt = "";

        foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
        };

        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

        return view('sendsuccess');
    }
    
    
    public function showContactForm()
    {
        return view('emails.contact-form');
    }
}
