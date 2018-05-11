<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OwnerPaid Controller
 *
 * @property \App\Model\Table\OwnerPaidTable $OwnerPaid
 *
 * @method \App\Model\Entity\OwnerPaid[] paginate($object = null, array $settings = [])
 */
class OwnerPaidController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $ownerPaid = $this->paginate($this->OwnerPaid);

        $this->set(compact('ownerPaid'));
    }

    /**
     * View method
     *
     * @param string|null $id Owner Paid id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ownerPaid = $this->OwnerPaid->get($id, [
            'contain' => []
        ]);

        $this->set('ownerPaid', $ownerPaid);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ownerPaid = $this->OwnerPaid->newEntity();
        if ($this->request->is('post')) {
            $ownerPaid = $this->OwnerPaid->patchEntity($ownerPaid, $this->request->getData());
            if ($this->OwnerPaid->save($ownerPaid)) {
                $this->Flash->success(__('The owner paid has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The owner paid could not be saved. Please, try again.'));
        }
        $this->set(compact('ownerPaid'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Owner Paid id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ownerPaid = $this->OwnerPaid->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ownerPaid = $this->OwnerPaid->patchEntity($ownerPaid, $this->request->getData());
            if ($this->OwnerPaid->save($ownerPaid)) {
                $this->Flash->success(__('The owner paid has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The owner paid could not be saved. Please, try again.'));
        }
        $this->set(compact('ownerPaid'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Owner Paid id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ownerPaid = $this->OwnerPaid->get($id);
        if ($this->OwnerPaid->delete($ownerPaid)) {
            $this->Flash->success(__('The owner paid has been deleted.'));
        } else {
            $this->Flash->error(__('The owner paid could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
