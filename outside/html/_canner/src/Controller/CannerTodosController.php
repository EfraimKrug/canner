<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CannerTodos Controller
 *
 * @property \App\Model\Table\CannerTodosTable $CannerTodos
 *
 * @method \App\Model\Entity\CannerTodo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CannerTodosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Canners', 'Owners']
        ];
        $cannerTodos = $this->paginate($this->CannerTodos);

        $this->set(compact('cannerTodos'));
    }

    /**
     * View method
     *
     * @param string|null $id Canner Todo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cannerTodo = $this->CannerTodos->get($id, [
            'contain' => ['Canners', 'Owners']
        ]);

        $this->set('cannerTodo', $cannerTodo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cannerTodo = $this->CannerTodos->newEntity();
        if ($this->request->is('post')) {
            $cannerTodo = $this->CannerTodos->patchEntity($cannerTodo, $this->request->getData());
            if ($this->CannerTodos->save($cannerTodo)) {
                $this->Flash->success(__('The canner todo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canner todo could not be saved. Please, try again.'));
        }
        $canners = $this->CannerTodos->Canners->find('list', ['limit' => 200]);
        $owners = $this->CannerTodos->Owners->find('list', ['limit' => 200]);
        $this->set(compact('cannerTodo', 'canners', 'owners'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Canner Todo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cannerTodo = $this->CannerTodos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cannerTodo = $this->CannerTodos->patchEntity($cannerTodo, $this->request->getData());
            if ($this->CannerTodos->save($cannerTodo)) {
                $this->Flash->success(__('The canner todo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canner todo could not be saved. Please, try again.'));
        }
        $canners = $this->CannerTodos->Canners->find('list', ['limit' => 200]);
        $owners = $this->CannerTodos->Owners->find('list', ['limit' => 200]);
        $this->set(compact('cannerTodo', 'canners', 'owners'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Canner Todo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cannerTodo = $this->CannerTodos->get($id);
        if ($this->CannerTodos->delete($cannerTodo)) {
            $this->Flash->success(__('The canner todo has been deleted.'));
        } else {
            $this->Flash->error(__('The canner todo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
