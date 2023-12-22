<?php
// Version: 2.1.3; Help

global $helptxt, $scripturl;

$txt['close_window'] = 'Cerrar ventana';

$helptxt['manage_boards'] = '	<strong>Editar foros</strong><br />
	En este menú puedes crear/reordenar/eliminar foros, y las categorías
	arriba de ellos. Por ejemplo, si tienes un amplio sitio web
	que ofrece información acerca de &quot;Anime&quot;, &quot;Carros&quot; y &quot;Música&quot;,
	éstos deben ser las categorías a mayor nivel que debes crear. Debajo de esas
	categorías probablemente desees crear &quot;sub-categorías&quot; jerárquicas,
	o &quot;Foros&quot; para contener temas dentro de cada uno. Es una jerarquía simple, con esta estructura: <br />
	<ul class="normallist">
		<li>
			<b>Deportes</b>
			 - Una &quot;categoría&quot;
		</li>
		<ul class="normallist">
			<li>
				<b>Béisbol</b>
				 - Un foro en la categoría de &quot;Deportes&quot;
			</li>
			<ul class="normallist">
				<li>
					<b>Estadísticas</b>
					 - Un subforo dentro del foro de &quot;Baseball&quot;
				</li>
			</ul>
			<li><b>Fútbol</b>
			 - Un foro dentro de la categoría de &quot;Deportes&quot;</li>
		</ul>
	</ul>
	Las Categorías te permiten organizar el foro de mensajes en temas (&quot;Deportes, Coches&quot;),
	y los &quot;Foros&quot; dentro de ellas son los temas en los cuales los usuarios pueden
	publicar mensajes. En el ejemplo anterior, un usuario interesado en un Audi,
	publicaría un mensaje en el foro &quot;Coches->Audi&quot;. Las Categorías permiten
	encontrar rápidamente cuales son sus intereses: En vez de &quot;Tienda&quot; se tienen
	tiendas de &quot;Hardware&quot; y &quot;Electrodomésticos&quot; a las que puedes ir.
	Esto simplifica tu búsqueda por &quot;Pantalla&quot;, ya que puedes ir a la &quot;categoría&quot; de
	tienda de Hardware en vez de la tienda de Electrodomésticos (donde encontrarías televisiones de pantalla
	plana en vez de, probablemente, protectores de pantalla para la computadora).<br />
	Como se puede percibir arriba, un foro engloba un tema específico dentro de la categoría más amplia.
	Si quieres discutir acerca de &quot;Audi&quot;, debes ir a la categoría &quot;Coches&quot; e ir al foro
	&quot;Audi&quot; para publicar tus mensajes acerca de lo que opinas en ese foro.<br />
	Las funciones administrativas en este menú son para crear nuevos foros en cada
	categoría, reordenarlas (poner &quot;Audi&quot; abajo de &quot;Ferrari&quot;), o borrar un
	foro completamente.';

$helptxt['edit_news'] = '<ul class="normallist"> <li> <strong>Noticias</strong><br> Esta página te permite definir el texto para las noticias mostradas en la página de inicio del foro. Añade cualquier elemento que desees (por ejemplo &quot;No te pierdas las conferencia este martes&quot;. Cada elemento de noticias se mostrará de forma aleatoria y debería ubicarse en una casilla separada.</li> <li> <strong>Boletines</strong><br> Esta página te permite enviar boletines de noticias a los usuarios del foro a través de mensajes personales o de correos electrónicos. Primero selecciona los grupos que quieres que reciban el boletín y aquellos que no. Por último, introduce el mensaje que quieres enviar y selecciona si deseas que se envíe mediante mensajería privada o correo electrónico.</li> <li> <strong>Ajustes</strong><br> Esta página contiene algunos ajustes relacionados con las noticias y los boletines, incluyendo la selección de qué grupos podrán editar las noticias del foro o enviar boletines. También hay un ajuste para configurar si quieres activar las noticias en el foro y otro para definir la longitud (cuántos caracteres a mostrar) para cada mensaje mostrado.</li> </ul> ';

$helptxt['view_members'] = '
	<ul class="normallist">
		<li>
			<strong>Ver todos los usuarios</strong><br>
			Ver a todos los usuarios del foro. Accederás a una lista con hiperenlaces en lo snombres de usuarios. Puede hacer clic
			en cualquiera de los nombres para acceder a sus detalles (web personal, edad, etc.) y, como Administrador
			podrás modificar esos parámetros. Dispones de pleno control sobre los usuarios, incluyendo la
			posibilidad de borrar esas cuentas.<br><br>
		</li>
		<li>
			<strong>A la espera de aprobación</strong><br>
			Esta página solo se muestra si has activado la aprobación manual para nuevos registros. Cualquier que se registre en tu 
			foro quedará a la espera de revisión por parte de un administrador antes de disponer de pleno acceso al foro. Esta página muestra a todos los usuarios que
			todavía esperan aprobación, junto con su correo electrónico y dirección IP. Podrás aceptar o rechazar (eliminar) cualquier usuario de la lista marcando la casilla junto al usuario y eligiendo la acción correspondiente en la casilla desplegable en la parte inferior de la página.
			A la hora de rechazar a un usuario puedes elegir eliminar al usuario notificándole o no la decisión.<br><br>
		</li>
		<li>
			<strong>Esperando activación</strong><br>
			Esta página solo será visible si usas la activación por correo electrónico de los nuevos usuarios registrados en tu foro. Esta página mostrará un listado 
			de todos los usuarios que todavía no han activado sus nuevas cuentas. Desde esta página puedes elegir entre aceptarlos, rechazarlos o enviarles un correo recordatorio de que su activación está pendiente. 
			Como antes, podrás elegir si enviarles o no un correo electrónico informándoles de la decisión.<br><br>
		</li>
	</ul>';

$helptxt['ban_members'] = '<strong>Usuarios con acceso prohibido</strong><br />
	SMF permite &quot;banear&quot; o &quot;restringir el acceso&quot; a usuarios, para prevenir el acceso a personas que han violado la confianza del foro de mensajes,
	al hacer spam, ser groseros, etc. Esto te permite restringirles el acceso a los usuarios que no desees más en tu foro de mensajes. Como administrador,
	cuando ves los mensajes puedes ver la IP que cada usuario utilizó al publicar su mensaje. En la lista de accesos prohibidos,
	simplemente introduce la dirección IP, guarda los cambios, y ningún usuario no podrá acceder al foro desde esa IP.<br />
	También puedes restringir el acceso de usuarios usando su dirección de email, o su nombre de usuario.';

$helptxt['featuresettings'] = '<strong>Editar características y opciones</strong><br />
	Hay numerosas características en esta sección que pueden ser cambiadas según tus preferencias.';

$helptxt['modsettings'] = '<strong>Opciones de Modificaciones (mods)</strong><br />
	Esta sección debería contener cualquier opción de configuración añadida por las modificaciones (mods) instaladas en tu foro.';

$helptxt['time_format'] = '<b>Formato de Hora</b><br /> 	Puedes ajustar como visualizarás la hora y la fecha. Hay mucha &quot;letra pequeña&quot;, pero es relativamente fácil. El formato sigue las especificaciones de la función strftime de PHP, y se describen a continuación (más detalles pueden encontrarse en <a href="http://www.php.net/manual/function.strftime.php" target="_blank" class="new_win">php.net</a>).<br /><br />Los siguientes caracteres se reconocen en la cadena del formato:<br /><span class="smalltext">&nbsp;&nbsp;%a - nombre abreviado del día de la semana <br />&nbsp;&nbsp;%A - nombre completo del día de la semana <br />&nbsp;&nbsp;%b - nombre abreviado del mes <br />&nbsp;&nbsp;%B - nombre completo del mes <br />&nbsp;&nbsp;%d - día del mes (01 a 31) <br />&nbsp;&nbsp;%D<strong>*</strong> - lo mismo que %m/%d/%y <br />&nbsp;&nbsp;%e<strong>*</strong> - día del mes (1 a 31) <br />&nbsp;&nbsp;%H - hora usando formato de 24 horas (rango 00 a 23) <br />&nbsp;&nbsp;%I - hora usando formato de 12 horas (rango 01 a 12) <br />&nbsp;&nbsp;%m - mes como número (01 a 12) <br />&nbsp;&nbsp;%M - minuto como número <br />&nbsp;&nbsp;%p - &quot;am&quot; o &quot;pm&quot; de acuerdo a la hora actual<br />&nbsp;&nbsp;%R<strong>*</strong> - hora en formato de 24 horas <br />&nbsp;&nbsp;%S - segundos como número decimal <br />&nbsp;&nbsp;%T<strong>*</strong> - hora actual, de la misma manera que %H:%M:%S <br />&nbsp;&nbsp;%y - año en formato de 2 dígitos (00 a 99) <br />&nbsp;&nbsp;%Y - año en formato de 4 dígitos <br />&nbsp;&nbsp;%% - carácter \'%\'  <br /><br /><em>* No funciona en servidores Windows.</em></span>';

$helptxt['live_news'] = '<strong>Anuncios en vivo</strong><br />Este cuadro muestra los anuncios recientemente actualizados desde <a href="https://www.simplemachines.org/" target="_blank" rel="noopener">www.simplemachines.org</a>.Debes revisar esta página de vez en cuando por si hay actualizaciones, nuevas versiones, o información importante del equipo de Simple Machines.';

$helptxt['registrations'] = '<strong>Manejo del Registro de Usuarios</strong><br />
	Esta sección contiene todas las funciones que pueden ser necesarias para manejar nuevos registros de usuarios en el foro. Contiene hasta tres
	secciones que son visibles dependiendo de la configuración de tu foro. Éstas son:<br /><br />
	<ul class="normallist">
		<li>
			<strong>Registrar Nuevo usuario</strong><br />
			Desde esta pantalla puedes escoger registrar nuevas cuentas en nombre de los nuevos usuarios. Esto puede ser útil en foros donde el registro está cerrado
			para nuevos usuarios, o en casos donde el administrador desea crear una cuenta de prueba. Si la opción de requerir activación de la cuenta
			está seleccionada, se le enviará un email al usuario, con un enlace al que se le deberá hacer clic antes de que puedan usar la cuenta. Asimismo, puedes
			seleccionar el enviar por email al usuario una nueva contraseña a su dirección de email.<br /><br />
		</li>
		<li>
			<strong>Editar Carta de Aceptación al registrarse</strong><br />
			Esto te permite establecer el texto para la carta de aceptación mostrada a los usuarios cuando están en el proceso de registro para obtener una cuenta en tu foro de mensajes.
			Puedes cambiar cualquier texto de la carta de aceptación original que se incluye en SMF.
		</li>
		<li>
			<strong>Establecer nombres reservados</strong><br />
			Usando esta interfaz puedes especificar palabras o nombres que no pueden ser usados por tus usuarios.<br /><br />
		</li>
		<li>
			<strong>Configuración</strong><br />
			Esta sección será visible solamente si tienes permisos para administrar el foro. Desde esta pantalla puedes decidir el método de registro
			que será usado en tu foro, así como algunas otras configuraciones.
		</li>
	</ul>';

$helptxt['modlog'] = '<strong>Log de Moderación</strong><br />
	Esta sección le permite a los administradores mantenerse al tanto de todas las acciones de moderación que los moderadores del foro han realizado. Para asegurar que
	los moderadores no puedan eliminar las referencias a las acciones que ellos han realizado, las entradas no pueden eliminarse hasta 24 horas después de que la acción tuviera lugar.';
$helptxt['adminlog'] = '<strong>Registro de administración</strong><br />
	Esta sección permite a los miembros del equipo de administración seguir algunas de las acciones administrativas que han tenido lugar en el foro. Para asegurar que
	los admins no pueden eliminar referencias a las acciones que han llevado a cabo, las entradas no podrán ser borradas hasta transcurridas 24 horas desde que la acción tuvo lugar.';
$helptxt['userlog'] = '<strong>Registro de Ediciones de Perfil</strong><br> Esta página permite a los miembros de la administración del foro, visualizar los cambios que los usuarios han realizado en sus perfiles y también está disponible dentro de un area del perfil de un usuario.';
$helptxt['warning_enable'] = '<strong>Sistema de Advertencias a Usuarios</strong><br />
	Permite a los usuarios moderadores y administradores advertir a usuarios y establecer un nivel de utilización de avisos para determinar las
	acciones que están disponibles para ellos en el foro. Al activar esta característica, dentro de la sección de permisos se activará una opción para definir 
	a qué grupos se pueden asignar advertencias a usuarios. Los niveles de advertencia se pueden ajustar en el perfil del usuario. Están disponibles las siguientes opciones adicionales:
	<ul class="normallist">
		<li>
			<strong>Nivel de Advertencia para Usuarios Vigilados</strong><br />
			Esta opción define el porcentaje de advertencia que debe alcanzar un usuario para que automáticamente se le asigne la etiqueta &quot;Vigilado&quot;.
			Cualquier usuario que esté siendo &quot;vigilado&quot; aparecerá en la zona principal del centro de moderación.
		</li>
		<li>
			<strong>Nivel de Advertencia para Moderación de Mensajes</strong><br />
			Cualquier mensaje publicado por un usuario que supere el valor establecido aquí no aparecerá en el foro hasta que sea aprobado por un 
			moderador. Esto prevalece sobre cualquier permiso local que pueda existir relacionado con moderación de temas.
		</li>
		<li>
			<strong>Nivel de Advertencia para Enmudecer</strong><br />
			Si un usuario supera este nivel, no tendrán permiso para publicar nada en el foro. El usuario perderá todos sus derechos relacionados con la escritura de mensajes/temas.
		</li>
		<li>
			<strong>Número Máximo de Puntos de Advertencia por Día</strong><br />
			Esta opción limita la cantidad de puntos que un moderador puede añadir/quitar a cualquier usuario en un periodo de veinticuatro horas. Puede 
			utilizarse para limitar lo que puede hacer un moderador en un periodo corto de tiempo. Esta opción puede desactivarse introduciendo cero. Los 
			usuarios con permisos de administrador no están afectados por este valor.
		</li>
	</ul>';
$helptxt['warning_watch'] = 'Este ajuste define el porcentaje de advertencia que un miembro debe alcanzar para asignar &quot;vigilancia&quot; al miembro. Cualquier miembro que esté siendo &quot;vigilado&quot; aparecerá en la lista de miembros vigilados en el centro de moderación.';
$helptxt['warning_moderate'] = 'Los mensajes de cualquier miembro que supere el valor establecido en este ajuste, deberán ser aprobados por un moderador antes de ser público para la comunidad del foro. Esto anulará los permisos de cualquier foro que puedan estar relacionados con la moderación de mensajes.';
$helptxt['warning_mute'] = 'Si un miembro sobrepasa este nivel de advertencia, se interpondrá una restricción a publicar mensajes. El miembro perderá todos sus permisos para publicar mensajes o temas.';
$helptxt['user_limit'] = 'Esta opción limita la cantidad de puntos de advertencia que un moderador puede añadir o quitar de un miembro en concreto en un periodo de 24 horas. Esta opción puede ser usada para limitar lo que un moderador pueda hacer en un corto periodo de tiempo. Se puede desactivar estableciendo como valor \'0\'. Tenga en cuenta que cualquier miembro con permisos de administración será inmune a este valor.';

$helptxt['error_log'] = '<strong>Log de Errores</strong><br />
	El log de errores rastrea cualquier error grave encontrado por usuarios al usar tu foro. Lista todos esos errores por fecha, que puede ser usada para ordenar
	al hacer clic en la flecha negra al lado de cada fecha. Asimismo, puedes filtrar los errores al hacer clic en la imagen al lado de cada estadística de error. Esto
	te permite filtrar, por ejemplo, por usuario. Cuando un filtro está activo, solamente los resultados que concuerden con el filtro serán mostrados.';
$helptxt['theme_settings'] = '<strong>Configuración del Tema</strong><br />
	La pantalla de configuración te permite cambiar las configuración específica de un tema. Esta configuración incluye opciones tales como el directorio de los temas e información de URLs pero también
	opciones que afectan al diseño de un tema en tu foro. La mayoría de los temas tendrán una variedad de opciones configurables por el usuario, permitiéndote adaptar un tema
	para satisfacer las necesidades individuales de tu foro.';
$helptxt['smileys'] = '<strong>Centro de Smileys</strong><br />Aquí puedes agregar y eliminar smileys (emoticonos) así como conjuntos de smileys. Es importante mencionar que si un smiley está en un conjunto, debe estar en todos los conjuntos - de otra manera, podría ser confuso para tus usuarios cuando utilicen diferentes conjuntos.<br /><br />También puedes editar los iconos de mensaje desde aquí, si los tienes activados en la página de configuración.';
$helptxt['calendar'] = '<strong>Administrar Calendario</strong><br />
	Aquí puedes modificar la configuración del calendario actual, así como agregar y eliminar los días festivos que aparecen en él.';
$helptxt['cal_export'] = 'Exporta un archivo de texto en formato iCal para importarlo en otras aplicaciones de calendario';
$helptxt['cal_highlight_events'] = 'Esta opción te permite destacar eventos en los Mini Calendarios, en el Calendario Principal, en ambos o desactivar los eventos destacados.';
$helptxt['cal_highlight_holidays'] = 'Esta opción te permite destacar festivos en el Mini Calendario, en el Calendario Principal, en ambos o desactivar los eventos destacados.';
$helptxt['cal_highlight_birthdays'] = 'Esta opción te permite destacar cumpleaños en el Mini Calendario, en el Calendario Principal, en ambos o desactivar los eventos destacados.';
$helptxt['cal_disable_prev_next'] = 'Si esta opción está activada, los bloques \'Tres Meses\' situados en el lado izquierdo de la página se desactivaran.';
$helptxt['cal_display_type'] = 'Esta opción te permite cambiar el tipo de aparencia del calendario.<br><br><strong>Cómodo:</strong> aumenta el tamaño de las filas del calendario.<br><strong>Compacto:</strong> reduce el tamaño de las filas del calendario. ';
$helptxt['cal_week_links'] = 'Si esta opción está activada, los enlaces serán añadidos junto a cada semana en el calendario.';
$helptxt['cal_prev_next_links'] = 'Si esta opción está activada, los enlaces del mes anterior y del mes siguiente serán añadidos a la parte superior de cada mes para una mejor navegación en el calendario.';
// argument(s): $txt['months_short'][1], $txt['months_titles'][1]
$helptxt['cal_short_months'] = 'Si se marca esta configuración, los nombres de los meses del calendario se acortarán.<br><br><strong>Activado:</strong> %1$s 1<br><strong>Desactivado:</strong> %2$s 1';
// argument(s): $txt['days_short'][1], $txt['days'][1]
$helptxt['cal_short_days'] = 'Si se marca esta configuración, los nombres de los días del calendario se acortarán.<br><br><strong>Activado:</strong> %1$s 1<br><strong>Desactivado:</strong> %2$s 1';

$helptxt['serversettings'] = '<b>Configuración del Servidor</b><br />
	Aquí puedes realizar la configuración principal de tu foro. Esta sección incluye la configuración de la base de datos y URLs, así como otros elementos importantes de la configuración como la configuración del correo y el cachés. Sé cuidadoso al editar estas configuraciones porque un error podría dejar inaccesible el foro';
$helptxt['manage_files'] = '	<ul class="normallist">
		<li>
			<strong>Navegar archivos</strong><br />
			Navegar a través de los adjuntos, avatares y miniaturas almacenados por SMF.<br /><br />
		</li><li>
			<strong>Configuración de adjuntos</strong><br />
			Configura dónde son almacenados los adjuntos y establece restricciones sobre los tipos de archivos que pueden ser adjuntados.<br /><br />
		</li><li>
			<b>Configuración de avatares</b><br />
			Configura dónde son almacenados los avatares y gestiona su redimensionamiento.<br /><br />
		</li><li>
			<strong>Mantenimiento de archivos</strong><br />
			Comprueba y repara cualquier error en el directorio de adjuntos y elimina los adjuntos seleccionados.<br /><br />
		</li>
	</ul>';

$helptxt['topicSummaryPosts'] = 'Esto te permite especificar el número de mensajes anteriores mostrados en el sumario de temas, en la pantalla de responder.';
$helptxt['enableAllMessages'] = 'Establece esto al número <em>máximo</em> de mensajes que un tema puede tener para mostrar el enlace <i>todos</i>.  Si estableces este valor menor al de &quot;Máximo número de mensajes a mostrar en una página de Tema&quot; lo unico que conseguirás es que nunca se muestre, y si lo estableces muy alto, puede alentar tu foro.';
$helptxt['allow_guestAccess'] = 'El desseleccionar esta opción limitará a los visitantes a hacer solamente las funciones mas básicas - ingresar, registrarse, recordar contraseña, etc - en tu foro.  Esto NO es lo mismo que deshabilitar el acceso de los visitantes a los foros.';
$helptxt['userLanguage'] = 'Al activar esta opción, los usuarios pueden seleccionar el archivo de idioma que usarán.
	Esto no afectará la selección predeterminada.';
$helptxt['trackStats'] = 'Estadísticas:<br />Esto permite a los usuarios ver los últimos mensajes, y los temas mas populares de tu foro de mensajes.
	También muestra varias estadísticas, como el máximo de usuarios conectados al mismo tiempo, nuevos usuarios, y nuevos temas.<hr />
	Páginas vistas:<br />Agrega otra columna a la página de estadísticas con el numero de páginas vistas en tu foro.';
$helptxt['titlesEnable'] = 'Activar los Títulos Personalizados permitirá a los usuarios que cuenten con el permiso respectivo crear un título especial para ellos mismos. Dicho título se mostrará debajo del nombre.<br /><em>Por ejemplo:</em><br />Omar<br />Maestro Jedi';
$helptxt['onlineEnable'] = 'Esto mostrará una imagen indicando si el usuario está conectado o no.';
$helptxt['todayMod'] = 'Esto mostrará &quot;Hoy&quot; o &quot;Ayer&quot; en vez de la fecha.<br /><br /> <strong>Ejemplos:</strong><br /><br /> <dt> <dt>Desactivado</dt> <dd>Octubre 3, 2009 a las 12:59:18 am</dd> <dt>Sólo Hoy</dt> <dd>Hoy a las 12:59:18 am</dd> <dt>Hoy &amp; Ayer</dt> <dd>Ayer a las 09:36:55 pm</dd> </dt> ';
$helptxt['disableCustomPerPage'] = 'Marca esta opción para impedir a los usuarios que personalicen el número de mensajes e hilos que pueden mostrar por página en el Indice de Mensajes y en la página de Mensaje respectivamente.';
$helptxt['enablePreviousNext'] = 'Esto mostrará un enlace al tema anterior y al siguiente.';
$helptxt['pollMode'] = 'Esto especifica si las encuestas están activadas o no: Si las encuestas están desactivadas, cualquier encuesta ya existente será oculta
		del listado de temas. Puedes escoger el continuar mostrando los temas sin su encuesta asociada a ellos seleccionando
		&quot;Mostrar Encuestas existentes como Temas&quot;.Para seleccionar quién puede publicar encuestas, ver encuestas, y otras cosas, puedes
		permitir o restringir sus permisos. Recuerda esto si las encuestas no están funcionando.';
$helptxt['enableCompressedOutput'] = 'Esta opción compactará la salida para reducir el consumo de ancho de banda,
	pero necesita que zlib esté instalado en el servidor.';
$helptxt['httponlyCookies'] = 'Las cookies no serán accesibles por lenguages de script como por ejemplo JavaScript. Esta opción puede ayudar a reducir el robo de identidad a través de ataques XSS. Esto puede causar problemas con scripts de terceros pero debería estar donde sea posible.';
$helptxt['samesiteCookies'] = 'El atributo SameSite del encabezado de respuesta HTTP Set-Cookie le permite declarar si su cookie debe restringirse a un contexto propio o del mismo sitio. Para obtener más información, consulte <a href="https://developer.mozilla.org/docs/Web/HTTP/Headers/Set-Cookie/SameSite">MDN</a>';
$helptxt['databaseSession_enable'] = 'Esta opción hace uso de la base de datos para guardar información de sesiones - es mejor para servidores con la carga balanceada, pero ayuda con todos los problemas de timeout y puede hacer más rápido al foro.  No funciona si session.auto_start está activado.';
$helptxt['databaseSession_loose'] = 'Activando esta opción disminuirá el ancho de banda que consume tu foro, y hace que al hacer <i>clic</i> en atrás no recargue la página - lo malo de esto es que los (nuevos) iconos no se actualizarán, entre otras cosas. (a menos que hagas <i>clic</i> en esa página en vez de regresar a ella.)';
$helptxt['databaseSession_lifetime'] = 'Este es el número de segundos que durarán las sesiones después que no hayan sido accesadas.  Si una sesión no es accesada por mucho tiempo, se dice que ha &quot;expirado&quot;.  Se recomienda cualquier valor arriba de 2400.';
$helptxt['tfa_mode'] = 'Puedes añadir un segundo nivel de seguridad en tu foro activando el <a href="https://es.wikipedia.org/wiki/Autenticaci%C3%B3n_de_m%C3%BAltiples_factores">Factor de Doble Autenticación</a>. El Factor de Doble Autenticación obliga a tus usuarios a añadir un código generado automáticamente después del inicio de sesión normal. Deberás configurar el factor de doble autenticación para ti mismo antes de obligar a tus usuarios a hacerlo.';
$helptxt['cache_enable'] = 'SMF ejecuta el almacenamiento en caché en diferentes niveles. A mayor nivel activo de almacenamiento en caché, mayor tiempo necesitará emplear la CPU para recuperar la información almacenada en caché. Si el almacenamiento en caché está habilitado, se recomienda establecer el nivel 1 de almacenamiento.';
$helptxt['cache_memcached'] = 'Si estás usando \'Memcached\' tienes que especificar los detalles del servidor. Esto debería ser introducido en una lista separada por comas, como se muestra a continuación:<br><br> &quot;server1,server2,server3:port,server4&quot;<br><br>Tenga en cuenta que si no se especifica un puerto, SMF usará el puerto 11211 a menos que el host contenga una barra oblícua (/), por lo cual se asumirá que hay un transporte alternativo y el puerto se establecerá como \'0\'. SMF intentará ejecutar un balanceo de carga aproximado/al azar en los servidores especificados.';
$helptxt['cache_cachedir'] = 'Esta opción solo sirve para un sistema caché basado en archivos SMF. Especifica la ruta para el directorio caché. Es recomendable que sitúes esto en el directorio /tmp/ si vas a usarlo, aunque funcionará en cualquier directorio.';
$helptxt['cache_sqlite_cachedir'] = 'Este ajuste únicamente se utiliza para el sistema de caché de base de datos SQLite. Especifica la ruta hacia el directorio del caché. Se recomienda ubicarlo en /tmp/ si va a usar, aunque funciona desde cualquier directorio';
$helptxt['enableErrorLogging'] = 'Esto registrará (log) cualquier error, como un ingreso de usuario inválido, para que puedas ver que salió mal.';
$helptxt['enableErrorQueryLogging'] = 'Esto incluirá la consulta completa enviada a la base de datos en el log de errores.  Requiere que el registro de errores esté activado.<br /><br /><strong>Nota:  Esto afectará a la capacidad de filtrar el registro de errores por mensaje de error.</strong>';
$helptxt['disallow_sendBody'] = 'Esta opción elimina la posibilidad de recibir el texto de las respuestas y los mensajes en los emails de notificación.<br /><br />Es común que los usuarios, por error, respondan a los emails de notificación, lo que significa en la mayoría de las veces que el webmaster recibe la respuesta.';
$helptxt['enable_ajax_alerts'] = 'Esta opción permite a tus usuarios recibir notificaciones en AJAX. Esto significa que los miembros no necesitan recargar la página para ver sus nuevas notificaciones.<br><b>TEN EN CUENTA:</b> Esta opción puede causar sobrecarga en su servidor con muchos usuarios conectados al mismo tiempo.';
$helptxt['alerts_auto_purge'] = 'Una vez que se ha leído una alerta, rara vez se vuelve a necesitar. Por motivos de rendimiento, es una buena idea eliminarlos automáticamente después de un tiempo.';
$helptxt['jquery_source'] = 'Esto determinará la fuente utilizada para cargar la biblioteca jQuery. <em>Google CDN, jQuery CDN</em> y <em>Microsoft CDN</em> cargarán la biblioteca jQuery desde esas respectivas redes CDN. <em>Local</em> solo utilizará la fuente local. <em>Personalizado</em> le permite especificar una URL personalizada para tu biblioteca.';
$helptxt['compactTopicPagesEnable'] = 'Esto mostrará como se mostrará la selección de las páginas.<br /><em>Ej.:</em>
		&quot;3&quot; para mostrar: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; para mostrar: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Esto mostrará en la parte inferior del foro, el tiempo en segundos que SMF necesitó para crear la página.';
$helptxt['removeNestedQuotes'] = 'Esto eliminará las citas anidadas de un mensaje cuando dicho mensaje sea citado a través del enlace de cita.';
$helptxt['max_image_width'] = 'Esto te permitirá establecer el máximo de una imagen publicada. Imágenes mas pequeñas que el máximo no son afectadas.';
$helptxt['mail_type'] = 'Esta opción te permite escoger entre usar las opciones por defecto de PHP, o sobreescribirlas con SMTP.  PHP no soporta el usar autentificación con SMTP (que en la actualidad, muchos servidores lo requieren) asi que, de necesitarlo, selecciona SMTP.  Recuerda que SMTP puede ser más lento, y algunos servidores no toman nombres de usuarios y contraseñas.<br /><br />No necesitas llenar los valores de SMTP, si esta opción está utilizando los valores por defecto de PHP.';
$helptxt['attachment_manager_settings'] = 'Los adjuntos son archivos que los usuarios pueden subir, y añadir a un mensaje. Se pueden configurar de varias maneras que podrás ver a continuación.';
$helptxt['attachmentCheckExtensions'] = 'Para algunas comunidad, quizás deseas limitar el tipo de archivos que los usuarios pueden subir mediante la comprobación de la extensión: e.g myphoto.jpg tiene una extensión jpg.';
// References setting attachmentCheckExtensions
$helptxt['attachmentExtensions'] = 'Si "comprobar la extensión del archivo adjunto" está activado, estas son las extensiones que se permitirán para nuevos archivos adjuntos.';
$helptxt['attachmentUploadDir'] = 'La ruta de tu carpeta de adjuntos en el servidor<br>(ejemplo: /home/sites/yoursite/www/forum/attachments) ';
$helptxt['attachmentDirSizeLimit'] = 'Seleccione el tamaño que puede tener la carpeta de archivos adjuntos, incluidos todos los archivos que contiene.';
$helptxt['attachmentPostLimit'] = 'Seleccione el máximo (en KB) de todos los archivos adjuntos realizados por publicación. Si es más bajo que el límite por adjunto, este será el límite.';
$helptxt['attachmentSizeLimit'] = 'Selecciona el tamaño máximo de cada archivo adjunto por separado.';
$helptxt['attachmentNumPerPostLimit'] = 'Seleccione la cantidad de archivos adjuntos que una persona puede subir por publicación.';
$helptxt['attachmentShowImages'] = 'Si el archivo subido es una imagen, se mostrará justo debajo del mensaje.';
$helptxt['attachmentThumbnails'] = 'Si la opción anterior es seleccionada, guardará un archivo adjunto (menor) para la miniatura para disminuir el ancho de banda.';
$helptxt['attachmentThumbWidth'] = 'Solo se usa con &quot;Redimensionar el tamaño de las imágenes cuando se muestran debajo de las publicaciones&quot; ajustando el ancho máximo para redimensionar el tamaño de los archivos adjuntos. El tamaño se ajustará proporcionalmente.';
$helptxt['attachmentThumbHeight'] = 'Sólo se utiliza con la opcion "Redimensionar el tamaño de las imágenes cuando se muestran debajo de las publicaciones" al configurar la altura máxima para cambiar el tamaño de los archivos adjuntos. El tamaño se redimensionados proporcionalmente.';
$helptxt['attachmentDirFileLimit'] = 'Número máximo de archivos por directorio';
$helptxt['attachmentEnable'] = 'Esta opción te permite configurar los archivos adjuntos.<br><br> <ul class="normallist"> <li> <strong>Deshabilitar todos los archivos adjuntos</strong><br> Todos los archivos adjuntos están deshabilitados. Los adjuntos ya existentes no se han borrado, pero ahora están ocultos (incluso para los administradores). Tampoco se pueden subir nuevos archivos adjuntos, independietemente de los permisos.<br><br> </li> <li> <strong>Habilitar todos los archivos adjuntos</strong><br> Todo actúa de manera normal, los usuarios con permisos para ver adjuntos pueden hacerlo y los usuarios con permisos para subir adjuntos, también pueden hacerlo.<br><br> </li> <li> <strong>Deshabilitar nuevos adjuntos</strong><br> Los adjuntos existen aún están visibles, pero no se pueden añadir nuevos adjuntos, independietemente de los permisos. </li> </ul> ';
$helptxt['attachment_image_paranoid'] = 'Seleccionar esta opción activará comprobaciones de seguridad muy estrictas en las imágenes adjuntas. ¡Advertencia! Estas comprobaciones de seguridad pueden fallar en imágenes válidas. Se recomienda encarecidamente usar esta opción junto con la recodificación de imágenes, de modo que SMF pueda reconstruir las imágenes en las que las comprobaciones de seguridad fallen: si tiene éxito, serán saneadas y subidas. En caso contrario, si la recodificación de imágenes no está activada, todos los adjuntos que fallen las comprobaciones de seguridad serán rechazados.';
$helptxt['attachment_image_reencode'] = 'Seleccionar esta opción hará que se traten de recodificar las imágenes adjuntas subidas. La recodificación de imágenes ofrece mejor seguridad. Sin embargo, ten en cuenta que la recodificación de imágenes también hace que todas las imágenes animadas sean convertidas en estáticas. <br /> Esta funcionalidad sólo es posible si el módulo GD está activado en tu servidor.';
$helptxt['attachment_thumb_memory'] = 'A mayor tamaño de archivo (tamaño y ancho x alto), mayores requerimientos de memoria son necesarios para crear satisfactoriamente las miniaturas de imágenes.<br>Al marcar esta opción, el sistema estimará la memoria requerida y después pedirá esa cantidad. Si el proceso es satisfactorio, solo entonces se intentará crear la miniatura.<br>Esto dará como resultado menos errores de páginas blancas pero también puede que se creen menos miniaturas. Dejando esto sin marcar hará que el sistema intente siempre la creación de miniaturas (con una cantidad fija de memoria). Esto dará como resultado más errores de páginas blancas.';
$helptxt['attachmentRecodeLineEndings'] = 'El script reescribirá las terminaciones de algunas líneas de acuerdo con tu servidor.';
$helptxt['automanage_attachments'] = 'Por defecto, SMF pone los nuevos adjuntos en una carpeta. Para la mayoría de los sitio esto no es un problema, pero a medida que un sitio va creaciendo, puede ser más útil tener más de una carpeta para almacenar.<br><br>Esta opción te permite establecer si quieres gestionar tú mismo las carpetas (por ejemplo, creando una segunda carpeta y moverte a ella cuando esté lista) o dejar que SMF se encargue de ello basado en ciertos criterios, como cuando el directorio actual alcanza un tamaño determinado o al borrar carpetas por años o meses en sitios con mucho tráfico.';
$helptxt['dont_show_attach_under_post'] = 'Si está activado, los archivos adjuntos incrustados en la publicación no aparecerán debajo del tema, pero todavía están sujetos a ser eliminados.';
$helptxt['use_subdirectories_for_attachments'] = 'Crear nuevos directorios.';
$helptxt['max_image_height'] = 'Al igual que con el ancho máximo, esta opción indica la altura máxima que una imagen publicada puede tener.';
$helptxt['avatar_paranoid'] = 'Seleccionar esta opción activará comprobaciones de seguridad muy estrictas en los avatares. ¡Advertencia! Estas comprobaciones de seguridad pueden fallar en imágenes válidas. Se recomienda encarecidamente usar esta opción junto con la recodificación de avatares, de modo que SMF pueda reconstruir las imágenes en las que las comprobaciones de seguridad fallen: si tiene éxito, serán saneadas y subidas. En caso contrario, si la recodificación de avatares no está activada, todos los avatares que fallen las comprobaciones de seguridad serán rechazados.';
$helptxt['avatar_reencode'] = 'Seleccionar esta opción hará que se traten de recodificar los avatares subidas. La recodificación de imágenes ofrece mejor seguridad. Sin embargo, ten en cuenta que la recodificación de imágenes también hace que todas las imágenes animadas sean convertidas en estáticas. <br /> Esta funcionalidad sólo es posible si el módulo GD está activado en tu servidor.';
$helptxt['cal_enabled'] = 'El calendario puede ser usado para mostrar cumpleaños, o momentos importantes en tu foro. Este ajuste activa el calendario y todas sus funciones.';
$helptxt['cal_link_postevent'] = 'Este valor permitirá a los usuarios publicar eventos para ese día cuando pinchen en esa fecha';
$helptxt['cal_maxdays_advance'] = 'Si se define como 7, se mostrarán todos los eventos de la siguiente semana';
$helptxt['cal_allow_unlinkedevents'] = 'Permite a los usuarios publicar eventos sin que sea necesario enlazarlos con un mensaje en un foro';
$helptxt['cal_min_year'] = 'Selecciona el &quot;primer&quot; año en la lista del calendario';
$helptxt['cal_max_year'] = 'Selecciona el &quot;último&quot; año en la lista del calendario';
$helptxt['cal_maxevent_span'] = 'Selecciona el número máximo de días durante los que un evento puede extenderse';
$helptxt['localCookies'] = 'SMF usa cookies para guardar información al ingresar, en la computadora del usuario.
	Las cookies pueden guardarse globalmente (<i>tusitio.com</i>) o localmente (<i>tusitio.com/ruta/al/foro</i>).<br />
	Selecciona esta opción si estas teniendo problemas con usarios que están siento sacados de tu foro de mensajes automaticamente.<hr />
	Cookoes almacenadas globalmente son menos seguras cuando se usan en un servidor web compartido (como Tripod).<hr />
	Cookies locales no funcionan afuera del directorio del foro, asi que si tu foro está almacenado en <i>www.tusitio.com/foro</i>, páginas como <i>www.tusitio.com/index.php</i> no pueden accesar la información de la cuenta.
	Especialmente cuando se usa SSI.php, se recomienda el uso de cookies globales.';
$helptxt['enableBBC'] = 'El seleccionar esta opción le permitirá a tus usuarios el poder utilizar Bulletin Board Code (BBC) en el foro, permitiendoles darle formato a sus mensajes con imágenes, estilos de texto, y más.';
$helptxt['legacy_bbc'] = 'Los antiguos códigos BBC están obsoletos y no pueden usarse en nuevos mensajes. Sin embargo, si se activan aquí serán procesados en mensajes ya existentes.<br><br>Activar códigos BBC antiguos solo resulta de utilidad si tu foro ha sido actualizado desde versiones anteriores de SMF.<br><br>A tener en cuenta, además, que algunos códigos BBC antiguos no funcionarán igual que lo hacían originalmente. Por ejemplo, el código [flash] simplemente mostrará un enlace al contenido Flash en lugar de mostrar el contenido.';
$helptxt['default_timezone'] = 'La zona horaria del servidor le dice al PHP donde está localizado tu servidor. Asegúrate que esté bien configurado, preferiblemente ajustado al país o ciudad donde está alojado el servidor. Puedes encontrar más información en <a href="http://uk.php.net/manual/en/timezones.php" target="_blank">el sitio PHP</a> (en inglés).';
$helptxt['timezone_priority_countries'] = 'Esta configuración le permite colocar las zonas horarias de un determinado país o países en la parte superior de la lista de zonas horarias seleccionables que se muestra cuando los usuarios configuran sus perfiles, crean eventos en el calendario, etc.<br><br>Por ejemplo, si muchos de los usuarios de su foro viven en Nueva Zelanda o Fiji, puede ingresar "NZ,FJ" para que les resulte más fácil encontrar rápidamente las zonas horarias más relevantes.<br><br>Puede encontrar la lista completa de países ISO códigos buscando en Internet "<a href="https://www.google.com/search?q=iso+3166-1+alpha-2" target="_blank" rel="noopener">ISO 3166- 1 alfa-2</a>".';
$helptxt['spamWaitTime'] = 'Aquí puedes seleccionar el tiempo de debe transcurrir entre publicación de mensajes. Esto puede utilizarse para evitar que las personas hagan spam en tu foro, al limitarles qué tan seguido pueden publicar mensajes.';

$helptxt['enablePostHTML'] = 'Esto permitirá el publicar mensajes tags básicos de HTML:<ul class="normallist"> <li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;strong&gt;, &lt;ins&gt;, &lt;del&gt;</li> <li>&lt;a href=&quot;&quot;&gt;</li> <li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li> <li>&lt;br&gt;, &lt;hr&gt;</li> <li>&lt;pre&gt;, &lt;blockquote&gt;</li> </ul> ';

$helptxt['themes_manage'] = 'Aquí puede instalar nuevos diseños y seleccionar qué diseños pueden elegir sus usuarios, el diseño predeterminado que usarán los nuevos usuarios e invitados, así como otras configuraciones de selección de diseños.';
$helptxt['theme_install'] = 'Esto te permite instalar nuevos temas.  Puedes hacerlo desde un directorio previamente creado, subiendo el archivo para el tema, o copiando el tema de default.<br /><br />Toma en cuenta que el archivo o directorio debe tener el archivo de definición <tt>theme_info.xml</tt>.';
$helptxt['xmlnews_enable'] = 'Permite crear un enlace a las <a href="%1$s?action=.xml;sa=news" target="_blank" rel="noopener">Noticas Recientes</a> y datos similares.  Se recomienda que limites el tamaño de los mensajes/noticias porque cuando los datos rss se muestran en algunos clientes  se trunca la información.';
$helptxt['xmlnews_attachments'] = 'Permite que los enlaces a adjuntos se incluyan en tus fuentes XML/RSS. Activa este ajuste si deseas usar tu foro para distribuir podcasts o contenidos similares. <br><br> El permiso para "ver adjuntos" actúa sobre este ajuste. Los usuarios e invitados solo verán los adjuntos de un mensaje en la fuente si también pueden verlo en el mensaje publicado en la web. Ten en cuenta que la mayoría de lectores de fuentes accederán como invitados. <br><br> Algunos formatos de fuentes solo permiten incluir un adjunto por mensaje. Si un mensaje tiene múltiples adjuntos, SMF incluirá el de mayor tamaño en esas fuentes.';
$helptxt['globalCookies'] = 'Permite el uso de cookies independientes de subdominio.  Por ejemplo, si...<br />tu sitio está en http://www.simplemachines.org/,<br />y tu foro está en http://foro.simplemachines.org/,<br />usando esta modificación, te permitirá accesar las cookies del foro en tu sitio. No actives esta función si hay otros subdominios (como hacker.ejemplo.com) que no controlres.<br><br> Este ajuste no funciona si las cookies locales están activas.';
$helptxt['globalCookiesDomain'] = 'Cuando se usan cookies independientes de un subdominio (cookies globales) puedes especificar qué dominio se debería usar para ellas. Esto debería, por supuesto, ser establecido como tu dominio principal. Por ejemplo, si estás usando <em>forum.example.com</em> y <em>www.example.com</em>, el dominio en ese caso es <em>example.com</em>. No deberás poner <em>http://</em> o <em>https://</em> delante del dominio.';
$helptxt['secureCookies'] = 'Activar esta opción forzará a las cookies creadas por los usuarios en tu foro a ser marcadas como seguras. Activa esta opción sólo si estás usando HTTPS a través de tu sitio, ya que romperá el manejo de cookies de otra manera';
$helptxt['securityDisable'] = 'Esto <em>desactiva</em> la verificación adicional de contraseña para la página de administración.. ¡Esto NO es recomendado!

';
$helptxt['securityDisable_why'] = 'Esta es tu contraseña actual. (la misma que usas para ingresar.)<br /><br />El que tengas que escribirla ayuda a asegurarnos que realmente desees realizar la tarea administrativa que estés realizando,y que eres <b>tú</b> realmente.';
$helptxt['securityDisable_moderate'] = 'Esto <em>desactiva</em> la verificación adicional de contraseña para la página de moderación. ¡Esto no es recomendado!';
$helptxt['securityDisable_moderate_why'] = 'Esta es su contraseña actual. (el mismo que usas para iniciar sesión).<br><br> El requisito para ingresar ayuda a garantizar que cualquier acción que se realice está siendo realizada sólo por <strong>vos</strong>.';
$helptxt['allow_cors'] = 'Cross Origin Resource Sharing o CORS es una política para que los navegadores modernos confíen en los recursos que se solicitan en diferentes dominios. Si está activado, esto intentará resolver la política CORS para los scripts que acceden a los recursos del foro desde diferentes dominios. Si las cookies independientes del subdominio (cookies globales) están activadas, se intenta determinar el dominio adecuado. Proporcionar dominios CORS adicionales con una lista de dominios separados por comas permite dominios adicionales. El formato debe ser {SCHEMA}://{DOMAIN}. Si se proporciona un comodín (*) en el dominio, se intenta resolver el comodín. Si se proporciona un comodín (*) como el único dominio adicional, todos los dominios están permitidos y esto puede presentar un riesgo de seguridad para su foro y no debe usarse excepto en casos extremos. Se pueden proporcionar encabezados adicionales en una lista separada por comas y se permitirán durante las solicitudes que contengan estos encabezados y se permiten comodines (*).';
$helptxt['frame_security'] = 'Los navegadores modernos ahora entienden un encabezado de seguridad presentado por servidores denominados X-Frame-Options. Al configurar esta opción estás especificando cómo quieres que tu sitio sea enmarcado dentro de un frameset o un iframe. Si lo desactivas no enviarás ningún encabezado y es muy inseguro, aunque por otro lado permite la totad libertad del foro. Si lo rechazas harás que todos los frames desaparezcan totalmente y esto es lo más restrictivo y seguro. Permitiendo el Mismo Origen sólo permitirá a tu dominio emitir cualquier frame y establecer así un término medio entre las dos opciones anteriores.';
$helptxt['proxy_ip_header'] = 'Este es el encabezado del servidor que será usado por SMF para contener las direcciones IP actuales de los usuarios. Si cambias esta opción, puedes causar un resultado inesperado en las IP de los miembros. Por favor contacta con el administrador de tu servidor, tu proveedor de CDN o el administrador del proxy antes de cambiar estos ajustes. La mayoría de los proveedores lo entenderán y usarán HTTP_X_FORWARDED_FOR. Deberías rellenar la lista de Servidores enviando los encabezados contrarios del proxy para asegurarte de que esos encabezados solo provienen de fuentes válidas.';
$helptxt['email_members'] = 'En este mensaje puedes usar algunas &quot;variables&quot;. Pueden ser:<br> {$board_url} - La URL de tu foro.<br> {$current_time} - La fecha actual.<br> {$member.email} - El email actual del miembro.<br> {$member.link} - El enlace actual del miembro.<br> {$member.id} - La ID actual del miembro.<br> {$member.name} - El nombre actual del miembro. (para personalización).<br> {$latest_member.link} - El enlace al último usuario registrado.<br> {$latest_member.id} - La ID del último usuario registrado.<br> {$latest_member.name} - El nombre del último miembro registrado.';

$helptxt['failed_login_threshold'] = 'Especifica el número de intentos fallidos de ingreso, antes de redireccionarlos a la pantalla de recordatorio de contraseñas.';
$helptxt['loginHistoryDays'] = 'El número de días para mantener el historial de inicios de sesión en la página de rastreo de un usuario. La cifra por defecto es 30 días.';
$helptxt['oldTopicDays'] = 'Si esta opción está activada se le mostrará al usuario una advertencia cuando intente responder a un tema que no ha tenido nuevas respuestas por el tiempo especificado, en días, en esta opción. Pon 0 para desactivar esta función.';
$helptxt['edit_wait_time'] = 'Número de segundos que deben transcurrir después de la publicación de un mensaje, para que se registre la fecha de la última modificación.';
$helptxt['edit_disable_time'] = 'Número de minutos transcurridos permitidos antes de que un usuario no pueda continuar editando un mensaje que ha publicado. Pon 0 para desactivarlo. <br /><br /><em>Nota: Esto no tendrá efecto en los usuarios que tengan el permiso para editar los mensajes de otros usuarios.</em>';
$helptxt['preview_characters'] = 'Esta opción establece el número de carácteres disponibles para la primera y última previsualización de mensajes en un tema.';
$helptxt['quote_expand'] = 'Esta configuración permite contraer comillas grandes, lo que le da al usuario la opción de expandirlas a su longitud completa. Las cotizaciones más pequeñas que esta configuración no se verán afectadas.';
$helptxt['posts_require_captcha'] = 'Esta opción obligará a los usuarios a introducir un código mostrado en una imagen de verificación cada vez que creen un mensaje en el foro. Sólo usuarios con un número de mensajes menor que el valor establecido necesitarán introducir el código (debería ayudar a combatir scripts automáticos de spam).';
$helptxt['disable_wysiwyg'] = 'Esta opción desactiva a los usuarios el uso del editor WYSIWYG (&quot;What You See Is What You Get&quot;: Lo que Ves es lo que Obtienes) en la página de edición del mensaje.';
$helptxt['lastActive'] = 'Especifica el número de minutos en los que, antes de ese tiempo, un usuario se sigue mostrando activo en el índice del foro. El default son 15 minutos.';

$helptxt['customoptions'] = 'Esta sección define las opciones que un usuario puede elegir de un cuadro desplegable. Hay varios puntos claves a tener en cuenta en esta sección:
	<ul class="normallist">
		<li><strong>Opción por defecto:</strong> Aquella opción que tenga un &quot;radio button&quot; seleccionado será la selección por defecto para el usuario cuando éste introduzca su perfil.</li>
		<li><strong>Eliminar Opciones:</strong> Para eliminar una opción simplemente limpia el cuadro de texto de esa opción (todos los usuarios que la seleccionaron tendrán su opción eliminada.</li>
		<li><strong>Reordenar Opciones:</strong> Puedes reordenar opciones moviendo texto entre los cuadros de texto. Sin embargo (importante), debes asegurarte de <strong>no</strong> cambiar el texto al reordenar opciones o bien los datos del usuario se perderán.</li>
	</ul>';

$helptxt['autoFixDatabase'] = 'Esto arreglará automáticamente tablas en la base de datos con problemas, y continuará como si nada hubiera sucedido.  Esto puede ser útil, ya que la única manera de arreglar este tipo de problemas, es REPARANDO la tabla, y tu foro no estará caído hasta que te des cuenta.  Se te enviará un email cuando esto suceda.';
// argument(s): scripturl
$helptxt['pgFulltextSearch'] = 'Esta configuración define el idioma que se utilizará para la búsqueda de texto completo de PostgreSQL. Elija el idioma que más se asemeje al idioma que realmente usa su foro. Si el idioma de su foro no está en la lista, o si su foro es multilingüe, elija la opción "simple". <br>Esta configuración es independiente de su configuración de idioma SMF principal y no está relacionada con el idioma instalado para SMF. <br>
Cuando cambie esta configuración, deberá <a href="%1$s?action=admin;area=managesearch;sa=method" target="_blank" rel="noopener">reconstruir el índice de búsqueda de texto completo</a>.<br>
Si un idioma que necesita no está en la lista, solicite al administrador de su base de datos que instale el soporte de idiomas PostgreSQL para ese idioma.';

$helptxt['enableParticipation'] = 'Esto muestra un pequeño icono en los temas en que el usuario ha publicado mensajes.';

$helptxt['db_persist'] = 'Mantiene la conexión activa para incrementar el rendimiento.  Si tu NO estás en un servidor dedicado, esto puede causarte problemas con tu proveedor de hospedaje.<br> Con esta opción desactivada puede necesites los ajustes mysqli.allow_persistent o pgsql.allow_persistent en tu archivo php.ini';
$helptxt['ssi_db_user'] = 'Opcionalmente se puede utilizar un usuario y contraseña diferentes para la base de datos al utilizar SSI.php.';

// argument(s): either $helptxt['queryless_urls_supported'] or $helptxt['queryless_urls_unsupported'], depending on whether the server uses a supported webserver
$helptxt['queryless_urls'] = 'Esto cambia un poco el formato de las URL para que a los motores de búsqueda les gusten más. Se verán como index.php/topic,1.0.html.<br><br>%1$s';
// is conditionally used as part of $helptxt['queryless_urls']
$helptxt['queryless_urls_supported'] = 'Esta característica funciona en su servidor.';
// is conditionally used as part of $helptxt['queryless_urls']
$helptxt['queryless_urls_unsupported'] = 'Esta característica no funcionará en su servidor.';
$helptxt['minimize_files'] = 'Esta opción reducirá la cantidad de archivos CSS y JavaScropt usados por tu foro, reduciendo las solicitudes en tu servidor y acelerando los tiempos de carga.<br><br>Lo normal es que quieras tener esta opción activada. El único caso en el que quizás quieras desactivarla temporalmente es cuando estés modificando archivos CSS o JavaScript (por ejemplo, mientras editas un tema o desarrollas una modificación).';
$helptxt['boardindex_max_depth'] = 'Este ajuste controla cuántos niveles de subforos revisará SMF cuando busque nuevos mensajes en subforos. También afectará qué foros se incluyen cuando se active la opción "Contar los mensajes de los subforos en el total de los padres".<br><br>Por ejemplo, si este ajuste se define como 1, un subforo solo quedará marcado como "nuevo" en la página del índice si el subforo contiene un mensaje nuevo. Si se define como 2, el subforo quedará marcado como "nuevo" si hay un nuevo mensaje en el subforo o en un sub-subforo. Si se define como 10, el subforo quedará marcado como "nuevo" si hay un mensaje nuevo en el sub-sub-sub-sub-sub-sub-foro, etc, hasta llegar a los 10 niveles de profundidad.<br><br>Los foros más grandes y activos deberían usar un valor bajo en este ajuste para evitar un consumo excesivo de recursos del servidor.';
$helptxt['countChildPosts'] = 'Al marcar esta opción, todos los mensajes y temas de un foro hijo contarán en los totales del foro.<br /><br />Esto quiere decir que un foro padre sin temas no mostrastará  \'0\' en caso de tener mensajes en los subforos.';
$helptxt['allow_ignore_boards'] = 'Al marcar esta opción permitiras a los usuarios seleccionar foros que quieran ignorar.';
$helptxt['deny_boards_access'] = 'Al marcar esta opción podrás denegar el acceso a ciertos foros basados en acceso a algunos grupos de usuarios';

// argument(s): scripturl
$helptxt['who_enabled'] = 'Esta opción te permite activar o desactivar la posibilidad de que los usuarios vean quién está en linea navegando el foro, así como lo que están haciendo.';

$helptxt['recycle_enable'] = '&quot;Recicla&quot; temas y mensajes eliminados al foro especificado.';

$helptxt['enableReportPM'] = 'Esta opción permite a tus usuarios informar a los administradores sobre mensajes privados que hayan recibido. Puede ser útil para controlar cualquier abuso de los mensajes privados.';
$helptxt['max_pm_recipients'] = 'Esta opción te permite establecer el número máximo de destinatarios permitidos en un mensaje privado enviado por un usuario del foro. Puede utilizarse para facilitar el bloqueo de abuso de spam en el sistema de Mensajes Privados. Observa que los usuarios con permiso para enviar boletines de noticias están exentos de esta restricción. Introduce cero para ilimitado.';
$helptxt['pm_posts_verification'] = 'Esta opción obligará a los usuarios a introducir un código mostrado en una imagen de verificación cada vez que manden un mensaje privado. Solamente usuarios con un número de mensajes inferior al establecido necesitarán introducir el código - esto deberia ayudar contra los scripts automatizados de spam.';
$helptxt['pm_posts_per_hour'] = 'Esto limitará el número de mensajes privados, los cuales hayan sido enviados por un usuario en el perido de una hora. Esto no afecta a los administradores o moderadores.';

$helptxt['default_personal_text'] = 'Establece el texto por defecto que un usuario tendrá como &quot;texto personal.&quot;';

$helptxt['registration_method'] = 'Esta opción determina que método de registro es usada para las personas que deseen unirse a tu foro. Puedes seleccionarlo entre:<br /><br />
	<ul class="normallist">
		<li>
			<strong>Registro Desactivado:</strong><br />
				Desactiva el proceso de registro, con este método nadie puede registrarse en tu foro.<br />
		</li><li>
			<strong>Registro Inmediato</strong><br />
				Los nuevos usuarios pueden ingresar y publicar inmediatamente después de registrarse en tu foro.<br />
		</li><li>
			<strong>Activación de Usuario</strong><br />
				Cuando esta opción está activada cualquier usuario que se registre en tu foro tendrá un enlace de activación que se le enviará por email, y que tendrá que visitar antes de poder convertirse usuario válido<br />
		</li><li>
			<strong>Aprobación de Usuarios</strong><br />
				Esta opción hará que todos los nuevos usuarios que se registren en tu foro necesiten ser aprobados por un administrador para que se puedan volver usuarios válidos.
		</li>
	</ul>';

$helptxt['send_validation_onChange'] = 'Cuando esta opción está seleccionada todos los usuarios que cambien su dirección de email en su perfil tendrán que reactivar sus cuenta desde el email enviado a la nueva dirección';
$helptxt['approveAccountDeletion'] = 'Cuando esta opción está activada, cualquier solicitud de eliminación de cuenta enviadas por los usuarios necesitará ser aprobada por un administrador';

$helptxt['send_welcomeEmail'] = 'Cuando esta opción está seleccionada a todos los nuevos usuarios se les enviará un email de bienvenida a tu foro';
$helptxt['password_strength'] = 'Esta opción determina el grado de robustez requerido para las contraseñas seleccionadas por los usuarios de tu foro. Cuanto más &quot;robusta&quot; sea la contraseña, más difícil es comprometer las cuentas de los usuarios.
	Las posibles opciones son:
	<ul class="normallist">
		<li><strong>Baja:</strong> La contraseña debe contener al menos cuatro caracteres.</li>
		<li><strong>Media:</strong> La contraseña debe contener al menos ocho caracteres, y no puede ser parte del nombre o dirección email del usuario.</li>
		<li><strong>Alta:</strong> Como la Media, excepto que la contraseña debe contener también una mezcla de mayúsculas, minúsculas y al menos un número.</li>
	</ul>';
$helptxt['enable_password_conversion'] = 'Al activar esta opción, SMF intentará detectar contraseñas almacenadas en otros formatos y convertirlas al formato que SMF habitualmente usa. Normalmente esto se usa en foros que han sido convertidos a SMF, pero puede tener también otros usos. Al desactivar esta opción, prevendrás a un usuario iniciar sesión usando su contraseña después de una conversión del foro y necesitarán recuperar su contraseña.';

$helptxt['coppaAge'] = 'El valor especificado en este cuadro determinará la edad mínima que los nuevos usuarios deben tener para que se les conceda acceso inmediato a los foros.
	Durante el proceso de registro se les pedirá que confirmen si son mayores a esa edad, y de no serlo, puede o negársele su solicitud, o suspendarla esperando por la aprobación de los padres - dependiendo del tipo de restricción escogida.
	Si se pone 0 en este valor, entonces todas las restricciones de edad se ignorarán.';
$helptxt['coppaType'] = 'Si las restricciones de edad están activas, entonces este valor determinará qué pasará cuando un usuario más joven de la edad mínima intenta registrarse en tu foro. Hay dos posibilidades:
	<ul class="normallist">
		<li>
			<strong>Rechazar su solicitud de registro:</strong><br />
				A cualquier nuevo usuario que no cumpla con la edad mínima se le rechazará su solicitud de registro inmediatamente.<br />
		</li><li>
			<strong>Requerir aprobación del Padre o Tutor</strong><br />
				La cuenta de cualquier nuevo usuario que no cumpla con la edad mínima marcará como pendiente de autorización, y se le mostrará un formulario en la que sus padres o tutores deben dar el permiso expreso para que se convierta en un usuario del foro.
				También se les mostrarán los datos de contacto que se especificaron en la pantalla de configuración, para que puedan enviar el formulario al administrador por correo o fax.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'Los cuadros de contacto son requeridos para que las formas que otorgan el permiso a los usuarios por debajo de la edad mínima pueda ser enviada al administador del foro. Estos detalles serán mostrados a todos los usuarios debajo de la edad mínima, y son necesarios para la aprobación del padre o tutor. Por lo menos se debe proveer una dirección postal o un número de fax.';

$helptxt['allow_hideOnline'] = 'Cuando esta opción está seleccionada todos los usuarios podrían ocultarle a los demás usuarios si están conectados (excepto a los administradores). Si está desactivado, solamente los usuarios que pueden moderar el foro pueden ocultar su presencia. Es importante mencionar que deshabilitando esta opción no cambia el estado de ningún usuario existente - simplemente les impide ocultarse en el futuro.';
$helptxt['meta_keywords'] = 'Estas palabras clave son enviadas en la salida de cada página para indicar a los motores de búsqueda (y demás) el contenido clave de tu sitio. Una coma deberá separar cada palabra de la lista, y no debes utilizar HTML.';

$helptxt['latest_themes'] = 'Esta área muestra algunos de los últimos y más populares temas de  <a href="https://www.simplemachines.org/" target="_blank" rel="noopener">www.simplemachines.org</a>.  Puede que no se muestre correctamente si tu computadora no puede encontrar <a href="https://www.simplemachines.org/" target="_blank" rel="noopener">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'Por tu seguridad, la respuesta a tu pregunta (así como tu contraseña) está encriptada de una manera en la que SMF puede decirte solamente si está correcta, así, jamás podrá decirte (¡o a alguien más, que es lo importante!) cual es tu respuesta o tu contraseña.';
$helptxt['moderator_why_missing'] = 'Debido a que la moderación se realiza en cada foro, debes hacer a un usuario moderador desde la<a href="%1$s?action=admin;area=manageboards" target="_blank" rel="noopener">pantalla de administración de foros</a>.';

$helptxt['permissions'] = 'A través de los permisos les permites o impides a los grupos hacer cosas específicas.<br /><br />Puedes modificar varios foros al mismo tiempo usando las casillas, o busca en los permisos por un grupo específico al hacer clic en \'Modificar.\'';
$helptxt['permissions_board'] = 'Si un foro se especifica como \'Global,\' significa que el foro no tendrá permisos especiales.  \'Local\' significa que tendrá sus propios permisos - separados de los globales.  Esto te permite tener un foro que tiene más (o menos) permisos que otro, sin que sea necesario que los especifiques para cada uno de los foros.';
$helptxt['permissions_quickgroups'] = 'Estos te permiten usar la configuración &quot;default&quot; de permisos - estándar significa \'nada especial\', restrictivo significa \'como visitante\', moderador significa \'que un moderador tiene\', y por último \'mantenimiento\' significa permisos muy cercanos a los de un administrador.';
$helptxt['permissions_deny'] = 'Denegar permisos puede ser útil cuando quieres quitar permisos de algunos usuarios. Puedes añadir un grupo con permiso \'denegado\' a los miembros que deseas denegar un permiso.<br /><br />Utilízalos con cuidado, un permiso denegado prevalece, no importa a que otros grupos pertenezca el usuario.';
$helptxt['permissions_postgroups'] = 'Al activar permisos para grupos basados en el número de mensajes podrás asignar permisos a usuarios que han publicado una cierta cantidad de mensajes. Los permisos de grupos basados en el número de mensajes se <em>añden</em> a los permisos de los grupos convencionales.';
$helptxt['membergroup_guests'] = 'El grupo de invitados son todos los usuarios que no están conectados.';
$helptxt['membergroup_regular_members'] = 'Los usuarios regulares son todos aquellos que están conectados, pero que no tienen asignado un grupo primario.';
$helptxt['membergroup_administrator'] = 'El administrador puede, por definición, ver y realizar cualquier cosa en el foro. No se establecen permisos para el administrador.';
$helptxt['membergroup_moderator'] = 'El grupo Moderador es un grupo especial. Los permisos y opciones asignadas a este grupo son aplicables a los moderadores pero solamente <em>en los foros que moderan</em>. Fuera de ellos son como cualquier otro usuario.';
$helptxt['membergroups'] = 'En SMF hay dos tipos de grupos a los que tus usuarios pueden pertenecer. Estos son:
	<ul>
		<li><b>Grupos Regulares:</b> Un grupo regular es un grupo en el que los usuarios no se les ingresa automáticamente. Para ingresar a un usuario al grupo simplemente ve a su perfil y haz <i>clic</i> en "Configuración de la cuenta". Ahí puedes asignarle todos los grupos regulares a los que deseas que pertenezca.</li>
		<li><b>Grupos de Mensajes:</b> A diferencia de los grupos regulares, este tipo de grupos no pueden ser asignados. En vez de eso, los usuarios son asignados automáticamente a un grupo, cuando alcanzan el mínimo de mensajes publicados necesarios para pertenecer a dicho grupo.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Puedes editar esos eventos haciendo clic en el asterisco rojo (*) al lado de sus nombres.';

$helptxt['maintenance_backup'] = 'Esta área te permite guardar una copia de todos los mensajes, configuraciones, usuarios, y otra información de tu foro en un archivo muy grande.<br /><br />Es recomendado hacerlo a menudo, probablemente semanalmete, por seguridad.';
$helptxt['maintenance_rot'] = 'Esto te permite <strong>completa</strong> e <strong>irrevocablemente</strong> borrar temas viejos. Es recomendable que intentes hacer un respaldo primero, en caso que accidentalmente borres algo que no deseabas.<br /><br />Usa esta opción con cuidado.';
$helptxt['maintenance_members'] = 'Te permite <strong>completa</strong> e <strong>irrevocablemente</strong> eliminar cuentas de usuario de tu foro. Se recomienda <strong>encarecidamente</strong> que se realice una copia de seguridad antes, para casos en los que puedas eliminar algo que realmente no querías.<br /><br />Utiliza esta opción con cuidado.';

$helptxt['avatar_server_stored'] = 'Esto permite a sus usuarios elegir entre los avatares almacenados en su servidor. De forma predeterminada, se almacenan en el directorio "avatares". <br> Como consejo, si crea directorios en esa carpeta, puede crear "categorías" de avatares.';
$helptxt['avatar_external'] = 'Al activarlo, los usuarios pueden teclear una URL que enlace con su propio avatar. El inconveniente es que, en algunos casos, pueden utilizar avatares que son muy grandes o retratos que no quieres en tu foro.';
$helptxt['avatar_download_external'] = 'Con esta configuración activada, los avatares externos se descargarán de las URL proporcionadas por los usuarios. Si tiene éxito, los avatares se tratarán como avatares cargados.';
$helptxt['avatar_action_too_large'] = 'Esta configuración le permite rechazar imágenes (de otros sitios) que son demasiado grandes, o le solicita al navegador del usuario a que cambie su tamaño o que las descargue en su servidor. <br><br> Si los usuarios colocan imágenes muy grandes como avatares y cambian el tamaño en el navegador, podría causar que el foro cargue muy lentamente para el resto de usuarios porque en realidad, no cambia el tamaño del archivo, simplemente lo muestra más pequeño. Por lo tanto, una foto digital, por ejemplo, todavía se cargaría en su totalidad y luego se cambiaría el tamaño solo cuando se mostrara, por lo que para los usuarios esto podría ser bastante lento y usar mucho ancho de banda.<br><br> Por otro lado, descargarlos significa utilizar tu ancho de banda y el espacio en el servidor, pero también si te aseguras de que las imágenes sean más pequeñas y de esta manera más rápido para los usuarios. (Nota: la descarga y el cambio de tamaño requieren la biblioteca GD o ImageMagick usando las extensiones Imagick o MagickWand)';
$helptxt['avatar_upload'] = 'Esta configuración es muy parecida a &quot;avatares externos&quot;, excepto que tienes un mejor control sobre los avatares, un mejor reescalado para cambiar su tamaño y tus usuarios no tienen que tener espacio para colocar avatares. <br> <br> Sin embargo, la desventaja es que puede ocupar mucho espacio en su servidor.';
$helptxt['avatar_download_png'] = 'Los PNG son más grandes, pero ofrecen una mejor calidad de compresión. De no estar seleccionado, se usaráa en su lugar JPEG - que generalmente es de menor tamaño, pero con menor calidad.';

$helptxt['disableHostnameLookup'] = 'Esto desactiva la búsqueda de nombres de servidores, que en algunos servidores es muy lento.  Es importante mencionar que ésto hará la restricción de accesos menos eficaz.';

$helptxt['smiley_sameall'] = 'Si se marca "Misma imagen para todos los conjuntos", se agregará la misma imagen a todos sus conjuntos de emoticones. Si desmarca la casilla, se puede cargar una imagen diferente para cada conjunto de emoticones instalado. Tenga en cuenta que se debe proporcionar una imagen para cada conjunto de emoticones.';

$helptxt['search_weight_frequency'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la búsqueda. Cambia estos factores de peso para que coincida con las cosas que son importantes especificamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antigüedad del último mensaje que coincidió\'. Todos los valores son relativos, relacionados entre sí, y deben ser enteros positivos.<br /><br />Este factor cuenta la cantidad de mensajes que coincidieron y los divide por el número total de mensajes dentro del tema.';
$helptxt['search_weight_age'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la búsqueda. Cambia estos factores de peso para que coincida con las cosas que son importantes especificamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antigüedad del último mensaje que coincidió\'. Todos los valores son relativos, relacionados entre sí, y deben ser enteros positivos.<br /><br />Este factor califica la antigüedad del último mensaje dentro de un tema. Entre más reciente es, mayor su puntuación.';
$helptxt['search_weight_length'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la búsqueda. Cambia estos factores de peso para que coincida con las cosas que son importantes especificamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antigüedad del último mensaje que coincidió\'. Todos los valores son relativos, relacionados entre sí, y deben ser enteros positivos.<br /><br />Este factor está basado en el tamaño del tema. Entre más mensajes tenga un tema, mayor su puntuación.';
$helptxt['search_weight_subject'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la búsqueda. Cambia estos factores de peso para que coincida con las cosas que son importantes especificamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antigüedad del último mensaje que coincidió\'. Todos los valores son relativos, relacionados entre sí, y deben ser enteros positivos.<br /><br />Este factor revisa si se encuentran coincidencias en el asunto del tema.';
$helptxt['search_weight_first_message'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la búsqueda. Cambia estos factores de peso para que coincida con las cosas que son importantes especificamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antigüedad del último mensaje que coincidió\'. Todos los valores son relativos, relacionados entre sí, y deben ser enteros positivos.<br /><br />Este factor revisa si se encuentran coincidencias en el primer mensaje del tema.';
$helptxt['search_weight_sticky'] = 'Los factores de peso se usan para determinar la relevancia de los resultados de la búsqueda. Cambia estos factores de peso para que coincida con las cosas que son importantes específicamente para tu foro. Por ejemplo, un foro de un sitio de noticias, puede necesitar un valor relativamente alto para \'antigüedad del último mensaje que coincidió\'. Todos los valores son relativos, relacionados entre sí, y deben ser enteros positivos<br /><br />Este factor revisa cuando un tema está fijado e incrementa su relevancia si lo está.';
$helptxt['search'] = 'Aquí puedes ajustar la configuración de la función de búsqueda. Es importante mencionar que aquí no puedes especificar quien tiene acceso a la función de búsqueda. Usa la pantalla de \'manejar permisos\' en el panel administrativo para eso.';
$helptxt['search_why_use_index'] = 'Un índice de búsqueda puede mejorar considerablemente el desempeño de las búsquedas en tu foro. Especialmente cuando el número de mensajes en tu foro crece considerablemente, el buscar sin un índice puede tomar mucho tiempo e incrementar la carga en tu servidor. Si tu foro tiene más de 50,000 mensajes, debes considerar el crear el índice de búsqueda para asegurar un desempeño óptimo de tu foro.<br /><br />Es importante mencionar que un índice de búsqueda puede tomar algún espacio extra de la base de datos. Un índice fulltext es un tipo de índice dentro de MySQL. Es relativamente compacto (aproximadamente el mismo tamaño de la tabla de mensajes), pero muchas palabras no son indexadas y puede, en algunas búsquedas, ser muy lento. El índice personalizado usualmente necesita mayor espacio (dependiendo de tu configuración puede ser hasta 3 veces mayor a tu tabla de mensajes) pero su desempeño es mejor que fulltext y mucho mas estable.';

$helptxt['see_admin_ip'] = 'A los administradores y moderadores se les muestran las IPs para facilitar la moderación y para hacer más fácil el rastreo de personas indeseables. Recuerda que las direcciones IP no siempre son identificatorias, y que las IPs cambian periódicamente.<br /><br />También se les permite a los usuarios ver su propia IP.';
$helptxt['see_member_ip'] = 'Tu dirección IP es mostrada solamente a tí y a los moderadores. Recuerda que esta información no es identificatoria y muchas IPs cambian periódicamente.<br /><br />No puedes ver las IPs de otros usuarios y ellos no pueden ver la tuya.';
$helptxt['whytwoip'] = 'SMF utiliza varios métodos para detectar las direcciones IP de los usuarios. Por lo general, estos dos métodos dan como resultado la misma dirección, pero en algunos casos se puede detectar más de una dirección. En este caso, SMF registra las dos direcciones más recientes y las utiliza para verificaciones de prohibición (etc.). Puede hacer clic en cualquiera de las direcciones para rastrear esa IP y prohibirla si es necesario.';

$helptxt['ban_cannot_post'] = 'La restricción \'no puede publicar\' establece el modo sólo-lectura para el usuario restringido. El usuario no puede crear nuevos temas, ni responder a temas ya existentes, ni enviar mensajes privados ni votar en encuestas. Los usuarios restringidos, sin embargo, pueden leer mensajes privados y temas.<br /><br />Se muestra un mensaje de advertencia a usuarios que tiene restringido el acceso de esta manera.';

$helptxt['posts_and_topics'] = '	<ul class="normallist">
		<li>
			<strong>Configuración de Mensajes</strong><br />
			Modifica la configuración relacionada con la publicación de mensajes y la manera en la que se muestran. Puedes también activar la comprobación ortográfica aquí.
		</li><li>
			<strong>Códigos BBC</strong><br />
			Activa los códigos que permiten dar formato a los mensajes del foro. También se ajusta qué códigos se permiten y cuáles no.
		</li><li>
			<strong>Palabras Censuradas</strong>
			Para controlar el lenguaje de tu foro, puedes censurar ciertas palabras. Esta función te permite convertir palabras prohibidas en versiones adecuadas.
		</li><li>
			<strong>Configuración de Temas</strong>
			Modifica la configuración relacionada con temas. El número de temas por página, dónde están activados o no los mensajes pegados, el número de mensajes necesarios para ser un tema candente, etc.
		</li>
	</ul>';

$helptxt['spider_mode'] = 'Establece el nivel de registro.<br> Estándar - Registra una mínima actividad de las arañas.<br> Moderado - Provee estadísticas más precisas.<br> Agresivo - Igual que para el &quot;Registro de Moderación&quot; pero registra datos sobre cada página visitada.';

$helptxt['spider_group'] = 'Seleccionando un grupo restrictivo, cuando un invitado sea identificado como un spider de un motor de búsqueda y se le impedirá el acceso. Puedes denegar el acceso además de los permisos normales de los invitados. Puede utilizar esta opción para que los motores de búsqueda tengan menos acceso a tu comunidad. Por ejemplo, puede crear un nuevo grupo llamado "Spiders&quot;, y seleccionarlo aquí. Luego podrías denegar permisos a ese grupo e impedir que registren los perfiles de los usuarios <br />Advertencia: la detección de Spiders no es perfecta y puede ser simulada por los usuarios, por lo que esta característica no garantiza que se restrinja el acceso a los motores de búsqueda que has indicado.';
$helptxt['show_spider_online'] = 'Esta opción te permite seleccionar si las arañas deberán ser listadas en la lista de usuarios en línea en el índice del foro y en la página &quot;Quién está en línea&quot; page. Las opciones son:
	<ul class="normallist">
		<li>
			<strong>No, en absoluto</strong><br />
			Las arañas simplemente aparecerán como invitados para todos los usuarios.
		</li><li>
			<strong>Mostrar la cantidad de arañas</strong><br />
			El índice del foro mostrará el número de arañas que están visitando el foro en ese momento.
		</li><li>
			<strong>Mostrar los nombres de las arañas</strong><br />
			Será mostrado el nombre de cada araña, de manera que los usuarios podrán ver cuántas arañas de cada tipo están visitando el foro en ese momento - esto tiene efecto tanto en el índice del foro como en la página de quién está en línea.
		</li><li>
			<strong>Mostrar los nombres de las arañas - Sólo admins</strong><br />
			Como arriba, excepto que sólo los administradores pueden ver el estado de las arañas - para el resto de usuarios las arañas aparecen como invitados.
		</li>
	</ul>';

$helptxt['birthday_email'] = 'Elegir el índice del email de cumpleaños que se usará.  Una vista previa será mostrada en los campos Asunto del email y Cuerpo del email.<br /><strong>Nota:</strong> Establecer esta opción no activa automáticamente los emails de cumpleaños.  Para activarlos usa la página de  <a href="%1$s?action=admin;area=scheduledtasks;%3$s=%2$s" target="_blank" rel="noopener">Tareas Programadas</a> y activa la tarea de email de cumpleaños.';
$helptxt['pm_bcc'] = 'Al enviar un mensaje personal puedes elegir añadir un receptor como BCC o &quot;Blind Carbon Copy&quot; (remitente oculto). La identidad de los receptores BCC no es revelada al resto de receptores del mensaje.';

$helptxt['move_topics_maintenance'] = 'Esto permitirá mover todos los posts de un foro a otro.';
$helptxt['maintain_reattribute_posts'] = 'Puedes usar esta función para atribuir posts de invitado de tu foro a un usuario registrado. Esto es útil si, por ejemplo, un usuario borró su cuenta y cambió de idea después, decidiendo volver a registrarse; con esta función se le podrían reasignar sus posts antiguos a la nueva cuenta.';
$helptxt['chmod_flags'] = 'Puedes establecer manualmente los permisos a los que quieres establecer los archivos seleccionados. Para hacer esto introduce el valor de chmod como un valor numérico (octeto). Nota - estas banderas no tienen efecto en los sistemas operativos de Microsoft Windows.';

$helptxt['postmod'] = 'Esta sección permite a los miembros del equipo de moderación (aquellos con los permisos suficientes) aprobar cualquier mensaje o tema antes de que sea mostrado.';

$helptxt['field_show_enclosed'] = 'Encierra la entrada del usuario entre texto o html. Esto le permitirá agregar más proveedores de mensajería instantánea, imágenes o una inserción, etc. Por ejemplo:<br><br>
		&lt;a href="https://ejemplo.com/{INPUT}"&gt;&lt;img src="{DEFAULT_IMAGES_URL}/icon.png" alt="{INPUT}" /&gt;&lt;/a&gt;<br><br>
		NOTA: puede utilizar las siguientes variables:<br>
		<ul class="normallist">
			<li>{INPUT} - La entrada especificada por el usuario.</li>
			<li>{SCRIPTURL} - Dirección web del foro.</li>
			<li>{IMAGES_URL} - URL al directorio de imágenes en el tema actual de los usuarios.</li>
			<li>{DEFAULT_IMAGES_URL} - URL al directorio de imágenes en el theme predeterminado.</li>
			<li>{KEY} - Se usa cuando un campo tiene múltiples opciones, es el ID numérico único que se usa para identificarlo.</li>
		</ul>';

$helptxt['custom_mask'] = 'La máscara de entrada es importante para la seguridad de tu foro. Validar la entrada de un usuario puede ayudar asegurar que no es usada de una forma que tú no esperas. Proporcionamos varias expresiones regulares simples como muestra.<br><br> ¡Es necesario usar delimitadores que marquen el inicio y fin de una patrón! Son las tildes (~) en los siguientes ejemplos.<br><br><div class="smalltext" style="margin: 0 2em"> &quot;~[A-Za-z]+~&quot; - Coincidencia de todas las mayúsculas y minúsculas en las letras del abecedario.<br> &quot;~[0-9]+~&quot; - Coincidencia de todos los caracteres numéricos.<br> &quot;~[A-Za-z0-9]{7}~&quot; - Coincidencia de todas las mayúsculas y minúsculas del abecedario y caracteres numéricos siete veces.<br> &quot;~[^0-9]?~&quot; - Excluir cualquier número en las coincidencias.<br> &quot;~^([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$~&quot; - Permitir solo 3 o 6 caracteres hexadecimales.<br> </div><br><br> Además, se pueden definir metacaracteres ?+*^$ y {xx}. <div class="smalltext" style="margin: 0 2em"> ? - Uno o ninguno coinciden en la expresión anterior.<br> + - Uno o más de la expresión anterior.<br> * - Ninguno o más de la expresión anterior.<br> {xx} - Un número exacto de la expresión anterior.<br> {xx,} - Un número exacto o más de la expresión anterior.<br> {,xx} - Un número exacto o menos de la expresión anterior.<br> {xx,yy} - Una coincidencia exacta entre los dos números de la expresión anterior.<br> ^ - Inicio de la cadena.<br> $ - Fin de la cadena.<br> \\ - Salta el siguiente caracter.<br> </div><br><br> Es posible encontrar más información y técnicas avanzadas buscando en internet. ';

$helptxt['topic_move_any'] = 'Si seleccionas esta opción, los usuarios podrán mover temas a cualquier foro que puedan ver. De no ser así, solo podrán moverlos a foros en los que puedan publicar mensajes.';

$helptxt['alert_pm_new'] = 'Las notificaciones de nuevos Mensajes Privados no aparecen en el panel de Alertas, pero aparecen en la lista de "Mis Mensajes" en su lugar.';
$helptxt['alert_event_new'] = 'Esto enviará una alerta o email como se ha solicitad si un nuevo evento ha sido añadido al calendario. De todas formas, si ese evento se ha publicado y se añade un tema, no recibirás la alerta del evento si ya estás suscrito a ese foro.';

$helptxt['force_ssl'] = '<strong>Verifica que SSL y HTTPS funcionan correctamente en tu servidor antes de activar esta opción; de otro modo tu foro podría quedar inaccesible.</strong> Activa el modo de mantenimiento si no puedes accceder al foro tras su activación.<br><br><strong>Cambiar este ajuste actualizará la URL primaria de tu foro junto con las URLs de los archivos de tus temas, imágenes, smileys y avatares, ajustándolas como http: o https: basándose en tu selección. Las URLs personalizadas no quedarán afectadas.</strong> ';
$helptxt['image_proxy_enabled'] = 'Requerido para incrustar imágenes externas cuando se está usando SSL totalmente';
$helptxt['image_proxy_secret'] = 'Mantén esto en secreto, protege tu foro de imágenes "hotlinking". Cámbialo para prestar imágenes "hotlinking" inservibles.';
$helptxt['image_proxy_maxsize'] = 'Tamaño máximo de imagen que el proxy de imágenes SSL almacenará: las imágenes más grandes no serán almcenadas. Las imágenes almacenadas se guardan en tu carpeta caché de SMF, así que asegúrate de tener suficiente espacio.';

$helptxt['enable_sm_stats'] = 'Si se activa, este ajuste permitirá a Simple Machines visitar tu web una vez al mes para recoger estadísticas básicas. Eso nos ayudará a tomar decisiones sobre qué configuraciones deberíamos optimizar. Para más información, por favor, visita nuestra <a href="https://www.simplemachines.org/about/stats.php" target="_blank" rel="noopener">página de información</a>. ';

$helptxt['field_reg_require'] = 'Este campo es obligatorio durante el registro, y será también necesario en cambios en el perfil.';

$helptxt['translatable_fields'] = 'Si desea ofrecer soporte en varios idiomas para sus campos de perfil personalizados, puede usar tokens traducibles en los campos de nombre y descripción.<br><br>
Todo lo que esté encerrado entre llaves <span class="monospace">{}</span> se considerará como un token y se comparará con una cadena $txt. Por ejemplo, el token <span class="monospace">{gender}</span> será reemplazado por el valor de $txt[\'gender\']<br><br>
Es <strong>muy importante</strong> agregar la cadena $txt coincidente a <strong>TODOS</strong> los idiomas actualmente instalados. Para hacer esto, vaya a <a href="%1$s?action=admin;area=languages;sa=edit;%3$s=%2$s" class="bbc_link" target="_blank" rel ="noopener">Editar idiomas</a> y complete los siguientes pasos para cada idioma instalado:
<ol class="bbc_list" style="list-style-type: decimal">
	<li>Haga clic en el botón "Editar" junto al nombre del idioma.</li>
	<li>En el menú "Seleccionar entradas para editar", elija "Modificaciones".</li>
	<li>Desplácese hasta la parte inferior y haga clic en el botón "Agregar otro elemento".</li>
	<li>Siga las indicaciones para agregar su nueva cadena.</li>
</ol>';

// argument(s): $boarddir, $boardurl
$helptxt['cron_is_real_cron'] = 'Por defecto, SMF agrega a cada página un pequeño fragmento de JavaScript que solicita al navegador del usuario que active el cron.php de SMF en segundo plano. Este enfoque permite que SMF ejecute sus tareas programadas de manera regular sin requerir que el administrador realice ninguna configuración de servidor adicional. Sin embargo, algunos administradores pueden preferir configurar sus servidores para ejecutar directamente cron.php de forma regular. Si ha hecho esto, puede deshabilitar el método JavaScript.<br><br><strong>Nota:</strong> La configuración de su servidor para ejecutar tareas programadas de esta manera no se puede realizar desde SMF. Necesitará usar el software de configuración de su servidor para hacerlo. Las herramientas típicas para este propósito incluyen <code>cron</code> (para servidores Linux), <code>schtasks.exe</code> (para servidores Windows) y <code>launchd</code> (para servidores macOS). La mayoría de las empresas de alojamiento web proporcionan algún tipo de interfaz de panel de control para permitir que sus clientes accedan a estas herramientas.<br><br>La ruta y la URL para el cron.php de su foro son:<br>Ruta: %1$s/cron. php<br>URL: %2$s/cron.php';

$helptxt['languages_txt'] = 'Estas entradas de idioma se usan a lo largo de todo SMF para definir las versiones localizadas de texto para diferentes idiomas.<br><br>Si ves un valor como <code>&#37;1$s</code> en una entrada, debes interpretarlo como un contenedor que SMF usará para rellenarlo con el valor adecuado en el momento de su ejecución. Asegúrate de mantener esos contenedores en tu texto personalizado.';
$helptxt['languages_helptxt'] = 'Estas entradas de idioma se usan para mostrar ventanas de ayuda emergentes (como ésta).';
$helptxt['languages_editortxt'] = 'Estas entradas de idioma se usan para elementos de la interfaz en el editor de mensajes.';
$helptxt['languages_tztxt'] = 'Estas entradas de idioma se utilizan para crear descripciones para las zonas horarias.<br><br>Por ejemplo, la cadena <code>Europa_occidental </code> se puede combinar con la cadena <code>horario_de_ahorro_de_luz_del_día_falso</code> para generar "Hora Estándar de Europa Occidental".<br><br>Nota: si no se proporciona una descripción para una zona horaria determinada, SMF generará una descripción usando una lista de ubicaciones dentro de esa zona horaria.';
$helptxt['languages_txt_for_timezones'] = 'Estas entradas de idioma le permiten hacer lo siguiente:<br><ol class="bbc_list" style="list-style-type: decimal;"><li>Editar los nombres que se muestran para ubicaciones individuales en cualquier lugar donde puedan usarse en un contexto relacionado con las zonas horarias. Por ejemplo, puede indicarle a SMF que muestre "Qaanaaq" para la ubicación "America/Thule" en lugar de "Thule".</li><li>Edite los nombres que se muestran para diferentes países. Esto se puede hacer editando la cadena <code>iso3166[]</code> relevante.</li></ol>';
$helptxt['languages_txt_for_email_templates'] = 'Estas entradas de idioma se utilizan para crear los mensajes de correo electrónico que SMF envía a sus usuarios.';
$helptxt['languages_native_name'] = 'El nombre propio del idioma, usando su propia codificación.';
$helptxt['languages_character_set'] = 'El tipo de codificación de caracteres usado para este idioma. Desde SMF 2.1 debería ser siempre "UTF-8". ';
$helptxt['languages_locale'] = 'El código local se usa para determinar las diferentes convenciones de formato, etc.<br><br>El código local normalmente está compuesto de dos caracteres del código del idioma, opcionalmente seguido por un guión bajo y dos caracteres del código del país. Por ejemplo, <code>en</code> identificaría el idioma inglés genérico, mientras que <code>en_AU</code> identificaría al inglés australiano en particular. ';
$helptxt['languages_rtl'] = 'Ingresa aquí "1" si este idioma se lee de derecha a izquierda (por ejemplo: hebreo, árabe). Sino "0" para los idiomas de izquierda a derecha.';
$helptxt['languages_dictionary'] = 'Este ajuste define el diccionario del idioma principal que usará el <a href="https://php.net/function.pspell-new" target="_blank" rel="noopener">corrector</a> ortográfico (si está instalado).';
$helptxt['languages_recaptcha'] = 'El código de idioma que se utilizará para el widget de verificación reCAPTCHA.<br><br>Consulte la documentación de reCAPTCHA de Google para conocer su <a href="https://developers.google.com/recaptcha/docs/language" target="_blank" rel="noopener" class="bbc_link">lista de idiomas admitidos</a>.';
// The GDPR page of the EU exists in several languages; change the language code at the end of the url
$helptxt['requireAgreement'] = 'Se recomienda activar esta configuración para cumplir con las reglas de <a href="https://ec.europa.eu/info/law/law-topic/data-protection/eu-data-protection-rules_es" target="_blank" rel="noopener" class="bbc_link">GDPR</a>.';
// The GDPR page of the EU exists in several languages; change the language code at the end of the url
$helptxt['requirePolicyAgreement'] = 'Se recomienda activar esta configuración para cumplir con las reglas de <a href="https://ec.europa.eu/info/law/law-topic/data-protection/eu-data-protection-rules_es" target="_blank" rel="noopener" class="bbc_link">GDPR</a>.';
$helptxt['gravatar'] = 'Gravatar es un servicio de avatares mundialmente reconocidos. Registre una cuenta en <a href="https://www.gravatar.com" target="_blank" rel="noopener">https://www.gravatar.com</a> para seleccionar una imagen de avatar. Este avatar estará disponible en todos los sitios que admitan gravatars. Si no tiene una cuenta de gravatar, se utilizará una imagen predeterminada.';

?>