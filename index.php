<?php
$result ="";
$num1 ="";
$num2 ="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $num1=$_POST["num1"];
     $num2=$_POST["num2"];
$operation=$_POST["operation"];

if($num1=== "" || $num2===""){
    $result="Please enter both numbers";
}else{
     
if($operation =="+"){
    $result=$num1 + $num2;
}elseif($operation =="-"){
      $result=$num1 - $num2;
}
elseif($operation =="*"){
      $result=$num1 * $num2;
}
elseif($operation =="/"){
    if ($num2 ==0){
        $result ="Cannot Divide by Zero";
    }else{
         $result=$num1 / $num2;
    } 
}
}

}
?>
<link rel="stylesheet" href="style.css">

<div class="calculator">
  <h2>Calculator</h2>
  <form method="POST">
    <input type="number" name="num1" placeholder="First number" value=<?php echo $num1; ?> required>
    <select name="operation">
            <option value="+">+</option>
         <option value="-">-</option>
          <option value="*">x</option>
           <option value="/">÷</option>
    </select>
    <input type="number" name="num2" placeholder="Second number" value=<?php echo $num2; ?> required>
    <button type="submit">Calculate</button>
  </form>
  <p class="result">Result: <?php echo $result; ?></p>
</div>
