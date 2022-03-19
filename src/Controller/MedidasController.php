<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Medidas Controller
 *
 * @property \App\Model\Table\MedidasTable $Medidas
 * @method \App\Model\Entity\Medida[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MedidasController extends AppController
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
        $medidas = $this->paginate($this->Medidas);

        $this->set(compact('medidas'));
    }

    /**
     * View method
     *
     * @param string|null $id Medida id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $medida = $this->Medidas->get($id, [
            'contain' => ['Users', 'Productos'],
        ]);

        $this->set(compact('medida'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $medida = $this->Medidas->newEmptyEntity();
        if ($this->request->is('post')) {
            $medida = $this->Medidas->patchEntity($medida, $this->request->getData());
            if ($this->Medidas->save($medida)) {
                $this->Flash->success(__('The medida has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medida could not be saved. Please, try again.'));
        }
        $users = $this->Medidas->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('medida', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Medida id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $medida = $this->Medidas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $medida = $this->Medidas->patchEntity($medida, $this->request->getData());
            if ($this->Medidas->save($medida)) {
                $this->Flash->success(__('The medida has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medida could not be saved. Please, try again.'));
        }
        $users = $this->Medidas->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('medida', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Medida id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $medida = $this->Medidas->get($id);
        if ($this->Medidas->delete($medida)) {
            $this->Flash->success(__('The medida has been deleted.'));
        } else {
            $this->Flash->error(__('The medida could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
