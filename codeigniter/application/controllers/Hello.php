<?php
class Hello extends CI_Controller 
{
	public function __construct()
	{
	//call CodeIgniter's default Constructor
	parent::__construct();
	
	//load database libray manually
	$this->load->database();
	
	//load Model
	$this->load->model('Hello_Model');
	}

	public function savedata()
	{
		//load registration view form
		$this->load->view('registration');
	
		//Check submit button 
		if($this->input->post('save'))
		{
		//get form's data and store in local varable
		$p_last_name =$this->input->post('p_last_name');
		$p_middle_name =$this->input->post('p_middle_name');
		$p_first_name =$this->input->post('p_first_name');
        $P_Gender = $this->input->post('P_Gender');
        $P_D_O_B = $this->input->post('P_D_O_B');
        $P_Marital_status = $this->input->post('P_Marital_status');
        $P_Nationality = $this->input->post('P_Nationality');
        $P_BG = $this->input->post('P_BG');
        $N_name = $this->input->post('N_name');
        $N_Relationship = $this->input->post('N_Relationship');
        $N_Preferred = $this->input->post('N_Preferred');
        $N_Permanent_address = $this->input->post('N_Permanent_address');
        $N_Current_address = $this->input->post('N_Current_address');
        $N_Mobile_number = $this->input->post('N_Mobile_number');
		$N_other_contact_number = $this->input->post('N_other_contact_number');
        $N_ID_No = $this->input->post('N_ID_No');
        $N_PAN = $this->input->post('N_PAN');
        $N_Driver_License_no = $this->input->post('N_Driver_License_no');
        $N_email = $this->input->post('N_email');
        $E_Last_Name = $this->input->post('E_Last_Name');
        $E_First_name = $this->input->post('E_First_name');
        $E_Relationship_to_you = $this->input->post('E_Relationship_to_you');
        $E_Address = $this->input->post('E_Address');
        $E_Phone = $this->input->post('E_Phone');
        $E_mobile_number = $this->input->post('E_mobile_number');
        $E_nominee_name = $this->input->post('E_nominee_name');
        $E_N_last_name = $this->input->post('E_N_last_name');
        $E_N_first_name = $this->input->post('E_N_first_name');
        $S_edu_schoolname = $this->input->post('S_edu_schoolname');
        $S_edu_Years_attended = $this->input->post('S_edu_Years_attended');
        $P_S_edu_Institution_name = $this->input->post('P_S_edu_Institution_name');
        $P_S_edu_years_attended = $this->input->post('P_S_edu_years_attended');
        $EP_name = $this->input->post('EP_name');
        $EP_D_O_B = $this->input->post('EP_D_O_B');
        $EP_Nickname = $this->input->post('EP_Nickname');
        $EP_family_background = $this->input->post('EP_family_background');
        $PI_1 = $this->input->post('PI_1');
        $PI_2 = $this->input->post('PI_2');
        $PI_3 = $this->input->post('PI_3');


//call saverecords method of Hello_Model and pass variables as parameter
		$this->Hello_Model->saverecords($p_last_name,$p_middle_name,$p_first_name,$P_Gender,$P_D_O_B,$P_Marital_status,$P_Nationality,$P_BG,$N_name, $N_Relationship,$N_Preferred,$N_Permanent_address,$N_Current_address,$N_Mobile_number,$N_other_contact_number,$N_ID_No,$N_PAN,$N_Driver_License_no,$N_email,$E_Last_Name,$E_First_name,$E_Relationship_to_you,$E_Address,$E_Phone,$E_mobile_number,$E_nominee_name,$E_N_last_name,$E_N_first_name,$S_edu_schoolname,$S_edu_Years_attended,$P_S_edu_Institution_name,$P_S_edu_years_attended,$EP_name,$EP_D_O_B,$EP_Nickname,$EP_family_background,$PI_1,$PI_2,$PI_3);		
		echo "Records Saved Successfully";
		}
	}
    
    public function dispdata()
	{
	$result['data']=$this->Hello_Model->displayrecords();
	$this->load->view('display_records',$result);
	}
}
?>