<?php
	class Chairman_model extends CI_Model
	{
		function __construct()
	    {
	        parent::__construct();
	        $this->load->model('mysql_database_model');
	    }

	    public function get_ssg_applicants()
	    {
	    	$sql = 'CALL get_ssg_applicants()';
			$sQuery = $this->db->query($sql);
			$this->db->close();
				
			return $sQuery->result_array();
	    }

	    public function update_ssg_applicant_status($candidate_id, $new_status)
	    {
	    	$sql = 'CALL update_ssg_applicant_status('.$candidate_id.','.$new_status.')';
			$this->db->query($sql);
			$this->db->close();
	    }

	    public function get_ssg_applicants_by_status($status)
	    {
	    	$sql = 'CALL get_ssg_applicants_by_status('.$status.')';
			$sQuery = $this->db->query($sql);
			$this->db->close();
				
			return $sQuery->result_array();
	    }
	 }
?>