<?php
App::uses('AppController', 'Controller');
/**
 * BeneficiaryTypes Controller
 *
 * @property BeneficiaryType $BeneficiaryType
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class BeneficiaryTypesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BeneficiaryType->recursive = 0;
		$this->set('beneficiaryTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BeneficiaryType->exists($id)) {
			throw new NotFoundException(__('Invalid beneficiary type'));
		}
		$options = array('conditions' => array('BeneficiaryType.' . $this->BeneficiaryType->primaryKey => $id));
		$this->set('beneficiaryType', $this->BeneficiaryType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BeneficiaryType->create();
			if ($this->BeneficiaryType->save($this->request->data)) {
				$this->Session->setFlash(__('The beneficiary type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The beneficiary type could not be saved. Please, try again.'));
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
	public function edit($id = null) {
		if (!$this->BeneficiaryType->exists($id)) {
			throw new NotFoundException(__('Invalid beneficiary type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BeneficiaryType->save($this->request->data)) {
				$this->Session->setFlash(__('The beneficiary type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The beneficiary type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BeneficiaryType.' . $this->BeneficiaryType->primaryKey => $id));
			$this->request->data = $this->BeneficiaryType->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->BeneficiaryType->id = $id;
		if (!$this->BeneficiaryType->exists()) {
			throw new NotFoundException(__('Invalid beneficiary type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BeneficiaryType->delete()) {
			$this->Session->setFlash(__('The beneficiary type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The beneficiary type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->BeneficiaryType->recursive = 0;
		$this->set('beneficiaryTypes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->BeneficiaryType->exists($id)) {
			throw new NotFoundException(__('Invalid beneficiary type'));
		}
		$options = array('conditions' => array('BeneficiaryType.' . $this->BeneficiaryType->primaryKey => $id));
		$this->set('beneficiaryType', $this->BeneficiaryType->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->BeneficiaryType->create();
			if ($this->BeneficiaryType->save($this->request->data)) {
				$this->Session->setFlash(__('The beneficiary type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The beneficiary type could not be saved. Please, try again.'));
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
		if (!$this->BeneficiaryType->exists($id)) {
			throw new NotFoundException(__('Invalid beneficiary type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BeneficiaryType->save($this->request->data)) {
				$this->Session->setFlash(__('The beneficiary type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The beneficiary type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BeneficiaryType.' . $this->BeneficiaryType->primaryKey => $id));
			$this->request->data = $this->BeneficiaryType->find('first', $options);
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
		$this->BeneficiaryType->id = $id;
		if (!$this->BeneficiaryType->exists()) {
			throw new NotFoundException(__('Invalid beneficiary type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BeneficiaryType->delete()) {
			$this->Session->setFlash(__('The beneficiary type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The beneficiary type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
