<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emblems</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://globusks.ru/bg/show-the-emblems-of-all-foreign-cars-animal-emblems/" rel="stylesheet">
    <link href="https://bg.wikipedia.org/wiki/%D0%A1%D0%BF%D0%B8%D1%81%D1%8A%D0%BA_%D0%BD%D0%B0_%D0%B0%D0%B2%D1%82%D0%BE%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D0%BD%D0%B8_%D0%BC%D0%B0%D1%80%D0%BA%D0%B8"

</head>
<body>
    <div class="container">
        <header>
            <h1 class="heading">Emblems</h1>
            <h2 class="heading">Emblems car</h2> 
        </header>

        <a class="upload-button" href="upload.php">Upload Image</a>

        <div class="emblems"> 
            <?php
            foreach ($imageNames as $imageName) {
                echo "<img src=\"images/$imageName\" alt=\"Emblems\">";
            }
            ?>
            </div>       
            <img src="audi84.jpg" alt="audi">
            <img src="image.jpg" alt="image">
            <img src="images/deer.jpg" alt="Deer">
            <img src="emblems1.jpg" alt="emblems">
        </div>
    </div>
</body>
</html>