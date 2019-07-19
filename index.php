<?php
    session_start();
    $title = "Index";
    $page = "index";
    include('header.php');
?>

    <div class="index-section">
        <img class="index-image" src="../media/Index_photo1.jpg">
        <!--source for image (Sourced for educational purposes): http://www.highhermitagecaravanpark.co.uk/camping-ground/-->
        <div class="index-content">
            <h1 class="heading">Who are we?</h1>
            <span class="index-text">
                Welcome to the Portarlington camping grounds, a place where friends and families get together to spend quality time outdoors. 
                Here we provide camping spaces of various sizes, with an optional access to power/electricity. 
                We also accomodate for caravan spaces should the camping spaces not be sufficient.
            </span>
        </div>
    </div>
        <br><hr><br>
      
        <div class="index-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d202860.8130903853!2d144.58782900748457!3d-38.14435548337366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad42e5463d5facb%3A0x5045675218ce1e0!2sPortarlington+VIC+3223!5e0!3m2!1sen!2sau!4v1524796437900" 
        height="400px" class="index-image" frameborder="0" style="border:0" allowfullscreen></iframe>
        
        <div class="index-content">
            <h1 class="heading">How to get to us</h1>
            <span class="index-text">
                Portarlington is rather simple to get to from the Melbournce cbd. Simply make your way to the princes highway and drive until you reach Geelong.
                Then take the exit onto Ryrie st and drive until you reach see our sign on the side of the road! (hard to miss) 
                If you live in the Northern suburbs, head to the cbd to join the highway. 
                If you live in the Eastern or South-Eastern suburbs, join the highway at the entrance closest to you.
            </span>
        </div>
        </div>
        <br><hr><br>
      
        <div class="index-section">
        <img class="index-image" src="../media/Index_photo2.jpg">
        <!--source for image (Sourced for educational purposes): https://www.weekendnotes.com/port-phillip-ferries-community-open-days/-->
        <div class="index-content">
            <h1 class="heading">Enrich your camping experience</h1>
            <span class="index-text">
            To add to the outdoor experience, we recommend you travel via the port phillips ferries, with departures from Vicotrian Harbour (Docklands) 
            and arrivals at portarlington pier. With a travel time of 90 minutes, departure and arrival times are as follows:
            </span>
            <ul>
                <li>Monday, Wednesday, Friday - 7:00 am, 11:30 am</li>
                <li>Tuesday, Thursday - 7:00 am, 3:30 pm</li>
                <li>Weekends and public holidays - 9:00 am, 4:15 pm</li>
            </ul>
        </div>
        </div>
    
<?php include('footer.php'); ?>