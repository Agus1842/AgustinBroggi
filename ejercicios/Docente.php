<?php 
require_once('Persona.php');
class Docente extends Persona{
    public function cal_Docente($arancel, $edad,$fechaAct,$Nacimiento){
    if ($edad >= 40 ) {
        $arancel = $arancel - ($arancel * 0.1);
    }
    if ($fechaAct->format('d-m') == $Nacimiento->format ('d-m')) {
        $arancel = $arancel * 2;
       
    }
    return $arancel;
    }
}
?>