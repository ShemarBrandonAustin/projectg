<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Gyna</title>
</head>
<body>
    <?php
    if(isset($_SESSION['username'])) {
        echo $_SESSION['username'];
    } else {
        echo 'Error';
    }
    ?>

                    <ul class="nav">
                        <h2 class="navbar-brand">Project Gyna</h2>
                        <li class="nav-item"><a href='../Home/index.html' class="nav-link"><i class="material-icons">home</i> <p class="icon-names">Home</p> </a></li>
                        <li class="nav-item"><a href='../Categories/categories.html' class="nav-link"><i class="material-icons">dashboard</i> <p class="icon-names">Categories</p> </a></li>
                        <li class="nav-item"><a href='' class="nav-link"><i class="material-icons">chat</i> <p class="icon-names">Chats</p></a></li>
                        <li class="nav-item"><a href='' class="nav-link"><i class="material-icons">info</i> <p class="icon-names">About</p></a></li>

                        <li class="nav-item">
                                <!-- <img src="../images/postimages/userimg2.png" class="userimagenav">  -->
                                <a href='' class="nav-link"><i class="material-icons">face</i> <p class="icon-names">User</p></a>
                        </li>
                    </ul>

                    <div class="container posts">
                        <div class="beforeimg">
                            <img src="../images/postimages/userimg2.png" class="userimage"> 
                            <h1>Hot Buns!</h1>
                            <small class="timestamp">01/07/2019</small>
                            <h4 class="posttitle">This is a post with only text</h4>
                        </div>
                        <p class="posttext"> This paragraph is a random paragraph containing text that is meant to mimic what would be a user posting what is on their mind </p>
                    </div>

            <div class="container posts">
                <div class="beforeimg">
                    <img src="../images/postimages/userimg.png" class="userimage"> 
                    <h1 class="container-fluid">Cold Turkey</h1>
                    <small class="timestamp container-fluid">01/07/2019</small>
                    <p class="posttitle">This happened only JUST NOW!! Can you believe young people these days??</p>
                </div>
                <img src="../images/postimages/post.jpg" alt="userpostname" class="postimage">

                <div class="container-fluid">

                </div>
            </div>

            <div class="container posts">
                <div class="beforeimg">
                    <img src="../images/postimages/userimg2.png" class="userimage"> 
                    <h1>Hello Kitty!</h1>
                    <small class="timestamp">01/07/2019</small>
                    <p class="posttitle">This happened only JUST NOW!! Can you believe young people these days??</p>
                </div>
                <img src="../images/postimages/post2.jpg" alt="userpostname" class="postimage">
            </div>

            <div class="container posts">
                <div class="beforeimg">
                    <img src="../images/postimages/userimg.png" class="userimage"> 
                    <h1>Am i Okay?</h1>
                    <small class="timestamp">01/07/2019</small>
                    <h4 class="posttitle">This is a post with only text</h4>
                </div>
                <p class="posttext"> This paragraph is a random paragraph containing text that is meant to mimic what would be a user posting what is on their mind </p>
            </div>
    
</body>
</html>