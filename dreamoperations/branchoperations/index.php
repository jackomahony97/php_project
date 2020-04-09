<?php
include "../../dreamsetup.php";

$page = "Branch Queries";
$css = "../../";

html_begin ($css, $page);

$conn_id = dream_connect ()
or die ("Cannot connect to server");

$query1 = "select distinct Bno from branch order by Bno";
$query2 = "select distinct Area from branch where Area is not null order by Area";
$query3 = "select distinct City from branch where City is not null order by City";

$branchquery = mysqli_query ($conn_id, $query1)
or die ("Cannot find branch identifiers");

$areaquery = mysqli_query ($conn_id, $query2)
or die ("Cannot find area identifiers");

$cityquery = mysqli_query ($conn_id, $query3)
or die ("Cannot find city identifiers");

$i = 0;
while ($row = mysqli_fetch_row ($branchquery))
{
    $branchlist[$i] = $row[0];
    $i++;
}

$i = 0;
while ($row = mysqli_fetch_row ($areaquery))
{
    $arealist[$i] = $row[0];
    $i++;
}

$i = 0;
while ($row = mysqli_fetch_row ($cityquery))
{
    $citylist[$i] = $row[0];
    $i++;
}

mysqli_free_result ($branchquery);
mysqli_free_result ($areaquery);
mysqli_free_result ($cityquery);

?>

<section id="boxes">
    <div class = "container">
        <div class="box">
            <h3>Branch Information</h3>
            <form name="BranchChoose" method="GET" action="branch.php">
                <input class="button_1" type="submit" name="SubmitVal" value="Select">
            </form>
            <br>
        </div>
        <div class="box">
            <h3>Branch By Branch Number</h3>
            <form name="BranchNumber" method="GET" action="branchbynumber.php">
                Branch :
                <select name="number">
                    <?php
                    foreach($branchlist as $bid)
                    {
                        print ("<option value=\"$bid\"> $bid </option\n>");
                    }
                    ?>
                </select>
                <br>
                <input class="button_1" type="submit" name="SubmitVal" value="Select">
            </form>
        </div>
        <div class="box">
            <h3>Branch By Area</h3>
            <form name="AreaChoose" method="GET" action="branchbyarea.php">
                Area :
                <select name="area">
                    <?php
                    foreach($arealist as $aid)
                    {
                        print ("<option value=\"$aid\"> $aid </option\n>");
                    }
                    ?>
                </select>
                <br>
                <input class="button_1" type="submit" name="SubmitVal" value="Select">
            </form>
        </div>
        <div class="box">
            <h3>Branch By City</h3>
            <form name="CityChoose" method="GET" action="branchbycity.php">
                City :
                <select name="city">
                    <?php
                    foreach($citylist as $cid)
                    {
                        print ("<option value=\"$cid\"> $cid </option\n>");
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

html_end('../branchoperations.php');

?>