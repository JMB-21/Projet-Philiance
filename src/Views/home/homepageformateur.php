



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

<?php 
           
      // echo BASEURL;
      
?>
   
<!-- 

Formateurs :
- CRUD des documents
- Read utilisateurs 

 -->
 <p>&nbsp;</p>
 
 <div class="titreLecon">
            <h2>Tableau de Bord Formateur</h2>
  </div>
<div class="grid-admin">

<div class="grid-item">
<div class="grid-docu">
<div><a href="<?=BASEURL?>auditeur/liste">liste des Auditeurs</a></div>
<div><a href="<?=BASEURL?>auditeur/rech">recherche Auditeur</a></div>
</div>

<div class="grid-docu">
<div><a href="<?=BASEURL?>formateur/liste">liste des formateurs</a></div>
<div><a href="<?=BASEURL?>formateur/rech">recherche formateur</a></div>
</div>

<div class="grid-docu">
<div><a href="<?=BASEURL?>manager/liste">liste des Managers</a> </div>
<div><a href="<?=BASEURL?>manager/rech">recherche manager</a></div>
</div>

<div class="grid-docu">
<div><a href="<?=BASEURL?>admin/liste">liste des Administrateurs</a></div>
</div>
</div>

<div class="grid-item">
<div class="grid-docu">
   <div><a href="<?=BASEURL?>document/liste">liste des Documents</a></div>
   <div><a href="<?=BASEURL?>document/rechdocument">recherche de documents</a></div>
   <div><a href="<?=BASEURL?>document/adddocument">ajouter un document</a></div>   
</div>

</div>
</div>
</div>


