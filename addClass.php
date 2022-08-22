<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addclass</title>
    
    <style>
     /* .first{
        height: 400px;
        width: 300px;
        background: black;
        border-radius: 12px;
      }
      .second{
        height: 600px;
        width: 400px;
        background: green;
      }
      <link rel="stylesheet" href="Zimastyles.css">
      */
      /*#sign_up{
    margin: 15px;
    padding: 5px;
    min-height: 16px;
    min-width: 150px;
    text-align: center;
    background-color: #1ED891;
    border-radius: 10px;
    font-weight: bold;
    color: white;
}*/
      /* border-bottom: #1ED891 solid 0.5px;*/

body{
    margin: 0px;
    padding: 0px;
}
header{
    height: 68px;
    max-width: 100vw;
    background-color: #0A5A8F;
    
 
}
#logo img{
    height: 67.59px;
    width: 60px;
    margin: 3px;
    float:left;
}
.menu{
display: flex;
flex-direction: row;
float: right;
}
a{
    color: white;
    text-decoration: none;
}
.menu div{
    margin: 15px;
    padding: 5px;
    height: 16px;
    width: 150px;
    text-align: center;
    border: #1ED891 solid 2px;
    border-radius: 10px;
    font-weight: bold;
    color: white;
}
.menu div span{
    margin: 15px;
    padding: 5px;
    height: 16px;
    width: 150px;
    text-align: center;
    border-radius: 10px;
    font-weight: bold;
    color: white;
}
#user{
  border: none;
  border: white solid;
  border-radius: 50%;

}

.menu div:hover{
    background-color: #1ED891;
    cursor: pointer;
}
    </style>
</head>
<body>
<header>
            <div id="logo"><img src="../Zima/Images/Zima Logo.png" alt=""></div>
            <div class="menu">
            <div><a href="">Home</a></div>
            <div><a href="Conditions.html">Conditions</a></div>
            <div><a href="">Blog</a></div>
            <div id="user"><a href="">Sign up</a></div>
            </div>
        </header>
        <div><button>IKIDUNDA</button></div>
</body>
<script>
    let first= document.querySelector(".first")
   first.addEventListener("click",function(){
     first.classList.add("second");
     
   })
</script>
</html>
