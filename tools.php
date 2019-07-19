</br>
<!-- Debug info -->
<aside id='debug'>
    <details open>
        <summary>=Debug Show/Hide</summary>
        <?php
        foreach ($_POST as $key => $value) 
        {
            ${$key} = $value;
            $_SESSION[$key] = $value;
        }
        ?>
        <pre>
            $_SESSION contains:
​               <?php print_r($_SESSION); ?>
            $_POST contains:
​               <?php print_r($_POST); ?> </pre>
    </details>
</aside>

<script>

// Chnages aid value
function changeAID(AID)
{   
    let currentClass = document.getElementById(AID).getAttribute("class");
    let currentFormAidValue = document.getElementById("form-aid").value;

    if(currentClass=="site-button-unselected" && currentFormAidValue=="")
    {
        document.getElementById(AID).setAttribute("class", "site-button-selected");

        document.getElementById("form-aid").value=AID;
    }

    else
    {
        if(currentClass=="site-button-selected" && currentFormAidValue==AID)
        {
            document.getElementById(AID).setAttribute("class", "site-button-unselected");

            document.getElementById("form-aid").value="";
        }

        else if(currentClass=="site-button-unselected" && currentFormAidValue!=AID)
        {
            document.getElementById(document.getElementById("form-aid").value).setAttribute("class", "site-button-unselected");

            document.getElementById(AID).setAttribute("class", "site-button-selected");

            document.getElementById("form-aid").value=AID;

        }
    }

calculatePrice();
}

// Caculates total price and gst
function calculatePrice()
{
    let noOfDays = Number(document.getElementById("form-days").value);
    let noOfAdults = Number(document.getElementById("form-adults").value);
    let noOfChildren = Number(document.getElementById("form-children").value);  
    let currentFormAidValue = document.getElementById("form-aid").value;

    let pricePerNight;

    if (currentFormAidValue == "US")
    { 
        pricePerNight = 35.25;
    }
    else if (currentFormAidValue == "PS")
    { 
        pricePerNight = 50.25;
    }
    else if (currentFormAidValue == "UM")
    { 
        pricePerNight = 40.50;
    }
    else if (currentFormAidValue == "PM")
    { 
        pricePerNight = 60.50;
    }
    else if (currentFormAidValue == "C")
    { 
        pricePerNight = 100.00;
    }

    let totalPrice;
    let gstPrice;

    //If null, doesn't calculate price  
    // The default value(if no option ois selected) for no of children is 99.
    if( (noOfDays=='') || (noOfAdults=='') || (noOfChildren==99) || (currentFormAidValue=="") )
    {

    }

    //If null, doesn't calculate the price
    else if (currentFormAidValue == "")
    {

    }

    else if((currentFormAidValue == "C") || ((noOfAdults+noOfChildren)<3))
    {
        totalPrice = (pricePerNight * noOfDays);
        gstPrice = totalPrice/10;
        //Prints the Prices
        document.getElementById("total-price").innerHTML = String(totalPrice.toFixed(2));
        document.getElementById("gst-price").innerHTML = String(gstPrice.toFixed(2));
        
        //Stores the price in $_POST array
        document.getElementById("Total_Price").value=String(totalPrice.toFixed(2));
        document.getElementById("GST_Price").value=String(gstPrice.toFixed(2));
    } 

    else if (noOfAdults==1)
    {
        totalPrice = (pricePerNight * noOfDays) + ((noOfAdults-1) * 10) + ((noOfChildren-1) * 5);
        gstPrice = totalPrice/10;
        //Prints the Prices
        document.getElementById("total-price").innerHTML = String(totalPrice.toFixed(2));
        document.getElementById("gst-price").innerHTML = String(gstPrice.toFixed(2));
        
        //Stores the price in $_POST array
        document.getElementById("Total_Price").value=String(totalPrice.toFixed(2));
        document.getElementById("GST_Price").value=String(gstPrice.toFixed(2));
    }

    else
    {
        totalPrice = (pricePerNight * noOfDays) + ((noOfAdults-2) * 10) + ((noOfChildren) * 5);
        gstPrice = totalPrice/10;
        //Prints the Prices
        document.getElementById("total-price").innerHTML = String(totalPrice.toFixed(2));
        document.getElementById("gst-price").innerHTML = String(gstPrice.toFixed(2));
        
        //Stores the price in $_POST array
        document.getElementById("Total_Price").value=String(totalPrice.toFixed(2));
        document.getElementById("GST_Price").value=String(gstPrice.toFixed(2));
        
        
    }

    
}
</script>