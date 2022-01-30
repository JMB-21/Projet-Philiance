
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
      // echo "baseurl :".BASEURL;
?>
  <p>&nbsp;</p>

  <div class="titreleçon">
            <h2>Tableau de Bord Admininistrateur</h2>
  </div>
  <div class="grid-admin">  
    <div class="grid-item">
      <div class="grid-docu">
        <div><a href="<?=BASEURL?>auditeur/liste">liste des Auditeurs</a></div>
        <div><a href="<?=BASEURL?>rech/rechauditeur/">recherche Auditeur</a></div>
        <div><a href="<?=BASEURL?>auditeur/addauditeur">ajouter un Auditeur</a></div>
      </div>

      <div class="grid-docu">
        <div><a href="<?=BASEURL?>formateur/liste">liste des formateurs</a></div>
        <div><a href="<?=BASEURL?>formateur/rech">recherche formateur</a></div>
        <div><a href="<?=BASEURL?>formateur/add">ajouter un formateur</a></div>
      </div>

      <div class="grid-docu">
        <div><a href="<?=BASEURL?>manager/liste">liste des Managers</a></div>
        <div><a href="<?=BASEURL?>manager/rech">recherche manager</a></div>
        <div><a href="<?=BASEURL?>manager/add">ajouter un manager</a></div>
      </div>

      <div class="grid-docu">
        <div><a href="<?=BASEURL?>admin/liste">liste des Administrateurs</a></div>
        <div><a href="<?=BASEURL?>admin/add">ajouter un Administrateur</a></div>
      </div>
    </div>

    <div class="grid-item">
      <div class="grid-docu">     

        <div><a href="<?=BASEURL?>document/liste">liste des Documents</a></div>
        <div><a href="<?=BASEURL?>document/rechdocument">recherche de documents</a></div>
        <div><a href="<?=BASEURL?>document/adddocument">ajouter un document</a></div>
      </div>

      <div class="grid-docu">
        <div><a href="<?=BASEURL?>section/liste">liste des sections</a></div>
        <div><a href="<?=BASEURL?>section/rech">recherche de sections</a></div>
        <div><a href="<?=BASEURL?>section/add">ajouter une section</a></div>
      </div>

      <div class="grid-docu">
        <div><a href="<?=BASEURL?>theme/liste">liste des themes</a></div>
        <div><a href="<?=BASEURL?>theme/rech">recherche de themes</a></div>
        <div><a href="<?=BASEURL?>theme/add">ajouter un theme</a></div>
      </div>

      <div class="grid-docu">
        <div><a href="<?=BASEURL?>rubrik/liste">liste des rubriques</a></div>
        <div><a href="<?=BASEURL?>rubrik/rech">recherche de rubriques</a></div>
        <div><a href="<?=BASEURL?>rubrik/add">ajouter une rubrique</a></div>
      </div>

      <div class="grid-docu">
        <div><a href="<?=BASEURL?>news">Gestion Newsletter</a></div>
      </div>
    </div>
  </div>


