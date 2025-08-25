<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Page</title>
  <style>
  *{
      margin:0;
      padding:0;
      box-sizing:border-box;
  }
  body{
      height:100vh;
      width:100vw;
      display:flex;
      justify-content:center;
      align-items:center;
      flex-direction:column;
      gap:10px;
      overflow:hidden;
      background-color:black;
      padding:20px;
  }
      img{
          width:150px;
          height:150px;
          border-radius:20px;
      }
      
p{
    color:darkblue;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    font-size:17px;
    max-width:700px;
    padding:10px 5px;
    overflow:hidden;
    
}
h3{
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    color:black;
    overflow:hidden;
}
form{
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    gap:20px;
}
div{background-color:lightgrey;padding:10px;display:flex;justify-content:center;align-items:center;flex-direction:column;gap:10px;border-radius:10px;}
input{text-align:center;border-radius:10px;padding:3px 5px;}
button{color:black  ;width:100px;text-align:center;padding:5px 10px;font-weight:bold;font-size:16px;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    border:none;
    border-radius:5px;
    transition:0.5s ease;
    height:45px;
    
}
#back{
    background-color:red;
}
#buy{
    background-color:lightgreen;

}
@media(max-width:220px){
    body{background-color:lightgrey;}

}
#buy:hover{
    color:white;
    background-color:black;
    font-size:20px;
    width:120px;
}
#back:hover{color:white;background-color:black;font-size:20px;width:120px;}

      
  </style>
</head>
<body>
    <div>
   <img src="mario.jpg" ></img>
   <h3>Mario &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pret: 10 lei</h3>
   <form method="post" action="">
       <input type="text" name="name" id="name" placeholder="NUME COMPLET"/>
       
       <input type="text" name="adress" id="adress"  placeholder="ADRESA COMPLETA"/>
       
       <input type="email" name="email" id="email" placeholder="EMAIL" />
       
       <input type="phone" name="phone" id="phone" placeholder="TELEFON" />
       
       <a href="store.php"><button name="back" id="back">INAPOI</button></a> <button name="buy" id="buy">CUMPARA</button>
       
       <p>Plata se face la primirea produsului!</p>
       
       
   </form>
   <?php
   $produs="mario";
   if(isset($_POST["back"])){
       header("Location:store.php");
   }
   $ok=1;
   if(!isset($_POST["buy"])){return;}
       if(!isset($_POST["name"])) $ok=0;
       if(!isset($_POST["email"])) $ok=0;
       if(!isset($_POST["adress"])) $ok=0;
       if(!isset($_POST["phone"])) $ok=0;
       
       if(trim($_POST["name"])=='') $ok=0;
       if(trim($_POST["email"])=='') $ok=0;
       if(trim($_POST["adress"])=='') $ok=0;
       if(trim($_POST["phone"])=='') $ok=0;
       
       if($ok==0){
           echo "<p style='color:red;font-weight:bold'>Completeaza toate spatiile !</p>";
           return;
       }
       
       
       $name=$_POST["name"];
       $adress=$_POST["adress"];
       $email=$_POST["email"];
       $phone=$_POST["phone"];
       
 $servername = "localhost"; // usually "localhost"
$username   = "u665207128_root";      // your DB username
$password   = "Imoral1@";          // your DB password
$dbname     = "u665207128_store";    // your database name

// 2. Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// 3. Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 4. Prepare the query
$stmt = $conn->prepare("INSERT INTO comenzi (produs,nume, adresa, email, telefon) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss",$produs, $name, $adress, $email, $phone);

// 5. Execute
if ($stmt->execute()) {
    echo "<p style='color:green;font-weight:bold;'>Produsul e pe drum !</p>";
} else {
    echo "<p style='color:red;'>Eroare: " . $stmt->error . "</p>";
}

$stmt->close();
$conn->close();
       
   
   ?>
   </div>
    
</body>
</html>
