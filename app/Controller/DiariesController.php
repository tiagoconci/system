<?php
App::uses('AppController', 'Controller');
/**
 * Diaries Controller
 *
 * @property Diary $Diary
 * @property PaginatorComponent $Paginator
 */
class DiariesController extends AppController {

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
		$this->Diary->recursive = 0;
		$this->set('diaries', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Diary->exists($id)) {
			throw new NotFoundException(__('Invalid diary'));
		}
		$options = array('conditions' => array('Diary.' . $this->Diary->primaryKey => $id));
		$this->set('diary', $this->Diary->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Diary->create();
			if ($this->Diary->save($this->request->data)) {
				$this->Session->setFlash(__('The diary has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The diary could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
			}
		}
		$cars = $this->Diary->Car->find('list');
		$users = $this->Diary->User->find('list');
		$this->set(compact('cars', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Diary->exists($id)) {
			throw new NotFoundException(__('Invalid diary'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Diary->save($this->request->data)) {
				$this->Session->setFlash(__('The diary has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The diary could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
			}
		} else {
			$options = array('conditions' => array('Diary.' . $this->Diary->primaryKey => $id));
			$this->request->data = $this->Diary->find('first', $options);
		}
		$cars = $this->Diary->Car->find('list');
		$users = $this->Diary->User->find('list');
		$this->set(compact('cars', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Diary->id = $id;
		if (!$this->Diary->exists()) {
			throw new NotFoundException(__('Invalid diary'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Diary->delete()) {
			$this->Session->setFlash(__('The diary has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The diary could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-error'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
