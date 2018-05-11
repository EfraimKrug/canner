<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OwnerPayments Controller
 *
 * @property \App\Model\Table\OwnerPaymentsTable $OwnerPayments
 *
 * @method \App\Model\Entity\OwnerPayment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OwnerPaymentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Owners']
        ];
        $ownerPayments = $this->paginate($this->OwnerPayments);

        $this->set(compact('ownerPayments'));
    }

    /**
     * View method
     *
     * @param string|null $id Owner Payment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ownerPayment = $this->OwnerPayments->get($id, [
            'contain' => ['Owners']
        ]);

        $this->set('ownerPayment', $ownerPayment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ownerPayment = $this->OwnerPayments->newEntity();
        if ($this->request->is('post')) {
            $ownerPayment = $this->OwnerPayments->patchEntity($ownerPayment, $this->request->getData());
            if ($this->OwnerPayments->save($ownerPayment)) {
                $this->Flash->success(__('The owner payment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The owner payment could not be saved. Please, try again.'));
        }
        $owners = $this->OwnerPayments->Owners->find('list', ['limit' => 200]);
        $this->set(compact('ownerPayment', 'owners'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Owner Payment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ownerPayment = $this->OwnerPayments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ownerPayment = $this->OwnerPayments->patchEntity($ownerPayment, $this->request->getData());
            if ($this->OwnerPayments->save($ownerPayment)) {
                $this->Flash->success(__('The owner payment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The owner payment could not be saved. Please, try again.'));
        }
        $owners = $this->OwnerPayments->Owners->find('list', ['limit' => 200]);
        $this->set(compact('ownerPayment', 'owners'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Owner Payment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ownerPayment = $this->OwnerPayments->get($id);
        if ($this->OwnerPayments->delete($ownerPayment)) {
            $this->Flash->success(__('The owner payment has been deleted.'));
        } else {
            $this->Flash->error(__('The owner payment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
