<?php
require 'conexion.php';

  $usuario = $_POST['usuario'];
  $contrasena = $_POST['contrasena'];
  $contrasena = hash('sha512',$contrasena);
 
if(isset($_POST['registrar'])){

  $nombre = $_POST['nombre'];    
  $email = $_POST['email'];
  $telefono = $_POST['telefono'];
  $gender = $_POST['gender'];

  

  switch ($gender) {
    case 'alumno':
      $consulta = "INSERT INTO alumnos(Nombre, Nombre_Usuario, Email, Telefono, Contraseña, Volumen) 
      VALUES ('$nombre','$usuario','$email','$telefono','$contrasena','$gender')";
      
      break;
    case 'profesor':
      $consulta = "INSERT INTO maestros(Nombre_Maestro, Nombre_Usuario, Email, Telefono, Contraseña, Volumen) 
      VALUES ('$nombre','$usuario','$email','$telefono','$contrasena','$gender')";
     
      break;
    case 'academia':
      $consulta = "INSERT INTO escuelas(Nombre_Escuela, Nombre_Usuario, Email, Telefono, Contraseña, Volumen) 
      VALUES ('$nombre','$usuario','$email','$telefono','$contrasena','$gender')";  
      
      break;
      default:
      echo "Ups ocurrio un error";
      break;
  }
  header("location: Sesion2.php");
  mysqli_query($conexion,$consulta);
}if(isset($_POST['Login'])){
  session_start();
  $_SESSION['usuario']=$usuario;

    include('conexion.php');
      $consulta = "SELECT *FROM alumnos where Nombre_Usuario='$usuario' and Contraseña='$contrasena'";
      $contador = "SELECT COUNT(*) FROM alumnos";
      if($contador > 0){
        $resultado = mysqli_query($conexion,$consulta);
        $filas = mysqli_num_rows($resultado);
      if($filas){
        header("location:Inicio.php");
      }else{
        ?>
        <?php
        include("Sesion.php");
        ?>
        <h1> Error de autenticacion</h1>
        <?php
      } 
      }else{
        echo "error";
      }
      
      $consulta2 = "SELECT *FROM maestros where Nombre_Usuario='$usuario' and Contraseña='$contrasena'";
      $contador = "SELECT COUNT(*) FROM maestros";
      if($contador > 0){
        $resultado = mysqli_query($conexion,$consulta2);
        $filas = mysqli_num_rows($resultado);
      if($filas){
        header("location:Inicio.php");
      }else{
        ?>
        <?php
        include("Sesion.php");
        ?>
        <h1> Error de autenticacion maeto</h1>
        <?php
      }
      }else{
        echo "error";
      }
      
      $consulta3 = "SELECT *FROM escuelas where Nombre_Usuario='$usuario' and Contraseña='$contrasena'";
      $contador = "SELECT COUNT(*) FROM escuelas";
      if($contador > 0){
        $resultado = mysqli_query($conexion,$consulta3);
        $filas = mysqli_num_rows($resultado);
      if($filas){
        header("location:Inicio.php");
      }else{
        ?>
        <?php
        include("Sesion.php");
        ?>
        <h1> Error de autenticacion escuela</h1>
        <?php
      }
      }else{
        echo "error";
      }

  mysqli_free_result($resultado);
  mysqli_close($conexion);

}

?>