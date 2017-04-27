<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Produtos Controller
 *
 * @property \App\Model\Table\ProdutosTable $Produtos
 */
class ProdutosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->loadModel('Categorias');
        $this->paginate = [
            'contain' => ['Subcategorias']
        ];
        $produtos = $this->paginate($this->Produtos);
        $this->set('categorias',$this->Categorias->find('all')->contain(['Subcategorias'])->toArray());
        $this->set(compact('produtos'));
        $this->set('_serialize', ['produtos']);
        $this->set('mycart',$this->Produtos->find('all')->limit(200)->toArray());
    }

    public function subcategoria($slug = null){
        $this->loadModel('Subcategorias');
        $this->loadModel('Categorias');
        $subcategoria = $this->Subcategorias->findBySlug($slug)->contain(['Produtos','Categorias'])->toArray();

        $this->set('categorias',$this->Categorias->find('all')->contain(['Subcategorias'])->toArray());
        $this->set('produtos',$subcategoria);
    }

    /**
     * View method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        
        $produto = $this->Produtos->get($id, [
            'contain' => ['Subcategorias', 'Imgprodutos']
        ]);
        $this->set('cart',$this->request->session()->read('carrinho'));

        $this->set('produto', $produto);
        $this->set('_serialize', ['produto']);
        $this->set('relateds',$this->Produtos->find('all')->where(['Produtos.subcategoria_id'=>$produto['subcategoria_id']])->toArray());
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function enviarOrcamento(){
        if ($this->request->is('post')) {

            if(!isset($_SESSION['carrinho']) || $_SESSION['carrinho'] == ""){
                $_SESSION['carrinho'] = array();
                $i = 0;
                $_SESSION['carrinho'][$i] = $this->data['Papel'];
                return $this->redirect($this->referer());
            } else {
                $total_chaves = $_SESSION['carrinho'];
                $tamanho_array = sizeof($total_chaves);
                for($i=0; $i < $tamanho_array; $i++){}
                $_SESSION['carrinho'][$i] = $this->data['Papel'];
                pr($_SESSION['carrinho']);exit;
                return $this->redirect($this->referer());
            }
        }

    }

    public function add()
    {
        $produto = $this->Produtos->newEntity();
        if ($this->request->is('post')) {
            $produto = $this->Produtos->patchEntity($produto, $this->request->data);
            if ($this->Produtos->save($produto)) {
                $this->Flash->success(__('The produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Produto nao pode ser cadastrado com sucessohb.'));
            }
        }
        $subcategorias = $this->Produtos->Subcategorias->find('list', ['limit' => 200,'valueField'=>'subcategoria']);
        $this->set(compact('produto', 'subcategorias'));
        $this->set('_serialize', ['produto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $produto = $this->Produtos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produto = $this->Produtos->patchEntity($produto, $this->request->data);
            if ($this->Produtos->save($produto)) {
                $this->Flash->success(__('The produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The produto could not be saved. Please, try again.'));
            }
        }
        $subcategorias = $this->Produtos->Subcategorias->find('list', ['limit' => 200]);
        $this->set(compact('produto', 'subcategorias'));
        $this->set('_serialize', ['produto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produto = $this->Produtos->get($id);
        if ($this->Produtos->delete($produto)) {
            $this->Flash->success(__('The produto has been deleted.'));
        } else {
            $this->Flash->error(__('The produto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
