<p align="center"><img src="http://217.160.50.166/img/RosebudsFull.png" alt="RosebudsFull"></p>


## Informations

Prérequis : 
- CronJob
- Serveur MySQL

Technologies :
- Laravel
- MySQL
- Tailwind
- DomPDF
- Setasign
- Larascord

## Fichiers importants


 ┣ :file_folder: app  
 ┃ ┗ :file_folder: Http  
 ┃ ┃ ┗ :file_folder: Controllers  
 ┃ ┃ ┃ ┣ :page_with_curl: AnnuaireController.php  
 ┃ ┃ ┃ ┣ :page_with_curl: ComptesController.php  
 ┃ ┃ ┃ ┣ :page_with_curl: EntrepriseController.php  
 ┃ ┃ ┃ ┣ :page_with_curl: FacturationController.php  
 ┃ ┃ ┃ ┣ :page_with_curl: HomeController.php  
 ┃ ┃ ┃ ┣ :page_with_curl: noAccess.php  
 ┃ ┃ ┃ ┣ :page_with_curl: NotesDeFraisController.php  
 ┃ ┃ ┃ ┣ :page_with_curl: PDFcontroller.php  
 ┃ ┃ ┃ ┣ :page_with_curl: PointeuseControler.php  
 ┃ ┃ ┃ ┣ :page_with_curl: ProfileController.php  
 ┃ ┃ ┃ ┣ :page_with_curl: StockController.php  
 ┃ ┃ ┃ ┣ :page_with_curl: TeaController.php  
 ┃ ┃ ┃ ┣ :page_with_curl: VenteController.php  
 ┃ ┃ ┃ ┗ :file_folder: direction  
 ┃ ┃ ┃ ┃ ┣ :page_with_curl: BonsDeLivraisonController.php  
 ┃ ┃ ┃ ┃ ┣ :page_with_curl: ComptabiliteController.php  
 ┃ ┃ ┃ ┃ ┣ :page_with_curl: ContratController.php  
 ┃ ┃ ┃ ┃ ┣ :page_with_curl: DirectionHomeController.php  
 ┃ ┃ ┃ ┃ ┣ :page_with_curl: FacturesController.php  
 ┃ ┃ ┃ ┃ ┣ :page_with_curl: UsersController.php  
 ┃  
 ┣ :file_folder: database  
 ┃ ┗ :file_folder: migrations    
 ┃ ┃ ┣ :page_with_curl: 2014_10_12_000000_create_users_table.php  
 ┃ ┃ ┣ :page_with_curl: 2023_02_25_034925_create_pointeuses_table.php  
 ┃ ┃ ┣ :page_with_curl: 2023_02_25_054839_create_teas_table.php  
 ┃ ┃ ┣ :page_with_curl: 2023_02_26_034014_livre_des_comptes.php  
 ┃ ┃ ┣ :page_with_curl: 2023_03_01_110200_supérettes.php  
 ┃ ┃ ┣ :page_with_curl: 2023_03_01_150549_stock.php  
 ┃ ┃ ┣ :page_with_curl: 2023_03_06_132019_annuaire.php  
 ┃ ┃ ┣ :page_with_curl: 2023_03_19_040139_compta.php  
 ┃ ┃ ┣ :page_with_curl: 2023_03_20_053725_files.php  
 ┃ ┃ ┣ :page_with_curl: 2023_03_21_070852_notes_de_frais.php  
 ┃ ┃ ┣ :page_with_curl: 2023_05_08_115502_price.php  
 ┃  
 ┣ :file_folder: public  
 ┃ ┗ :file_folder: css    
 ┃ ┗ :file_folder: js    
 ┃ ┗ :file_folder: js   
 ┃ ┗ :file_folder: fonts  
 ┃ ┗ :file_folder: img   
 ┃  
 ┣ :file_folder: resources  
 ┃ ┗ :file_folder: views  
 ┣ :file_folder: resources   
 ┃ ┗ :page_with_curl: web.php  
 ┃  
 ┣ :file_folder: storage   
 ┃ ┗ :file_folder: fonts  
 ┃ ┃ ┗ :page_with_curl: Roboto.ttf  
 ┃ ┗ :file_folder: app  
 ┃ ┃ ┗ :file_folder: pdf     
 ┃ ┃ ┃ ┗ :file_folder: facture  
 ┃ ┃ ┃ ┗ :file_folder: livraisons  
 ┃ ┃ ┃ ┗ :file_folder: livraisonsToSign    
 ┃ ┃ ┗ :file_folder: photos  

## TODO List

- [ ] Mise au propre du CSS
- [x] Centraliser le stockage
- [ ] Mise au propre de MySQL
- [ ] Ajout de personne dans l'annuaire via le site
- [ ] Documentation (Comment utiliser le site, infos RP, etc)
- Rework entreprise
    - [ ] Prix différent pour chaque entreprise
    - [ ] Page plus légère
    - [ ] Calendrier des livraisons hebdos
- Ajout d'une zone actionnaires
    - [ ]  Bilan financier dédié
    - [ ]  Planning
    - [ ]  Historique dividendes
- Ajout de pages dans la partie administration
    - [ ]  Modification des prix
    - [ ]  Modification des stocks minimum
    - [ ]  Génération de résumé de compta hebdo
    - [ ]  Génération de la déclaration CA
    - [ ]  Estimations salaires
    - [ ]  Notes de frais (Avance de note de frais, montant à virer en fin de semaine)
    
- [ ] Page évent (Places des cubes, tour de tracteur, etc)
- [ ] Mise au propre des permission (faire passer les vérifications de perms sur des Middleware)

### MySQL

- Annuaire  
    :large_orange_diamond: **name** (Nom RP)                
    :large_orange_diamond: **numero** (Numéro RP)                
    :large_orange_diamond: **entreprise** (Entreprise RP)                
    :large_orange_diamond: **details** (Détails RP, grade, etc)                
- Bilan                
    :large_orange_diamond: **week** (Numéro de semaine)       
    :large_orange_diamond: **bankStart** (Compte de l'entreprise en début de semaine)                
    :large_orange_diamond: **ca**       
    :large_orange_diamond: **depenses**         
    :large_orange_diamond: **benefices**        
    :large_orange_diamond: **bankEnd** (Compte de l'entreprise en fin de semaine)       
- Comptes  
    :large_orange_diamond: **discord** (ID Discord)  
    :large_orange_diamond: **user** (Nom RP)   
    :large_orange_diamond: **name** (Type d'entrée : 24/7, Farine, etc)- A RENOMMER  
    :large_orange_diamond: **montant**     
    :large_orange_diamond: **details**     
    :large_orange_diamond: **meta** (Icone à afficher dans le livre des comptes         
    :large_orange_diamond: **timestamp**           
- Files  
    :large_orange_diamond: **fileID**   
    :large_orange_diamond: **entreprise**             
    :large_orange_diamond: **type** (Bon de livraison/Facture/Contrat)                
    :large_orange_diamond: **name** (Nom du fichier)       
    :large_orange_diamond: **path** (emplacement du fichier dans le /storage/app/pdf/)       
    :large_orange_diamond: **publicAccess** (Accessible en public)                   
- Frais  
    :large_orange_diamond: **discord** (ID Discord)                
    :large_orange_diamond: **user** (Nom RP)               
    :large_orange_diamond: **type**             
    :large_orange_diamond: **montant**               
    :large_orange_diamond: **timestamp**        
- Livraisons (Rework à venir)       
- Pointeuses  
    :large_orange_diamond: **user**                
    :large_orange_diamond: **time**               
    :large_orange_diamond: **salary**              
    :large_orange_diamond: **start**                 
    :large_orange_diamond: **end**             
- Stock        
    :large_orange_diamond: **name**  
    :large_orange_diamond: **stock** (-1 = Pas de stock, Ex : Panier de fruits)  
    :large_orange_diamond: **minStock**  
    :large_orange_diamond: **warnStock**  
    :large_orange_diamond: **price** (0 = Pas en vente)  
    :large_orange_diamond: **entreprisePrice** (0 = Pas en vente)     
    :large_orange_diamond: **contratPrice** (0 = Pas en vente)  
    :large_orange_diamond: **startAt** (2000-01-01 00:00:00 = Pas de suivi de production)  
- Supérettes  
    :large_orange_diamond: **name**   
    :large_orange_diamond: **total**          
    :large_orange_diamond: **restant**                  
    :large_orange_diamond: **endAt**                         
- Tea  
    :large_orange_diamond: **name**                
    :large_orange_diamond: **stock**                            
    :large_orange_diamond: **minStock**                 
    :large_orange_diamond: **warnStock**                       
    :large_orange_diamond: **price** (0 = Pas en vente)                              
    :large_orange_diamond: **entreprisePrice** (0 = Pas en vente)                   
    :large_orange_diamond: **contratPrice** (0 = Pas en vente)                 
- Users  
    (seulement les infos utilisés)  
    :large_orange_diamond: **id**  
    :large_orange_diamond: **name**  
    :large_orange_diamond: **rank**  
    :large_orange_diamond: **rankLevel**  
    :large_orange_diamond: **sex**  
    :large_orange_diamond: **salary**  
    :large_orange_diamond: **allowed**  
- Price  
    :large_orange_diamond: **client** (Nom entreprise ou particulier)  
    :large_orange_diamond: **product**          
    :large_orange_diamond: **price**                  
    :large_orange_diamond: **promo**     



