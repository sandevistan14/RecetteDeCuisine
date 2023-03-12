<?php
function printtentimes($nb)
{
    for ($i = 0; $i < 10; $i++) {
        echo $nb, "\n";
        echo "<br>";
    }
}
function printtitleinhtml($title)
{
    if (is_string($title)) {
        if (strlen($title) > 5) {
            echo "flemme frere";
        } else {
            echo "<h1>", $title, "</h1>";
        }
    } else {
        echo "Error: title is not a string";
    }

}

function formrecup()
{
    if (isset($_GET['submit'])) {
        $titre = $_GET['titre'];
        $description = $_GET['description'];
        return array($titre, $description);
    }
}

function putintodatafile($data)
{
    $file = fopen("data.txt", "a");
    fwrite($file, "\n".$data);
    fclose($file);
}

function readdatafile()
{
    $file = fopen("data.txt", "r");
    $data = fread($file, filesize("data.txt"));
    fclose($file);
    return $data;
}

function clearfile()
{
    $file = fopen("data.txt", "w");
    fclose($file);
}

function strindatafile($str)
{
    $file = fopen("data.txt", "r");
    $data = fread($file, filesize("data.txt"));
    fclose($file);
    if (strpos($data, $str) !== false) {
        return true;
    } else {
        return false;
    }
}

function deletallfilesinhtml()
{
    $files = glob('../html/*'); // get all file names
    foreach ($files as $file) { // iterate files
        if (is_file($file))
            unlink($file); // delete file
    }
}
?>