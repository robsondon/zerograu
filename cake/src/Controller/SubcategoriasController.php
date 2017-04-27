<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Subcategorias Controller
 *
 * @property \App\Model\Table\SubcategoriasTable $Subcategorias
 */
class SubcategoriasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categorias']
        ];
        $subcategorias = $this->paginate($this->Subcategorias);

        $this->set(compact('subcategorias'));
        $this->set('_serialize', ['subcategorias']);
    }

    /**
     * View method
     *
     * @param string|null $id Subcategoria id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subcategoria = $this->Subcategorias->get($id, [
            'contain' => ['Categorias']
        ]);

        $this->set('subcategoria', $subcategoria);
        $this->set('_serialize', ['subcategoria']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subcategoria = $this->Subcategorias->newEntity();
        if ($this->request->is('post')) {
            $subcategoria = $this->Subcategorias->patchEntity($subcategoria, $this->request->data);
            if ($this->Subcategorias->save($subcategoria)) {
                $this->Flash->success(__('The subcategoria has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The subcategoria could not be saved. Please, try again.'));
            }
        }
        $categorias = $this->Subcategorias->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('subcategoria', 'categorias'));
        $this->set('_serialize', ['subcategoria']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Subcategoria id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subcategoria = $this->Subcategorias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subcategoria = $this->Subcategorias->patchEntity($subcategoria, $this->request->data);
            if ($this->Subcategorias->save($subcategoria)) {
                $this->Flash->success(__('The subcategoria has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The subcategoria could not be saved. Please, try again.'));
            }
        }
        $categorias = $this->Subcategorias->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('subcategoria', 'categorias'));
        $this->set('_serialize', ['subcategoria']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Subcategoria id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subcategoria = $this->Subcategorias->get($id);
        if ($this->Subcategorias->delete($subcategoria)) {
            $this->Flash->success(__('The subcategoria has been deleted.'));
        } else {
            $this->Flash->error(__('The subcategoria could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
