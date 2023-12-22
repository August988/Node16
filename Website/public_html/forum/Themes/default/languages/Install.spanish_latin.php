<?php
// Version: 2.1.3; Install

// These should be the same as those in index.language.php.
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = '0';

$txt['install_step_welcome'] = 'Bienvenido/a';
$txt['install_step_writable'] = 'Verificación permiso de escritura';
$txt['install_step_forum'] = 'Configuración del foro';
$txt['install_step_databaseset'] = 'Configuración de la base de datos';
$txt['install_step_databasechange'] = 'Poblar base de datos';
$txt['install_step_admin'] = 'Cuenta de Administrador';
$txt['install_step_delete'] = 'Finalizar Instalación';

$txt['smf_installer'] = 'Instalador SMF';
$txt['installer_language'] = 'Idioma';
$txt['installer_language_set'] = 'Establecer';
$txt['congratulations'] = '¡Felicidades!, el proceso de instalación se ha completado';
$txt['congratulations_help'] = 'Si en algún momento necesitas soporte, o SMF no funciona correctamente, recuerda que  <a href="https://www.simplemachines.org/community/index.php" target="_blank" rel="noopener">hay ayuda disponible</a> en caso que la necesites.';
$txt['still_writable'] = 'Tu directorio de instalción es aún modificable. Es una buena idea hacerlo no modificable con chmod por razones de seguridad.';
$txt['delete_installer'] = 'Haz <i>clic</i> aquí para borrar este archivo install.php ahora.';
$txt['delete_installer_maybe'] = '<em>(no funciona en todos los servidores.)</em>';
$txt['go_to_your_forum'] = 'Ahora puedes ver <a href="%1$s">tu foro recién instalado</a> y comenzar a usarlo. Primero debes asegurarte de ingresar con tu usuario, para posteriormente acceder al área de administración.';
$txt['good_luck'] = '¡Buena Suerte!<br />Simple Machines';

$txt['install_welcome'] = 'Bienvenido';
$txt['install_welcome_desc'] = 'Bienvenido a SMF. Este script te guiará a traves del proceso de instalación de %1$s. Vamos a recolectar algunos datos sobre tu foro en los siguientes pasos, y luego de unos minutos to foro estará listo para usar.';
$txt['install_no_https'] = 'Su entorno no soporta https streams. Ciertas funciones, como por ejemplo, la recepción de actualizaciones de SimpleMachines.org, no funcionará.';
$txt['install_no_mbstring'] = 'Tu entorno de ejecución no cuenta con el soporte necesario para la librería mbstring. Por favor, activa mbstring e inténtalo de nuevo.';
$txt['install_no_fileinfo'] = 'Su entorno no es compatible con la biblioteca fileinfo necesaria. Active fileinfo y vuelva a intentarlo.';
$txt['install_all_lovely'] = 'Hemos completado algunas pruebas iniciales en tu servidor y todo parece estar en orden. Simplemente haz click en el botón &quot;Continuar&quot; para empezar.';

$txt['user_refresh_install'] = 'Foro Actualizado';
$txt['user_refresh_install_desc'] = 'Mientras se instalaba, el instalador encontró que (con los detalles que proporcionaste) una o más de las tablas que debían crearse ya existían.<br />Cualquier tabla faltante en tu instalación ha sido recreada con los datos de default, pero no se borró ninguna información de las tablas existentes.';

$txt['default_topic_subject'] = '¡Bienvenido a SMF!';
$txt['default_topic_message'] = '¡Bienvenido al foro Simple Machines!<br><br>Esperamos que disfrutes usando tu foro.&nbsp; Si tienes algún problema, no dudes en [url=http://www.simplemachines.org/community/index.php]solicitarnos ayuda[/url].<br><br>¡Gracias!<br>Simple Machines';
$txt['default_board_name'] = 'Discusión General';
$txt['default_board_description'] = 'Siéntete libre de hablar de cualquier cosa en este foro.';
$txt['default_category_name'] = 'Categoría General';
$txt['default_time_format'] = '%d de %B de %Y, %I:%M:%S %p';
$txt['default_news'] = 'SMF - ¡Recién Instalado!';
$txt['default_reserved_names'] = 'Admin\nWebmaster\nInvitado\nroot';
$txt['default_fugue_smileyset_name'] = 'Conjunto Fugue';
$txt['default_alienine_smileyset_name'] = 'Set de Alienine';
$txt['default_aaron_smileyset_name'] = 'Set de Aaron';
$txt['default_akyhne_smileyset_name'] = 'Set de Akyhne';
$txt['default_legacy_smileyset_name'] = '2.0 Por defecto';
$txt['default_theme_name'] = 'Tema por defecto de SMF - Curve2';

$txt['default_administrator_group'] = 'Administrador';
$txt['default_global_moderator_group'] = 'Moderador Global';
$txt['default_moderator_group'] = 'Moderador';
$txt['default_newbie_group'] = 'Novato';
$txt['default_junior_group'] = 'Usuario Jr';
$txt['default_full_group'] = 'Usuario Completo';
$txt['default_senior_group'] = 'Usuario Sr.';
$txt['default_hero_group'] = 'Usuario Héroe';

$txt['default_smiley_smiley'] = 'Sonrisa';
$txt['default_wink_smiley'] = 'Guiñar';
$txt['default_cheesy_smiley'] = 'Bromista';
$txt['default_grin_smiley'] = 'Sonreir';
$txt['default_angry_smiley'] = 'Enojado';
$txt['default_sad_smiley'] = 'Triste';
$txt['default_shocked_smiley'] = 'Impresionado';
$txt['default_cool_smiley'] = 'Guay';
$txt['default_huh_smiley'] = 'Eh?';
$txt['default_roll_eyes_smiley'] = 'Girar ojos';
$txt['default_tongue_smiley'] = 'Lengua';
$txt['default_embarrassed_smiley'] = 'Avergonzado';
$txt['default_lips_sealed_smiley'] = 'Labios sellados';
$txt['default_undecided_smiley'] = 'Indeciso';
$txt['default_kiss_smiley'] = 'Beso';
$txt['default_cry_smiley'] = 'Llorar';
$txt['default_evil_smiley'] = 'Malvado';
$txt['default_azn_smiley'] = 'Azn';
$txt['default_afro_smiley'] = 'Afro';
$txt['default_laugh_smiley'] = 'Risa';
$txt['default_police_smiley'] = 'Policia';
$txt['default_angel_smiley'] = 'Ángel';

$txt['error_message_click'] = 'Haz <i>clic</i> aquí';
$txt['error_message_try_again'] = 'para intentar este paso nuevamente.';
$txt['error_message_bad_try_again'] = 'para intentar instalar de todos modos, pero ten en cuenta que esto está <em>altamente</em> desaconsejado.';

$txt['install_settings'] = 'Configuración básica';
$txt['install_settings_info'] = 'Solamente algunas cosas que necesitamos que configures ;).';
$txt['install_settings_name'] = 'Nombre del foro';
$txt['install_settings_name_info'] = 'Este es el nombre de tu foro, ej. &quot;El Foro de Pruebas&quot;.';
$txt['install_settings_name_default'] = 'Mi Comunidad';
$txt['install_settings_url'] = 'URL del Foro';
$txt['install_settings_url_info'] = 'Esta es la URL de tu foro <strong>sin la \'/\' del final</strong>.<br />En la mayoría de las ocasiones, puedes dejar el valor por defecto de este cuadro de texto - por lo general tiene el valor correcto.';
$txt['install_settings_reg_mode'] = 'Modo de registro';
$txt['install_settings_reg_modes'] = 'Modos de registro';
$txt['install_settings_reg_immediate'] = 'Registro inmediato';
$txt['install_settings_reg_email'] = 'Activación por email';
$txt['install_settings_reg_admin'] = 'Aprobación de admin';
$txt['install_settings_reg_disabled'] = 'Registro desactivado';
$txt['install_settings_reg_mode_info'] = 'Este campo te permite cambiar el modo de registro durante la instalación para prevenir registros no deseados.';
$txt['install_settings_compress'] = 'Salida Gzip';
$txt['install_settings_compress_title'] = 'Comprimir salida para ahorrar ancho de banda.';
// In this string, you can translate the word "PASS" to change what it says when the test passes.
$txt['install_settings_compress_info'] = 'Esta función no trabaja correctamente en todos los servidores, pero puedes ahorrar mucho ancho de banda.<br>Haz Click <a href="install.php?obgz=1&amp;pass_string=PASS" onclick="return reqWin(this.href, 200, 60);" target="_blank" rel="noopener">aquí</a> para probarla. (debería decir "PASS".)';
$txt['install_settings_dbsession'] = 'Sesiones de la Base de Datos';
$txt['install_settings_dbsession_title'] = 'Usar la base de datos para las sesiones en lugar de usar archivos.';
$txt['install_settings_dbsession_info1'] = 'Esta opción casi siempre es recomendable seleccionarla, ya que hace las sesiones más fiables.';
$txt['install_settings_dbsession_info2'] = 'Esta característica es generalmente una buena idea, pero puede no funcionar correctamente en este servidor.';
$txt['install_settings_stats'] = 'Permitir la recopilación de Estadísticas';
$txt['install_settings_stats_title'] = 'Permitir a Simple Machines recopilar Estadísticas Mensuales Básicas';
$txt['install_settings_stats_info'] = 'Si está activa, permitirá a Simple Machines que visite tu web una vez al mes para recopilar estadísticas básicas. Esto nos ayudará a tomar decisiones acerca de las configuraciones que pueden optimizar el software. Para más información, por favor visita nuestra <a href="https://www.simplemachines.org/about/stats.php" target="_blank" rel="noopener">página de información</a> (en inglés).';
$txt['install_settings_proceed'] = 'Continuar';

$txt['db_settings'] = 'Configuración Servidor de Base de datos';
$txt['db_settings_info'] = 'Estas son las configuraciones a usar para la base de datos del servidor. Si no sabes los valores, deberías pedirselos a tu host.';
$txt['db_settings_type'] = 'Tipo de Base de datos';
$txt['db_settings_type_info'] = 'Se detectaron múltiples tipos de base de datos soportadas - cual deseas usar. Por favor ten en cuenta que no puedes ejecutar pre-SMF 2.0 RC3 junto con versiones mas nuevas de SMF en la misma base PostgreSQL. En ese caso necesitas actualizar las instalaciones antiguas.';
$txt['db_settings_server'] = 'Nombre del Servidor';
$txt['db_settings_server_info'] = 'Esto es casi siempre localhost - si no estás seguro, prueba localhost.';
$txt['db_settings_username'] = 'Usuario';
$txt['db_settings_username_info'] = 'Ingresa el nombre de usuario que usas para conectarte a tu base de datos.<br>Si no lo sabes, prueba el nombre de usuario de tu cuenta de ftp, la mayoría de las veces es el mismo.';
$txt['db_settings_password'] = 'Contraseña';
$txt['db_settings_password_info'] = 'Introduce aquí la contraseña para conectarte a tu base de datos.<br>Si no la sabes, prueba la contraseña de tu cuenta de ftp.';
$txt['db_settings_database'] = 'Nombre de la Base de datos';
$txt['db_settings_database_info'] = 'Introduce el nombre de la Base de datos que quieres utilizar para guardar los datos de SMF.';
$txt['db_settings_database_info_note'] = 'Si esta base de datos no existe, el instalador intentará crearla.';
$txt['db_settings_port'] = 'Puerto de la Base de Datos';
$txt['db_settings_port_info'] = 'Dejar en blanco para usar el puerto por defecto';
$txt['db_settings_prefix'] = 'Prefijo de Tablas';
$txt['db_settings_prefix_info'] = 'El prefijo para cada table en la base de datos. <strong>No instales dos foros con el mismo prefijo!</strong><br>Este valor te permite multiples instalaciones en una misma base de datos.';
$txt['db_populate'] = 'Base de datos poblada';
$txt['db_populate_info'] = 'Su configuración ha sido guardada y la base de datos ha sido poblada con todos los datos requeridos para que su foro funcione. Resumen de la población:';
$txt['db_populate_info2'] = 'Haga clic en &quot;Continuar&quot; para pasar a la página de creación de cuenta de administrador.';
$txt['db_populate_inserts'] = 'Insertadas %1$d filas.';
$txt['db_populate_tables'] = 'Creadas %1$d tablas.';
$txt['db_populate_insert_dups'] = 'Ignoradas %1$d inserciones duplicadas.';
$txt['db_populate_table_dups'] = 'Ignoredas %1$d tablas duplicadas.';

$txt['user_settings'] = 'Crear tu cuenta';
$txt['user_settings_info'] = 'Ahora el instalador creará una nueva cuenta de administrador para tí.';
$txt['user_settings_username'] = 'Tu nombre de usuario';
$txt['user_settings_username_info'] = 'Especifica el nombre con el que ingresarás.<br />Este nombre NO podrá ser cambiado después, pero sí el nombre que se mostrará.';
$txt['user_settings_password'] = 'Contraseña';
$txt['user_settings_password_info'] = '¡Introduzca aquí su contraseña preferida y recuérdela bien!';
$txt['user_settings_again'] = 'Contraseña';
$txt['user_settings_again_info'] = '(Sólo para verificación).';
$txt['user_settings_admin_email'] = 'Dirección de Correo Electrónico del Administrador';
$txt['user_settings_admin_email_info'] = 'Proporciona tu dirección de correo electrónico. ¡Debe de una dirección de correo electrónico válida!';
$txt['user_settings_server_email'] = 'Dirección de Correo Electrónico del Administrador';
$txt['user_settings_server_email_info'] = 'Proporciona <strong>la dirección de correo electrónico que SMF usará para enviar correos</strong>. ¡Debe de ser una dirección de correo electrónico válida!';
$txt['user_settings_database'] = 'Contraseña de la base de datos MySQL';
$txt['user_settings_database_info'] = 'Por razones de seguridad, el instalador requiere que proporcione la contraseña de la base de datos para crear una cuenta de administrador.';
$txt['user_settings_skip'] = 'Saltar';
$txt['user_settings_skip_sure'] = '¿Está seguro de que quiere saltarse la creación de la cuenta de administrador?';
$txt['user_settings_proceed'] = 'Finalizar';

$txt['ftp_checking_writable'] = 'Comprobando que los archivos se pueden escribir';
$txt['ftp_setup'] = 'Información de la conexión FTP';
$txt['ftp_setup_info'] = 'Este instalador puede conectarse a través de FTP para arreglar los archivos que necesitan permiso de escritura y no lo tienen. Si esto no funciona para usted, tendrá que ingresar manualmente y hacer que los archivos se puedan escribir. Tenga en cuenta que esto no es compatible con SSL en este momento.';
$txt['ftp_setup_why'] = '¿Para que sirve este paso?';
$txt['ftp_setup_why_info'] = 'Algunos archivos deben poder escribirse para que SMF funcione correctamente. Este paso le permite permitir que el instalador los haga modificables por usted. Sin embargo, en algunos casos no funcionará. En este caso, cree los siguientes archivos 777 (escribible, 755 en algunos hosts):';
$txt['ftp_setup_again'] = 'para comprobar si estos archivos son escribibles nuevamente.';

$txt['error_missing_files'] = '¡Imposible encontrar archivos imprescindibles para la instalación en el directorio de este script!<br /><br />Comprueba que hayas subido el paquete completo de instalación, incluído el archivo sql, e intenta nuevamente.';
$txt['error_session_save_path'] = 'Por favor, informar al administrador de tu servidor que el valor <strong>session.save_path especificada en php.ini</strong> no es válida. Debe cambiarse a un directorio que <strong>exista</strong> y que el usuario en el que se ejecuta PHP <strong>pueda escribir</strong>.<br>';
$txt['error_windows_chmod'] = 'Estás en un servidor con Windows y algunos archivos cruciales no se pueden escribir. Por favor, solicita a tu host que otorgue <strong>permisos de escritura</strong> al usuario bajo el que se ejecuta PHP para los archivos en su instalación SMF. Los siguientes archivos o directorios deben tener permisos de escritura:';
$txt['settings_error'] = 'Su configuración no se pudo guardar en Settings.php.';
$txt['error_ftp_no_connect'] = 'Imposible conectarse al servidor FTP con esta combinación de valores.';
$txt['error_db_file'] = '¡No se puede encontrar el script fuente de la base de datos! Por favor, comprueba si el archivo %1$s está en el directorio raíz de tu foro.';
$txt['error_db_connect'] = 'No se puede conectar al servidor de base de datos con los datos proporcionados.<br /><br />Si no estás seguro de lo que hay que teclear, contacta con tu proveedor de servicios.';
$txt['error_db_connect_settings'] = 'No se puede conectar con el servidor de la base de datos.<br><br>Por favor, verifica que la variables de la información de la base de datos incluidas en el archivo Settings.php son correctas.';
$txt['error_db_database'] = 'El instalador no pudo acceder a la base de datos &quot;<em>%1$s</em>&quot;. Con algunos hosts, debe crear la base de datos en su panel de administración antes de que SMF pueda usarla. Algunos también agregan prefijos, como su nombre de usuario, a los nombres de su base de datos.';
$txt['error_db_queries'] = 'Algunas de las consultas no se ejecutaron correctamente. Puede haber sido causado por una versión no soportada (en desarrollo o muy antigua) de tu software de base de datos.<br /><br />Información Técnica sobre las consultas:';
$txt['error_db_queries_line'] = 'Línea nº ';
$txt['error_db_missing'] = 'El instgaladore no pudo dectectar ninguna base de datos soportada por PHP. Por favor, pregunta a tu proveedor para asegurarte de que PHP fue compilado con la base de datos deseada, o que se ha cargado con la extensión correcta.';
$txt['error_db_script_missing'] = 'El instalador no pudo encontrar ningún archivo de script de instalación para las bases de datos detectadas. Por favor compruebe que ha subido los archivos de script de instalación necesarios al directorio de su foro, por ejemplo &quot;%1$s&quot;';
$txt['error_session_missing'] = 'El instalador no pudo detectar soporte para sesiones en la instalación de PHP de tu servidor. Por favor pide a tu host que se asegure que PHP fue compilado con soporte para sesiones (de hecho, tiene que que estar compilado explicitamente sin el.)';
$txt['error_user_settings_again_match'] = '¡Has escrito dos contraseñas completamente diferentes.!';
$txt['error_user_settings_no_password'] = 'Tu contraseña debe contener un mínimo de cuatro caracteres.';
$txt['error_user_settings_taken'] = 'Lo sentimos, ya existe un usuario registrado con ese usuario o contraseña.<br /><br />No se creó una nueva cuenta.';
$txt['error_user_settings_query'] = 'Ha ocurrido un error en la base de datos cuando se trataba de crear un administrador.  El error ha sido:';
$txt['error_sourcefile_missing'] = 'No ha sido posible localizar el archivo  Sources/%1$s. Por favor, asegúrate de que se ha subido correctamente e inténtalo de nuevo.';
$txt['error_db_alter_priv'] = 'La cuenta de la base de datos que especificó no tiene permiso para ALTERAR, CREAR y/o ELIMINAR tablas en la base de datos. Esto es necesario para que SMF funcione correctamente.';
$txt['error_versions_do_not_match'] = 'El instalador ha detectado otra versión de SMF ya instalada con la información especificada.  Si estás intentando actualizarla, deberías utilizar el actualizador, no el instalador.<br /><br />En caso contrario, puede que quieras utilizar una información diferente, o crear una copia de seguridad y después eliminar los datos guardados actualmente en la base de datos.';
$txt['error_mod_security'] = 'El instalador ha detectado que el módulo mod_security instalado en tu servidor web. Mod_security bloqueará los formularios enviados incluso antes de que SMF pueda realizar algo. SMF tiene un comprobador de seguridad interno que funcionará más efectivamente que mod_security y no bloqueará los formularios enviados.<br><br><a href="http://www.simplemachines.org/redirect/mod_security">Más información sobre cómo desactivar mod_security</a>';
$txt['error_mod_security_no_write'] = 'El instalador ha detectado que está instalado el módulo mod_security en tu servidor web. Mod_security bloqueará todos los formularios enviados incluso antes de que SMF pueda hacer algo. SMF tiene un escaneador incorporado que funcionará más efectivamente que el mod_security y no bloqueará los formularios enviados.<br><br><a href="http://www.simplemachines.org/redirect/mod_security">Más información acerca de desactivar mod_security</a>(en inglés)<br><br>Alternativamente, puede que desees utilizar tu cliente ftp para dar permisos de escritura a .htaccess en el directorio del foro (777) y refrescar esta página.';
$txt['error_utf8_version'] = 'La versión actual de tu base de datos no soporta la codificación de caracteres UTF-8. Puedes continuar la instalación de SMF sin problemas, pero desmarcando el soporte UTF-8. Si quisieras cambiar a UTF-8 en el futuro (p.ej. después de que el servidor de base de datos de tu foro haya sido actualizado a una versión >= %1$s), puedes convertir tu foro a UTF-8 a través del panel de admin.';
$txt['error_valid_admin_email_needed'] = 'No has introducido una dirección de correo electrónico válida para tu cuenta de administrador.';
$txt['error_valid_server_email_needed'] = 'No has introducido una dirección de correo electrónico de webmaster válida.';
$txt['error_already_installed'] = 'El instalador ha detectado que ya tiene SMF instalado. Se recomienda encarecidamente que <strong>no</strong> intente sobrescribir una instalación existente, continuar con la instalación <strong>puede resultar en la pérdida o corrupción de los datos existentes</strong>.<br><br>Si desea actualizar, visite el <a href="https://www.simplemachines.org">sitio web de Simple Machines</a> y descargue el último paquete de <em>actualización</em>.<br><br> Si desea sobrescribir su instalación existente, incluidos todos los datos, se recomienda que elimine las tablas de la base de datos existentes y reemplace Settings.php e intente nuevamente.';
$txt['error_warning_notice'] = '¡Advertencia!';
$txt['error_script_outdated'] = '¡Este script de instalación está desactualizado! La versión actual de SMF es %1$s, pero este script de instalación es para %2$s.<br><br>
	Se recomienda que visite el sitio web de <a href="https://www.simplemachines.org">Simple Machines</a> para asegurarse de que está instalando la última versión.';
$txt['error_db_prefix_numeric'] = 'El tipo de base de datos seleccionado no soporta el uso de prefijos numéricos.';
$txt['error_pg_scs'] = 'PostgreSQL está configurado incorrectamente. Por favor, active el parámetro de configuración standard_conforming_strings.';
$txt['error_invalid_characters_username'] = 'Usado un caracter inválido en el nombre de usuario.';
$txt['error_username_too_long'] = 'Nombre de Usuario debe ser menor a 25 caracteres.';
$txt['error_username_left_empty'] = 'El campo de nombre de usuario esta vacío.';
$txt['error_db_prefix_reserved'] = 'El prefijo que has introducido está reservado. Por favor introduce otro prefijo.';
$txt['error_utf8_support'] = 'La base de datos que está tratando de usar no usa el conjunto de caracteres UTF-8';

$txt['ftp_login'] = 'La información de tu conexión FTP';
$txt['ftp_login_info'] = 'Este instalador web requiere la información de tu FTP para automatizar la instalación. Por favor, ten en cuenta que ninguna de esta información es guardada en la instalación, solo se usa para instalar SMF.';
$txt['ftp_server'] = 'Servidor';
$txt['ftp_server_info'] = 'Debes especificar el servidor y el puerto de tu servidor de FTP.';
$txt['ftp_port'] = 'Puerto';
$txt['ftp_username'] = 'Nombre de usuario';
$txt['ftp_username_info'] = 'El nombre de usuario con el que ingresarás. <em>Esta información no será guardada en ningún lado.</em>';
$txt['ftp_password'] = 'Contraseña';
$txt['ftp_password_info'] = 'La contraseña para poder ingresar. <em>Esta información no será guardada en ningún lado.</em>';
$txt['ftp_path'] = 'Ruta de la instalación';
$txt['ftp_path_info'] = '\'Esta es la ruta <em>relativa</em> que se usará en tu servidor FTP <a href="\' . $_SERVER[\'PHP_SELF\'] . \'?ftphelp" onclick="window.open(this.href, \\\'\\\', \\\'width=450,height=250\\\');return false;" target="_blank" rel="noopener">(más información)</a>.\'';
$txt['ftp_path_found_info'] = 'La ruta en el cuadro superior fue detectado automáticamente.';
$txt['ftp_path_help'] = 'Su ruta FTP es la ruta que ve cuando inicia sesión en su cliente FTP. Por lo general, comienza con &quot;<pre>www</pre>&quot;, &quot;<pre>public_html</pre>&quot; o &quot;<pre>httpdocs</pre>&quot;, pero debe incluir el directorio SMF también está incluido, como &quot;/public_html/forum&quot;. Es diferente de su URL y ruta completa.<br><br>Los archivos en esta ruta pueden sobrescribirse, así que asegúrese de que sea correcto.';
$txt['ftp_path_help_close'] = 'Cerrar';
$txt['ftp_connect'] = 'Conectarse';

$txt['force_ssl'] = 'Activar SSL';
$txt['force_ssl_label'] = 'Forzar SSL en todo el foro';
$txt['force_ssl_info'] = 'Asegúrate de que el protocolo SSL y HTTPS son soportados en todo el foro, si no, tu foro se puede volver inaccesible';

$txt['chmod_linux_info'] = 'Si tienes una cuenta shell, el siguiente comando puede automáticamente corregir los permisos en esos archivos';

// The upgrader needs text strings too!
$txt['upgrade_step_login'] = 'Inicio de sesión';
$txt['upgrade_step_options'] = 'Opciones de actualización';
$txt['upgrade_step_backup'] = 'Copia de seguridad';
$txt['upgrade_step_database'] = 'Cambios en la Base de datos';
$txt['upgrade_step_convertutf'] = 'Convertir a UTF-8';
$txt['upgrade_step_convertjson'] = 'Convertir cadenas serializadas a JSON';
$txt['upgrade_step_delete'] = 'Borrar Upgrade.php';

$txt['upgrade_upgrade_utility'] = 'Herramienta de actualización de SMF';
$txt['upgrade_warning'] = '¡Advertencia!';
$txt['upgrade_critical_error'] = '¡Error crítico!';
$txt['upgrade_continue'] = 'Continuar';
$txt['upgrade_skip'] = 'Saltar';
$txt['upgrade_note'] = '¡Nota!';
$txt['upgrade_step'] = 'Paso';
$txt['upgrade_steps'] = 'Pasos';
$txt['upgrade_progress'] = 'Progreso';
$txt['upgrade_overall_progress'] = 'Progreso General';
$txt['upgrade_step_progress'] = 'Progreso temporal';
$txt['upgrade_time_elapsed'] = 'Tiempo transcurrido';
$txt['upgrade_time_mins'] = 'minutos';
$txt['upgrade_time_secs'] = 'segundos';
$txt['upgrade_username'] = 'Nombre de usuario:';
$txt['upgrade_wrong_username'] = 'Nombre de usuario incorrecto';
$txt['upgrade_password'] = 'Contraseña:';
$txt['upgrade_wrong_password'] = 'Contraseña incorrecta';
$txt['upgrade_script_timeout_minutes'] = 'Este script de actualización no se puede ejecutar hasta que %1$s haya estado inactivo durante al menos %2$d minutos';
$txt['upgrade_script_timeout_seconds'] = 'Este script de actualización no se puede ejecutar hasta que %1$s haya estado inactivo durante al menos %2$d segundos';

$txt['upgrade_wait'] = 'Por favor, espera mientras se genera la copia de seguridad. ¡Este proceso puede tardar en foros de gran tamaño!';
$txt['upgrade_wait2'] = 'Por favor, espera mientras tu base de datos se convierte a UFT-8. ¡Este proceso puede llevar tiempo en foros de gran tamaño!';
$txt['upgrade_sec_login'] = 'Por motivos de seguridad, por favor, inicia sesión con tu cuenta de administrador para comenzar con el proceso de actualización.';
$txt['upgrade_incomplete'] = 'Incompleto';
$txt['upgrade_not_quite_done'] = 'Aún no hemos acabado!';
$txt['upgrade_paused_overload'] = 'Esta actualización se ha pausado para evitar una sobrecarga en el servidor. No te preocupes, no pasa nada. Simplemente dale clic en el <label for="contbutt">botón Continuar</label> para que el proceso continúe.';
$txt['upgrade_continue_step'] = 'Continuar desde el último paso alcanzado durante la última ejecución del script de actualización.';
$txt['upgrade_bypass'] = '<strong>Nota:</strong> Si es necesario, la verificación de seguridad anterior se puede omitir para los usuarios que pueden administrar un servidor, pero que pueden no tener derechos de administrador en el foro. Para omitir la verificación anterior, simplemente abra &quot;upgrade.php&quot; en un editor de texto y reemplaza &quot;$disable_security = false;&quot; con &quot;$disable_security = true;&quot; y actualice esta página.';
$txt['upgrade_areyouready'] = 'Antes de iniciar con el proceso de actualización, por favor revisa las siguientes opciones y presiona &quot;Continuar&quot; cuando estés listo para comenzar.';
$txt['upgrade_backup_table'] = 'Copia de seguridad de tablas en su base de datos con el prefijo';
$txt['upgrade_backup_complete'] = '¡Copia de seguridad completa! Haga clic en Continuar para proceder.';
$txt['upgrade_recommended'] = 'se recomienda!';
$txt['upgrade_maintenance'] = 'Poner el foro en modo de mantenimiento durante la actualización.';
$txt['upgrade_maintenance_title'] = 'Título de mantenimiento:';
$txt['upgrade_maintenance_message'] = 'Mensaje de Mantenimiento:';
$txt['upgrade_customize'] = 'Personalizar';
$txt['upgrade_debug_info'] = 'Generar información de depuración adicional.';
$txt['upgrade_empty_errorlog'] = 'Vaciar el registro de errores antes de actualizar.';
$txt['upgrade_delete_karma'] = 'Eliminar todos los ajustes de karma e información de la Base de Datos';
$txt['upgrade_reprocess_attachments'] = 'Vuelve a ejecutar la conversión de archivos adjuntos';
$txt['upgrade_stats_collection'] = 'Permitir a Simple Machines recibir estadísticas mensuales de uso.';
$txt['upgrade_stats_info'] = 'Si se activa, este ajuste permitirá a Simple Machines visitar tu web una vez al mes pare recabar estadísticas básicas. Esto nos ayudará a tomar decisiones sobre qué configuraciones optimizar. Para más información, por favor, visita nuestra <a href="%1$s" target="_blank" rel="noopener">página de información</a>. ';
$txt['upgrade_migrate_settings_file'] = 'Migrar a un nuevo archivo Settings de ajustes.';
$txt['upgrade_db_changes'] = 'Ejecutando cambios en la base de datos';
$txt['upgrade_db_patient'] = 'Por favor tene paciencia, esto puede llevar algo de tiempo en foros grandes. Se muestra el tiempo transcurrido aumenta para indicar que el proceso continúa.';
$txt['upgrade_db_complete'] = '¡Completada la actualización de 1 Base de datos! Pincha en Continuar para proceder.';
$txt['upgrade_db_complete2'] = '¡Completada las actualizaciones de la Base de Datos! Haga clic en continuar para seguir.';
$txt['upgrade_script'] = 'Ejecutando el script de actualización';
$txt['upgrade_error'] = '¡Error!';
$txt['upgrade_unknown_error'] = '¡Error Desconocido!';
/* Same sentence, 3 different strings */
$txt['upgrade_completed'] = 'Completado';
$txt['upgrade_outof'] = 'de';
$txt['upgrade_tables'] = 'tablas.';

$txt['upgrade_run_script'] = 'Recomendamos no ejectuar este script a no ser que estés seguro de que';
$txt['upgrade_run_script2'] = 'ha completado su actualización.';
$txt['upgrade_run'] = 'Puede elegir ejecutar la actualización nuevamente desde el principio o continuar desde el último paso alcanzado durante la actualización más reciente.';

$txt['upgrade_completed_table'] = 'Tabla Completada:';
$txt['upgrade_current_table'] = 'Tabla Actual:';
$txt['upgrade_fulltext'] = 'Por favor, ten enc uenta que tu índice de texto completo (fulltext) ha sido eliminado para facilitar la conversión y que necesitará ser recreado en el área de administración una vez que la actualización se haya completado.';
$txt['upgrade_conversion_proceed'] = '¡Conversión Completada! Haga clic en continuar para seguir.';
$txt['upgrade_convert_datajson'] = 'Convirtiendo los datos de serializados a JSON...';
$txt['upgrade_json_completed'] = '¡Conversión a JSON Completada! Haga clic en continuar para seguir.';
$txt['upgrade_executing'] = 'Ejecutando:';
$txt['upgrade_of'] = 'de';
$txt['upgrade_admin_login'] = 'Acceso a Administración:';
$txt['upgrade_admin_disabled'] = '(DESACTIVADO)';
$txt['upgrade_done'] = 'Actualización completada. Ahora estás listo para usar <a href="%1$s/index.php">tu foro SMF</a>. ¡Espero que lo disfrutes!';

$txt['upgrade_delete_now'] = 'Eliminar upgrade.php y archivos asociados ahora';
$txt['upgrade_delete_server'] = '(no funciona en todos los servidores).';
$txt['upgrade_problems'] = 'Si tuviste algún problema con esta actualización, o a la hora de usar SMF, por favor no dudes en <a href="%1$s">pedirnos ayuda</a>.';
$txt['upgrade_luck'] = '¡Mucha suerte!';

$txt['upgrade_ftp_login'] = 'Información de tu conexión FTP';
$txt['upgrade_ftp_perms'] = 'El actualizador puede solucionar problemas con los permisos de archivo haciendo la actualización tan simple como sea posible. Solo tienes que introducir los datos de conexión o pinchar <a href="#" onclick="warning_popup();">aquí</a> para ver un listado de archivos que necesitan ser modificados.';
$txt['upgrade_ftp_warning'] = 'Aviso';
$txt['upgrade_ftp_files'] = 'Los siguientes archivos deben tener permisos de escritura para continuar:';
$txt['upgrade_ftp_shell'] = 'Si tienes una cuenta shell, el siguiente comando puede corregir automáticamente los permisos en estos archivos';
$txt['upgrade_ftp_error'] = 'Se encontraron los siguientes errores al tratar de conectar:';

$txt['upgrade_ready_proceed'] = 'Gracias por elegir actualizar a SMF %1$s. Todos los archivos parecen estar en su lugar y la actualización ahora puede continuar.';
$txt['upgrade_error_script_js'] = 'El script de actualización no puede encontrar el archivo script.js, o bien está desactualizado. Asegúrate de que las rutas de tu plantilla (theme) son correctas. Puedes descargarte la herramienta de comprobación de configuraciones desde la <a href="%1$s">web de Simple Machines</a>';
$txt['upgrade_warning_lots_data'] = 'Este script de actualización ha detectado que su foro contiene muchos datos que necesitan ser actualizados. Este proceso puede llevar algo de tiempo dependiendo de su servidor y del tamaño del foro, y para foros muy grandes (~300,000 mensajes) puede requerir varias horas para ser completado.';
$txt['upgrade_warning_out_of_date'] = 'Este script de actualización es antiguo! La versión actual de SMF es <em id="smfVersion" style="white-space: nowrap;">??</em> y esta actualización es para la versión <em id="yourVersion" style="white-space: nowrap;">%1$s</em>.<br><br>Es recomendable que visites el sitio web de <a href="%2$s">Simple Machines</a> para asegurarte de actualizar a la versión mas reciente.';

$txt['upgrade_forumdir_settings'] = 'Parece que los ajustes del directorio de tu foro <em>podrían ser</em> incorrectos. El directorio de tu foro está definido como &quot; %1$s &quot; pero probablemente debería ser &quot; %2$s &quot;. El archivo Settings.php indica que tu ruta es:';
$txt['upgrade_forumdir'] = 'Directorio del Foro:';
$txt['upgrade_sourcedir'] = 'Directorio Source:';
$txt['upgrade_cachedir'] = 'Directorio Caché:';
$txt['upgrade_incorrect_settings'] = 'Si estos datos no parecen correctos, por favor, abre el archivo Settings.php en un editor de texto antes de proceder con esta actualización. Si son incorrectos porque has movido el foro a una nueva ubicación, por favor, antes de continuar descarga y ejecuta la herramienta de <a href="https://download.simplemachines.org/?tools">Reparación de Ajustes</a> (Repair Settings) desde la web de Simple Machines.';

$txt['upgrade_fulltext_error'] = 'Tu índide de búsqueda de texto completo (fulltext) ha sido eliminado para facilitar la conversión. Necesitarás volver a crearlo.';
$txt['upgrade_writable_files'] = 'Los siguientes archivos necesitan contar con permiso de escritura para continuar con la actualización. Por favor, asegúrate de que los permisos de Windows está correctamente definidos así:';
$txt['upgrade_time_user'] = '&quot;%1$s&quot; está ejecutando el script de actualización.';

// We represent the time here in backwards variables, as it makes the code easier.
$txt['upgrade_time_hms'] = 'El script de actualización se ha estado ejecutando durante %3$d horas, %2$d minutos y %1$d segundos.';
$txt['upgrade_time_ms'] = 'El script de actualización se ha estado ejecutando durante %2$d minutos y %1$d segundos.';
$txt['upgrade_time_s'] = 'El script de actualización se ha estado ejecutando durante %1$d segundos.';
$txt['upgrade_time_updated_hms'] = 'El script de actualización se actualizó por última vez hace %3$d horas, %2$d minutos y %1$d segundos. ';
$txt['upgrade_time_updated_hm'] = 'El script de actualización se actualizó por última vez hace %2$d minutos y %1$d segundos.';
$txt['upgrade_time_updated_s'] = 'El script de actualización se actualizó por última vez hace %1$d segundos.';
$txt['upgrade_completed_time_hms'] = 'Actualización completada en %3$d horas, %2$s minutos y %1$s segundos';
$txt['upgrade_completed_time_ms'] = 'Actualización completada en %2$s minutos y %1$s segundos';
$txt['upgrade_completed_time_s'] = 'Actualización completada en %1$s segundos';
$txt['upgrade_success_time_db'] = '¡Actualización correcta! Las actualizaciones de la base de datos se han completado en %3$d horas, %2$d minutos y %1$d segundos.';

$txt['upgrade_unsuccessful'] = '¡Actualización no completada!';
$txt['upgrade_thisquery'] = 'Esta petición:';
$txt['upgrade_causerror'] = 'Causó el error:';
$txt['upgrade_completedtables_outof'] = 'Completadas <span id="tab_done">%1$d</span> de %2$d tablas. ';
$txt['upgrade_success'] = '¡Actualización Completada!';
$txt['upgrade_loop'] = 'El script de actualización parece que ha entrado en un bucle:';
$txt['upgrade_respondtime'] = 'El servidor no ha respondido durante %1$d segundos. Puede valer la pena esperar un poco más antes de intentarlo de nuevo.';
$txt['upgrade_respondtime_clickhere'] = 'Pincha aquí para volver a intentar.';
$txt['mtitle'] = 'Actualizando el foro...';
$txt['mmessage'] = 'No te preocupes, tu foro se actualizará en breve. Solo será un minuto ;).';

// Upgrader error messages
// argument(s): template name (if applicable)
$txt['error_unexpected_template_call'] = 'Error: Llamada inesperada para usar la plantilla %1$s. Por favor copie y pegue todo el texto anterior y visite el foro de soporte de SMF para informar a los desarrolladores que hay un error.';
$txt['error_invalid_template'] = '¡Actualización abortada! Plantilla inválida: template_%1$s ';
$txt['error_lang_index_missing'] = 'El actualizador no ha podido localizar los archivos necesarios para el idioma seleccionado, %1$s.<br>SMF no funcionará en este idioma sin los archivos de idioma instalados.<br><br>Por favor, instálalos o <a href="%2$s?step=0;lang=english">prueba en inglés</a>.';
$txt['error_upgrade_files_missing'] = 'El actualizador no ha podido localizar algunas archivos esenciales. <br><br>Por favor, asegúreate de que has subido todos los archivos del paquete, incluidos los directorios Themes y Sources entre otros.';
$txt['error_upgrade_old_files'] = 'El actualizador ha localizado algunos archivos desfasados.<br><br>Por favor, asegúrate de subir las versiones más recientes de todos los archivos incluidos en el paquete.';
$txt['error_upgrade_old_lang_files'] = 'El actualizador encontró algunos archivos antiguos o desfasados para el idioma seleccionado, %1$s.<br><br>Por favor, asegúrate de que has subido las versiones más recientes de todos los archivos del paquete, incluyendo los archivos de idioma para el tema por defecto.<br>&nbsp;&nbsp;&nbsp;[<a href="%2$s?skiplang">SALTAR</a>] [<a href="%2$s?lang=english">Prueba en inglés</a>] ';
$txt['error_php_too_low'] = '¡Advertencia!  Parece que no tienes instalada una versión de PHP en tu servidor que cumpla con los requisitos mínimos para instalación que necesita SMF.<br>Por favor, solicita a tu proveedor que actualice.';
$txt['error_db_too_low'] = 'Tu versión %1$s no supera los requerimientos mínimos para utilizar SMF.<br><br>Por favor, solicita a tu proveedor actualizarla.';
$txt['error_db_privileges'] = 'El usuario %1$s definido en Settings.php no cuenta con los permisos necesarios.<br><br>Por favor, pídele a tu proveedor que le proporcione a este usuarios permisos ALTER, CREATE y DROP.';
$txt['error_dir_not_writable'] = 'Es necesario que el directorio %1$s cuente con permisos de escritura para continuar la actualización. Por favor, asegúrate de que los permisos asignados son correctos.';
$txt['error_cache_not_found'] = 'Directorio de caché no encontrado.<br><br>Por favor, asegúrate de cuentas con un directorio llamado  &quot;cache&quot; en tu foro antes de continuar.';
$txt['error_agreement_not_writable'] = 'El actualizador no cuenta con permisos de escritura para acceder al archivo agreement.txt.<br><br>Si usas linux u otro tipo de servidor unix, por favor, asegúrate de que hacerle chmod a 777, o si no existe, que el directorio en el que se encuentra el actualizador cuente con permisos 777<br>Si usas un servidor Windows, por favor, asegúrate de que la cuenta de invitado de internet cuenta con los permisos adecuados en esta carpeta.';
$txt['error_not_admin'] = '¡Debes ser un administrador para poder ejecutar la actualización!';

$txt['warning_lang_old'] = 'Los archivos de idioma para el idioma seleccionado, %1$s, no han sido actualizados a la versión más reciente. La actualización continuará con las versiones por defecto del foro, %2$s.';
$txt['warning_lang_missing'] = 'El actualizador no ha podido encontrar el &quot;Instalador&quot; del archivo de idioma para tu idioma seleccionado, %1$s. El actualizador continuará usando el del foro por defecto, %2$s.';

// Attachment & Avatar folder checks
$txt['warning_av_missing'] = '¡Advertencia! El directorio de avatares no se encontro. Si continua puede ser inseguro. Por favor confirme la configuración de la carpeta antes de continuar.';
$txt['warning_custom_av_missing'] = '¡Advertencia! No se encontró el directorio de avatar personalizado. Si continua puede ser inseguro. Por favor confirme la configuración de la carpeta antes de continuar.';
$txt['warning_att_dir_missing'] = '¡Advertencia! No se encontraron uno o más directorios adjuntos. Si continua puede ser inseguro. Por favor confirme la configuración de la carpeta antes de continuar.';

// Page titles
$txt['updating_smf_installation'] = '¡Actualizando tu instalación SMF!';
$txt['upgrade_options'] = 'Opciones de Actualización';
$txt['backup_database'] = 'Copia de Seguridad de la Base de datos';
$txt['database_changes'] = 'Cambios en la Base de datos';
$txt['upgrade_complete'] = 'Actualización Completa';
$txt['converting_utf8'] = 'Convirtiendo a UTF-8';
$txt['converting_json'] = 'Convirtiendo a JSON';

?>