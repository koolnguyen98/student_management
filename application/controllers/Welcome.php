<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Build/W2Ex/PHPExcel.php';

class Welcome extends CI_Controller {

	public function __construct(){
        parent::__construct();

        if(isset($_SESSION['setdb'])){
        	if($_SESSION['setdb'] == 'db1'){
        		$this->db = $this->load->database('db1', true);
        	}else if($_SESSION['setdb'] == 'db2'){
	        	$this->db = $this->load->database('db2', true);
	        }else if($_SESSION['setdb'] == 'db5'){
	        	$this->db = $this->load->database('db5', true);
	        }else if($_SESSION['setdb'] == 'db8'){
	        	$this->db = $this->load->database('db8', true);
	        }
        }else{

        }
        
        
    }

	public function index()
	{	
		// // $this->load->model('Mark_Model');
		// // $data['query'] = $this->Mark_Model->testMark('51603330', '504076', '1');
		// // $this->load->view('test', $data);
		// $this->load->model('Subject_Model');
		// $data['query'] = $this->Subject_Model->getSubjects();

		$this->load->view('login');
		// $this->db = $this->load->database('db2', true);
		// $query = $this->db->query("SELECT * FROM LOP");
		// var_dump($query->result_array());
		// die;
	}

	public function index2()
	{	
		// // $this->load->model('Mark_Model');
		// // $data['query'] = $this->Mark_Model->testMark('51603330', '504076', '1');
		// // $this->load->view('test', $data);
		// $this->load->model('Subject_Model');
		// $data['query'] = $this->Subject_Model->getSubjects();

		$this->load->view('login');
		// $this->db = $this->load->database('db2', true);
		// $query = $this->db->query("SELECT * FROM LOP");
		// var_dump($query->result_array());
		// die;
	}

	public function logout()
	{
		$this->load->view('logout');
	}

	public function viewLogin()
	{
		$this->load->view('login');
	}

	public function viewDanhmuclop()
	{
		$this->load->model('Class_Model');
		$query = $this->Class_Model->getClass();
		echo '<pre>';
		var_dump(expression)
		echo '</pre>';
		die;
		$data['query1'] = $query['query1'];
		$data['query2'] = $query['query2'];
		$this->load->view('danhmuclop', $data);
	}

	public function deleteClass()
	{
		if(isset($_POST['ClassID'])){
			$ClassID = $_POST['ClassID'];
			$this->load->model('Class_Model');
			$data['query'] = $this->Class_Model->deleteClass($ClassID);
			// echo '<pre>';
			// var_dump($data['query']);
			// echo '</pre>';
			//die;
			if($data['query'] == true){
				echo 'true';
				redirect(base_url().'Welcome/viewDanhmuclop','refresh');
				
			}else{
				echo 'false';
				redirect(base_url().'Welcome/viewDanhmuclop','refresh');
				
			}
		}else{
			redirect(base_url().'Welcome/viewDanhmuclop','refresh');
			echo 'false';
		}
		
	}

	public function updateClass()
	{
		if(isset($_POST['ClassID']) && isset($_POST['ClassName'])){
			$ClassID = $_POST['ClassID'];
			$ClassName = $_POST['ClassName'];
			$this->load->model('Class_Model');
			$data['query'] = $this->Class_Model->updateClass($ClassID, $ClassName);
			if($data['query'] == true){
				redirect(base_url().'Welcome/viewDanhmuclop','refresh');
			}else{
				redirect(base_url().'Welcome/viewDanhmuclop','refresh');
			}
		}else{
			redirect(base_url().'Welcome/viewDanhmuclop','refresh');
		}
		
	}

	public function insertClass()
	{
		if(isset($_POST['ClassID']) && isset($_POST['ClassName']) && isset($_POST['Facult'])){
			$ClassID = $_POST['ClassID'];
			$ClassName = $_POST['ClassName'];
			$Facult = $_POST['Facult'];
			$this->load->model('Class_Model');
			$data['query'] = $this->Class_Model->insertClass($ClassID, $ClassName, $Facult);
			if($data['query'] == true){
				echo 'insert Thành Công';
				redirect(base_url().'Welcome/viewDanhmuclop','refresh');
			}else{
				echo 'Thất bại';
				redirect(base_url().'Welcome/viewDanhmuclop','refresh');
			}
		}else{
			echo 'Thất bại';
			redirect(base_url().'Welcome/viewDanhmuclop','refresh');
		}
		
	}

	public function viewQuanlisinhvien()
	{
		$this->load->model('Class_Model');
		$tmp = $this->Class_Model->getClass();

		$data['query'] = $tmp['query1'];
		$this->load->view('danhmucsinhvien', $data);

	}

	public function getStudentClass()
	{
		if(isset($_POST['ClassID'])){
			$ClassID = $_POST['ClassID'];
			$this->load->model('Student_Model');
			$data['query1'] = $this->Student_Model->getStudentClass($ClassID);

			$this->load->model('Class_Model');
			$tmp = $this->Class_Model->getClass();
			$data['query2'] = $tmp['query1'];

			$this->load->view('danhmucsinhvien', $data);

		}else{
			redirect(base_url().'Welcome/viewQuanlisinhvien','refresh');
		}
		
	}

	public function getTableStudent()
	{
		if(isset($_POST['ClassID'])){
			$ClassID = $_POST['ClassID'];
			$this->load->model('Student_Model');
			$data['query'] = $this->Student_Model->getStudentClass($ClassID);
			if($data['query'] != null){
				$this->load->view('tbody_student', $data);
			}else{
				echo 'false';
			}
			

		}else{
			redirect(base_url().'Welcome/viewQuanlisinhvien','refresh');
		}
		
	}



	public function deleteStudent()
	{
		if(isset($_POST['StudentID'])){
			$StudentID = $_POST['StudentID'];
			$this->load->model('Student_Model');
			$data['query'] = $this->Student_Model->deleteStudent($StudentID);
			if($data['query'] == true){
				redirect(base_url().'Welcome/viewQuanlisinhvien','refresh');
			}else{
				redirect(base_url().'Welcome/viewQuanlisinhvien','refresh');
			}
		}else{
			redirect(base_url().'Welcome/viewQuanlisinhvien','refresh');
		}
		
	}

	public function updateStudent()
	{
		if(isset($_POST['StudentID']) && isset($_POST['FirstName']) && isset($_POST['LastName']) && isset($_POST['Sex']) && isset($_POST['Birthday']) && isset($_POST['BirthAddress']) && isset($_POST['HomeAddress']) && isset($_POST['Status'])){
			$StudentID = $_POST['StudentID'];
			$FirstName = $_POST['FirstName'];
			$LastName = $_POST['LastName'];
			$Sex = $_POST['Sex'];
			$Birthday = $_POST['Birthday'];
			$BirthAddress = $_POST['BirthAddress'];
			$HomeAddress = $_POST['HomeAddress'];
			$Status = $_POST['Status'];
			$this->load->model('Student_Model');
			$data['query'] = $this->Student_Model->updateStudent($StudentID, $FirstName, $LastName, $Sex, $Birthday, $BirthAddress, $HomeAddress, $Status);
			if($data['query'] == true){
				redirect(base_url().'Welcome/viewQuanlisinhvien','refresh');
			}else{
				redirect(base_url().'Welcome/viewQuanlisinhvien','refresh');
			}
		}else{
			redirect(base_url().'Welcome/viewQuanlisinhvien','refresh');
		}
		
	}

	public function insertStudent()
	{
		if(isset($_POST['StudentID']) && isset($_POST['FirstName']) && isset($_POST['LastName']) && isset($_POST['ClassID']) && isset($_POST['Sex']) && isset($_POST['Birthday']) && isset($_POST['BirthAddress']) && isset($_POST['HomeAddress'])){
			$StudentID = $_POST['StudentID'];
			$FirstName = $_POST['FirstName'];
			$LastName = $_POST['LastName'];
			$ClassID = $_POST['ClassID'];
			$Sex = $_POST['Sex'];
			$Birthday = $_POST['Birthday'];
			$BirthAddress = $_POST['BirthAddress'];
			$HomeAddress = $_POST['HomeAddress'];
			$this->load->model('Student_Model');
			$data['query'] = $this->Student_Model->insertStudent($StudentID, $FirstName, $LastName, $ClassID, $Sex, $Birthday, $BirthAddress, $HomeAddress);
			if($data['query'] == true){
				redirect(base_url().'Welcome/viewQuanlisinhvien','refresh');
			}else{
				redirect(base_url().'Welcome/viewQuanlisinhvien','refresh');
			}
		}else{
			redirect(base_url().'Welcome/viewQuanlisinhvien','refresh');
		}
		
	}

	public function viewQuanlidiemsinhvien()
	{
		$this->load->model('Class_Model');
		$tmp = $this->Class_Model->getClass();
		$data['query1'] =$tmp['query1'];

		$this->load->model('Subject_Model');
		$data['query2'] = $this->Subject_Model->getSubjects();

		$this->load->view('nhapdiem', $data);
	}

	public function getMark()
	{
		if(isset($_POST['class_id']) && isset($_POST['subject_id']) && isset($_POST['times'])){
			$class_id = $_POST['class_id'];
			$subject_id = $_POST['subject_id'];
			$times = $_POST['times'];
			$this->load->model('Student_Model');
			$teststudent = $this->Student_Model->getStudentClass($class_id);
			if($teststudent != false){
				if($times == 2){
					$tf = $this->Student_Model->checkIfComplete($class_id, $subject_id, 1);
					if($tf == 1){
						$data['query3'] = $this->Student_Model->getStudentMark($class_id, $subject_id, $times);
						$data['query4'] = $this->Student_Model->getStudentsByClass($class_id);
						if($data['query4'] != null){
							$this->load->view('tablebodyMark', $data);
							//echo 'Thành Công';
						}else{
							echo 'null';
						}
					}else{
						echo 'false';
					}
				}else{
					$data['query3'] = $this->Student_Model->getStudentMark($class_id, $subject_id, $times);
					$data['query4'] = $this->Student_Model->getStudentsByClass($class_id);
					if($data['query4'] != null){
						$this->load->view('tablebodyMark', $data);
						//echo 'Thành Công';
					}else{
						echo 'null';
					}
				}
			}else{
				echo 'notstudent';
			}
		}else{
			echo 'Thất Bại';
			redirect(base_url().'Welcome/viewQuanlimonhoc','refresh');
		}
		
	}

	public function setMark()
	{
		if(isset($_POST['mark_arr']) && isset($_POST['times']) && isset($_POST['subject_id']) && isset($_POST['class_id'])){
			$mark_arr = $_POST['mark_arr'];
			$times = $_POST['times'];
			$subject_id = $_POST['subject_id'];
			$class_id = $_POST['class_id'];

			for($i = 0; $i < count($mark_arr); $i++){

				$this->load->model('Mark_Model');
				$query = $this->Mark_Model->testMark($mark_arr[$i][0], $subject_id, $times);
				
				if(count($query) > 0){
					//update
					$query1 = $this->Mark_Model->updateStudentMark($mark_arr[$i][0], $subject_id, $times, $mark_arr[$i][1]);
				}else{
					//insert
					$query1 = $this->Mark_Model->insertStudentMark($mark_arr[$i][0], $subject_id, $times, $mark_arr[$i][1]);
				}

			}
			
			$this->load->model('Student_Model');
			$data['query3'] = $this->Student_Model->getStudentMark($class_id, $subject_id, $times);
			$data['query4'] = $this->Student_Model->getStudentsByClass($class_id);
			if($data['query4'] != null){
				$this->load->view('tablebodyMark', $data);
				echo 'Thành Công';
			}
			redirect(base_url().'Welcome/viewQuanlimonhoc','refresh');
		}else{
			echo 'Thất Bại';
			redirect(base_url().'Welcome/viewQuanlimonhoc','refresh');
		}
		
	}

	public function viewQuanlimonhoc()
	{
		$this->load->model('Subject_Model');
		$data['query'] = $this->Subject_Model->getSubjects();
		$this->load->view('monhoc', $data);
	}

	public function updateSubject()
	{
		if(isset($_POST['SubjectID']) && isset($_POST['SubjectName'])){
			$SubjectID = $_POST['SubjectID'];
			$SubjectName = $_POST['SubjectName'];
			$this->load->model('Subject_Model');
			$data['query'] = $this->Subject_Model->updateSubjectNameById($SubjectID, $SubjectName);
			if($data['query'] == true){
				echo 'Thành Công';
				redirect(base_url().'Welcome/viewQuanlimonhoc','refresh');
			}else{
				echo 'Thất Bại';
				redirect(base_url().'Welcome/viewQuanlimonhoc','refresh');
			}
		}else{
			echo 'Thất Bại';
			redirect(base_url().'Welcome/viewQuanlimonhoc','refresh');
		}
		
	}

	public function deleteSubject()
	{
		if(isset($_POST['SubjectID'])){
			$SubjectID = $_POST['SubjectID'];
			$this->load->model('Subject_Model');
			$data['query'] = $this->Subject_Model->deleteSubject($SubjectID);
			if($data['query'] == true){
				echo 'Thành Công';
				redirect(base_url().'Welcome/viewQuanlimonhoc','refresh');
			}else{
				echo 'Thất Bại';
				redirect(base_url().'Welcome/viewQuanlimonhoc','refresh');
			}
		}else{
			echo 'Thất Bại';
			redirect(base_url().'Welcome/viewQuanlimonhoc','refresh');
		}
		
	}

	public function insertSubject()
	{	
		if(isset($_POST['subjectID']) && isset($_POST['subjectName'])){
			$SubjectID = $_POST['subjectID'];
			$SubjectName = $_POST['subjectName'];
			$this->load->model('Subject_Model');
			$data['query'] = $this->Subject_Model->insertSubject($SubjectID, $SubjectName);
			if($data['query'] == true){
				echo 'insert Thành Công';
				redirect(base_url().'Welcome/viewQuanlimonhoc','refresh');
			}else{
				echo 'Thất bại';
				redirect(base_url().'Welcome/viewQuanlimonhoc','refresh');
			}
		}else{
			echo 'Thất bại';
			redirect(base_url().'Welcome/viewQuanlimonhoc','refresh');
		}
		
	}

	public function viewInDanhsachsinhvien()
	{

		$this->load->model('Class_Model');
		$tmp = $this->Class_Model->getClass();
		$data['query'] =$tmp['query1'];
		$this->load->view('indanhsachsinhvien', $data);
	}

	public function getInforClass()
	{	

		if(isset($_POST['ClassID'])){
			$ClassID = $_POST['ClassID'];

			$this->load->model('Class_Model');
			$data['query1'] = $this->Class_Model->getClassByID($ClassID);

			$data['query2'] = $this->Class_Model->getFacultByID($data['query1'][0]['MAKH']);

			$this->load->view('div_inf_studentlist', $data);

		}else{
			redirect(base_url().'Welcome/viewQuanlisinhvien','refresh');
		}
		
	}

	public function getStudentByClass()
	{
		if(isset($_POST['ClassID'])){
			$ClassID = $_POST['ClassID'];
			$this->load->model('Student_Model');
			$data['query3'] = $this->Student_Model->getStudentClass($ClassID);

			$this->load->view('tbody_studentlist', $data);

		}else{
			redirect(base_url().'Welcome/viewQuanlisinhvien','refresh');
		}
		
	}

	public function printListStudent()
	{
		if(isset($_POST['ClassID'])){
			$ClassID = $_POST['ClassID'];

			$this->load->model('Class_Model');
			$data['query1'] = $this->Class_Model->getClassByID($ClassID);
			$data['query2'] = $this->Class_Model->getFacultByID($data['query1'][0]['MAKH']);

			$this->load->model('Student_Model');
			$data['query3'] = $this->Student_Model->getStudentClass($ClassID);

			$inf = array(
				0 => 'Khoa: '.$data['query2'][0]['TENKH'], 
				1 => 'Lớp: '.$data['query1'][0]['TENLOP'], 
				2 => 'Mã Lớp :'.$data['query1'][0]['MALOP'] 
			);
			$title = array(
				0 => 'STT',
				1 => 'MSSV', 
				2 => 'Ho', 
				3 => 'Tên', 
				4 => 'Giới tính', 
				5 => 'Ngày sinh', 
				6 => 'Nơi sinh', 
				7 => 'Địa chỉ', 
			);
			$dt = array();

			for($i = 0; $i < count($data['query3']); $i++){
				$dttmp = array(
					0 => $i+1,
					1 => $data['query3'][$i]['MASV'],
					2 => $data['query3'][$i]['HO'],
					3 => $data['query3'][$i]['TEN'],
					4 => $data['query3'][$i]['GIOITINH'] == '1' ? 'Nam' : 'Nữ',
					5 => $data['query3'][$i]['NGAYSINH'],
					6 => $data['query3'][$i]['NOISINH'],
					7 => $data['query3'][$i]['DIACHI'],
				);
				array_push($dt, $dttmp);
			}

			$inforExecl = array(
				'inf' => $inf,
				'title' => $title,
				'data' => $dt 
			);

			

			$_SESSION['data'] = $inforExecl;

		}else{
			redirect(base_url().'Welcome/viewQuanlisinhvien','refresh');
		}
		
	}

	public function viewInBangdiemmonhoc()
	{
		$this->load->model('Subject_Model');
		$data['query1'] = $this->Subject_Model->getSubjects();
		$this->load->model('Class_Model');
		$tmp = $this->Class_Model->getClass();
		$data['query2'] =$tmp['query1'];
		$this->load->view('inbangdiemmonhoc', $data);
	}

	public function printListStudentMark()
	{
		if(isset($_POST['ClassID']) && isset($_POST['SubjectID'])){
			$ClassID = $_POST['ClassID'];
			$SubjectID = $_POST['SubjectID'];

			$this->load->model('Class_Model');
			$data['query1'] = $this->Class_Model->getClassByID($ClassID);
			$data['query2'] = $this->Class_Model->getFacultByID($data['query1'][0]['MAKH']);

			$this->load->model('Student_Model');
			$data['query3'] = $this->Student_Model->getStudentMark($ClassID, $SubjectID, 1);

			$inf = array(
				0 => 'Khoa: '.$data['query2'][0]['TENKH'], 
				1 => 'Lớp: '.$data['query1'][0]['TENLOP'], 
				2 => 'Mã Lớp: '.$data['query1'][0]['MALOP'] 
			);
			$title = array(
				0 => 'STT', 
				1 => 'MSSV', 
				2 => 'Ho', 
				3 => 'Tên', 
				4 => 'Điểm', 
			);
			$dt = array();

			for($i = 0; $i < count($data['query3']); $i++){
				$dttmp = array(
					0 => $i + 1,
					1 => $data['query3'][$i]['MASV'],
					2 => $data['query3'][$i]['HO'],
					3 => $data['query3'][$i]['TEN'],
					4 => $data['query3'][$i]['DIEM']
				);
				array_push($dt, $dttmp);
			}

			$inforExecl = array(
				'inf' => $inf,
				'title' => $title,
				'data' => $dt 
			);

			var_dump($inforExecl);

			$_SESSION['data'] = $inforExecl;

		}else{
			redirect(base_url().'Welcome/viewQuanlisinhvien','refresh');
		}
		
	}

	public function getInforMarkTable()
	{	

		if(isset($_POST['ClassID']) && isset($_POST['SubjectID'])){
			$ClassID = $_POST['ClassID'];
			$SubjectID = $_POST['SubjectID'];

			$this->load->model('Class_Model');
			$data['query1'] = $this->Class_Model->getClassByID($ClassID);

			$data['query3'] = $this->Class_Model->getFacultByID($data['query1'][0]['MAKH']);

			$this->load->model('Subject_Model');
			$data['query2'] = $this->Subject_Model->getSubjectById($SubjectID);

			$this->load->view('div_inf_marksubject', $data);

		}else{
			redirect(base_url().'Welcome/viewQuanlisinhvien','refresh');
		}
		
	}

	public function getMarkStudent()
	{
		if(isset($_POST['ClassID']) && isset($_POST['SubjectID'])){
			$ClassID = $_POST['ClassID'];
			$SubjectID = $_POST['SubjectID'];

			$this->load->model('Mark_Model');
			$data['query'] = $this->Mark_Model->getMarkSubject($SubjectID, $ClassID);

			$this->load->view('tbody_marksubject', $data);
			

		}else{
			redirect(base_url().'Welcome/viewQuanlisinhvien','refresh');
		}
		
	}

	public function viewInBangdiemsinhvien()
	{	
		$this->load->model('Class_Model');
		$tmp = $this->Class_Model->getClass();
		$data['query'] =$tmp['query1'];
		$this->load->view('inbangdiemsinhvien', $data);
	}

	public function printListMarkByStudent()
	{
		if(isset($_POST['ClassID']) && isset($_POST['StudentID'])){
			$ClassID = $_POST['ClassID'];
			$StudentID = $_POST['StudentID'];

			$this->load->model('Mark_Model');
			$data['query'] = $this->Mark_Model->transcript($StudentID, $ClassID);
			$this->load->model('Class_Model');

			$inf = array(
				0 => 'Khoa: '.$data['query'][0]['TENKH'], 
				1 => 'Lớp: '.$data['query'][0]['TENLOP'], 
				2 => 'Mã Lớp: '.$data['query'][0]['MALOP'], 
				3 => 'Họ và Tên: '.$data['query'][0]['HO']." ".$data['query'][0]['TEN'] , 
				4 => 'Mã Số Sinh Siên: '.$data['query'][0]['MASV'], 
			);
			$title = array(
				0 => 'STT', 
				1 => 'Môn Học', 
				2 => 'Điểm', 
			);
			$dt = array();

			for($i = 0; $i < count($data['query']); $i++){
				$dttmp = array(
					0 => $i + 1,
					1 => $data['query'][$i]['TENMH'],
					2 => $data['query'][$i]['DIEM'],
				);
				array_push($dt, $dttmp);
			}

			$inforExecl = array(
				'inf' => $inf,
				'title' => $title,
				'data' => $dt 
			);

			var_dump($inforExecl);

			$_SESSION['data'] = $inforExecl;

		}else{
			redirect(base_url().'Welcome/viewQuanlisinhvien','refresh');
		}
		
	}

	public function getStudentTable()
	{
		if(isset($_POST['ClassID'])){
			$ClassID = $_POST['ClassID'];

			$this->load->model('Student_Model');
			$data['query'] = $this->Student_Model->getStudentsByClass($ClassID);

			$this->load->view('tableStudent', $data);

		}else{
			redirect(base_url().'Welcome/viewQuanlisinhvien','refresh');
		}
		
	}

	public function getInforMarkStudentTable()
	{
		if(isset($_POST['ClassID']) && isset($_POST['StudentID'])){
			$ClassID = $_POST['ClassID'];
			$StudentID = $_POST['StudentID'];

			$this->load->model('Mark_Model');
			$data['query'] = $this->Mark_Model->transcript($StudentID, $ClassID);
			$this->load->model('Class_Model');
			// $data['query2'] = $this->Class_Model->getClassByID($ClassID);
			// $data['query3'] = $this->Class_Model->getFacultByID($data['query2'][0]['MAKH']);

			$this->load->view('inf_markStudent', $data);

		}else{
			echo 'false';
			redirect(base_url().'Welcome/viewQuanlisinhvien','refresh');
		}
		
	}

	public function mark_Student_Table()
	{
		if(isset($_POST['StudentID']) && isset($_POST['Times'])){
			$StudentID = $_POST['StudentID'];
			$Times = $_POST['Times'];

			$this->load->model('Mark_Model');
			$data['query4'] = $this->Mark_Model->getMarkInfor($StudentID, $Times);

			$this->load->view('mark_Student_Table', $data);

		}else{
			echo 'false';
			redirect(base_url().'Welcome/viewQuanlisinhvien','refresh');
		}
		
	}

	public function viewInBangdiemtongket()
	{
		$this->load->view('inbangdiemtongket');
	}

	public function checkLogin(){
		$site = isset($_POST['site']) ? $_POST['site'] : ''; 
		$account = isset($_POST['account']) ? $_POST['account'] : ''; 
		$password = isset($_POST['password']) ? $_POST['password'] : '';

		$dbcntt = array(
			0 => array(0 => 'LOGINPGV', 1 => 'db1'),
			1 => array(0 => 'LOGINCNTT', 1 => 'db1'),
			2 => array(0 =>'LOGINUSERCNTT', 1 => 'db5'),
		);

		$dbvt = array(
			0 => array(0 => 'LOGINPGV', 1 => 'db2'),
			1 => array(0 => 'LOGINVT', 1 => 'db2'),
			2 => array(0 =>'LOGINUSERVT', 1 => 'db8'),
		);

		if($site == 1){
			if($password == '123456789'){
				$abcd = 0;
				for($i = 0; $i < 3; $i++){
					if($dbcntt[$i][0] == $account){
						echo 'true';
						$_SESSION['admin'] = $account;
						$_SESSION['khoa'] = 'CNTT';
						$abcd = 1;
						if($i == 0 || $i == 1){
							$_SESSION['setdb'] = 'db1';
							$this->db = $this->load->database('db1', true);
							// $query = $this->db->query("SELECT * FROM LOP");
							// var_dump($query->result_array());

						}else{
							$_SESSION['setdb'] = 'db5';
							$this->db = $this->load->database('db5', true);
						}
						//redirect(base_url().'Welcome/Welcome','refresh');
						break;
					}
				}
				if($abcd == 0)
					echo 'false';
			}else{
				echo 'false';
			}
		}else if($site == 2){
			if($password == '123456789'){
				$abcd = 0;
				for($i = 0; $i < 3; $i++){
					if($dbvt[$i][0] == $account){
						echo 'true';
						$_SESSION['admin'] = $account;
						$_SESSION['khoa'] = 'VT';
						$abcd = 1;
						if($i == 0 || $i == 1){
							$_SESSION['setdb'] = 'db2';
							$this->db = $this->load->database('db2', true);
							//$query = $this->db->query("SELECT * FROM LOP");
							
						}else{
							$_SESSION['setdb'] = 'db8';
							$this->db = $this->load->database('db8', true);
						}
						//redirect(base_url().'Welcome/Welcome','refresh');
						break;
					}
				}
				if($abcd == 0)
					echo 'false';
			}else{
				echo 'false';
			}
		}
	}

	public function write2Excel(){

		if(isset($_SESSION['data'])){
			$data = $_SESSION['data'];
			//Khởi tạo đối tượng
			$excel = new PHPExcel();
			//Chọn trang cần ghi (là số từ 0->n)
			$excel->setActiveSheetIndex(0);
			//Tạo tiêu đề cho trang. (có thể không cần)
			
			//Xét chiều rộng cho từng, nếu muốn set height thì dùng setRowHeight()
			$alphaArr = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
			$numCol = count($data['title']);

			for($i = 0; $i < $numCol; $i++){
				if($i <= 25){
					$excel->getActiveSheet()->getColumnDimension($alphaArr[$i])->setWidth(10);
				}else{
					// $excel->getActiveSheet()->getColumnDimension($alphaArr[($i/26)-1]+$alphaArr[($i%26)])->setWidth(10);
				}
			}

			for($i = 1; $i <= count($data['inf']); $i++){

				$excel->getActiveSheet()->mergeCells($alphaArr[0].$i.':'.$alphaArr[$numCol-1].$i);
				$excel->getActiveSheet()->getStyle($alphaArr[0].$i)->getFont()->setBold(true);
				$excel->getActiveSheet()->setCellValue($alphaArr[0].$i, $data['inf'][$i-1]);
			}
			

			//Xét in đậm cho khoảng cột
			$excel->getActiveSheet()->getStyle($alphaArr[0].(count($data['inf'])+1).':'.$alphaArr[$numCol-1].(count($data['inf'])+1))->getFont()->setBold(true);
			//Tạo tiêu đề cho từng cột
			//Vị trí có dạng như sau:
			/**
			 * |A1|B1|C1|..|n1|
			 * |A2|B2|C2|..|n1|
			 * |..|..|..|..|..|
			 * |An|Bn|Cn|..|nn|
			 */
			for($i = 0; $i < $numCol; $i++){
				if($i <= 25){
					$excel->getActiveSheet()->setCellValue($alphaArr[$i].(count($data['inf'])+1) , $data['title'][$i]);
				}else{
					// $excel->getActiveSheet()->getColumnDimension($alphaArr[($i/26)-1]+$alphaArr[($i%26)])->setWidth(10);
				}
			}
			// thực hiện thêm dữ liệu vào từng ô bằng vòng lặp
			// dòng bắt đầu = 2
			$numRow = count($data['inf'])+2;
			for($j = 0; $j < count($data['data']); $j++) {

				for($i = 0; $i < $numCol; $i++){
					if($i <= 25){
						$excel->getActiveSheet()->setCellValue($alphaArr[$i] . $numRow, $data['data'][$j][$i]);
					}else{
						// $excel->getActiveSheet()->getColumnDimension($alphaArr[($i/26)-1]+$alphaArr[($i%26)])->setWidth(10);
					}
				}
				$numRow++;
			}
			// Khởi tạo đối tượng PHPExcel_IOFactory để thực hiện ghi file
			// ở đây mình lưu file dưới dạng excel2007
			// $_SESSION['tenfile'] = (date('d_m_Y_H_m'));
			// PHPExcel_IOFactory::createWriter($excel, 'Excel2007')->save((date('d_m_Y_H_m')).'.xlsx');
			header('Content-type: application/vnd.ms-excel');
			header('Content-Disposition: attachment; filename="'.date('d_m_Y_H_m').'.xls"');
			PHPExcel_IOFactory::createWriter($excel, 'Excel2007')->save('php://output');
			sleep(3);
			unset($_SESSION['data']);
		}

	}
}
