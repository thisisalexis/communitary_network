<?php
App::uses('AppController', 'Controller');
/**
 * Needs Controller
 *
 * @property Need $Need
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class NeedsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	public function beforeFilter() {
		parent::beforeFilter();
		$this->set( 'navbar_active_element', 'admin' );
	}

/**
 * index method
 *
 * @return void
 */
	private function index() {
		$this->Need->recursive = 0;
		$this->set('needs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	private function view($id = null) {
		if (!$this->Need->exists($id)) {
			throw new NotFoundException(__('Necesidad inválida'));
		}
		$options = array('conditions' => array('Need.' . $this->Need->primaryKey => $id));
		$this->set('need', $this->Need->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	private function add() {
		if ($this->request->is('post')) {
			$this->Need->create();
			if ($this->Need->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido creado exitosamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo guardarse. Por favor, intente nuevamente.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	private function edit($id = null) {
		if (!$this->Need->exists($id)) {
			throw new NotFoundException(__('Invalid need'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Need->save($this->request->data)) {
				$this->Session->setFlash(__('Los cambios han sido guardados exitosamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los cambios no han podido guardarse. Por favor, intente de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Need.' . $this->Need->primaryKey => $id));
			$this->request->data = $this->Need->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	private function delete($id = null) {
		$this->Need->id = $id;
		if (!$this->Need->exists()) {
			throw new NotFoundException(__('Necesidad inválida'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Need->delete()) {
			$this->Session->setFlash(__('El registro ha sido borrado exitosamente.'));
		} else {
			$this->Session->setFlash(__('El registro no pudo ser eliminado. Por favor, intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Need->recursive = 0;
		$this->set('needs', $this->Paginator->paginate());
		
		$this->render('index');
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Need->exists($id)) {
			throw new NotFoundException(__('Necesidad inválida.'));
		}
		$options = array('conditions' => array('Need.' . $this->Need->primaryKey => $id));
		$this->set('need', $this->Need->find('first', $options));

		$this->render('view');
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Need->create();
			if ($this->Need->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado exitosamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo crearse. Por favor, intente nuevamente.'));
			}
		}

		$this->render('add');
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Need->exists($id)) {
			throw new NotFoundException(__('Necesidad inválida.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Need->save($this->request->data)) {
				$this->Session->setFlash(__('Los cambios han sido guardados exitosamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los cambios no han podido guardarse. Por favor intente nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Need.' . $this->Need->primaryKey => $id));
			$this->request->data = $this->Need->find('first', $options);
		}

		$this->render('edit');

	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Need->id = $id;
		if (!$this->Need->exists()) {
			throw new NotFoundException(__('Necesidad inválida.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Need->delete()) {
			$this->Session->setFlash(__('El registro ha sido eliminado exitosamente.'));
		} else {
			$this->Session->setFlash(__('El registro no ha podido eliminarse. Por favor intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
