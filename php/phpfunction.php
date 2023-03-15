<?php
include "page.php";
function formrecup()
{
    if (isset($_GET['submit'])) {
        $Page = new page();
        $Page->titre = $_GET['titre'];
        $Page->description = $_GET['description'];
        return $Page;
    }
}

function putintodatafile($data)
{
    $file = fopen("data.txt", "a");
    fwrite($file, "\n" . $data);
    fclose($file);
}

function readdatafile()
{
    if (filesize("data.txt") != 0) {
        $file = fopen("data.txt", "r");
        $data = fread($file, filesize("data.txt"));
        fclose($file);
        return $data;
    }
    return;
}

function clearfile()
{
    $file = fopen("data.txt", "w");
    fclose($file);
}

?>