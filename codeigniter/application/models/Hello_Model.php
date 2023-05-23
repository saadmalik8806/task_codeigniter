<?php
class Hello_Model extends CI_Model 
{
	function saverecords($p_last_name,$p_middle_name,$p_first_name,$P_Gender,$P_D_O_B,$P_Marital_status,$P_Nationality,$P_BG,$N_name, $N_Relationship,$N_Preferred,$N_Permanent_address,$N_Current_address,$N_Mobile_number,$N_other_contact_number,$N_ID_No,$N_PAN,$N_Driver_License_no,$N_email,$E_Last_Name,$E_First_name,$E_Relationship_to_you,$E_Address,$E_Phone,$E_mobile_number,$E_nominee_name,$E_N_last_name,$E_N_first_name,$S_edu_schoolname,$S_edu_Years_attended,$P_S_edu_Institution_name,$P_S_edu_years_attended,$EP_name,$EP_D_O_B,$EP_Nickname,$EP_family_background,$PI_1,$PI_2,$PI_3)
	{
	$query="insert into emp_info_sheet values('','$p_last_name','$p_middle_name','$p_first_name','$P_Gender','$P_D_O_B','$P_Marital_status','$P_Nationality','$P_BG','$N_name', '$N_Relationship','$N_Preferred','$N_Permanent_address','$N_Current_address','$N_Mobile_number','$N_other_contact_number','$N_ID_No','$N_PAN','$N_Driver_License_no','$N_email','$E_Last_Name','$E_First_name','$E_Relationship_to_you','$E_Address','$E_Phone','$E_mobile_number','$E_nominee_name','$E_N_last_name','$E_N_first_name','$S_edu_schoolname','$S_edu_Years_attended','$P_S_edu_Institution_name','$P_S_edu_years_attended','$EP_name','$EP_D_O_B','$EP_Nickname','$EP_family_background','$PI_1','$PI_2','$PI_3')";
	$this->db->query($query);
	}


	
	function displayrecords()
	{
	$query=$this->db->query("select * from emp_info_sheet");
	return $query->result();
	}
}




