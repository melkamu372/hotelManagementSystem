<?php include_once "db.php";
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include_once "header.php";
include_once "system-admin-sidebar.php";

?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Make order  <div class="profile-usertitle-name"></div></div>
                <div class="panel-body">
                    <?php
                    if (isset($_GET['error'])) {
                        echo "<div class='alert alert-danger'>
                                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error on Request !
                            </div>";
                    }
                    if (isset($_GET['success'])) {
                        echo "<div class='alert alert-success'>
                                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Your Order Successfully submitted !
                            </div>";     
                    }
                    
        
                    ?>
                    <form role="form"  data-toggle="validator" method="post" action="ajax.php">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Item Name</label>
                                <input type="text" class="form-control" placeholder="Item Name" name="item_name" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Number of Item</label>
                                <input type="text" class="form-control" placeholder="Number of Item" name="item_no" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label> Your Room Number </label>
                                <input type="text" class="form-control" name="room_no" placeholder="Room Number" required></textarea>
                            </div>


                            <div class="form-group col-lg-6">
                                <label> Your Phone Number </label>
                                
                                <input type="text" class="form-control" name="phone_no" placeholder="Phone Number" required>
                                
                            </div>

                        </div>

                        

                        <button type="submit" class="btn btn-lg btn-success" name="createOrder" style="border-radius:0%">Submit Order</button>
                        <button type="reset" class="btn btn-lg btn-danger" style="border-radius:0%">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
                </div>


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Menu Lists</div>
                <div class="panel-body">
                    <?php
                    if (isset($_GET['resolveError'])) {
                        echo "<div class='alert alert-danger'>
                                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error on Request please try again !
                            </div>";
                    }
                    if (isset($_GET['resolveSuccess'])) {
                        echo "<div class='alert alert-success'>
                                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Order Successfully Requested !
                            </div>";
                    }
                    ?>
                    <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%" id="rooms">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Food Name</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $menu_query = "SELECT * FROM servicetype,menu WHERE menuGroup=FoodServiceId ORDER BY menuGroup";
                        $menu_result = mysqli_query($connection, $menu_query);
                        if (mysqli_num_rows($menu_result) > 0) {
                            $num = 0;
                            while ($menuItem = mysqli_fetch_assoc($menu_result)) {
                                $num++
                                ?>
                                <tr> 
                                    <td><?php echo $num ?></td>
                                    <td><?php echo $menuItem['name'] ?></td>
                                    <td><?php echo $menuItem['Name'] ?></td>
                                    <td><?php echo $menuItem['price'] ?></td>
                                    <td>
                              Present
                                        
                                    </td>
                                </tr>
                            <?php }
                        } else {
                            echo "No Food Item Lists";
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

   