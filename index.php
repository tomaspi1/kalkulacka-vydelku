<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Výpočet Výdělku</title>
</head>
<body>
    <div class="calculator">
        <h1>Kalkulačka Výdělku</h1>
        <ul>
            <li>
                <label for="hoursWorked">Odpracované hodiny (h):</label>
                <input type="number" id="hoursWorked" step="1">
            </li>
            <li>
                <label for="hourlyRate">Hodinová sazba (kč):</label>
                <input type="number" id="hourlyRate">
            </li>
            <li>
                <label for="additionalHours">Odpracované hodiny - doprava (h):</label>
                <input type="number" id="additionalHours" step="1">
            </li>
            <li>
                <label for="additionalRate">Hodinová sazba - doprava (kč):</label>
                <input type="number" id="additionalRate">
            </li>
        </ul>

<p>Seznam poznámek pro jednotlivé směny: </p>

        
        <ul>
            <!-- Pole pro vstupy směn 1-10 -->
            <li>
                <label for="row1">Směna 1:</label>
                <textarea id="row1"></textarea>
            </li>
            <li>
                <label for="row2">Směna 2:</label>
                <textarea id="row2"></textarea>
            </li>
            <li>
                <label for="row3">Směna 3:</label>
                <textarea id="row3"></textarea>
            </li>
            <li>
                <label for="row4">Směna 4:</label>
                <textarea id="row4"></textarea>
            </li>
            <li>
                <label for="row5">Směna 5:</label>
                <textarea id="row5"></textarea>
            </li>
            <li>
                <label for="row6">Směna 6:</label>
                <textarea id="row6"></textarea>
            </li>
            <li>
                <label for="row7">Směna 7:</label>
                <textarea id="row7"></textarea>
            </li>
            <li>
                <label for="row8">Směna 8:</label>
                <textarea id="row8"></textarea>
            </li>
            <li>
                <label for="row9">Směna 9:</label>
                <textarea id="row9"></textarea>
            </li>
            <li>
                <label for="row10">Směna 10:</label>
                <textarea id="row10"></textarea>
            </li>
        </ul>
        
        <button id="calculateButton">Spočítat</button>
        <button id="saveButton">Uložit</button>
        
        <p id="totalEarnings">Celkový výdělek: 0 Kč</p>
    </div>
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const calculateButton = document.getElementById("calculateButton");
            const saveButton = document.getElementById("saveButton");
            const totalEarnings = document.getElementById("totalEarnings");

            calculateButton.addEventListener("click", function () {
                const hoursWorked = parseFloat(document.getElementById("hoursWorked").value) || 0;
                const hourlyRate = parseFloat(document.getElementById("hourlyRate").value) || 0;
                const additionalHours = parseFloat(document.getElementById("additionalHours").value) || 0;
                const additionalRate = parseFloat(document.getElementById("additionalRate").value) || 0;

                let total = (hoursWorked * hourlyRate) + (additionalHours * additionalRate);
                
                totalEarnings.textContent = `Celkový výdělek: ${total.toFixed(2)} Kč`;
            });
            
            saveButton.addEventListener("click", function () {
                let savedData = "";

                savedData += `Odpracované hodiny (h): ${document.getElementById("hoursWorked").value}\n`;
                savedData += `Hodinová sazba (kč): ${document.getElementById("hourlyRate").value}\n`;
                savedData += `Odpracované hodiny - doprava (h): ${document.getElementById("additionalHours").value}\n`;
                savedData += `Hodinová sazba - doprava (kč): ${document.getElementById("additionalRate").value}\n`;

                for (let i = 1; i <= 10; i++) {
                    savedData += `Směna ${i}: ${document.getElementById(`row${i}`).value}\n`;
                }

                const totalText = totalEarnings.textContent;
                savedData += `${totalText}`;

                const blob = new Blob([savedData], { type: "text/plain;charset=utf-8" });
                const a = document.createElement("a");
                a.href = URL.createObjectURL(blob);
                a.download = "vypocet.txt";
                a.click();
            });
        });
    </script>
</body>
</html>
