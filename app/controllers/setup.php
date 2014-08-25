<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'app/models/user.php';

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
        //$this->load->model('user_model', 'user');

        $post = $this->input->post();

        try
        {
            $this->create_admin_user($post);

            PHPFunctions::jsonReturn("SUCCESS", 'test');
        }
        catch(Exception $e)
        {
            PHPFunctions::sendStackTrace($e);
            PHPFunctions::jsonReturn("ERROR", $e->getMessage());
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
    protected function create_admin_user ($post)
    {
        $user = new User($post);
    }
}
