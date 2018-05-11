<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Owner Controller
 *
 * @property \App\Model\Table\OwnerTable $Owner
 *
 * @method \App\Model\Entity\Owner[] paginate($object = null, array $settings = [])
 */
class OwnerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $owner = $this->paginate($this->Owner);

        $this->set(compact('owner'));
    }

    /**
     * View method
     *
     * @param string|null $id Owner id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $owner = $this->Owner->get($id, [
            'contain' => []
        ]);

        $this->set('owner', $owner);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $owner = $this->Owner->newEntity();
        if ($this->request->is('post')) {
            $owner = $this->Owner->patchEntity($owner, $this->request->getData());
            if ($this->Owner->save($owner)) {
                $this->Flash->success(__('The owner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The owner could not be saved. Please, try again.'));
        }
        $this->set(compact('owner'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Owner id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $owner = $this->Owner->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $owner = $this->Owner->patchEntity($owner, $this->request->getData());
            if ($this->Owner->save($owner)) {
                $this->Flash->success(__('The owner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The owner could not be saved. Please, try again.'));
        }
        $this->set(compact('owner'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Owner id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $owner = $this->Owner->get($id);
        if ($this->Owner->delete($owner)) {
            $this->Flash->success(__('The owner has been deleted.'));
        } else {
            $this->Flash->error(__('The owner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
