<?php
trait Anios {
    public $diferencia ;
    public function Edad($fecha,$fechaAct){
        $diferencia = $fechaAct -> diff($fecha);
        if ($diferencia->format('%y') < 18) {
            echo '<script language="javascript">alert("tienes que ser mayor de 18 ");</script>';
            echo "<script>";
            echo "window.open('index.html','_self');";
            echo "</script>";
        }
        return $diferencia->format('%y');
    }
}
?>