<?php
    $quotes = array('"Whether you think you can or you think you can’t, you’re right." –Henry Ford', '"An investment in knowledge pays the best interest." -Benjamin Franklin', '"Price is what you pay. Value is what you get." -Warren Buffett');
    $randQuote = array_rand($quotes, 1);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>About Me</title>
        <link rel="stylesheet" href="a1.css" type="text/css">
    </head>
    <body>
        <div id="container">
            <div id="image">
                <img src="images/DSC_0188.JPG" alt="Taras Dundyak">
            </div>
            <div id="text">
                <h2>About Me</h2>
                <p>Hello. My name is Taras Dundyak. I am from Ivano-Frankivsk, Ukraine. Together with my friends we own and run a restaurant chain in Ukraine. Web Development is my hobby. I have already finished Fundamentals of Website Development course from Harvard Extension School. This course is the next step in my education. I hope that after this course I will be able to develop some web applications.</p>
                <h2>Random Quote</h2>
                <p id="quote"><?php echo $quotes[$randQuote]; ?></p>
            </div>
        </div>
    </body>
</html>

