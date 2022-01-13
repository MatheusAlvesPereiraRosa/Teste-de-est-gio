<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function criaConta()
    {
        return view('criaConta');
    }

    public function retiraSaldo()
    {
        return view('retiraSaldo');
    }

    public function login()
    {
        return view('login');
    }

    public function depositar()
    {
        return view('depositar');
    }

    public function retirar()
    {
        return view('retirar');
    }

    public function insert()
    {
        $Nome = $this->request->getPost('Nome');
        $CPF = $this->request->getPost('CPF');
        $Email = $this->request->getPost('Email');
        $Senha = $this->request->getPost('Senha');
        $Saldo = $this->request->getPost('Saldo');

        $Conta = [
            'Nome' => $Nome,
            'CPF' => $CPF,
            'Email' => $Email,
            'Senha' => $Senha,
            'Saldo' => $Saldo
        ];

        //Criar um objeto model
        $contaModel = new \App\Models\ContaModel();

        //Inserir
        $contaModel->insert($Conta);

        //Exibir mensagem de sucesso / redirecionar para algum lugar
        return redirect()->to(base_url('Home/index'));
    }

    public function exibirSaldo()
    {
        $Email = $this->request->getPost('Email');
        $Senha = $this->request->getPost('Senha');
        $Conta_id = $this->request->getPost('Conta_id');

        $db     = db_connect();

        $conta = $db->table('conta');
        $Conta = $conta->getWhere(['Conta_id'=> $Conta_id, 'Senha' => $Senha, 'Email' => $Email])->getResultObject();

        $trans = $db->table('transações');
        $Trans = $trans->getWhere(['Conta_id'=> $Conta_id])->getResultObject();

        $dadosView = [
            'Conta' => $Conta,
            'Trans' => $Trans
        ];

        return view("exibirSaldo", $dadosView);

        $db->close();
    }


    public function retira()
    {
        $Email = $this->request->getPost('Email');
        $Senha = $this->request->getPost('Senha');
        $Conta_id = $this->request->getPost('Conta_id');
        $Saque = $this->request->getPost('Saque');
    
        $db     = db_connect();

        $conta = $db->table('conta');
        $Conta = $conta->getWhere(['Conta_id'=> $Conta_id, 'Email' => $Email, 'Senha'=>$Senha])->getResultObject();

        $db->close();

        $SaldoAtual = $Conta[0]->Saldo - $Saque;

        $DateAndTime = date('Y-d-m h:i:s a', time());

        $Nome = $Conta[0]->Nome;

        $Conta = [
            'Saldo' => $SaldoAtual
        ];

        $Transação = [
            'Conta_id' => $Conta_id,
            'Nome' => $Nome,
            'Operação' => 'Saque',
            'Valor' => $Saque,
            'Data' => $DateAndTime
        ];

        $Id = $Conta_id;

        //Criar um objeto model
        $contaModel = new \App\Models\ContaModel();
        $TransacaoModel = new \App\Models\TransacaoModel();

        //Inserir
        $contaModel->update($Id, $Conta);
        $TransacaoModel->insert($Transação);

        //Exibir mensagem de sucesso / redirecionar para algum lugar
        return redirect()->to(base_url('Home/index'));   
    }

    public function deposita()
    {
        $Email = $this->request->getPost('Email');
        $Senha = $this->request->getPost('Senha');
        $Conta_id = $this->request->getPost('Conta_id');
        $Deposito = $this->request->getPost('Deposito');
    
        $db     = db_connect();

        $conta = $db->table('conta');
        $Conta = $conta->getWhere(['Conta_id'=> $Conta_id, 'Email' => $Email, 'Senha'=>$Senha])->getResultObject();

        $db->close();

        $SaldoAtual = $Conta[0]->Saldo + $Deposito;

        $DateAndTime = date('Y-d-m h:i:s a', time());

        $Nome = $Conta[0]->Nome;

        $Conta = [
            'Saldo' => $SaldoAtual
        ];

        $Transação = [
            'Conta_id' => $Conta_id,
            'Nome' => $Nome,
            'Operação' => 'Depósito',
            'Valor' => $Deposito,
            'Data' => $DateAndTime
        ];

        $Id = $Conta_id;

        //Criar um objeto model
        $contaModel = new \App\Models\ContaModel();
        $TransacaoModel = new \App\Models\TransacaoModel();

        //Inserir
        $contaModel->update($Id, $Conta);
        $TransacaoModel->insert($Transação);

        //Exibir mensagem de sucesso / redirecionar para algum lugar
        return redirect()->to(base_url('Home/index'));        
    }
}
