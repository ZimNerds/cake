<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Owners Controller
 *
 * @property \App\Model\Table\OwnersTable $Owners
 */
class OwnersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Countries', 'Cities', 'States']
        ];
        $owners = $this->paginate($this->Owners);

        $this->set(compact('owners'));
        $this->set('_serialize', ['owners']);
    }

    /**
     * View method
     *
     * @param string|null $id Owner id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $owner = $this->Owners->get($id, [
            'contain' => ['Countries', 'Cities', 'States', 'Properties', 'RentalHistory']
        ]);

        $this->set('owner', $owner);
        $this->set('_serialize', ['owner']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $owner = $this->Owners->newEntity();
        if ($this->request->is('post')) {
            $owner = $this->Owners->patchEntity($owner, $this->request->data);
            if ($this->Owners->save($owner)) {
                $this->Flash->success(__('The owner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The owner could not be saved. Please, try again.'));
        }
        $countries = $this->Owners->Countries->find('list', ['limit' => 600]);
        $cities = $this->Owners->Cities->find('list', ['limit' => 600]);
        $states = $this->Owners->States->find('list', ['limit' => 600]);
        $this->set(compact('owner', 'countries', 'cities', 'states'));
        $this->set('_serialize', ['owner']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Owner id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $owner = $this->Owners->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $owner = $this->Owners->patchEntity($owner, $this->request->data);
            if ($this->Owners->save($owner)) {
                $this->Flash->success(__('The owner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The owner could not be saved. Please, try again.'));
        }
        $countries = $this->Owners->Countries->find('list', ['limit' => 200]);
        $cities = $this->Owners->Cities->find('list', ['limit' => 200]);
        $states = $this->Owners->States->find('list', ['limit' => 200]);
        $this->set(compact('owner', 'countries', 'cities', 'states'));
        $this->set('_serialize', ['owner']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Owner id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $owner = $this->Owners->get($id);
        if ($this->Owners->delete($owner)) {
            $this->Flash->success(__('The owner has been deleted.'));
        } else {
            $this->Flash->error(__('The owner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
