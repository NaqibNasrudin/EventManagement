<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Event</title>
    <link href="event/event.css" rel="stylesheet" type="text/css"/>
</head>

<body>

        <div class="container">
            <h1>Event Booking</h1>
        <nav>
            <a href="homepage.php">Home</a> |   <a href="event.php">Booking</a>   
        </nav>
        </div>
        
        <div id="booking">
            <form class="view" action="booking.php" method="post" name="view">
                <label for="name">Customer Name : </label><br>
                <input type="text" placeholder="Enter Your Name" name="name"><br><br>

                <label for="name">Event Name: </label><br>
                <input type="text" placeholder="Enter Event Name" name="event"><br><br> 

                <label for="name">Event Venue: </label><br>
                <select name="place" id="place">
                <option value="Male Sport Complex (MSC)">Male Sport Complex (MSC)</option>
                 <option value="Female Sport Complex (FSC)">Female Sport Complex (MSC)</option>
                 <option value="ICC">ICC</option>
                 <option value="Wadi Budi">Wadi Budi</option>
            </select><br><br>

                <label for="name">Start Date: </label><br>
                <input type="date" name="date1"><br><br>

                <label for="name">End Date: </label><br>
                <input type="date" name="date2"><br><br>

                <input type="submit" class="submitbtn" name="submit" value="Book Event">
            </form>

        </div>

        <hr class = "footerline">
            <footer>
                <div class = "container1">
                    <div class = "row">
                        <section>
                            <div class = "footerContent col-md-4">
                                <p class = "footerSubtext2">
                                    eventmanagement2021@gmail.com
                                </p>

                                <p class = "footerSubtext2">
                                    012-345 6789
                                </p>
                            </div>
                        </section>
                    </div>
                    <p>&copy;2021 </p>
                </div>
            </footer>
        
</body>
</html>
