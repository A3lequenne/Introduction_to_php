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

        
        ?>
        
    </body>
</html>