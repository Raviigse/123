<?php 

/*
Sprawdzian PHP (1)

Łączna ilość punktów: 48.
Czas: 45 min. 

Prace umieszczamy w formie pliku z odpowiedziami na pulpicie w formie spakowanej podpisanej imieniem i nazwiskiem.
*/

#######  
#Zadanie 1 (3pkt) Zakomentuj poniższe linie kodu wykorzystując wszytkie znane Ci 3 sposoby (każdą inaczej) 
#######

echo "Użyj na nas komentarza :)";

$y = 4;

echo <<< END
    wielo
    #poziomowy
    tekst<br><br>
END;

#######
#zadanie 2 (2 pkt) popraw nazwy/wartości poniższych zmiennych na prawidłowe i wypisz za pomocą echo lub var_dump() zależnie od rodzaju zmiennej:
#######

//$abc = 3; 
//$TEST.OWA = null;
//$abc = 4,43;
//$p0czątek = true;
//$0test = "Marysia";


#######
#zadanie 3 (5 pkt). Wykonaj na poniższych zmiennych działania i wypisz ich wyniki: y podzielić przez x, y odjąć x, y do potęgi z, z modulo y, y do potęgi z
#######

$x = 100;
$y = 20;
$z = 2;


#######
# zadanie 4 (5 pkt). Na poniższej zmiennej x, wykonaj kolejno dzialania (x+y, x**y, x-y) z wykorzystaniem operatorów przypisania  (+=, -= etc) oraz zmiennej y .
# wypisz wartość zmienniej x po wykonaniu wszystkich działań;
# ostatni wynik zapisz do zmiennej $wynik i wykonaj na niej inkrementację oraz dekrementację korzystając z odpowiednich operatorów wykonujących działania po wypisaniu zmiennej.
#######

$x = 50;
$y = 2;


#######
# zadanie 5 (3 pkt)
# Korzystając z operatora !! konkatenacji !! oraz własnej inwencji ułóż zdanie używając poniższych zmiennych i wypisz je za pomocą funkcji echo lub print.
# !!! Wypisz to samo zdanie, ale zamiast wartości zmiennych wypisz ich nazwy wraz z $ ;
#######

$a = "Dziadek";
$b = "Babcia";
$c = "rower";


#######
#zadanie 6.(3 pkt) Korzystając z odpowiedniej funkcji (implode lub join) oraz operatora konkatenacji wypisz elementy poniższej tablicy w zadaniu (rozdzielając je przecinkiem). 
#uwaga! posortuj elementy tablicy malejąco przed wypisaniem!
#######
$tab01 = ["Romek", "Antosia", "Wiesiek"];
echo "Wybrano nowy komitet, w jego skład wchodzą:"; //w tej lini dopisz swoje rozwiązanie


#######
# zadanie 7 (7 pkt)
/* 
Utwórz zmienną $t i przypisz do niej tablicę dowolnych wartościach typu integer lub float (min 5 wartości). Klucze nie mają znaczenia (tablica zwykła).
następnie: 
    a) wypisz ją funkcją wskazującą klucze i wartości poszczególnych elementów
    b) wypisz przedostatni element tablicy, 
    b) dodaj kolejny element tablicy korzystając z funkcji "automatycznej indeksacji" dla nowego elementu "[]" i wypisz wszystkie elementy tabeli korzystając z funkcji implode()
    c) zmień wartość pierwszego elementu na dowolny i wypisz go
*/

#######
# zadanie 8 (14 pkt)
/*
Utwórz tablicę asocjacyjną "klasa", która będzie zawierała pary zmiennych numer w dzienniku => imię i nazwisko ucznia
Tablica powinna zawierać przynajmniej 3 elementy. Tablicę przypisz to zmiennej $klasa. Następnie:
      a) Wypisz tablicę za pomocą funkcji print_r()
      b) Wypisz imiona ucznków z nawyższym i najniższym numerem
      c) Dodaj nowy element tablicy (nowego  ucznia) bez zmiany samej definicji tablicy tj. nie zmieniając miejsce definicji tablicy.
      d) Korzystając z funkcji foreach wypisz imiona ucznków z tablicy $klasa.
      e) Posortuj tablicę po numerkach w dzienniku rosnąco 
      f) Posortuj tablicę po imionach rosnąco - nie zwracaj uwagi na polskie znaki
      f) Korzystając z funkcji foreach wypisz wszystkie pary w formacie "numer w dzinniku -> imię i nazwiko ucznia" (klucz => wartosc)
*/

#######
# zadanie 9 (4 pkt)
/* 
   Dla poniższych tablic z użyciem odpowiednich operatorów tablicowych:

    $t1 = ["abc","11",12];
    $t2 = ["12", "11", "abc"];
    $t3 = ["abc", 9, 8 ];

    a) przypisz do zmiennej $ut unię tablic $t1 i $t3 oraz wypisz tą zmienną
    b) sprawdź czy $t1 i $t2 są identyczne i wypisz wynik testu odpowiednią funkcją
    c) sprawdź czy $t1 i $t2 nie są takie same i wypisz wynik testu odpowiednią funkcją
*/

#######
# zadanie 10 (2 pkt)
# Ze zmiennej $txt utwórz tablicę fraz rozdzielając je po ";". Wykorzystaj funkcję explode();  Wypisz otrzymaną tablicę dowolną funkcją.;
$txt = "Zosia,/Marianna/Genowefa;//Pigwa";



#######
# zadanie 11*** (na 6 / 8 pkt)
/*
 Z użyciem wielokrotnej pętli foreach oraz ew. innych funkcji wykonaj polecenie wykorzystując dane z poniższej tablicy
 a) wypisz wyloty dla każdego z miast w formacie 

        Nazwa miasta:
        - godzina wylotu -> miejsce docelowe

 b) poniżej wypisu wypisz dodatkowo dane w 3 wierszach:
    Liczba wylotów z Warszawy: liczba wylotów.
    Liczba wylotów z Katowic: liczba wylotów.
    Liczba wylotów z Warszawy i Katowic łącznie: liczba wylotów.
 
 */

$Wyloty = [
                'Warszawa' => [
                    '7:32' => 'Maroko',
                    '11:58' => 'Zimbabwe',
                    '17:00' => 'Budapeszt'
                ],

                'Katowice' => [
                    '6:32' => 'Kraków',
                    '12:00' => 'Radom',
                    '18:00' => 'Paryż',
                    '18:05' => 'Doha'
                ]
            ];











      


