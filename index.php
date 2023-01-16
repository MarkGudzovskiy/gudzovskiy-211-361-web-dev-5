<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    
    <title>Gudzovskiy</title>
    
</head>

<body>   
    <section class="section">
        <div class="container">   
            <main>
                <h1>Картинки</h1>
            
                <?php
                    include "db.php";
                    $result = mysqli_query($connect, "SELECT * FROM `images`");
                ?>

                <div class="content">
                    <?php while($img = mysqli_fetch_assoc($result)) {
                        ?>
                        
                        <img class="img_db" src="img/<?=$img["name"];?>" alt="<?=$img["title"];?>" title="<?=$img["title"];?>">
                    <?php
                    };
                    ?>
                </div>
                
            </main>
            <footer class="footer">
            
                <nav class="nav">
                    <p>Сформированно 
                        <?php
                            echo date('d.m.y в H:i:s'); 
                        ?>
                
                </nav>
        
            </footer>
        </div>
        </section>

    </body>
</html>
