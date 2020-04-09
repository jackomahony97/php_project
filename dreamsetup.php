<?php

function dream_connect ()
{
    $server = "localhost";
    $database = "Dreamhome";
    $username = "root";
    $password = "";
    $connection =
        mysqli_connect ($server, $username, $password, $database);
    if ($connection)
        return ($connection);
    return (FALSE);
}

function html_begin ($css, $page)
{
    $home = $css."\index.php";
    $css = $css."\dreamhome.css";
    print ("<html lang='en'>\n");
    print ("<link rel=\"stylesheet\" type=\"text/css\" href=$css>");
    print ("<head>\n");
    print ("<title>Dreamhome Rental Agency</title>\n");
    print ("<head>\n");
    print ("<body>");
    print ("<header>");
    print ("<div class=\"container\">");
    print ("<div id=\"branding\">");
    print ("<h1><span class=\"highlight\"> Dreamhome</span> Rental Agency</h1>");
    print ("</div>");
    print ("<nav>");
    print ("<ul>");
    print ("<li class=\"current\"><a href=$home>Home</a></li>");
    print ("</ul>");
    print ("</nav>");
    print ("</div>");
    print ("</header>");

    print ("<section id=\"showcase\">");
    print ("<div class=\"container\">");
    print ("</div>");
    print ("</section>");

    print ("<section id=\"thehead\">");
    print ("<h1 class=\"container\">$page</h1>");
    print ("<div class=\"container\">");
    print ("</div>");
    print ("</section>");
}

function html_end ($url)
{
    $back = $url;
    print ("<div class=\"container\">");
    print ("<div id=\"box\">");
    print ("<a class=\"button_1\" href= $back >Back</a>");
    print ("</div>");
    print ("</div>");

    print ("<footer><p>Developed by Jack O Mahony for CS2501</p></footer>");
    print ("</body>");
    print ("</html>");
}

?>
