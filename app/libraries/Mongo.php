<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CI_Mongo extends Mongo
{

    protected $ci;
    public $db;

    function CI_Mongo()
    {
        if (!file_exists($_SERVER['DOCUMENT_ROOT'] . 'app/config/mongo.php')) throw new Exception("Mongodb config file does not exist!");

        $this->ci =& get_instance();

        // Load Mongo configuration file
        $this->ci->load->config('mongo');

        // Fetch Mongo server and database configuration
        $server = '';
        $dbname = '';

        // Initialise Mongo
        if ($server)
        {
            parent::__construct($server);
        }
        else
        {
            parent::__construct();
        }

        $this->db = $this->$dbname;
    }
}
