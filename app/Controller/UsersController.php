<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * before filter method
 *
 * 
 * 
 * @return void
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('signup'); // Letting users register themselves
	}


	public function login(){
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				//$this->redirect( $this->Auth->redirect() ); // Esta verga porr alguna razón no funciona, aún cuando está definido en el components de AppController
				$this->redirect( array('controller' => 'pages', 'action' => 'display', 'home' ) );
			} else {
				$this->Session->setFlash(__('Datos inválidos, intenta nuevamente'));
			}
		}

		$this->layout = 'login';

	}

	public function logout() {
		$this->redirect( $this->Auth->logout() );
	}


/**
 * index method
 *
 * @return void
 */
	private function _index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function profile() {

	}

/**
 * add method
 *
 * @return void
 */
	public function signup() {
		if ($this->request->is('post')) {
			$this->User->create();

			$this->request->data['User']['is_active'] = true;
			
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Su registro ha sido completado con éxito. Ahora debe iniciar sesión.'));
				return $this->redirect(array('action' => 'login'));
			} else {
				$this->Session->setFlash(__('Ha ocurrido un error y no ha podido registrarse. Por favor, intente de nuevo.'));
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
	public function edit_profile() {
		if (!$this->User->exists( $this->Auth->user('id') )) {
			throw new NotFoundException(__('Usuario inválido'));
		}
		if ($this->request->is(array('post', 'put'))) {

			$this->Auth->user('is_admin') ? null : $this->request->data['User']['is_admin'] = false;
			
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Sus datos han sido guardados con éxito.'));
				return $this->redirect(array('action' => 'profile'));
			} else {
				$this->Session->setFlash(__('Los cambios no han podido guardarse. Por favor, intente de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $this->Auth->user('id')));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	private function _delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Usuario inválido'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('el usuario ha sido eliminado exitosamente.'));
		} else {
			$this->Session->setFlash(__('El usuario no pudo ser eliminado. Por favor, intente de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());

	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));

	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('El usuario ha sido creado exitosamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El usuario no ha podido crearse. Por favor, inténtelo de nuevo.'));
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Usuario inválido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Los cambios han sido guardados exitosamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los cambios no han podido guardarse. Por favor, intente nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Usuario inválido'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('El usuario ha sido eliminado exitosamente.'));
		} else {
			$this->Session->setFlash(__('El usuario no pudo ser eliminado. Por favor, intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
