<?php
App::uses('AppController', 'Controller');
/**
 * Noticias Controller
 *
 * @property Noticia $Noticia
 */
class NoticiasController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();
		$this -> Auth -> allow('mostrar', 'nueva');
	}

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this -> Noticia -> recursive = 0;
		$this -> set('noticias', $this -> paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this -> Noticia -> id = $id;
		if (!$this -> Noticia -> exists()) {
			throw new NotFoundException(__('Invalid noticia'));
		}
		$this -> set('noticia', $this -> Noticia -> read(null, $id));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this -> request -> is('post')) {
			$this -> Noticia -> create();
			if ($this -> Noticia -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('The noticia has been saved'));
				$this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The noticia could not be saved. Please, try again.'));
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
		$this -> Noticia -> id = $id;
		if (!$this -> Noticia -> exists()) {
			throw new NotFoundException(__('Invalid noticia'));
		}
		if ($this -> request -> is('post') || $this -> request -> is('put')) {
			if ($this -> Noticia -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('The noticia has been saved'));
				$this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The noticia could not be saved. Please, try again.'));
			}
		} else {
			$this -> request -> data = $this -> Noticia -> read(null, $id);
		}
	}

	/**
	 * delete method
	 *
	 * @throws MethodNotAllowedException
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		if (!$this -> request -> is('post')) {
			throw new MethodNotAllowedException();
		}
		$this -> Noticia -> id = $id;
		if (!$this -> Noticia -> exists()) {
			throw new NotFoundException(__('Invalid noticia'));
		}
		if ($this -> Noticia -> delete()) {
			$this -> Session -> setFlash(__('Noticia deleted'));
			$this -> redirect(array('action' => 'index'));
		}
		$this -> Session -> setFlash(__('Noticia was not deleted'));
		$this -> redirect(array('action' => 'index'));
	}

	/**
	 * mostrar method
	 * Método utilizado por el Element Noticias
	 *
	 * @return void
	 */
	public function mostrar($cantidad = null) {
		// if (!$this -> request -> is('post')) {
			// throw new MethodNotAllowedException();
		// }
		$mostrar = $cantidad ? $cantidad : 5;
		$this -> Noticia -> recursive = 0;
		return $this -> Noticia -> find('all', array(
			'limit' => $mostrar,
			'order' => 'created DESC',
			'fields' => array(
				'title',
				'created'
			)
		));
	}
	
	
	/**
	 * nueva method
	 *
	 * @return void
	 */
	public function nueva() {
		$this->autoRender = false;
		$this->layout = 'ajax';
		
		if ($this->request->is('post')) {
			if(isset($this->request->data['detalle'])) {
				$noticia['title'] = "Ingresaron ".$this->request->data['detalle'];
	
				$this->Noticia->create();
				$this->Noticia->save($noticia);
				return;
			}
		} else {
			$this->redirect(Router::url('/'));
		}
	}

}
