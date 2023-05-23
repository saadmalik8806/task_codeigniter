<!DOCTYPE html>
<html>
<head>
<title>Display Records</title>
</head>

<body>
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Sr No</th>
   <th>Last Name</th>
   <th>Middle name</th>
   <th>First name</th>
   <th>Gender(M/F)</th>
   <th>Date of Birth</th>
   <th>Marital status</th>
   <th>Nationality</th>
   <th>Blood Group</th>
   <th>Nominee for Full & final settlement amount & PF <br>
    Name</th>
   <th>Relationship</th>
   <th>Preferred </th>
   <th>Permanent address</th>
   <th>Current address</th>
   <th>Mobile number</th>
   <th>Other contact number</th>
   <th>ID No</th>
   <th>PAN</th>
   <th>Driver’s License No</th>
   <th>EMERGENCY CONTACT INFORMATION <br>
    Email address </th>

   <th>Last Name</th>
   <th>First name</th>
   <th>Relationship to you</th>
   <th>Address</th>
   <th>Phone number</th>
   <th>Mobile number</th>
   <th>Nominee name</th>
   <th>Last Name</th>
   <th>First name</th>

   <th>Secondary education <br>
    School Name & location</th>
   <th>Years attended</th>

   <th>Post-secondary education <br>
    Institution Name & location</th>
   <th>Years attended</th>

   <th>EMPLOYEE PROFILE <br>
    Name</th>
   <th>Birth date</th>
   <th>Nickname</th>
   <th>Family Background</th>
   <th>Q1</th>
   <th>Q2</th>
   <th>Q3</th>
   
  </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->p_last_name."</td>";
  echo "<td>".$row->p_middle_name."</td>";
  echo "<td>".$row->p_first_name."</td>";
  echo "<td>".$row->P_Gender."</td>";
  echo "<td>".$row->P_D_O_B."</td>";
  echo "<td>".$row->P_Marital_status."</td>";
  echo "<td>".$row->P_Nationality."</td>";
  echo "<td>".$row->P_BG."</td>";
  echo "<td>".$row->N_name."</td>";
  echo "<td>".$row->N_Relationship."</td>";
  echo "<td>".$row->N_Preferred."</td>";
  echo "<td>".$row->N_Permanent_address."</td>";
  echo "<td>".$row->N_Current_address."</td>";
  echo "<td>".$row->N_Mobile_number."</td>";
  echo "<td>".$row->N_other_contact_number."</td>";
  echo "<td>".$row->N_ID_No."</td>";
  echo "<td>".$row->N_PAN."</td>";
  echo "<td>".$row->N_Driver_License_no."</td>";
  echo "<td>".$row->N_email."</td>";
  echo "<td>".$row->E_Last_Name."</td>";
  echo "<td>".$row->E_First_name."</td>";
  echo "<td>".$row->E_Relationship_to_you."</td>";
  echo "<td>".$row->E_Address."</td>";
  echo "<td>".$row->E_Phone."</td>";
  echo "<td>".$row->E_mobile_number."</td>";
  echo "<td>".$row->E_nominee_name."</td>";
  echo "<td>".$row->E_N_last_name."</td>";
  echo "<td>".$row->E_N_first_name."</td>";
  echo "<td>".$row->S_edu_schoolname."</td>";
  echo "<td>".$row->S_edu_Years_attended."</td>";
  echo "<td>".$row->P_S_edu_Institution_name."</td>";
  echo "<td>".$row->P_S_edu_years_attended."</td>";
  echo "<td>".$row->EP_name."</td>";
  echo "<td>".$row->EP_D_O_B."</td>";
  echo "<td>".$row->EP_Nickname."</td>";
  echo "<td>".$row->EP_family_background."</td>";
  echo "<td>".$row->PI_1."</td>";
  echo "<td>".$row->PI_2."</td>";
  echo "<td>".$row->PI_3."</td>";
  

  echo "</tr>";
  $i++;
  }
   ?>
</table>
</body>
</html>
