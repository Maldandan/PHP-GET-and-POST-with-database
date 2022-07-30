# PHP GET and POST with DATABASE 

## Creating a Database

Follow the next steps to create a database:

* Visit the following website.
`https://www.phpmyadmin.net/`
* press support button.
* click on quick installation guide. 
* For window installation, press on XAMPP.
* Choose Which version suits your PC.
* casually install XAMPP.

The to connect the GET and POST files, place them in `C:\xampp\htdocs` 

After following the installation steps, create a database with your table identifying your variables etc.


**make sure to start XAMPP control panel and start Apache and MySQL for the GET and POST to function!**

![Screenshot 2022-07-30 190137](https://user-images.githubusercontent.com/109004035/181925657-377aa541-d5dc-4027-8ad4-24c3fca09fe0.jpg)



## Using the GET Function 
HTML was used for creating the page and CSS for the style editing.

**HTML Code**: 

```
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
```
 the ` <?php ECHO $_GET['number'];  ?> ` part of the code is the GET PHP function 

**CSS Code**:
```

body{
	font-family: arial;
	font-size: 18px;
	margin: 0;
	color: purple;
  background-color: rgb(228, 228, 228);
	display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
}
button{
  font-family: arial;
	font-size: 18px;
	width: 750px;

}

  input {
    font-family: arial;
    font-size: 18px;
    width: 750px;
  }
  h2{
    color: red;
    font-size: 18px;
    text-align: center;
  }
  h3{
    color: purple;
    font-size: 15px;
    text-align: center;
  }
```
To correctly access the page, and for the GET to function, you should go to ' http://localhost/YOUR_FILE_NAME/index.php ' , replace YOUR_FILE_NAME with the name of your file where you saved your GET files!

**Results**:

![Screenshot 2022-07-30 190357](https://user-images.githubusercontent.com/109004035/181925418-773f300f-ecf0-4037-b033-97b0c379f5b8.jpg)

![Screenshot 2022-07-30 190423](https://user-images.githubusercontent.com/109004035/181925417-c1cd8a10-7563-4173-af02-947630dd78a7.jpg)

## Using the POST Function
**HTML Code** : 
```
<html>
<title>Sensor Value</title>
<link rel="stylesheet" type="text/css" href="nnn.css">
<body>
        <form action="connect.php" method="post">
         <h2>The sensor Value</h2>
        <div>
        <input type="number" class=""  id="number"  name="value"/>
</div>
</br>
        <button>Submit</button>
        
</form>
</body>
</html>
```

**PHP code** :
```
<?php
    $value = $_POST['value'];
// Database connection
$conn = new mysqli('localhost','root','','database');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into ValuesList(value) values(?)");
    $stmt->bind_param("i", $value);
    $execval = $stmt->execute();
    echo $execval;
    $execval = $stmt->execute();
    echo "The value have been added successfully...";
    $stmt->close();
    $conn->close();
}
?>
```
**For CSS Code**, I have used the same previous file from GET for same Styles!

to access the POST page, similarly to the previous step, go to ` http://localhost/YOUR_FILE_NAME/index.html ` . Note that here the extension is html!
since this provided html file is using the POST PHP file!

**Here are the Results:**

![Screenshot 2022-07-30 191938](https://user-images.githubusercontent.com/109004035/181926026-0c9570a2-4085-4bab-9a80-8511468de1df.jpg)
![Screenshot 2022-07-30 192001](https://user-images.githubusercontent.com/109004035/181928642-ffca19fd-2f16-4fa6-850b-299359bd6d53.jpg)

To access your database table, click on the MySQL Admin Button!

![Screenshot 2022-07-30 193453](https://user-images.githubusercontent.com/109004035/181929893-8b660d59-4a69-40fe-907b-566adeb3c72d.jpg)

![Screenshot 2022-07-30 193607](https://user-images.githubusercontent.com/109004035/181930968-4718d003-3900-4619-a1d3-90fa50fe8030.jpg)
















