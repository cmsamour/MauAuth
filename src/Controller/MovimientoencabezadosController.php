<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Movimientoencabezados Controller
 *
 * @property \App\Model\Table\MovimientoencabezadosTable $Movimientoencabezados
 * @method \App\Model\Entity\Movimientoencabezado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MovimientoencabezadosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Proveedors', 'Tipomovimientos', 'Turnos', 'Users'],
        ];
        $movimientoencabezados = $this->paginate($this->Movimientoencabezados);

        $this->set(compact('movimientoencabezados'));
    }

    /**
     * View method
     *
     * @param string|null $id Movimientoencabezado id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $movimientoencabezado = $this->Movimientoencabezados->get($id, [
            'contain' => ['Proveedors', 'Tipomovimientos', 'Turnos', 'Users', 'Movimientodetalles'],
        ]);

        $this->set(compact('movimientoencabezado'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $movimientoencabezado = $this->Movimientoencabezados->newEmptyEntity();
        if ($this->request->is('post')) {
            $movimientoencabezado = $this->Movimientoencabezados->patchEntity($movimientoencabezado, $this->request->getData());
            if ($this->Movimientoencabezados->save($movimientoencabezado)) {
                $this->Flash->success(__('The movimientoencabezado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movimientoencabezado could not be saved. Please, try again.'));
        }
        $proveedors = $this->Movimientoencabezados->Proveedors->find('list', ['limit' => 200])->all();
        $tipomovimientos = $this->Movimientoencabezados->Tipomovimientos->find('list', ['limit' => 200])->all();
        $turnos = $this->Movimientoencabezados->Turnos->find('list', ['limit' => 200])->all();
        $users = $this->Movimientoencabezados->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('movimientoencabezado', 'proveedors', 'tipomovimientos', 'turnos', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Movimientoencabezado id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $movimientoencabezado = $this->Movimientoencabezados->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $movimientoencabezado = $this->Movimientoencabezados->patchEntity($movimientoencabezado, $this->request->getData());
            if ($this->Movimientoencabezados->save($movimientoencabezado)) {
                $this->Flash->success(__('The movimientoencabezado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movimientoencabezado could not be saved. Please, try again.'));
        }
        $proveedors = $this->Movimientoencabezados->Proveedors->find('list', ['limit' => 200])->all();
        $tipomovimientos = $this->Movimientoencabezados->Tipomovimientos->find('list', ['limit' => 200])->all();
        $turnos = $this->Movimientoencabezados->Turnos->find('list', ['limit' => 200])->all();
        $users = $this->Movimientoencabezados->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('movimientoencabezado', 'proveedors', 'tipomovimientos', 'turnos', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Movimientoencabezado id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $movimientoencabezado = $this->Movimientoencabezados->get($id);
        if ($this->Movimientoencabezados->delete($movimientoencabezado)) {
            $this->Flash->success(__('The movimientoencabezado has been deleted.'));
        } else {
            $this->Flash->error(__('The movimientoencabezado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
