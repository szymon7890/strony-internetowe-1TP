<?php

    /*
        -- Tworzenie bazy danych formularzHTML
        CREATE DATABASE formularzHTML;

        -- Tworzenie tabeli dane
        CREATE TABLE dane (
            id INT NOT NULL PRIMARY KEY,
            name TEXT,
            lastName TEXT,
            BirthDate DATE,
            email TEXT,
            NumberPhone VARCHAR(30)
        );

        W powyższej notatce znajduje się kod SQL służący do utworzenia bazy danych o nazwie "formularzHTML" oraz tabeli "dane." Tabela "dane" ma następujące kolumny:

            id: Jest to klucz główny tabeli (PRIMARY KEY) i nie może być wartością NULL. Automatycznie generuje unikalne identyfikatory.
            name: Przechowuje imię (typ danych TEXT).
            lastName: Przechowuje nazwisko (typ danych TEXT).
            BirthDate: Przechowuje datę urodzenia (typ danych DATE).
            email: Przechowuje adres e-mail (typ danych TEXT).
            NumberPhone: Przechowuje numer telefonu (typ danych VARCHAR z maksymalną długością 30 znaków).

        Ten kod SQL można uruchomić na serwerze bazy danych, aby utworzyć bazę danych i tabelę, która będzie przechowywać dane z formularza.
    */

    $servername = "localhost"; // Adres serwera bazy danych MySQL.
    $username = "root"; // Nazwa użytkownika bazy danych.
    $password = ""; // Hasło użytkownika bazy danych (puste w tym przypadku).
    $dbname = "formularzHTML"; // Nazwa bazy danych, do której będziemy się łączyć.
    
    $conn = new mysqli($servername, $username, $password, $dbname); // Nawiązanie połączenia z bazą danych MySQL.
    
    if ($conn->connect_error) {
        die("" . $conn->connect_error); // Jeśli wystąpił błąd podczas łączenia z bazą danych, skrypt zostaje przerwany, a błąd zostaje wyświetlony.
    }
    
    $name = $_POST["name"]; // Pobranie wartości z formularza przekazanej za pomocą metody POST.
    $lastname = $_POST["lastname"];
    $birthdate = $_POST["birthdate"];
    $email = $_POST["email"];
    $numberphone = $_POST["numberphone"];
    
    $sql = "INSERT INTO `dane`(`name`, `lastName`, `BirthDate`, `email`, `NumberPhone`) VALUES ('$name', '$lastname', '$birthdate', '$email', '$numberphone')";
    // Zdefiniowanie zapytania SQL do wstawienia nowego rekordu do tabeli "dane" w bazie danych.
    
    $result = $conn->query($sql); // Wykonanie zapytania SQL na bazie danych.
    
    if ($result == TRUE) {
        echo "Dodano nowy rekord do bazy danych."; // Jeśli zapytanie SQL zakończyło się sukcesem, zostaje wyświetlony komunikat o dodaniu rekordu.
    } else {
        echo "Błąd:" . $sql . "<br>" . $conn->error; // W przeciwnym razie wyświetlany jest komunikat o błędzie oraz szczegóły błędu.
    }
    
    $conn->close(); // Zakończenie połączenia z bazą danych.    

?>