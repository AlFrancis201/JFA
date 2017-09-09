<?php

class Boots extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('students_model','Students');
	}	
	
	public function index()
	{
		$header_data['title'] = "Student View";
		$rs = $this->Students->read();
				
		foreach($rs as $r){
			$info = array(
				'idno'=>$r['idno'],
				'lname'=>$r['lname'],
				'fname'=>$r['fname'],
				'mname'=>$r['mname'],
				'course'=>$r['course'],
			);
				$students[] = $info;
		}
		$data['students'] = $students;
		$this->load->view('includes/header',$header_data);
		$this->load->view('students/contents_2',$data);
		$this->load->view('includes/footer');
	}
	
	
	public function add_student(){
		if($_SERVER['REQUEST_METHOD']=='POST'){
			// print_r($_POST);
		
		}
		else{
			$header_data['title']="Add new student";
			$data=array();
			
			$this->load->view('includes/header',$header_data);
			$this->load->view('students/new_students',$data);
			$this->load->view('includes/footer');
		}
	}
	
	public function profile($id){
		$student = $this->Student->read(array('idno'=>$id));
		
		if( count($student)>0 ){
			$header_data['title'] = "Students: View Student Profile";
			$data['student'] = $student;
			
			$this->load->view('include/header',$header_data);		
			$this->load->view('profile',$data);
			$this->load->view('include/footer');		
			
		}		
		else{
			redirect('students','refresh');
		}
		// $this->load->view('students/profile')
	}
	
	public function del($id){
		$this->Student->delete_student(array('idno'=>$id));
		redirect('students','refresh');
	}
	
}
