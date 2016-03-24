<?php
// модель
Class Model_Hospital extends Model_Base{

	public function getAllPatients($sort = false){
		$order = $sort ? "ORDER BY fio ASC" : "";
		$qry = "SELECT * FROM patient ".$order;
		$res = $this->db->query($qry)->fetchAll(PDO::FETCH_ASSOC);		
		return $res;
	}	
	
	public function getAllDoctors($sort = false){
		$order = $sort ? "ORDER BY fio ASC" : "";
		$qry = "SELECT * FROM doctor ".$order;
		$res = $this->db->query($qry)->fetchAll(PDO::FETCH_ASSOC);		
		return $res;
	}	
	
	public function getPatients($id){		
		$qry = "SELECT * FROM doc_pat, patient WHERE doc_pat.doctor_id = $id AND patient.id = doc_pat.patient_id";
		$res = $this->db->query($qry)->fetchAll(PDO::FETCH_ASSOC);		
		return $res;
	}	
	
	public function getDoctors($id){		
		$qry = "SELECT * FROM doc_pat, doctor WHERE doc_pat.patient_id = $id AND doctor.id = doc_pat.doctor_id ";		
		$res = $this->db->query($qry)->fetchAll(PDO::FETCH_ASSOC);
		return $res;
	}	
	
	public function getDoc($id){	
		$qry = "SELECT * FROM doctor INNER JOIN position ON position.id = doctor.position_id WHERE doctor.id = $id";
		$res = $this->db->query($qry)->fetchAll(PDO::FETCH_ASSOC);			
		return $res;
	}	
	
	public function getPat($id){		
		$qry = "SELECT * FROM patient WHERE patient.id = $id";
		$res = $this->db->query($qry)->fetchAll(PDO::FETCH_ASSOC);		
		return $res;
	}
	
	public function setDoctorName($id, $name){
		$sql = "UPDATE doctor SET fio = :fio WHERE id= :id";
		$stmt = $pdo->prepare($sql);                                  
		$stmt->bindParam(':fio', $name, PDO::PARAM_STR);       		   
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);   
		$stmt->execute(); 
		return $stmt;
	}	
	
	public function setPatientName($id, $name){
		$sql = "UPDATE patient SET fio = :fio WHERE id= :id";
		$stmt = $pdo->prepare($sql);                                  
		$stmt->bindParam(':fio', $name, PDO::PARAM_STR);       		   
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);   
		$stmt->execute(); 
		return $stmt;
	}	
	
}