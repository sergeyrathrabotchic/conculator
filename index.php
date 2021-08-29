<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    $rows = ['Сложить','Вычесть','Умножить','Разделить'];
    if(isset($_POST['Посчитать'])){
        $operation = $_POST['operation'];
        $one = $_POST['one'];
        $two = $_POST['two'];
        if ($operation == 'Сложить'){
            $answer = $one + $two;
        }
        if ($operation == 'Вычесть'){
            $answer = $one - $two;
        }
        if ($operation == 'Умножить'){
            $answer = $one * $two;
        }
        if ($operation == 'Разделить'){
            $answer = $one / $two;
        }
    }
    ?>
</head>
<body> 
<form method="post" action="">
<select name='operation'>
<?php for($i = 0;$i<count($rows);$i++): ?>
  <option><?php echo $rows[$i]; ?></option>           
<?php endfor; ?>
</select>
<br>
<p>Введите первое число: <br><input type="number" name="one" required/></p>
<p>Введите второе число: <br><input type="number" name="two" required/></p>
<input type="submit" value="Посчитать" name="Посчитать"/>

</form>
<br>
<?php if($answer): ?>
  <p><?php echo $answer; ?></p>           
<?php endif; ?>
</body>
</html>