<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Form\ContatoForm;
use App\Form\ContatoprForm;
use App\Form\ContatospForm;
use App\Form\ContatopiForm;

/**
 * Produtos Controller
 *
 * @property \App\Model\Table\ProdutosTable $Produtos
 */
class CarrinhoController extends AppController
{

    public function index(){

    }

    public function add()
    {
        $session = $this->request->session();
        //$session->write('carrinho.1','Nome do produto');
        //pr($session->read('carrinho'));exit;

        if ($this->request->is('post')) {
            if (!isset($session) || $session->read('carrinho') == "") {
                $session->write('carrinho');
                $i = 0;
                $session->write('carrinho.' . $i . '.id', $this->request->data['id']);
                $session->write('carrinho.' . $i . '.nome', $this->request->data['nome']);
                $session->write('carrinho.' . $i . '.photo_dir', $this->request->data['photo_dir']);
                $session->write('carrinho.' . $i . '.photo', $this->request->data['photo']);
                $session->write('carrinho.' . $i . '.quantidade', $this->request->data['quantidade']);
                $this->Flash->success('Produto adicionado em seu carrinho de orçamento:' . $this->request->data['nome']);
                return $this->redirect($this->referer());
            } else {

                $total_chaves = $session->read('carrinho');
                $tamanho_array = sizeof($total_chaves);

                for ($i = 0; $i < $tamanho_array; $i++) {
                    $j = 0;
                    while ($j < $tamanho_array) {

                        if ($this->request->data['id'] == $this->request->session()->read('carrinho.'.$j.'.id')) {
                            $quantidade = $this->request->session()->read('carrinho.'.$j.'.quantidade');
                            $this->request->data['quantidade'];
                            $session->write('carrinho.' . $j . '.quantidade', $this->request->data['quantidade'] + $quantidade);
                            $this->Flash->success('Esse produto já existia em seu carrinho, aumentamos apenas a quantidade:' . $this->request->data['nome']);
                            return $this->redirect($this->referer());
                        }
                        $j++;
                    }
                }
                $session->write('carrinho.' . $i . '.id', $this->request->data['id']);
                $session->write('carrinho.' . $i . '.nome', $this->request->data['nome']);
                $session->write('carrinho.' . $i . '.photo_dir', $this->request->data['photo_dir']);
                $session->write('carrinho.' . $i . '.photo', $this->request->data['photo']);
                $session->write('carrinho.' . $i . '.quantidade', $this->request->data['quantidade']);
                $this->Flash->success('Produto adicionado em seu carrinho de orçamento:' . $this->request->data['nome']);
                return $this->redirect($this->referer());
            }
        }

    }
    public function enviar(){
        $this->loadModel('Estados');
        $this->set('estados',$this->Estados->find('all')->limit(200)->toArray());
    }

    public function send(){
       // pr($this->request->data);exit;
        $this->autoRender = false;
        if($this->request->data['estado'] == "PR" | 'RS' | 'SC' | 'MG' | 'RO' | 'AC' | 'RJ'){
            $contact = new ContatoprForm();
            if ($this->request->is('post')) {
                if ($contact->execute($this->request->data)) {
                    $this->Flash->success('Obrigado por enviar o seu pedido de orçamento, em breve entraremos em contato!');
                    $this->request->session()->delete('carrinho');
                    $this->redirect('/produtos');

                } else {
                    $this->Flash->error('There was a problem submitting your form.');
                }

            }
        }
        if($this->request->data['estado'] == "SP" | 'MS' | 'MT' | 'GO' | 'PA' | 'MA' | 'BA' | 'ES' | 'TO' | 'AM'){
            $contact = new ContatospForm();
            if ($this->request->is('post')) {
                if ($contact->execute($this->request->data)) {
                    $this->Flash->success('Obrigado por enviar o seu pedido de orçamento, em breve entraremos em contato!');
                    $this->request->session()->delete('carrinho');
                    $this->redirect('/produtos');

                } else {
                    $this->Flash->error('There was a problem submitting your form.');
                }

            }
        }
        if($this->request->data['estado'] == "PI" | 'CE' | 'RN' | 'PB' | 'PE' | 'AL' | 'SE'){
            $contact = new ContatopiForm();
            if ($this->request->is('post')) {
                if ($contact->execute($this->request->data)) {
                    $this->Flash->success('Obrigado por enviar o seu pedido de orçamento, em breve entraremos em contato!');
                    $this->request->session()->delete('carrinho');
                    $this->redirect('/produtos');

                } else {
                    $this->Flash->error('There was a problem submitting your form.');
                }

            }
        }
    }

    public function limpar()
    {
        $this->request->session()->delete('carrinho');
        return $this->redirect($this->referer());
    }

    public function delete($id){
        $session = $this->request->session();

        $total_chaves = $session->read('carrinho');
        $tamanho_array = sizeof($total_chaves);

        for ($i = 0; $i <= $tamanho_array; $i++) {
            $j = 0;
            while ($j <= $tamanho_array) {

                if ($id == $this->request->session()->read('carrinho.'.$j.'.id')) {
                    if($this->request->session()->read('carrinho.'.$j.'.quantidade') > 1){
                        $session->write('carrinho.' . $j . '.quantidade', $this->request->session()->read('carrinho.'.$j.'.quantidade') - 1);
                        $this->Flash->success('Foi removido a qauntidade de 1 em seu orçamento, note que o produto continua em seu carrinho!');
                        return $this->redirect($this->referer());
                    }else {
                        $this->request->session()->delete('carrinho.' . $j);
                        $this->Flash->success('Produto removido com sucesso de seu carrinho!');
                        return $this->redirect($this->referer());
                    }
                }
                $j++;
            }
        }
    }

}
