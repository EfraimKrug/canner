<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CannerPayments Controller
 *
 * @property \App\Model\Table\CannerPaymentsTable $CannerPayments
 *
 * @method \App\Model\Entity\CannerPayment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CannerPaymentsController extends AppController
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
        $cannerPayments = $this->paginate($this->CannerPayments);

        $this->set(compact('cannerPayments'));
    }

    /**
     * View method
     *
     * @param string|null $id Canner Payment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cannerPayment = $this->CannerPayments->get($id, [
            'contain' => ['Canners']
        ]);

        $this->set('cannerPayment', $cannerPayment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cannerPayment = $this->CannerPayments->newEntity();
        if ($this->request->is('post')) {
            $cannerPayment = $this->CannerPayments->patchEntity($cannerPayment, $this->request->getData());
            if ($this->CannerPayments->save($cannerPayment)) {
                $this->Flash->success(__('The canner payment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canner payment could not be saved. Please, try again.'));
        }
        $canners = $this->CannerPayments->Canners->find('list', ['limit' => 200]);
        $this->set(compact('cannerPayment', 'canners'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Canner Payment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cannerPayment = $this->CannerPayments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cannerPayment = $this->CannerPayments->patchEntity($cannerPayment, $this->request->getData());
            if ($this->CannerPayments->save($cannerPayment)) {
                $this->Flash->success(__('The canner payment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canner payment could not be saved. Please, try again.'));
        }
        $canners = $this->CannerPayments->Canners->find('list', ['limit' => 200]);
        $this->set(compact('cannerPayment', 'canners'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Canner Payment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cannerPayment = $this->CannerPayments->get($id);
        if ($this->CannerPayments->delete($cannerPayment)) {
            $this->Flash->success(__('The canner payment has been deleted.'));
        } else {
            $this->Flash->error(__('The canner payment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
