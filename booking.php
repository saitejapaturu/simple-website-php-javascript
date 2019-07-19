<?php
    session_start();

    $errorID = "";
    if($_POST != null) {
        /* Server-side validation */
        if (!preg_match("/^[a-zA-Z' -.]{1,}$/", $_POST[fname])) {
            $errorID = "fname";
        } else if (!preg_match("/^(\(04\)|04|\+61)[ ]?\d{4}[ ]?\d{4}$/", $_POST[phone])){
            $errorID = "phone";
        } else if (!filter_var((String)$_POST[email], FILTER_VALIDATE_EMAIL)) {
            $errorID = "email";
        } else if (!preg_match("/^[A-Za-z0-9 '-\/]+/", $_POST[address])) {
            $errorID = "address";
        } else {
            $write = "\n".$_SESSION[fname]."\t".$_SESSION[email]."\t".$_SESSION[phone]."\t".$_SESSION[aid]."\t".$_SESSION[date]."\t".$_SESSION[days]."\t".$_SESSION[adults]."\t".$_SESSION[children]."\t".$_SESSION[Total_Price];
            file_put_contents('bookings.txt', $write, FILE_APPEND | LOCK_EX);
            echo "<script>window.location.href = 'receipt.php';</script>";
        }
    }

    /* print error message under correct field */
    function errorMessage($ID, $errorID) {
        if ($errorID == $ID) {
            echo "<p class='contact-error'>*Illegal characters detected</p>";
        }
    }

    $title = "Booking";
    $page = "accommodation";
    include('header.php');
?>
    <div class="booking-info">
        <h1 class="heading">Booking Information:</h1>;
        <label class="booking-label">Accomodation type:</label>
        <?php echo "<span class='booking-description'>$_SESSION[aid]</span>"?>

        </br>

        <label class="booking-label">Arrival Date:</label>
        <?php echo "<span class='booking-description'>$_SESSION[date]</span>"?>

        </br>

        <label class="booking-label">Number of days:</label>
        <?php echo "<span class='booking-description'>$_SESSION[days]</span>"?>

        </br>

        <label class="booking-label">Number of adults:</label>
        <?php echo "<span class='booking-description'>$_SESSION[adults]</span>"?>

        </br>

        <label class="booking-label">Number of children:</label>
        <?php echo "<span class='booking-description'>$_SESSION[children]</span>"?>

        </br>

        <label class="booking-label">Total price:</label>
        <?php echo "<span class='booking-description'>$$_SESSION[Total_Price]</span>"?>

        </br>

        <label class="booking-label">Includes GST:</label>
        <?php echo "<span class='booking-description'>$$_SESSION[GST_Price]</span>"?>

        </br></br></br><hr></br>

        <h1 class="heading">Contact Information:</h1>

        <form action="booking.php" method="POST">
            <div class="contact-section">   
            <label class="contact-label">Name:</label>
                    <input class="contact-input" required="true" type="text" name="fname" id="fname" placeholder="e.g. John Smith" pattern="^[A-Za-z '-\.]+$">
                    <?php errorMessage("fname", $errorID); ?>
            </div>
            <br>
            <div class="contact-section">
                <label class="contact-label">Phone:</label>
                    <input class="contact-input" required="true" type="tel" name="phone" id="phone" placeholder="04 XXXX XXXX" pattern="^(\(04\)|04|\+61)[ ]?\d{4}[ ]?\d{4}$">
                    <?php errorMessage("phone", $errorID); ?>
            </div>
            <br>

            <div class="contact-section">
                <label class="contact-label">Email:</label>
                    <input class="contact-input" required="true" type="email" name="email" id="email" placeholder="account@domain.com">
                    <?php errorMessage("email", $errorID); ?>
            </div>
            <br>

            <div class="contact-section">
                <label class="contact-label">Address:</label>
                    <input class="contact-input" required="true" type="text" name="address" id="address" placeholder="e.g. 123 Rmit Rd, Melbourne" pattern="^[A-Za-z0-9 '-\/]+">
                    <?php errorMessage("address", $errorID); ?>
            </div>
            <br><br><br>

            <div class="contact-submit">
                <button type="submit" class="submit">Confirm</button>
            </div>
        </form>
       
        <div class="contact-submit">
            <button onclick="cancelBooking();" class="submit">Cancel</button>
        </div>
    </div>

    <script>
        if (localStorage.getItem("remember") == "yes") { // any item could have been used for the check here
            fname.value = localStorage.getItem("fname");
            phone.value = localStorage.getItem("phone");
            email.value = localStorage.getItem("email");
            address.value = localStorage.getItem("address");
        }

        function cancelBooking() {
            window.location.replace('accommodation.php');
            return false;
        }
    </script>

<?php
    include('footer.php');
?>