<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Imgprodutos Controller
 *
 * @property \App\Model\Table\ImgprodutosTable $Imgprodutos
 */
class ImgprodutosController extends AdminAppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Produtos']
        ];
        $imgprodutos = $this->paginate($this->Imgprodutos);

        $this->set(compact('imgprodutos'));
        $this->set('_serialize', ['imgprodutos']);
    }

    /**
     * View method
     *
     * @param string|null $id Imgproduto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imgproduto = $this->Imgprodutos->get($id, [
            'contain' => ['Produtos']
        ]);

        $this->set('imgproduto', $imgproduto);
        $this->set('_serialize', ['imgproduto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imgproduto = $this->Imgprodutos->newEntity();
        if ($this->request->is('post')) {
            $imgproduto = $this->Imgprodutos->patchEntity($imgproduto, $this->request->data);
            if ($this->Imgprodutos->save($imgproduto)) {
                $this->Flash->success(__('The imgproduto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The imgproduto could not be saved. Please, try again.'));
            }
        }
        $produtos = $this->Imgprodutos->Produtos->find('list', ['limit' => 200]);
        $this->set(compact('imgproduto', 'produtos'));
        $this->set('_serialize', ['imgproduto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Imgproduto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imgproduto = $this->Imgprodutos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imgproduto = $this->Imgprodutos->patchEntity($imgproduto, $this->request->data);
            if ($this->Imgprodutos->save($imgproduto)) {
                $this->Flash->success(__('The imgproduto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The imgproduto could not be saved. Please, try again.'));
            }
        }
        $produtos = $this->Imgprodutos->Produtos->find('list', ['limit' => 200]);
        $this->set(compact('imgproduto', 'produtos'));
        $this->set('_serialize', ['imgproduto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Imgproduto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $imgproduto = $this->Imgprodutos->get($id);
        if ($this->Imgprodutos->delete($imgproduto)) {
            $this->Flash->success(__('The imgproduto has been deleted.'));
        } else {
            $this->Flash->error(__('The imgproduto could not be deleted. Please, try again.'));
        }

        return $this->redirect($this->referer());
    }
}
