<?php
include('header.php');
?>
<link rel="stylesheet" href="../../validation/dist/css/bootstrapValidator.css"/>
    
<script type="text/javascript" src="../../validation/dist/js/bootstrapValidator.js"></script>
  <?php
    include('../../form.php');
    $frm=new formBuilder;      
  ?>   
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Add Upcoming Movie News
      </h1>
      
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Add Movies News</li>
      </ol>
    </section>

    <section class="content">

      <div class="box">
        <div class="box-body">
            <form action="process_add_news.php" method="post" enctype="multipart/form-data" id="form1">
              <div class="form-group">
                <label class="control-label">Movie name</label>
                <input type="text" name="name" class="form-control"/>
                <?php $frm->validate("name",array("required","label"=>"Movie Name")); ?>
              </div>
              <div class="form-group">
                 <label class="control-label">Cast</label>
                <input type="text" name="cast" class="form-control">
                <?php $frm->validate("cast",array("required","label"=>"Cast","regexp"=>"text")); ?>
              </div>
              
              <div class="form-group">
                <label class="control-label">Release Date</label>
                <input type="date" name="date" class="form-control"/>
                <?php $frm->validate("date",array("required","label"=>"Release Date")); ?>
              </div>
              
              <div class="form-group">
                <label class="control-label">Description</label>
                 <input type="text" name="description" class="form-control">
                 <?php $frm->validate("description",array("required","label"=>"Description")); ?>
              </div>
              <div class="form-group">
                  <label class="control-label">Images</label>
              <input type="file"  name="attachment" class="form-control" placeholder="Images">
               <?php $frm->validate("attachment",array("required","label"=>"Image")); ?>
              </div>
              <div class="form-group">
                <button class="btn btn-success">Add News</button>
              </div>
        </form>
        </div> 
      </div>

    </section>
  </div>
  <?php
include('footer.php');
?>
<script>
        <?php $frm->applyvalidations("form1");?>
    </script>