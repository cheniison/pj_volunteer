<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once 'My_Controller.php';

class School extends My_Controller{

	public function __construct(){
		parent::__construct();
        $this->load->model('school_model');
        $this->load->model('child_model');
	}

	public function index($data = null){
<<<<<<< HEAD
        $data['school'] = $this->school_model->get_all();
        foreach ($data['school'] as $key => $school) {
            $data['school'][$key]->grade = $this->child_model->getEntranceByGrade($school->entrance);
        }
		$data['title'] = '班级列表';
		$data['url'] = 'school_list';
		echo $this->load->view('school_list',$data);
=======
         $data['school'] = $this->school_model->get_all();
         foreach ($data['school'] as $key => $school) {
           $data['school'][$key]->grade = $this->child_model->getEntranceByGrade($school->entrance);
       }
		$data['title'] = '班级列表';
		 $data['url'] = 'school_list';
		echo $this->load->view('school_list', $data);
>>>>>>> c263c4d0a7984c0c81a9593620c61d14629c4c29
	}

	public function edit($id){
		$data['school'] = $this->school_model->getById($id)[0];
		$data['title'] = '修改班级';
<<<<<<< HEAD
		$data['url'] = 'school_edit';
=======
		// $data['url'] = 'school_edit';
>>>>>>> c263c4d0a7984c0c81a9593620c61d14629c4c29
		$this->load->view('school_edit',$data);
	}

	public function delete($id){
<<<<<<< HEAD
		$this->school_model->delete($id);
        $data['school'] = $this->school_model->get_all();
        foreach ($data['school'] as $key => $school) {
            $data['school'][$key]->grade = $this->child_model->getEntranceByGrade($school->entrance);
        }
        $data['title'] = '班级列表';
        $data['url'] = 'school_list';
        echo $this->load->view('school_list',$data);
=======
		return $this->school_model->delete($id);
>>>>>>> c263c4d0a7984c0c81a9593620c61d14629c4c29
	}

	public function add(){
		$data['title'] = '新增班级';
		$data['url'] = 'school_edit';
<<<<<<< HEAD
		$this->load->view('school_edit',$data);
=======
		$this->load->view('main',$data);
>>>>>>> c263c4d0a7984c0c81a9593620c61d14629c4c29
	}

	public function store(){
        $input = $this->input->post();

        $this->form_validation->set_rules('entrance', '入学年份', 'required|integer', ['required' => '请填写%s', 'integer' => '%s必须符合规范']);
        $this->form_validation->set_rules('class_num', '班级数', 'required|integer', ['required' => '请填写%s', 'integer' => '%s必须符合规范']);

        if ($this->form_validation->run() == false) {
            $data['message'] = validation_errors();
            $data['school']->entrance = $input['entrance'];
            $data['class_num']->class_num = $input['class_num'];
            $data['title'] = '新增班级';
            $data['url'] = 'school_edit';
<<<<<<< HEAD
            return $this->load->view('school_edit', $data);
=======
            return $this->load->view('main', $data);
>>>>>>> c263c4d0a7984c0c81a9593620c61d14629c4c29
        }

		$school = $this->school_model->getByEntrance($input['entrance']);

		if(count($school) == 0){
			$result = $this->school_model->insert_info($input);
		} else {
			$result = $this->school_model->update_info($input);
        }
        if ($result) {
            return $this->index(['message' => '成功']);
        } else {
            return $this->index(['message' => '失败']);
        }
	}
}
