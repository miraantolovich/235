<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fact of the Day</title>

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
            "Pablo Picasso carried a revolver loaded with blanks, which he would fire at whoever asked him what his work 'meant.'",
            "Bananas are more effective in replenishing electrolytes than Gatorade. They also have serotonin and dopamine—chemicals that help you feel happy.",
            "Simply taking 1 step uses over 200 muscles in the body.",
            "Parents have started naming their children after Instagram filters. The most popular filter name was Lux, but there were even a few Kelvins.",
            "At age 23, Evan Spiegel, the founder of Snapchat, is the world’s youngest billionaire.",
            "Contrary to its portrayal in Jurassic Park, the Tyrannosaurus rex probably didn’t roar. Instead, scientists believe it either hissed or rattled, like a rattlesnake.",
            "A Frosted Flake in the shape of Illinois sold on eBay for $1,350."];

            $numday = date('w');
            $dayName = date('l');
            $dayElement = $randomfact[$numday];

            echo "<h1>Fact of the Day Page</h1>";
            echo "<p>You have reached random fact of the day page. I hope you enjoy the content!</p>";
            
            echo "<p>Today is $dayName.</p>";
            echo "<p>$dayElement</p>";

        ?>

    </main>
</body>

</html>