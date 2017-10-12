<?php
App::uses('AppController', 'Controller');
/**
 * Cars Controller
 *
 * @property Car $Car
 * @property PaginatorComponent $Paginator
 */
class CarsController extends AppController {

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
		$this->Car->recursive = 0;
		$this->set('cars', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Car->exists($id)) {
			throw new NotFoundException(__('Invalid car'));
		}
		$options = array('conditions' => array('Car.' . $this->Car->primaryKey => $id));
		$this->set('car', $this->Car->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Car->create();
			if ($this->Car->save($this->request->data)) {
				$this->Session->setFlash(__('The car has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
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
		if (!$this->Car->exists($id)) {
			throw new NotFoundException(__('Invalid car'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Car->save($this->request->data)) {
				$this->Session->setFlash(__('The car has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
			}
		} else {
			$options = array('conditions' => array('Car.' . $this->Car->primaryKey => $id));
			$this->request->data = $this->Car->find('first', $options);
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
		$this->Car->id = $id;
		if (!$this->Car->exists()) {
			throw new NotFoundException(__('Invalid car'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Car->delete()) {
			$this->Session->setFlash(__('The car has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The car could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-error'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
