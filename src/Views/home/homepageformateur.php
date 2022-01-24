



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

Formateurs :
- CRUD des documents
- Read utilisateurs 

 -->

 <div class="titreLeçon">
            <h2>Tableau de Bord Formateur</h2>
  </div>
<div class="grid-admin">

<div class="grid-item">
<div class="grid-docu">
<div><a href="../auditeur/liste">liste des Auditeurs</a></div>
<div><a href="../auditeur/rech">recherche Auditeur</a></div>
</div>

<div class="grid-docu">
<div><a href="../formateur/liste">liste des formateurs</a></div>
<div><a href="../formateur/rech">recherche formateur</a></div>
</div>

<div class="grid-docu">
<div><a href="../manager/liste">liste des Managers</a> </div>
<div><a href="../manager/rech">recherche manager</a></div>
</div>

<div class="grid-docu">
<div><a href="../admin/liste">liste des Administrateurs</a></div>
</div>
</div>

<div class="grid-item">
<div class="grid-docu">
   <div><a href="../document/liste">liste des Documents</a></div>
   <div><a href="../document/rech">recherche de documents</a></div>
   <div><a href="../document/add">ajouter un document</a></div>   
</div>

</div>
</div>
</div>


