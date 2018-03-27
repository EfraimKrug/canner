<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CannerDeal Controller
 *
 * @property \App\Model\Table\CannerDealTable $CannerDeal
 *
 * @method \App\Model\Entity\CannerDeal[] paginate($object = null, array $settings = [])
 */
class CannerDealController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $cannerDeal = $this->paginate($this->CannerDeal);

        $this->set(compact('cannerDeal'));
    }

    /**
     * View method
     *
     * @param string|null $id Canner Deal id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cannerDeal = $this->CannerDeal->get($id, [
            'contain' => []
        ]);

        $this->set('cannerDeal', $cannerDeal);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cannerDeal = $this->CannerDeal->newEntity();
        if ($this->request->is('post')) {
            $cannerDeal = $this->CannerDeal->patchEntity($cannerDeal, $this->request->getData());
            if ($this->CannerDeal->save($cannerDeal)) {
                $this->Flash->success(__('The canner deal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canner deal could not be saved. Please, try again.'));
        }
        $this->set(compact('cannerDeal'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Canner Deal id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cannerDeal = $this->CannerDeal->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cannerDeal = $this->CannerDeal->patchEntity($cannerDeal, $this->request->getData());
            if ($this->CannerDeal->save($cannerDeal)) {
                $this->Flash->success(__('The canner deal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canner deal could not be saved. Please, try again.'));
        }
        $this->set(compact('cannerDeal'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Canner Deal id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cannerDeal = $this->CannerDeal->get($id);
        if ($this->CannerDeal->delete($cannerDeal)) {
            $this->Flash->success(__('The canner deal has been deleted.'));
        } else {
            $this->Flash->error(__('The canner deal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
