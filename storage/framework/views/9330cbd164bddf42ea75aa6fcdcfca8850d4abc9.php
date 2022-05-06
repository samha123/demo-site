<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST" style="margin:2px;padding:2px">
  <div class="form-group">
    <?php echo csrf_field(); ?>
    
    <div class="form-group row">
                <label for="inputInterest" ><h5><span class="a-1">REGISTER INTEREST</span></h5></label>
            </div>


            <div class="form-group row">
                <div class="col-sm-3"><b>Where did you hear about us: </b></div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input  type="checkbox" id="where_did_you_hear_about_us" name="where_did_you_hear_about_us" value="Website">
                        <label >
                            Website
                        </label>
                    </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="where_did_you_hear_about_us" name="where_did_you_hear_about_us" value="Advertisement">
                        <label class="form-check-label">
                            Advertisement
                        </label>
                    </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="where_did_you_hear_about_us" name="where_did_you_hear_about_us" value="Social Media">
                        <label class="form-check-label">
                           Social Media
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="where_did_you_hear_about_us" name="where_did_you_hear_about_us" value="Radio">
                        <label class="form-check-label">
                            Radio
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="where_did_you_hear_about_us" name="where_did_you_hear_about_us" value="Television">
                        <label class="form-check-label">
                            Television
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="where_did_you_hear_about_us" name="where_did_you_hear_about_us" value="Print">
                        <label class="form-check-label">
                            Print
                        </label>
                    </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="where_did_you_hear_about_us" name="where_did_you_hear_about_us" value="Word Of Mouth">
                        <label class="form-check-label">
                            Word of Mouth
                        </label>
                    </div>
                    <div class="form-check form-check-inline" style="width:80% !important;">
                    <label for="other" class="col-sm-2 col-form-label">other</label>
                <div class="col-sm-5">
                    
                    <input type="text">
                </div>
</div>
                </div>
              </div>
               
<div class="row">
              
            </div>

            <div class="form-group row">
                <label for="inputInterest" class="col-sm-12 col-form-label"><h5><span class="a-2">PARENT DETAILS</span></h5></label>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="parent_first_name" class="col-sm-6 col-form-label">First Name</label>
                    <input type="text" class="form-control" name="parent_first_name" id="parent_first_name" placeholder="" required>
                    
                </div>
                <!-- <span class = "error">* </span> -->
                <div class="col-sm-3">
                    <label for="parent_middle_name" class="col-sm-6 col-form-label"> Middle Name </label>
                    <input type="text" class="form-control" name="parent_middle_name" id="parent_middle_name" placeholder="" required>
                    
                </div>
                <!-- <span class = "error">* </span> -->
                <div class="col-sm-3">
                    <label for="parent_last_name" class="col-sm-6 col-form-label">Last Name</label>
                    <input type="text" class="form-control" name="parent_last_named" id="parent_last_named" placeholder="" required>
                    
                </div>
                <!-- <span class = "error">* </span> -->
            </div>

            <div class="form-group row">
                <label for="relationship_with_the_child" class="col-sm-2 col-form-label">Relationship with child</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="relationship_with_the_child" name="relationship_with_the_child" value="father">
                        <label class="form-check-label" for="relationship_with_the_child">
                            Father
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="relationship_with_the_child" name="relationship_with_the_child" value="mother">
                        <label class="form-check-label" for="relationship_with_the_child">
                            Mother
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="relationship_with_the_child" name="relationship_with_the_child" value="guardian">
                        <label class="form-check-label" for="relationship_with_the_child">
                            Guardian
                        </label>
                    </div>

                </div>
            </div>

            <div class="form-group row">
                <label for="occupation" class="col-sm-2 col-form-label">Occupation</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="occupation" id="occupation" placeholder="" required>
                     
                </div>
                <!-- <span class = "error">* </span> -->
            </div> 
            <div class="form-group row">
                <label for="company_name" class="col-sm-2 col-form-label">Company Name</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="company_name" id="company_name" placeholder="" required>

                </div>
                <!-- <span class = "error">* </span> -->
            </div> 
            <div class="form-group row">
                <label for="moblie_no" class="col-sm-2 col-form-label">Contact Mobile Phone</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="moblie_no" id="moblie_no" placeholder="" required>
                </div>
                 <!-- <span class = "error">* </span> -->
            </div> 
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Contact Email Address</label>
                <div class="col-sm-7">
                    <input type="email" class="form-control" name="email" id="email" placeholder="" required>
                </div>
                <!-- <span class = "error">* </span> -->
            </div> 
            <div class="form-group row">
                <label for="home_phone" class="col-sm-2 col-form-label">Home Phone</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="home_phone" id="home_phone" placeholder="" required>
                </div>
                 <!-- <span class = "error">* </span> -->
            </div> 
            <div class="form-group row">
                <label for="other_phone_number" class="col-sm-2 col-form-label">Other Phone Number if any</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="other_phone_number" id="other_phone_number" placeholder="">
                </div>

            </div> 

            <div class="form-group row">
                <label for="inputInterest" class="col-sm-12 col-form-label"><h5><span class="a-3">CHILD DETAILS</span></h5></label>
            </div>
            <div class="form-group row">
                <label for="child_full_name" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="child_full_name" id="child_full_name" placeholder="" required>
                </div>
                <!-- <span class = "error">* </span> -->
            </div> 
            <div class="form-group row">
                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="gender" name="gender" value="male" checked>
                        <label class="form-check-label" for="gender">
                            Male
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="gender" name="gender" value="female">
                        <label class="form-check-label" for="gender">
                            Female
                        </label>
                    </div>

                </div>
            </div>
            <div class="form-group row">
                <label for="child_full_name" class="col-sm-2 col-form-label">Date of Birth </label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" id="date-picker" name="date_of_birth" value="" style="line-height: 14px;" placeholder="Date Of Birth" required>
       
                </div>
                <!-- <span class = "error">* </span> -->
            </div>
            <div class="form-group row">
                <label for="age" class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="age" id="age" placeholder="" required>
                </div>
                <!-- <span class = "error">* </span> -->
            </div>
             <div class="form-group row">
                <label for="nationality" class="col-sm-2 col-form-label">Nationality </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="nationality" id="nationality" placeholder="" required>
                </div>
                <!-- <span class = "error">* </span> -->
            </div>
             <div class="form-group row">
                <label for="primary_language" class="col-sm-2 col-form-label">Primary Language </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="primary_language" id="primary_language" placeholder="" required>
                </div>
                <!-- <span class = "error">* </span> -->
            </div>
             <div class="form-group row">
                <label for="secondary_language" class="col-sm-2 col-form-label">Secondary Language </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="secondary_language" id="secondary_language" placeholder="" required>
                </div>
                <!-- <span class = "error">* </span> -->
            </div>
             <div class="form-group row">
                <label for="pervious_school_name" class="col-sm-2 col-form-label">Previous School Name</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="pervious_school_name" id="pervious_school_name" placeholder="" required>
                </div>
                <!-- <span class = "error">* </span> -->
            </div>
             <div class="form-group row">
                <label for="current_grade" class="col-sm-2 col-form-label">Current Grade</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="current_grade" id="current_grade" placeholder="" required>
                </div>
                <!-- <span class = "error">* </span> -->
            </div>
             <div class="form-group row">
                <label for="enrolment_year" class="col-sm-2 col-form-label">Enrolment Year</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="enrolment_year" id="enrolment_year" placeholder="" required>
                </div>
                <!-- <span class = "error">* </span> -->
            </div>
             <div class="form-group row">
                <label for="grade_to_which_seeking_admission" class="col-sm-2 col-form-label">Grade to which seeking admission</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="grade_to_which_seeking_admission" id="grade_to_which_seeking_admission" placeholder="" required>
                </div>
<!--                 <span class = "error">* </span>
 -->            </div>


            <div class="form-group row">
                
                
                
                
                
               
				
				
											
											
				 							
											
            </div>
                <!-- <span class = "error">* </span> -->
            </div>
  <button  type="submit" class="btn btn-primary float-right">Submit</button>
</form>
                
                
                
                
				 							
											
         
            
        </form>    
</body>
</html>  <?php /**PATH C:\xampp\htdocs\demo-site\resources\views/register.blade.php ENDPATH**/ ?>