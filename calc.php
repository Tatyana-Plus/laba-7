<?php
if (!empty($_POST)) {
    $x = isset($_POST['x']) ? $_POST['x'] : ''; // Замена: "!epmty" на 'isset',  0 - один из операндов
    $y = isset($_POST['y']) ? $_POST['y'] : '';
    $operation = !empty($_POST['operation']) ?
        $_POST['operation'] : '';
		switch ($operation) {
        case '+':
            $result = $x . '+' . $y . '=' . ($x + $y);
            break;
        case '-':
            $result = $x . '-' . $y . '=' . ($x - $y);
            break;
        case '*':
            $result = $x . '*' . $y . '=' . ($x * $y);
            break;
        case '/':
            if ($y == 0) { // Проверка деления на ноль
                $result = 'На ноль делить нельзя';
                break;
            }
            $result = $x . '/' . $y . '=' . ($x / $y);
            break;
        default:
            $result = 'Передан неизвестный тип операции';
    }
	   echo $result;
}
