<p align="center"><img src="http://217.160.50.166/img/RosebudsFull.png" alt="RosebudsFull"></p>


## Informations

Prérequis : 
- CronJob
- Serveur MySQL

Technologies :
- Laravel
- MySQL

## Fichiers importants


 ┣ :file_folder: app  
 ┃ ┗ :file_folder: Http  
 ┃ ┃ ┗ :file_folder: Controllers  
 ┃ ┃ ┃ ┣ :page_with_curl: AnnuaireController.php  
 ┃ ┃ ┃ ┣ :page_with_curl: ComptesController.php  
 ┃ ┃ ┃ ┣ :page_with_curl: EntrepriseController.php  
 ┃ ┃ ┃ ┣ :page_with_curl: FacturationController.php  
 ┃ ┃ ┃ ┣ :page_with_curl: HomeController.php  
 ┃ ┃ ┃ ┣ :page_with_curl: noAcces.php  
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
 ┃  
 ┣ :file_folder: public  
 ┃ ┗ :file_folder: css    
 ┃ ┗ :file_folder: js    
 ┃ ┗ :file_folder: js   
 ┃ ┗ :file_folder: fonts  
 ┃ ┗ :file_folder: img   
 ┣ :file_folder: resources  
 ┃ ┗ :file_folder: views  
 ┣ :file_folder: resources   
 ┃ ┗ :page_with_curl: web.php  
 ┣ :file_folder: storage   
 ┃ ┗ :file_folder: fonts  
 ┃ ┃ ┗ :page_with_curl: Roboto.ttf  
 ┃ ┗ :file_folder: app  
 ┃ ┃ ┗ :file_folder: pdf     
 ┃ ┃ ┃ ┗ :file_folder: facture  
 ┃ ┃ ┃ ┗ :file_folder: livraisons  
 ┃ ┃ ┃ ┗ :file_folder: livraisonsToSign  
 ┃ ┃ ┗ :file_folder: public     
 ┃ ┃ ┃ ┗ :file_folder: photos  

## TODO List

- [ ] Mise au propre du CSS
- [ ] Centraliser le stockage
- Ajout de pages dans la partie administration
    - [ ]  Modification des prix
    - [ ]  Modification des stocks minimum
    - [ ]  Génération de résumé de compta
- [ ] Page évent (Places des cubes, tour de tracteur, etc)
- [ ] Mise au propre des permission (faire passer les vérifications de perms sur des Middleware)

### MySQL

- Annuaire  
    :large_orange_diamond: VARCHAR ==name==
    :large_orange_diamond: VARCHAR ==numero==
    :large_orange_diamond: VARCHAR ==entreprise==
    :large_orange_diamond: VARCHAR ==details==

