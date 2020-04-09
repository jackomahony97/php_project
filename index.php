<?php

include "dreamsetup.php";

$page = "Dream operations";
$css = "";

html_begin ($css, $page);

?>

<section id="boxes">
    <div class = "container">
        <div class="box">
            <a href="dreamoperations/staffoperations.php"><h3>Staff Operations</h3></a>
            <p>Here you can use operations associated with the Staff table</p>
        </div>
        <div class="box">
            <a href="dreamoperations/branchoperations.php"><h3>Branch Operations</h3></a>
            <p>Here you can use operations associated with the Branch table</p>
        </div>
        <div class="box">
            <a href="dreamoperations/clientoperations.php"><h3>Client Operations</h3></a>
            <p>Here you can use operations associated with the Viewing table</p>
        </div>
        <div class="box">
            <a href="dreamoperations/propertyoperations.php"><h3>Property For Rent Operations</h3></a>
            <p>Here you can use operations associated with the Property For Rent table</p>
        </div>
    </div>
</section>

<footer><p>Developed by Jack O Mahony for CS2501</p></footer>
</body>
</html>

