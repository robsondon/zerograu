<?PHP
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Mailer\Email;

class ContatoprForm extends Form
{

    protected function _buildSchema(Schema $schema)
    {
        pr($this->request->data());exit;
        return $schema->addField('nome', 'string')
            ->addField('sobrenome', ['type' => 'string'])
            ->addField('empresa', ['type' => 'string'])
            ->addField('email', ['type' => 'string'])
            ->addField('telefone', ['type' => 'string'])
            ->addField('estado', ['type' => 'text'])
            ->addField('endereco', ['type' => 'text'])
            ->addField('complemento', ['type' => 'text'])
            ->addField('cidade', ['type' => 'text'])
            ->addField('observacoes', ['type' => 'textarea'])
            ->addField('endereco', ['type' => 'text'])
            ->addField('howmeet', ['type' => 'text']);
    }



    protected function _execute(array $data)
    {
        //pr($this->request->data());exit;
        $email = new Email('default');
        $email->template('contato')
            ->transport('default')
            ->emailFormat('html')
            ->template('contato')
            ->subject('Contato Zerograu | Site')
            ->to('vendas1@zerograu.ind.br')
            ->from('web@blancolima.com.br')
            ->send();
        return true;
    }
}