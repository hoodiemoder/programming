<html>
    <body>
        Your name is 
        <?php
            echo $_POST["name"];
        ?>
        <br>
        You are 
        <?php
            if ($_POST["age"] < 18) {
                print "underage.";
            } else {
                print "over 18.";
            }
        ?>
    </body>
</html>
