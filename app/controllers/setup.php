<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setup extends CI_Controller
{
    /**
     * TODO: short description.
     *
     */
    function __construct()
    {
        parent::__construct();

        $this->load->library('mongo');

    }

    public function create_db ()
    {
    }
}
