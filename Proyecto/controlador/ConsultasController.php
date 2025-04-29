<?php
    class consultas extends dbconexion{
        public function select_paciente(){
            $sqlp = dbconexion::conexion()->prepare("select * from paciente");
            $sqlp -> execute();
            return $array = $sqlp->fetchAll(PDO::FETCH_ASSOC);
        }
        public function insert_paciente($tipo_doc,$documento,$fecha,$nombre,$apellidos,$sexo){
            $sqlp = dbconexion::conexion()->prepare("INSERT INTO paciente (tipo_doc,docuemnto,fecha,nombre,apellidos,sexo) VALUES ('$tipo_doc','$documento','$fecha','$nombre','$apellidos','$sexo') ");
            if($sqlp -> execute()){
                $resultado = self::select_paciente();
                return $resultado;
            }
        }
        public function obtener_paciente($cons){
            $sqlp = dbconexion::conexion()->prepare("select * from paciente where consecutivo = '".$cons."'");
            if($sqlp -> execute()){
                return $array = $sqlp -> fetchAll(PDO::FETCH_ASSOC);
            }else{
                return "error";
            }
        }
        public function update_paciente($cons,$tipo,$doc,$fec,$nom,$ape,$sexo){
            $sqlp = dbconexion::conexion()->prepare("UPDATE paciente SET tipo_doc='".$tipo."', documento='".$doc."', fecha='".$fec."', nombre='".$nom."', apellidos='".$ape."', sexo='".$sexo."' WHERE consecutivo ='".$cons."'));
            $sqlp -> execute();
            if($sqlp->rowCount() >0){
                $resultado = self::select_paciente();
                return $resultado;
             }else{
             return "error";
            }
        }
    }
?>