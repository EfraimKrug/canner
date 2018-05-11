<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CannerContracts Controller
 *
 * @property \App\Model\Table\CannerContractsTable $CannerContracts
 *
 * @method \App\Model\Entity\CannerContract[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CannerContractsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Canners']
        ];
        $cannerContracts = $this->paginate($this->CannerContracts);

        $this->set(compact('cannerContracts'));
    }

    /**
     * View method
     *
     * @param string|null $id Canner Contract id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cannerContract = $this->CannerContracts->get($id, [
            'contain' => ['Canners']
        ]);

        $this->set('cannerContract', $cannerContract);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cannerContract = $this->CannerContracts->newEntity();
        if ($this->request->is('post')) {
            $cannerContract = $this->CannerContracts->patchEntity($cannerContract, $this->request->getData());
            if ($this->CannerContracts->save($cannerContract)) {
                $this->Flash->success(__('The canner contract has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canner contract could not be saved. Please, try again.'));
        }
        $canners = $this->CannerContracts->Canners->find('list', ['limit' => 200]);
        $this->set(compact('cannerContract', 'canners'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Canner Contract id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cannerContract = $this->CannerContracts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cannerContract = $this->CannerContracts->patchEntity($cannerContract, $this->request->getData());
            if ($this->CannerContracts->save($cannerContract)) {
                $this->Flash->success(__('The canner contract has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canner contract could not be saved. Please, try again.'));
        }
        $canners = $this->CannerContracts->Canners->find('list', ['limit' => 200]);
        $this->set(compact('cannerContract', 'canners'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Canner Contract id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cannerContract = $this->CannerContracts->get($id);
        if ($this->CannerContracts->delete($cannerContract)) {
            $this->Flash->success(__('The canner contract has been deleted.'));
        } else {
            $this->Flash->error(__('The canner contract could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
