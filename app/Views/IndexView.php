<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet"
          type="text/css"
          href="app\Views\style.css"/>
</head>
 <body>
  <section class="container">
    <div class="left-half">
        <nav class="nav">
            <div class="inline">
                <img src="app\Views\images\img.png" height="50" width="50">
                <a class="a2">pineapple.</a>
            </div>
            <div class="inline">
                <a class="a1" href="#"
                   style="text-decoration: none">
                    About
                </a>
                <a class="a1" href="#"
                   style="text-decoration: none">
                    How it works
                </a>
                <a class="a1" href="#"
                   style="text-decoration: none">
                    Contact
                </a>
            </div>
        </nav>
        <section id="emailIsNotRegistered" style="display: block">
            <article>
                <p class="p1">Subscribe to newsletter</p>
                <p class="p2">Subscribe to our newsletter and get 10% discount on pineapple glasses.</p>
            </article>
            <form method="POST" action="/" id="emailForm">
                <input name="email" id="email" class="input1" type="text" placeholder="Type Your email address here...">

<!--            Comment out line 44 and 50 if You want to test email validation with PHP and open
comment in lines 45-49 and 51-->

                <p class="errorMessage" id="message"></p>
<!--                <p class="errorMessage">-->
<!--                    --><?php //foreach ($messages as $message): ?>
<!--                        --><?php //echo $message; ?>
<!--                    --><?php //endforeach; ?>
<!--                </p>-->
                <label class="button1 " type="button" onclick="validateEmail()  ">➜</label>
<!--                <button class="button1" type="submit">➜</button>-->
                <article class="p6">
                    <input class="p4" type="checkbox" name="checkbox" id="checkbox" value="check"/>
                    <p class="p4">I agree to</p>
                    <p class="p5"><a href="#">terms of service</a></p>
                </article>
            </form>
            <p class="p7">
            </p>
            <ul class="nav1">
                <div class="inline">
                    <img src="app\Views\images\facebook.png" height="50" width="50">
                    <img src="app\Views\images\instagram.png" height="50" width="50">
                    <img src="app\Views\images\twitter.png" height="50" width="50">
                    <img src="app\Views\images\youtube.png" height="50" width="50">
                </div>
            </ul>
        </section>
        <section id="emailRegistered" style="display: none">
            <img class="cup" src="app\Views\images\cup.png" height="150" width="150">
            <p class="p1"> Thanks for subscribing!</p>
            <p class="p8"> You have successfully subscribed to our email listing. Check Your email for the discount code.</p>
            <p class="p9"></p>
            <ul class="nav2">
                <div class="inline">
                    <img src="app\Views\images\facebook.png" height="50" width="50">
                    <img src="app\Views\images\instagram.png" height="50" width="50">
                    <img src="app\Views\images\twitter.png" height="50" width="50">
                    <img src="app\Views\images\youtube.png" height="50" width="50">
                </div>
            </ul>
        </section>
    </div>
    <div class="right-half">
        <img class="img" src="https://www.hdnicewallpapers.com/Walls/Big/Food%20and%20Drinks/Various_Sliced_of_Fruits_4K_Pics.jpg"
             width="1120" height="980">
    </div>
  </section>
 </body>
</html>
<script src="app\Resources\js\validation.js" type="text/javascript"></script>