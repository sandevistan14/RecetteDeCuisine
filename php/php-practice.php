<html>
<header>
    <title>PHP Practice</title>
</header>

<body>
    <h1>PHP Practice</h1>
    <p>Here is some PHP code:</p>
    <p>


    <form method="get">
        titre : <input type="text" name="titre" />
        description : <input type="text" name="description" />
        <input type="submit" name="submit" />
    </form>


    <?php
    include "phpfunction.php";

    $info = formrecup();
    $title = $info[0];
    $description = $info[1];
    $url = "../html/" . $title . ".html";

    if ($title == "clear") {
        clearfile();
        deletallfilesinhtml();
    }
    else{
        file_put_contents($url,$description);
        putintodatafile("<br> <a href=$url> $title </a>");
        $data = readdatafile();
        echo $data;

    }


    ?>
    </p>



</body>

</html>