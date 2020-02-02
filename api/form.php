<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Registo</title>
  </head>
  <body>
    <h1>Registo</h1>

    <div class="container" style="max-width: 800px;"> 

        <form method="post" action="./registo/create.php" class="needs-validation form-group">
            <!-- primeira linha com nome -->
            <div class="form-row">
                
                <!-- grupo com primeiro nome -->
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="nome" id="nome" value="" required placeholder="Nome" maxlength="30">
                </div>

                <!-- grupo com último nome -->
                <div class="form-group col-md-6"> 
                    <input type="text" class="form-control" name="apelido" id="apelido" value="" required placeholder="Apelido" maxlength="30">
                </div>

            </div>
            <!-- fim da primeira linha com nome -->



            <!-- linha com email -->
            <div class="form-row">

                <!-- grupo com email -->
                <div class="form-group col">
                  <input type="text" class="form-control" name="email" id="email" value="" required placeholder="@E-mail" maxlenght="50">
                </div>

            </div>
            <!-- fim da linha com email -->



            <!-- linha com telefone -->
            <div class="form-row">

                <!-- grupo com telefone -->
                <div class="form-group col">
                  <input type="text" class="form-control" name="telefone" id="telefone" value="" required placeholder="Telefone" maxlenght="15">
                </div>

            </div>
            <!-- fim da linha com telefone -->


            <!-- linha com áreas de interesse -->
            <div class="form-row">

                <!-- grupo com áreas de interesse -->
              <div class="form-group col">
                <select class="custom-select"  name="categoria[]" id="categoria" multiple="multiple" required>
                  <option selected disabled value="">Escolhe a tua area de interesse </option>
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

                            echo '<option value="' . $id_categoria  . '">' . $nome_categoria . '</option>';
                        }
                    ?>
                </select>

                <!-- grupo com erro de validação -->
                <div class="invalid-feedback">
                  Please select a valid state.
                </div>

              </div>
            </div>
            <!-- fim da linha com áreas de interesse -->


            <!-- linha com acções de consentimento e envio -->
            <div class="form-row">

                <!-- grupo com consentimento -->
                <div class="form-group col-md-9">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="consentimento" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                          Agree to terms and conditions
                        </label>
                    </div>
                </div>


                <!-- grupo com botão de envio -->
                <div class="form-group col-md-3">
                  <button class="btn btn-block btn-primary" type="submit">Pré-Registo</button>
                </div>
                
            </div>
            <!-- fim da linha com acções de consentimento e envio -->
          </form>

        </div>


        

        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>





<!--
            <div class="form-row">
              <div class="col-md-3 mb-3">
                <input type="text" class="form-control" id="validationCustom01" value="NOME" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              <div class="col-md-3 mb-3">
                <input type="text" class="form-control" id="validationCustom02" value="APELIDO" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="validationCustom03">City</label>
                <input type="text" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>
            </div>

              <div class="form-row">
                  <div class="form-group col-md-2">
                    <label for="validationCustom03">Telefone </label>
                    <input type="text" class="form-control" id="validationCustom03" required>
                    <div class="invalid-feedback">
                      Please provide a valid city.
                    </div>
                  </div>
                </div>
              
              <div class="form-row">
              <div class="form-group col-md-6">
                <label for="validationCustom04">State</label>
                <select class="custom-select" id="validationCustom04" required>
                  <option selected disabled value="">Escolhe a tua area de interesse </option>
                  <option>1...</option>
                  <option>2...</option>
                  <option>3...</option>
                  <option>4...</option>
                  <option>5...</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid state.
                </div>
              </div>
         

            
            <div class="form-row">
            <div class="form-group col-md-8">


              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                  Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                  You must agree before submitting.
                </div>
              <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
          </div>
        -->
