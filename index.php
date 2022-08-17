<?php
include_once "db.php";
session_start();
if (isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
    $userQuery = "SELECT * FROM user WHERE id = '$user_id'";
    $result = mysqli_query($connection, $userQuery);
    $user = mysqli_fetch_assoc($result);
}else{
    header('Location:home.php');
}
include_once "header.php";
include_once "sidebar.php";
if (isset($_GET['room_mang'])){
    include_once "room_mang.php";
}

elseif (isset($_GET['customer_Request'])){
    include_once "custom_req.php";
}
elseif (isset($_GET['my_order'])){
    include_once "my-request.php";
}

elseif (isset($_GET['food_order'])){
    include_once "food_order.php";
}
elseif (isset($_GET['custom_reservation'])){
    include_once "custom_reservation.php";
}

elseif (isset($_GET['custom_complain'])){
    include_once "custom_complain.php";
}
elseif (isset($_GET['custom_password_change'])){
    include_once "gust-password_change.php";
}

elseif (isset($_GET['dashboard'])){
    include_once "dashboard.php";
}
elseif (isset($_GET['reservation'])){
    include_once "reservation.php";
}
elseif (isset($_GET['staff_mang'])){
    include_once "staff_mang.php";
}
elseif (isset($_GET['add_emp'])){
    include_once "add_emp.php";
}
elseif (isset($_GET['complain'])){
    include_once "complain.php";
}
elseif (isset($_GET['statistics'])){
    include_once "statistics.php";
}
elseif (isset($_GET['emp_history'])){
    include_once "emp_history.php";
}

elseif (isset($_GET['change_password'])){
    include_once "change_Password.php";
}


else{
    header('Location:home.php');
}

include_once "footer.php";