<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "zima";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if(!$conn){
  echo "Database connection error".mysqli_connect_error();
}


/*$sql =  "SELECT * FROM users WHERE status='Active now'";
$query = mysqli_query($conn, $sql);
/*$output= mysqli_num_rows($query);*
$row= mysqli_fetch_assoc($query);
$output='';
if(mysqli_num_rows($query) > 0){

    $output .= '<img src="php/images/'. $row['img'] .'" alt="">
    <span>'. $row['fname']. " " . $row['lname'] .'</span>';

}*/
$sql4 = "SELECT * FROM users WHERE status='Active now' ORDER BY user_id DESC";
$sql = "SELECT * FROM users WHERE account_type ='Peer' ORDER BY user_id DESC";

    $query = mysqli_query($conn, $sql4);
    $query1 = mysqli_query($conn, $sql);
    
   
    $output = "";
    $outputt = "";
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zima Admin</title>
    <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <link rel="stylesheet" href="/fontawesome-free-6.1.1-web/">
  <link rel="stylesheet" href="/fontawesome-free-6.1.1-web/css/all.css">
    <style>
        body{
            height: 100vh;
            width: 100%;
            background: #1ED891;
            margin: 0px;
            padding: 0px;
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        #header{
            background: #207bb8;
            width: 100%;
            height: 64px;
            text-align: center;
            color: white;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 25px;
        }
        #list_users{
            float: left;
            text-align: center;
            color: black;
            display: flex;
            flex-direction: column;
            background: rgba(255, 255, 255, 0.25);
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 4px );
    -webkit-backdrop-filter: blur( 4px );
    border-radius: 10px;
    border: 1px solid rgba( 255, 255, 255, 0.18 );
            margin: 20px 50px;
           height: 400px;
           width: 500px;
           border-radius: 12px;
           
        }
        .content{
          display: flex;
          flex-direction: row;
          align-items: center;
          justify-content: center;
          float:left;
          margin-left: 15px;
        }
        #users_title{
          margin: 5px;
          color: white;
          font-size: 32px;
        }
        a{
         text-decoration: #1ED891;
         color: white;
        }
     a img{
  height: 40px;
  width: 40px;
  border-radius: 50%;
  margin: 5px;
}
#Peers_online{
  float: left;
            text-align: center;
            color: black;
            display: flex;
            flex-direction: column;
            background: rgba(255, 255, 255, 0.25);
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 4px );
    -webkit-backdrop-filter: blur( 4px );
    border-radius: 10px;
    border: 1px solid rgba( 255, 255, 255, 0.18 );
            margin: 20px 50px;
           height: 400px;
           width: 300px;
           border-radius: 12px;
}
#lists{
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  justify-items: center;
}
#Peer_approval{
  text-align: center;
  display: flex;
  flex-direction: row;
  align-items:center;
  justify-content: center;
}
.email{
 align-self: center;
 margin-left: 40px;
 vertical-align: middle;
 background: #207bb8;
 height: 40px;
 width: 80px;
 border-radius: 8px;
 display: flex;
 align-items: center;
 justify-content: center;
}
.content{
  display: flex;
  flex-direction: row;
}
    
    </style>
</head>
<body>
   <div id="header">Zima Management Console</div>
   <div>
    <div id="list_users">
       <span  id="users_title"> Users Online</span>
      <div id="lists">
        <?php 
     if(mysqli_num_rows($query) == 0){
      $output .= "No users online";
  }elseif(mysqli_num_rows($query) > 0){
    while($row = mysqli_fetch_assoc($query)){

      $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
                  <div class="content">
                  <img src="images/'. $row['img'] .'" alt="">
                  <div class="details">
                      <span>'. $row['fname']. " " . $row['lname'] .'</span>
                  </div>
                  
                  </div>
              </a>';
  }
  }
  echo $output;
   ?>
   
  </div>
   </div> 
   <div id="list_users">
       <span  id="users_title"> Peers on the Platform</span>
      <div id="lists">
      <?php 
     if(mysqli_num_rows($query1) == 0){
      $output .= "No Peers yet!";
  }elseif(mysqli_num_rows($query1) > 0){
    while($row = mysqli_fetch_assoc($query1)){

      $outputt .= '<a href="chat.php?user_id='. $row['unique_id'] .'" id="Peer_approval">
                  <div class="content">
                  <img src="images/'. $row['img'] .'" alt="">
                  <div class="details">
                      <span>'. $row['fname']. " " . $row['lname'] .'</span>
                     
                  </div>
                  <div class="email">
                  <span><a href="mailto:'. $row['email']. '?subject=Take this test to become a Peer!&body=This is only a test!">VET</a></span>
              </div>
                  </div>
                  
              </a>';
  }
  }
  echo $outputt;
  ?> 
 
      </div>
    </div>
    
</body>
</html>

