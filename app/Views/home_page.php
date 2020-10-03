<?php
 
?>
<html>
    <head>
        <title>
            this is a title 
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.6.55/css/materialdesignicons.min.css">

        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
        <script src="public/js/main.js"></script>
         <link rel="stylesheet" href="public/css/main.css" >

    </head>
    <body>
         
        <div class="header-block container-fluid">
            <div class="header-title">
                <h1 class="text-center"><?php  echo $lang['greeting']; ?><span class="name"> <?php  echo $lang['name']; ?></span></h1>
                <h1><?php  echo $lang['job_title']; ?></h1>
                <div class="text-center">
                    <h1 class="btn btn-transform"><?php  echo $lang['view_my_work']; ?></h1>
                </div> 
            </div>
            
        </div> 
        <div class="container-fluid nav-section">
            <nav class="flex nav-bar">
                <div><?php echo $lang['home']; ?></div>
                <div><?php echo $lang['about']; ?></div>
                <div><?php echo $lang['portfolio']; ?></div>
                <div><?php echo $lang['blog']; ?></div>
                <div><?php echo $lang['contact']; ?></div>
            </nav>
        </div>
        <div class="container">
            
            <div class="about-section ">
                <div class="title flex jusstify-center">
                    <p><h1><?php echo $lang['about']; ?></h1></p> 
                    <p><h6><?php echo $lang['about_me']; ?></h6></p> 
                </div>
              
                <div class="row">
                    <div class="col-md-4 block">
                        <div class="title-image">
                            <img  class="block-img" src="public/image/laptop.png" alt="labtop">
                        </div>
                        <div class="content">
                            <div class="content-title"> 
                                <h3><?php echo $lang['front_end_developer']; ?></h3>
                            </div>
                            <div class="content-text"> 
                                <h6><?php echo $lang['front_end_description']?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 block">
                        <div class="title-image">
                            <img  class="block-img" src="public/image/printer.png" alt="labtop">
                        </div>
                        <div class="content">
                            <div class="content-title"> 
                                <h3><?php echo $lang['back_end_developer']; ?></h3>
                            </div>
                            <div class="content-text"> 
                                <h6><?php echo $lang['back_end_description']?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 block">
                        <div class="title-image">
                            <img  class="block-img" src="public/image/webinar.png" alt="labtop">
                        </div>
                        <div class="content">
                            <div class="content-title"> 
                                <h3><?php echo $lang['team_player']; ?></h3>
                            </div>
                            <div class="content-text"> 
                                <h6><?php echo $lang['team_player_description']?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
    </body>
</html>