<?php include __DIR__ . '/calc.php'; ?>
<form action="/index.php" method="POST">
 <input type="number" name="x" placeholder="Введите значение" required autofocus> <!-- Изменение: тип с text на number -->
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="y" placeholder="Введите значение" required>
    <button type="submit">Выполнить действие</button>
</form> 
