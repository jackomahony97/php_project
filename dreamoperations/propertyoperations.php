<?php

include "../dreamsetup.php";

$page = "Property For Rent Operations";
$css = "../";

html_begin ($css, $page);

?>

<section id="boxes">
    <div class = "container">
        <div class="box">
            <a href="propertyoperations/index.php"><h3>Property For Rent Queries</h3></a>
            <p>Here you can query the Property For Rent table using commonly used queries</p>
        </div>
        <div class="box">
            <a href="propertyoperations/propertyforrentInsert.php"><h3>Property For Rent Insertions</h3></a>
            <p>Here you can delete data in the Property For Rent table using commonly used deletions</p>
        </div>
        <div class="box">
            <a href="propertyoperations/propertyforrentUpdate.php"><h3>Property For Rent Updates</h3></a>
            <p>Here you can update data in the Property For Rent table using commonly used updates</p>
        </div>
        <div class="box">
            <a href="propertyoperations/propertyforrentDelete.php"><h3>Property For Rent Deletions</h3></a>
            <p>Here you can delete data from  the Property For Rent table using commonly used deletions</p>
        </div>
    </div>
</section>

<?php

html_end('../index.php');

?>