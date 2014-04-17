<?php
App::uses('AppController', 'Controller');
/**
 * Cities Controller
 *
 * @property City $City
 * @property PaginatorComponent $Paginator
 */
class CitiesController extends AppController {

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
		$this->City->recursive = 2;
		$this->set('cities', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->City->exists($id)) {
			throw new NotFoundException(__('Registro inválido'));
		}
		$options = array('conditions' => array('City.' . $this->City->primaryKey => $id));
		$this->set('city', $this->City->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->City->create();
			if ($this->City->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no ha podido crearse. Por favor, intente de nuevo.'));
			}
		}
		$states = $this->City->State->find('list');
		$this->set(compact('states'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->City->exists($id)) {
			throw new NotFoundException(__('Registro inválido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->City->save($this->request->data)) {
				$this->Session->setFlash(__('Los cambios han sido guardados.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los cambios no han podido guardarse. Por favor, intente de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('City.' . $this->City->primaryKey => $id));
			$this->request->data = $this->City->find('first', $options);
		}
		$states = $this->City->State->find('list');
		$this->set(compact('states'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->City->id = $id;
		if (!$this->City->exists()) {
			throw new NotFoundException(__('Registro inválido.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->City->delete()) {
			$this->Session->setFlash(__('El registro ha sido eliminado.'));
		} else {
			$this->Session->setFlash(__('El registro no ha podido eliminarse. Por favor, intente de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
