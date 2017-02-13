<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * References Controller
 *
 * @property \App\Model\Table\ReferencesTable $References
 */
class ReferencesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tenants']
        ];
        $references = $this->paginate($this->References);

        $this->set(compact('references'));
        $this->set('_serialize', ['references']);
    }

    /**
     * View method
     *
     * @param string|null $id Reference id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reference = $this->References->get($id, [
            'contain' => ['Tenants']
        ]);

        $this->set('reference', $reference);
        $this->set('_serialize', ['reference']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reference = $this->References->newEntity();
        if ($this->request->is('post')) {
            $reference = $this->References->patchEntity($reference, $this->request->data);
            if ($this->References->save($reference)) {
                $this->Flash->success(__('The reference has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reference could not be saved. Please, try again.'));
        }
        $tenants = $this->References->Tenants->find('list', ['limit' => 200]);
        $this->set(compact('reference', 'tenants'));
        $this->set('_serialize', ['reference']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Reference id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reference = $this->References->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reference = $this->References->patchEntity($reference, $this->request->data);
            if ($this->References->save($reference)) {
                $this->Flash->success(__('The reference has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reference could not be saved. Please, try again.'));
        }
        $tenants = $this->References->Tenants->find('list', ['limit' => 200]);
        $this->set(compact('reference', 'tenants'));
        $this->set('_serialize', ['reference']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Reference id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reference = $this->References->get($id);
        if ($this->References->delete($reference)) {
            $this->Flash->success(__('The reference has been deleted.'));
        } else {
            $this->Flash->error(__('The reference could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
