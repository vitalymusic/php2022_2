<?php 
    // var_dump($menu);
?>
<div class="container mt-3">
    <h2><?=$title?></h2>

    <div class="container m-2 p-3 bg-light">
        <h4>Меню сайта</h4>
        <table class="table">
            <thead>
                <tr>
                    <td>Название</td>
                    <td>Адрес</td>
                    <td>Действия</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($menu as $item):?>
                <tr>
                    <td><?=$item->menu_name?></td>
                    <td><?=$item->href?></td>
                    <td>
                        <a class="btn btn-primary" href="<?=base_url('admin/edit/'. $item->id)?>">
                            Редактировать
                        </a>
                        <a class="btn btn-danger deleteBtn" data-id = "<?=$item->id?>">
                            Удалить
                         </a>

                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
    <a href="<?=base_url('admin/add_new')?>"class="btn btn-warning">
                            + Добавить
    </a>

</div>

<script>
    $(document).ready(()=>{
        


        $('.deleteBtn').click((event)=>{
            let id = $(event.target).data("id");
            let ans = confirm("Are You sure???",false);
            if(ans){
                $.get(`<?=base_url('admin/delete/');?>${id}`,()=>{
                    location.reload();
                })
                
            }


        })

    })
</script>