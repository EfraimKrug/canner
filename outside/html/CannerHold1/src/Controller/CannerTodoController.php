<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CannerTodo Controller
 *
 * @property \App\Model\Table\CannerTodoTable $CannerTodo
 *
 * @method \App\Model\Entity\CannerTodo[] paginate($object = null, array $settings = [])
 */
class CannerTodoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $cannerTodo = $this->paginate($this->CannerTodo);

        $this->set(compact('cannerTodo'));
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
        $cannerTodo = $this->CannerTodo->get($id, [
            'contain' => []
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
        $cannerTodo = $this->CannerTodo->newEntity();
        if ($this->request->is('post')) {
            $cannerTodo = $this->CannerTodo->patchEntity($cannerTodo, $this->request->getData());
            if ($this->CannerTodo->save($cannerTodo)) {
                $this->Flash->success(__('The canner todo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canner todo could not be saved. Please, try again.'));
        }
        $this->set(compact('cannerTodo'));
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
        $cannerTodo = $this->CannerTodo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cannerTodo = $this->CannerTodo->patchEntity($cannerTodo, $this->request->getData());
            if ($this->CannerTodo->save($cannerTodo)) {
                $this->Flash->success(__('The canner todo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canner todo could not be saved. Please, try again.'));
        }
        $this->set(compact('cannerTodo'));
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
        $cannerTodo = $this->CannerTodo->get($id);
        if ($this->CannerTodo->delete($cannerTodo)) {
            $this->Flash->success(__('The canner todo has been deleted.'));
        } else {
            $this->Flash->error(__('The canner todo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
