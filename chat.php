<?php
     session_start();
    if(!(isset($_SESSION['NAME'])))
    {   
               echo"<script>
                    location.href='index.php';
                </script>";
        echo"hii";
    }
    else
    {
        echo $_SESSION['NAME'];
    }
?>
<html>
<head>
<title>Chat Application</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="chart.js"></script>
<link  rel="stylesheet" href="chat.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<!------ Include the above in your HEAD tag ---------->
<body>
<?php
    
      $name=$_SESSION['NAME'];
      $con=mysqli_connect("localhost","root","","chat_application");
        if(!$con)
          {
           echo"database is not connected";
            }
     $query="select `receiver_username` from `chat` where `sender_username`='$name' limit 1;";
     $result=mysqli_query($con,$query);
     if(mysqli_num_rows($result)==1)
     {
         $row=mysqli_fetch_array($result);
          $receiver=$row['receiver_username'];
     }
    
    ?>
<a href="logout.php" style="margin-left:1000px;">logout</a>
<div class="container">
    <div class="row chat-window col-xs-5 col-md-3" id="chat_window_1" style="margin-left:10px;">
        <div class="col-xs-12 col-md-12">
        	<div class="panel panel-default">
                <div class="panel-heading top-bar">
                    <div class="col-md-8 col-xs-8">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat - <?php echo $receiver?></h3>
                    </div>
                    <div class="col-md-4 col-xs-4" style="text-align: right;">
                        <a href="#"><span id="minim_chat_window" class="glyphicon glyphicon-minus icon_minim"></span></a>
                        <a href="#"><span class="glyphicon glyphicon-remove icon_close" data-id="chat_window_1"></span></a>
                    </div>
                </div>
                <div class="panel-body msg_container_base">
                    <?php
                    $name=$_SESSION['NAME'];
                     $con=mysqli_connect("localhost","root","","chat_application");
                      if(!$con)
                       {
                          echo"database is not connected";
                        }
                    $query="select *from `chat` where `sender_username`='$name';";
                    $result=mysqli_query($con,$query);
                     if(mysqli_num_rows($result)>0)
                     {
                         while($row=mysqli_fetch_array($result))
                         {
                             ?>
                      
                    <div class="row msg_container base_sent">
                        <div class="col-md-10 col-xs-10">
                            
                        
                             
                              <div class="messages msg_sent">
                            
                                <!--<p>that mongodb thing looks good, huh?
                                tiny master db, and huge document store</p>
                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>--> 
                                <?php
                                echo"<p>$row[1]</p>";
                                echo"<time>$row[3]</time>";
                                ?>
                            </div>
                        </div>
                       
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                        </div>
                    </div>
                     <?php
                        }
                        }
                        ?>
                         <?php
                    $name=$_SESSION['NAME'];
                     $con=mysqli_connect("localhost","root","","chat_application");
                      if(!$con)
                       {
                          echo"database is not connected";
                       }
                 $query="select *from `chat` where `sender_username`='$receiver';";
                    $result=mysqli_query($con,$query);
                     if(mysqli_num_rows($result)>0)
                     {
                         while($row=mysqli_fetch_array($result))
                         {
                             ?>
                    
                    <div class="row msg_container base_receive">
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                        </div>
                        <div class="col-md-10 col-xs-10">
                            <div class="messages msg_receive">
                                <?php
                                echo"<p>$row[1]</p>";
                                echo"<time>$row[3]</time>";
                                ?>
                            </div>
                        </div>
                    </div>
                      <?php
                        }
                        }
                        ?>
                   <!-- <div class="row msg_container base_receive">
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                        </div>
                        <div class="col-xs-10 col-md-10">
                            <div class="messages msg_receive">
                                <p>that mongodb thing looks good, huh?
                                tiny master db, and huge document store</p>
                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                            </div>
                        </div>
                    </div>-->
                   <!--<div class="row msg_container base_sent">
                        <div class="col-xs-10 col-md-10">
                            <div class="messages msg_sent">
                                <p>that mongodb thing looks good, huh?
                                tiny master db, and huge document store</p>
                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                        </div>
                    </div>--
                    <div class="row msg_container base_receive">
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                        </div>
                        <div class="col-xs-10 col-md-10">
                            <div class="messages msg_receive">
                                <p>that mongodb thing looks good, huh?
                                tiny master db, and huge document store</p>
                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                            </div>
                        </div>
                    </div>
                    <div class="row msg_container base_sent">
                        <div class="col-md-10 col-xs-10 ">
                            <div class="messages msg_sent">
                                <p>that mongodb thing looks good, huh?
                                tiny master db, and huge document store</p>
                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                        </div>
                    </div>
                </div>-->
                <div class="panel-footer">
                   <form  action="insertmessage.php" method="post" id="sendform">
                    <div class="input-group">
                        <input id="message" type="text" name="message" class="form-control input-sm chat_input" placeholder="Write your message here..." />
                        <span class="input-group-btn">
                        <!--<button class="btn btn-primary btn-sm" id="btn-chat">Send</button>-->
                        <input type="submit" name="sub" value="send" class="btn btn-primary btn-sm">
                        </span>
                    </div>
                    </form>
                </div>
    		</div>
        </div>
        </div>

    </body>
   </html>