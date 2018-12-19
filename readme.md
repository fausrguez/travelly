# Proyecto de Laravel

## Definición del proyecto
*Travelly* es una página web destinada a la búsqueda de experienecias al rededor del mundo. 
El proyecto se compondrá de un backend realizado con **Laravel**, un frontend realizado con **Vue** o **Angular** (Está por ver) y un gestor de bases de datos **MySQL**.

### Roles de los usuarios
- **Administrador**: Se encargará de gestionar los destinos de viaje y los usuarios.
- **Registrado**: Puede realizar busquedas y compras de experiencias.
- **Sin Registrar**: Puede realizar búsqueda de experiencias.

### Estructura de las tablas

<table>
<tr><td>

| users |
|--------|
| **username** |
| **email** |
| password |
| name |
| surname |

</td><td>

| countries |
|--------|
| **location** |
| src |

</td><td>

| experiences |
|--------|
| **id** |
| country(FK) |
| name |
| description |
| src |
| src_hero |

</td></tr> </table>

## MPV
- **Landing page** realizada al menos con HTML y CSS
- **Conexión con la Base de Datos**
- **Autenticación de usuarios** haciendo uso de sesiones
- **Gestión de usuarios** desde una parte privada
- **Registro de usuarios** con envío de correos electrónicos con PHPMailer