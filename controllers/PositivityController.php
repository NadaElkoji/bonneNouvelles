<?php


class PositivityController
{
    public function __construct() {

    }

    public function run(){

        $notification="";

        require_once(CHEMIN_VUES . 'positivity.php');
    }


    public function countPositivity($message):string
    {


        $positivesWords = array("bon", "bonne", "super", "cool", "génial", "géniale", "parfait", "parfaite",
            "incroyable", "excellent", "excellente");

        $arrayUser = explode(' ', $message);

        $nbrPositif = 0;

        for ($i = 0; $i < sizeof($arrayUser); $i++) {
            for ($j = 0; $j < sizeof($positivesWords); $j++) {
                if ($arrayUser[$i] === $positivesWords[$j])
                    $nbrPositif++;
            }
        }

        switch ($nbrPositif) {
            case 0:
                return "neutre";
                break;
            default:
                return "parfait";
                break;
        }
    }

}