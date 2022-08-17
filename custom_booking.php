<script>
function validateForm() {
 var x=document.myform.room_type1.value;
 var d1=document.myform.check_in.value;
 var d2=document.myform.check_out.value; 
 var todayDate = new Date(); 
 var date1 = new Date(d1);
 var date2 = new Date(d2);
 let difference = date2.getTime() - date1.getTime();
 let TotalDays = Math.ceil(difference / (1000 * 3600 * 24));
 document.myform.date_diff.value=TotalDays;
    console.log(TotalDays + ' days to world Cup');

 if(x == ""|| x == "Select Room Type") {
    document.getElementById("roomType").innerText=" please select room type";
    return false;
  }
if(todayDate.getTime() > date1.getTime()){
    document.getElementById("check_in").innerText="Please select future date";
    return false;
}
if(date1.getTime() > date2.getTime()){
    document.getElementById("check_out").innerText="Check out date should greater than check in Date";
    return false;
}

if(TotalDays<1) {
    document.getElementById("check_out").innerText="Please check your check in and check out day again";
    return false;
  }
}
</script>
<style>
    .error{
        color:red;
    }
    </style>
<div class="container">
    <div class="card card-container">
        <br>
        <h1> Room Booking Form </h1>
        <br>
        <div class="result">
            <?php
            if (isset($_GET['empty'])){
                echo '<div class="alert alert-danger">All rooms are reserved please try with other room types </div>';
            } 
            elseif (isset($_GET['success'])){
                echo '<div class="alert alert-success">Successfully Booking please pay and complete booking </div>';
            }
            elseif (isset($_GET['dberror'])){
                echo '<div class="alert alert-danger">DataBase Error in status change</div>';
            }
            
            ?>
        </div>
          <form class="form-signin"  name="myform" onsubmit="return validateForm()" data-toggle="validator" action="ajax.php" method="post">
            <div class="row">
            <div class="panel-body">
                      <div class="form-group col-lg-6">
                                <label>First Name</label>
                                <input class="form-control"  name="name" placeholder="First Name" id="first_name" data-error="Enter First Name" required>
                                <label class="error" id="nameerror">  </label>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Last Name</label>
                                <input class="form-control" name="lastName" placeholder="Last Name" id="last_name">
                            </div>

                            <div class="form-group col-lg-6">
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" placeholder="Email Address" id="email" data-error="Enter Valid Email Address" required>
                                <div class="help-block with-errors"></div>
                            </div>
            
                   <div class="form-group col-lg-6">
                    <label>Contact Number</label>
                    <input type="number" class="form-control" name="phone" data-error="Enter Min 10 Digit" data-minlength="10" placeholder="Contact No" id="contact_no" required>
                                <div class="help-block with-errors"></div>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group col-lg-6">
                                    <label>Room Type</label>
                                    <select class="form-control" id="room_type1" name="room_type1"  required data-error="Select Room Type">
                                        <option selected disabled>Select Room Type</option>
                                        <?php
                                        $query  = "SELECT * FROM room_type";
                                        $result = mysqli_query($connection,$query);
                                        if (mysqli_num_rows($result) > 0){
                                            while ($room_type = mysqli_fetch_assoc($result)){
                                                echo '<option value="'.$room_type['room_type_id'].'">'.$room_type['room_type'].'</option>';
                                            }}
                                        ?>
                                    </select>
                                    <label class="error" id="roomType"></label>
                                        </div>
                                  <div class="form-group col-lg-6">
                                    <label>Check In Date</label>
                                    <input type="date" class="form-control" name="check_in" placeholder="mm/dd/yyyy" id="check_in_date" data-error="Select Check In Date" required>
                                    <label class="error" id="check_in"></label>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Check Out Date</label>
                                    <input type="date" class="form-control" name="check_out" placeholder="mm/dd/yyyy" id="check_out_date" data-error="Select Check Out Date" required>
                                    <label class="error" id="check_out"></label>
                                </div>
                                 <input type="hidden" class="form-control" name="date_diff">
                           </div>

            <div class="form-group col-lg-5">
            <button class="btn btn-lg btn-success btn-block btn-signin" type="submit" name="custom_reserve">Reserve</button>
         </div>
         <div class="form-group col-lg-5">
         <button class="btn btn-lg btn-success btn-block btn-signin" type="Reset">Reset</button>
         </div>
        </div>
        </form>
</div>
</div>
</div>