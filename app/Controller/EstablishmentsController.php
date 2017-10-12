<?php
App::uses('AppController', 'Controller');
/**
 * Establishments Controller
 *
 * @property Establishment $Establishment
 * @property PaginatorComponent $Paginator
 */
class EstablishmentsController extends AppController {

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
		$this->Establishment->recursive = 0;
		$this->set('establishments', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Establishment->exists($id)) {
			throw new NotFoundException(__('Invalid establishment'));
		}
		$options = array('conditions' => array('Establishment.' . $this->Establishment->primaryKey => $id));
		$this->set('establishment', $this->Establishment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Establishment->create();
			if ($this->Establishment->save($this->request->data)) {
				$this->Session->setFlash(__('The establishment has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The establishment could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
			}
		}
		$cities = $this->Establishment->City->find('list');
		$this->set(compact('cities'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Establishment->exists($id)) {
			throw new NotFoundException(__('Invalid establishment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Establishment->save($this->request->data)) {
				$this->Session->setFlash(__('The establishment has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The establishment could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
			}
		} else {
			$options = array('conditions' => array('Establishment.' . $this->Establishment->primaryKey => $id));
			$this->request->data = $this->Establishment->find('first', $options);
		}
		$cities = $this->Establishment->City->find('list');
		$this->set(compact('cities'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Establishment->id = $id;
		if (!$this->Establishment->exists()) {
			throw new NotFoundException(__('Invalid establishment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Establishment->delete()) {
			$this->Session->setFlash(__('The establishment has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The establishment could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-error'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
