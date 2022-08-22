<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "zima";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if(!$conn){
  echo "Database connection error".mysqli_connect_error();
}

  session_start();
  $user="";
  if(isset($_SESSION['unique_id'])){
    $sql = "SELECT * FROM users WHERE unique_id= ($_SESSION[unique_id]) ORDER BY user_id DESC";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_assoc($query)){
    $user .=' <span><a href="/Zima/Zima_Chat/users.php" style="display: flex;
    flex-direction: row;
    align-items: center;
    width: 150px;
    justify-content: center; margin :5px 30px ;background: #1ED891; border-radius:12px;">  <img src="Zima_Chat/php/images/'. $row['img'] .'" alt="" style="margin:5px; align-self:center;">'. $row['fname'].'<a></span>';
        }
    }
  }
  else{
    $user .='<div id="sign_up"><a href="/Zima/Zima_Chat/Chatapp.php">Sign Up</a></div>';

  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Zima
        </title>
        <link rel="stylesheet" href="ZimaStyles.css">
    </head>
    <body>
        <header>
            <div id="logo"><img src="../Zima/Images/Zima Logo.png" alt=""></div>
            <div class="menu">
            <div><a href="">Home</a></div>
            <div><a href="Conditions.html">Conditions</a></div>
            <div><a href="">Blog</a></div>
            <?php echo $user?>
            </div>
        </header>
        <section class="body">
            <div id="upper_body"><img src="../Zima/Images/Mental.png" alt=""></div>
            <div id="mental_quote"><span id="first">EVERYTHING HAS A CRACK </span><span id="second">THAT'S HOW LIGHT GETS IN</span> </div>
            <div id="call_toAction"><a href="Zima_Chat/login.php">Start Chat</a></div>
        </section>
        <section>
            <div id="conditions_title">Common Conditions</div>
            <div id="conditions">
                <div id="content"><span>DEPRESSION</span></div>
                <div id="content"><span>ANXIETY</span></div>
                <div id="content"><span>STRESS</span></div>
            </div>
        </section>
        <section id="testimonials">
            <div id="testimonials_title">
              Testimonials
            </div>
            <div id="testimonials_content">
                 <div id="testimony_holder">
                  <div class="user">
                      <img src="../Zima/Images/pexels-godisable-jacob-718978.jpg" alt="">
                      <span id="name">
                          RAKESH AHMED
                      </span>
                  </div>
                  <span id="testimony">
                      Having acceptance of my mental illness means taking charge of my life and moving forward. This has played a big part in my recovery. I started to have acceptance of my mental illness after giving myself credit for my strengths and weaknesses and accepting my limitations.
                  </span>
                 </div>
                 <div id="testimony_holder">
                  <div class="user">
                      <img src="../Zima/Images/pexels-italo-melo-2379005.jpg" alt="">
                      <span id="name">
                          ANGELINA GEORGE
                      </span>
                  </div>
                  <span id="testimony">
                      It is very important for me to use coping skills that can help me get through a tough day. Having good coping skills for me, means I have a plan in managing my mental illness. There are several coping skills that I use. You can take a hot shower, listen to music, watch television, and keep a balance.
                  </span>
                 </div>
                 <div id="testimony_holder">
                  <div class="user">
                      <img src="../Zima/Images/pexels-pixabay-415829.jpg" alt="" id="larger">
                      <span id="name">
                          MARY ATIENO
                      </span>
                  </div>
                  <span id="testimony">
                      It is a good idea to have a good support system to help manage your symptoms and people who can help you with moral support. Also, I make sure to get enough sleep and eat healthy, plus exercise.
                  </span>
                 </div>
            </div>
      </section>
      <span id="emergency_dial">
        Dial <span>911</span>for life-threatening situations.
      </span>
        <section id="footer">
               <div class="footer_content_top">
                <div class="footer_link">
                    ABOUT US
                </div>
                <div class="footer_link">
                    PARTNERS
                </div>
                <div class="footer_link">
                    RESOURCES
                </div>
               </div>
               <div id="footer_divider"></div>
               <div class="footer_content_bottom">
                 <div class="social_icon"><img src="../Zima/Images/icons8-facebook-128.png" alt=""></div>
                 <div class="social_icon"><img src="../Zima/Images/icons8-twitter-128.png" alt=""></div>
                 <div class="social_icon"><img src="../Zima/Images/icons8-instagram-128.png" alt=""></div>
                 <div class="social_icon"><img src="../Zima/Images/icons8-whatsapp-128.png" alt=""></div>
               </div>
               <span id="copyright">
                   &copy; 2022
               </span>
        </section>

    </body>
</html>