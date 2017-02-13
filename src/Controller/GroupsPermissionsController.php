<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GroupsPermissions Controller
 *
 * @property \App\Model\Table\GroupsPermissionsTable $GroupsPermissions
 */
class GroupsPermissionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Permissions', 'Groups']
        ];
        $groupsPermissions = $this->paginate($this->GroupsPermissions);

        $this->set(compact('groupsPermissions'));
        $this->set('_serialize', ['groupsPermissions']);
    }

    /**
     * View method
     *
     * @param string|null $id Groups Permission id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $groupsPermission = $this->GroupsPermissions->get($id, [
            'contain' => ['Permissions', 'Groups']
        ]);

        $this->set('groupsPermission', $groupsPermission);
        $this->set('_serialize', ['groupsPermission']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $groupsPermission = $this->GroupsPermissions->newEntity();
        if ($this->request->is('post')) {
            $groupsPermission = $this->GroupsPermissions->patchEntity($groupsPermission, $this->request->data);
            if ($this->GroupsPermissions->save($groupsPermission)) {
                $this->Flash->success(__('The groups permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The groups permission could not be saved. Please, try again.'));
        }
        $permissions = $this->GroupsPermissions->Permissions->find('list', ['limit' => 200]);
        $groups = $this->GroupsPermissions->Groups->find('list', ['limit' => 200]);
        $this->set(compact('groupsPermission', 'permissions', 'groups'));
        $this->set('_serialize', ['groupsPermission']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Groups Permission id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $groupsPermission = $this->GroupsPermissions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $groupsPermission = $this->GroupsPermissions->patchEntity($groupsPermission, $this->request->data);
            if ($this->GroupsPermissions->save($groupsPermission)) {
                $this->Flash->success(__('The groups permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The groups permission could not be saved. Please, try again.'));
        }
        $permissions = $this->GroupsPermissions->Permissions->find('list', ['limit' => 200]);
        $groups = $this->GroupsPermissions->Groups->find('list', ['limit' => 200]);
        $this->set(compact('groupsPermission', 'permissions', 'groups'));
        $this->set('_serialize', ['groupsPermission']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Groups Permission id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $groupsPermission = $this->GroupsPermissions->get($id);
        if ($this->GroupsPermissions->delete($groupsPermission)) {
            $this->Flash->success(__('The groups permission has been deleted.'));
        } else {
            $this->Flash->error(__('The groups permission could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
