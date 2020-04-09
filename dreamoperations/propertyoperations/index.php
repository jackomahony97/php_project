<?php

include "../../dreamsetup.php";

$page = "Property For Rent Queries";
$css = "../../";

html_begin ($css, $page);

$conn_id = dream_connect ()
or die ("Cannot connect to server");
# fetch and record branch identifiers and location details

$query = "select distinct Type from property_for_rent where Type is not null order by Type";

$prefquery = mysqli_query ($conn_id, $query)
or die ("Cannot find property identifiers");

$i = 0;
while ($row = mysqli_fetch_row ($prefquery))
{
    $preflist[$i] = $row[0];
    $i++;
}

mysqli_free_result ($prefquery);

?>

<section id="boxes">
    <div class = "container">
        <div class="box">
            <h3>Property For Rent Information</h3>
            <form name="property" method="GET" action="property.php">
                <input class="button_1" type="submit" name="SubmitVal" value="Select">
            </form>
            <br>
        </div>
        <div class="box">
            <h3>Property For Rent Number Search</h3>
            <form name="propertySearch" method="GET" action="propertybynumber.php">
                Property Number: <input type="text" name="number"><br>

                <input class="button_1" type="submit" name="SubmitVal" value="Select">
            </form>
        </div>
        <div class="box">
            <h3>Property For Rent City Search</h3>
            <form name="propertyAreaSearch" method="GET" action="propertybyarea.php">
                Property Name: <input type="text" name="area"><br>

                <input class="button_1" type="submit" name="SubmitVal" value="Select">
            </form>
        </div>
        <div class="box">
            <h3>Property For Rent By Type</h3>
            <form name="propertyTypeSearch" method="GET" action="propertybytype.php">
                Type:
                <select name="pref">
                    <?php
                    foreach($preflist as $pid)
                    {
                        print ("<option value=\"$pid\"> $pid </option\n>");
                    }
                    ?>
                </select>
                <br>
                <input class="button_1" type="submit" name="SubmitVal" value="Select">
            </form>
        </div>
    </div>
</section>

<?php

html_end('../propertyoperations.php');

?>