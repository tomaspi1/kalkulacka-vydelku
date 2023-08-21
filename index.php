<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f2f2f2;
        }

        .calculator {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        label, input {
            display: block;
            margin: 10px 0;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        #totalEarnings {
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
    <title>Výpočet Výdělku</title>
</head>
<body>
    <div class="calculator">
        <h1>Kalkulačka Výdělku</h1>
        <label for="hoursWorked">Odpracované hodiny:</label>
        <input type="number" id="hoursWorked" step="0.1">
        
        <label for="hourlyRate">Hodinová sazba:</label>
        <input type="number" id="hourlyRate">
        
        <label for="transportAllowance">Doprava:</label>
        <input type="number" id="transportAllowance">
        
        <button id="calculateButton">Spočítat</button>
        
        <p id="totalEarnings">Celkový výdělek: 0 Kč</p>
    </div>
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const calculateButton = document.getElementById("calculateButton");
            const totalEarnings = document.getElementById("totalEarnings");

            calculateButton.addEventListener("click", function () {
                const hoursWorked = parseFloat(document.getElementById("hoursWorked").value);
                const hourlyRate = parseFloat(document.getElementById("hourlyRate").value);
                const transportAllowance = parseFloat(document.getElementById("transportAllowance").value);

                const earnings = (hoursWorked * hourlyRate) + transportAllowance;
                
                totalEarnings.textContent = `Celkový výdělek: ${earnings.toFixed(2)} Kč`;
            });
        });
    </script>
</body>
</html>


