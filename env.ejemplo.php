; <?php exit; ?>
; El comentario de arriba es para que, si el archivo es visto
; desde el navegador, se salga inmediatamente del script, ocultando
; la información que aquí existe

; En cambio, cuando es tratado como un archivo .ini, las
; líneas que comienzan con un ; son ignoradas


; Un archivo de configuración
; que guarda todas las credenciales
; para cada cosa

; Las líneas en blanco y aquellas que comienzan
; con un punto y coma (;) son ignoradas

; URL base del proyecto, algo como https://sitio.com
BASE_URL = "http://localhost:8080/cotizaciones/"


USUARIO_MYSQL = "root"
PASS_MYSQL = "EVgnMR9LiVVkeZqh2swi"
NOMBRE_BD_MYSQL = "railway"
HOST_MYSQL = "containers-us-west-130.railway.app:7366"


USUARIO_MYSQL_SESION = "root"
PASS_MYSQL_SESION = "EVgnMR9LiVVkeZqh2swi"
NOMBRE_BD_MYSQL_SESION = "railway"
HOST_MYSQL_SESION = "containers-us-west-130.railway.app:7366"

; De Google Analytics
ID_SEGUIMIENTO = ""
; Publicidad
AD_CLIENT = ""
AD_SLOT = ""
