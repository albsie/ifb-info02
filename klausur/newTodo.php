
<?php
require_once "header.php";
?>
<main>
    <section>
        <h1>Neue Aufgabe</h1>
    </section>
    <section>
       <div class="container">
           <div class="alert alert-success text-center" role="alert">
               Die Aufgabe wurde Erfolgreich gespeichert.
           </div>
           <div class="alert alert-danger text-center" role="alert">
              Leider ist ein Fehler aufgetreten. Bitte wiederhole die Eingabe. || Das Feld [Inputfeld] ist ein Pflichtfeld.
           </div>
       </div>
    </section>
    <section>
        <div class="newTask">
            <div class="form-floating">
                <input type="text" class="form-control" id="task" placeholder="einkaufen">
                <label for="task">Aufgabe</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="Description" placeholder="Milch, Butter, ...">
                <label for="Description">Beschreibung</label>
            </div>
            <div class="form-floating">
                <select class="form-select form-select-sm" id="taskPriority">
                    <option selected disabled>Wähle ...</option>
                    <option value="1">niedrig</option>
                    <option value="2">mittel</option>
                    <option value="3">hoch</option>
                    <option value="4">sehr hoch</option>
                </select>
                <label for="taskPriority">Priorität</label>
            </div>
            <div lass="form-floating">
                <button type="button" class="btn btn-primary">Speichern</button>
            </div>
        </div>
    </section>
    <section class="container note">
        <h2>Allgemeine Hinweise:</h2>
        <p>"Neue Aufgabe" soll in eine MySql Datenbank gespeichert werden, dabei soll auch auf die Sicherheit der Datenbank beachtet werden.</p>
        <p>Alle 3 Felder sind Pflichtfelder.</p>
        <p>Es sollen Fehler - und Satusmeldungen ausgegeben werden.</p>
    </section>
</main>
<?php
require_once "footer.php";
