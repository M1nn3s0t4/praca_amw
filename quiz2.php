<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pattern.css">
    <link rel="icon" type="image/x-icon" href="pictogram.png">
    <script src="script.js"></script>
    <title>INF.04</title>
</head>
<body>
    <section id="banner">
        <img src="exam.png" alt="exam">
        <h1>EGZAMIN ZAWODOWY</h1>
    </section>
    <section id="menu">
        <section class="menu-select">
            <a href="index.html">STRONA GŁÓWNA</a>
        </section>
        <section class="menu-select-list">
            <section class="dropdown">
                <label class="dropbtn">WYKONAJ TEST</label>
                <section class="dropdown-content">
                    <section class="buttons"><a href="quiz.php">INF.03             </a></section>
                    <section class="buttons"><a href="quiz2.php">INF.04            </a></section>
                </section>
            </section>
        </section>
        <section class="menu-select">
            <a href="profile.php">PROFIL</a>
        </section>
        <section class="menu-select">
            <a href="faq.html">FAQ</a>
        </section>
    </section>
    <section id="main">
        <section class="question">1. Przedstawiony zapis w języku C# oznacza definicję klasy Car, która:</section>
            <section class="answer">
                <label><input type="radio" name="question0" value="a"><b>A.</b> jest klasą bazową (nie dziedziczy po żadnej klasie)</label>
                <label><input type="radio" name="question0" value="b"><b>B.</b> jest zaprzyjaźniona z klasą Vehicle</label>
                <label><input type="radio" name="question0" value="c"><b>C.</b> dziedziczy po Vehicle</label>
                <label><input type="radio" name="question0" value="d"><b>D.</b> korzysta z pól prywatnych klasy Vehicle</label>
            </section>

            <section class="question">2. Mechanizm obietnic (ang. promises) w języku JavaScript ma na celu</section>
            <section class="answer">
                <label><input type="radio" name="question1" value="a"><b>A.</b> zastąpić mechanizm dziedziczenia w programowaniu obiektowym. </label>
                <label><input type="radio" name="question1" value="b"><b>B.</b> obsłużyć przechwytywanie błędów aplikacji. </label>
                <label><input type="radio" name="question1" value="c"><b>C.</b> poprawić czytelność kodu synchronicznego. </label>
                <label><input type="radio" name="question1" value="d"><b>D.</b> obsłużyć funkcjonalność związaną z kodem asynchronicznym. </label>
            </section>

            <section class="question">3. Zapisane w kodzie szesnastkowym składowe RGB koloru #AA41FF po przekształceniu do kodu dziesiętnego wynoszą kolejno</section>
            <section class="answer">
                <label><input type="radio" name="question2" value="a"><b>A.</b> 160, 64, 255 </label>
                <label><input type="radio" name="question2" value="b"><b>B.</b> 160, 65, 255 </label>
                <label><input type="radio" name="question2" value="c"><b>C.</b> 170, 64, 255 </label>
                <label><input type="radio" name="question2" value="d"><b>D.</b> 170, 65, 255 </label>
            </section>

            <section class="question">4. Oznaczeniem komentarza jednoliniowego w języku Python jest:</section>
            <section class="answer">
                <label><input type="radio" name="question3" value="a"><b>A.</b> # </label>
                <label><input type="radio" name="question3" value="b"><b>B.</b> ! </label>
                <label><input type="radio" name="question3" value="c"><b>C.</b> "" </label>
                <label><input type="radio" name="question3" value="d"><b>D.</b> // </label>
            </section>

            <section class="question">5. Aplikacje Web wykonane we frameworku Angular lub bibliotece React i działające na domyślnych ustawieniach portów można uruchomić na lokalnym serwerze, wpisując w przeglądarce</section>
            <section class="answer">
                <label><input type="radio" name="question4" value="a"><b>A.</b> localhost:8000 (React) lub localhost:49887 (Angular) </label>
                <label><input type="radio" name="question4" value="b"><b>B.</b> localhost:8080 (React) lub localhost:8000 (Angular) </label>
                <label><input type="radio" name="question4" value="c"><b>C.</b> localhost:3000 (React) lub localhost:4200 (Angular) </label>
                <label><input type="radio" name="question4" value="d"><b>D.</b> localhost:5001 (React) lub localhost:8080 (Angular) </label>
            </section>

            <section class="question">6. Co można powiedzieć o metodach klasy Point?</section>
            <section class="answer">
                <label><input type="radio" name="question5" value="a"><b>A.</b> Są przeładowane (przeciążone). </label>
                <label><input type="radio" name="question5" value="b"><b>B.</b> Zawierają błąd, gdyż nazwy metod muszą się różnić. </label>
                <label><input type="radio" name="question5" value="c"><b>C.</b> Zawierają przeładowanie (przeciążenie) operatora. </label>
                <label><input type="radio" name="question5" value="d"><b>D.</b> Pełnią funkcję konstruktorów w zależności od liczby parametrów. </label>
            </section>

            <section class="question">7. Aby zaprojektować zestaw danych do zainicjowania algorytmu sortowania bąbelkowego tablicy, należy zastosować przynajmniej typy:</section>
            <section class="answer">
                <label><input type="radio" name="question6" value="a"><b>A.</b> jeden tablicowy, dwa liczbowe do kontroli pętli, jeden do zamiany elementów miejscami </label>
                <label><input type="radio" name="question6" value="b"><b>B.</b> jeden tablicowy, jeden liczbowy do kontroli pętli, dwa do zamiany elementów miejscami </label>
                <label><input type="radio" name="question6" value="c"><b>C.</b> dwa tablicowe, jeden liczbowy do kontroli pętli </label>
                <label><input type="radio" name="question6" value="d"><b>D.</b> dwa tablicowe, dwa do zamiany elementów miejscami </label>
            </section>

            <section class="question">8. Utworzenie procedury składowej o nazwie dodajUsera w MS SQL rozpoczyna się od poleceń</section>
            <section class="answer">
                <label><input type="radio" name="question7" value="a"><b>A.</b> add dodajUsera procedure </label>
                <label><input type="radio" name="question7" value="b"><b>B.</b> create procedure dodajUsera </label>
                <label><input type="radio" name="question7" value="c"><b>C.</b> create dodajUsera procedure </label>
                <label><input type="radio" name="question7" value="d"><b>D.</b> add procedure dodajUsera </label>
            </section>

            <section class="question">9. Okna dialogowe niemodalne służą do</section>
            <section class="answer">
                <label><input type="radio" name="question8" value="a"><b>A.</b> kontrolowania stanu aplikacji poprzez systemy menu. </label>
                <label><input type="radio" name="question8" value="b"><b>B.</b> blokowania działania aplikacji na czas wprowadzenia i zatwierdzenia danych. </label>
                <label><input type="radio" name="question8" value="c"><b>C.</b> kontrolowania ustawień aplikacji, jako okno pozostające otwarte na ekranie przez cały czas trwania aplikacji. </label>
                <label><input type="radio" name="question8" value="d"><b>D.</b> wyświetlania komunikatów z koniecznością ich potwierdzenia, aby dalej kontynuować działanie aplikacji. </label>
            </section>

            <section class="question">10. Rekomendacje standardu WCAG 2.0 związane z percepcją dotyczą:</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> przedstawienia komponentów interfejsu użytkownika </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> zapewnienia wystarczającej ilości czasu na przeczytanie i przetworzenie treści </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> zapewnienia interakcji pomiędzy komponentami użytkownika przy użyciu klawiatury </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> zrozumienia i rzetelności w dostarczonych treściach na stronie </label>
            </section>
            <section class="question">1. Przedstawiony zapis w języku C# oznacza definicję klasy Car, która:</section>
            <section class="answer">
                <label><input type="radio" name="question0" value="a"><b>A.</b> jest klasą bazową (nie dziedziczy po żadnej klasie)</label>
                <label><input type="radio" name="question0" value="b"><b>B.</b> jest zaprzyjaźniona z klasą Vehicle</label>
                <label><input type="radio" name="question0" value="c"><b>C.</b> dziedziczy po Vehicle</label>
                <label><input type="radio" name="question0" value="d"><b>D.</b> korzysta z pól prywatnych klasy Vehicle</label>
            </section>

            <section class="question">2. Mechanizm obietnic (ang. promises) w języku JavaScript ma na celu</section>
            <section class="answer">
                <label><input type="radio" name="question1" value="a"><b>A.</b> zastąpić mechanizm dziedziczenia w programowaniu obiektowym. </label>
                <label><input type="radio" name="question1" value="b"><b>B.</b> obsłużyć przechwytywanie błędów aplikacji. </label>
                <label><input type="radio" name="question1" value="c"><b>C.</b> poprawić czytelność kodu synchronicznego. </label>
                <label><input type="radio" name="question1" value="d"><b>D.</b> obsłużyć funkcjonalność związaną z kodem asynchronicznym. </label>
            </section>

            <section class="question">3. Zapisane w kodzie szesnastkowym składowe RGB koloru #AA41FF po przekształceniu do kodu dziesiętnego wynoszą kolejno</section>
            <section class="answer">
                <label><input type="radio" name="question2" value="a"><b>A.</b> 160, 64, 255 </label>
                <label><input type="radio" name="question2" value="b"><b>B.</b> 160, 65, 255 </label>
                <label><input type="radio" name="question2" value="c"><b>C.</b> 170, 64, 255 </label>
                <label><input type="radio" name="question2" value="d"><b>D.</b> 170, 65, 255 </label>
            </section>

            <section class="question">4. Oznaczeniem komentarza jednoliniowego w języku Python jest:</section>
            <section class="answer">
                <label><input type="radio" name="question3" value="a"><b>A.</b> # </label>
                <label><input type="radio" name="question3" value="b"><b>B.</b> ! </label>
                <label><input type="radio" name="question3" value="c"><b>C.</b> "" </label>
                <label><input type="radio" name="question3" value="d"><b>D.</b> // </label>
            </section>

            <section class="question">5. Aplikacje Web wykonane we frameworku Angular lub bibliotece React i działające na domyślnych ustawieniach portów można uruchomić na lokalnym serwerze, wpisując w przeglądarce</section>
            <section class="answer">
                <label><input type="radio" name="question4" value="a"><b>A.</b> localhost:8000 (React) lub localhost:49887 (Angular) </label>
                <label><input type="radio" name="question4" value="b"><b>B.</b> localhost:8080 (React) lub localhost:8000 (Angular) </label>
                <label><input type="radio" name="question4" value="c"><b>C.</b> localhost:3000 (React) lub localhost:4200 (Angular) </label>
                <label><input type="radio" name="question4" value="d"><b>D.</b> localhost:5001 (React) lub localhost:8080 (Angular) </label>
            </section>

            <section class="question">6. Co można powiedzieć o metodach klasy Point?</section>
            <section class="answer">
                <label><input type="radio" name="question5" value="a"><b>A.</b> Są przeładowane (przeciążone). </label>
                <label><input type="radio" name="question5" value="b"><b>B.</b> Zawierają błąd, gdyż nazwy metod muszą się różnić. </label>
                <label><input type="radio" name="question5" value="c"><b>C.</b> Zawierają przeładowanie (przeciążenie) operatora. </label>
                <label><input type="radio" name="question5" value="d"><b>D.</b> Pełnią funkcję konstruktorów w zależności od liczby parametrów. </label>
            </section>

            <section class="question">7. Aby zaprojektować zestaw danych do zainicjowania algorytmu sortowania bąbelkowego tablicy, należy zastosować przynajmniej typy:</section>
            <section class="answer">
                <label><input type="radio" name="question6" value="a"><b>A.</b> jeden tablicowy, dwa liczbowe do kontroli pętli, jeden do zamiany elementów miejscami </label>
                <label><input type="radio" name="question6" value="b"><b>B.</b> jeden tablicowy, jeden liczbowy do kontroli pętli, dwa do zamiany elementów miejscami </label>
                <label><input type="radio" name="question6" value="c"><b>C.</b> dwa tablicowe, jeden liczbowy do kontroli pętli </label>
                <label><input type="radio" name="question6" value="d"><b>D.</b> dwa tablicowe, dwa do zamiany elementów miejscami </label>
            </section>

            <section class="question">8. Utworzenie procedury składowej o nazwie dodajUsera w MS SQL rozpoczyna się od poleceń</section>
            <section class="answer">
                <label><input type="radio" name="question7" value="a"><b>A.</b> add dodajUsera procedure </label>
                <label><input type="radio" name="question7" value="b"><b>B.</b> create procedure dodajUsera </label>
                <label><input type="radio" name="question7" value="c"><b>C.</b> create dodajUsera procedure </label>
                <label><input type="radio" name="question7" value="d"><b>D.</b> add procedure dodajUsera </label>
            </section>

            <section class="question">9. Okna dialogowe niemodalne służą do</section>
            <section class="answer">
                <label><input type="radio" name="question8" value="a"><b>A.</b> kontrolowania stanu aplikacji poprzez systemy menu. </label>
                <label><input type="radio" name="question8" value="b"><b>B.</b> blokowania działania aplikacji na czas wprowadzenia i zatwierdzenia danych. </label>
                <label><input type="radio" name="question8" value="c"><b>C.</b> kontrolowania ustawień aplikacji, jako okno pozostające otwarte na ekranie przez cały czas trwania aplikacji. </label>
                <label><input type="radio" name="question8" value="d"><b>D.</b> wyświetlania komunikatów z koniecznością ich potwierdzenia, aby dalej kontynuować działanie aplikacji. </label>
            </section>

            <section class="question">10. Rekomendacje standardu WCAG 2.0 związane z percepcją dotyczą:</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> przedstawienia komponentów interfejsu użytkownika </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> zapewnienia wystarczającej ilości czasu na przeczytanie i przetworzenie treści </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> zapewnienia interakcji pomiędzy komponentami użytkownika przy użyciu klawiatury </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> zrozumienia i rzetelności w dostarczonych treściach na stronie </label>
            </section>
            <section class="question">1. Przedstawiony zapis w języku C# oznacza definicję klasy Car, która:</section>
            <section class="answer">
                <label><input type="radio" name="question0" value="a"><b>A.</b> jest klasą bazową (nie dziedziczy po żadnej klasie)</label>
                <label><input type="radio" name="question0" value="b"><b>B.</b> jest zaprzyjaźniona z klasą Vehicle</label>
                <label><input type="radio" name="question0" value="c"><b>C.</b> dziedziczy po Vehicle</label>
                <label><input type="radio" name="question0" value="d"><b>D.</b> korzysta z pól prywatnych klasy Vehicle</label>
            </section>

            <section class="question">2. Mechanizm obietnic (ang. promises) w języku JavaScript ma na celu</section>
            <section class="answer">
                <label><input type="radio" name="question1" value="a"><b>A.</b> zastąpić mechanizm dziedziczenia w programowaniu obiektowym. </label>
                <label><input type="radio" name="question1" value="b"><b>B.</b> obsłużyć przechwytywanie błędów aplikacji. </label>
                <label><input type="radio" name="question1" value="c"><b>C.</b> poprawić czytelność kodu synchronicznego. </label>
                <label><input type="radio" name="question1" value="d"><b>D.</b> obsłużyć funkcjonalność związaną z kodem asynchronicznym. </label>
            </section>

            <section class="question">3. Zapisane w kodzie szesnastkowym składowe RGB koloru #AA41FF po przekształceniu do kodu dziesiętnego wynoszą kolejno</section>
            <section class="answer">
                <label><input type="radio" name="question2" value="a"><b>A.</b> 160, 64, 255 </label>
                <label><input type="radio" name="question2" value="b"><b>B.</b> 160, 65, 255 </label>
                <label><input type="radio" name="question2" value="c"><b>C.</b> 170, 64, 255 </label>
                <label><input type="radio" name="question2" value="d"><b>D.</b> 170, 65, 255 </label>
            </section>

            <section class="question">4. Oznaczeniem komentarza jednoliniowego w języku Python jest:</section>
            <section class="answer">
                <label><input type="radio" name="question3" value="a"><b>A.</b> # </label>
                <label><input type="radio" name="question3" value="b"><b>B.</b> ! </label>
                <label><input type="radio" name="question3" value="c"><b>C.</b> "" </label>
                <label><input type="radio" name="question3" value="d"><b>D.</b> // </label>
            </section>

            <section class="question">5. Aplikacje Web wykonane we frameworku Angular lub bibliotece React i działające na domyślnych ustawieniach portów można uruchomić na lokalnym serwerze, wpisując w przeglądarce</section>
            <section class="answer">
                <label><input type="radio" name="question4" value="a"><b>A.</b> localhost:8000 (React) lub localhost:49887 (Angular) </label>
                <label><input type="radio" name="question4" value="b"><b>B.</b> localhost:8080 (React) lub localhost:8000 (Angular) </label>
                <label><input type="radio" name="question4" value="c"><b>C.</b> localhost:3000 (React) lub localhost:4200 (Angular) </label>
                <label><input type="radio" name="question4" value="d"><b>D.</b> localhost:5001 (React) lub localhost:8080 (Angular) </label>
            </section>

            <section class="question">6. Co można powiedzieć o metodach klasy Point?</section>
            <section class="answer">
                <label><input type="radio" name="question5" value="a"><b>A.</b> Są przeładowane (przeciążone). </label>
                <label><input type="radio" name="question5" value="b"><b>B.</b> Zawierają błąd, gdyż nazwy metod muszą się różnić. </label>
                <label><input type="radio" name="question5" value="c"><b>C.</b> Zawierają przeładowanie (przeciążenie) operatora. </label>
                <label><input type="radio" name="question5" value="d"><b>D.</b> Pełnią funkcję konstruktorów w zależności od liczby parametrów. </label>
            </section>

            <section class="question">7. Aby zaprojektować zestaw danych do zainicjowania algorytmu sortowania bąbelkowego tablicy, należy zastosować przynajmniej typy:</section>
            <section class="answer">
                <label><input type="radio" name="question6" value="a"><b>A.</b> jeden tablicowy, dwa liczbowe do kontroli pętli, jeden do zamiany elementów miejscami </label>
                <label><input type="radio" name="question6" value="b"><b>B.</b> jeden tablicowy, jeden liczbowy do kontroli pętli, dwa do zamiany elementów miejscami </label>
                <label><input type="radio" name="question6" value="c"><b>C.</b> dwa tablicowe, jeden liczbowy do kontroli pętli </label>
                <label><input type="radio" name="question6" value="d"><b>D.</b> dwa tablicowe, dwa do zamiany elementów miejscami </label>
            </section>

            <section class="question">8. Utworzenie procedury składowej o nazwie dodajUsera w MS SQL rozpoczyna się od poleceń</section>
            <section class="answer">
                <label><input type="radio" name="question7" value="a"><b>A.</b> add dodajUsera procedure </label>
                <label><input type="radio" name="question7" value="b"><b>B.</b> create procedure dodajUsera </label>
                <label><input type="radio" name="question7" value="c"><b>C.</b> create dodajUsera procedure </label>
                <label><input type="radio" name="question7" value="d"><b>D.</b> add procedure dodajUsera </label>
            </section>

            <section class="question">9. Okna dialogowe niemodalne służą do</section>
            <section class="answer">
                <label><input type="radio" name="question8" value="a"><b>A.</b> kontrolowania stanu aplikacji poprzez systemy menu. </label>
                <label><input type="radio" name="question8" value="b"><b>B.</b> blokowania działania aplikacji na czas wprowadzenia i zatwierdzenia danych. </label>
                <label><input type="radio" name="question8" value="c"><b>C.</b> kontrolowania ustawień aplikacji, jako okno pozostające otwarte na ekranie przez cały czas trwania aplikacji. </label>
                <label><input type="radio" name="question8" value="d"><b>D.</b> wyświetlania komunikatów z koniecznością ich potwierdzenia, aby dalej kontynuować działanie aplikacji. </label>
            </section>

            <section class="question">10. Rekomendacje standardu WCAG 2.0 związane z percepcją dotyczą:</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> przedstawienia komponentów interfejsu użytkownika </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> zapewnienia wystarczającej ilości czasu na przeczytanie i przetworzenie treści </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> zapewnienia interakcji pomiędzy komponentami użytkownika przy użyciu klawiatury </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> zrozumienia i rzetelności w dostarczonych treściach na stronie </label>
            </section>
            <section class="question">1. Przedstawiony zapis w języku C# oznacza definicję klasy Car, która:</section>
            <section class="answer">
                <label><input type="radio" name="question0" value="a"><b>A.</b> jest klasą bazową (nie dziedziczy po żadnej klasie)</label>
                <label><input type="radio" name="question0" value="b"><b>B.</b> jest zaprzyjaźniona z klasą Vehicle</label>
                <label><input type="radio" name="question0" value="c"><b>C.</b> dziedziczy po Vehicle</label>
                <label><input type="radio" name="question0" value="d"><b>D.</b> korzysta z pól prywatnych klasy Vehicle</label>
            </section>

            <section class="question">2. Mechanizm obietnic (ang. promises) w języku JavaScript ma na celu</section>
            <section class="answer">
                <label><input type="radio" name="question1" value="a"><b>A.</b> zastąpić mechanizm dziedziczenia w programowaniu obiektowym. </label>
                <label><input type="radio" name="question1" value="b"><b>B.</b> obsłużyć przechwytywanie błędów aplikacji. </label>
                <label><input type="radio" name="question1" value="c"><b>C.</b> poprawić czytelność kodu synchronicznego. </label>
                <label><input type="radio" name="question1" value="d"><b>D.</b> obsłużyć funkcjonalność związaną z kodem asynchronicznym. </label>
            </section>

            <section class="question">3. Zapisane w kodzie szesnastkowym składowe RGB koloru #AA41FF po przekształceniu do kodu dziesiętnego wynoszą kolejno</section>
            <section class="answer">
                <label><input type="radio" name="question2" value="a"><b>A.</b> 160, 64, 255 </label>
                <label><input type="radio" name="question2" value="b"><b>B.</b> 160, 65, 255 </label>
                <label><input type="radio" name="question2" value="c"><b>C.</b> 170, 64, 255 </label>
                <label><input type="radio" name="question2" value="d"><b>D.</b> 170, 65, 255 </label>
            </section>

            <section class="question">4. Oznaczeniem komentarza jednoliniowego w języku Python jest:</section>
            <section class="answer">
                <label><input type="radio" name="question3" value="a"><b>A.</b> # </label>
                <label><input type="radio" name="question3" value="b"><b>B.</b> ! </label>
                <label><input type="radio" name="question3" value="c"><b>C.</b> "" </label>
                <label><input type="radio" name="question3" value="d"><b>D.</b> // </label>
            </section>

            <section class="question">5. Aplikacje Web wykonane we frameworku Angular lub bibliotece React i działające na domyślnych ustawieniach portów można uruchomić na lokalnym serwerze, wpisując w przeglądarce</section>
            <section class="answer">
                <label><input type="radio" name="question4" value="a"><b>A.</b> localhost:8000 (React) lub localhost:49887 (Angular) </label>
                <label><input type="radio" name="question4" value="b"><b>B.</b> localhost:8080 (React) lub localhost:8000 (Angular) </label>
                <label><input type="radio" name="question4" value="c"><b>C.</b> localhost:3000 (React) lub localhost:4200 (Angular) </label>
                <label><input type="radio" name="question4" value="d"><b>D.</b> localhost:5001 (React) lub localhost:8080 (Angular) </label>
            </section>

            <section class="question">6. Co można powiedzieć o metodach klasy Point?</section>
            <section class="answer">
                <label><input type="radio" name="question5" value="a"><b>A.</b> Są przeładowane (przeciążone). </label>
                <label><input type="radio" name="question5" value="b"><b>B.</b> Zawierają błąd, gdyż nazwy metod muszą się różnić. </label>
                <label><input type="radio" name="question5" value="c"><b>C.</b> Zawierają przeładowanie (przeciążenie) operatora. </label>
                <label><input type="radio" name="question5" value="d"><b>D.</b> Pełnią funkcję konstruktorów w zależności od liczby parametrów. </label>
            </section>

            <section class="question">7. Aby zaprojektować zestaw danych do zainicjowania algorytmu sortowania bąbelkowego tablicy, należy zastosować przynajmniej typy:</section>
            <section class="answer">
                <label><input type="radio" name="question6" value="a"><b>A.</b> jeden tablicowy, dwa liczbowe do kontroli pętli, jeden do zamiany elementów miejscami </label>
                <label><input type="radio" name="question6" value="b"><b>B.</b> jeden tablicowy, jeden liczbowy do kontroli pętli, dwa do zamiany elementów miejscami </label>
                <label><input type="radio" name="question6" value="c"><b>C.</b> dwa tablicowe, jeden liczbowy do kontroli pętli </label>
                <label><input type="radio" name="question6" value="d"><b>D.</b> dwa tablicowe, dwa do zamiany elementów miejscami </label>
            </section>

            <section class="question">8. Utworzenie procedury składowej o nazwie dodajUsera w MS SQL rozpoczyna się od poleceń</section>
            <section class="answer">
                <label><input type="radio" name="question7" value="a"><b>A.</b> add dodajUsera procedure </label>
                <label><input type="radio" name="question7" value="b"><b>B.</b> create procedure dodajUsera </label>
                <label><input type="radio" name="question7" value="c"><b>C.</b> create dodajUsera procedure </label>
                <label><input type="radio" name="question7" value="d"><b>D.</b> add procedure dodajUsera </label>
            </section>

            <section class="question">9. Okna dialogowe niemodalne służą do</section>
            <section class="answer">
                <label><input type="radio" name="question8" value="a"><b>A.</b> kontrolowania stanu aplikacji poprzez systemy menu. </label>
                <label><input type="radio" name="question8" value="b"><b>B.</b> blokowania działania aplikacji na czas wprowadzenia i zatwierdzenia danych. </label>
                <label><input type="radio" name="question8" value="c"><b>C.</b> kontrolowania ustawień aplikacji, jako okno pozostające otwarte na ekranie przez cały czas trwania aplikacji. </label>
                <label><input type="radio" name="question8" value="d"><b>D.</b> wyświetlania komunikatów z koniecznością ich potwierdzenia, aby dalej kontynuować działanie aplikacji. </label>
            </section>

            <section class="question">10. Rekomendacje standardu WCAG 2.0 związane z percepcją dotyczą:</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> przedstawienia komponentów interfejsu użytkownika </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> zapewnienia wystarczającej ilości czasu na przeczytanie i przetworzenie treści </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> zapewnienia interakcji pomiędzy komponentami użytkownika przy użyciu klawiatury </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> zrozumienia i rzetelności w dostarczonych treściach na stronie </label>
            </section>
            <section class="buttons">
                <center>
                <button onclick="submitAnswers_2()">Sprawdź odpowiedzi</button>
                <button onclick="resetQuiz_2()">Reset</button>
                </center>
            </section>
    </section>
    <section id="results">
        <script src="script.js"></script>
    </section>
    <section id="footer">
        <p>© 2024 Paweł Car All Rights Reserved</p>
    </section>
</body>
</html>