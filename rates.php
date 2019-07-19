<?php
    session_start();
    $title = "Rates";
    $page = "rates";
    include('header.php');
?>

<table cellspacing="1" cellpadding="20">
    <br><br>    
    <caption>Rates</caption>

<thead>
    <tr>
        <th>Type</th>
        <!-- <th>AID</th> -->
        <th>Per night</th>
        <th>Extra adult</th>
        <th>Extra child</th>
    </tr>
</thead>

<tbody>
    <tr>
        <td>Unpowered Small Camping Sites</th>
        <!-- <td>US</td> -->
        <td>$35.25</td>
        <td>$10.00</td>
        <td>$5.00</td>
    </tr>
    <tr>
        <td>Unpowered Medium Camping Sites</th>
        <!-- <td>UM</td> -->
        <td>$40.50</td>
        <td>$10.00</td>
        <td>$5.00</td>
    </tr>
    <tr>
        <td>Powered Small Camping Sites</th>
        <!-- <td>PS</td> -->
        <td>$50.25</td>
        <td>$10.00</td>
        <td>$5.00</td>
    </tr>
    <tr>
        <td>Powered Medium Camping Sites</th>
        <!-- <td>PM</td> -->
        <td>$60.50</td>
        <td>$10.00</td>
        <td>$5.00</td>
    </tr>
    <tr>
        <td>Caravan Sites</th>
        <!-- <td>C</td> -->
        <td>$100.00</td>
        <td>Free</td>
        <td>Free</td>
    </tr>
</tbody>
</table>

<br>
<h3>Additional Information :</h3>
<p>The per night rate includes 2 adults or 1 adult + 1 child.</p>
<p>All prices include GST.</p>

<?php include('footer.php'); ?>