
    <form method="post">
        <Label>Podaj Imię</Label><br>
        <input name="text" type="text"><br>
        <label for="">Podaj Nazwisko</label><br>
        <input name="nazwiskp" type="text"><br>
        <label for="">Email</label><br>
        <input name="email" type="email" required><br>
        <label for="">Kolor</label>
        <input name="color" type="color"><br>
        <label for="">Data</label><b></b>
        <input name="date" type="date"><br>
        <label for="">Telefon</label><br>
        <input name="telefon" type="tel"><br>
        <input type="submit"><br>
    </form>

    


<?php 
      
      if($_POST){
        // var_dump($_POST);
        $text = trim($_POST["text"]);
        if(strlen($text) < 3){
            echo "tekst jest za krotki";
        }
        $email = trim($_POST["email"]);
        // if(!preg_match("/[a-z0-9]+@[a-z0-9]+\.[a-z]{2,3}",$email)){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            echo "<p>email jest niepoprawny</p>";
        }
      }
      

?>