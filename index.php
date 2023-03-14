<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <form action="index.php" method="post" enctype="multipart/form-data">
            <label for="texte">Ecrire un texte</label>
            <input type="text" name="texte" id="texte">
            <input type="submit" value="Voir le hashage">
        </form>

        <?php
            if(isset($_POST["texte"])){
                $hashTeste = $_POST["texte"];
                $md5 = md5($hashTeste, false);
                $sha1 = sha1($hashTeste, false);
                $sha2 = hash_hmac('sha256', $hashTeste, 'secret');

                echo "<p>Hashage md5 = $md5 </p>";
                echo "<p>Hashage sha1 = $sha1 </p>";
                echo "<p>Hashage sha2 = $sha2 </p>";
            }
            

        ?>
    </div>
    
    
</body>
</html>