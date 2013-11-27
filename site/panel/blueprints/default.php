<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: true
files: true
fields:
  title: 
    label: Titre du projet
    type:  text
  year:
  	label: Année
  	type: text
  author: 
    label: Auteur
    type:  text	  
  text: 
    label: Text
    type:  textarea
    size:  large
    buttons: 
      - h1
      - h2
      - h3
      - bold
      - italic
      - email
      - link
  lien: 
    label: Liens
    type:  textarea
    size: medium
    buttons:
    	- link
  tags: 
    label: Tags correspondant au projet
    type:  multicheckbox
    options:
      Création/Augmentation d'outils:  Création/Augmentation d'outils
      Partage de la documentation: Partage de la documentation
      Partage des sources:  Partage des sources
      Création en collaboration: Création en collaboration
      Workshop/Conférences: Workshop/Conférences
      Utilisation de logiciels open-source: Utilisation de logiciels open-source
      Projets de recherche : Projets de recherche 
  pays: 
    label: Pays du projet
    type:  select
    options:
      france:  France
      paysbas: Pays-Bas
      suisse: Suisse
      usa: USA
      belgique: Belgique
      espagne: Espagne
      allemagne: Allemagne       
  titreoutils: 
    label: Titre Outils
    type:  select
    options:
      Outils utilisés: Outils utilisés
      Outils open-source utilisés: Outils open-source utilisés 
  outils: 
    label: Outils utilisés
    type:  text
  titrestudio: 
    label: Présentation du studio (ne pas changer les paramètres)
    type:  select
    options:
      Présentation du studio: Présentation du studio
    default: Présentation du studio  
  studio: 
    label: Texte à propos du studio ou du graphiste (seulement si la pratique général du studio est en rapport avec les outils conviviaux)
    type:  textarea
    size: large
  buttons: 
      - h1
      - h2
      - h3
      - bold
      - italic
      - email
      - link
  titreprojets: 
    label: Titre Projets Liés
    type:  select
    options:
      Projets Liés: Projets Liés
  projets: 
    label: Projets Liés
    type:  text
  important: 
    label: Le tag le plus important
    type:  radio
    options:
      creation-outil:  Création/Augmentation d'outils
      documentation: Partage de la documentation
      partage-source:  Partage des sources
      collaborate: Création en collaboration
      work-conf: Workshop/Conférences
      software: Utilisation de logiciels open-source
      search: Projets de recherche 
  filter: 
    label: Filtres (Écrire "outil" pour Création/Augmentation d'outils, "doc" pour Partage de la documentation, "source" pour Partage des sources, "collaboration" pour Création en collaboration, "workshop" pour Workshop / Conférences, "logiciels" pour Utilisation de logiciels open-source et "recherche" pour Projets de recherche. Séparez les termes par un espace )
    type:  textarea
    size: small


