<div class="container mt-3"> 
     
    <h2><?=$title?></h2>
    <?= form_open('admin/insert_menu');?>  
        <input type="text" class="form-control mb-3" name="menu_name">
        <input type="text" class="form-control mb-3" name="href">
        <input type="text" class="form-control mb-3" name="page_id" value="1">
        <input type="submit" value="Сохранить" class="btn btn-primary">
    

    <?= form_close()?>

</div>