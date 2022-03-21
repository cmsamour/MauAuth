<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Proveedors Controller
 *
 * @property \App\Model\Table\ProveedorsTable $Proveedors
 * @method \App\Model\Entity\Proveedor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProveedorsController extends AppController
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
        $proveedors = $this->paginate($this->Proveedors);

        $this->set(compact('proveedors'));
    }

    /**
     * View method
     *
     * @param string|null $id Proveedor id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proveedor = $this->Proveedors->get($id, [
            'contain' => ['Users', 'Movimientoencabezados'],
        ]);

        $this->set(compact('proveedor'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proveedor = $this->Proveedors->newEmptyEntity();
        if ($this->request->is('post')) {
            $proveedor = $this->Proveedors->patchEntity($proveedor, $this->request->getData());
            if ($this->Proveedors->save($proveedor)) {
                $this->Flash->success(__('The proveedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proveedor could not be saved. Please, try again.'));
        }
        $users = $this->Proveedors->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('proveedor', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Proveedor id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proveedor = $this->Proveedors->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proveedor = $this->Proveedors->patchEntity($proveedor, $this->request->getData());
            if ($this->Proveedors->save($proveedor)) {
                $this->Flash->success(__('The proveedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proveedor could not be saved. Please, try again.'));
        }
        $users = $this->Proveedors->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('proveedor', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Proveedor id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proveedor = $this->Proveedors->get($id);
        if ($this->Proveedors->delete($proveedor)) {
            $this->Flash->success(__('The proveedor has been deleted.'));
        } else {
            $this->Flash->error(__('The proveedor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
