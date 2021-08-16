<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /*
    public function envoyerMail() 
    {
        $mail = [
            'titre' => 'Essai de Mail',
            'message' => "C'est mon super message"
        ];

        Mail::to("tvh68job@gmail.com")->send(new ContactMail($mail));
        return "E-mail envoyé";
    }
    */
    public function contactFormulaire()
    {
        return view('site.pages.contactFormulaire');
    }

    public function envoyerMail(Request $request)
    {
        Mail::send('emails.contactMail',[
            'nom' => $request->nom,
            'email' => $request->email,
            'msg' => $request->message
        ], function($mail) use($request){
            $mail->from(env('MAIL_FROM_ADDRESS'),$request->nom);
            $mail->to('tvh68job@gmail.com')->subject('Demande d\'information via le site');        
        });
        return 'Le message a été envoyé avec succès !!!';
    }
}
