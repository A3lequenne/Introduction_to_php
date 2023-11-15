<html>
    <head><title>Hi!</title></head>
    <body>
    <?php 
            $firstName = "Clément";
            $age = 28;
            $eyesColor = "blue";
            $family = array(
                0 => 'Sophie',
                1 => 'Clément',
                2 => 'Perrine',
                3 => 'Juliette'
            );
          $hungry = true;  
        ?>
        <p>Hi! My name is <?php echo($firstName)?></p>
        <p>I am <?php echo($age)?> years old</p>
        <p>My eyes are <?php echo($eyesColor)?></p>
        <p>The first person in my family is <?php echo($family[0]) ?></p>
        <p>Am I hungry ? <?php echo($hungry)?> (Boolean)</p>
    </body>
</html>