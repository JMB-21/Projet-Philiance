
<style> 
  .grid-admin {
    display: grid;
    grid-template-columns: auto auto;
    background-color: #2196F3;
    margin: 100px;    
    }

    .grid-item {
    background-color: rgba(255, 255, 255, 0.8);
    border: 1px solid rgba(0, 0, 0, 0.4);   
    font-size: 14px;
    text-align: center;
    }
   
    .grid-docu {
    display: grid;
    grid-template-columns: auto;
    background-color: #2196F3;
    margin:50px;   
    }
</style>

  
    
  <!--
      - CRUD comptes utilisateurs 
      - CRUD des sections/ thèmes/ rubriques/ documents
      - CRUD formateurs/auditeurs 
      - CRUD des documents 
  -->

<?php 
      $path = "http://localhost/Projet-Philiance";
?>
  <p>&nbsp;</p>

  <div class="titreLeçon">
            <h2>Tableau de Bord Admininistrateur</h2>
  </div>
  <div class="grid-admin">  
    <div class="grid-item">
      <div class="grid-docu">
        <div><a href="<?=$path?>/auditeur/liste">liste des Auditeurs</a></div>
        <div><a href="<?=$path?>/rech/rechauditeur/">recherche Auditeur</a></div>
        <div><a href="<?=$path?>/auditeur/addauditeur">ajouter un Auditeur</a></div>
      </div>

      <div class="grid-docu">
        <div><a href="<?=$path?>/formateur/liste">liste des formateurs</a></div>
        <div><a href="<?=$path?>/formateur/rech">recherche formateur</a></div>
        <div><a href="<?=$path?>/formateur/add">ajouter un formateur</a></div>
      </div>

      <div class="grid-docu">
        <div><a href="<?=$path?>/manager/liste">liste des Managers</a></div>
        <div><a href="<?=$path?>/manager/rech">recherche manager</a></div>
        <div><a href="<?=$path?>/manager/add">ajouter un manager</a></div>
      </div>

      <div class="grid-docu">
        <div><a href="<?=$path?>/admin/liste">liste des Administrateurs</a></div>
        <div><a href="<?=$path?>/admin/add">ajouter un Administrateur</a></div>
      </div>
    </div>

    <div class="grid-item">
      <div class="grid-docu">     

        <div><a href="<?=$path?>/document/liste">liste des Documents</a></div>
        <div><a href="<?=$path?>/document/rechdocument">recherche de documents</a></div>
        <div><a href="<?=$path?>/document/adddocument">ajouter un document</a></div>
      </div>

      <div class="grid-docu">
        <div><a href="<?=$path?>/section/liste">liste des sections</a></div>
        <div><a href="<?=$path?>/section/rech">recherche de sections</a></div>
        <div><a href="<?=$path?>/section/add">ajouter une section</a></div>
      </div>

      <div class="grid-docu">
        <div><a href="<?=$path?>/theme/liste">liste des themes</a></div>
        <div><a href="<?=$path?>/theme/rech">recherche de themes</a></div>
        <div><a href="<?=$path?>/theme/add">ajouter un theme</a></div>
      </div>

      <div class="grid-docu">
        <div><a href="<?=$path?>/rubrik/liste">liste des rubriques</a></div>
        <div><a href="<?=$path?>/rubrik/rech">recherche de rubriques</a></div>
        <div><a href="<?=$path?>/rubrik/add">ajouter une rubrique</a></div>
      </div>
    </div>
  </div>


