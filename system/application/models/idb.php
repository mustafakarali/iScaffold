<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class idb extends Model
{
	function __construct()
	{
		parent::__construct();

		include( APPPATH . '/config/database.php' );
		$this->db_conf = $db['iscaffold'];
	}	

	function connect( $database )
	{
        $this->db_conf['database'] = $database;
        $this->load->database( $this->db_conf );
	}
}
