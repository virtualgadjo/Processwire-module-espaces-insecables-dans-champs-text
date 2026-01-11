# module anti passages à la ligne inopportuns

by l'ôt fou aka virtualgadjo mais bon, ça, on s'en...

petit module pour empêcher les retours à la ligne juste avant les : ; ? ! " ‘ ’ “ ” / ou après dans le cas des guillemets ouvrants

ça ne concerne que les champs text ou textearea mais ni ckeditor ni tinyMCE pour lesquels il y a les boutons ou raccourcis pour insérer des espaces insécables, ce que ce module fait automatiquement  là où les champs de type texte brut non

**TRÈS IMPORTANT**\
si vous utilisez ce module sur des champs qui utilisent aussi le module **_Encodeur d'entités HTML (htmlspecialchars)_** mettez **_"Textformatter Insécable_**" APRÈS sinon les espaces insécables `&nbsp;` vont aussi ête encodés et apparaîtront tels quels en front

