<div><?php
  $sql="SELECT * FROM users WHERE account_type='Peer'";
  $sql2="UPDATE users SET account_type = 'User' WHERE user_id = '.($row['user_id']).'";
  $query = mysqli_query($conn, $sql);
  ?></div>
  "DELETE FROM users WHERE `users`.`user_id` = 5"