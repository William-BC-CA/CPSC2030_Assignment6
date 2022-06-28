<?php 
  $my_name = "william_chan";
  $description = "I use computers.";
  $favourite_animals = ["cheetahs", "fish", "rhinos", "cougars"];

  function the_developer_profile(){
    echo "<div>";
    echo "Developer Profile" + $my_name;
    echo "Description: " + $description;
    // echo "<p>His favourite animals are " + $favourite_animals + "</p>";
    echo "<p>His favourite animals are ";
    // https://www.w3schools.com/php/php_looping_foreach.asp
    $counter = 0;
    foreach ($favourite_animals as $animals){
      if ($counter == count($favourite_animals)){
        echo "and " + $animals;
      }
      else {
        echo "$animals, ";
      }
      $counter++; // https://www.php.net/manual/en/language.operators.increment.php
    }
    echo "</div>";
  }
?>
<!DOCTYPE html>
<html style="">
  <head>
    <meta charset="utf-8">
    <title>Assigment 6: Hello PHP World!</title>

    <!--<link rel="stylesheet" href="style.css">-->
    <!--<link rel="stylesheet" href="icomoon/style.css">-->

  </head>
  <body>

    <header>
        <h1>Hello PHP World!</h1>
        <div class="subtitle">
          An Introduction to Server-Side Scripting.
        </div>

        <?php
          the_developer_profile();
        ?>

    </header>

    <main>
    
    </main>

  </body>
</html>
