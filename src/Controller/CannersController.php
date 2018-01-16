<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Canners Controller
 *
 * @property \App\Model\Table\CannersTable $Canners
 *
 * @method \App\Model\Entity\Canner[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CannersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $canners = $this->paginate($this->Canners);

        $this->set(compact('canners'));
    }

    public function entry()
    {

  //     $this->paginate = [
  //         'contain' => ['Users']
  //      ];
  //       $canners = $this->paginate($this->Canners);
  //
  //     $this->set(compact('canners'));
    }


    /**
     * View method
     *
     * @param string|null $id Canner id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $canner = $this->Canners->get($id, [
            'contain' => ['Users', 'CannerContracts', 'CannerDones', 'CannerPayments', 'CannerTodos', 'OwnerDones']
        ]);

        $this->set('canner', $canner);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $canner = $this->Canners->newEntity();
        if ($this->request->is('post')) {
	    $userID = $userID = $this->request->params['?']['userID'];
            $canner = $this->Canners->patchEntity($canner, $this->request->getData());
	    $canner->user_id = $userID;
	    $canner->role = 'canner';
	    $canner->start_date = date('Y-m-d H:i:s');
            if ($this->Canners->save($canner)) {
                $this->Flash->success(__('The canner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canner could not be saved. Please, try again.'));
        }
        $users = $this->Canners->Users->find('list', ['limit' => 200]);
        $this->set(compact('canner', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Canner id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $canner = $this->Canners->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $canner = $this->Canners->patchEntity($canner, $this->request->getData());
            if ($this->Canners->save($canner)) {
                $this->Flash->success(__('The canner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canner could not be saved. Please, try again.'));
        }
        $users = $this->Canners->Users->find('list', ['limit' => 200]);
        $this->set(compact('canner', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Canner id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $canner = $this->Canners->get($id);
        if ($this->Canners->delete($canner)) {
            $this->Flash->success(__('The canner has been deleted.'));
        } else {
            $this->Flash->error(__('The canner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
