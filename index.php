<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <form class="form-horizontal" role="form" class="was-validated" method="post" action="transactions/landingpage.php">
                <h2>Registration Form</h2>
                <div class="form-group"> 
                        <div class="form-group">
                            <label for="firstName" class="col-sm-3 control-label">First Name</label>
                            <div class="col-sm-9">
                                <input type="text" id="firstName" placeholder="First Name" class="form-control" name="firstName">
                                <div class="valid-feedback">Valid</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                            <div class="col-sm-9">
                                <input type="text" id="lastName" placeholder="Last Name" class="form-control" name="lastName" >
                                <div class="valid-feedback">Valid</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middleName" class="col-sm-3 control-label">Middle Name</label>
                            <div class="col-sm-9">
                                <input type="text" id="middleName" placeholder="Middle Name" class="form-control" name="middleName" >
                                <div class="valid-feedback">Valid</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-9">
                                <input type="text" id="address" placeholder="Address" class="form-control" name="address" >
                                <div class="valid-feedback">Valid</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                            <div class="col-sm-9">
                                <input type="date" id="birthDate" class="form-control" name="dateOfBirth" >
                                <div class="valid-feedback">Valid</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="placeOfBirth" class="col-sm-3 control-label">Place of Birth</label>
                            <div class="col-sm-9">
                                <input type="text" id="placeOfBirth" placeholder="Place Of Birth" class="form-control" name="placeOfBirth" >
                                <div class="valid-feedback">Valid</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Gender</label>
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" id="femaleRadio" value="Female" name="optradio">Female
                                        </label>
                                        <div class="valid-feedback">Valid</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="radio-inline">
                                            <input type="radio" id="maleRadio" value="Male" name="optradio">Male
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="guardian" class="col-sm-3 control-label">Guardian</label>
                            <div class="col-sm-9">
                                <input type="text" id="guardian" placeholder="Guardian" class="form-control" name="guardian" >
                                <div class="valid-feedback">Valid</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contactNumber" class="col-sm-3 control-label">Contact number </label>
                            <div class="col-sm-9">
                                <input type="contactNumber" id="contactNumber" placeholder="Contact Number" class="form-control">
                                <span class="help-block">Your contact number will not be disclosed without your permission. </span>
                                <div class="valid-feedback">Valid</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="civilStatus" class="col-sm-3 control-label">Civil Status</label>
                            <div class="col-sm-9">
                                <input type="civilStatus" id="civilStatus" placeholder="Civil Status" class="form-control" name="civilStatus" >
                                <div class="valid-feedback">Valid</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="yearLevel" class="col-sm-3 control-label">Year Level</label>
                            <div class="col-sm-9">
                                <select class="form-control" style="height:5%" id="select1" name="yearlevel" >
                                    <option class="gray">Select Year Level</option>
                                    <option>1st Year</option>
                                    <option>2nd Year</option>
                                    <option>3rd Year</option>
                                    <option>4th Year</option>
                                    <option>5th Year</option>
                                </select>
                                <div class="valid-feedback">Valid</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="course" class="col-sm-3 control-label">Course</label>
                            <div class="col-sm-9">
                                <select class="form-control" style="height:5%" id="select1"  name="Course" >
                                    <option class="gray">Select Course</option>
                                    <option>B.S. in Automotive Mechanical Technology</option>
                                    <option>B.S. in Electrical and Technology Management</option>
                                    <option>B.S. in Electro-Mechanical Technology</option>
                                    <option>B.S. in Electronics and Communication Technology</option>
                                    <option>B.S. in Applied Mathematics</option>
                                    <option>B.S. in Applied Physical Sciences</option>
                                    <option>B.S. in Environmental Science and Technology</option>
                                    <option>B.S. in Food Science and Technology</option>
                                    <option>B.S. in Computer Engineering</option>
                                    <option>B.S. in Information Technology</option>
                                    <option>B.S. in Technology Communication Management</option>
                                    <option>B.S. in Data Science</option>
                                    <option>B.S. in Civil Engineering</option>
                                    <option>B.S. in Electrical Engineering</option>
                                    <option>B.S. in Mechanical Engineering</option>
                                    <option>Bachelor of Secondary Education Major in Technology and Livelihood Education</option>
                                </select>
                                <div class="valid-feedback">Valid</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="schoolYear" class="col-sm-3 control-label">School year</label>
                            <div class="col-sm-9">
                                <input type="schoolYear" id="schoolYear" placeholder="School Year" class="form-control" name="schoolYear" >
                                <div class="valid-feedback">Valid</div>
                                <div class="invalid-feedback">Please fill out this field.</div></div>
                        </div>
                        <!-- .form-group -->
                        <div class="form-group">
                            <div class="col-sm-9 float-right">
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </div>
                        </div>
                        </div>
                </div>
    </form> <!-- /form -->
</div> <!-- ./container -->