<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');

class Mark_Model extends CI_Model {

	public $variable;

	public function __construct(){
		parent::__construct();
	}

	public function insertStudentMark($student_id, $subject_id, $times, $mark) {
		
		try {
			$query = $this->db->query("
				INSERT INTO DIEM(MASV, MAMH, LAN, DIEM) VALUES('$student_id','$subject_id','$times','$mark')
				");
			return true;
		} catch(Exception $e) {
			echo 'Cannot insert mark: ', $e->getMessage() + '\n';
		}
		
		return false;
	}

	public function updateStudentMark($student_id, $subject_id, $times, $mark) {
		
		try {
			$query = $this->db->query("
				UPDATE DIEM SET DIEM = '$mark' WHERE MASV = '$student_id' AND MAMH = '$subject_id' AND LAN = '$times'
				");
			return true;
		} catch(Exception $e) {
			echo 'Cannot update mark: ', $e->getMessage() + '\n';
		}
		
		return false;
	}


	public function transcript($student_id, $class_id) {
		try {
			$query = $this->db->query("
				SELECT SV.MASV, SV.HO, SV.TEN, SV.MALOP, LOP.TENLOP, KHOA.MAKH, KHOA.TENKH, MH.TENMH, DIEM.DIEM FROM KHOA, MONHOC MH, (SELECT MASV, MAMH, MAX(DIEM) AS DIEM FROM DIEM GROUP BY MAMH, MASV) AS DIEM, SINHVIEN SV, LOP 
				WHERE LOP.MAKH = KHOA.MAKH
				AND DIEM.MAMH = MH.MAMH
				AND SV.MASV = DIEM.MASV
				AND SV.MASV = '$student_id'
				AND LOP.MALOP = '$class_id'
				");
			return $query->result_array();
		} catch(Exception $e) {
			echo 'Cannot get students: ', $e->getMessage() + '\n';
		}
		
		return null;
	}

	public function testMark($student_id, $subject_id, $Times) {

		try {

			$query = $this->db->query("SELECT * FROM DIEM WHERE MASV = '$student_id' AND LAN = '$Times' AND MAMH = '$subject_id'");
			return $query->result_array();
		
		} catch(Exception $e) {
			echo 'Cannot get mark(StudentID, Times): ', $e->getMessage() + '\n'; 
		}

		return false;
	}

	public function getMarkInfor($StudentID, $Times) {

		try {

			$query = $this->db->query("SELECT * FROM SINHVIEN, LOP, MONHOC, DIEM WHERE SINHVIEN.MALOP = LOP.MALOP AND SINHVIEN.MASV = $StudentID AND DIEM.MASV = SINHVIEN.MASV AND DIEM.LAN = $Times AND MONHOC.MAMH = DIEM.MAMH");
			return $query->result_array();

		} catch(Exception $e) {
			echo 'Cannot get mark(StudentID, Times): ', $e->getMessage() + '\n'; 
		}

		return null;
	}

	// public function getMarkClass($ClassID) {

	// 	try {

	// 		$query = $this->db->query("SELECT * FROM LOP WHERE TENLOP = $ClassName");
	// 		return $query->result_array();

	// 	} catch(Exception $e) {
	// 		echo 'Cannot get class (ClassID): ', $e->getMessage() + '\n'; 
	// 	}

	// 	return null;
	// }

	public function getMarkSubject($SubjectID, $ClassID) {

		try {

			$query = $this->db->query("SELECT * FROM SINHVIEN, MONHOC, LOP, DIEM WHERE MONHOC.MAMH = '".$SubjectID."' AND LOP.MALOP = $ClassID AND SINHVIEN.MALOP = LOP.MALOP AND DIEM.MASV = SINHVIEN.MASV AND MONHOC.MAMH = DIEM.MAMH");
			return $query->result_array();

		} catch(Exception $e) {
			echo 'Cannot get class (SubjectID, ClassID): ', $e->getMessage() + '\n'; 
		}

		return null;
	}

}
