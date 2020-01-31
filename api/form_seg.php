<!DOCTYPE text/html>
<html>
<head>
    <title>Form de Registo</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>Registo</h1> 
    <form method="post" action="./registo/create.php" target="_self">
        Nome:<br>
        <input type="text" name="nome" id="nome" size="30" lenght="30"><br>
        Apelido:<br>
        <input type="text" name="apelido" id="apelido" size="30" maxlenght="30"><br>
        email:<br>
        <input type="text" name="email" id="email" size="50" maxlenght="50"><br>
        Telefone:<br>
        <input type="text" name="telefone" id="telefone" size="15" maxlenght="15"><br>
        <br>
        
        <select name="categoria[]" id="categoria" multiple="multiple"> 
            
            <?php 
                include_once './config/database.php';
                $db = New Database();

                // get database connection
                $con = mysqli_connect($db->host,$db->username,$db->password,$db->db_name);

                if (mysqli_connect_errno()) {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                  exit();
                }
                $sql = mysqli_query($con, "SELECT id, name FROM interest");

                while ($row = $sql->fetch_assoc()){
                    $id_categoria=  $row["id"] ;
                    $nome_categoria =  $row["name"] ;

                    // echo "<p>Resultado! " . $nome_categoria . " " . $id_categoria . "</p>";

                    echo '<option value="' . $id_categoria  . '">' . $nome_categoria . '</option>';
                }
            ?>
        </select> 
        <br><br>  
        <input type="reset" value="Cancelar"> 
        <input type="submit" value="Confirmar">
    
    </form>   
   
        
</body>

</html>