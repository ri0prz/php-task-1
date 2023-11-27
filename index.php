<?php
$val = null;
if (isset($_POST['jumlah'])) {
   $a = $_POST['jumlah1'];
   $b = $_POST['jumlah2'];
   $val =  $a + $b;
};

$val2 = null;
$grade = null;
if (isset($_POST['data'])) {
   $c = $_POST['name'];
   $d = $_POST['nim'];
   $e = $_POST['value'];
   $f = $_POST['absence'];
   $val2 = "
      <p>My name is $c<p>
      <p>My id is $d<p>
      <p>My value is $e<p>
      <p>My absence is $f<p>
   ";
   if ($e >= 75 && $f >= 75) {
      $grade = "<p>Your valuation consider as success!</p>";
   }
   else {
      $grade = "<p>Your valuation consider as fail :(</p>";
   }
}

$val3 = null;
if (isset($_POST['newjumlah'])) {
   $a1 = $_POST['newjumlah1'];
   $b1 = $_POST['newjumlah2'];
   $c1 = $_POST['operator'];   

   switch($c1) {
      case '+': $val3 = $a1 + $b1;
      break;
      case '-': $val3 = $a1 - $b1;
      break;
      case '*': $val3 = $a1 * $b1;
      break;
      case '/': $val3 = $a1 / $b1;
      break;      
   }
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ini PHP</title>
</head>

<body>
   <h1>Plus Calculation</h1>
   <form action="" method="post">
      <input type="number" name="jumlah1" id="jumlah" placeholder="1" required>
      <span>+</span>
      <input type="number" name="jumlah2" id="jumlah" placeholder="2" required>
      <br><br>

      <button type="submit" name="jumlah">Submit</button>
   </form>   
   <p><?php echo $val;?></p>

   <hr>

   <h1>Make a value form!!</h1>
   <form action="" method="post">
      <label for="name">Name: </label><br><br>
      <input type="text" placeholder="ur name" name="name" required><br><br>
      <label for="nim">Nim: </label><br><br>
      <input type="text" placeholder="ur nim" name="nim" required><br><br>
      <label for="value">Value: </label><br><br>
      <input type="number" placeholder="ur value" name="value" required><br><br>
      <label for="absence">Absence: </label><br><br>
      <input type="number" placeholder="ur absence" name="absence" required><br><br>

      <button type="submit" name="data">Jumlah</button>
   </form>
   <?php echo $val2;?>
   <?php echo $grade;?>
   <br>

   <hr>

   <h1>A calculator</h1>
   <form action="" method="post">
      <input type="number" name="newjumlah1" id="jumlah" placeholder="1" required>
      <select name="operator">
         <option value="+">+</option>
         <option value="-">-</option>
         <option value="*">*</option>
         <option value="/">/</option>
      </select>
      <input type="number" name="newjumlah2" id="jumlah" placeholder="2" required>
      <br><br>

      <button type="submit" name="newjumlah">Jumlah</button>
   </form>
   <p><?php echo $val3;?></p>
</body>

</html>