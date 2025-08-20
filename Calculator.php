<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe6f0; /* Light pink background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .calc-box {
            background-color: #ffccdd; /* Light pink container */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 8px rgba(0,0,0,0.3);
            text-align: center;
        }
        input {
            padding: 8px;
            margin: 5px;
            width: 80%;
            border: none;
            border-radius: 5px;
        }
        button {
            padding: 10px 15px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            background-color: #fff;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover {
            background-color: #ff99bb;
            color: white;
        }
        h3 {
            color: #660033;
        }
    </style>
</head>
<body>

<div class="calc-box">
    <form method="post">
        <label>First Number</label><br>
        <input type="number" name="num1" required><br>
        
        <label>Second Number</label><br>
        <input type="number" name="num2" required><br><br>

        <button type="submit" name="operation" value="add"> + </button>
        <button type="submit" name="operation" value="subtract"> - </button>
        <button type="submit" name="operation" value="multiply"> * </button>
        <button type="submit" name="operation" value="divide"> / </button>
        <button type="submit" name="operation" value="modulus"> % </button>
    </form>

    <?php
    if (isset($_POST['operation'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = "";

        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero!";
                }
                break;
            case "modulus":
                if ($num2 != 0) {
                    $result = $num1 % $num2;
                } else {
                    $result = "Cannot modulus by zero!";
                }
                break;
        }
        echo "<h3>Result: $result</h3>";
    }
    ?>
</div>

</body>
</html>
