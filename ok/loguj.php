<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie do forum</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <section class="baner">
        <h1>Logowanie</h1>
    </section>

    <section class="blok_prawy1">

    <?php
        if(isset($_GET['wyloguj']) and $_GET['wyloguj']=='true'){
            session_unset();
            session_destroy();
            header('location: logowanie.php');
        }

        if(isset($_SESSION['login']) && $_SESSION['login']!=""){
            $msg = "<p>Jesteś już zalogowany</p>";
            echo '<p><a href="loguj.php?wyloguj=true>Wyloguj"</p>';

            $query2="SELECT login FROM uzytkownicy ";
            $wynik2=mysqli_query($pol,$query2);
            echo "$wynik2";

        } else {


    ?>
        <h2>Zaloguj się</h2>
        <form method="post" action="loguj.php" class="form">
            <div>
                <label for="login">login</label>
                <input type="text" name="login">
            </div>
            <div>
                <label for="haslo">hasło</label>
                <input type="password" name="haslo">
            </div>
            <input type="submit" value="zaloguj"> 

        </form>

        <?php
            if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['login']) && isset($_POST['haslo'])){
                
                $pol = mysqli_connect("localhost","root","","psy");

                $login = mysqli_real_escape_string($pol,$_POST['login']);
                $haslo = mysqli_real_escape_string($pol,$_POST['haslo']);
            

                if(!empty($login) && !empty($haslo)){


                    //$hasloZaszyfrowane = sha1($haslo);
                    //$query = "SELECT login FROM uzytkownicy WHERE login='$login' and haslo='$hasloZaszyfrowane'";   
                    $query = "SELECT login FROM uzytkownicy WHERE login='$login' and haslo='$haslo'";
                    $wynik = mysqli_query($pol,$query);
                    if($wynik && mysqli_num_rows($wynik)==1){
                        $_SESSION['login'] = $login;
                        session_regenerate_id(true);
                        header('Location: loguj.php');
                        exit;
                        $msg = "<p>Witaj $login, zostałeś zalogowany, odświerz stronę</p>";
                    } else {
                        $msg = "<p>Błędny user lub hasło</p>";
                    }


                } else {
                    $msg = '<p>Wypełnij wszystkie pola</p>';
                }
                
                mysqli_close($pol);
                }


               if(isset($msg)){
                echo $msg;
               } 
        ?>

        <?php
            }
        ?>

    </section>

    <section class="blok_lewy">
        <img src="obraz.jpg" alt="foksterier">
    </section>

    <section class="blok_prawy2">
        <?php
            print_r($_SESSION);
        ?>
    </section>

    <section class="stoopka">
        Stronę wykonał: 1234567890
    </section>
</body>
</html>