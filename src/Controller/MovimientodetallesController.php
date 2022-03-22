<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Movimientodetalles Controller
 *
 * @property \App\Model\Table\MovimientodetallesTable $Movimientodetalles
 * @method \App\Model\Entity\Movimientodetalle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MovimientodetallesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Movimientoencabezados', 'Productos', 'Users'],
        ];
        $movimientodetalles = $this->paginate($this->Movimientodetalles);

        $this->set(compact('movimientodetalles'));
    }

    /**
     * View method
     *
     * @param string|null $id Movimientodetalle id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $movimientodetalle = $this->Movimientodetalles->get($id, [
            'contain' => ['Movimientoencabezados', 'Productos', 'Users'],
        ]);

        $this->set(compact('movimientodetalle'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
       
            $movimientodetalle = $this->Movimientodetalles->newEmptyEntity();
            if ($this->request->is('post')) {
                $movimientodetalle = $this->Movimientodetalles->patchEntity($movimientodetalle, $this->request->getData());
                if ($this->Movimientodetalles->save($movimientodetalle)) {
                    $this->Flash->success(__('The movimientodetalle has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The movimientodetalle could not be saved. Please, try again.'));
            }
            
            //$movimientoencabezados = $this->Movimientodetalles->Movimientoencabezados->find('list', ['limit' => 200])->all();
            $movimientoencabezados = $this->Movimientodetalles->Movimientoencabezados->get($id);
            //$this->Movimientodetalles->Movimientoencabezados->id = $id;
            //$movimientoencabezados =  $this->Movimientodetalles->Movimientoencabezados;
            //print_r($movimientodetalle->movimientoencabezado_id);
            //$movimientodetalle->movimientoencabezado_id  = $id;
            $productos = $this->Movimientodetalles->Productos->find('list', ['limit' => 200])->all();
            $users = $this->Movimientodetalles->Users->find('list', ['limit' => 200])->all();
            $this->set(compact('movimientodetalle', 'movimientoencabezados', 'productos', 'users'));
            //$this->set(compact('movimientodetalle', 'productos', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Movimientodetalle id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $movimientodetalle = $this->Movimientodetalles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $movimientodetalle = $this->Movimientodetalles->patchEntity($movimientodetalle, $this->request->getData());
            if ($this->Movimientodetalles->save($movimientodetalle)) {
                $this->Flash->success(__('The movimientodetalle has been saved.'));

                return $this->redirect(['controller' => 'Movimientoencabezados','action' => 'index']);
            }
            $this->Flash->error(__('The movimientodetalle could not be saved. Please, try again.'));
        }
        $movimientoencabezados = $this->Movimientodetalles->Movimientoencabezados->find('list', ['limit' => 200])->all();
        $productos = $this->Movimientodetalles->Productos->find('list', ['limit' => 200])->all();
        $users = $this->Movimientodetalles->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('movimientodetalle', 'movimientoencabezados', 'productos', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Movimientodetalle id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $movimientodetalle = $this->Movimientodetalles->get($id);
        if ($this->Movimientodetalles->delete($movimientodetalle)) {
            $this->Flash->success(__('The movimientodetalle has been deleted.'));
        } else {
            $this->Flash->error(__('The movimientodetalle could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
