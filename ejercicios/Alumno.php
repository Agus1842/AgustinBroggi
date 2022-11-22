<?php
require_once('Persona.php');
class Alumno extends Persona {
public function cal_Alumno($arancel,$edad,$fechaAct,$Nacimiento){
    if ($edad <= 25 ) {
         $arancel = $arancel-  ($arancel * 0.2);   
    }
    if ($fechaAct->format('d-m') == $Nacimiento->format ('d-m')) {
        $arancel = 0; 
     }
     return $arancel;
 }

}




?>