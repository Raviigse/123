<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum o psach</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <section class="baner">
        <h1>Forum wielbicieli psów</h1>
    </section>

    <section class="blok_prawy1">
        <h2>Zapisz się</h2>
        <form method="post" action="logowanie.php" class="form">
            <div>
                <label for="login">login</label>
                <input type="text" name="login">
            </div>
            <div>
                <label for="haslo">hasło</label>
                <input type="password" name="haslo">
            </div>
            <div>
                <label for="haslo1">powtórz hasło</label>
                <input type="password" name="haslo1">
            </div>
            
            <input type="submit" value="zapisz"> 

        </form>

        <?php
            if($_SERVER['REQUEST_METHOD']==='POST'){
                
                $pol = mysqli_connect("localhost","root","","psy");

                $login = mysqli_real_escape_string($pol,$_POST['login']);
                $haslo = mysqli_real_escape_string($pol,$_POST['haslo']);
                $haslo1 = mysqli_real_escape_string($pol,$_POST['haslo1']);
            

            

                if(!empty($login) && !empty($haslo) && !empty($haslo1)){

                    $loginWystepujeWBazie = false;
                    $querry = "SELECT login FROM uzytkownicy;";
                    $wynik = mysqli_query($pol,$querry);

                    if($wynik && mysqli_num_rows($wynik)>0){
                        while($tab = mysqli_fetch_row($wynik))
                        if($login===$tab[0]){
                            $loginWystepujeWBazie = true;
                            break;
                        }
                    }
                
                    
                } else {
                    $msg = '<p> wypelnij wszystkie pola!</p>';
                }


                if(isset($loginWystepujeWBazie) && $loginWystepujeWBazie){
                    $msg = '<p>login występuje w bazie danych, konto nie zostało dodane</p>';
                } else  if(isset($loginWystepujeWBazie) && !$loginWystepujeWBazie){
                    if($haslo===$haslo1){
                        //$hasloZaszyfrowane = sha1($haslo);
                        $userQuery = "INSERT INTO uzytkownicy VALUES (NULL,'$login','$haslo');";
                        $wynik = mysqli_query($pol,$userQuery);
                        if($wynik && mysqli_affected_rows($pol)==1){
                            $msg = '<p>konto zostało dodane</p>';
                        } else {
                            $msg = '<p>przepraszamy konto nie zostało dodane, spróbuj jeszcze raz</p>';
                        }
                    } else {
                        $msg = '<p>Hasła nie są takie same</p>';
                    }
                }

                mysqli_close($pol);
                }


               if(isset($msg)){
                echo $msg;
               } 
        ?>


    </section>

    <section class="blok_lewy">
        <img src="obraz.jpg" alt="foksterier">
    </section>

    <section class="blok_prawy2">
        <h2>Zapraszamy wszystkich</h2>

        <ol>
            <li>właścicieli psów</li>
            <li>weterynarzy</li>
            <li>tych co chcą kupić psa</li>
            <li>tych co lubią psy</li>
        </ol>
        <a href="regulamin.html">Przeczytaj regulamin forum</a>
    </section>

    <section class="stoopka">
        Stronę wykonał: 1234567890
    </section>
</body>
</html>