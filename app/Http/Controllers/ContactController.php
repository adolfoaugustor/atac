<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
use TCG\Voyager\Facades\Voyager;

class ContactController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $page = Voyager::model('Page')->where('slug', 'fale-conosco')
            ->where('status','=', 'ACTIVE')->firstOrFail();

        return view('fale-conosco', ['page' => $page]);
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|min:5|max:100',
            'email' => 'required|email',
            'celular' => 'required|numeric',
            'mensagem' => 'required|min:5'
        ]);

        $input = $request->all();
        Contact::create($input);

        //  Send mail to admin
        \Mail::send('contact', array(
            'nome' => $input['nome'],
            'email' => $input['email'],
            'celular' => $input['celular'],
            'assunto' => $input['assunto'],
            'mensagem' => $input['mensagem'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('adolfoaugustor@gmail.com', 'Admin')->subject($request->get('assunto'));
        });

  
        return redirect()->back()
            ->with(['success' => 'Obrigado por entrar em contato conosco. Entraremos em contato em breve.']);
    }
}
