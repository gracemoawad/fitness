<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="calculator.css" rel="stylesheet">
  <title>Calorie Calculator</title>
</head>
<body>

  <h1>Calorie Calculator</h1>
  <form id="calculator-form">
    <label>
      Weight (kg):
      <input type="number" id="weight" placeholder="Weight">
    </label>
    <br>
    <label>
      Height (cm):
      <input type="number" id="height" placeholder="Height">
    </label>
    <br>
    <label>
      Age:
      <input type="number" id="age" placeholder="Age">
    </label>
    <br>
    <label>
      Gender:
      <select id="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
    </label>
    <br>
    <label>
      Activity Level:
      <select id="activity_factor">
        <option value="sedentary">Sedentary</option>
        <option value="lightlyActive">Lightly Active</option>
        <option value="moderatelyActive">Moderately Active</option>
        <option value="veryActive">Very Active</option>
        <option value="superActive">Super Active</option>
      </select>
    </label>
    <br>
    <label>
      Goal:
      <select id="goal">
        <option value="maintain">Maintain Weight</option>
        <option value="gain">Gain Weight</option>
        <option value="lose">Lose Weight</option>
      </select>
    </label>
    <br>
    <label>
      Gain/Loss Amount (calories/day):
      <select id="gain_loss_amount">
        <option value="-1000">Lose 2 Pounds per Week</option>
        <option value="-750">Lose 1.5 Pounds per Week</option>
        <option value="-500">Lose 1 Pound per Week</option>
        <option value="-250">Lose 0.5 Pounds per Week</option>
        <option value="0" selected>Stay the Same Weight</option>
        <option value="250">Gain 0.5 Pound per Week</option>
        <option value="500">Gain 1 Pound per Week</option>
        <option value="750">Gain 1.5 Pounds per Week</option>
        <option value="1000">Gain 2 Pounds per Week</option>
      </select>
    </label>
    <br>
   <a href=#gr><button type="button" id="calculate"> Calculate</button></a><a href="/home.php" >Go Home</a>
  </form>
  <br>
  <div class="res">
  <p id="result"> </p>
</div>
<div id="gr"></div>

  <script> document.getElementById("calculate").addEventListener("click", calculate);

function calculate() {
  const weight = parseFloat(document.getElementById("weight").value);
  const height = parseFloat(document.getElementById("height").value);
  const age = parseFloat(document.getElementById("age").value);
  const gender = document.getElementById("gender").value;
  const goal = document.getElementById("goal").value;
  const gainLossAmount = parseFloat(document.getElementById("gain_loss_amount").value);
  const activityFactor = document.getElementById("activity_factor").value;

  const bmr = gender === "male" ? 88.362 + (13.397 * weight) + (4.799 * height) - (5.677 * age) : 447.593 + (9.247 * weight) + (3.098 * height) - (4.330 * age);

  const activityFactors = { sedentary: 1.2, lightlyActive: 1.375, moderatelyActive: 1.55, veryActive: 1.725, superActive: 1.9 };

  if (activityFactors.hasOwnProperty(activityFactor)) {
    const totalCalories = bmr * activityFactors[activityFactor];

    let resultMessage = `Your estimated daily calorie needs: ${totalCalories.toFixed(2)} calories . `;
    if ((goal === "gain" || goal === "lose") && !isNaN(gainLossAmount)) {
      const adjustedCalories = totalCalories + gainLossAmount;
      resultMessage += `Your target daily calories: ${adjustedCalories.toFixed(2)} calories`;
    }

    document.getElementById("result").textContent = resultMessage ;
  } else {
    document.getElementById("result").textContent = "Invalid activity factor input.";
  }
}</script>
</body>
</html>
