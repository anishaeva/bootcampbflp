<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Exercise PHP</title>
</head>

<body>
  <h3>Exercise PHP</h3>
  <form action="" class="row" id="grade-form" method="POST">
    <label for="name">Input Your Grade</label>
    <input type="number" name="grade" id="">
  </form>         

  <?php
  $inputUser = (int)$_POST['grade'];

  echo "<br>";
  if ($inputUser >= 85 && $inputUser <= 100) {
    echo ("Grade is A");
  } else if ($inputUser >= 75 && $inputUser <= 84) {
    echo ("Grade is B");
  } else if ($inputUser >= 60 && $inputUser <= 74) {
    echo ("Grade is C");
  } else if ($inputUser >= 50 && $inputUser <= 59) {
    echo ("Grade is D");
  } else if ($inputUser <= 49 && $inputUser >= 0) {
    echo ("Grade is E");
  } else {
    echo ("Can't Calculate Your Grade");
  }
  ?>
</body>

</html>