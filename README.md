# AccessTocampus
Proyecto de el  tercer parcial 

PROYECTO DE ACCESO A LA INSCRIPCIÓN 

El proyecto consiste en 2 módulos principales para los usuarios 

Módulo 1; Módulo del personal administrativo:

Este módulo consta de varias interfases como son la interfaz de búsqueda, dar de baja alumnos y ingresar alumnos.

Interfaz de búsqueda:

Esta interfas no solo le permite al personal administrativo buscar los datos de un alumno, si no, también modificar los datos del mismo. Haciendo esto más rápido para obtener cualquier dato.

Interfas de baja de alumnos: 
Esta interfaz permite al personal administrativo poder eliminar alumnos de la base de datos de una manera muy sencilla y comoda con terner algunos datos de el alumno

Interfas de insertar datos de el alumno: 

Con esta interfas podremos ingresar alumnos de manera fácil, rápida y segura a la base de datos 

El segundo módulo consta de lo que ve el usuario (El alumno de la institución)

Este módulo lo sub-dividiremos en 2 módulos más en el modulo Adquisición y módulo uso

Adquisición: En este módulo, el usuario podrá adquirir el QR para poder ingresar a la institución, Este código QR tendrá un límite de usos que serán 2 (entrada al plantel y salida de el plantel), al usar 2 veces el código QR este será inválido lo que evitará muchos problemas a el plantel 

Lista de problemas 

•Accesos no autorizados
       - Al tener un límite de usos este código, no podrá ingresar 2 veces el mismo código por lo que será más fácil la detección de estás personas mal intencionadas

•Salidas  no autorizadas
       - Con este método evitamos que los alumnos salgan sin autorización de el plantel dando  información precisa sobre si el alumno está dentro o no de el plantel 

•Ingreso de compañeros que no tienen el código QR 
       -Un problema constante es que los alumnos meten a sus compañeros al plantel sin que lleven algun método de identificación

Uso: Este módulo plantea la manera en que se usará este sistema en una serie de pasos 

1 adquirir código: como fue mencionado en los módulos anteriores, mediante la página web oficial se obtendrá un código QR (aleatorio todos los días) con el que podrá ingresar al plantel (este código se lo da al usuario y realizará una copia para la base de datos)
Al pasarlo por el escáner restará 1 uso al código QR; por qué a ingresado al plantel. También tomara una foto de el alumno ingresando al plantel, después de realizar esta acción mandara un correo electrónico a el tutor de el alumno donde le indicará 

•la hora (entrada o salida)
•nombre y apellidos de el alumno
•especialidad y turno
•foto adjunta de el alumno entrando al plantel 

2 Salida de el plantel: al salir de el plantel tendrá que realizar lo mismo pasar  el código QR por el escáner restando 1 uso más con esto  código se volverá inválido y ya no le permitirá volver a entrar hasta el siguiente dia enviado el correo con los mismos datos

Hora de salida
Nombre apellidos
Especialidad, turno


--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

ACCESS TO CAMPUS

Este es el manual de uso para el proyecto. Aquí daremos desde las URL básicas para el personal administrativo como para realizar la activación de el sistema para el ingreso de alumnos.

 
URL
La primera URL es para el personal administrativo Acceso (000webhostapp.com) donde tendremos un menú de acceso esto es para garantizar la integridad de los datos de el alumnado 

Nota: esta interfaz no tiene una contraseña establecida ya que solo es una pre-visualización de lo que será realmente así que puede acceder con o sin contraseña

La segunda URL es a la que tendrá acceso el alumnado que es donde podrá visualizar su entrada a esta URL no se puede acceder atra ves de un botón se tiene que acceder mediante la URL especifica que es esta Lector de QR (000webhostapp.com) 


¿CÓMO SE USA?

Archivo principal: Al usar el primer link Lo llevará a la pagina principal donde le pedirá una clave esta clave por ahora es irrelevante ya que Aun no tiene el archivo con la contraseña.

Archivo de menú: En este menú encontraras tres botones los cuales son, nombrándolos de arriba hacia abajo; Insertar datos, Eliminar datos y Buscar alumno. Aquí podremos acceder a cualquiera de estas interfaces 

o	Insertar datos: En esta interfaz podrás encontrar todo lo necesario para registrar a un alumno nuevo. Esta interfaz es muy intuitiva y fácil de usar cuanta con dos botones; el primero permite que después de haber llenado todos los campos puedas registrar al alumno. El segundo nos permite regresar al menú principal para escoger otra opción.

o	Eliminar datos: En esta interfaz encontraras un menú desplegable donde podrás encontrar a todos los alumnos registrados, al seleccionar un alumno, podrás dar al botón de eliminar a cualquier alumno; al darle al botón de eliminar Saltara una alerta donde darás aceptar para continuar con la eliminación del usuario

o	Buscar alumno: Aquí encontraras una tabla donde están todos los alumnos pero en la barrita superior podrás agregar la descripción de el alumno y los encontrara rápidamente.


Actualizar datos: Al deslizarte hacia la izquierda podrás encontrar un botón donde te llevara otra interfaz donde ya tendrás listos todos los datos de el alumno para hacer modificaciones 



Interfaz de los alumnos

Para esto tendrás que acceder a el segundo link,  conecta el lector de códigos QR,  al pasar la credencial por le lector accederá a unos cuantos datos del 

Foto

Cuando se cierra el horario de clases 20:00hrs el servidor que genera y guarda los códigos QR empezará hacer los cambios para el día siguiente


El codigo aun no esta completo para realizar tales acciones de el todo
