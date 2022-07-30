<html>
<title></title>
<link rel="stylesheet" type="text/css" href="nnn.css">
<body>
        <form>
         <h2>The sensor Value</h2>
        <div>
        <input type="number" class=""  id="number"  name="number"/>
</div>
</br>
        <button>Submit</button>
        </br>
        <h3>

        The Value of the sensor is
        <?php
        ECHO $_GET['number'];
        ?>
        </h3>
</form>
</body>
</html>