<?php
    session_start();

    /* Following code to be run if page was loaded after form submission: */
    $errorID = "";

    if($_POST != null) {
        /* Server-side validation */
        if (!preg_match("/^[A-Za-z '-\.]+$/", $_POST[fname])) {
            $errorID = "fname";
        } else if (!preg_match("/^(\(04\)|04|\+61)[ ]?\d{4}[ ]?\d{4}$/", $_POST[phone])){
            $errorID = "phone";
        } else if (!filter_var((String)$_POST[email], FILTER_VALIDATE_EMAIL)) {
            $errorID = "email";
        } else if (!preg_match("/^[A-Za-z0-9 '-\/]+/", $_POST[address])) {
            $errorID = "address";
        } else {
            /* If successful, redirect to index, and add to mailing.txt if checked */
            if ($_POST[mailing]) {
                $write = "\n".$_POST[fname]."\t".$_POST[phone]."\t".$_POST[email]."\t".$_POST[address]."\t".$_POST[message]."\t".$_POST[rememberme];
                file_put_contents('mailing.txt', $write, FILE_APPEND | LOCK_EX);
            }
            echo "<script>window.location.href = 'index.php';</script>";
        }
    }

    /* print error message under correct field */
    function errorMessage($ID, $errorID) {
        if ($errorID == $ID) {
            echo "<p class='contact-error'>*Illegal characters detected</p>";
        }
    }
    $title = "Contact";
    $page = "contact";
    include('header.php');
?>

           
            <br>
            <h1 class="heading">Contact Us</h1>
            <br>
            <form action="contact.php" method="POST">
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
                <br>

            <div class="contact-section">
                <label class="contact-label">Message:</label>
                    <textarea class="contact-textarea" type="text" placeholder="Type message here"></textarea>
            </div>
            
                <br><br><br><br>

            <div class="contact-section">
                <label class="contact-label">Sign up for updates via email:</label>
                    <input class="contact-sign-up" type="checkbox" name="mailing" id="mailing">
                   
            </div>
            
                <br>

            <div class="contact-section">
                <label class="contact-label">Remember Me:</label>
                    <input class="contact-checkbox" type="checkbox" name="rememberme" id="rememberme" onclick="checkRememberme()">
            </div>
            
                <br>

            <div class="contact-submit">
                <button type="submit" class="submit">Submit</button>
            </div>
            </form>

            
            <script>
                if (localStorage.getItem("remember") == "yes") { // any item could have been used for the check here
                    rememberme.checked = true;
                    fname.value = localStorage.getItem("fname");
                    phone.value = localStorage.getItem("phone");
                    email.value = localStorage.getItem("email");
                    address.value = localStorage.getItem("address");
                }

                function checkRememberme() {
                    if (rememberme.checked) {
                        localStorage.setItem("fname", fname.value); // fname = full name here I guess (had to differentiate it from 'name' property for input fields)
                        localStorage.setItem("phone", phone.value);
                        localStorage.setItem("email", email.value);
                        localStorage.setItem("address", address.value);
                        localStorage.setItem("remember", "yes");
                    } else if (!rememberme.checked) {
                        localStorage.removeItem("fname");
                        localStorage.removeItem("phone");
                        localStorage.removeItem("email");
                        localStorage.removeItem("address");
                        localStorage.removeItem("remember");
                        
                    }
                }
            </script>
            
        
<?php include('footer.php'); ?>

