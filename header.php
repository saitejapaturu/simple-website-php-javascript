
<html>
    <meta charset="utf-8" />

    <head>
        <meta charset="utf-8">
        <meta name="Author" content="Sri Sai Teja Paturu">
        <link rel="stylesheet" type="text/css" media="screen" href="Style_sheet.css" />
        
        <title>
            <?php echo $title; ?>
        </title>

    </head>
    <body>
        <header>
            <h2><img src='../media/logo.png' class="logo"/></h2>
        </header> 
                    
        <nav>
            <ul>
                <li >
                    <a 
                        <?php
                                if($page == "index")
                                    {
                                        echo 'class="active"';
                                    }
                        ?>
                        
                        href="index.php">
                            Home 
                    </a>
                </li>
                <li>
                    <a 
                        <?php
                                if($page == "accommodation")
                                    {
                                        echo 'class="active"';
                                    }
                        ?>
                        
                        href="accommodation.php">
                            Accomodation 
                    </a>
                </li>
                <li>
                    <a 
                        <?php
                                if($page == "rates")
                                    {
                                        echo 'class="active"';
                                    }
                        ?>
                        
                        href="rates.php">
                            Rates 
                    </a>
                </li>
                <li>
                    <a 
                        <?php
                                if($page == "contact")
                                    {
                                        echo 'class="active"';
                                    }
                        ?>
                        
                        href="contact.php">
                            Contact 
                    </a>
                </li>
            </ul>
        </nav>
        <br><br>
    </body>
</html>