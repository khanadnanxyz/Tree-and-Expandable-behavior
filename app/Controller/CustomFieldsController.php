<?php
App::uses('AppController', 'Controller');
/**
 * CustomFields Controller
 *
 * @property CustomField $CustomField
 * @property PaginatorComponent $Paginator
 */
class CustomFieldsController extends AppController {

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
		$this->CustomField->recursive = 0;
		$this->set('customFields', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CustomField->exists($id)) {
			throw new NotFoundException(__('Invalid custom field'));
		}
		$options = array('conditions' => array('CustomField.' . $this->CustomField->primaryKey => $id));
		$this->set('customField', $this->CustomField->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CustomField->create();
			if ($this->CustomField->save($this->request->data)) {
				$this->Session->setFlash(__('The custom field has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The custom field could not be saved. Please, try again.'));
			}
		}
		$categories = $this->CustomField->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CustomField->exists($id)) {
			throw new NotFoundException(__('Invalid custom field'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CustomField->save($this->request->data)) {
				$this->Session->setFlash(__('The custom field has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The custom field could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CustomField.' . $this->CustomField->primaryKey => $id));
			$this->request->data = $this->CustomField->find('first', $options);
		}
		$categories = $this->CustomField->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CustomField->id = $id;
		if (!$this->CustomField->exists()) {
			throw new NotFoundException(__('Invalid custom field'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CustomField->delete()) {
			$this->Session->setFlash(__('The custom field has been deleted.'));
		} else {
			$this->Session->setFlash(__('The custom field could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
