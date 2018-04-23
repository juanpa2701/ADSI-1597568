<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <title>calculator</title>
    </head>
    <body>
      <form action="calc.php" method="get">
          <input class="number1" type="number" name="number1">
        <br>
        <select name="operation">
          <option value="">Select your operation</option>  
          <option value="1">Sum</option>
          <option value="2">Subtract</option>
          <option value="3">Mult</option>
          <option value="4">Div</option>
          <option value="5">Module of the division</option>
          <option value="6">Logarithm</option>
          <option value="7">x²</option>
          <option value="8">x^y</option>
          <option value="9">Divide between zero</option>
          <option value="10">²&radic;x</option>
          <option value="11">y&radic;x</option>
          
        </select>
        <br>
        <input class="number2" type="number" name="number2">
        <br>
        <button class="btn" type="submit">Operate</button>
      </form>
    </body>
</html>
