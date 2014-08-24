<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setup extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        //$this->load->library('mongo');

    }

    /**
     * TODO: short description.
     *
     * @return TODO
     */
    public function run ()
    {
        $this->load->model('user_model', 'user');

        //$post = $this->input->post();

        try
        {
            $this->create_admin_user();
        }
        catch(Exception $e)
        {
            PHPFunctions::sendStackTrace($e);
        }
    }

    protected function create_db ()
    {
    }

    /**
     * TODO: short description.
     *
     * @return TODO
     */
    protected function create_admin_user ()
    {
        $users = $this->user->get_all();
        
        print_($users);
        elog('test');

        PHPFunctions::jsonReturn("Success", 'test');
    }
}
