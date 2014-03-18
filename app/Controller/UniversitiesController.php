<?php
App::uses('AppController', 'Controller');
/**
 * Universities Controller
 *
 * @property University $University
 * @property PaginatorComponent $Paginator
 */
class UniversitiesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $helpers = array('Js');


	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index', 'view'); // Letting users register themselves
		$this->set( 'navbar_active_element', 'universities' );
	}


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->University->recursive = 0;
		$this->set('universities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->University->exists($id)) {
			throw new NotFoundException(__('Registr inválido'));
		}
		$options = array('conditions' => array('University.' . $this->University->primaryKey => $id));
		$this->set('university', $this->University->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	private function _add() {
		if ($this->request->is('post')) {
			$this->University->create();
			if ($this->University->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido creado exitosamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo crearse. Por favor, intente nuevamente.'));
			}
		}
		$municipalities = $this->University->Municipality->find('list');
		$parentUniversities = $this->University->ParentUniversity->find('list');
		$this->set(compact('municipalities', 'parentUniversities'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->University->exists($id)) {
			throw new NotFoundException(__('Registro inválido.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->University->save($this->request->data)) {
				$this->Session->setFlash(__('Los cambios han sido guardados éxitosamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los cambios no han podido guardarse. Por favor, intente nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('University.' . $this->University->primaryKey => $id));
			$this->request->data = $this->University->find('first', $options);
		}
		$municipalities = $this->University->Municipality->find('list');
		$parentUniversities = $this->University->ParentUniversity->find('list');
		$this->set(compact('municipalities', 'parentUniversities'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	private function _delete($id = null) {
		$this->University->id = $id;
		if (!$this->University->exists()) {
			throw new NotFoundException(__('Registro inválido'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->University->delete()) {
			$this->Session->setFlash(__('El registro ha sido eliminado.'));
		} else {
			$this->Session->setFlash(__('El registro no pudo eliminarse. Por favor, intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->University->recursive = 0;
		$this->set('universities', $this->Paginator->paginate());

		$this->set( 'navbar_active_element', 'admin' );
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->University->exists($id)) {
			throw new NotFoundException(__('Registro inválido'));
		}

		$this->University->recursive = 3;

		$options = array('conditions' => array('University.' . $this->University->primaryKey => $id));
		$this->set('university', $this->University->find('first', $options));


		$this->set( 'navbar_active_element', 'admin' );

	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {

		if ($this->request->is('post')) {
			$this->University->create();

			$this->request->data['University']['is_active'] = true;

			if ($this->University->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido creado éxitosamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo crearse. Por favor, intente nuevamente.'));
			}
		}
		$cities =  $this->University->Municipality->City->find('list');
		$municipalities = $this->University->Municipality->find('list');
		$parentUniversities = $this->University->ParentUniversity->find('list');
		$this->set(compact('municipalities', 'parentUniversities'));

		$this->set( 'navbar_active_element', 'admin');

	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->University->exists($id)) {
			throw new NotFoundException(__('Registro inválido.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->University->save($this->request->data)) {
				$this->Session->setFlash(__('Los cambios han sido guardados éxitosamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los cambios no han podido guardarse. Por favor, intente nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('University.' . $this->University->primaryKey => $id));
			$this->request->data = $this->University->find('first', $options);
		}
		$municipalities = $this->University->Municipality->find('list');
		$parentUniversities = $this->University->ParentUniversity->find('list');
		$this->set(compact('municipalities', 'parentUniversities'));

		$this->set( 'navbar_active_element', 'admin');
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->University->id = $id;
		if (!$this->University->exists()) {
			throw new NotFoundException(__('Registro inválido.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->University->delete()) {
			$this->Session->setFlash(__('El registro ha sido eliminado exitosamente.'));
		} else {
			$this->Session->setFlash(__('El registro no pudo eliminarse. Por favor, intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
