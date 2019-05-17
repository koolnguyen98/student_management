<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');

class Class_Model extends CI_Model {

	public $variable;

	public function __construct(){
		parent::__construct();
	}

	public function getClass() {

		try {

			$query1 = $this->db->query("SELECT * FROM LOP");
			$query2 = $this->db->query("SELECT SINHVIENLOP.*, LOP.TENLOP FROM LOP, (SELECT MALOP, COUNT(*) AS SOLUONG FROM SINHVIEN GROUP BY MALOP) AS SINHVIENLOP
				WHERE SINHVIENLOP.MALOP = LOP.MALOP");
			$query = array(
				'query1' => $query1->result_array(),
				'query2' => $query2->result_array(),
			 );
			return $query;

		} catch(Exception $e) {
			echo 'Cannot get class: ', $e->getMessage() + '\n'; 
		}

		return null;
	}

	public function getClassName($ClassName) {

		try {

			$query = $this->db->query("SELECT * FROM LOP WHERE TENLOP = '".$ClassName."'");
			return $query->result_array();

		} catch(Exception $e) {
			echo 'Cannot get class (ClassName): ', $e->getMessage() + '\n'; 
		}

		return null;
	}

	public function getClassByID($ClassID) {

		try {

			$query = $this->db->query("SELECT * FROM LOP WHERE MALOP = '".$ClassID."'");
			return $query->result_array();

		} catch(Exception $e) {
			echo 'Cannot get class (ClassName): ', $e->getMessage() + '\n'; 
		}

		return null;
	}

	public function getFacultByID($FacultID) {

		try {

			$query = $this->db->query("SELECT * FROM KHOA WHERE MAKH = '".$FacultID."'");
			return $query->result_array();

		} catch(Exception $e) {
			echo 'Cannot get class (ClassName): ', $e->getMessage() + '\n'; 
		}

		return null;
	}

	public function deleteClass($ClassID) {

		try {

			$query = $this->db->query("DELETE FROM LOP WHERE MALOP = '$ClassID'");
			return $query;

		} catch(Exception $e) {
			echo 'Cannot delete class: ', $e->getMessage() + '\n'; 
		}

		return false;
	}

	public function updateClass($ClassID, $ClassName) {

		try {

			$query = $this->db->query("UPDATE LOP SET TENLOP = '".$ClassName."' WHERE MALOP = '$ClassID'");
			return true;

		} catch(Exception $e) {
			echo 'Cannot update class: ', $e->getMessage() + '\n'; 
		}

		return false;
	}

	public function insertClass($ClassID, $ClassName, $Facult) {

		try {
			$tmp = $this->db->query("DECLARE	@return_value int
									EXEC	@return_value = [dbo].[sp_KiemTraLopTonTai]
										@MALOP = N'".$ClassID."'
									SELECT	'RV' = @return_value
									");
			if($tmp->result_array()[0]['RV'] == 0){
				$tmp = $this->db->query("DECLARE	@return_value int
										EXEC	@return_value = [dbo].[sp_KiemTraTenLopTonTai]
										@TENLOP = N'".$ClassName."'
										SELECT	'RV' = @return_value");
				if($tmp->result_array()[0]['RV'] == 0){
					$query = $this->db->query("INSERT INTO LOP(MALOP, TENLOP, MAKH) VALUES ('".$ClassID."', '".$ClassName."', '".$Facult."')");
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
			
		} catch(Exception $e) {
			echo 'Cannot insert class: ', $e->getMessage() + '\n'; 
		}

		return false;
	}



}
