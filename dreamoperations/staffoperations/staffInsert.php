<?php

include "../../dreamsetup.php";

$page = "Staff Insertion";
$css = "../../";

html_begin ($css, $page);

?>

<section id="boxes">
    <div class = "container">
        <div class="box">
            <h3>Staff Insertion</h3>
            <form name="BranchChoose" method="GET" action="insertstaff.php">
                Sno: <input type="text" name="Sno"><br>
                Fname: <input type="text" name="Fname"><br>
                Lname: <input type="text" name="Lname"><br>
                Address: <input type="text" name="Address"><br>
                Pcode: <input type="text" name="Pcode"><br>
                Tel_No: <input type="text" name="Tel_No"><br>
                Position: <input type="text" name="Position"><br>
                Sex: <input type="text" name="Sex"><br>
                DOB: <input type="text" name="DOB"><br>
                Salary: <input type="text" name="Salary"><br>
                NIN: <input type="text" name="NIN"><br>
                Bno: <input type="text" name="Bno"><br>
                <input class="button_1" type="submit" name="SubmitVal" value="Submit">
            </form>
            <br>
        </div>
    </div>
</section>

<?php

html_end('../staffoperations.php');

?>

