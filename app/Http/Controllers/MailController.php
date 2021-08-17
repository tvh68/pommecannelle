<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{  
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
        //Retour à la page contactFormulaire avec un message de réussite de l'envoi du mail
        return redirect()->back()->with('message', 'Le message a été envoyé avec succès !!!');
    }
}
