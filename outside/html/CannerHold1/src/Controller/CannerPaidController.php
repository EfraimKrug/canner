<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CannerPaid Controller
 *
 * @property \App\Model\Table\CannerPaidTable $CannerPaid
 *
 * @method \App\Model\Entity\CannerPaid[] paginate($object = null, array $settings = [])
 */
class CannerPaidController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $cannerPaid = $this->paginate($this->CannerPaid);

        $this->set(compact('cannerPaid'));
    }

    /**
     * View method
     *
     * @param string|null $id Canner Paid id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cannerPaid = $this->CannerPaid->get($id, [
            'contain' => []
        ]);

        $this->set('cannerPaid', $cannerPaid);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cannerPaid = $this->CannerPaid->newEntity();
        if ($this->request->is('post')) {
            $cannerPaid = $this->CannerPaid->patchEntity($cannerPaid, $this->request->getData());
            if ($this->CannerPaid->save($cannerPaid)) {
                $this->Flash->success(__('The canner paid has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canner paid could not be saved. Please, try again.'));
        }
        $this->set(compact('cannerPaid'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Canner Paid id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cannerPaid = $this->CannerPaid->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cannerPaid = $this->CannerPaid->patchEntity($cannerPaid, $this->request->getData());
            if ($this->CannerPaid->save($cannerPaid)) {
                $this->Flash->success(__('The canner paid has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canner paid could not be saved. Please, try again.'));
        }
        $this->set(compact('cannerPaid'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Canner Paid id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cannerPaid = $this->CannerPaid->get($id);
        if ($this->CannerPaid->delete($cannerPaid)) {
            $this->Flash->success(__('The canner paid has been deleted.'));
        } else {
            $this->Flash->error(__('The canner paid could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
