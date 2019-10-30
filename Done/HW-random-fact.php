<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Random Fact</title>

    <style>
        h1 {
            font-size: 2rem;
            color: #04080F;
        }
        h1:after {
            content:' ';
            display:block;
            border:2px solid black;
        }
        main {
            padding: 5% 10%;
            background-color: #FDF0D5;
        }
        body {
            background-color: #F0544F;
            font-size: 1.5rem;
            color: #04080F;
        }
        p {
            margin-bottom: 1%;
        }
    </style>

</head>

<body>
    <main>
        <?PHP
            $randomfact = [
            "The average person will spend six months of their life waiting for red lights to turn green.",
            "A bolt of lightning contains enough energy to toast 100,000 slices of bread.",
            "You can hear a blue whale’s heartbeat from two miles away.", 
            "Nearly 30,000 rubber ducks were lost a sea in 1992 and are still being discovered today.",
            "The inventor of the frisbee was turned into a frisbee after he died.",
            "One in three divorce filings include the word: Facebook.",
            "Sears used to sell houses.",
            "The most common name in the world is Mohammed.",
            "When you die your hair still grows for a couple of months.",
            "There are two credit cards for every person in the United States.",
            "Space smells like a combination of diesel fuel and barbecue, according to astronauts. The smell is caused by dying stars.",
            "The scientific name for brain freeze is sphenopalatine ganglioneuralgia.",
            "A New Jersey man flunked out of law school and subsequently sued the school for having accepted him in the first place.",
            "In 2011, a woman paid $10,000 for a “non-visible” work of art from actor James Franco’s Museum of Non-Visible Art."];

            $randomElement = $randomfact[array_rand($randomfact, 1)];

            echo "<h1>Random Fact Page</h1>";
            echo "<p>You have reached random fact page. I hope you enjoy the content!</p>";

            echo "<p>$randomElement</p>";

        ?>

        <form action="HW-random-fact.php" method="post">
            <input type="submit" value="Get another Joke!">
        </form>

    </main>
</body>

</html>