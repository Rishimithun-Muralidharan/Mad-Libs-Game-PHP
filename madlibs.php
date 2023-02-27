<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mad Libs</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <h1>Mad Libs Game</h1>
    <form method="get" acton="madlibs.php">
      Color:<input type="text" name="color" >
      <br>
      Plural noun: <input type="text" name="pluralnoun">
      <br>
      Celebrity: <input type="text" name="celebrity">
      <br>
      <input type="submit">
    </form>
    <br>
    <?php
    error_reporting(0);
    $color = $_GET["color"]
    ?>
    <br>
    <?php
    $pluralnoun = $_GET["pluralnoun"]
    ?>
    <br>
    <?php
    $celebrity = $_GET["celebrity"]
    ?>
    <br>
    <?php
    echo "Roses are $color<br/>";
    echo "$pluralnoun are blue<br/>";
    echo "I love $celebrity<br/>";

    ?>

  </body>
</html>