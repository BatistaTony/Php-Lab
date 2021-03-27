
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<script src="script.js"></script>
</head>
<body>
  
 
  <div>
      <label for="operation">Operation</label>
      <select  id="operation" name="operation">
        <option value="sum">sum</option>
        <option value="subr">Subtration</option>
        <option value="devid">Devision</option>
        <option value="mult">Multiplication</option>
      </select>
    </div>

    <div>
      <label for="firstN">First Number</label>
      <input type="number" id="firstN" name="firstN">
    </div>
<br>
    <div>
      <label for="secN">Seconde Number</label>
      <input type="number" id="secN" name="secN">
    </div>

    <p id='result'></p>

    <button onClick="getCalculation()">Calculate</button>
  
</body>
</html>
