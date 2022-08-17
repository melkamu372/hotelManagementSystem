
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="img/user.png" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"><?php echo $_SESSION['username'];?></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Customer</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
        <?php 
        
        if (isset($_GET['my_order'])){ ?>
            <li class="active">
                <a href="index.php?my_order"><em class="fa fa-vcard">&nbsp;</em>
                    My Order
                </a>
            </li>
        <?php } else{?>
            <li>
            <a href="index.php?my_order"><em class="fa fa-vcard">&nbsp;</em>
            My Order
                </a>
            </li>
            <?php }
        if (isset($_GET['food_order'])){ ?>
            <li class="active">
                <a href="index.php?food_order"><em  class="fa fa-cutlery">&nbsp;</em>
                    Orders
                </a>
            </li>
        <?php } else{?>
            <li>
            <a href="index.php?food_order"><em class="fa fa-cutlery">&nbsp;</em>
            Orders
                </a>
            </li>

            <?php }
        ?>


        
        <?php

if (isset($_GET['custom_complain'])){ ?>
            <li class="active">
                <a href="index.php?custom_complain"><em class="fa fa-comments">&nbsp;</em>
                Complains
                </a>
            </li>
        <?php } else{?>
            <li>
            <a href="index.php?custom_complain"><em class="fa fa-comments">&nbsp;</em>
            Complains
                </a>
            </li>
        <?php }?>


        <?php

if (isset($_GET['custom_reservation'])){ ?>
            <li class="active">
                <a href="index.php?custom_password_change"><em class="fa fa-key">&nbsp;</em>
                    Change Password
                </a>
            </li>
        <?php } else{?>
            <li>
            <a href="index.php?custom_password_change"><em class="fa fa-key">&nbsp;</em>
            Change Password
                </a>
            </li>
        <?php }?>

    </ul>
</div><!--/.sidebar-->