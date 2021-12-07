<?php
include_once 'db_connect.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $event = $_POST['event'];
     $place = $_POST['place'];
     $start = date('Y-m-d', strtotime($_POST['date1']));
     $finish = date('Y-m-d', strtotime($_POST['date2']));

     $sql = "INSERT INTO booking (name,event_name,place,e_start,e_finish) VALUES ('$name','$event','$place','$start','$finish')";
     if (mysqli_query($connect, $sql)) {
        echo "Booking Successfull !!" ;
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($connect);
     }
     mysqli_close($connect);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1;url=view.php" />
    <title>Event Booked</title>
</head>
<body>
    <h1>Redirecting in 3 seconds...</h1>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>