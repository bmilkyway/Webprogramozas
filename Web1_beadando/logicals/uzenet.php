<?php
if(isset($_POST['nev']) && isset($_POST['email']) && isset($_POST['uzenetszoveg'])) {
    try {
  
        $dbh = new PDO('mysql:host=localhost;dbname=uzenetek', 'webdani', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        

            $sqlInsert = "insert into uzenetek(id, nev, email, uzenet)
                          values(0, :nev, :email, :uzenet)";
            $stmt = $dbh->prepare($sqlInsert); 
            $stmt->execute(array(':nev' => $_POST['nev'], ':email' => $_POST['email'],
                                 ':uzenet' => $_POST['uzenetszoveg'])); 
            if($count = $stmt->rowCount()) {
                $newid = $dbh->lastInsertId();
                $uzenet2 = "<h1>Sikeresen elküldte az alábbi üzenetet: </h1><br> <h2>".$_POST['uzenetszoveg']."</h2>";                     
                $ujra = false;
            }
            else {
                $uzenet2 = "A küldés nem sikerült, kérem próbálja újra!";
                $ujra = true;
            
        }
    }
    catch (PDOException $e) {
        $uzenet2 = "Hiba: ".$e->getMessage();
        $ujra = true;
    }      
}
else {
    header("Location: .");
}
?>