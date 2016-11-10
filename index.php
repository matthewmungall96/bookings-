<!DOCTYPE html>
<head>
    <title>My Bookings</title>
    
</head>

<body>
    <h1>My Restaurant</h1>
    
    <h2>Book a Table</h2>
    <!--This is the booking form-->
    <form method="POST" action="book.php">
        <label>Name</label>
        <input type="text" name="namebox">
        <label>Date</label>
        <input type="date" name="datebox">
        <label>Time</label>
        <input type="time" name="timebox">
        <!--This allows us to check which type of form was used-->
        <input type="hidden" value="book" name="book">
        <input type="submit" value="book">
        
        </form>
    
    <h2>Search for Booking</h2>
    <!--This will search for a specific booking--!>
    
    
    
</body>
</html>

<?php

?>