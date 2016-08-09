<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once 'My_Controller.php';

class Form extends My_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Child_model');
		$this->load->model('Parent_model');
    }

    public function index(){
		$data['parents'] = $this->Parent_model->get_join_child();
		foreach ($data['parents'] as $key => $parent) {
			$parent->relation = $this->Parent_model->get_relation_name($parent->relation);
		}
		$data['title'] = '表格填写情况';
		$data['url'] = 'form_list';
<<<<<<< HEAD
		echo $this->load->view('form_list',$data);
=======
		// $this->load->view('main',$data);

        echo $this->load->view('form_list', $data);
>>>>>>> c263c4d0a7984c0c81a9593620c61d14629c4c29
	}


	public function detail($parent_id){
<<<<<<< HEAD
		$data['parent'] = $this->Parent_model->get_detail_by_id($parent_id)[0];
		$data['parent']->relation = $this->Parent_model->get_relation_name($data['parent']->relation);
		$data['title'] = "表格详细";
		$data['url'] = 'form_detail';
		$this->load->view('form_detail',$data);
    }

    public function search() {

        $input = $this->input->post();

=======
		// $data['parent'] = $this->Parent_model->get_detail_by_id($parent_id)[0];
		// $data['parent']->relation = $this->Parent_model->get_relation_name($data['parent']->relation);
		// $data['title'] = "表格详细";
		// $data['url'] = 'form_detail';
		// $this->load->view('main',$data);
        echo $this->load->view('form_detail');
    }

    public function search() {
        $input = $this->input->post();

        // $input = $_POST;

>>>>>>> c263c4d0a7984c0c81a9593620c61d14629c4c29
        // var_dump($input);die();

        //无查询内容
        if (count($input) == 1 && $input['relationship'] == '') {
<<<<<<< HEAD
            return $this->index();
=======

            $data['title'] = '表格填写情况';
            $data['url'] = 'form_list';
            // var_dump(1);die();
            echo $this->load->view('search_list', $data);

>>>>>>> c263c4d0a7984c0c81a9593620c61d14629c4c29
        }

        $data['input'] = $input;

        foreach ($input['entrance'] as $key => $grade) {
            $input['entrance'][$key] = $this->Child_model->getEntranceByGrade($grade);
        }

        $data['parents'] = $this->Parent_model->get_join_child_where($input);

		foreach ($data['parents'] as $key => $parent) {
			$parent->relation = $this->Parent_model->get_relation_name($parent->relation);
        }
<<<<<<< HEAD
		$data['title'] = '表格填写情况';
		$data['url'] = 'form_list';
		$this->load->view('search_list',$data);
=======
		
         // echo $this->load->view('form_list', $data);
            echo $this->load->view('search_list', $data);

>>>>>>> c263c4d0a7984c0c81a9593620c61d14629c4c29
    }
}
