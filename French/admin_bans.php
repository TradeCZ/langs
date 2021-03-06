<?php

// Language definitions used in admin_bans.php
$lang_admin_bans = array(

'No user message'			=>	'Aucun utilisateur enregistré sous ce nom d\'utilisateur. Si vous souhaitez ajouter un bannissement n\'étant pas associé à un nom d\'utilisateur veuillez laisser le champ du nom d\'utilisateur vide.',
'No user ID message'			=>	'Aucun utilisateur inscrit avec cet ID.',
'User is admin message'			=>	'L\'utilisateur %s est un administrateur et ne peut être banni. Si vous souhaitez bannir un administrateur, vous devez d\'abord le destituer de ce rang.',
'User is mod message'                   =>      'L\'utilisateur %s est un modérateur et ne peut être banni. Si vous souhaitez bannir un modérateur, vous devez d\'abord le destituer de ce rang.',
'Must enter message'			=>	'Vous devez indiquer, au minimum, soit un nom d\'utilisateur, soit une adresse IP, soit une adresse électronique.',
'Cannot ban guest message'		=>	'Un visiteur ne peut être banni.',
'Invalid IP message'			=>	'Vous avez indiqué une IP/plage d\'IP invalide.',
'Invalid e-mail message'		=>	'L\'adresse électronique (ex. : utilisateur@domaine.com) ou le nom de domaine d\'adresse électronique (ex. : domaine.com) que vous avez indiqué est invalide.',
'Invalid date message'			=>	'Vous avez indiqué une date d\'expiration invalide.',
'Invalid date reasons'			=>	'Le format devrait être du type YYYY-MM-DD et la date doit être ultérieure à la date d\'aujourd\'hui.',
'Ban added redirect'			=>	'Bannissement ajouté. Redirection&#160;…' ,
'Ban edited redirect'			=>	'Bannissement modifié. Redirection&#160;…',
'Ban removed redirect'			=>	'Bannissement supprimé. Redirection&#160;…',

'New ban head'				=>	'Nouveau bannissement',
'Add ban subhead'			=>	'Ajouter le bannissement',
'Username label'			=>	'Nom d\'utilisateur',
'Username help'				=>	'Le nom d\'utilisateur à bannir (insensible à la casse).',
'Username advanced help'		=>	'Le nom d\'utilisateur à bannir (insensible à la casse). La page suivante vous permettra d\'indiquer une IP et un e-mail personnalisés. Si vous ne souhaitez bannir qu\'une IP/plage d\'IP ou un e-mail, veuillez laisser ce champ vide.',

'Ban search head'			=>	'Recherche de bannissements',
'Ban search subhead'			=>	'Indiquer les critères de recherche',
'Ban search info'			=>	'Recherche de bannissements dans la base de données. Vous pouvez indiquer un ou plusieurs termes à retrouver. Les jokers sous formes d\'astérisques (*) sont acceptés. Pour afficher tous les bannissements, laisser tous les champs vides.',
'Date help'				=>	'(yyyy-mm-dd)',
'Message label'				=>	'Message',
'Expire after label'			=>	'Expire après',
'Expire before label'			=>	'Expire avant',
'Order by label'			=>	'Trier par',
'Order by username'			=>	'Nom d\'utilisateur',
'Order by ip'			        =>	'IP',
'Order by e-mail'			=>	'E-mail',
'Order by expire'			=>	'Date d\'expiration',
'Ascending'				=>	'Ascendant',
'Descending'				=>	'Descendant',
'Submit search'				=>	'Lancer la recherche',

'E-mail label'				=>	'E-mail',
'E-mail help'				=>	'L\'e-mail ou le domaine d\'e-mail que vous souhaitez bannir (ex. : utilisateur@domaine.com ou domaine.com). Rendez-vous à «&#160;Autoriser les adresses électroniques bannies&#160;» dans la rubrique Permissions pour davantage d\'informations.',
'IP label'				=>	'Adresse IP/plages d\'adresses IP',
'IP help'				=>	'L\'adresse IP ou la plage d\'adresses IP que vous souhaitez bannir (ex. : 150.11.110.1 ou 150.11.110). Séparez les adresses par des espaces. Si une IP est déjà indiquée, il s\'agit de la dernière adresse IP connue de cet utilisateur enregistrée dans la base de données.',
'IP help link'				=>	'Cliquez sur %s pour afficher les statistiques IP de cet utilisateur.',
'Ban advanced head'			=>	'Paramètres de bannissement avancés',
'Ban advanced subhead'			=>	'Ajouter IP et e-mail pour compléter le bannissement',
'Ban message label'			=>	'Message de bannissement',
'Ban message help'			=>	'Un message qui s\'affichera lors de la prochaine visite de l\'utilisateur banni.',
'Message expiry subhead'		=>	'Message de bannissement et expiration',
'Ban IP range info'			=>	'Vous devrez être très prudent lors du bannissement d\'une plage d\'IP puisqu\'il est possible que plusieurs utilisateurs utilisent la même partie d\'adresse IP.',
'Expire date label'			=>	'Date d\'expiration',
'Expire date help'			=>	'La date à laquelle ce bannissement devrait prendre automatiquement fin (format : YYYY-MM-DD). Laissez vide pour une suppression manuelle.',

'Results head'				=>	'Résultats de la recherche',
'Results username head'			=>	'Nom d\'utilisateur',
'Results e-mail head'			=>	'E-mail',
'Results IP address head'		=>	'IP/plage d\'IP',
'Results expire head'	      		=>	'Expire',
'Results message head'	        	=>	'Message',
'Results banned by head'       		=>	'Bannis par',
'Results actions head'			=>	'Actions',
'No match'				=>	'Pas de correspondance',
'Unknown'				=>	'Inconnu',

);