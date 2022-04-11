<?php 
    //   var_dump($curr_menu);
?>
<div class="container mt-3"> 
     
    <h2><?=$title?></h2>
    <?= form_open('admin/update_menu');?>  
        <input type="text" class="form-control mb-3" name="menu_name" 
            value="<?=$curr_menu->menu_name?>">
        <input type="text" class="form-control mb-3" name="href" 
            value="<?=$curr_menu->href?>">
        <input type="text" class="form-control mb-3" name="page_id" 
            value="<?=$curr_menu->page_id?>">
        <input type="hidden" name="id" 
            value="<?=$curr_menu->id?>">
        <input type="submit" value="Сохранить" class="btn btn-primary">

    <?= form_close()?>

</div>