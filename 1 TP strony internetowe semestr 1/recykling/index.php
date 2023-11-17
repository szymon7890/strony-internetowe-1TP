<?php
//jeśli server wymaga metody post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //zmienna name posiada formualrz z html połączenie formularza który ma name o nazwie name
    $name = $_POST["name"];
    //zmienna number posiada formualrz z html połączenie formularza który ma name o nazwie number
    $number = $_POST["number"];
    //zmienna password1 posiada formualrz z html połączenie formularza który ma name o nazwie password1
    $password1 = $_POST["password1"];
    //zmienna password2 posiada formualrz z html połączenie formularza który ma name o nazwie password2
    $password2 = $_POST["password2"];
    
    //jeśli zmienna o nazwie password1 jest równa zmiennej password2 to wykonaj kod
    if ($password1 == $password2) {
        //wyświetl wiadomość kiedy hasła będą takie same "Hasła są zgodne"
        echo "Hasła są zgodne.<br>";
        //wyświetl z formularza imię co użytkownik wpisał
        echo "Imię: $name<br>";
        //wyświetl z formularza numer co użytkownik wpisał
        echo "Liczba: $number<br>";
    //w przeciwnym wypadku gdy hasła nie są takie same wyświetl informacje "Hasła nie są zgodne. Proszę spróbować ponownie."
    } else {
        echo "Hasła nie są zgodne. Proszę spróbować ponownie.<br>";
    }
}
?>