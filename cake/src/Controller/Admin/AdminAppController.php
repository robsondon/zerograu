<?PHP
namespace App\Controller\Admin;
use App\Controller\AppController;

class AdminAppController extends AppController
{


    public function initialize()
    {
        parent::initialize();
        //set layout
        $this->viewBuilder()->layout('admin');
        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Painels',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Pages',
                'action' => 'display',
                'home'
            ]
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authorize' => 'Controller',
        ]);
    }



}