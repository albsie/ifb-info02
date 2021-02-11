<?php
require_once "header.php";
?>
<main>
    <section>
        <h1>Meine Aufgaben</h1>
    </section>
    <section>
        <div class="container">
            <ul class="row row-cols-5">
                <li>Aufgabe</li>
                <li>Beschreibung</li>
                <li>Priorität</li>
                <li>Erledigt</li>
                <li>Löschen</li>
            </ul>
            <ul class="row row-cols-5">
                <li><span class="align-middle">Einkaufen</span></li>
                <li><span class="align-middle">Milch, Butter, Bananen</span></li>
                <li><span class="align-middle">hoch</span></li>
                <li><button type="button" class="btn btn-success">Erledigt</button></li>
                <li><button type="button" class="btn btn-danger">Löschen</button></li>
            </ul>
            <!-- Die nächsten zwei ul dienen nur als Beispiel und sollen mit Hilfe von PHP dynamisch erstellt werden.
            Deshalb können die Beispiele gelöscht werden -->
            <ul class="row row-cols-5">
                <li><span class="align-middle">Putzen</span></li>
                <li><span class="align-middle">Fenster Küche, Fenster Wochnzimmer</span></li>
                <li><span class="align-middle">mittel</span></li>
                <li><button type="button" class="btn btn-success">Erledigt</button></li>
                <li><button type="button" class="btn btn-danger">Löschen</button></li>
            </ul>
            <ul class="row row-cols-5">
                <li><span class="align-middle crossOut">Kochen</span></li>
                <li><span class="align-middle crossOut">Suppe, Lasagne, Waffeln</span></li>
                <li><span class="align-middle crossOut">hoch</span></li>
                <li><span class="align-middle done">Fertig</span></li>
                <li><button type="button" class="btn btn-danger">Löschen</button></li>
            </ul>
        </div>
    </section>
    <section class="container note">
        <h2>Allgemeine Hinweise:</h2>
        <p>Die Todos sollen nach Priorität sortiert werden.</p>
        <p>Sobald auf "Erledigt" Button geklickt wird, soll der Button verschwinden und der Text "Fertig" soll kommen. Außerdem sollen diese Tasks ans Ende der Tabelle verschoben werden.</p>
        <p>Sobald auf "Löschen" Button geklickt wird, soll der Eintrag gelöscht werden.</p>
        <p>In der Navigation soll die aktive Seite erkennbar sein.</p>
    </section>
</main>
<?php
require_once "footer.php";



