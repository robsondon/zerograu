<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Utility;
use App\Form\ContatoForm;



class ContatoController  extends AppController
{

    public function index(){
        $this->set('title','Contato');
    }

    public function send(){
        $this->autoRender = false;
        $contact = new ContatoForm();
        if ($this->request->is('post')) {
            if ($contact->execute($this->request->data)) {
                $this->Flash->success('Obrigado pelo contato. Retornaremos em breve');
                $this->redirect(['action'=>'index']);

            } else {
                $this->Flash->error('There was a problem submitting your form.');
            }

        }
    }
}
