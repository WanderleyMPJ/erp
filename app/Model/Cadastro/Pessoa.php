<?php

namespace App\Model\Cadastro;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = ['id','pessoa_id','nome','cnpj_cpf','rg_inscest', 'fantasia', 'ativo', 'tipopessoa', 'pessoagrupo_id', 'pessoarede_id'];

    public function user()
    {  
    	return $this->belongsTo(\App\User::class);
    }
    
    public function Contatos()
    {
    	return $this->hasMany('App\Model\Cadastro\PessoaContato');
    }

    public function enderecos()
    {
        return $this->hasMany('App\Model\Cadastro\PessoaEndereco');
    }

    public function addTelefone(Telefone $tel)
    {
    	return $this->pessoatelefones()->save($tel);
    }

    public function deletarTelefones()
    {
    	foreach ($this->pessoatelefones as $tel) {
    		$tel->delete();
    	}

    	return true;
    }
}
