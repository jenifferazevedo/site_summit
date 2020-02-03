<?php
class Registo{
 
    // database connection and table name
    private $conn;
    private $table_name = "reg_evento";
 
    // object properties
    public $id;
    public $email;
    public $nome;
    public $apelido;
    public $telefone;
    public $status;
    public $codigo;
    public $cod_confirm;
    public $consentimento;
    public $datareg;
    
    public $categoria = array();
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    
    
    // read registos
    function read() {
 
        // select all query
        $query = "SELECT
                    r.id, r.email, r.nome, r.apelido, r.telefone, r.status, r.codigo, r.cod_confirm, r.consentimento, r.datareg
                FROM
                    " . $this->table_name . " r
                ORDER BY
                    r.datareg DESC";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }
    
    
    // read registos
    function read_categorias($user){
 
    // select all query
    $query = "SELECT s.name FROM interest s
                JOIN reg_interest r ON r.interest = s.id
                WHERE r.user = ?
                ORDER BY s.name DESC";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1, $user);
        
    // execute query
    $stmt->execute();
 
    return $stmt;
    }
    
    
    
    
    
    // create registo
    function create(){
 
    // query to insert record
    $query = "INSERT INTO
                " . $this->table_name . "
            SET            
                email=:email, nome=:nome, apelido=:apelido, telefone=:telefone, codigo=:codigo, cod_confirm=:cod_confirm, consentimento=:consentimento";
 
    
    // prepare query
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->email=htmlspecialchars(strip_tags($this->email));
    $this->nome=htmlspecialchars(strip_tags($this->nome));
    $this->apelido=htmlspecialchars(strip_tags($this->apelido));
    $this->telefone=htmlspecialchars(strip_tags($this->telefone));
    $this->status=htmlspecialchars(strip_tags($this->status));
    $this->codigo=htmlspecialchars(strip_tags($this->codigo));
    $this->cod_confirm=htmlspecialchars(strip_tags($this->cod_confirm));    
    $this->consentimento=htmlspecialchars(strip_tags($this->consentimento));    
    $this->datareg=htmlspecialchars(strip_tags($this->datareg));
 
    // VALIDAR TELEFONE (PODE SER NULO ou demasiado grande)    
        
    // bind values
    $stmt->bindParam(":email", $this->email);
    $stmt->bindParam(":nome", $this->nome);
    $stmt->bindParam(":apelido", $this->apelido);
    $stmt->bindParam(":telefone", $this->telefone);
    // $stmt->bindParam(":status", $this->status);
    $stmt->bindParam(":codigo", $this->codigo);
    $stmt->bindParam(":cod_confirm", $this->cod_confirm);    
    $stmt->bindParam(":consentimento", $this->consentimento);
    
 
    // execute query
        
    if($stmt->execute()){
        
        $user = $this->conn->lastInsertId();
        $query = "INSERT INTO
                            reg_interest
                        SET            
                            user=:user, interest=:interest";

            // prepare query
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":user", $user);  
        $stmt->bindParam(":interest", $cat); 
        foreach($this->categoria as $cat) {
            $cat = htmlspecialchars(strip_tags($cat));
            if($stmt->execute()) {
            }
        }
        return true;
    }
    return false;
}


    
    // used when filling up the update registo form
    
    function readOne(){
 
    // query to read single record
    $query = "SELECT
                r.id, r.email, r.nome, r.apelido, r.telefone, r.status, r.codigo, r.cod_confirm, r.consentimento, r.datareg
            FROM
                " . $this->table_name . " r
            WHERE
                r.id = ?
            LIMIT
                0,1";
 
    // prepare query statement
    $stmt = $this->conn->prepare( $query );
 
    // bind id of registo to be updated
    $stmt->bindParam(1, $this->id);
 
    // execute query
    $stmt->execute();
 
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
    // set values to object properties
    $this->email = $row['email'];
    $this->nome = $row['nome'];
    $this->apelido = $row['apelido'];
    $this->telefone = $row['telefone'];
    $this->status = $row['status'];
    $this->codigo = $row['codigo'];
    $this->cod_confirm = $row['cod_confirm'];
    $this->consentimento = $row['consentimento'];        
    $this->datareg = $row['datareg'];    
    }
    
       // used when filling up the update registo form
    
    function validateOne($tipo) {
 
        $campo ="";
        
        if ($tipo == "V") {
            $campo = "r.codigo = ? ";
            $search_cod = $this->codigo;
        } else if ($tipo == "C") {           
            $campo = "r.cod_confirm = ? ";
            $search_cod = $this->cod_confirm;
        } else if ($tipo == "A") {
            $campo = "r.cod_confirm = ? AND r.status < 2 ";
            $search_cod = $this->cod_confirm;
        }
        
        // query to read single record
        $query = "SELECT
                    r.id, r.email, r.nome, r.apelido, r.telefone, r.status, r.codigo, r.cod_confirm, r.consentimento, r.datareg
                FROM
                    " . $this->table_name . " r
                WHERE
                    r.email = ? AND " . $campo . " 
                LIMIT
                    0,1";

        // prepare query statement
        $stmt = $this->conn->prepare( $query );
        
        // bind id of registo to be updated
        $stmt->bindParam(1, $this->email);
        $stmt->bindParam(2, $search_cod);
        
        // execute query
        $stmt->execute();

        // get retrieved row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // set values to object properties
        $this->id = $row['id'];
        $this->email = $row['email'];
        $this->nome = $row['nome'];
        $this->apelido = $row['apelido'];
        $this->telefone = $row['telefone'];
        $this->status = $row['status'];
        $this->codigo = $row['codigo'];
        $this->cod_confirm = $row['cod_confirm'];
        $this->consentimento = $row['consentimento'];
    }
    


    // update the registo
    function update(){
 
    // update query
    $query = "UPDATE
                " . $this->table_name . "
            SET
                email = :email,
                nome = :nome,
                apelido = :apelido,
                telefone = :telefone,
                status = :status,
                codigo = :codigo,
                cod_confirm = :cod_confirm,
                consentimento = :consentimento
            WHERE
                id = :id";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->id=htmlspecialchars(strip_tags($this->id));
    $this->email=htmlspecialchars(strip_tags($this->email));
    $this->nome=htmlspecialchars(strip_tags($this->nome));
    $this->apelido=htmlspecialchars(strip_tags($this->apelido));
    $this->telefone=htmlspecialchars(strip_tags($this->telefone));
    $this->status=htmlspecialchars(strip_tags($this->status));
    $this->codigo=htmlspecialchars(strip_tags($this->codigo));
    $this->cod_confirm=htmlspecialchars(strip_tags($this->cod_confirm));
    $this->consentimento=htmlspecialchars(strip_tags($this->consentimento));
 
    // bind new values
    $stmt->bindParam(':id', $this->id);
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':nome', $this->nome);
    $stmt->bindParam(':apelido', $this->apelido);
    $stmt->bindParam(':telefone', $this->telefone);
    $stmt->bindParam(':status', $this->status);
    $stmt->bindParam(':codigo', $this->codigo);
    $stmt->bindParam(':cod_confirm', $this->cod_confirm);
    $stmt->bindParam(':consentimento', $this->consentimento);
 
    // execute the query
    if($stmt->execute()) {
        return true;
        }
    return false;
    }
    

    
    // delete the registo
    function delete(){
        // delete query
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";

        // prepare query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->id=htmlspecialchars(strip_tags($this->id));

        // bind id of record to delete
        $stmt->bindParam(1, $this->id);

        // execute query
        if($stmt->execute()){
            
            //delete the category conection table
            $query = "DELETE FROM reg_interest
                            WHERE user = ?";

            // prepare query
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $this->id); 

            if( $stmt->execute() ) {
            }   
            return true;
        }
        return false;
    }
    
    
    
    
    // search registos
    function search($keywords){
 
    // select all query
    $query = "SELECT
                r.id, r.email, r.nome, r.apelido, r.telefone, r.status, r.codigo, r.cod_confirm, r.consentimento, r.datareg
            FROM
                " . $this->table_name . " r
            WHERE
                r.email LIKE ? OR r.nome LIKE ? OR r.apelido LIKE ? OR r.telefone LIKE ?
            ORDER BY
                r.datareg DESC";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $keywords=htmlspecialchars(strip_tags($keywords));
    $keywords = "%{$keywords}%";

    // bind
    $stmt->bindParam(1, $keywords);
    $stmt->bindParam(2, $keywords);
    $stmt->bindParam(3, $keywords);
    $stmt->bindParam(4, $keywords);
    
    // execute query
    $stmt->execute();
 
    return $stmt;
    }
    
   
    
    // read registos with pagination
    public function readPaging($from_record_num, $records_per_page){
 
    // select query
    $query = "SELECT
                r.id, r.email, r.nome, r.apelido, r.telefone, r.status, r.codigo, r.cod_confirm, r,consentimento, r.datareg
            FROM
                " . $this->table_name . " r
            ORDER BY r.datareg DESC
            LIMIT ?, ?";
 
    // prepare query statement
    $stmt = $this->conn->prepare( $query );
 
    // bind variable values
    $stmt->bindParam(1, $from_record_num, PDO::PARAM_INT);
    $stmt->bindParam(2, $records_per_page, PDO::PARAM_INT);
 
    // execute query
    $stmt->execute();
 
    // return values from database
    return $stmt;
    }
    
 
    
    // used for paging registos
    public function count(){
    $query = "SELECT COUNT(*) as total_rows FROM " . $this->table_name . "";
 
    $stmt = $this->conn->prepare( $query );
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
    return $row['total_rows'];
    }


}
?>