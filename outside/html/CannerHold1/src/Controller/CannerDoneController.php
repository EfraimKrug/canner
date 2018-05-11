<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CannerDone Controller
 *
 * @property \App\Model\Table\CannerDoneTable $CannerDone
 *
 * @method \App\Model\Entity\CannerDone[] paginate($object = null, array $settings = [])
 */
class CannerDoneController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $cannerDone = $this->paginate($this->CannerDone);

        $this->set(compact('cannerDone'));
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
        $cannerDone = $this->CannerDone->get($id, [
            'contain' => []
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
        $cannerDone = $this->CannerDone->newEntity();
        if ($this->request->is('post')) {
            $cannerDone = $this->CannerDone->patchEntity($cannerDone, $this->request->getData());
            if ($this->CannerDone->save($cannerDone)) {
                $this->Flash->success(__('The canner done has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canner done could not be saved. Please, try again.'));
        }
        $this->set(compact('cannerDone'));
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
        $cannerDone = $this->CannerDone->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cannerDone = $this->CannerDone->patchEntity($cannerDone, $this->request->getData());
            if ($this->CannerDone->save($cannerDone)) {
                $this->Flash->success(__('The canner done has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canner done could not be saved. Please, try again.'));
        }
        $this->set(compact('cannerDone'));
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
        $cannerDone = $this->CannerDone->get($id);
        if ($this->CannerDone->delete($cannerDone)) {
            $this->Flash->success(__('The canner done has been deleted.'));
        } else {
            $this->Flash->error(__('The canner done could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
