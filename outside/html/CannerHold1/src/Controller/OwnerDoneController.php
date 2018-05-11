<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OwnerDone Controller
 *
 * @property \App\Model\Table\OwnerDoneTable $OwnerDone
 *
 * @method \App\Model\Entity\OwnerDone[] paginate($object = null, array $settings = [])
 */
class OwnerDoneController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $ownerDone = $this->paginate($this->OwnerDone);

        $this->set(compact('ownerDone'));
    }

    /**
     * View method
     *
     * @param string|null $id Owner Done id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ownerDone = $this->OwnerDone->get($id, [
            'contain' => []
        ]);

        $this->set('ownerDone', $ownerDone);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ownerDone = $this->OwnerDone->newEntity();
        if ($this->request->is('post')) {
            $ownerDone = $this->OwnerDone->patchEntity($ownerDone, $this->request->getData());
            if ($this->OwnerDone->save($ownerDone)) {
                $this->Flash->success(__('The owner done has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The owner done could not be saved. Please, try again.'));
        }
        $this->set(compact('ownerDone'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Owner Done id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ownerDone = $this->OwnerDone->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ownerDone = $this->OwnerDone->patchEntity($ownerDone, $this->request->getData());
            if ($this->OwnerDone->save($ownerDone)) {
                $this->Flash->success(__('The owner done has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The owner done could not be saved. Please, try again.'));
        }
        $this->set(compact('ownerDone'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Owner Done id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ownerDone = $this->OwnerDone->get($id);
        if ($this->OwnerDone->delete($ownerDone)) {
            $this->Flash->success(__('The owner done has been deleted.'));
        } else {
            $this->Flash->error(__('The owner done could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
