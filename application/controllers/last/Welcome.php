<?php
	/**
	 * the last page with the rendered quote.
	 *
<<<<<<< HEAD
	 * controllers/last/Welcome.php
=======
	 * controllers/Last/welcome.php
>>>>>>> origin/develop
	 *
	 * ------------------------------------------------------------------------
	 */
class Welcome extends Application {

	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$this->data['pagebody'] = 'last'; // The view we want to see.
		$record = $this->quotes->last();
		$this->data = array_merge($this->data, $record);
		$this->render();
	}
}

?>