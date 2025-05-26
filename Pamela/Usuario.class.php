<?php
class Usuario{

    public function login($email, $senha){
        global $pdo;

        $sql = "SELECT * FROM login WHERE email = :email AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha",$senha);

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            
            $_SESSION['id'] = $dado['id'];

            return tue;
        }else{
            return false;
         }

    }
}

?>