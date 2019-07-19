<?php session_start(); ?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="Author" content="Sri Sai Teja Paturu">
        <link rel="stylesheet" type="text/css" media="screen" href="Style_sheet.css" />
        
        <title>Receipt</title>

    </head>

    <body>
        <main>
            <div class="receipt-div">
                <h1 class="receipt-heading">Receipt</h1>
                <h2 class="receipt-subheading">Customer Information:</h2>
                <label class="receipt-label">Name:</label>
                <?php echo "<span class='receipt-span'>$_SESSION[fname]</span>" ?>
                </br>
                <label class="receipt-label">Phone:</label>
                <?php echo "<span class='receipt-span'>$_SESSION[phone]</span>" ?>
                </br>
                <label class="receipt-label">Email:</label>
                <?php echo "<span class='receipt-span'>$_SESSION[email]</span>" ?>
                </br>
                <label class="receipt-label">Address:</label>
                <?php echo "<span class='receipt-span'>$_SESSION[address]</span>" ?>
                </br></br>
                
                <h2 class="receipt-subheading">Booking Information:</h2>
                <label class="receipt-label">Accomodation Type:</label>
                <?php echo "<span class='receipt-span'>$_SESSION[aid]</span>" ?>
                </br>
                <label class="receipt-label">Arrival Date:</label>
                <?php echo "<span class='receipt-span'>$_SESSION[date]</span>" ?>
                </br>
                <label class="receipt-label">Number of Days:</label>
                <?php echo "<span class='receipt-span'>$_SESSION[days]</span>" ?>
                </br>
                <label class="receipt-label">Number of Adults:</label>
                <?php echo "<span class='receipt-span'>$_SESSION[adults]</span>" ?>
                </br>
                <label class="receipt-label">Number of Children:</label>
                <?php echo "<span class='receipt-span'>$_SESSION[children]</span>" ?>
                </br><hr>
                <label class="receipt-label">Total Price:</label>
                <?php echo "<span class='receipt-span'>$$_SESSION[Total_Price]</span>" ?>
                </br>
                <label class="receipt-label">GST Price:</label>
                <?php echo "<span class='receipt-span'>$$_SESSION[GST_Price]</span>" ?>
                </br></br></br>

                <h2 class="receipt-subheading">Contact Information:</h2>
                <label class="receipt-label">Portarlington Camping</label>
                </br>
                <label class="receipt-label">Phone:</label>
                <span class='receipt-span'>03 1234 5678</span>
                </br>
                <label class="receipt-label">Address:</label>
                <span class='receipt-span'>Portarling, VIC, Australia</span>
                </br>
                <label class="receipt-label">Email:</label>
                <span class='receipt-span'>portarlington@camping.com</span>
                </br></br></br>
            </div>
        </main>
    </body>