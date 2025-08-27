<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            background-color: #ffccdd; /* Light pink background */
            color: #333;
            margin: 0;
            height: 100vh; /* Full height */
            display: flex;
            justify-content: center; /* Horizontal center */
            align-items: center;     /* Vertical center */
            flex-direction: column;  /* Stack elements vertically */
        }
        .container {
            background-color: #ffe6f0; /* Softer pink box */
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
            width: 400px;
        }
        h2 {
            font-family: Georgia, serif;
            color: #b30059; /* Darker pink for headings */
        }
        form {
            margin-top: 15px;
        }
        input[type="text"] {
            padding: 5px;
            border: 1px solid #b30059;
            border-radius: 5px;
            width: 90%;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #ff99bb;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #e60073;
        }
    </style>
</head>
<body>
<?php
// activity.php
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Safely get inputs
    $inputString = isset($_POST['inputString']) ? trim($_POST['inputString']) : "";
    $inputFruit = isset($_POST['inputFruit']) ? trim($_POST['inputFruit']) : "";

    // Part 1: String Manipulation output
    echo "<h2>String Manipulation</h2>";
    echo "Original: " . $inputString . "<br>";
    echo "Uppercase: " . strtoupper($inputString) . "<br>";
    echo "Lowercase: " . strtolower($inputString) . "<br>";
    echo "Ucfirst: " . ucfirst(strtolower($inputString)) . "<br>";
    echo "Ucwords: " . ucwords(strtolower($inputString)) . "<br>";
    echo "Trimmed: " . $inputString . "<br><br>";

    // Part 2: Arrays
    $fruits = ["apple", "banana"];

    if ($inputFruit !== "") {
        $fruits[] = $inputFruit;
    }

    echo "<h2>Arrays</h2>";
    echo "Array contents:<br>";
    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }
    echo "Array size: " . count($fruits);

} else {
    // Show the input form
    ?>
    <form method="post" action="">
        <h2>Part 1: String Manipulation</h2>
        Enter a string: <input type="text" name="inputString" required><br><br>

        <h2>Part 2: Arrays</h2>
        Enter a fruit: <input type="text" name="inputFruit" required><br><br>

        <input type="submit" value="Submit">
    </form>
    <?php
}
?>
</body>
</html>


</body>
</html>