    <?php include('header.php'); ?>
    <div class="container">
        <div class="wrapper">
        <h1> Here's Your Valentine's Poem </h1> 
        <?php

        $submit = filter_input(INPUT_POST, 'submit'); //On the line 7 we've lost semicolon
        //We need to replace variables colour, noun and person from function, bcs in the function any variables will be local. So we can't use them nowhere except function
        $colour = filter_input(INPUT_POST, 'colour');
        $noun = filter_input(INPUT_POST, 'noun');
        $person = filter_input(INPUT_POST, 'person');
        function poemDisplay() {
            //created in function all variables that we declaired, but with "global" to have opportunity to use them in function
            global $submit;
            global $colour;
            global $noun;
            global $person;
            echo "<div class='poemDiv'>";
            echo "<p> Roses are $colour.</p>";
            echo "<p> $noun are blue. </p>"; //noun should be with lower letters
            echo "<p> Dear $person, Happy Valentine's Day to you! </p>";
            echo "</div>"; 
        }
        // 5. logic error - no ! 
        if(isset($submit)) { //Needed to replace poemDisplay() in the else, bcs at first we need check user's input
            if(empty($colour) || empty($noun) || empty($person)){ //Need to place the empty form at first, bcs it will not check it in other way
                echo "Please enter your info!<br>"; //<br> tag helps us go to the new line
            }
            else if(preg_match("/[0-9]+$/", $colour) || preg_match("/[0-9]+$/", $noun) || preg_match("/[0-9]+$/", $person)){
                echo "Input must not include any numbers!<br>";
             }
             else if(!preg_match("/[a-zA-z]+$/", $colour) || !preg_match("/[a-zA-Z]+$/", $noun) || !preg_match("/[a-zA-Z]+$/", $person)){
                echo "Input must not include any other symbols, except letters!<br>";
             }
             //Replaced else from main if to sub if, bcs in other way poem doesn't show
             else {
                poemDisplay();
            }
        }
        

        ?>
         <a href="index.php" class="btn btn-secondary"> Create Another Poem </a> 
         </div>
        </div>
    </body>
</html>