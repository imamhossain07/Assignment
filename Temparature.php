<!-- // Task 2: Temperature Converter -->

<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <div class="container">
        <h1>Temperature Converter</h1>
        <form method="post" action="">
            <label for="temperature">Enter Temperature:</label>
            <input type="number" name="temperature" id="temperature" required>
            <br><br>
            <label for="conversion_type">Select Conversion Type:</label>
            <select name="conversion_type" id="conversion_type" required>
                <option value="c_to_f">Celsius to Fahrenheit</option>
                <option value="f_to_c">Fahrenheit to Celsius</option>
            </select>
            <br><br>
            <input type="submit" value="Convert">
        </form>
        
        <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $temperature = $_POST["temperature"];
                $conversion_type = $_POST["conversion_type"];

                if ($conversion_type == "c_to_f") {
                    $result = ($temperature * 9/5) + 32;
                    echo "$temperature&deg;C is equal to $result&deg;F";
                } elseif ($conversion_type == "f_to_c") {
                    $result = ($temperature - 32) * 5/9;
                    echo "$temperature&deg;F is equal to $result&deg;C";
                }
            }
        ?>

    </div>

</body>
</html>
    