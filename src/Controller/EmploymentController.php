<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Employment Controller
 *
 * @property \App\Model\Table\EmploymentTable $Employment
 */
class EmploymentController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tenants', 'Cities']
        ];
        $employment = $this->paginate($this->Employment);

        $this->set(compact('employment'));
        $this->set('_serialize', ['employment']);
    }

    /**
     * View method
     *
     * @param string|null $id Employment id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employment = $this->Employment->get($id, [
            'contain' => ['Tenants', 'Cities']
        ]);

        $this->set('employment', $employment);
        $this->set('_serialize', ['employment']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employment = $this->Employment->newEntity();
        if ($this->request->is('post')) {
            $employment = $this->Employment->patchEntity($employment, $this->request->data);
            if ($this->Employment->save($employment)) {
                $this->Flash->success(__('The employment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employment could not be saved. Please, try again.'));
        }
        $tenants = $this->Employment->Tenants->find('list', ['limit' => 200]);
        $cities = $this->Employment->Cities->find('list', ['limit' => 200]);
        $this->set(compact('employment', 'tenants', 'cities'));
        $this->set('_serialize', ['employment']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Employment id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employment = $this->Employment->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employment = $this->Employment->patchEntity($employment, $this->request->data);
            if ($this->Employment->save($employment)) {
                $this->Flash->success(__('The employment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employment could not be saved. Please, try again.'));
        }
        $tenants = $this->Employment->Tenants->find('list', ['limit' => 200]);
        $cities = $this->Employment->Cities->find('list', ['limit' => 200]);
        $this->set(compact('employment', 'tenants', 'cities'));
        $this->set('_serialize', ['employment']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Employment id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employment = $this->Employment->get($id);
        if ($this->Employment->delete($employment)) {
            $this->Flash->success(__('The employment has been deleted.'));
        } else {
            $this->Flash->error(__('The employment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
