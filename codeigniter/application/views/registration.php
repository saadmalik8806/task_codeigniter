<!DOCTYPE html>
<html>
<head>
<title>Registration form</title>


<!-- style tag star -->
<style>
    * {
    box-sizing: border-box !important;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
}

.form-body {
    display: inline-block;
    max-width: 700px;
    width: 100%;
    margin: 0px;
    padding: 0px;
    position: relative;
    font-family: sans-serif;
    font-weight: normal;
}

div.title {
    display: inline-block;
    width: 100%;
    margin: 0px;
    padding: 15px;
    position: relative;
    background: #008FD4;
}

div.title h3 {
    display: inline-block;
    width: auto;
    margin: 0px;
    color: #fff;
}

div.form-list {
    display: inline-block;
    width: 100%;
    margin: 0px;
    padding: 15px;
    position: relative;
    vertical-align: top;
}

div.form-list ul {
    list-style-type: none;
    display: inline-block;
    width: 100%;
    margin: 0px;
    padding: 0px;
    position: relative;
}

div.form-list ul li {
    display: inline-block;
    width: 100%;
    margin: 0px 0px 20px 0px;
    padding: 0px;
    position: relative;
}

div.form-list ul li label {
    display: inline-block;
    width: 25%;
    margin: 0px 2% 0px 0px;
    font-size: 18px;
    line-height: 40px;
    vertical-align: top;
}

div.form-list ul li div.form-field {
    display: inline-block;
    width: 70%;
    margin: 0px 0px 0px 2%;
    font-size: 18px;
    line-height: 30px;
}

div.form-list ul li div.form-field .text {
    display: inline-block;
    width: 100%;
    margin: 0px;
    padding: 10px;
    border: 1px solid #ddd;
}

div.form-list ul li div.form-field .button {
    display: inline-block;
    margin: 0px;
    padding: 10px 15px;
    background: #DDDDDD;
    color: #000;
    font-size: 16px;
    text-transform: uppercase;
    text-align: center;
    border: 0px;
    transition: all ease-in-out 0.3s;
    -moz-transition: all ease-in-out 0.3s;
    -webkit-transition: all ease-in-out 0.3s;
}

div.form-list ul li div.form-field .button:hover {
    background: #008FD4;
    color: #fff;
    cursor: pointer;
}

div.form-list ul li ul.radio-list li {
    width: 32%;
}

div.box.image {
    display: none;
}

div.form-list ul li div.form-field div.box div.form-field {
    margin: 0px;
    width: 100%;
}

div.form-list ul li div.form-field div.box label {
    float: left;
    width: 100%;
    font-size: 12px;
    padding: 0px;
    margin: 0px 0px 5px 0px;
    font-weight: normal;
    line-height: 16px;
}

div.form-list ul li div.form-field div.box div.form-field.mrg {
    margin-bottom: 20px;
}

div.box.video {
    display: block;
}

div.box a {
    font-size: 16px;
    color: #008FD4;
    text-decoration: none;
}

div.box a:hover {
    text-decoration: underline;
}

div.box.flip {
    display: none;
}
</style>

<!--style tag end here-->


</head>

<body>
<form method="post">
<div class="form-body">
        <div class="title">
            <h3 style="display: flex; justify-content: center;">Employee Information Sheet</h3>
        </div>
        <p>
        Please complete the following information below and return as soon as possible to HR along with:
        </p>
       <ul>
        <li>
        Personal photo attached above(three copies)
        </li>
        <li>
        Photocopy of identification proof.( driver license/ passport )
        </li>
        <li>
        Photocopy of address proof.( driver license/ passport /Voter ID card /Adhaar card )
        </li>
        <li>
        Details of Pan card – Photo copy and Scanned copy via email
        </li>
        <li>
        Photocopy of educational qualification certificate
        </li>
        <li>
        Photocopy of experience of certificate of last organizations
        </li>
       </ul>
        <div class="form-list">
            <h3 style="display: flex; justify-content: center;">PERSONAL INFORMATION</h3>
            <ul>
                <li>
                    <label>Last Name</label>
                    <div class="form-field">
                        <input type="text" class="text" name="p_last_name" placeholder="Enter Last name"/>
                    </div>
                </li>
                <li>
                    <label>Middle name</label>
                    <div class="form-field">
                        <input type="text" class="text" name="p_middle_name" placeholder="Enter Middle name"/>
                    </div>
                </li>
                <li>
                    <label>First name</label>
                    <div class="form-field">
                        <input type="text" class="text" name="p_first_name" placeholder="Enter first name"/>
                    </div>
                </li>
                <li>
                    <label>Gender(M/F)</label>
                    <div class="form-field">
                        <input type="text" class="text" name="P_Gender" placeholder="Gender"/>
                    </div>
                </li>
                <li>
                    <label>Date of Birth: (dd/mo/yr)</label>
                    <div class="form-field">
                        <input type="text" class="text" name="P_D_O_B" placeholder="Enter Correct B-O-B"/>
                    </div>
                </li>
                <li>
                    <label>Marital status:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="P_Marital_status" placeholder="Marital status"/>
                    </div>
                </li>
                <li>
                    <label>Nationality:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="P_Nationality" placeholder="Nationality"/>
                    </div>
                </li>
                <li>
                    <label>Blood Group:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="P_BG" placeholder="Enter Blood Group"/>
                    </div>
                </li>
                <p style="display: flex; justify-content: center;">Nominee for Full & final settlement amount & PF</p>
                <li>
                    <label>Name:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="N_name" placeholder="Enter name"/>
                    </div>
                </li>
                <li>
                    <label>Relationship:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="N_Relationship" placeholder="Relationship"/>
                    </div>
                </li>
                <li>
                    <label>Preferred – (Parent / Spouse)</label>
                    <div class="form-field">
                        <input type="text" class="text" name="N_Preferred" placeholder=""/>
                    </div>
                </li>
                <li>
                    <label>Permanent address:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="N_Permanent_address" placeholder="enter address"/>
                    </div>
                </li>
                <li>
                    <label>Current address:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="N_Current_address" placeholder="enter current address"/>
                    </div>
                </li>
                <li>
                    <label>Mobile number:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="N_Mobile_number" placeholder="enter mobile number"/>
                    </div>
                </li>
                <li>
                    <label>Other contact number:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="N_other_contact_number" placeholder="Enter optional number"/>
                    </div>
                </li>
                <li>
                    <label>ID No.:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="N_ID_No" placeholder="Enter id"/>
                    </div>
                </li>
                <li>
                    <label>PAN.:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="N_PAN" placeholder="Enter pan"/>
                    </div>
                </li>
                <li>
                    <label>Driver’s License No. (if any):</label>
                    <div class="form-field">
                        <input type="text" class="text" name="N_Driver_License_no" placeholder="Enter license"/>
                    </div>
                </li>
                <li>
                    <label>Email address:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="N_email" placeholder="enter email id"/>
                    </div>
                </li>
                <p style="display: flex; justify-content: center;">EMERGENCY CONTACT INFORMATION</p>
                <p>
                Please provide information on whom to contact in the case of an emergenc
        </p>
        <li>
                    <label>Last Name:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="E_Last_Name" placeholder="enter last name"/>
                    </div>
                </li>
                <li>
                    <label>First name</label>
                    <div class="form-field">
                        <input type="text" class="text" name="E_First_name" placeholder="enter first name"/>
                    </div>
                </li>
                <li>
                    <label>Relationship to you:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="E_Relationship_to_you" placeholder="enter relationship"/>
                    </div>
                </li>
                <li>
                    <label>Address:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="E_Address" placeholder="enter address"/>
                    </div>
                </li>
                <li>
                    <label>Phone number:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="E_Phone" placeholder="enter phone number"/>
                    </div>
                </li>
                <li>
                    <label>Mobile number:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="E_mobile_number" placeholder="enter mobile number"/>
                    </div>
                </li>
                <li>
                    <label>Nominee name :<br>(For PF)</label>
                    <div class="form-field">
                        <input type="text" class="text" name="E_nominee_name" placeholder="enter nominee name"/>
                    </div>
                </li>
                <li>
                    <label>Last Name:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="E_N_last_name" placeholder="enter last name"/>
                    </div>
                </li>
                <li>
                    <label>First name</label>
                    <div class="form-field">
                        <input type="text" class="text" name="E_N_first_name" placeholder="enter first name"/>
                    </div>
                </li>
                <h4 style="display: flex; justify-content: center;">
                Secondary education
        </h4>
        <li>
                    <label>School Name & location: </label>
                    <div class="form-field">
                        <input type="text" class="text" name="S_edu_schoolname" placeholder="enter School name and location"/>
                    </div>
                </li>
                <li>
                    <label>Years attended:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="S_edu_Years_attended" placeholder="enter Years attended"/>
                    </div>
                </li>
                <h4 style="display: flex; justify-content: center;">
                Post-secondary education
        </h4>
        <li>
                    <label>Institution Name & location:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="P_S_edu_Institution_name" placeholder="enter institution name and location"/>
                    </div>
                </li>
                <li>
                    <label>Years attended:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="P_S_edu_years_attended" placeholder=""/>
                    </div>
                </li>
                <h3 style="display: flex; justify-content: center;">
                EMPLOYEE PROFILE
                </h3>
                <p>
                As a league of vehement & enterprising wizards, Medicaljagat takes pride in our
                incredible network of talented staff who live and work together & remain strongly united
                through a common mission and passion for education. We would really appreciate it if
                you could help us increase connections between our teams, by taking the time to share
                with us some information about your family background and personal interests. Thank
                you!
        </p>
        <li>
                    <label>Name</label>
                    <div class="form-field">
                        <input type="text" class="text" name="EP_name" placeholder=""/>
                    </div>
                </li>
                <li>
                    <label>Birth date:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="EP_D_O_B" placeholder=""/>
                    </div>
                </li>
                <li>
                    <label>Nickname (preferred name):</label>
                    <div class="form-field">
                        <input type="text" class="text" name="EP_Nickname" placeholder=""/>
                    </div>
                </li>
                <li>
                    <label>Family Background</label>
                    <p>
                    Please tell us about your family background. Where were you born? Do you have
siblings or any children of your own? What was your childhood environment like?
                    </p>
                    <div class="form-field">
                        <input type="text" class="text" name="EP_family_background" placeholder=""/>
                    </div>
                </li>
                <li>
                    <label>Personal Interests</label>
                    <p>
                    What do you enjoy doing in your free time? What skills or talents are you most proud of?
                    </p>
                    <div class="form-field">
                        <input type="text" class="text" name="PI_1" placeholder=""/>
                    </div>
                </li>
                <li>
                    <p>What are your long-term career goals & Personal Goals?</p>
                    <div class="form-field">
                        <input type="text" class="text" name="PI_2" placeholder=""/>
                    </div>
                </li>
                <li>
                    <p>Please write a small brief about yourself (as we might use this to write an introduction to
others)</p>
                    <div class="form-field">
                        <input type="text" class="text" name="PI_3" placeholder=""/>
                    </div>
                </li>
                <li class="last">
                    <label>&nbsp;</label>
                    <div class="form-field">
                        <input type="submit" name="save" value="Save Data" />
                    </div>
                </li>
            </ul>
        </div>
    </div>
</form>
</body>
</html>






























































