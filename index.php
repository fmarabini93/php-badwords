<?php 
    $string = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio voluptatem temporibus delectus fuga fugit aperiam est enim voluptas vel, accusantium maxime deserunt nam itaque alias quam eligendi qui aut. Quis ipsum nisi quas voluptatem fugit nesciunt facere nostrum cumque corporis? Necessitatibus hic eos saepe dolores optio totam laborum cupiditate magnam.";
    $word = $_GET["badword"];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Badword</title>
    </head>
    <body>
        <section>
            <h1>Original</h1>
            <p><?php echo $string ?></p>
            <small>Length: <?php echo strlen($string) ?></small>
        </section>
        <section>
            <h1>Censored</h1>
            <p><?php echo str_replace("$word","***",$string) ?></p>
            <small>Length: <?php echo strlen(str_replace("$word","***",$string)) ?></small>
        </section>
    </body>
</html>