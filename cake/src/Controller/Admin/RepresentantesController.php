<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Representantes Controller
 *
 * @property \App\Model\Table\RepresentantesTable $Representantes
 */
class RepresentantesController extends AdminAppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Estados']
        ];
        $representantes = $this->paginate($this->Representantes);

        $this->set(compact('representantes'));
        $this->set('_serialize', ['representantes']);
    }

    /**
     * View method
     *
     * @param string|null $id Representante id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->set('representante',$this->Representantes->find('all')->where(['Representantes.estado_id'=>$id])->contain(['Celulars','Emails','Estados'])->toArray());
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $representante = $this->Representantes->newEntity();
        if ($this->request->is('post')) {
            $representante = $this->Representantes->patchEntity($representante, $this->request->data);
            if ($this->Representantes->save($representante)) {
                $this->Flash->success(__('The representante has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The representante could not be saved. Please, try again.'));
            }
        }
        $estados = $this->Representantes->Estados->find('list', ['limit' => 200,'valueField'=>'nome']);
        $celulars = $this->Representantes->Celulars->find('list', ['limit' => 200,'valueField'=>'numero']);
        $emails = $this->Representantes->Emails->find('list', ['limit' => 200,'valueField'=>'email']);
        $this->set(compact('representante', 'estados', 'celulars', 'emails'));
        $this->set('_serialize', ['representante']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Representante id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $representante = $this->Representantes->get($id, [
            'contain' => ['Celulars', 'Emails']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $representante = $this->Representantes->patchEntity($representante, $this->request->data);
            if ($this->Representantes->save($representante)) {
                $this->Flash->success(__('The representante has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The representante could not be saved. Please, try again.'));
            }
        }
        $estados = $this->Representantes->Estados->find('list', ['limit' => 200]);
        $celulars = $this->Representantes->Celulars->find('list', ['limit' => 200]);
        $emails = $this->Representantes->Emails->find('list', ['limit' => 200]);
        $this->set(compact('representante', 'estados', 'celulars', 'emails'));
        $this->set('_serialize', ['representante']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Representante id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $representante = $this->Representantes->get($id);
        if ($this->Representantes->delete($representante)) {
            $this->Flash->success(__('The representante has been deleted.'));
        } else {
            $this->Flash->error(__('The representante could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
