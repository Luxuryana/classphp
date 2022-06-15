<?php 

class Dispatcher

{
    private ?string $page=null;
    private ?string $id=null;
    private ?string $action=null;


public function __construct()
{
    if(isset($_GET['page'])) {
        $this -> page = $_GET['page'];
    }

    if(isset($_GET['id'])) {
        $this -> id = $_GET['id'];
    }

    if(isset($_GET['action'])) {
        $this -> action = $_GET['action'];
    }
}

public function Dispatch()
{
    if(isset($_GET['page'])){
        switch ($this->page) 
        {

            case 'courants':
                include("pages/courants.php");
                break;

            case 'epargnes':
                include("pages/epargnes.php");
                break;           
                    
            default:
                include("pages/404.php");
                break;
        }
        }
        else
        {
            include ("pages/accueil.php");
        }
}

}