<?php include_once "db.php";
  //session_start();
include_once "header.php";
include_once "system-admin-sidebar.php";

?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Order Request</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">My order Lists </div>
                <div class="panel-body">
                    <?php
                    if (isset($_GET['resolveError'])) {
                        echo "<div class='alert alert-danger'>
                                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error on Assignement !
                            </div>";
                    }
                    if (isset($_GET['resolveSuccess'])) {
                        echo "<div class='alert alert-success'>
                                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Deliver Asignment is Successfully !
                            </div>";
                    }
                    ?>
                    <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%" id="rooms">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Phone Number</th>
                         
                            <th>Room</th>
                            <th>Item</th>
                            <th>Number of Item</th>
                            <th>Requested Date</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $user=$_SESSION['username'];
                        $complaint_query = "SELECT * FROM requests where customerId='$user'";
                        $complaint_result = mysqli_query($connection, $complaint_query);
                        if (mysqli_num_rows($complaint_result) > 0) {
                            $num = 0;
                            while ($complaint = mysqli_fetch_assoc($complaint_result)) {
                                $num++
                                ?>
                                <tr>
                                    <td><?php echo $num ?></td>
                                    <td><?php echo $complaint['customerId'] ?></td>
                                    <td><?php echo $complaint['contact_no'] ?></td>
                                    <td><?php echo $complaint['roomid'] ?></td>
                                    <td><?php echo $complaint['Item'] ?></td>
                                    <td><?php echo $complaint['NoItem'] ?></td>
                                    <td><?php echo date('M j, Y :h:m',strtotime($complaint['RequestTime'])) ?></td>
                                    <td>
                                        <?php if(!$complaint['status']){
                                            echo 'Request';
                                        } else{
                                            echo "Assigned to ";
                                             echo $complaint['ResolvedBy'];
                                        }
                                        ?>
                                    </td>
                                    


                                </tr>
                            <?php }
                        } else {
                            echo "No Rooms";
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <!-- Add Room Modal -->
    <div id="complaintModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Accept Request</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form data-toggle="validator" role="form" method="post" action="ajax.php">
                                <div class="form-group">
                                    <label>Assigned To</label>
                                    <input class="form-control" placeholder="Assigned to" name="casher" data-error="Assign to" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <input type="hidden" id="complaint_id" name="request_id" value="">
                                <button class="btn btn-success pull-right" name="accept_request">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
        <p class="back-link">Sarem International Hotel</p>
        </div>
    </div>

</div>   