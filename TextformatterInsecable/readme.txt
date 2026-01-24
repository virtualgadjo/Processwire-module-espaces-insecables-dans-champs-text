anti-unwanted line break module

short readme text for those who don't like Markdown, which I can understand...

by l'ôt fou aka virtualgadjo but hey, who cares...

small module to prevent line breaks just before : ; ? ! " ‘ ’ “ ” / or after in the case of opening quotation marks

this only applies to text or textarea fields, but not ckeditor or tinyMCE, which have buttons or shortcuts to insert non-breaking spaces, which this module does automatically  where plain text fields do not

VERY IMPORTANT
if you use this module on fields that also use the _HTML Entity Encoder (htmlspecialchars)_** module, put ‘Textformatter Non-breaking’ AFTER, otherwise the non-breaking spaces &nbsp; will also be encoded and will appear as such on the front end.

module anti passages à la ligne inopportuns

petit readme en texte pour les ceusses qui n'aiment pas le markdown et que je peux comprendre...

by l'ôt fou aka virtualgadjo mais bon, ça, on s'en...

petit module pour empêcher les retours à la ligne juste avant les : ; ? ! " ‘ ’ “ ” / ou après dans le cas des guillemets ouvrants

ça ne concerne que les champs text ou textearea mais ni ckeditor ni tinyMCE pour lesquels il y a les boutons ou raccourcis pour insérer des espaces insécables, ce que ce module fait automatiquement  là où les champs de type texte brut non

TRÈS IMPORTANT
si vous utilisez ce module sur des champs qui utilisent aussi le module _Encodeur d'entités HTML (htmlspecialchars)_** mettez "Textformatter Insécable" APRÈS sinon les espaces insécables &nbsp; vont aussi ête encodés et apparaîtront tels quels en front

