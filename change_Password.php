<script>
function validateForm() {
 var d1=document.myform.password_new.value;
 var d2=document.myform.password_confirm.value;
 var x=document.myform.password_current.value; 

 if(d1 == "") {  
     document.getElementById("erpassword_new").innerHTML = "**Fill the password please!";  
     return false;  
  }  
   
 //minimum password length validation  
  if(d1.length < 8) {  
     document.getElementById("erpassword_new").innerHTML = "**Password length must be atleast 8 characters";  
     return false;  
  }  
  
//maximum length of password validation  
  if(d1.length > 15) {  
     document.getElementById("erpassword_new").innerHTML = "**Password length must not exceed 15 characters";  
     return false;  
  }

 if(d1 != d2) {
    document.getElementById("erpassword_confirm").innerText="** Your password is not match";
    return false;
  }
}
</script>
<style>
    .error{
        color:red;
    }
    </style>




<div class="col-sm-9 col-sm-offset-3 col-lg-8 col-lg-offset-3 main">
<div class="row">
	<!-- Container -->	
	<div id="container"><div id="container-inner">
		<h1>Change Password</h1>
        <br>
        <div class="result">
            <?php
            if (isset($_GET['empty'])){
                echo '<div class="alert alert-danger">** Please Eneter current password </div>';
            } 
            elseif (isset($_GET['error'])){
                echo '<div class="alert alert-danger">** Your  Current password is Incorrect </div>';
            }
            elseif (isset($_GET['success'])){
                echo '<div class="alert alert-success">Successfully Change Your Password </div>';
            }
            elseif (isset($_GET['dberror'])){
                echo '<div class="alert alert-danger">DataBase Error in status change</div>';
            }
            
            ?>
        </div>



		<form  name="myform" onsubmit="return validateForm()" action="ajax.php" method="post">
			<fieldset>
				<!-- Your current password -->
				<div class="form-group col-lg-8">
					<label for="password_current">Your current password</label>
					<input type="password" name="password_current" class="form-control" id="password_current" />
				</div>
				
				<!-- Your new password -->
				<div class="form-group col-lg-8">
					<label for="password_new">Your new password</label>
					<input type="password" class="form-control"  name="password_new" id="password_new" />
                    <label class="error" id="erpassword_new"></label>
				</div>
				
				<!-- Confirm password -->
				<div class="form-group col-lg-8">
					<label for="password_confirm">Confirm password</label>
					<input type="password" class="form-control" name="" id="password_confirm" />
                    <label class="error" id="erpassword_confirm"></label>
                </div>
				
				<!-- Controls -->
				<div class="form-group col-lg-6">
                <button type="submit" class="btn btn-lg btn-success" name="change_password" style="border-radius:0%">Change Password</button>
                <button type="reset" class="btn btn-lg btn-danger" style="border-radius:0%">Reset</button>					
				</div>
			</fieldset>
		</form>
			
	</div></div>	<!-- /Container -->


</div>
<div>