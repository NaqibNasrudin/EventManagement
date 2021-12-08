<?php
//Muhammad Naqib bin Nasrudin 1912549
  include("db_connect.php");

  $sql = "SELECT * FROM booking";
  $query = $connect -> query($sql);
  $row = $query -> fetch_assoc();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <style>
        table, th, td {
        border:1px solid black;
        }
        
    </style>
</head>
<body>
    <h1 style="text-align: center;">Event List</h1>  
    <div class="content">
    <table style="width:100%">
        <tr>
            <th>Customer Name</th>
            <th>Event Name</th>
            <th>Place</th>
            <th>Start Date</th>
            <th>Start Time</th>
            <th>End Date</th>
            <th>End Time</th>
        </tr>
        <?php do { ?>
            <div class="result">
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['event_name'];?></td>
                    <td><?php echo $row['place']; ?></td>
                    <td><?php echo $row['e_start']; ?></td>
                    <td><?php echo $row['t_start']; ?></td>
                    <td><?php echo $row['e_finish']; ?></td>
                    <td><?php echo $row['t_finish']; ?></td>
                </tr>
            </div>
        <?php } while($row = $query -> fetch_assoc()) ?>
    </table>
    </div>
    <br><br>
    <a href="event.php" style="font-size: 20px;">New Booking</a>  
</body>
</html>
