<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    /*getting the current user*/
    $sql5="SELECT * FROM users WHERE unique_id = {$outgoing_id}";
    $query_thisuser=mysqli_query($conn, $sql5);

    if(mysqli_num_rows($query_thisuser) > 0){
        $row = mysqli_fetch_assoc($query_thisuser);
        $account="";
     /*getting the current user account type*/
        $account=$row['account_type'];
        /*echo $account;*/
      
    $sql="SELECT * FROM users WHERE  unique_id != {$outgoing_id}" ;
    $query = mysqli_query($conn, $sql);
    
    if($account==='User'){
    $sql2= "SELECT * FROM users WHERE unique_id != {$outgoing_id} AND account_type ='Peer' ORDER BY user_id DESC";
    $query = mysqli_query($conn, $sql2);
    /*echo $account;*/
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
}
else{
    $sql4 = "SELECT * FROM users WHERE (unique_id != {$outgoing_id}) AND (account_type = 'User') ORDER BY user_id DESC";
    $query3 = mysqli_query($conn, $sql4);
   
    $output = "";
    if(mysqli_num_rows($query3) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query3) > 0){
        include_once "data.php";
    }
    echo $output;
}
    }
/*elseif(mysqli_num_rows($query2) > 0){
    include_once "data.php";
}*/
/*$sql3 ="SELECT * FROM users WHERE (account_type != 'Peer') AND (unique_id != {$outgoing_id}) ";*/
/*$sql = "SELECT * FROM users WHERE NOT (unique_id = {$outgoing_id}) AND (account_type = 'Peer') ORDER BY user_id DESC";  $query2 = mysqli_query($conn, $sql2);*/
?>
   