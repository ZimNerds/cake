<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Properties Controller
 *
 * @property \App\Model\Table\PropertiesTable $Properties
 */
class PropertiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Types', 'Owners', 'Countries', 'Cities', 'States']
        ];
        $properties = $this->paginate($this->Properties);

        $this->set(compact('properties'));
        $this->set('_serialize', ['properties']);
    }

    /**
     * View method
     *
     * @param string|null $id Property id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $property = $this->Properties->get($id, [
            'contain' => ['Types', 'Owners', 'Countries', 'Cities', 'States', 'Applications', 'Units']
        ]);

        $this->set('property', $property);
        $this->set('_serialize', ['property']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $property = $this->Properties->newEntity();
        if ($this->request->is('post')) {
            $property = $this->Properties->patchEntity($property, $this->request->data);
            if ($this->Properties->save($property)) {
                $this->Flash->success(__('The property has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The property could not be saved. Please, try again.'));
        }
        $types = $this->Properties->Types->find('list', ['limit' => 200]);
        $owners = $this->Properties->Owners->find('list', ['limit' => 200]);
        $countries = $this->Properties->Countries->find('list', ['limit' => 200]);
        $cities = $this->Properties->Cities->find('list', ['limit' => 200]);
        $states = $this->Properties->States->find('list', ['limit' => 200]);
        $this->set(compact('property', 'types', 'owners', 'countries', 'cities', 'states'));
        $this->set('_serialize', ['property']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Property id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $property = $this->Properties->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $property = $this->Properties->patchEntity($property, $this->request->data);
            if ($this->Properties->save($property)) {
                $this->Flash->success(__('The property has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The property could not be saved. Please, try again.'));
        }
        $types = $this->Properties->Types->find('list', ['limit' => 200]);
        $owners = $this->Properties->Owners->find('list', ['limit' => 200]);
        $countries = $this->Properties->Countries->find('list', ['limit' => 200]);
        $cities = $this->Properties->Cities->find('list', ['limit' => 200]);
        $states = $this->Properties->States->find('list', ['limit' => 200]);
        $this->set(compact('property', 'types', 'owners', 'countries', 'cities', 'states'));
        $this->set('_serialize', ['property']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Property id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $property = $this->Properties->get($id);
        if ($this->Properties->delete($property)) {
            $this->Flash->success(__('The property has been deleted.'));
        } else {
            $this->Flash->error(__('The property could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    function getstates()
    {
        if(isset($_POST["country"])){
            $country = $_POST["country"];
            // Define country and city array
            $states = TableRegistry::get('States');
            $query = $states
                ->find()
                ->where(['country_id =' => $country])
                ->order(['id' => 'ASC']);
            $result = array();
            foreach ($query as $results) {
                array_push($result,
                    array('id'=>$results->id,'name'=>$results->name));
            }
            // Display city dropdown based on country name
            if($country !== ''){
                echo "<label>State:</label>";
                echo "<select class='state' name='state_id' id='state-id'>";
                echo "<option value='Select'>Select</option>";
                foreach($result as $value){
                    $statevalue = $value['id'];
                    echo "<option value='$statevalue'>". $value['name'] . "</option>";
                }
                echo "</select>";
            }
        }

    }
    function getcity()
    {
        if(isset($_POST["state"])){
            $state = 23;
            // Define state and city array
            $cities = TableRegistry::get('Cities');
            $query = $cities
                ->find()
                ->where(['state_id =' => $state])
                ->order(['id' => 'ASC']);
            $result = array();
            foreach ($query as $results) {
                array_push($result,
                    array('id'=>$results->id,'name'=>$results->name));
            }
// Display city dropdown based on country name
            if($state !== 'Select'){
                echo "<label>City:</label>";
                echo "<select class='city' name='city_id' id='city-id'>";
                foreach($result as $value){
                    $cityvalue = $value['id'];
                    echo "<option value='$cityvalue'>". $value['name'] . "</option>";
                    debug($value->name);
                }
                echo "</select>";
            }
        }

    }
}
