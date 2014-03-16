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
			throw new NotFoundException(__('Invalid university'));
		}
		$options = array('conditions' => array('University.' . $this->University->primaryKey => $id));
		$this->set('university', $this->University->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->University->create();
			if ($this->University->save($this->request->data)) {
				$this->Session->setFlash(__('The university has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The university could not be saved. Please, try again.'));
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
			throw new NotFoundException(__('Invalid university'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->University->save($this->request->data)) {
				$this->Session->setFlash(__('The university has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The university could not be saved. Please, try again.'));
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
	public function delete($id = null) {
		$this->University->id = $id;
		if (!$this->University->exists()) {
			throw new NotFoundException(__('Invalid university'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->University->delete()) {
			$this->Session->setFlash(__('The university has been deleted.'));
		} else {
			$this->Session->setFlash(__('The university could not be deleted. Please, try again.'));
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
			throw new NotFoundException(__('Invalid university'));
		}
		$options = array('conditions' => array('University.' . $this->University->primaryKey => $id));
		$this->set('university', $this->University->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->University->create();
			if ($this->University->save($this->request->data)) {
				$this->Session->setFlash(__('The university has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The university could not be saved. Please, try again.'));
			}
		}
		$municipalities = $this->University->Municipality->find('list');
		$parentUniversities = $this->University->ParentUniversity->find('list');
		$this->set(compact('municipalities', 'parentUniversities'));
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
			throw new NotFoundException(__('Invalid university'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->University->save($this->request->data)) {
				$this->Session->setFlash(__('The university has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The university could not be saved. Please, try again.'));
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
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->University->id = $id;
		if (!$this->University->exists()) {
			throw new NotFoundException(__('Invalid university'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->University->delete()) {
			$this->Session->setFlash(__('The university has been deleted.'));
		} else {
			$this->Session->setFlash(__('The university could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
