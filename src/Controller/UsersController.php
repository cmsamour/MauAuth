<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Evente\EventInterface;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('user'));
        //$logeado = $result = $this->Authentication->getResult();
        $name = $this->request->getSession()->read('User.name');
        $this->set(compact('name'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login(){
    	

	    $this->request->allowMethod(['get', 'post']);
	    $result = $this->Authentication->getResult();
	    // regardless of POST or GET, redirect if user is logged in
	    if ($result->isValid()) {
	        // redirect to /articles after login success
	        $redirect = $this->request->getQuery('redirect', [
	            'controller' => 'Verification',
	            'action' => 'index',
	        ]);
	    
	    $this->request->getSession()->write('2fa_needed', true);
    	    return $this->redirect($redirect);
    	}
    	// display error if user submitted and authentication failed
    	if ($this->request->is('post') && !$result->isValid()) {
    	    $this->Flash->error(__('Invalid username or password'));
    	}
    }

    public function logout()
    {
	
	    $result = $this->Authentication->getResult();

	if ($result->isValid()){
		$this->Authentication->logout();
		return $this->redirect(['controller' => 'Users', 'action' => 'login']);
	}
    }

	public function beforeFilter(\Cake\Event\EventInterface $event)
	{
	    parent::beforeFilter($event);
	    // for all controllers in our application, make index and view
	    // actions public, skipping the authentication check
	    $this->Authentication->addUnauthenticatedActions(['login']);
	}

}
