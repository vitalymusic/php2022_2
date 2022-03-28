<?php 

    include 'lesson2.php';

    use main\news\mainNews; //Импортирует класс
    use main\news\Page;


    $news3 = new mainNews("Third News","22.02.2022","Janis");
    $news3->showNews();

    $page3 = new Page();


    // https://github.com/PHPMailer/PHPMailer

    

?>