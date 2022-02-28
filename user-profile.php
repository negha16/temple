 <?php
include 'auth.php'; 

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/user-profile560.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<title>soltox</title>
</head>
<body>
    <?php include("header.php");?>  
<div class="user-profile">
    <div class="container">
        <div class="row">
            <div class="col-sm-4" style="background-color: purple;">
                <div class="account-sidebar ">
                    <div class="author-card pb-3" style="text-align:center;">            
                        <div class="author-card-profile">
                            <div class="author-card-avatar"><img class="rounded-circle mt-2" src="images/profile.jpg" width=200px height="200px">
                            </div>
                            <div class="author-card-details"  style="color:yellow;">
                                <h5 class="author-card-name text-lg"><?php echo $singleRow['USER_NAME']; ?></h5><br><span class="author-card-position">Joined <?php echo $singleRow['CRTE_DATE']; ?></span>
                            </div>
                        </div>
                    </div>
                         <br><br><br>
                    <div class="wizard" >
                        <nav class="list-group list-group-flush">               
                            <a class="list-group-item " href="user-profile.php">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><i class="fa fa-shopping-bag mr-1 text-muted"></i>
                                        <div class="d-inline-block font-weight-medium text-uppercase">Profile</div>
                                    </div>
                                </div>
                            </a> 
                            <a class="list-group-item " href="user-wishlist.php">
                            <div class="d-flex justify-content-between align-items-center">
                                <div><i class="fa fa-shopping-bag mr-1 text-muted"></i>
                                    <div class="d-inline-block font-weight-medium text-uppercase">Favourite Temples</div>
                                </div>
                            </div>
                            </a>
                            <a class="list-group-item " href="user-bookinghistory.php">
                            <div class="d-flex justify-content-between align-items-center">
                                <div><i class="fa fa-shopping-bag mr-1 text-muted"></i>
                                    <div class="d-inline-block font-weight-medium text-uppercase">Booking History</div>
                                </div>
                            </div>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
              <div class="profile">
<form action="" method="post" enctype="multipart/form-data">
                    <h3 class="heading mb-3" style="text-align:center;margin-top: 5%;">Profile</h3>
         
                        <div class="row">
                  <div class="form-group col-sm-6">
                        <label for="DEVT_FNAME">First Name</label>
                        <input type="text" class="form-control" id="DEVT_FNAME" value="<?php echo $singleRow['DEVT_FNAME']; ?>">
                      </div>
                        <div class="form-group col-sm-6">
                        <label for="DEVT_LNAME">Last Name</label>
                        <input type="text" class="form-control" id="DEVT_LNAME"  value="<?php echo $singleRow['DEVT_LNAME']; ?>">
                      </div>
                    </div>
                
                    <div class="row">
                        <div class="form-group  col-sm-9">
                            <label for="DEVT_ADDR">Address</label>
                            <textarea name="Address" cols="20" rows="5" class="form-control" id="DEVT_ADDR"value=><?php echo $singleRow['DEVT_ADDR']; ?></textarea>
                        </div>
                    </div>
                                
                        <div class="row"> 
                      <div class="form-group  col-sm-9 ">
                        <label for="DEVT_MOBL">Mobile Number</label>
                        <input  class="form-control" id="DEVT_MOBL"type="text" pattern="[0-9]{10}" title="Enter your mobile number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "10 "value="<?php echo $singleRow['DEVT_MOBL']; ?>">
                      </div>
                  </div>
                    <div class="row"> 
                        <div class="form-group  col-sm-9">
                        <label for="DEVT_MAIL">Email</label>
                        <input type="email" class="form-control" id="DEVT_MAIL"value="<?php echo $singleRow['DEVT_MAIL']; ?>">
                      </div>
                    </div>
                    <a href="javascript:void(0);" onclick="javascript:cpassword();">Change Password</a>
                    <div class="changepassword" id="change-password">                      
                        <div class="row">
                       <div class="form-group col-sm-6 mt-2">
                        <label for="PASS_WORD">Current Password </label>
                        <input type="password" class="form-control" id="PASS_WORD" placeholder="Enter current password "  value=""  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                      </div>
                  </div>
                    <div class="row">
                      <div class="form-group col-sm-6">
                        <label for="NPASS_WORD">New Password </label>
                        <input type="password" class="form-control" id="NEW_PASS_WORD" placeholder="Enter a strong password "  value=""  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                      </div>    
                        <div class="form-group col-sm-6">
                        <label for="CPASS_WORD">Confirm Password </label>
                        <input type="password" class="form-control" id="CPASS_WORD" placeholder="Confirm password" value="" >
                        <span id="messages" style="color:red;"> </span>
                      </div>
                  </div>

                  </div>
                  <div class="buttons mb-3" style="text-align:center">
                        <input type="submit" name="submit" class="btn btn-primary mt-2" value="submit" >
                        <input type="submit" name="cancel" class="btn btn-danger mt-2" value="cancel" >
                  
                        
              </div> 

    </form>  
</div>
                
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
   var password = document.getElementById("NEW_PASS_WORD")
  var confirm_password = document.getElementById("CPASS_WORD");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;


window.onload = function() {
        $("#change-password").hide();
      }
function cpassword(){

    var newe = $('#change-password').toggle(); 

}

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
     <?php 
    include("footer1.php");
?>
</body>
</html>

  

