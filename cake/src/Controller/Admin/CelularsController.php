<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class CelularsController extends AdminAppController
{

    public function index()
    {
        $celulars = $this->paginate($this->Celulars);
        $this->set(compact('celulars'));
        $this->set('_serialize', ['celulars']);
    }
    
    public function view($id = null)
    {
        $celular = $this->Celulars->get($id, [
            'contain' => ['Representantes']
        ]);

        $this->set('celular', $celular);
        $this->set('_serialize', ['celular']);
    }
    
    public function add()
    {
        $celular = $this->Celulars->newEntity();
        if ($this->request->is('post')) {
            $celular = $this->Celulars->patchEntity($celular, $this->request->data);
            if ($this->Celulars->save($celular)) {
                $this->Flash->success(__('The celular has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The celular could not be saved. Please, try again.'));
            }
        }
        $representantes = $this->Celulars->Representantes->find('list', ['limit' => 200,'valueField'=>'nome']);
        $this->set(compact('celular', 'representantes'));
        $this->set('_serialize', ['celular']);
    }
    public function edit($id = null)
    {
        $celular = $this->Celulars->get($id, [
            'contain' => ['Representantes']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $celular = $this->Celulars->patchEntity($celular, $this->request->data);
            if ($this->Celulars->save($celular)) {
                $this->Flash->success(__('The celular has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The celular could not be saved. Please, try again.'));
            }
        }
        $representantes = $this->Celulars->Representantes->find('list', ['limit' => 200]);
        $this->set(compact('celular', 'representantes'));
        $this->set('_serialize', ['celular']);
    }
    
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $celular = $this->Celulars->get($id);
        if ($this->Celulars->delete($celular)) {
            $this->Flash->success(__('The celular has been deleted.'));
        } else {
            $this->Flash->error(__('The celular could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
