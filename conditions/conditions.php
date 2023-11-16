<html>
    <head><title>Conditions exercices</title></head>
    <body>
        <?php
        // 1.1 Clean your room Exercise
        $room_is_filthy = true;

        if($room_is_filthy == true ){
	        echo "Yuk, Room is dirty : let's clean it up !";
	        //cleanup_room();
	        echo "<br>Room is now clean!";
	        $room_is_filthy = false;
        } else {
	        echo "<br>Nothing to do, room is neat.";
        }

        echo("<br>");
        echo("<br>");

        // 1.2 Clean your room Exercise, improved

        // Create the array of possible states
        $possible_states = ['filthy', 'dirty'];

        // When testing, change the index value to navigate to the possible array values
        $room_filthiness = $possible_states[1]; 

        if($room_filthiness == 'filthy'){
	        echo "Yuk, Room is Disgusting! Let's clean it up !";
        } else if($room_filthiness == 'dirty'){
	        echo "Yuk, Room is dirty : let's clean it up !";
        // ...
        } else {
	        echo "<br>Nothing to do, room is neat.";
        }

        echo("<br>");
        echo("<br>");

        // Display a different greeting message depending on the time of the day. Changed it a bit because I didnt want to do a special case for the X:00

        $now = date("H:i");
        echo($now);
        echo("<br>");

        list($currentHour, $currentMinute) = explode(":", $now);
        $currentHour = (int)$currentHour;
        $currentMinute = (int)$currentMinute;

        if ($currentHour >= 5 && $currentHour < 9) {
            echo("Good morning !");
        }
        else if ($currentHour < 12) {
            echo("Good day !");
        }
        else if ($currentHour < 16) {
            echo("Good afternoon !");
        }
        else if ($currentHour < 21) {
            echo("Good evening !");
        }
        else {
            echo("Good night");
        }

        echo("<br>");
        echo("<br>");

        // Display a different greeting according to the user's age + gender
        ?>
        <form method="get" action="">
	        <label for="age">Your age please</label>
	        <input type="" name="age">
            <label for="gender">Male</label>
            <input type="radio" name="gender" value="man" required>
            <label for="gender">Female</label>
            <input type="radio" name="gender" value="woman" required>
	        <input type="submit" name="submit" value="Greet me now">
        </form>

        <?php
        if (isset($_GET['age'])){
            $age = $_GET['age'];
            if (isset($_GET['gender'])) {
                $gender = $_GET['gender'];

                echo("Hello ");
                if ($gender == "man") {
                    echo("Mister ");
                }
                else if ($gender == "woman") {
                    echo("Miss ");
                }
                if ($age < 12) {
                    echo("Kiddo!");
                }
                else if ($age < 18) {
                    echo("Teenager !");
                }
                else if ($age < 115) {
                    echo("adult !");
                }
                else {
                    echo("Wow! Still alive ? Are you a robot, like me ? Can I hug you ?");
                }
            }
        }

        echo("<br><br>");
        $a = 4;

        echo '$a = 2 + 2';
        ?>

    </body>
</html>