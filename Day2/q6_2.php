<html>
<form action = 'q6_2.php' method ='POST'>
<label for="sname">Name of the student:</label>
  <input type="text" id="sname" name="sname"><br>
  <h4>Marks of the student</h4>
  <label for="sub1">Subject 1:</label>
  <input type="number" id="sub" name="sub1"><br>
  <label for="sub2">Subject 2:</label>
  <input type="number" id="sub2" name="sub2"><br>
  <label for="sub3">Subject 3:</label>
  <input type="number" id="sub3" name="sub3"><br>
  <label for="sub4">Subject 4:</label>
  <input type="number" id="sub4" name="sub4"><br>
  <label for="sub5">Subject 5:</label>
  <input type="number" id="sub5" name="sub5"><br>
  <input type = 'submit' value ='SUBMIT'>
  <output name = 'TOTAL MARKS OBTAINED' for "sub1 , sub2, sub3, sub4, sub5"></output>
  <output name = "PERCENTAGE OBTAINED" for "sub1 , sub2, sub3, sub4, sub5"></output>
  </form>
</html>
<?php
 $sname = $_POST['sname'];
 $sub1= $_POST['sub1'];
 $sub2= $_POST['sub2'];
 $sub3= $_POST['sub3'];
 $sub4= $_POST['sub4'];
 $sub5= $_POST['sub5'];
 if ($sub1=" " || $sub2=" " || $sub3=" " || $sub4=" " || $sub5=" ")
  echo "Please give your required input <br>";
 else
  echo "Successfully given the values<br>";
  
 $total = $sub1+$sub2+$sub3+$sub4+$sub5;
  echo "TOTAL MARKS OBTAINED: $total <br>";
 $per = (($sub1+$sub2+$sub3+$sub4+$sub5)/500)*100;
  echo "PERCENTAGE OBTAINED: $per <br>"; 
 
 
?>  
  
 