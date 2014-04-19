<?php
App::uses('AppController', 'Controller');
/**
 * Beneficiaries Controller
 *
 * @property Beneficiary $Beneficiary
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class BeneficiariesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');


	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index', 'view'); // Letting users register themselves
		$this->set( 'navbar_active_element', 'beneficiaries' );
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Beneficiary->recursive = 3;
		$this->set('beneficiaries', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Beneficiary->exists($id)) {
			throw new NotFoundException(__('Registro inexistente'));
		}
		$this->Beneficiary->recursive = 3;
		$options = array('conditions' => array('Beneficiary.' . $this->Beneficiary->primaryKey => $id));
		$this->set('beneficiary', $this->Beneficiary->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Beneficiary->create();
			
			$this->request->data['Beneficiary']['is_active'] = true;
			$this->request->data['Beneficiary']['user_id'] = AuthComponent::user('id');
			
			if ($this->Beneficiary->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado satisfactoriamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no ha podido crearse. Por favor, intente nuevamente.'));
			}
		}
		$municipalities = $this->Beneficiary->Municipality->find('list');
		$beneficiaryTypes = $this->Beneficiary->BeneficiaryType->find('list');
		$users = $this->Beneficiary->User->find('list');
		$people = $this->Beneficiary->Person->find('list');
		$this->set(compact('municipalities', 'beneficiaryTypes', 'users', 'people'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Beneficiary->exists($id)) {
			throw new NotFoundException(__('Registro inexistente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Beneficiary->save($this->request->data)) {
				$this->Session->setFlash(__('Los cambios han sido guardados satisfactoriamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no ha podido crearse. Por favor, intente nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Beneficiary.' . $this->Beneficiary->primaryKey => $id));
			$this->request->data = $this->Beneficiary->find('first', $options);
		}
		$municipalities = $this->Beneficiary->Municipality->find('list');
		$beneficiaryTypes = $this->Beneficiary->BeneficiaryType->find('list');
		$users = $this->Beneficiary->User->find('list');
		$people = $this->Beneficiary->Person->find('list');
		$this->set(compact('municipalities', 'beneficiaryTypes', 'users', 'people'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Beneficiary->id = $id;
		if (!$this->Beneficiary->exists()) {
			throw new NotFoundException(__('Registro inexistente'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Beneficiary->delete()) {
			$this->Session->setFlash(__('El registro ha sido eliminado satisfactoriamente.'));
		} else {
			$this->Session->setFlash(__('El registro no ha podido ser eliminado. Por favor, intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Beneficiary->recursive = 3;
		$this->set('beneficiaries', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Beneficiary->exists($id)) {
			throw new NotFoundException(__('Registro inexistente.'));
		}
		$this->Beneficiary->recursive = 3;
		$options = array('conditions' => array('Beneficiary.' . $this->Beneficiary->primaryKey => $id));
		$this->set('beneficiary', $this->Beneficiary->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {

			$this->Beneficiary->create();

			$this->request->data['Beneficiary']['is_active'] = true;
			$this->request->data['Beneficiary']['user_id'] = AuthComponent::user('id');

			if ($this->Beneficiary->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado satisfactoriamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no ha podido guardarse. Por favor, intente nuevamente.'));
			}
		}
		$municipalities = $this->Beneficiary->Municipality->find('list');
		$beneficiaryTypes = $this->Beneficiary->BeneficiaryType->find('list');
		$users = $this->Beneficiary->User->find('list');
		$people = $this->Beneficiary->Person->find('list');
		$this->set(compact('municipalities', 'beneficiaryTypes', 'users', 'people'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Beneficiary->exists($id)) {
			throw new NotFoundException(__('Registro inexistente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Beneficiary->save($this->request->data)) {
				$this->Session->setFlash(__('Los cambios han sido guardados satisfactoriamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los cambios no han podido guardarse. Por favor, intente nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Beneficiary.' . $this->Beneficiary->primaryKey => $id));
			$this->request->data = $this->Beneficiary->find('first', $options);
		}
		$municipalities = $this->Beneficiary->Municipality->find('list');
		$beneficiaryTypes = $this->Beneficiary->BeneficiaryType->find('list');
		$users = $this->Beneficiary->User->find('list');
		$people = $this->Beneficiary->Person->find('list');
		$this->set(compact('municipalities', 'beneficiaryTypes', 'users', 'people'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Beneficiary->id = $id;
		if (!$this->Beneficiary->exists()) {
			throw new NotFoundException(__('Registro inexistente'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Beneficiary->delete()) {
			$this->Session->setFlash(__('El registro ha sido eliminado satisfactoriamente.'));
		} else {
			$this->Session->setFlash(__('El registro no ha podido eliminarse. Por favor, intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
