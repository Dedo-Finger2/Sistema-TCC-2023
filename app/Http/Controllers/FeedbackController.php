<?php

namespace App\Http\Controllers;

use App\Interfaces\ICriacaoParalela;
use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Models\Request as RequestModel;


class FeedbackController extends Controller implements ICriacaoParalela
{
    /**
     * Método responsável por mostrar a tela de criação de novos feedbacks.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create(): \Illuminate\Contracts\View\View
    {
        return view("User.feedback");
    }


    /**
     * Método responsável por persistir os dados do feedback no banco de dados.
     *
     * @param Request $request - Objeto do tipo Request que contém todas as informações que você precisa.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'request_id' => ['required'],
            'comentario' => ['required'],
            'feedback'   => ['string', 'nullable'],
        ]);

        $data['user_id'   ] = auth()->id();
        $data['request_id'] = intval($data['request_id']);
        $data['data'      ] = date('Y-m-d');
        $data['feedback'  ] = isset($data['feedback']) && $data['feedback'] == "on" ? 1 : 0;

        try {
            $newFeedback   = Feedback::create($data);
            $updateRequest = RequestModel::find($data['request_id']);

            $updateRequest->feedback_id = $newFeedback->id;
            $updateRequest->update();

            session()->forget('request_id');

            return redirect()
                ->route('routes.showSearchForm')
                ->with('success','Feedback registrado com sucesso!');
        } catch (\Exception $e) {
            return back()
                ->with('error', $e->getMessage());
        }
    }


    /**
     * Método vindo da interface ICriacaoParalela, responsável por criar um novo dado no banco, porém,
     * com alguns detalhes específicos que vão ser passados via array, preenchendo os campos corretos a
     * depender da situação atual (alguns campos serão nulos em certos momentos ou em certos cenários).
     *
     * @param array $data - Dados que virão de outros métodos que vão precisar fazer a criação de uma nova instância
     *                      desse modelo no banco de dados.
     */
    public static function parallelStore(array $data)
    {
        # code...
    }
}
