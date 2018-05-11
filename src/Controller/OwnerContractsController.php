<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OwnerContracts Controller
 *
 * @property \App\Model\Table\OwnerContractsTable $OwnerContracts
 *
 * @method \App\Model\Entity\OwnerContract[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OwnerContractsController extends AppController
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
        $ownerContracts = $this->paginate($this->OwnerContracts);

        $this->set(compact('ownerContracts'));
    }

    /**
     * View method
     *
     * @param string|null $id Owner Contract id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ownerContract = $this->OwnerContracts->get($id, [
            'contain' => ['Owners']
        ]);

        $this->set('ownerContract', $ownerContract);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ownerContract = $this->OwnerContracts->newEntity();
        if ($this->request->is('post')) {
            $ownerContract = $this->OwnerContracts->patchEntity($ownerContract, $this->request->getData());
            if ($this->OwnerContracts->save($ownerContract)) {
                $this->Flash->success(__('The owner contract has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The owner contract could not be saved. Please, try again.'));
        }
        $owners = $this->OwnerContracts->Owners->find('list', ['limit' => 200]);
        $this->set(compact('ownerContract', 'owners'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Owner Contract id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ownerContract = $this->OwnerContracts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ownerContract = $this->OwnerContracts->patchEntity($ownerContract, $this->request->getData());
            if ($this->OwnerContracts->save($ownerContract)) {
                $this->Flash->success(__('The owner contract has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The owner contract could not be saved. Please, try again.'));
        }
        $owners = $this->OwnerContracts->Owners->find('list', ['limit' => 200]);
        $this->set(compact('ownerContract', 'owners'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Owner Contract id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ownerContract = $this->OwnerContracts->get($id);
        if ($this->OwnerContracts->delete($ownerContract)) {
            $this->Flash->success(__('The owner contract has been deleted.'));
        } else {
            $this->Flash->error(__('The owner contract could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
