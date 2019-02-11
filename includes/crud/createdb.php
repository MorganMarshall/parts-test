
<?php 
require "includes/header.php";

require "includes/db.connection.php";

?>

<?php


try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE $_POST$parts']";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>




<form action="createdb.php">
<input type="text">
<button class="btn btn-primary">Add</button>

</form>



<script>
function addDB() {
      $.ajax({
           type: "POST",
           url: 'your_url/ajax.php',
           data:{action:'call_this'},
           success:function(html) {
             alert(html);
           }

      });
 }

</script>

<?php require "includes/db.connection.php"; ?>