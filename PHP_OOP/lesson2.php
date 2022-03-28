<?php 

    namespace  main\news;  

    class Page{

        protected $content;


        function setContent($content){
            $this->content = $content;
            return true;
        }
    }



    class Sections extends Page{


        function setContent($content){
            $this->content = strtoupper($content);
            return true;
        }
        function setContent2($content){
            parent::setContent($content);
        }

        function showContent(){
            echo "
            <h1>{$this->content}</h1>
            ";
        }
    }
    // $section1 = new Sections();
    // $section1->setContent2("testing sections");
    // $section1->showContent();

    // $mainPage = new Page();
    
    // if($mainPage->setContent("abra kadabra")){
    //     echo "success <br>";
    // }

    // var_dump($section1);

      

        class News{
            function __construct($title,$date){
                    $this->title = $title;
                    $this->date = $date;
            }

            function showNews(){
                echo "<h1>{$this->title}</h1>";
                echo "<p>{$this->date}</p>";
            }
        }

        class mainNews extends News{
            function __construct($title,$date,$author){
                parent:: __construct($title,$date);
                $this->author = $author;

            }
        }


        $news1 = new News("First News","20.02.2022");

        $news2 = new mainNews("Second News","21.02.2022","Vitaly");

        // $news1->showNews();
        // $news2->showNews();




        // var_dump($news1);
        // var_dump($news2);

?>