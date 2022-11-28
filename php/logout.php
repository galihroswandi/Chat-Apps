<?php
session_start();
if( $_SESSION['unique_id'] ){ // if user is logged in then come to this page otherwise go to login page
    include_once "config.php";
    $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
    if( isset($logout_id) ){ // if logout_id is set
        $status = "Offline now";
        // once user logout the we'll update this status to offline and in the login form 
        // we'll again update the status to active now if user logged is successfully
        $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$logout_id}");
        if( $sql ){
            session_unset();
            session_destroy();
            echo "<script>location.href = '../login.php'</script>";
        }
    }else{
        echo "<script>location.href = '../users.php'</script>";
    }
}else{
    echo "<script>location.href = '../login.php'</script>";
}