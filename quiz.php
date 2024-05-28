<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pattern.css">
    <link rel="icon" type="image/x-icon" href="pictogram.png">
    <script src="script.js"></script>
    <title>Quiz</title>
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
        <section class="question">1. W języku PHP zmienna $_GET jest zmienną</section>
            <section class="answer">
                <label><input type="radio" name="question0" value="a"><b>A.</b> zdefiniowaną przez twórcę strony, służącą do przekazywania danych z formularza przez adres strony</label>
                <label><input type="radio" name="question0" value="b"><b>B.</b> zwykłą, zdefiniowaną przez twórcę strony</label>
                <label><input type="radio" name="question0" value="c"><b>C.</b> predefiniowaną, używaną do gromadzenia wartości formularza po nagłówkach zlecenia HTTP (danych z formularza nie można zobaczyć w adresie)</label>
                <label><input type="radio" name="question0" value="d"><b>D.</b> predefiniowaną, używaną do przekazywania danych do skryptów PHP poprzez adres strony</label>
            </section>

            <section class="question">2. Aby zadeklarować pole klasy, do którego mają dostęp jedynie metody tej klasy i pole to nie jest dostępne dla klas pochodnych, należy użyć kwalifikatora dostępu</section>
            <section class="answer">
                <label><input type="radio" name="question1" value="a"><b>A.</b> published </label>
                <label><input type="radio" name="question1" value="b"><b>B.</b> protected </label>
                <label><input type="radio" name="question1" value="c"><b>C.</b> public </label>
                <label><input type="radio" name="question1" value="d"><b>D.</b> private </label>
            </section>

            <section class="question">3. Kolor 255 12 12 w modelu RGB na stronie www powinien być zapisany w postaci</section>
            <section class="answer">
                <label><input type="radio" name="question2" value="a"><b>A.</b> #FF0C0C </label>
                <label><input type="radio" name="question2" value="b"><b>B.</b> #EE0C0C </label>
                <label><input type="radio" name="question2" value="c"><b>C.</b> #AB1A1D </label>
                <label><input type="radio" name="question2" value="d"><b>D.</b> #2551212 </label>
            </section>

            <section class="question">4. W języku HTML, aby utworzyć pole edycyjne do wpisywania hasła, w którym wpisywany tekst jest maskowany (zastępowany kropkami), należy użyć znacznika</section>
            <section class="answer">
                <label><input type="radio" name="question3" value="a"><b>A.</b> form="password" type="password" </label>
                <label><input type="radio" name="question3" value="b"><b>B.</b> form input type="password" </label>
                <label><input type="radio" name="question3" value="c"><b>C.</b> input name="password" </label>
                <label><input type="radio" name="question3" value="d"><b>D.</b> input type="password" </label>
            </section>

            <section class="question">5. Który z wymienionych poniżej języków jest typowo front-endowy (wykonywany po stronie klienta)?</section>
            <section class="answer">
                <label><input type="radio" name="question4" value="a"><b>A.</b> Node.js </label>
                <label><input type="radio" name="question4" value="b"><b>B.</b> Perl </label>
                <label><input type="radio" name="question4" value="c"><b>C.</b> PHP </label>
                <label><input type="radio" name="question4" value="d"><b>D.</b> CSS </label>
            </section>

            <section class="question">6. W skrypcie JavaScript zastosowano metodę DOM getElementsByClassName('akapit'). Metoda ta odwoła się do akapitu</section>
            <section class="answer">
                <label><input type="radio" name="question5" value="a"><b>A.</b> p akapit /p </label>
                <label><input type="radio" name="question5" value="b"><b>B.</b> p class="akapit" akapit4 /p </label>
                <label><input type="radio" name="question5" value="c"><b>C.</b> p id="akapit" akapit2 /p </label>
                <label><input type="radio" name="question5" value="d"><b>D.</b> p href="/akapit" akapit3 /p </label>
            </section>

            <section class="question">7. Deklaracja typu dokumentu HTML: <!DOCTYPE HTML> oznacza, że kod jest napisany w wersji</section>
            <section class="answer">
                <label><input type="radio" name="question6" value="a"><b>A.</b> 7 </label>
                <label><input type="radio" name="question6" value="b"><b>B.</b> 4 </label>
                <label><input type="radio" name="question6" value="c"><b>C.</b> 6 </label>
                <label><input type="radio" name="question6" value="d"><b>D.</b> 5 </label>
            </section>

            <section class="question">8. Znacznik w języku HTML służy do oznaczenia</section>
            <section class="answer">
                <label><input type="radio" name="question7" value="a"><b>A.</b> cytowanego bloku tekstu </label>
                <label><input type="radio" name="question7" value="b"><b>B.</b> tekstu, który został dodany </label>
                <label><input type="radio" name="question7" value="c"><b>C.</b> tekstu przeformatowanego </label>
                <label><input type="radio" name="question7" value="d"><b>D.</b> tekstu, który został usunięty </label>
            </section>

            <section class="question">9. Które polecenie w CSS służy do załączenia zewnętrznego arkusza stylów?</section>
            <section class="answer">
                <label><input type="radio" name="question8" value="a"><b>A.</b> include </label>
                <label><input type="radio" name="question8" value="b"><b>B.</b> open </label>
                <label><input type="radio" name="question8" value="c"><b>C.</b> import </label>
                <label><input type="radio" name="question8" value="d"><b>D.</b> require </label>
            </section>

            <section class="question">10. Który z typów wspieranych przez język PHP służy do obsługi zmiennych logicznych?</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> Boolean </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> Float </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> Integer </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> String </label>
            </section>
            <section class="question">11. Którego polecenia nalezy użyć, aby wyraz TEKST został wyświetleny w kolorze czarnym w oknie przeglądarki internetowej?</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> body color="black" TEKST </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> font color="czarny" TEKST  </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> font color="#000000" TEKST </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> body bgcolor="black" TEKST </label>
            </section>
            <section class="question">12. W poleceniach, których celem jest odtwarzanie na stronie internetowej dźwięku jako podkładu muzycznego NIE wykorzystuje się atrybutu</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> loop="10" </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> balance="-10" </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> volume="-100" </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> href="C:/100.wav" </label>
            </section>
            <section class="question">13. Jakiego znacznika należy użyć, aby przejść do kolejnej linii tekstu, nie tworząc akapitu na stronie internetowej?</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> < p > </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> < /b > </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> < br > </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> < /br > </label>
            </section>
            <section class="question">14. Kaskadowe arkusze stylów tworzy się w celu</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> ułatwienia formatowania strony </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> nadpisywania wartości znaczników już ustawionych na stronie </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> połączenia struktury dokumentu strony z właściwą formą jego prezentacji </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> blokowania jakichkolwiek zmian w wartościach znaczników już przypisanych w pliku CSS </label>
            </section>
            <section class="question">15. W podanej regule CSS: h1 {color: blue} h1 oznacza</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> klasę </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> wartość </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> selektor </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> deklarację </label>
            </section>
            <section class="question">16. Edytor spełniający założenia WYSIWYG musi umożliwiać</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> tworzenie podstawowej grafiki wektorowej </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> publikację strony na serwerze poprzez wbudowanego klienta FTP </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> obróbkę plików dźwiękowych przed umieszczeniem ich na stronie internetowej </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> uzyskanie zbliżonego wyniku tworzenej strony do jej obrazu w przegladarce interenetowej </label>
            </section>
            <section class="question">17. Do graficznego tworzenia stron internetowych należy wykorzystać.</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> edytor CSS </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> przeglądarkę internetową </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> program typu WYSIWYG </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> program MS Office Picture Manager </label>
            </section>
            <section class="question">18. W procesie walidacji stron internetowych nie bada się</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> działania linków </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> błędów składni kodu </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> zgodności z przeglądarkami </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> źródła pochodzenia narzędzi edytorskich </label>
            </section>
            <section class="question">19. Model opisu przestrzeni barw o parametrach: odcień, nasycenie i jasność, to</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> HSV </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> RGB </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> CMY </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> CMYK </label>
            </section>
            <section class="question">20. Wskaż model barw, który stosuje się do wyświetlania kolorów na ekranie monitora komputerowego</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> HLS </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> RGB </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> CMY </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> CMYK </label>
            </section>
            <section class="question">21. Który parametr obiektu graficznego ulegnie zmianie po modyfikacji wartości kanału alfa?</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> Nasycenie barw </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> Przezroczystość </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> Ostrość krawędzi </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> Kolejność wyświetlenia pikseli </label>
            </section>
            <section class="question">22. Jakiego formatu należy użyć do zapisu obrazu z kompresją stratną?</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> GIF </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> PNG </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> PCX </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> JPEG </label>
            </section>
            <section class="question">23. Najprostszy sposób zamiany obiektu oznaczonego cyfrą 1 na obiekt oznaczony cyfrą 2 polega na</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> animowaniu obiektu </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> zmianie warstwy obiektu </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> narysowaniu docelowego obiektu </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> geometrycznym transformowaniu obiektu </label>
            </section>
            <section class="question">24. Jak nazywa się proces przedstawienia, we właściwej dla danego środowiska formie, informacji zawartej w dokumencie elektronicznym?</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> Mapowanie </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> Rasteryzacja </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> Renderowanie </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> Teksturowanie </label>
            </section>
            <section class="question">25. Proces filtracji sygnału wejściowego w dziedzinie czasu, obejmujący zasadę superpozycji, związany jest filtrem</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> liniowym </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> przyczynowym </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> niezmiennym w czasie </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> o skończonej odpowiedzi impulsowej </label>
            </section>
            <section class="question">26. Jak nazywa się podzbiór strukturalnego języka zapytań, związany z formułowaniem zapytań do bazy danych za pomocą polecenia SELECT?</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> SQL DML (ang. Data Manipulation Language) </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> SQL DDL (ang. Data Definition Language) </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> SQL DCL (ang. Data Control Language) </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> SQL DQL (ang. Data Query Language) </label>
            </section>
            <section class="question">27. Jakie sa nazwy typowych poleceń języka zapytań SQL, związane z wykonywaniem operacji na danych SQL DML (np.: umieszczanie danych w bazie, kasowanie dokonywanie zmian w danych)?</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> SELECT, SELECT INTO </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> ALTER, CREATE, DROP </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> DENY, GRANT, REVOKE </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> DELETE, INSERT, UPDATE </label>
            </section>
            <section class="question">28. Jak posortowana będzie lista, utworzona ze wszystkich kolumn tabeli uczniowie i zawierająca uczniów ze średnią większą od 5, która zostanie zwrócona jako wynik przedstawionego zapytania?</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> Rosnąca według parametru klasa </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> Malejąco według parametru klasa </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> Rosnaco według parametru srednia </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> Malejąco według parametru srednia </label>
            </section>
            <section class="question">29. Według którego parametru oraz dla ilu tabel zostaną zwrócone wiersze na liście w wyniku przedstawionego zapytania?</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> Według parametru wyrob_id wyłącznie dla trzech tabel </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> Według parametru wyrob_id dla wyłącznie dla trzech tabel </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> Według parametru nr_id wyłącznie dla trzech tabel </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> Według parametru nr_id dla wszystkich tabel </label>
            </section>
            <section class="question">30. Który z obiektów relacyjnej bazy danych, będący kodem języka SQL, może być wywoływany w zapytaniach modyfikujących kolumny danych widoczne jako tabela, bez względu na to czy jest tworzony programowo, czy dynamicznie?</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> Reguła </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> Wyzwalacz </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> Procedura składowa </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> Funkcja zdefiniowana </label>
            </section>
            <section class="question">31. Jak nazywa się element bazy danych, za pomocą którego można jedynie odczytać dane z bazy, prezentując je w postaci tekstu lub wykresu?</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> Tabela </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> Raport </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> Zapytanie </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> Formularz </label>
            </section>
            <section class="question">32. akiego typu specjalizowane oprogramowanie narzędziowe należy zainstalować, aby umożliwić wykonywanie jego użytkownikowi operacji na zgromadzonych danych?</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> Klucz obcy </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> System Zarządzania Bazą Danych (SZBD) </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> Obiektowy System Zarządzania Bazą Danych </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> Otwarty mechanizm komunikacji bazy danych </label>
            </section>
            <section class="question">33. Co należy zastosować w organizacji danych, aby zapytania w bazie danych były wykonywane szybciej?</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> Reguły </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> Indeksy </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> Wartości domyślne </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> Klucze podstawowe </label>
            </section>
            <section class="question">34. W programie Microsoft Access formą zabezpieczeń dostępu do danych związaną z tabelą i kwerendą jest</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> stosowanie makr </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> przypisanie uprawnień </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> określanie przestrzeni tabel </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> wprowadzenie limitów przestrzeni dyskowej </label>
            </section>
            <section class="question">35. Które z wymienionych osób odpowiadają za przygotowanie systemu bazy danych do pracy produkcyjnej w sposób ciągły, zarządzanie użytkownikami i instalowanie nowych wersji systemu bazodanowego?</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> Projektanci narzędzi deweloperskich </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> Administratorzy systemu bazy danych </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> Administratorzy serwerów i sieci komputerowych </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> Projektanci i programiści Systemu Zarządzania Bazą Danych. </label>
            </section>
            <section class="question">36. Z jakimi mechanizmami nadawania zabezpieczeń, dającymi możliwości wykonywania operacji na bazie danych, związane są zagadnienia zarządzania kontami, użytkownikami i uprawnieniami?</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> Z regułami </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> Z atrybutami </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> Z przywilejami obiektowymi </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> Z przywilejami systemowymi </label>
            </section>
            <section class="question">37. Metoda udostępniania bazy danych w programie Microsoft Access, dotycząca wszystkich obiektów bazy umieszczonych na dysku sieciowym i używanych jednocześnie przez różne osoby nosi nazwę</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> folderu sieciowego </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> serwera bazy danych </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> dzielonej bazy danych </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> witryny programu SharePoint </label>
            </section>
            <section class="question">38. Jakie należy posiadać uprawnienia, aby wykonać i odtworzyć kopię zapasową bazy danych Microsoft SQL Server 2005 Express?</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> Users </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> Security users </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> Użytkownik lokalny </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> Administrator systemu </label>
            </section>
            <section class="question">39. Typ zmiennej w języku JavaScript</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> nie występuje </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> jest tylko jeden </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> następuje poprzez przypisanie wartości </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> musi być zadeklarowany na początku skryptu </label>
            </section>
            <section class="question">40. Zmienne typu int odnoszą się do liczb</section>
            <section class="answer">
                <label><input type="radio" name="question9" value="a"><b>A.</b> naturalnych </label>
                <label><input type="radio" name="question9" value="b"><b>B.</b> całkowitych </label>
                <label><input type="radio" name="question9" value="c"><b>C.</b> w notacji stałoprzecinkowej </label>
                <label><input type="radio" name="question9" value="d"><b>D.</b> w notacji zmiennoprzecinkowej </label>
            </section>
            <section class="buttons">
                <center>
                <button onclick="submitAnswers()">Sprawdź odpowiedzi</button>
                <button onclick="resetQuiz()">Reset</button>
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