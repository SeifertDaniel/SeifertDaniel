# DESIGN.md

## Designintention

Die Gestaltung demonstriert Webentwicklung durch eine technisch anspruchsvolle,
aber verständliche Umsetzung. Interaktionen dürfen sichtbar werden, sollen
jedoch nicht zum Selbstzweck werden.

Grundprinzip:

> Form und Funktion im Gleichgewicht.

## Visuelle Sprache

Die Website verbindet eine helle, neutrale Grundfläche mit dunklen,
kontrastreichen und technisch wirkenden Karten- und Bildflächen.

Charakteristisch sind:

- helle neutrale Grundfläche
- dunkle Karten- und Bildflächen
- helle Typografie
- klare geometrische Formen
- großzügiger Negativraum
- reduzierte Farbgebung
- dezente visuelle Akzente
- klare Linien und Flächen
- große, gut erkennbare Typografie
- bewusst eingesetzte Bildflächen

Die Gestaltung soll hochwertig und zeitlos wirken. Visuelle Effekte werden
nicht allein wegen ihrer technischen Machbarkeit ergänzt.

## Farbe

Die bestehende Farbpalette ist maßgeblich.

Bei Änderungen:

- vorhandene Farben aus dem CSS übernehmen
- keine neue Farbwelt einführen
- vorhandene Kontraste erhalten
- Akzentfarben sparsam einsetzen
- Text- und Hintergrundkontraste nicht zugunsten der Gestaltung reduzieren

Neue Farben nur für eine konkret erforderliche Funktion einführen.

## Typografie

Typografie unterstützt Hierarchie und Lesbarkeit.

- klare Unterscheidung von Überschrift, Fließtext und Zusatzinformationen
- großzügige, konsistente Abstände
- keine unnötige Anzahl verschiedener Schriftstile
- vorhandene Fonts und typografische Definitionen weiterverwenden

Schriftgrößen, Zeilenhöhen und Abstände immer im Zusammenhang mit der
gesamten Hierarchie ändern.

## Layout und Raster

Die Seite ist als visuell gegliederte One-Page aufgebaut. Die drei inhaltlichen
Bereiche sind in `CONTENT.md` festgelegt und folgen derselben visuellen Logik.

Wiederkehrende Gestaltungselemente sind:

- Bereichsüberschrift
- kurze Positionierung bzw. Leitgedanke
- erklärender Inhalt
- Kompetenz- oder Schwerpunktdarstellung
- Portfolio bzw. Beispiele

Die wiederkehrende Struktur soll Orientierung schaffen und bei neuen Bereichen
beibehalten werden.

## Navigation und Interaktionen

Die Navigation bleibt minimal und eindeutig. Die zentralen Aktionen im
Kontaktbereich sind Profil, Projekte und Kontakt.

Interaktionen müssen als Navigation oder Aktion erkennbar bleiben. Visuelle
Hervorhebung darf weder die Bedienbarkeit noch die Orientierung beeinträchtigen.

## Animationen

Animationen unterstützen Orientierung, Übergänge und die räumliche Struktur.
Sie bleiben dezent und dürfen Lesbarkeit oder Bedienbarkeit nicht
beeinträchtigen.

Keine dauerhaft bewegten oder stark ablenkenden Elemente ergänzen.

## Kontaktbereich

Der Kontaktbereich ist der persönliche Einstieg und ein zentraler inhaltlicher
Anker der Seite. Seine dunkle, geometrische Gestaltung ist Teil der visuellen
Identität.

Die konkreten Vorgaben für Portrait und Social-Preview stehen in `ASSETS.md`.

## Responsive Design

Desktop- und Mobile-Darstellung sind gleichwertige Ausprägungen derselben
Gestaltung.

Bei responsiven Anpassungen:

- Hierarchie und Orientierung erhalten
- Inhalte nicht unnötig entfernen
- Abstände proportional anpassen
- Bilder sinnvoll zuschneiden
- keine horizontale Überbreite erzeugen
- bestehende Breakpoints übernehmen

Mobile Layouts dürfen strukturell abweichen, wenn dadurch Lesbarkeit und
Bedienbarkeit verbessert werden.

## Accessibility

Gestaltung darf nicht auf Kosten der Zugänglichkeit gehen.

Insbesondere beachten:

- ausreichende Kontraste
- verständliche Fokuszustände
- Tastaturbedienbarkeit
- ausreichende Touch-Flächen
- sinnvolle Überschriftenhierarchie
- keine Information ausschließlich über Farbe vermitteln
- Animationen nicht als einzige Orientierung verwenden

## Änderungsregel

Bei gestalterischen Änderungen gilt:

1. Bestehendes Design analysieren.
2. Bestehende Komponenten und Regeln wiederverwenden.
3. Die kleinste sinnvolle Änderung umsetzen.
4. Auswirkungen auf andere Bereiche prüfen.
5. Desktop und Mobile kontrollieren.

Keine Einzelkomponente isoliert verändern, wenn dadurch die visuelle
Konsistenz der gesamten Seite verloren geht.

## Nicht tun

Ohne ausdrücklichen Auftrag nicht:

- komplette Bereiche neu gestalten
- Farbpalette oder Designsystem austauschen
- Frameworks für visuelle Effekte hinzufügen
- Glassmorphism, starke Glow-Effekte oder übermäßige Schatten ergänzen
- dekorative Gradients einführen; funktionale Verläufe zur Lesbarkeit über
  Bildflächen bleiben zulässig
- Animationen zur bloßen Dekoration hinzufügen
- die Gestaltung an kurzfristige Webdesign-Trends anpassen
