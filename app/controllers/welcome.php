<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function index()
    {
        $data['body'] = $this->load->view('app.phtml', null, true);

        $this->load->view('_layout.phtml', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
