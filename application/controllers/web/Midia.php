<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Midia extends SG_Controller {

	/**
	 * __construct
	 * 
	 * método construtor
	 * 
	 */
	public function __construct() {
		parent::__construct();
		setTitle( 'Midias' );

		// Seta o contexto
		context( 'midia' );
		navbar( 'Midias' );

		// Carrega a library
		$this->load->library( 'Slim' );
		$this->load->model( 'midia' );
	}
	
	/**
	 * index
	 * 
	 * método inicial
	 *
	 * @return void
	 */
	public function index() {

		// Carrega todas as midias
		$midias = $this->Midia->find();
		setItem( 'midias', $midias );

		// Carrega a view
		view( 'midias/midias' );
	}

	/**
	 * delete
	 * 
	 * Deleta uma midia
	 *
	 * @param boolean $id
	 * @return void
	 */
	public function delete( $id = false ) {

		// Carrega a midia
		$midia = $this->Midia->findById( $id );
		if ( !$midia ) return close_page( 'midia' );

		// Tenta deletar
		if ( $midia->delete() ) {
			flash( 'swaSuccessBody', 'Midia excluida com sucesso' );
		} else {
			flash( 'swaErrorBody', 'Erro ao excluir a midia' );
		}

		// Carrega a view
		close_page( 'midia' );		
	}

	/**
	 * salvarImagem
	 * 
	 * Salva uma nova imagem
	 *
	 * @return void
	 */
	public function salvar_imagem() {

		// Pega as imagens enviadas
		$images = $this->slim::getImages();
		if ( !isset( $images[0] ) ) return;
		$image  = $images[0];

		// Pega os dados da imagem
		$ext       = pathinfo( $image['input']['name'], PATHINFO_EXTENSION );
		$inputName = $image['input']['name'];
		$hash      = getToken();
		$size      = $image['input']['size'];
		$data      = $image['output']['data'];
		$filename  = $hash.'.'.$ext;		

		// Salva a imagem
		$file = $this->slim::saveFile( $data, $filename, 'public/uploads/', false );

		// Salva a midia
		if ( $file ) {

			// Carrega a model
			$this->load->model( 'midia' );

			// Cria uma nova
			$midia = $this->Midia->new();

			// Seta as propriedades
			$midia->name  = $inputName;
			$midia->hash  = $hash;
			$midia->type  = 'image';
			$midia->ext   = $ext;
			$midia->size  = $size;

			// Salva os dados
			if ( $midia->save() ) {
				echo safe_json_encode( $midia->metadata() );
			} else return;
		} else return;
	}
}

// End of file
