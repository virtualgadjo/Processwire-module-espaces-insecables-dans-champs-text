# module anti passages à la ligne inopportuns

Module qui s'adresse plutôt aux français du fait de notre gestion de certains caractères et donc readme en français, désolé 😊\
This module is primarily intended for French users due to our handling of certain characters, hence the readme is in French. Sorry about that 😊

et bon, module qui peut surtout intéresser quelques boomers maniaques dont je suis, évidemment, ceux qui écrivent "sa va ?" sur les réseaux soi-disant sociaux mrtci d'aller voir ailleurs si j'y suis 😈😛

## bon, c'est quoi l'histoire du coup

[petite vidéo sur ma chaîne youtube pour expliquer tout ça](https://www.youtube.com/watch?v=aMMkZncbQDI)

en bref, il s'agit d'empêcher les retours à la ligne juste avant les : ; ? ! " ‘ ’ “ ” / ou après dans le cas des guillemets ouvrants\
ça ne concerne que les champs text ou textearea mais ni ckeditor ni tinyMCE pour lesquels il y a les boutons ou raccourcis pour insérer des espaces insécables si besoin, ce que ce module fait automatiquement là où les champs de type texte brut non\
ça va surtout servir pour les champs de titraille avec des... titres, nooon, sans blague, un peu longs finissant par ! ou ? ou utilisant des guillemets à la française, mais pas que, dans un texdtarea pas richtext les occurences peuvent être mutiples

j'ai ajouté une archive zip du module comme ça, ceux qui préfèrent, comme moi..., organiser leur dossier /site/modules avec desz sous-dossisrs, hop, juste à décompresser la bête le dossier créé aura le bon nom et c'est fait

**TRÈS IMPORTANT**\
si vous utilisez ce module sur des champs qui utilisent aussi le module **_Encodeur d'entités HTML (htmlspecialchars)_** mettez **_"Textformatter Insécable_**" APRÈS sinon les espaces insécables `&nbsp;` vont aussi ête encodés et apparaîtront tels quels en front\
je remets ça dans le readme qui accompagne le module

