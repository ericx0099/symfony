<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GenericController extends AbstractController
{
    public function checkNameFormat($name) : bool
    {
        if ( preg_match("/^([a-zA-ZçÇ' ]+)$/",$name))
        {
            return true;
        }else{
            return false;
        }
    }
    public function validateDni($dni) : bool
    {
        if ( !preg_match('^[0-9]{8,8}[A-Za-z]$^',$dni))
        {
            return false;
        }
        $letra = substr($dni, -1);
        $numeros = substr($dni, 0, -1);

        if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
            return true;
        }else{
            return false;
        }
    }
}
