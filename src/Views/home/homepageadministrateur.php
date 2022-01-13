
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

  <h2>Page d'accueil Tableau de Bord Admin</h2>
    
  <!--
      - CRUD comptes utilisateurs 
      - CRUD des sections/ thèmes/ rubriques/ documents
      - CRUD formateurs/auditeurs 
      - CRUD des documents 
  -->

  <div class="grid-admin">

    <div class="grid-item">
      <div class="grid-docu">
        <div><a href="">liste des Auditeurs</a></div>
        <div><a href="">recherche Auditeur</a></div>
        <div><a href="">ajouter un Auditeur</a></div>
      </div>

      <div class="grid-docu">
        <div><a href="">liste des formateurs</a></div>
        <div><a href="">recherche formateur</a></div>
        <div><a href="">ajouter un formateur</a></div>
      </div>

      <div class="grid-docu">
        <div><a href="">liste des Managers</a></div>
        <div><a href="">recherche manager</a></div>
        <div><a href="">ajouter un manager</a></div>
      </div>

      <div class="grid-docu">
        <div><a href="">liste des Administrateurs</a></div>
        <div><a href="">ajouter un Administrateur</a></div>
      </div>
    </div>

    <div class="grid-item">
      <div class="grid-docu">
        <div><a href="">liste des Documents</a></div>
        <div><a href="">recherche de documents</a></div>
        <div><a href="">ajouter un document</a></div>
      </div>

      <div class="grid-docu">
        <div><a href="">liste des sections</a></div>
        <div><a href="">recherche de sections</a></div>
        <div><a href="">ajouter une section</a></div>
      </div>

      <div class="grid-docu">
        <div><a href="">liste des themes</a></div>
        <div><a href="">recherche de themes</a></div>
        <div><a href="">ajouter un theme</a></div>
      </div>

      <div class="grid-docu">
        <div><a href="">liste des rubriques</a></div>
        <div><a href="">recherche de rubriques</a></div>
        <div><a href="">ajouter une rubrique</a></div>
      </div>
    </div>
  </div>


