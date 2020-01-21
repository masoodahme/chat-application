 <?php
    session_start();
extract($_POST);
/*if(isset($_POST['readrecords']))
{
     $send_userna=$_SESSION['NAME'];
     $con=mysqli_connect("localhost","root","","chat_application");
        if(!$con)
        {
            echo"database is not connected";
        }
    $displayquery = " SELECT * FROM `chat` where `sender_username`='$send_userna' "; 
	$result = mysqli_query($conn,$displayquery);

	if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_array($result)) {
            echo $row['message'];
        }
        
    }
}*/
    if(isset($_POST['sub']))
    {
        $send_userna=$_SESSION['NAME'];
       // echo $send_userna;
       
        ///$message=$_POST['message'];
        // echo $message;
        date_default_timezone_set("Asia/Kolkata");
        $time=date('h:i',time());
        // echo $time;
        $reciver="gayazu";
       // echo $reciver;
        $con=mysqli_connect("localhost","root","","chat_application");
        if(!$con)
        {
            echo"database is not connected";
        }
        if(isset($_POST['message']))
        {
        $query="insert into `chat` values('$send_userna','$message','$reciver','$time','');";
        	mysqli_query($con,$query);
            header("location:chat.php");
       
        }
       // echo"could not insert data:". mysqli_error($con);
       
    }
    ?>