# Libreria

## Pasos para correr el proyecto en una maquina virtual 

1. Tener algun tipo de servidor local instalado XAAMP o Laragon
2. Clonar el repositorio en la carpeta que tengas de proyectos de tu servidor local
3. Modificar los puertos predeterminados del proyecto (si lo requiere)

En el archivo *conexion.php*

Tienes que modificar la contraseña del usuario root, la contraseña y en numero de puerto donde tengas ubicado Mysql

*Ejemplo del proyecto actual*
$conexion = new mysqli("localhost", "root", "", "libreria","3306");

4. Abrir el proyecto 
