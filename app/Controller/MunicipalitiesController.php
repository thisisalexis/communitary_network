<?php
App::uses('AppController', 'Controller');
/**
 * Municipalities Controller
 *
 * @property Municipality $Municipality
 * @property PaginatorComponent $Paginator
 */
class MunicipalitiesController extends AppController {

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
		$this->Municipality->recursive = 3;
		$this->set('municipalities', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Municipality->exists($id)) {
			throw new NotFoundException(__('Registro inválido'));
		}
		$options = array('conditions' => array('Municipality.' . $this->Municipality->primaryKey => $id));
		$this->set('municipality', $this->Municipality->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Municipality->create();
			if ($this->Municipality->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido creado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no ha podido crearse. Por favor, intente de nuevo.'));
			}
		}
		$cities = $this->Municipality->City->find('list');
		$this->set(compact('cities'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Municipality->exists($id)) {
			throw new NotFoundException(__('Registro inválido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Municipality->save($this->request->data)) {
				$this->Session->setFlash(__('Los cambios se han guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los cambios no han podido guardarse. Por favor, intente de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Municipality.' . $this->Municipality->primaryKey => $id));
			$this->request->data = $this->Municipality->find('first', $options);
		}
		$cities = $this->Municipality->City->find('list');
		$this->set(compact('cities'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Municipality->id = $id;
		if (!$this->Municipality->exists()) {
			throw new NotFoundException(__('Registro inválido.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Municipality->delete()) {
			$this->Session->setFlash(__('El registro ha sido eliminado.'));
		} else {
			$this->Session->setFlash(__('El registro no ha podido eliminarse. Por favor, intente de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function getByCity() {
		$city_id = $this->request->data['University']['city_id'];
 
		$municipalities = $this->Municipality->find('list', array(
			'conditions' => array('Municipality.city_id' => $city_id),
			'recursive' => -1
			));
 
		$this->set('municipalities',$municipalities);
		$this->layout = 'ajax';
	}

}