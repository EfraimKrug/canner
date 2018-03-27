<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OwnerDones Controller
 *
 * @property \App\Model\Table\OwnerDonesTable $OwnerDones
 *
 * @method \App\Model\Entity\OwnerDone[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OwnerDonesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Owners', 'Canners']
        ];
        $ownerDones = $this->paginate($this->OwnerDones);

        $this->set(compact('ownerDones'));
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
        $ownerDone = $this->OwnerDones->get($id, [
            'contain' => ['Owners', 'Canners']
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
        $ownerDone = $this->OwnerDones->newEntity();
        if ($this->request->is('post')) {
            $ownerDone = $this->OwnerDones->patchEntity($ownerDone, $this->request->getData());
            if ($this->OwnerDones->save($ownerDone)) {
                $this->Flash->success(__('The owner done has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The owner done could not be saved. Please, try again.'));
        }
        $owners = $this->OwnerDones->Owners->find('list', ['limit' => 200]);
        $canners = $this->OwnerDones->Canners->find('list', ['limit' => 200]);
        $this->set(compact('ownerDone', 'owners', 'canners'));
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
        $ownerDone = $this->OwnerDones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ownerDone = $this->OwnerDones->patchEntity($ownerDone, $this->request->getData());
            if ($this->OwnerDones->save($ownerDone)) {
                $this->Flash->success(__('The owner done has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The owner done could not be saved. Please, try again.'));
        }
        $owners = $this->OwnerDones->Owners->find('list', ['limit' => 200]);
        $canners = $this->OwnerDones->Canners->find('list', ['limit' => 200]);
        $this->set(compact('ownerDone', 'owners', 'canners'));
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
        $ownerDone = $this->OwnerDones->get($id);
        if ($this->OwnerDones->delete($ownerDone)) {
            $this->Flash->success(__('The owner done has been deleted.'));
        } else {
            $this->Flash->error(__('The owner done could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
