<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsersRecords Controller
 *
 * @property \App\Model\Table\UsersRecordsTable $UsersRecords
 */
class UsersRecordsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Groups', 'Records']
        ];
        $usersRecords = $this->paginate($this->UsersRecords);

        $this->set(compact('usersRecords'));
        $this->set('_serialize', ['usersRecords']);
    }

    /**
     * View method
     *
     * @param string|null $id Users Record id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersRecord = $this->UsersRecords->get($id, [
            'contain' => ['Users', 'Groups', 'Records']
        ]);

        $this->set('usersRecord', $usersRecord);
        $this->set('_serialize', ['usersRecord']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersRecord = $this->UsersRecords->newEntity();
        if ($this->request->is('post')) {
            $usersRecord = $this->UsersRecords->patchEntity($usersRecord, $this->request->data);
            if ($this->UsersRecords->save($usersRecord)) {
                $this->Flash->success(__('The users record has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users record could not be saved. Please, try again.'));
        }
        $users = $this->UsersRecords->Users->find('list', ['limit' => 200]);
        $groups = $this->UsersRecords->Groups->find('list', ['limit' => 200]);
        $records = $this->UsersRecords->Records->find('list', ['limit' => 200]);
        $this->set(compact('usersRecord', 'users', 'groups', 'records'));
        $this->set('_serialize', ['usersRecord']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Record id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersRecord = $this->UsersRecords->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersRecord = $this->UsersRecords->patchEntity($usersRecord, $this->request->data);
            if ($this->UsersRecords->save($usersRecord)) {
                $this->Flash->success(__('The users record has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users record could not be saved. Please, try again.'));
        }
        $users = $this->UsersRecords->Users->find('list', ['limit' => 200]);
        $groups = $this->UsersRecords->Groups->find('list', ['limit' => 200]);
        $records = $this->UsersRecords->Records->find('list', ['limit' => 200]);
        $this->set(compact('usersRecord', 'users', 'groups', 'records'));
        $this->set('_serialize', ['usersRecord']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Record id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersRecord = $this->UsersRecords->get($id);
        if ($this->UsersRecords->delete($usersRecord)) {
            $this->Flash->success(__('The users record has been deleted.'));
        } else {
            $this->Flash->error(__('The users record could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
