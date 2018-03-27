<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OwnerDeal Controller
 *
 * @property \App\Model\Table\OwnerDealTable $OwnerDeal
 *
 * @method \App\Model\Entity\OwnerDeal[] paginate($object = null, array $settings = [])
 */
class OwnerDealController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $ownerDeal = $this->paginate($this->OwnerDeal);

        $this->set(compact('ownerDeal'));
    }

    /**
     * View method
     *
     * @param string|null $id Owner Deal id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ownerDeal = $this->OwnerDeal->get($id, [
            'contain' => []
        ]);

        $this->set('ownerDeal', $ownerDeal);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ownerDeal = $this->OwnerDeal->newEntity();
        if ($this->request->is('post')) {
            $ownerDeal = $this->OwnerDeal->patchEntity($ownerDeal, $this->request->getData());
            if ($this->OwnerDeal->save($ownerDeal)) {
                $this->Flash->success(__('The owner deal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The owner deal could not be saved. Please, try again.'));
        }
        $this->set(compact('ownerDeal'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Owner Deal id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ownerDeal = $this->OwnerDeal->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ownerDeal = $this->OwnerDeal->patchEntity($ownerDeal, $this->request->getData());
            if ($this->OwnerDeal->save($ownerDeal)) {
                $this->Flash->success(__('The owner deal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The owner deal could not be saved. Please, try again.'));
        }
        $this->set(compact('ownerDeal'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Owner Deal id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ownerDeal = $this->OwnerDeal->get($id);
        if ($this->OwnerDeal->delete($ownerDeal)) {
            $this->Flash->success(__('The owner deal has been deleted.'));
        } else {
            $this->Flash->error(__('The owner deal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
