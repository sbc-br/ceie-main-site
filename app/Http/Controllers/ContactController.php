<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Validator;
use Exception;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        try {

            $validateOnly = filter_var($request->query('validate', false), FILTER_VALIDATE_BOOLEAN);

            $guest = $request->json()->all();

            $validator = $this->getValidator($guest);

            if ($validator->fails()) {

                return response()->json(['status' => 'VALIDATION_ERROR', 'errors' => $validator->errors() ], 500);
            }

            if ($validateOnly){
                return response()->json(['status' => 'SUCCESS', 'message' => 'Os dados de contato são todos válidos'], 200);
            }

            $guest = json_decode(json_encode($guest));

            Mail::send(new ContactEmail($guest));

            return response()->json(['status' => 'SUCCESS', 'message' => 'O email foi enviado com sucesso para o administrador do portal'], 200);

        } catch (Exception $e) {

            return response()->json(['status' => 'ERROR', 'message' => 'Erro ao tentar enviar o email: ' . $e->getMessage()], 500);
        }
    }

    public function testEmail(Request $request)
    {
        $guest = (object) [
            'name' => 'Joãozinho',
            'email' => 'joazinho@gmail.com',
            'message' => (object) [
                'subject' => 'Email test',
                'content' => 'This is a test email sent from CEIE Portal'
            ]
        ];
        return new ContactEmail($guest);
    }

    private function getValidator($guest)
    {
        $rules = [
            'name' => 'required|min:5|max:100',
            'email' => 'required|min:5|max:100|email',
            'message.subject' => 'required|min:5|max:100',
            'message.content' => 'required|min:5|max:2000'
        ];

        $messages = [
            'name.required' => 'O nome deve ser informado',
            'name.max' => 'O nome pode ter no máximo :max caracteres',
            'name.min' => 'O nome deve ter no mínimo :min caracteres',

            'email.required' => 'O email deve ser informado',
            'email.max' => 'O email pode ter no máximo :max caracteres',
            'email.min' => 'O email deve ter no mínimo :min caracteres',
            'email.email' => 'O email informado não é válido',

            'message.subject.required' => 'O assunto da mensagem deve ser informado',
            'message.subject.max' => 'O assunto da mensagem pode ter no máximo :max caracteres',
            'message.subject.min' => 'O assunto da mensagem deve ter no mínimo :min caracteres',

            'message.content.required' => 'O conteúdo da mensagem deve ser informado',
            'message.content.max' => 'O conteúdo da mensagem pode ter no máximo :max caracteres',
            'message.content.min' => 'O conteúdo da mensagem deve ter no mínimo :min caracteres'
        ];

        return Validator::make($guest, $rules, $messages);
    }
}
