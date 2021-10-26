<?php

//CHECK IF FORM WAS SENT
if (!empty($_POST)) {
    //FORM SENT
    //CHECKING EVERY INPUT FILLED UP
    if (isset($_POST["username"], $_POST["email"], $_POST["password"]) && !empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
        //FORM IS COMPLETE

        //SECURE DATAS
        $pseudo = strip_tags($_POST["username"]);

        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            die("l'adresse email est incorrecte");
        }

        //HASHING PASSWORD
        $password = password_hash($_POST["password"], PASSWORD_ARGON2ID);

        //UPLOAD TO DATABASE
        require_once "../core/Connect.php";

        $sql = "INSERT INTO 

                `users`
                (`user_name`, `user_password`, `user_email`, `user_role`) 
                
                VALUES 
                (:pseudo, :password, :email, '[\"ROLE_USER\"]')";

        $query = $pdo->prepare($sql);

        $query->bindValue(":pseudo", $pseudo, PDO::PARAM_STR);
        $query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
        $query->bindValue(":password", $password, PDO::PARAM_STR);

        $query->execute();

        echo '<p>Votre compte à bien été crée</p>';
        echo '<a href="../index.php">retour à la page d\'acceuil';
    } else {
        die("Le formulaire est incomplet");
    }
}
?>
<form action="inscription.php" method="post">
    <div>
        <label for="pseudo">pseudo</label>
        <input type="text" name="username" id="pseudo">
    </div>
    <div>
        <label for="password">password</label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <label for="email">email</label>
        <input type="email" name="email" id="email">
    </div>
    <button type="submit">M'inscrire</button>

</form>