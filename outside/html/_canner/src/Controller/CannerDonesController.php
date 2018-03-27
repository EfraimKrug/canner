<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CannerDones Controller
 *
 * @property \App\Model\Table\CannerDonesTable $CannerDones
 *
 * @method \App\Model\Entity\CannerDone[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CannerDonesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Canners', 'Owners']
        ];
        $cannerDones = $this->paginate($this->CannerDones);

        $this->set(compact('cannerDones'));
    }

    /**
     * View method
     *
     * @param string|null $id Canner Done id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cannerDone = $this->CannerDones->get($id, [
            'contain' => ['Canners', 'Owners']
        ]);

        $this->set('cannerDone', $cannerDone);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cannerDone = $this->CannerDones->newEntity();
        if ($this->request->is('post')) {
            $cannerDone = $this->CannerDones->patchEntity($cannerDone, $this->request->getData());
            if ($this->CannerDones->save($cannerDone)) {
                $this->Flash->success(__('The canner done has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canner done could not be saved. Please, try again.'));
        }
        $canners = $this->CannerDones->Canners->find('list', ['limit' => 200]);
        $owners = $this->CannerDones->Owners->find('list', ['limit' => 200]);
        $this->set(compact('cannerDone', 'canners', 'owners'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Canner Done id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cannerDone = $this->CannerDones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cannerDone = $this->CannerDones->patchEntity($cannerDone, $this->request->getData());
            if ($this->CannerDones->save($cannerDone)) {
                $this->Flash->success(__('The canner done has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canner done could not be saved. Please, try again.'));
        }
        $canners = $this->CannerDones->Canners->find('list', ['limit' => 200]);
        $owners = $this->CannerDones->Owners->find('list', ['limit' => 200]);
        $this->set(compact('cannerDone', 'canners', 'owners'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Canner Done id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cannerDone = $this->CannerDones->get($id);
        if ($this->CannerDones->delete($cannerDone)) {
            $this->Flash->success(__('The canner done has been deleted.'));
        } else {
            $this->Flash->error(__('The canner done could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
