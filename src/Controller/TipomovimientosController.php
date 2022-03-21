<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipomovimientos Controller
 *
 * @property \App\Model\Table\TipomovimientosTable $Tipomovimientos
 * @method \App\Model\Entity\Tipomovimiento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipomovimientosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $tipomovimientos = $this->paginate($this->Tipomovimientos);

        $this->set(compact('tipomovimientos'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipomovimiento id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipomovimiento = $this->Tipomovimientos->get($id, [
            'contain' => ['Users', 'Movimientoencabezados'],
        ]);

        $this->set(compact('tipomovimiento'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipomovimiento = $this->Tipomovimientos->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipomovimiento = $this->Tipomovimientos->patchEntity($tipomovimiento, $this->request->getData());
            if ($this->Tipomovimientos->save($tipomovimiento)) {
                $this->Flash->success(__('The tipomovimiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipomovimiento could not be saved. Please, try again.'));
        }
        $users = $this->Tipomovimientos->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('tipomovimiento', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipomovimiento id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipomovimiento = $this->Tipomovimientos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipomovimiento = $this->Tipomovimientos->patchEntity($tipomovimiento, $this->request->getData());
            if ($this->Tipomovimientos->save($tipomovimiento)) {
                $this->Flash->success(__('The tipomovimiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipomovimiento could not be saved. Please, try again.'));
        }
        $users = $this->Tipomovimientos->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('tipomovimiento', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipomovimiento id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipomovimiento = $this->Tipomovimientos->get($id);
        if ($this->Tipomovimientos->delete($tipomovimiento)) {
            $this->Flash->success(__('The tipomovimiento has been deleted.'));
        } else {
            $this->Flash->error(__('The tipomovimiento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
