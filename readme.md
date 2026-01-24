# anti-unwanted line break module<br />module anti passages à la ligne inopportuns

This module is mainly intended for French users due to our handling of certain characters, but you never know.\
Module qui s'adresse plutôt aux français du fait de notre gestion de certains caractères mais bon, on ne sait jamais

And well, this module may be of particular interest to a few maniacal boomers like myself, obviously those who write ‘sa va?’ on so-called social networks. Please go elsewhere if that's what you're looking for. 😈😛\
et bon, module qui peut surtout intéresser quelques boomers maniaques dont je suis, évidemment, ceux qui écrivent "sa va ?" sur les réseaux soi-disant sociaux merci d'aller voir ailleurs si j'y suis 😈😛

## Well, what's the story then? | bon, c'est quoi l'histoire du coup

[petite vidéo sur ma chaîne youtube pour expliquer tout ça (en français, désolé | in French, sorry...)](https://www.youtube.com/watch?v=aMMkZncbQDI)

In short, the aim is to prevent line breaks just before : ; ? ! " ‘ ’ “ ” / or after in the case of opening quotation marks.
This only applies to text or textarea fields, but not to CKEditor or TinyMCE, which have buttons or shortcuts for inserting non-breaking spaces if necessary, something this module does automatically in plain text fields.
This will mainly be used for title fields with... titles, nooo, just kidding, slightly long ones ending with ! or ? or using French quotation marks, but not only that, in a textarea that is not rich text, there may be multiple occurrences.

en bref, il s'agit d'empêcher les retours à la ligne juste avant les : ; ? ! " ‘ ’ “ ” / ou après dans le cas des guillemets ouvrants\
ça ne concerne que les champs text ou textearea mais ni ckeditor ni tinyMCE pour lesquels il y a les boutons ou raccourcis pour insérer des espaces insécables si besoin, ce que ce module fait automatiquement là où les champs de type texte brut non\
ça va surtout servir pour les champs de titraille avec des... titres, nooon, sans blague, un peu longs finissant par ! ou ? ou utilisant des guillemets à la française, mais pas que, dans un texdtarea pas richtext les occurences peuvent être mutiples

I added a zip archive of the module so that those who prefer, like me, to organise their /site/modules folder with subfolders can just unzip it and the folder created will have the right name and that's it.

j'ai ajouté une archive zip du module comme ça, ceux qui préfèrent, comme moi..., organiser leur dossier /site/modules avec desz sous-dossisrs, hop, juste à décompresser la bête le dossier créé aura le bon nom et c'est fait

**VERY IMPORTANT**\
if you use this module on fields that also use the **_HTML entity encoder (htmlspecialchars)_** module, put **_‘Textformatter Non-breaking_**’ AFTER it, otherwise non-breaking spaces `&nbsp;` will also be encoded and will appear as such on the front end.

**TRÈS IMPORTANT**\
si vous utilisez ce module sur des champs qui utilisent aussi le module **_Encodeur d'entités HTML (htmlspecialchars)_** mettez **_"Textformatter Insécable_**" APRÈS sinon les espaces insécables `&nbsp;` vont aussi ête encodés et apparaîtront tels quels en front


