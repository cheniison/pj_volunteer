<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
<<<<<<< HEAD
		$this->load->model('user_model');
        $this->load->model('school_model');
        
=======
        $this->load->model('user_model');
		$this->load->model('school_model');
>>>>>>> c263c4d0a7984c0c81a9593620c61d14629c4c29
    }

    public function index() {
		$this->load->view('choose_role');
    }

    public function admin() {
        $this->load->view('login');
    }

    public function check() {
        $this->form_validation->set_rules('username', '用户名', 'required', ['required' => '请填写%s']);
        $this->form_validation->set_rules('password', '密码', 'required', ['required' => '请填写%s']);

        if ($this->form_validation->run() == false) {
            $data['message'] = validation_errors();
            $data['username'] = $this->input->post('username');
            return $this->load->view('login', $data);
        }

        if ($this->user_model->check_password($this->input->post('username'), $this->input->post('password'))) {
            $this->user_model->set_session($this->input->post('username'));
            $data['title'] = '欢迎';
            $data['url'] = 'welcome';

            $school = $this->school_model->get_all();

            $data['school'] = [];
            for ($i = 0; $i < 6 && isset($school[$i]); $i++) {
                $data['school'][$school[$i]->entrance] = $school[$i]->class_num;
            }
            $data['school_json'] = json_encode($data['school']);

            $this->load->view('main', $data);
        } else {
            $data['username'] = $this->input->post('username');
            $data['message'] = '用户名或密码填写错误，请检查';
            $this->load->view('login', $data);
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        $this->load->view('choose_role');
    }
<<<<<<< HEAD

=======
>>>>>>> c263c4d0a7984c0c81a9593620c61d14629c4c29
}
