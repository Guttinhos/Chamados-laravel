<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChamadosFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'assunto' => [
                'required',
                'min:10',
                'max:50',
            ],
            'dominio_relacionado' => [
                'required'
            ],
            'tipo_contato' => [
                'required'
            ],
            'url_dificuldade' => [
                'required'
            ],
            'telefone_contato' => [
                'required'
            ],
            'anexo' => [
                'file',
                'mimes:jpg,gif,png,zip,rar,eml,pdf'
            ],
            'mensagem' => [
                'required'
            ]
        ];
    }

    public function messages()
    {
        return [
            'assunto' => [
                'required' => 'Por Favor informe um assunto.',
                'min' => 'Informe o assunto no minio de 10 caracters e max de 50',
                'max' => 'Informe o assunto no minio de 10 caracters e max de 50'
            ],

            'dominio_relacionado' => [
                'required' => 'Por favor informe o dominio relacionado.'
            ],

            'tipo_contato' => [
                'required' => 'Por Favor selecione um tipo de contato.'
            ],

            'url_dificuldade' => [
                'required' => 'Por Favor informe uma url.'
            ],

            'telefone_contato' => [
                'required' => 'Por Favor informar um telefone.'
            ],

            'anexo' => [
                'file' => 'Apenas arquivos sao permitidos',
                'mimes' => 'Formato invalido Favor enviar arquivo no formato correto.'
            ],

            'mensagem' => 'Por Favor informe seu problema.'
        ];
    }

}
