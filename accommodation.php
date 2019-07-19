<?php
     session_start();
     
     /* Server-side validation */
     if($_POST != null) 
     {

     /* Server-side Price-validation */
            $totalPrice;

            if ($_POST['aid'] == "US")
        { 
            $pricePerNight = 35.25;
        }
        else if ($_POST['aid'] == "PS")
        { 
            $pricePerNight = 50.25;
        }
        else if ($_POST['aid'] == "UM")
        { 
            $pricePerNight = 40.50;
        }
        else if ($_POST['aid'] == "PM")
        { 
            $pricePerNight = 60.50;
        }
        else if ($_POST['aid'] == "C")
        { 
            $pricePerNight = 100.00;
        }

        
        if(($_POST['aid'] == "C") || (($_POST['adults']+$_POST['children'])<3))
        {
            $totalPrice = ($pricePerNight * $_POST['days']);
        } 

        else if ($_POST['adults']==1)
        {
            $totalPrice = ($pricePerNight * $_POST['days']) + (($_POST['adults']-1) * 10) + (($_POST['children']-1) * 5);
        }

        else
        {
            $totalPrice = ($pricePerNight * $_POST['days']) + (($_POST['adults']-2) * 10) + (($_POST['children']) * 5);
        }

       
        // Checking for number of people
        if (($_POST[adults]+($_POST[children])) > 10) 
        {
            $errorID = "morePeople";
        }
        
        // checking for nulls
        else if (($_POST[adults]==null) || ($_POST[children]==null) || ($_POST[days]==null) || ($_POST[date]==null) || ($_POST[aid]==null)){
            $errorID = "nullError";
        
        } 
        // Checking for alphabets 
        else if (!preg_match("/^[0-9]*$/", $_POST[adults]) || !preg_match("/^[0-9]*$/", $_POST[children]) || !preg_match("/^[0-9]*$/", $_POST[days])) {
            $errorID = "notNumbers";
        } 
        //Re calculating price and comparing
        else if ($_POST[Total_Price]!= $totalPrice) {
                $errorID = "priceChangeError";
            }
        
        else 
        {
            /* If successful, redirect to booking.php */
            echo "<script>window.location.href = 'booking.php';</script>";
        }

        // Function to Print appropriate error
     function errorMessage($errorID) 
     {
         if ($errorID == "morePeople") 
         {
             echo "!!!Error :- There can't be more than 10 people!";
         }
         else if ($errorID == "nullError") 
         {
             echo "!!!Error :- Please Enter All the Values!";
         }
         else if ($errorID == "notNumbers") 
         {
             echo "!!!Error :- Donot change the values!";
         }
         else if ($errorID == "priceChangeError") 
         {
             echo "!!!Error :- Price cannot be changed!";
         }
     } 

    }

    $title = "Accomodation";
    $page = "accommodation";
    include('header.php');
?>
        <br><br>
        <div class="All-Accommodation-boxes">
        <button class="site-button-unselected" id="US" onclick="changeAID(this.id)";>
        <div class="Accomodation-box">
            <h1 class="heading">Small Unpowered Site</h1>
            
             <!-- Original image below sourced for educational purposes:https://alpine-pacific.co.nz/accommodation/site-images-campervans-caravans-tents-kaikoura-holiday-park/ -->
             <img src='../media/SU.jpg' alt='Image of a small unpowered site.' class="image"/>
            
            <p class="site-description">
                By choosing this site, you will be guaranteed to get a natural camping experience surrounded by  tress and fresh air. 
                This is an ideal space a small-medium sized tent for a group of 1-3 people and for your first camping experience.
                <br>
                <br>
                <br>
                For more information : <a href="contact.php" class="contact-us"> Contact Us</a>.
                
            </p>
            
            
            <p>
                Price per Night : $ 35.25<br>
                Price per Extra Adult : $ 10.00<br>
                Price per Extra Child : $ 5.00<br>
            </p>
        </div>
        </button>

        <button class="site-button-unselected" id="PS" onclick="changeAID(this.id)">
        <div class="Accomodation-box">
            <h1 class="heading">Small Powered Site</h1>
            
             <!-- Original image below sourced for educational purposes: http://www.wideopenspaces.com/10-cool-tents-slideshow/-> -->
             <img src='../media/SP.jpg' alt='Image of a small powered site.' class="image"/>
            
            <p class="site-description">
                This site comes equipped with power facilities and are perfect for tents which require power, a mini motor house or a small camper vans.
                This is an ideal space for  a group of 1-3 people who wants to add a modern touch to their 
                natural experience.
                <br>
                <br>
                <br>               
                For more information : <a href="contact.php" class="contact-us"> Contact Us</a>.
                 <br>
                 <br>
                Price per Night : $ 40.50<br>
                Price per Extra Adult : $ 10.00<br>
                Price per Extra Child : $ 5.00<br>
            </p>
        </div>
        </button>

        <button class="site-button-unselected" id="UM" onclick="changeAID(this.id)">
        <div class="Accomodation-box">
            <h1  class="heading">Medium Unpowered Site</h1>
            
             <!-- Original image below sourced for educational purposes: https://www.petscancometoo.co.nz/blog/744999-> -->
             <img src='../media/MU.png' alt='Image of a medium unpowered site.' class="image"/>
            
            <p class="site-description">
                
                This site is perfect for large tents and ideal for people who want a natural
                camping experience. This is an ideal space for  a group of 4-6 people.
                <br>
                <br>
                <br>
                <br>
                For more information : <a href="contact.php" class="contact-us"> Contact Us</a>.
         
                <br>
                <br>
                Price per Night : $ 50.25<br>
                Price per Extra Adult : $ 10.00<br>
                Price per Extra Child : $ 5.00<br>
            </p>
        </div>
        </button>

        <button class="site-button-unselected" id="PM" onclick="changeAID(this.id)">
        <div class="Accomodation-box">
            <h1 class="heading">Medium Powered Site</h1>
            
             <!-- Original image below sourced for educational purposes: http://www.waitangiholidaypark.co.nz/-> -->
             <img src='../media/MP.jpg' alt='Image of a medium powered site.' class="image"/>
           
            <p class="site-description">
                This site comes equipped with power facilities and are perfect for large-tents which require power, motor homes or campervans.
                This is ideal space for  a group of 4-6 people who wants to add a modern touch to their natural experience.
                <br>
                <br>
                <br>
                For more information : <a href="contact.php" class="contact-us"> Contact Us</a>.
                 
            <br>
            <br>
                Price per Night : $ 60.50<br>
                Price per Extra Adult : $ 10.00<br>
                Price per Extra Child : $ 5.00<br>
            </p>
        </div>
        </button>

        <button class="site-button-unselected" id="C" onclick="changeAID(this.id)">
        <div class="Accomodation-box">
            <h1 class="heading">Caravan Site</h1>
            
             <!-- Original image below sourced for educational purposes: https://www.pitchup.com/campsites/Scotland/Scotland/Perthshire/Aberfeldy/aberfeldy-caravan-park/-> -->
             <img src='../media/CS.jpg' alt='Image of a caravan site.' class="image"/>
           
            <p class="site-description">
                This Caravan site is recommended for groups of more than 6 people. This comes equipped with power
                and all necessary facilities. It is suitable for caravans and camper trailors.
                <br>
                <br>
                <br>
                For more information : <a href="contact.php" class="contact-us"> Contact Us</a>.
                <br>
                <br>
                <br>
                Price per Night : $ 100.00<br>
                Price per Extra Adult : Free<br>
                Price per Extra Child : Free<br>
            </p>
        </div>
        </button>

        <div class="Accomodation-form-box">
        <h1 class="heading">Ready to book?</h1>
            <!-- <button class="site-images"> -->
             <!-- Original image below sourced for educational purposes: Created using Photoshop -->
             <img src='../media/BN.jpeg' alt='Fill the form and Book now.' class="form-image"/>
            <!-- </button> -->
            
            <form action="accommodation.php" method="POST"  class="site-description">
                
            <p>
                <input type="hidden" id="form-aid" name="aid" value="" onchange="calculatePrice()" required>
            </p>
            <p class="Accomodation-left">
                Arrival Date : 
                <input type="date" name="date" value="" required>
            </p>
            
            <p class="Accomodation-left">
                Number of Days :
                <select name='days' id="form-days" required onchange="calculatePrice()">
                    <option value='' disabled selected>Please Select</option>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                    <option value='6'>6</option>
                    <option value='7'>7</option>
                    <option value='8'>8</option>
                    <option value='9'>9</option>
                    <option value='10'>10</option>
                    <option value='11'>11</option>
                    <option value='12'>12</option>
                    <option value='13'>13</option>
                    <option value='14'>14</option>
                </select>
            </p>

            <p class="Accomodation-left">
                Number of Adults :
                <select name='adults' id="form-adults" required onchange="calculatePrice()">
                    <option value='' disabled selected>Please Select</option>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                    <option value='6'>6</option>
                    <option value='7'>7</option>
                    <option value='8'>8</option>
                    <option value='9'>9</option>
                    <option value='10'>10</option>
                </select>
            </p>

            <p class="Accomodation-left">
                Number of Children :
                <select name='children' id="form-children" required onchange="calculatePrice()">
                    <option value='99' disabled selected>Please Select</option>
                    <option value='0'>0</option>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                    <option value='6'>6</option>
                    <option value='7'>7</option>
                    <option value='8'>8</option>
                    <option value='9'>9</option>
                    <option value='10'>10</option>
                </select>
            </p>

            <!-- JavaScript prints price -->    
            <p class="Accomodation-left">
               Total        :      $    <span id="total-price"></span>
            </p>
            <input type="hidden" id="Total_Price" name="Total_Price" value="" required>

            <!-- JavaScript prints price -->
            <p class="Accomodation-left">
               Includes GST :      $    <span id="gst-price"></span>
            </p>
            <input type="hidden" id="GST_Price" name="GST_Price" value="" required>
            <p class="Accomodation-left">
                <!-- Error Printed -->
                <span id="serverSideError" color="red"><?php if($_POST != null) {errorMessage($errorID);} ?></span>
            </p>
            <br>
            <button type="submit" class="submit"><strong>Book now</strong></button>
            <br><br>
            </form>
        </div>
    </div>

<?php include('footer.php'); ?>