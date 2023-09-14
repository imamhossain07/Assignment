<!-- Task 7: Simple Calculator -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>

</head>
<body>
    <div class="container">
        <h2>Simple Calculator</h2>
        <form method="post" action="">
            <input type="number" name="num1" placeholder="Enter First Number" required><br>
            <input type="number" name="num2" placeholder="Enter Second Number" required><br>
            <select name="operation">
                <option value="add">Addition</option>
                <option value="sabtract">Sabtraction</option>
                <option value="multyply">Multiplication</option>
                <option value="divide">Division</option>
            </select><br>
            <button type="submit">Calculate</button>
        </form>

        <div id="result">
            <?php 
              if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operation = $_POST['operation'];

                switch ($operation) {
                    case 'add':
                        $result = $num1 + $num2;
                        echo "Result: $result";
                        break;
                    case 'sabtract':
                        $result = $num1 - $num2;
                        echo "Result: $result";
                        break;
                    case 'multyply':
                        $result = $num1 * $num2;
                        echo "Result: $result";
                        break;
                    case 'divide':
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                            echo "Result: $result";
                         } else {
                            echo "Can't divide by zero.";
                         }
                        break;
                    
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>