<?php
App::uses('AppController', 'Controller');
/**
 * States Controller
 *
 * @property State $State
 * @property PaginatorComponent $Paginator
 */
class StatesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function beforeFilter() {
		parent::beforeFilter();
		$this->set( 'navbar_active_element', 'admin' );
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->State->recursive = 0;
		$this->set('states', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->State->exists($id)) {
			throw new NotFoundException(__('Registro inválido'));
		}
		$options = array('conditions' => array('State.' . $this->State->primaryKey => $id));
		$this->set('state', $this->State->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->State->create();
			if ($this->State->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido creado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no ha podido crearse. Por favor, intente de nuevo.'));
			}
		}
		$countries = $this->State->Country->find('list');
		$this->set(compact('countries'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->State->exists($id)) {
			throw new NotFoundException(__('Registro inválido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->State->save($this->request->data)) {
				$this->Session->setFlash(__('Los cambios han sido guardados.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los cambios no han podido guardarse. Por favor, intente de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('State.' . $this->State->primaryKey => $id));
			$this->request->data = $this->State->find('first', $options);
		}
		$countries = $this->State->Country->find('list');
		$this->set(compact('countries'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->State->id = $id;
		if (!$this->State->exists()) {
			throw new NotFoundException(__('Registro inválido'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->State->delete()) {
			$this->Session->setFlash(__('El registro ha sido eliminado.'));
		} else {
			$this->Session->setFlash(__('El registro no ha podido eliminarse. Por favor, intente de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
