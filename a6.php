<?php 
  $my_name = "william_chan";
  $description = "I use computers.";
  $favourite_animals = ["cheetahs", "fish", "rhinos", "cougars"];

  function the_developer_profile(){
    echo "<div>";

    global $my_name;
    global $description;
    global $animals;

    echo "Developer Profile: $my_name";
    echo "Description: $description";
    // echo "<p>His favourite animals are " . $favourite_animals . "</p>";
    echo "<p>His favourite animals are ";
    // https://www.w3schools.com/php/php_looping_foreach.asp
    $counter = 0;
    foreach ($favourite_animals as $animals){
      if ($counter == count($favourite_animals)){
        echo "and $animals";
      }
      else {
        echo "$animals, ";
      }
      $counter++; // https://www.php.net/manual/en/language.operators.increment.php
    }
    echo "</div>";
  }

  function the_color_form(){
    echo "<p>Which color do you prefer for the text of this page?</p>";

    echo "<input type = 'submit'>Submit</input>";
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
