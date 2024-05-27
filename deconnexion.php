<?php
/* Cet extrait de code PHP effectue les actions suivantes : */
/* `session_start();` est une fonction PHP qui initialise une nouvelle session ou reprend une session
existante. Il est généralement utilisé au début d'un script pour démarrer ou reprendre une session,
vous permettant de stocker et de récupérer des variables de session sur plusieurs pages. */
session_start();
/* `session_unset();` est une fonction PHP qui supprime toutes les variables de la session. Il efface
toutes les données enregistrées dans la session en cours. */
session_unset();
/* `session_destroy();` est une fonction PHP qui détruit toutes les données enregistrées dans une
session. Il met effectivement fin à la session en cours et supprime toutes les données de session.
Cette fonction est couramment utilisée lorsque vous souhaitez supprimer complètement toutes les
variables de session et mettre fin à la session d'un utilisateur. */
session_destroy();
/* Le code `header('Location: index');` est une fonction PHP qui envoie un en-tête HTTP brut au
navigateur, lui demandant de rediriger vers une autre page. Dans ce cas, il redirige l'utilisateur
vers la page « index ». */
header('Location: index');
exit();