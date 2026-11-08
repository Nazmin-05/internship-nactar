
<?php

$bangla = "";
$english = "";
$mathematics = "";
$average = "";
$grade = "";
$message = "";

if (isset($_POST['calculate'])) {

    $bangla = $_POST['bangla'];
    $english = $_POST['english'];
    $mathematics = $_POST['mathematics'];

    if (
        $bangla === "" || $english === "" || $mathematics === "" ||
        !is_numeric($bangla) || !is_numeric($english) || !is_numeric($mathematics) ||
        $bangla < 0 || $bangla > 100 ||
        $english < 0 || $english > 100 ||
        $mathematics < 0 || $mathematics > 100
    ) {
        $message = "Please enter valid marks between 0 and 100.";
    } 
    else {

        $average = ($bangla + $english + $mathematics) / 3;

        if ($average >= 80 && $average <= 100) {
            $grade = "A+";
        }
        elseif ($average >= 70) {
            $grade = "A";
        }
        elseif ($average >= 60) {
            $grade = "A-";
        }
        elseif ($average >= 50) {
            $grade = "B";
        }
        elseif ($average >= 40) {
            $grade = "C";
        }
        elseif ($average >= 33) {
            $grade = "D";
        }
        else {
            $grade = "F";
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>

    <title>Student Grade Calculator</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #00bfff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background: #FFFFFF;
            width: 400px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0, 150, 200, 0.15);
        }

        h2 {
            text-align: center;
            color: #0284C7;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
            color: #334155;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px;
            border: 1px solid #BAE6FD;
            border-radius: 7px;
            font-size: 16px;
            background: #F0FAFF;
        }

        input:focus {
            outline: none;
            border-color: #38BDF8;
        }

        button {
            width: 100%;
            padding: 13px;
            background: #38BDF8;
            color: white;
            border: none;
            border-radius: 7px;
            font-size: 17px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background: #0284C7;
        }

        .result {
            background: #E0F2FE;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
            text-align: center;
            border: 1px solid #BAE6FD;
        }

        .result h3 {
            color: #0284C7;
        }

        .result h2 {
            color: #0369A1;
        }

        .error {
            color: red;
            text-align: center;
            margin-top: 15px;
        }

    </style>

</head>

<body>

    <div class="container">

        <h2>Student Grade Calculator</h2>

        <form method="POST">

            <label>Bangla Marks</label>
            <input type="number" name="bangla"
            min="0" max="100" step="any"
            placeholder="Enter Bangla Marks"
            value="<?php echo htmlspecialchars((string)$bangla); ?>" required>

            <label>English Marks</label>
            <input type="number" name="english"
            min="0" max="100" step="any"
            placeholder="Enter English Marks"
            value="<?php echo htmlspecialchars((string)$english); ?>" required>

            <label>Mathematics Marks</label>
            <input type="number" name="mathematics"
            min="0" max="100" step="any"
            placeholder="Enter Mathematics Marks"
            value="<?php echo htmlspecialchars((string)$mathematics); ?>" required>

            <button type="submit" name="calculate">
                Calculate Grade
            </button>

        </form>

        <?php if ($message != ""): ?>

            <p class="error">
                <?php echo $message; ?>
            </p>

        <?php elseif ($grade !== ""): ?>

            <div class="result">

                <h3>Result</h3>

                <p>Bangla: <?php echo $bangla; ?></p>

                <p>English: <?php echo $english; ?></p>

                <p>Mathematics: <?php echo $mathematics; ?></p>

                <hr>

                <h3>
                    Average: <?php echo number_format($average, 2); ?>
                </h3>

                <h2>
                    Grade: <?php echo $grade; ?>
                </h2>

            </div>

        <?php endif; ?>

    </div>

</body>
</html>
