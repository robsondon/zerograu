<?PHP
App::uses('AppController','Controller');

class LojasController extends AppController{

    public function enviarOrcamento($id = null){
        session_start();
       
        $orcamento=$this->Produtos->find('all',array('conditions'=>array('Produto.id'=>$id)));
        if (!$this->Session->read('carrinho') || $this->Session->read('carrinho') == "") {
            $this->Session->write('carrinho');
            $i = 0;
            $this->Session->write('carrinho.'.$i , $orcamento);
        }else{

            //conta chaves, inclui id
            $total_chaves = array_keys($this->Session->read('carrinho'));
            $tamanho_array = sizeof($total_chaves);
            //verifica se o produto ja existe
            for($i=0; $i < $tamanho_array; $i++){
                if (in_array($orcamento,$this->Session->read('carrinho'))) {
                    $this->Session->setFlash('Produto já esta no carrinho de compras.');
                    $this->redirect(array('action'=>'index'));
                }
            }
            $this->Session->write('carrinho.'.$i , $orcamento);
            //$this->Session->write('carrinho', array($i => $orcamento));
        }
        $this->redirect(array('action'=>'index'));
    }

    public function index(){
        //session_destroy();
        $this->set('title_for_layout','Produtos em destaque');
    }
}