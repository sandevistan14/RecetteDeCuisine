<html>
<header>
    <link href="css/style.css" rel="stylesheet">
    <title>Recette</title>
</header>

<body>
    <h1>Recette</h1>
    <p>

        <label for="site-search">Search the site:</label>
        <input type="search" id="site-search" name="q">

        <button>Search</button>

    <form method="get">
        titre : <input type="text" name="titre" />
        <br>
        description : <input type="text" name="description" />
        <br>
        <input type="submit" name="submit" />
    </form>

    <?php
    include "php/phpfunction.php";


    if (isset($_GET['submit'])) {
        $info = array();
        array_push($info, formrecup());
        //si il n'y a pas de titre alors ne crée rien 
        if ($info[count($info) - 1]->titre == "") {
        } else {
            $url = "html/" . $info[count($info) - 1]->titre . ".html";
            file_put_contents($url, $info[count($info) - 1]->description);
            putintodatafile("<a href=" . $url . ">" . $info[count($info) - 1]->titre . "</a> <br>");
            //header("Location: " . $url);
        }
    }



    //deletallfilesinhtml();
    
    $data = readdatafile();
    echo $data . "<br>";
    ?>


    </p>

    <button onclick="callPHPFunction()">Delet all page</button>

    <script>
        function callPHPFunction() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log(xhr); // Afficher la réponse de la fonction PHP
                }
                if (xhr.readyState === 4 && xhr.status === 200) {
                    function deletallfilesinhtml() {
                        //clear le fichier data.txt
                        $file = fopen("data.txt", "w");
                        fclose($file);


                        //supprime tout les fichiers dans le dossier html :
                        $files = glob('../html/*'); // get all file names
                        foreach($files as $file) { // iterate files
                            if (is_file($file))
                                unlink($file); // delete file
                        }
                    }
                }
            };
            xhr.open("GET", "php/button.php", true);
            xhr.send();


        }
    </script>


</body>

</html>