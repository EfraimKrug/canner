<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry; 
/**
 * Canner Controller
 *
 * @property \App\Model\Table\CannerTable $Canner
 *
 * @method \App\Model\Entity\Canner[] paginate($object = null, array $settings = [])
 */
class CannerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $canner = $this->paginate($this->Canner);
	$id = -1;
	foreach($canner as $p => $v){
		$x =  $v;	
		$id = $x['ID'];
	}


	if($id < 0){
		return;
	}
	
	$cannerToDoTable = TableRegistry::get('CannerTodo');
  	$cannerToDo = $cannerToDoTable->get($id, [
		'contain' => []
	]);

	if(isset($cannerToDo))
	$this->set(compact('cannerToDo'));
        $this->set(compact('canner'));
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
        $canner = $this->Canner->get($id, [
            'contain' => []
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
        $canner = $this->Canner->newEntity();
        if ($this->request->is('post')) {
            $canner = $this->Canner->patchEntity($canner, $this->request->getData());
            if ($this->Canner->save($canner)) {
                $this->Flash->success(__('The canner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canner could not be saved. Please, try again.'));
        }
        $this->set(compact('canner'));
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
        $canner = $this->Canner->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $canner = $this->Canner->patchEntity($canner, $this->request->getData());
            if ($this->Canner->save($canner)) {
                $this->Flash->success(__('The canner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canner could not be saved. Please, try again.'));
        }
        $this->set(compact('canner'));
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
        $canner = $this->Canner->get($id);
        if ($this->Canner->delete($canner)) {
            $this->Flash->success(__('The canner has been deleted.'));
        } else {
            $this->Flash->error(__('The canner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
