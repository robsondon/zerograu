<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Produtos Controller
 *
 * @property \App\Model\Table\ProdutosTable $Produtos
 */
class ProdutosController extends AdminAppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {

        $produtos = $this->paginate($this->Produtos);
        $this->set(compact('produtos'));
        $this->set('_serialize', ['produtos']);
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
            'contain' => ['Imgprodutos']
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $error = $this->request->data['imgprodutos'][0]['photo']['error'];
            if($error != 0){
                //pr($this->request->data['imgprodutos']);exit;
                unset($this->request->data['imgprodutos']);
            }
            $produto = $this->Produtos->patchEntity($produto, $this->request->data);
            if ($this->Produtos->save($produto)) {
                $this->Flash->success(__('The produto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The produto could not be saved. Please, try again.'));
            }
        }
        $subcategorias = $this->Produtos->Subcategorias->find('list', ['limit' => 200,'valueField'=>'subcategoria']);
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
    public function deleteimg($id = null)
    {
        $this->loadModel('Imgprodutos');
        $this->request->allowMethod(['post', 'delete']);
        $image = $this->Imgprodutos->get($id);
        if ($this->Imgprodutos->delete($image)) {
            $this->Flash->success(__('Imagem deletada.'));
        } else {
            $this->Flash->error(__('The produto could not be deleted. Please, try again.'));
        }

        return $this->redirect($this->referer());
    }
}
