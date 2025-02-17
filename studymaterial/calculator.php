<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engineering Calculator</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/10.6.4/math.min.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1e1e1e, #2c2c2c);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .calculator {
            background: #222;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0px 0px 20px rgba(0, 255, 255, 0.3);
            width: 350px;
            text-align: center;
            margin-bottom: 20px;
        }

        .calculator-screen {
            width: 100%;
            height: 60px;
            background: #111;
            color: #0ff;
            text-align: right;
            font-size: 2em;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: inset 0px 0px 5px rgba(0, 255, 255, 0.5);
        }

        .calculator-buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
        }

        .calculator-buttons button {
            background: #333;
            color: #fff;
            font-size: 1.5em;
            padding: 15px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0px 0px 5px rgba(0, 255, 255, 0.3);
        }

        .calculator-buttons button:hover {
            background: #0ff;
            color: #111;
        }

        .equal {
            background: #ff9100;
            grid-column: span 2;
        }

        .equal:hover {
            background: #ff5500;
        }

        .clear {
            background: #ff3b3b;
        }

        .clear:hover {
            background: #c62828;
        }

        .back {
            background: #007bff;
            color: white;
        }

        .back:hover {
            background: #0056b3;
        }

        .logout {
            background: #ffcc00;
            color: black;
            font-size: 1.2em;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
            width: 200px;
        }

        .logout:hover {
            background: #e6b800;
        }
    </style>
</head>
<body>

    <div class="calculator">
        <input type="text" id="display" class="calculator-screen" readonly>

        <div class="calculator-buttons">
            <button onclick="appendToDisplay('7')">7</button>
            <button onclick="appendToDisplay('8')">8</button>
            <button onclick="appendToDisplay('9')">9</button>
            <button onclick="appendToDisplay('/')">/</button>
            
            <button onclick="appendToDisplay('4')">4</button>
            <button onclick="appendToDisplay('5')">5</button>
            <button onclick="appendToDisplay('6')">6</button>
            <button onclick="appendToDisplay('*')">*</button>

            <button onclick="appendToDisplay('1')">1</button>
            <button onclick="appendToDisplay('2')">2</button>
            <button onclick="appendToDisplay('3')">3</button>
            <button onclick="appendToDisplay('-')">-</button>

            <button onclick="appendToDisplay('0')">0</button>
            <button onclick="appendToDisplay('.')">.</button>
            <button class="clear" onclick="clearDisplay()">C</button>
            <button onclick="appendToDisplay('+')">+</button>

            <button class="function" onclick="appendToDisplay('sqrt(')">√</button>
            <button class="function" onclick="appendToDisplay('sin(')">sin</button>
            <button class="function" onclick="appendToDisplay('cos(')">cos</button>
            <button class="function" onclick="appendToDisplay('tan(')">tan</button>

            <button class="function" onclick="appendToDisplay('log(')">log</button>
            <button class="function" onclick="appendToDisplay('exp(')">exp</button>
            <button class="function" onclick="appendToDisplay('pi')">π</button>
            <button class="equal" onclick="calculateResult()">=</button>
            
            <button class="back" onclick="backspace()">🔙</button>
        </div>
    </div>

    <button class="logout" onclick="window.location.href='index1.php'">Logout to Home</button>
    <button class="logout" onclick="window.location.href='studymaterial.php'">Logout to Study Material</button>

    <script>
        function appendToDisplay(value) {
            document.getElementById('display').value += value;
        }

        function clearDisplay() {
            document.getElementById('display').value = '';
        }

        function backspace() {
            let display = document.getElementById('display');
            display.value = display.value.slice(0, -1);
        }

        function calculateResult() {
            let expression = document.getElementById('display').value;
            expression = expression.replace(/pi/g, 'Math.PI'); // Replace π with Math.PI

            try {
                let result = math.evaluate(expression); // Use math.js for safe evaluation
                document.getElementById('display').value = result;
            } catch (error) {
                document.getElementById('display').value = "Error";
            }
        }
    </script>

</body>
</html>
