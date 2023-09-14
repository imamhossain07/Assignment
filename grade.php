<!-- Task 3: Grade Calculator -->

<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>
    <div class="container">
        <form method="post" action="">
            <label for="score1">Enter Test Score 1:</label>
            <input type="number" name="score1" id="score1" required>
            <br><br>
            <label for="score2">Enter Test Score 2:</label>
            <input type="number" name="score2" id="score2" required>
            <br><br>
            <label for="score3">Enter Test Score 3:</label>
            <input type="number" name="score3" id="score3" required>
            <br><br>
            <input type="submit" value="Calculate Grade">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $score1 = $_POST["score1"];
                $score2 = $_POST["score2"];
                $score3 = $_POST["score3"];

                $average = ($score1 + $score2 + $score3) / 3;

                switch (true) {
                    case $average >= 90:
                        $grade = 'A+';
                        break;
                    case $average >= 80:
                        $grade = 'A';
                        break;
                    case $average >= 70:
                        $grade = 'B';
                        break;
                    case $average >= 60:
                        $grade = 'C';
                        break;
                    case $average < 60:
                        $grade = 'F';
                }

                echo "Average Score: $average</br>";
                echo "Letter Grade: $grade</br>";
            }
        ?>
    </div>
</body>
</html>

    