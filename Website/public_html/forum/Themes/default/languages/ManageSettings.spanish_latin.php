<?php
// Version: 2.1.0; ManageSettings

global $scripturl;

// argument(s): theme_id, session_id, session_var, $scripturl
$txt['modSettings_desc'] = 'Esta página le permite cambiar la configuración de funciones y opciones básicas en su foro. Consulte la <a href="%4$s?action=admin;area=theme;sa=list;th=%1$s;%3$s=%2$s">configuración del tema</a> para mas opciones. Haga clic en los iconos de ayuda para obtener más información sobre una configuración.';
$txt['modification_settings_desc'] = 'Esta página contiene configuraciones añadidas por las modificaciones que tengas instaladas en tu foro';

$txt['modification_no_misc_settings'] = 'No hay modificaciones instaladas que hayan añadido ninguna configuración a este área aún.';

$txt['pollMode'] = 'Modo Encuesta';
$txt['disable_polls'] = 'Desactivar encuestas';
$txt['enable_polls'] = 'Activar encuestas';
$txt['polls_as_topics'] = 'Mostrar las encuestas existentes como temas';
$txt['allow_guestAccess'] = 'Permitir ver el foro a los invitados';
$txt['userLanguage'] = 'Activar soporte de idioma seleccionable por el usuario';
$txt['allow_hideOnline'] = 'Permitir a los no-administradores ocultar su estado de conexión';
$txt['titlesEnable'] = 'Activar títulos personalizados';
$txt['enable_buddylist'] = 'Activar listas de amigos/ignorados';
$txt['default_personal_text'] = 'Texto personal por defecto';
$txt['default_personal_text_note'] = 'Texto personar por defecto para nuevos usuarios registrados.';
$txt['time_format'] = 'Formato de Tiempo por defecto';
$txt['setting_time_offset'] = 'Diferencia horaria global<div class="smalltext">(añadida a la opción específica del usuario.)</div>';
$txt['setting_default_timezone'] = 'Zona horaria del servidor';
$txt['setting_timezone_priority_countries'] = 'Mostrar las zonas horarias de esos países primero';
$txt['setting_timezone_priority_countries_note'] = 'Una lista separada por comas de los códigos ISO de dos caracteres de los países';
$txt['failed_login_threshold'] = 'Umbral de conexiones fallidas';
$txt['loginHistoryDays'] = 'Días para mantener el resgistro de inicios de sesión';
$txt['lastActive'] = 'Umbral de tiempo conectado';
$txt['trackStats'] = 'Pista de estadísticas diarias';
$txt['hitStats'] = 'Seguimiento de las páginas diarias vistas (debes tener activado las estadísticas)';
$txt['enableCompressedOutput'] = 'Activar salida comprimida';
$txt['databaseSession_enable'] = 'Utilizar sesiones controladas por base de datos';
$txt['databaseSession_loose'] = 'Permitir a los navegadores ir atrás hacia páginas en caché';
$txt['databaseSession_lifetime'] = 'Segundos transcurridos antes de que expire una sesión inactiva';
$txt['error_log_desc'] = 'El registro de errores, si está activado, registrará cada error que le haya sucedido a los usuarios que utilizan tu foro. Esto puede ser de gran ayuda para identificar los posibles problemas del foro.';
$txt['enableErrorLogging'] = 'Activar registro de errores';
$txt['enableErrorQueryLogging'] = 'Incluir consultas a la base de datos en el registro (log) de errores';
$txt['markread_title'] = 'Leer los registros';
$txt['mark_read_desc'] = 'Las siguientes opciones le permite especificar cuánto tiempo antes de marcar automáticamente los foros y temas como leídos y cuánto tiempo antes de borrar esta información.';
$txt['mark_read_beyond'] = 'Marcar automáticamente los foros como leídos para los usuarios que han estado inactivos después de tantos días';
$txt['mark_read_delete_beyond'] = 'Vaciar automáticamente la información sobre los foros y los temas visitados después de esta cantidad de días';
$txt['mark_read_max_users'] = 'Máximo de usuarios para procesar a la vez';
$txt['pruningOptions'] = 'Activar la purga de entradas del registro';
$txt['pruneErrorLog'] = 'Eliminar entradas del registro de errores con más de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['pruneModLog'] = 'Eliminar entradas del registro de moderación con más de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['pruneBanLog'] = 'Eliminar entradas del registro de baneos con más de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['pruneReportLog'] = 'Eliminar entradas del registro de avisos de moderación con más de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['pruneScheduledTaskLog'] = 'Eliminar entradas del registro de tareas programadas con más de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['pruneSpiderHitLog'] = 'Eliminar entradas del registro de búsquedas con más de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['cookieTime'] = 'Duración de cookies de conexión por defecto';
$txt['localCookies'] = 'Activar el almacenamiento local de cookies<div class="smalltext">(SSI no funciona bien activando esta opción.)</div>';
$txt['globalCookies'] = 'Utilizar cookies independientes por subdominios<div class="smalltext">(¡debes desactivar las cookies locales primero!)</div>';
$txt['globalCookiesDomain'] = 'Dominio principal usado para las cookies independientes de subdominio';
$txt['invalid_cookie_domain'] = 'El dominio introducido parece no ser válido, por favor verifícalo e inténtalo de nuevo.';
$txt['secureCookies'] = 'Forzar a que las cookies sean seguras<div class="smalltext">(Esto sólo se aplica si estás usando HTTPS - ¡no lo uses en otro caso!)</div>';
$txt['httponlyCookies'] = 'Obligar a las cookies a que solo sean accesibles mediante el protocolo HTTP';
$txt['samesiteCookies'] = 'Forzar el envío de cookies solo a las primeras partes';
$txt['samesiteNone'] = 'Ninguno';
$txt['samesiteLax'] = 'Lax';
$txt['samesiteStrict'] = 'Estricto';
$txt['samesiteSecureRequired'] = 'Si las cookies de SameSite se configuran en \'Ninguno\', las cookies deben ser seguras.';
$txt['securityDisable'] = 'Desactivar la seguridad de la administración';
$txt['securityDisable_moderate'] = 'Desactivar la seguridad de Moderación';
$txt['send_validation_onChange'] = 'Requerir reactivación después de un cambio de dirección email';
$txt['approveAccountDeletion'] = 'Requerir aprobación del administrador cuando el usuario borra su cuenta';
$txt['autoFixDatabase'] = 'Arreglar automáticamente tablas corruptas';
$txt['disallow_sendBody'] = 'No permitir enviar el texto del mensaje en las notificaciones';
$txt['enable_ajax_alerts'] = 'Activar las notificaciones de escritorio AJAX para alertas';
$txt['alerts_auto_purge'] = 'Borrar automáticamente las alertas vistas';
$txt['alerts_auto_purge_7'] = 'Después de 1 semana';
$txt['alerts_auto_purge_30'] = 'Después de 1 mes';
$txt['alerts_auto_purge_90'] = 'Después de 3 meses';
$txt['alerts_auto_purge_0'] = 'Nunca';
$txt['alerts_per_page'] = 'Alertas por Página';
$txt['jquery_source'] = 'Fuente de la Librería jQuery';
$txt['jquery_custom_label'] = 'Personalizado';
$txt['jquery_custom'] = 'Personalizar enlace a la librería jQuery';
$txt['jquery_local'] = 'Local';
$txt['jquery_google_cdn'] = 'Google CDN';
$txt['jquery_jquery_cdn'] = 'jQuery CDN';
$txt['jquery_microsoft_cdn'] = 'Microsoft CDN';
$txt['queryless_urls'] = 'Mostrar URLs de búsqueda de modo amigable<div class="smalltext"><strong>¡Sólo Apache/Lighttpd!</strong></div>';
$txt['minimize_files'] = 'Minimizar los archivos CSS y JavaScript';
$txt['queryless_urls_note'] = 'Sólo Apache o Lighttpd';
$txt['enableReportPM'] = 'Activar el aviso de mensajes privados';
$txt['max_pm_recipients'] = 'Número máximo de destinatarios permitidos en un mensaje privado.<div class="smalltext">(0 para ilimitado, exceptuando administradores)</div>';
$txt['max_pm_recipients_note'] = '(0 para ilimitado, los administradores están exentos)';
$txt['pm_posts_verification'] = 'Número de mensajes mínimo para no tener que introducir un código al enviar mensajes privados.<div class="smalltext">(0 para ilimitado, exceptuando administradores)</div>';
$txt['pm_posts_verification_note'] = '(0 para ilimitado, los administradores están exentos)';
$txt['pm_posts_per_hour'] = 'Número de mensajes privados que puede enviar un usuario en una hora <div class="smalltext">(0 para ilimitados, exceptuando moderadores)</div>';
$txt['pm_posts_per_hour_note'] = '(0 para ilimitado, los moderadores están exentos)';
$txt['compactTopicPagesEnable'] = 'Límitar el número de vínculos mostrados';
$txt['contiguous_page_display'] = 'Páginas contiguas a mostrar';
$txt['to_display'] = 'mostrar';
$txt['todayMod'] = 'Activar la funcionalidad &quot;Hoy&quot;';
$txt['today_disabled'] = 'Desactivada';
$txt['today_only'] = 'Sólo Hoy';
$txt['yesterday_today'] = 'Hoy y Ayer';
$txt['onlineEnable'] = 'Mostrar online/offline en posteos y MP';
$txt['defaultMaxMembers'] = 'Usuarios por página de la lista de usuarios';
$txt['timeLoadPageEnable'] = 'Mostrar el tiempo transcurrido para crear cada página';
$txt['disableHostnameLookup'] = '¿Desactivar búsquedas de nombre de servidor?';
$txt['who_enabled'] = 'Activar la lista de Usuarios conectados';
$txt['meta_keywords'] = 'Palabras clave meta (meta keywords) asociadas con el foro.<div class="smalltext">Para motores de búsqueda. Dejar en blanco para usar las establecidas por defecto.</div>';
$txt['meta_keywords_note'] = 'Para Motores de Búsqueda. Dejar en blanco para usar el por defecto.';
$txt['settings_error'] = 'Advertencia: Fallo al actualizar Settings.php, los ajustes no pudieron ser guardados.';
$txt['image_proxy_enabled'] = 'Activar Proxy de Imágenes';
$txt['image_proxy_secret'] = 'Proxy de Imágenes Secreto';
$txt['image_proxy_maxsize'] = 'Tamaño máximo de imágenes para almacenarlas en caché (en KB)';
$txt['force_ssl'] = 'Modo SSL en el Foro';
$txt['force_ssl_off'] = 'Desactivar SSL';
$txt['force_ssl_complete'] = 'Forzar el protocolo SSL en todo el foro';
$txt['search_language'] = 'Idioma de búsqueda de texto completo (Fulltext)';

// Like settings.
$txt['enable_likes'] = 'Activar los "Me Gusta"';

// Mention settings.
$txt['enable_mentions'] = 'Activar las Menciones';

$txt['caching_information'] = 'SMF admite el almacenamiento en caché mediante el uso de aceleradores. Los aceleradores admitidos actualmente incluyen:
<ul class="listanormal">
	<li>APCu</li>
	<li>Memcached</li>
	<li>SQLite3</li>
	<li>PostgreSQL</li>
	<li>Zend Platform/Performance Suite (sin Zend Optimizer)</li>
</ul>
El almacenamiento en caché funcionará mejor si tiene PHP compilado con uno de los optimizadores anteriores, o tiene Memcached disponible. Si no tiene ningún optimizador instalado, SMF realizará el almacenamiento en caché basado en archivos.';
$txt['detected_no_caching'] = '<strong class="alert">SMF no ha sido capaz de detectar un acelerador compatible en su servidor. Una caché basado en archivos puede ser usada en su lugar.</strong>';
$txt['detected_accelerators'] = '<strong class="success">SMF ha detectado los siguientes aceleradores: %1$s</strong>
';

$txt['cache_enable'] = 'Nivel de Caché';
$txt['cache_off'] = 'Sin caché';
$txt['cache_level1'] = 'Caché de Nivel 1 (Recomendado)';
$txt['cache_level2'] = 'Caché de Nivel 2';
$txt['cache_level3'] = 'Caché de Nivel 3 (No Recomendado)';
$txt['cache_accelerator'] = 'Acelerador de Almacenamiento en caché';
$txt['filebased_cache'] = 'Caché basado en archivos de SMF';
$txt['sqlite_cache'] = 'Caché basado en la base de datos SQLite3';
$txt['postgres_cache'] = 'Caché de PostgreSQL';
$txt['cachedir_sqlite'] = 'Directorio de caché de la base de datos SQLite3 ';
$txt['apcu_cache'] = 'APCu';
$txt['memcacheimplementation_cache'] = 'Memcache';
$txt['memcachedimplementation_cache'] = 'Memcached ';
$txt['zend_cache'] = 'Zend Platform/Performance Suite';
$txt['cache_filebased_settings'] = 'Ajustes de caché de archivos SMF';
$txt['cache_sqlite_settings'] = 'Ajustes del caché de la base de datos SQLite3';
$txt['cache_memcached_settings'] = 'Ajustes de Memcache/Memcached';
$txt['cache_memcached_servers'] = 'Servidores Memcache/Memcached';
$txt['cache_memcached_servers_subtext'] = 'Ejemplo: 127.0.0.1:11211,127.0.0.2';

$txt['loadavg_warning'] = '<span class="error">Nota: la siguiente configuración se pueden editar con cuidado. Cualquiera ajuste demasiado bajo puede hacer que su foro quede <strong>inservible</strong>!</span> La carga media actual del servidor es <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'Activar balanceo de carga según valores medios de carga';
$txt['loadavg_auto_opt'] = 'Umbral para desactivar la optimización automática de base de datos';
$txt['loadavg_search'] = 'Umbral para desactivar la búsqueda';
$txt['loadavg_allunread'] = 'Umbral para desactivar todos los mensajes no leídos';
$txt['loadavg_unreadreplies'] = 'Umbral para desactivar respuestas no leídas';
$txt['loadavg_show_posts'] = 'Umbral para desactivar mostrar mensajes de usuario';
$txt['loadavg_userstats'] = 'Límite para desactivar la visualización de las estadísticas del usuario';
$txt['loadavg_bbc'] = 'Límite para desactivar el formateo de los BBC cuando se visualizan mensajes';
$txt['loadavg_forum'] = 'Umbral para desactivar el foro <strong>completamente</strong>';
$txt['loadavg_disabled_windows'] = '<span class="error">El soporte para balanceo de carga no está disponible en Windows.</span> ';
$txt['loadavg_disabled_osx'] = '<span class="error">El soporte de carga balanceado no está disponible en OS:X.</span>';
$txt['loadavg_disabled_conf'] = '<span class="error">El soporte para balanceo de carga está desactivado por la configuración de tu servidor.</span> ';

$txt['setting_password_strength'] = 'Fuerza requerida para las claves de usuario';
$txt['setting_password_strength_low'] = 'Baja - 4 caracteres mínimo';
$txt['setting_password_strength_medium'] = 'Media - no puede contener el nombre de usuario';
$txt['setting_password_strength_high'] = 'Alta - mezcla de diferentes caracteres';
$txt['setting_enable_password_conversion'] = 'Permitir la conversión hash de contraseñas';

$txt['antispam_Settings'] = 'Verificación Anti-Spam';
$txt['antispam_Settings_desc'] = 'Esta sección te permite configurar las comprobaciones de verificación para asegurar que el usuario es un humanon (y no un bot), y determinar cómo y dónde se aplican.';
$txt['setting_reg_verification'] = 'Requerir verificación en la página de registro';
$txt['posts_require_captcha'] = 'Número de posts por debajo del cual los usuarios deben pasar la verificación para escribir un post';
$txt['posts_require_captcha_desc'] = '(0 para ilimitado, los moderadores están exentos de esta limitación)';
$txt['search_enable_captcha'] = 'Requerir verificación en todas las búsquedas de invitados';
$txt['setting_guests_require_captcha'] = 'Los invitados deben pasar la verificación cuando escriban nuevos posts';
$txt['setting_guests_require_captcha_desc'] = '(Activado automáticamente si especificas un número mínimo de posts a continuación)';
$txt['question_not_defined'] = 'Tienes que añadir una pregunta con respuesta para el idioma por defecto de tu foro (%1$s). De otra forma, los usuarios no podrá rellenar el CAPTCHA y no se podrán registrar.';

$txt['configure_verification_means'] = 'Configurar métodos de verificación';
$txt['setting_qa_verification_number'] = 'Número de preguntas de verificación que el usuario debe contestar';
$txt['setting_qa_verification_number_desc'] = '(0 para desactivar; las preguntas se establecen más abajo)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">A continuación puedes establecer qué características anti-spam quieres tener activas cuando un usuario necesite verificar que es humano. Ten en cuenta que el usuario tendrá que pasar <em>todas</em> las verificaciones, así que si activas tanto la verificación de imagen como el test de pregunta/respuesta tendrá que completar ambas para proceder.</span>';
$txt['setting_visual_verification_type'] = 'Imagen para mostrar en la verificación visual';
$txt['setting_visual_verification_type_desc'] = 'Mientras más compleja sea la imagen más difícil será superarla para los bots';
$txt['setting_image_verification_off'] = 'Ninguna';
$txt['setting_image_verification_vsimple'] = 'Muy Simple - Texto plano en una imagen';
$txt['setting_image_verification_simple'] = 'Simple - Letras de colores solapadas, sin ruido';
$txt['setting_image_verification_medium'] = 'Media - Letras de colores solapadas, con ruido/líneas';
$txt['setting_image_verification_high'] = 'Alta - Letras torcidas, ruido/líneas considerables';
$txt['setting_image_verification_extreme'] = 'Extremo - Letras torcidas, ruido, líneas y bloques';
$txt['setting_image_verification_sample'] = 'Muestra';

// reCAPTCHA
$txt['recaptcha_configure'] = 'Sistema de verificación reCAPTCHA';
$txt['recaptcha_configure_desc'] = 'Configure el sistema de verificación reCAPTCHA. ¿No tiene una clave de reCAPTCHA? <a href="https://www.google.com/recaptcha/admin"> Obtenga su clave reCAPTCHA aquí</a>.';
$txt['recaptcha_enabled'] = 'Usa el sistema de verificación reCAPTCHA';
$txt['recaptcha_enable_desc'] = 'Esta opción aumenta la verificación visual incorporada en SMF';
$txt['recaptcha_theme'] = 'Tema reCAPTCHA';
$txt['recaptcha_theme_light'] = 'Claro';
$txt['recaptcha_theme_dark'] = 'Oscuro';
$txt['recaptcha_site_key'] = 'Clave Web';
$txt['recaptcha_site_key_desc'] = 'Esta opción se usará en el código HTML que tu web sirve a los usuarios.';
$txt['recaptcha_secret_key'] = 'Clave Secreta';
$txt['recaptcha_secret_key_desc'] = 'Esta clave se usa para la comunicación entre tu web y Google. Asegúrate de que sea secreta y no compartirla o hacerla pública.';
$txt['recaptcha_no_key_question'] = '¿No tienes clave de reCAPTCHA?';
$txt['recaptcha_get_key'] = 'Obtén tu clave reCAPTCHA aquí.';
$txt['languages_recaptcha'] = 'Idioma reCAPTCHA';

$txt['setting_image_verification_nogd'] = '<strong>Aviso:</strong> dado que este servidor no tiene la librería GD instalada las configuraciones de distinta complejidad no tendrán ningún efecto.';
$txt['setup_verification_questions'] = 'Preguntas de verificación';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Si quieres que los usuarios respondan a una pregunta de verificación para detener a los bots de spam deberías establecer algunas preguntas en la tabla de debajo. Deberías elegir preguntas relativamente simples; las respuestas no son sensibles a las mayúsculas (case sensitive). Puedes usar BBC en las preguntas para darles formato. Para eliminar una pregunta simplemente borra el contenido de esa línea.</span>';
$txt['setup_verification_question'] = 'Pregunta';
$txt['setup_verification_answer'] = 'Respuesta';
$txt['setup_verification_add_more'] = 'Añadir otra pregunta';
$txt['setup_verification_add_answer'] = 'Añadir otra respuesta';

$txt['moderation_settings'] = 'Opciones de Moderación';
$txt['setting_warning_enable'] = 'Activar Sistema de Advertencias al Usuario';
$txt['setting_warning_watch'] = 'Nivel de advertencia para usuarios vigilados<div class="smalltext">El nivel de advertencia al usuario con el que comenzará a ser vigilado - 0 para desactivar.</div>';
$txt['setting_warning_watch_note'] = 'El nivel de advertencia de usuario por el cual se vigila a un usuario se pone en lugar.';
$txt['setting_warning_moderate'] = 'Nivel de advertencia para moderación de mensajes<div class="smalltext">El nivel de advertencia al usuario a partir del que todos sus mensajes serán moderados - 0 para desactivar.</div>';
$txt['setting_warning_moderate_note'] = 'El nivel de advertencia de usuario por el cual todos sus mensajes son moderados.';
$txt['setting_warning_mute'] = 'Nivel de advertencia para enmudecer<div class="smalltext">El nivel de advertencia al usuario a partir del cual el usuario no podrá continuar publicando mensajes - 0 para desactivar.</div>';
$txt['setting_warning_mute_note'] = 'El nivel de advertencia de usuario por el cual no puede publicar ningún mensaje.';
$txt['setting_user_limit'] = 'Número máximo de puntos de advertencia por día<div class="smalltext">Este valor es la cantidad máxima de puntos de advertencia que un moderador puede asignar a un usuario en un periodo de 24 horas - 0 para ilimitado.</div>';
$txt['setting_user_limit_note'] = 'Este valor es la máxima cantidad de puntos de advertencia que un moderador puede asignar a un usuario en un periodo de 24 horas - 0 para ilimitado.';
$txt['setting_warning_decrement'] = 'Puntos de advertencia a decrementar a los usuarios cada 24 horas<div class="smalltext">Solo se aplica en usuarios que no hayan sido advertidos en las últimas 24 horas - establecer a 0 para desactivarlo.</div>';
$txt['setting_warning_decrement_note'] = 'Solo se aplica para usuarios que no hayan sido advertidos en las últimas 24 horas.';
$txt['setting_view_warning_any'] = 'Usuarios que podrán ver cualquier estado de aviso';
$txt['setting_view_warning_own'] = 'Usuarios que podrán ver sus propios estados de aviso';

$txt['signature_settings'] = 'Opciones de Firma';
$txt['signature_settings_desc'] = 'Utiliza las opciones de esta página para decidir cómo deberían ser tratadas las firmas de usuarios en SMF.';
// argument(s): session_id, session_var, scripturl
$txt['signature_settings_warning'] = 'Tenga en cuenta que la configuración no se aplica a las firmas existentes de forma predeterminada. <a href="%3$s?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">Aplicar cambios ahora</a>';
$txt['signature_settings_applied'] = 'Las reglas actualizadas se han aplicado para las firmas existentes.';
$txt['signature_enable'] = 'Activar firmas';
$txt['signature_max_length'] = 'Número máximo de caracteres permitidos<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_max_lines'] = 'Número máximo de líneas<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_max_images'] = 'Número máximo de imágenes<div class="smalltext">(0 para ilimitados - emoticonos excluidos)</div>';
$txt['signature_max_images_note'] = '(0 para ilimitado - no se incluyen smileys)';
$txt['signature_allow_smileys'] = 'Permitir smileys en las firmas';
$txt['signature_max_smileys'] = 'Número máximo de emoticonos<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_max_image_width'] = 'Ancho máximo para imágenes en la firma (pixels)<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_max_image_height'] = 'Largo máximo para imágenes en la firma (pixels)<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_max_font_size'] = 'Tamaño máximo de fuente permitido en las firmas<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_bbc'] = 'Activar etiquetas BBC';

$txt['custom_profile_title'] = 'Campos personalizados del Perfil';
$txt['custom_profile_desc'] = 'En esta página puedes crear tus propios campos personalizados para ajustarse a los requerimientos del foro';
$txt['custom_profile_active'] = 'Activo';
$txt['custom_profile_fieldname'] = 'Nombre del Campo';
$txt['custom_profile_fieldtype'] = 'Tipo de Campo';
$txt['custom_profile_fieldorder'] = 'Orden del Campo';
$txt['custom_profile_make_new'] = 'Nuevo Campo';
$txt['custom_profile_none'] = '¡Aún no has creado ningún campo personalizado!';
$txt['custom_profile_icon'] = 'Icono';

$txt['custom_profile_type_text'] = 'Texto';
$txt['custom_profile_type_textarea'] = 'Texto largo';
$txt['custom_profile_type_select'] = 'Lista desplegable';
$txt['custom_profile_type_radio'] = 'Botón de selección';
$txt['custom_profile_type_check'] = 'Casilla de verificación';

$txt['custom_add_title'] = 'Añadir Campo del Perfil';
$txt['custom_edit_title'] = 'Editar Campo del Perfil';
$txt['custom_edit_general'] = 'Opciones de Visualización';
$txt['custom_edit_input'] = 'Opciones de Entrada';
$txt['custom_edit_advanced'] = 'Opciones Avanzadas';
$txt['custom_edit_name'] = 'Nombre';
$txt['custom_edit_name_desc'] = 'Puedes usar tokens traducibles en este campo.';
$txt['custom_edit_desc'] = 'Descripción';
$txt['custom_edit_profile'] = 'Sección del Perfil';
$txt['custom_edit_profile_desc'] = 'Esta seccion de perfil se edita';
$txt['custom_edit_profile_none'] = 'En ninguna';
$txt['custom_edit_registration'] = 'Mostrar en la página de registro';
$txt['custom_edit_registration_disable'] = 'No ';
$txt['custom_edit_registration_allow'] = 'Sí';
$txt['custom_edit_registration_require'] = 'Sí, y requerir entrada';
$txt['custom_edit_display'] = 'Mostrar en los Temas';
$txt['custom_edit_mlist'] = 'Mostrar en la lista de usuarios';
$txt['custom_edit_picktype'] = 'Tipo de Campo';

$txt['custom_edit_max_length'] = 'Longitud Máxima';
$txt['custom_edit_max_length_desc'] = '(0 para ilimitada)';
$txt['custom_edit_dimension'] = 'Dimensiones';
$txt['custom_edit_dimension_row'] = 'Filas';
$txt['custom_edit_dimension_col'] = 'Columnas';
$txt['custom_edit_bbc'] = 'Permitir BBC';
$txt['custom_edit_options'] = 'Opciones';
$txt['custom_edit_options_desc'] = 'Dejar el cuadro de opción vacío para eliminarlo. El botón de selección marca la opción por defecto.';
$txt['custom_edit_options_more'] = 'Más';
$txt['custom_edit_default'] = 'Estado por defecto';
$txt['custom_edit_active'] = 'Activo';
$txt['custom_edit_active_desc'] = 'Si no está seleccionado este campo no se mostrará a nadie.';
$txt['custom_edit_privacy'] = 'Privacidad';
$txt['custom_edit_privacy_desc'] = 'Quién puede ver y editar este campo.';
$txt['custom_edit_privacy_all'] = 'Los usuarios pueden ver este campo; el propietario puede editarlo';
$txt['custom_edit_privacy_see'] = 'Los usuarios pueden ver este campo; sólo los administradores pueden editarlo';
$txt['custom_edit_privacy_owner'] = 'Los usuarios no pueden ver este campo; el propietario y los administradores pueden editarlo.';
$txt['custom_edit_privacy_none'] = 'Este campo sólo es visible para los administradores';
$txt['custom_edit_can_search'] = 'Se puede buscar';
$txt['custom_edit_can_search_desc'] = 'Este campo puede ser buscado en la lista de usuarios.';
$txt['custom_edit_mask'] = 'Máscara de Introducción';
$txt['custom_edit_mask_desc'] = 'Para los campos de texto se puede seleccionar una máscara de introducción para validar los datos.';
$txt['custom_edit_mask_email'] = 'Dirección Email válida';
$txt['custom_edit_mask_number'] = 'Numérico';
$txt['custom_edit_mask_nohtml'] = 'Sin HTML';
$txt['custom_edit_mask_regex'] = 'Expresión Regular (Avanzado)';
$txt['custom_edit_enclose'] = 'Mostrar incrustado en el texto (opcional)';
$txt['custom_edit_enclose_desc'] = 'Te recomendamos <strong>fervientemente</strong> que uses una máscara de entrada para validar los datos de entrada proporcionados por el usuario.';

$txt['custom_edit_order_move'] = 'Mover';
$txt['custom_edit_order_up'] = 'Arriba';
$txt['custom_edit_order_down'] = 'Abajo';
$txt['custom_edit_placement'] = 'Elegir colocación';
$txt['custom_profile_placement'] = 'Colocación';
$txt['custom_profile_placement_standard'] = 'Estándar (con título))';
$txt['custom_profile_placement_icons'] = 'Con Iconos';
$txt['custom_profile_placement_above_signature'] = 'Encima de la Firma';
$txt['custom_profile_placement_below_signature'] = 'Debajo de la Firma';
$txt['custom_profile_placement_below_avatar'] = 'Debajo del Avatar';
$txt['custom_profile_placement_above_member'] = 'Encima del Nombre de Usuario';
$txt['custom_profile_placement_bottom_poster'] = 'Justo debajo de la información del autor del mensaje';
$txt['custom_profile_placement_before_member'] = 'Antes del nombre de usuario';
$txt['custom_profile_placement_after_member'] = 'Después del nombre de usuario';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = '¿Estás seguro de que quieres eliminar este campo? - ¡toda la información de usuarios relacionada se perderá!';

$txt['standard_profile_title'] = 'Campos Estándar del Perfil';
$txt['standard_profile_field'] = 'Campo';
$txt['standard_profile_field_timezone'] = 'Zona Horaria';

$txt['languages_lang_name'] = 'Nombre del idioma';
$txt['languages_native_name'] = 'Nombre Nativo del Idioma';
$txt['languages_locale'] = 'Lugar';
$txt['languages_default'] = 'Por defecto';
$txt['languages_character_set'] = 'Juego de caracteres';
$txt['languages_users'] = 'Usuarios';
$txt['language_settings_writable'] = 'Aviso: el archivo Settings.php no es escribible, así que la configuración del idioma por defecto no puede ser guardada.';
$txt['edit_languages'] = 'Editar idiomas';
$txt['lang_file_not_writable'] = '<strong>Aviso:</strong> El archivo de idioma primario (%1$s) no es escribible. Debes hacerlo escribible antes de poder aplicar ningún cambio.';
$txt['lang_entries_not_writable'] = '<strong>Aviso:</strong> El archivo de idioma que quieres editar (%1$s) no es escribible. Debes hacerlo escribible antes de que puedas hacerle algún cambio.';
$txt['languages_ltr'] = 'De derecha a izquierda';

$txt['add_language'] = 'Añadir idioma';
$txt['add_language_smf'] = 'Descargar desde Simple Machines';
$txt['add_language_smf_browse'] = 'Escriba el nombre del idioma a buscar, o déjelo en blanco para buscar todos los disponibles.';
$txt['add_language_smf_install'] = 'Instalar';
$txt['add_language_found_title'] = 'Idiomas Encontrados';
$txt['add_language_smf_found'] = 'Los siguientes idiomas fueron encontrados. Haz clic en el enlace de instalación junto al idioma que quieres instalar. Serás conducido al gestor de paquetes para instalarlo.';
$txt['add_language_error_no_response'] = 'El sitio de Simple Machines no responde. Inténtalo más tarde.';
$txt['add_language_error_no_files'] = 'No se encontraron archivos.';
$txt['add_language_smf_desc'] = 'Descripción';
$txt['add_language_smf_utf8'] = 'UTF-8 ';
$txt['add_language_smf_version'] = 'Versión';

$txt['edit_language_entries_primary'] = 'Debajo están las opciones primarias del idioma para este paquete de idioma.';
$txt['edit_language_entries'] = 'Editar entradas del idioma';
// argument(s): $scripturl, $txt['themeadmin_edit_title']
$txt['edit_language_entries_desc'] = 'Puede personalizar las entradas de texto individuales para este idioma. Seleccione un archivo para cargar sus entradas y luego edítelas a continuación.<br><br>Cuando edita (o elimina) una entrada, se conserva una versión comentada del original en el archivo. Si alguna vez necesita restaurar sus cadenas editadas a su estado original, o si necesita un acceso más avanzado a estos archivos de idioma, vaya a <a href="%1$s?action=admin;area=theme;sa=edit" >%2$s</a>, busque el archivo que está buscando y luego edítelo directamente usando el editor de texto integrado de SMF.';
$txt['edit_language_entries_file'] = 'Seleccionar entradas a editar';
$txt['languages_dictionary'] = 'Diccionario';
$txt['languages_rtl'] = 'Activar el modo &quot;de derecha a izquierda&quot;';

$txt['lang_file_desc_index'] = 'Cadenas generales';
$txt['lang_file_desc_EmailTemplates'] = 'Plantillas de Email';

$txt['languages_download'] = 'Descargar paquete de idioma';
$txt['languages_download_note'] = 'Esta página lista todos los archivos contenidos en el paquete de idioma, así como alguna información útil acerca de cada uno. Todos los archivos que tienen marcada la check box asociada, serán copiados.';
$txt['languages_download_info'] = '<strong>Nota:</strong>
	<ul class="normallist">
		<li>Los archivos que tienen el estatus de &quot;no escribible&quot; no podrán ser copiados por SMF al directorio elegido en este momento. Tendrás que hacer el destino escribible usando un cliente FTP o bien rellenando tus detalles en la parte inferior de la página.</li>
		<li>La información de versión de un archivo muestra la última versión de SMF para la que fue actualizado. Si está marcada en verde entonces se trata de una versión más nueva de que tienes actualmente. Si está en ambar indica que es la misma versión. Y si está en rojo indica que tienes instalada una versión más nueva que la contenida en el paquete.</li>
		<li>Cuando un archivo ya existe en tu foro, la columna &quot;Ya existe&quot; uno de dos posibles valores. &quot;Idéntico&quot; indica que el archivo existente es exacto al que se quiere instalar, y no es necesario sobreescribirlo. &quot;Diferente&quot; quiere decir que los contenidos de ambos archivos varían de alguna manera, y sobreescribir el que ya tienes sea probablemente la solución óptima.</li>
	</ul>';

$txt['languages_download_main_files'] = 'Archivos primarios';
$txt['languages_download_filename'] = 'Nombre del archivo';
$txt['languages_download_dest'] = 'Destino';
$txt['languages_download_writable'] = 'Escribible';
$txt['languages_download_version'] = 'Versión';
$txt['languages_download_older'] = 'Tienes instalada una versión más nueva de este archivo; no se recomienda sobreescribirla.';
$txt['languages_download_exists'] = 'Ya existe';
$txt['languages_download_exists_same'] = 'Idéntico';
$txt['languages_download_exists_different'] = 'Diferente';
$txt['languages_download_overwrite'] = 'Sobrescribir';
$txt['languages_download_not_chmod'] = 'No puedes proceder con la instalación hasta que todos los archivos seleccionados para ser copiados sean escribibles.';
$txt['languages_download_illegal_paths'] = 'El paquete contiene rutas ilegales - por favor contacte con Simple Machines';
$txt['languages_download_complete'] = 'Installación completada';
$txt['languages_download_complete_desc'] = 'El paquete de idioma se instaló correctamente. Por favor haga clic <a href="%1$s">aquí</a> para volver a la página de idiomas';
$txt['languages_delete_confirm'] = '¿Estás seguro de que quieres eliminar este idioma?';
$txt['languages_max_inputs_warning'] = 'Solo puede guardar %1$s ediciones a la vez. Por favor, haga clic en el botón Guardar ahora, y luego continúe editando cuando se vuelve a cargar esta página.';
$txt['languages_txt'] = 'Cadenas de texto estándar';
$txt['languages_helptxt'] = 'Texto de ayuda';
$txt['languages_editortxt'] = 'Usar la interfaz para el editor';
$txt['languages_tztxt'] = 'Descripciones de las zonas horarias';
$txt['languages_txt_for_timezones'] = 'Poner nombres';
$txt['languages_txt_for_email_templates'] = 'Plantillas para mensajes de correo electrónico';
$txt['languages_enter_key'] = 'Introducir el nombre de una variable para esta cadena de texto';
$txt['languages_invalid_key'] = 'Lo sentimos, pero el nombre de esta variable es inválido:';

$txt['allow_cors'] = 'Permitir CORS (intercambio de recursos de origen cruzado)';
$txt['allow_cors_credentials'] = 'Permitir el envío de credenciales a través de CORS';
$txt['cors_domains'] = 'Dominios CORS adicionales';
$txt['cors_headers'] = 'Encabezados CORS adicionales';

$txt['setting_frame_security'] = 'Opciones de Seguridad para los Frames';
$txt['setting_frame_security_SAMEORIGIN'] = 'Permitir el mismo origen';
$txt['setting_frame_security_DENY'] = 'Rechazar todos los Frames';
$txt['setting_frame_security_DISABLE'] = 'Deshabilitado';

$txt['setting_proxy_ip_header'] = 'Encabezado de IP de Proxy contraria';
$txt['setting_proxy_ip_header_disabled'] = 'No permitir ningún encabezado de IP de Proxys';
$txt['setting_proxy_ip_header_autodetect'] = 'Detectar automáticamente el encabezado de la IP del Proxy';
$txt['setting_proxy_ip_servers'] = 'IPs contrarias de los servidores de Proxy';

$txt['select_boards_from_list'] = 'Selecciona los foros a los que se le aplica';

$txt['topic_move_any'] = 'Permitir mover temas a foros de solo lectura';

$txt['defaultMaxListItems'] = 'Máximo número de ítems por página en listas';

$txt['tfa_mode'] = 'Factor de Doble Autenticación';
$txt['tfa_mode_forced'] = 'Forzar en todos los grupos de miembros seleccionados';
$txt['tfa_mode_forcedall'] = 'Forzar a TODOS los usuarios';
$txt['tfa_mode_forced_help'] = 'Por favor, activa el factor de doble autenticación en tu cuenta para poder forzarlo en todos los usuarios.';
$txt['tfa_mode_enabled'] = 'Activado';
$txt['tfa_mode_disabled'] = 'Desactivado';
$txt['tfa_mode_subtext'] = 'Permitir a los usuarios tener una segunda capa de seguridad mientras inician sesión. Los usuarios necesitarán una aplicación como Google Authenticator emparejada con su cuenta';

$txt['export_settings_description'] = 'Los usuarios pueden exportar copias de sus datos de perfil, incluyendo opcionalmente sus publicaciones y mensajes personales.<br>Para evitar sobrecargar los recursos del servidor, SMF recopila lentamente los datos exportados en un archivo descargable almacenado en un directorio seguro.';
$txt['export_dir'] = 'Directorio para archivos de exportación de datos de perfiles';
$txt['export_expiry'] = 'Borrar automáticamente los archivos de exportación de datos de perfiles después';
$txt['export_min_diskspace_pct'] = 'Detener las exportaciones si el espacio libre en el disco es inferior a';
$txt['export_rate'] = 'Velocidad a la que procesar publicaciones y mensajes personales para exportar';
$txt['export_rate_desc'] = 'Los valores más altos compilarán las exportaciones más rápidamente, pero podrían afectar el rendimiento del foro.';

?>