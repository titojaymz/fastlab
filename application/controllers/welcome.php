<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
    {
        $this->validateLoginForm();

        if (!$this->form_validation->run())
        {
            $data = array(
                'title' => 'FAST Laboratories',
                'error_login' => ''
            );
            $this->load->view('header', $data);
            $this->load->view('content');
            $this->load->view('footer');
        }
        else
        {
            $email = $this->input->post('username');
            $password = $this->input->post('password');

            if ($email == 'admin' && $password == 'admin')
            {
                $this->load->view('admin',array('email' => $email, 'password' => $password));
            }
            elseif ($email == 'client' && $password == 'client')
            {
                $this->load->view('client',array('email' => $email, 'password' => $password));
            }
            else
            {
                $data = array(
                    'title' => 'FAST Laboratories',
                    'error_login' => 'Sorry, you have entered an invalid login!'
                );
                $this->load->view('header', $data);
                $this->load->view('content');
                $this->load->view('footer');
            }
        }
    }



    public function tables()
    {
        $email = '';
        $password = '';
        $this->load->view('client',array('email' => $email, 'password' => $password));
    }


    protected function validateLoginForm()
    {
        $config = array(
            array(
                'field'   => 'username',
                'label'   => 'username',
                'rules'   => 'required'
            ),
            array(
                'field'   => 'password',
                'label'   => 'password',
                'rules'   => 'required'
            )
        );

        return $this->form_validation->set_rules($config);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */