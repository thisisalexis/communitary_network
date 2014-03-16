<?php
App::uses('AppController', 'Controller');
/**
 * Countries Controller
 *
 * @property Country $Country
 * @property PaginatorComponent $Paginator
 */
class CountriesController extends AppController {

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
		$this->Country->recursive = 0;
		$this->set('countries', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Country->exists($id)) {
			throw new NotFoundException(__('Registro inválido'));
		}
		$options = array('conditions' => array('Country.' . $this->Country->primaryKey => $id));
		$this->set('country', $this->Country->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Country->create();
			if ($this->Country->save($this->request->data)) {
				$this->Session->setFlash(__('El registro se ha creado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no ha podido crearse. Por favor, intente de nuevo.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Country->exists($id)) {
			throw new NotFoundException(__('Registro inválido.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Country->save($this->request->data)) {
				$this->Session->setFlash(__('Los cambios han sido guardados.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no ha podido crearse. Por favor, intente de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Country.' . $this->Country->primaryKey => $id));
			$this->request->data = $this->Country->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Country->id = $id;
		if (!$this->Country->exists()) {
			throw new NotFoundException(__('Registro inválido.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Country->delete()) {
			$this->Session->setFlash(__('El registro ha sido eliminado.'));
		} else {
			$this->Session->setFlash(__('El registro no ha podido eliminarse. Por favor, intente de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
