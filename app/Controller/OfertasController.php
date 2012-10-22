<?php
App::uses('AppController', 'Controller');
/**
 * Ofertas Controller
 *
 * @property Oferta $Oferta
 */
class OfertasController extends AppController {

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this -> Oferta -> recursive = 0;
		$this -> set('ofertas', $this -> paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this -> Oferta -> id = $id;
		if (!$this -> Oferta -> exists()) {
			throw new NotFoundException(__('Invalid oferta'));
		}
		$this -> set('oferta', $this -> Oferta -> read(null, $id));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this -> request -> is('post')) {
			$this -> Oferta -> create();
			if ($this -> Oferta -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('The oferta has been saved'));
				$this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The oferta could not be saved. Please, try again.'));
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
		$this -> Oferta -> id = $id;
		if (!$this -> Oferta -> exists()) {
			throw new NotFoundException(__('Invalid oferta'));
		}
		if ($this -> request -> is('post') || $this -> request -> is('put')) {
			if ($this -> Oferta -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('The oferta has been saved'));
				$this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The oferta could not be saved. Please, try again.'));
			}
		} else {
			$this -> request -> data = $this -> Oferta -> read(null, $id);
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
		$this -> Oferta -> id = $id;
		if (!$this -> Oferta -> exists()) {
			throw new NotFoundException(__('Invalid oferta'));
		}
		if ($this -> Oferta -> delete()) {
			$this -> Session -> setFlash(__('Oferta deleted'));
			$this -> redirect(array('action' => 'index'));
		}
		$this -> Session -> setFlash(__('Oferta was not deleted'));
		$this -> redirect(array('action' => 'index'));
	}

	/**
	 * mostrar method
	 * Método utilizado por el Element Ofertas
	 *
	 * @return void
	 */
	public function mostrar($cantidad = null) {
		$mostrar = $cantidad ? $cantidad : 5;
		$this -> Oferta -> recursive = 0;
		return $this -> Oferta -> find('all', array(
			'conditions' => array('vigente' => TRUE),
			'limit' => $mostrar,
			'order' => 'created DESC',
			'fields' => array(
				'title',
				'descripcion',
				'precio',
				'foto'
			)
		));
	}

}
