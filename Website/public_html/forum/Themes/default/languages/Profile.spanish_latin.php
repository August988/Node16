<?php
// Version: 2.1.3; Profile

global $scripturl, $context;

// Some of the things from the popup need their own descriptions
$txt['popup_forumprofile'] = 'Detalles del Perfil';
$txt['popup_showposts'] = 'Mis Mensajes';
$txt['popup_showdrafts'] = 'Mis Borradores';
$txt['popup_ignore'] = 'Lista de Ignorados';
$txt['popup_groupmembership'] = 'Mis Grupos';
$txt['popup_subscriptions'] = 'Subscripciones';

$txt['no_profile_edit'] = 'No estás autorizado para cambiar el perfil de esta persona.';
$txt['website_title'] = 'Título de tu sitio Web';
$txt['website_url'] = 'URL de tu sitio Web';
$txt['signature'] = 'Firma';
$txt['profile_posts'] = 'Mensajes';
$txt['change_profile'] = 'Cambiar perfil';
$txt['preview_signature'] = 'Vista previa de la firma';
$txt['current_signature'] = 'Firma actual';
$txt['signature_preview'] = 'Vista previa de la firma';
$txt['delete_user'] = 'Borrar usuario';
$txt['current_status'] = 'Estado actual:';
$txt['personal_picture'] = 'Imagen personalizada';
$txt['no_avatar'] = 'Sin avatar';
$txt['choose_avatar_gallery'] = 'Elegir un avatar de la galería';
$txt['picture_text'] = 'Imagen/Texto';
$txt['reset_form'] = 'Reinicializar formulario';
$txt['preferred_language'] = 'Idioma preferido';
$txt['age'] = 'Edad';
$txt['no_pic'] = '(sin imagen)';
$txt['latest_posts'] = 'Últimos mensajes de: ';
$txt['additional_info'] = 'Información Adicional';
$txt['avatar_by_url'] = 'Especifica tu propio avatar por URL. (e.j.: <em>https://www.mipagina.com/imagen.png</em>) ';
$txt['my_own_pic'] = 'Especificar avatar mediante URL';
$txt['use_gravatar'] = 'Usar Gravatar';
$txt['gravatar_alternateEmail'] = 'Normalmente, se usará la imagen de Gravatar basada en tu dirección habitual de correo, pero si lo deseas, puedes indicar aquí un correo diferente al usado en tu cuenta del foro (por ejemplo, la imagen Gravatar del correo de tu blog).';
$txt['gravatar_noAlternateEmail'] = 'La imagen Gravatar que se muestre aquí será la asociada a tu cuenta de correo.';
$txt['date_format'] = 'Esta selección hará que las fechas en el foro se muestren en este formato.';
$txt['time_format'] = 'Formato de Hora';
$txt['timezone'] = 'Zona horaria';
$txt['display_name_desc'] = 'Este es el nombre a mostrar que la gente verá.';
$txt['personal_time_offset'] = 'Número de horas +/- para hacer que la hora mostrada se ajuste a tu hora local.';
$txt['dob'] = 'Fecha de nacimiento';
$txt['dob_month'] = 'Mes (MM)';
$txt['dob_day'] = 'Día (DD)';
$txt['dob_year'] = 'Año (AAAA)';
$txt['password_strength'] = 'Para mayor seguridad, te sugerimos que utilices 8 o más caracteres combinando números, letras y símbolos.';
$txt['include_website_url'] = 'Debe incluirse si especificas una URL a continuación.';
$txt['complete_url'] = 'Debe ser una URL completa.';
$txt['sig_info'] = 'Las firmas se muestran en la parte inferior de cada mensaje o mensaje privado. En las firma, es posible usar códigos BBC y smileys.';
$txt['no_signature_set'] = 'No se ha defnidido ninguna firma.';
$txt['no_signature_preview'] = 'No hay firma que previsualizar.';
$txt['max_sig_characters'] = 'Número máximo de caracters: %1$d; quedan: ';
$txt['send_member_pm'] = 'Enviar un mensaje privado a este usuario';
$txt['hidden'] = 'oculto';
$txt['current_time'] = 'Hora actual en el foro';


$txt['language'] = 'Idioma';
$txt['avatar_too_big'] = 'La imagen de tu avatar es demasiado grande. Ppor favor cámbiale el tamaño e intenta nuevamente (máx';
$txt['invalid_registration'] = 'El valor de la Fecha de Registro es inválida, ejemplo válido:';
$txt['current_password'] = 'Contraseña actual';
// Don't use entities in the below string, except the main ones. (lt, gt, quot.)
$txt['required_security_reasons'] = 'Por razones de seguridad, debes introducir tu contraseña actual para hacer cualquier cambio a tu perfil.';
$txt['email_change_logout'] = 'Puesto que has decidido cambiar tu correo electrónico será necesario que reactives la cuenta. Vamos a cerrar tu sesión.';

$txt['timeoffset_autodetect'] = 'auto detectar';

$txt['secret_question'] = 'Pregunta secreta';
$txt['secret_desc'] = 'Puedes introducir aquí una pregunta y una respuesta que <strong>solo tú</strong> conozcas, para hacer más fácil la recuperación de tu contraseña.';
$txt['secret_desc2'] = 'Elígela cuidadosamente. ¡no querrás que alguien adivine tu respuesta!';
$txt['secret_answer'] = 'Respuesta';
$txt['secret_ask'] = 'Pregúntame mi Pregunta secreta';
$txt['cant_retrieve'] = 'No puedes obtener tu contraseña, pero puedes especificar una nueva visitando el enlace que se te envió por email.  Tienes también la opción de especificar una nueva contraseña contestando a tu pregunta secreta.';
$txt['incorrect_answer'] = 'Lo sentimos, pero tú dispones de una combinación válida de Pregunta secreta y Respuesta en tu perfil.  Por favor haz clic en el botón Atrás y usa el método por defecto para obtener tu contraseña.';
$txt['enter_new_password'] = 'Por favor introduce la respuesta a tu pregunta secreta, así como la nueva contraseña que deseas usar.  Tu contraseña será cambiada al nuevo valor especificado en caso que contestes correctamente la pregunta secreta.';
$txt['secret_why_blank'] = '¿Por qué está en blanco?';

$txt['authentication_reminder'] = 'Recordatorio de autenticación';
$txt['password_reminder_desc'] = 'Si has olvidado tus detalles de acceso, no te preocupes, es posible recuperarlos. Para iniciar empezar el proceso de recuperación, por favor, introduce a continuación tu nombre de usuario o email.';
$txt['authentication_options'] = 'Por favor, selecciona una de las dos opciones a continuación';
$txt['authentication_password_email'] = 'Enviarme por email una nueva contraseña';
$txt['authentication_password_secret'] = 'Dejarme establecer una nueva contraseña respondiendo a mi &quot;pregunta secreta&quot;';
$txt['reminder_continue'] = 'Continuar';

$txt['current_theme'] = 'Tema actual';
$txt['change'] = 'cambiar';
$txt['theme_preferences'] = 'Configuración del Tema';
$txt['theme_forum_default'] = 'Por defecto del foro';
$txt['theme_forum_default_desc'] = 'Este es el tema por defecto, lo que significa que tu tema cambiará de acuerdo a la configuración establecida por el administrador y del foro que estés viendo.';

$txt['profileConfirm'] = '¿Realmente deseas borrar este usuario?';

$txt['custom_title'] = 'Título personalizado';

$txt['lastLoggedIn'] = 'Última vez activo';

$txt['alert_purge'] = 'Eliminar todas las alertas leídas';

$txt['alert_prefs'] = 'Preferencias de Notificación';
$txt['alert_prefs_desc'] = 'Esta página te permite configurar cuándo y cómo recibirás notificaciones de nuevos contenidos.';
$txt['watched_topics'] = 'Tema en Seguimiento';
$txt['watched_topics_desc'] = 'Esta página te permite revisar qué temas estás siguiendo. Puedes recibir una notificación cuando haya una respuesta a los temas que estés siguiendo.';
$txt['watched_boards'] = 'Foros en Seguimiento';
$txt['watched_boards_desc'] = 'Esta página te permire revisar qué foros estás siguiendo. Recibirás una notificación cuando haya nuevos temas en los foros que sigues.';

$txt['notification_general'] = 'Ajustes Generales';
$txt['notify_settings'] = 'Ajustes de Notificación:';
$txt['notify_save'] = 'Guardar ajustes';
$txt['notify_important_email'] = 'Recibir noticias, anuncios y notificaciones importantes por email.';
$txt['auto_notify'] = 'Activa las notificaciónes cuando publicas o respondes a un tema';
$txt['notify_send_types'] = 'En temas y foros para los que he solicitado notificación, notificarme de';
$txt['notify_send_type_everything'] = 'Respuestas y moderación';
$txt['notify_send_type_everything_own'] = 'Moderación solo si yo he inciado el tema y lo estoy siguiendo';
$txt['notify_send_type_only_replies'] = 'Solo respuestas';
$txt['notify_send_type_nothing'] = 'Sin notificaciones';
$txt['notify_send_body'] = 'Cuando reciba una notificación de respuesta a un tema, enviar el mensaje en el correo (pero, por favor, NO respondas a esos correos.)';
$txt['notify_alert_timeout'] = 'Tiempo de espera para notificaciones de alerta de escritorio (en segundos)';

$txt['notify_what_how'] = 'Preferencias de Alertas';
$txt['receive_alert'] = 'Recibir alertas';
$txt['receive_mail'] = 'Recibir correos electrónicos';
$txt['alert_group_board'] = 'Foros y Temas';
$txt['alert_group_msg'] = 'Mensajes';
$txt['alert_opt_pm_notify'] = 'Si está activado, notifícame de mensajes personales de:';
$txt['alert_opt_msg_notify_type'] = 'Notificarme de:';
$txt['alert_opt_msg_auto_notify'] = 'Seguir temas que haya creado y a los que responda';
$txt['alert_opt_msg_receive_body'] = 'Recibir el mensaje en el cuerpo de los correos electrónicos';
$txt['alert_opt_msg_notify_pref'] = 'Frecuencia con la que indicarme:';
$txt['alert_opt_msg_notify_pref_never'] = 'Nunca';
$txt['alert_opt_msg_notify_pref_instant'] = 'Inmediatamente';
$txt['alert_opt_msg_notify_pref_first'] = 'Inmediatamente (pero solo para el primer mensaje no leído)';
$txt['alert_opt_msg_notify_pref_daily'] = 'Envíarme un resumen diario';
$txt['alert_opt_msg_notify_pref_weekly'] = 'Envíarme un resumen semanal';
$txt['alert_topic_notify'] = 'Cuando un tema que sigo recibe una respuesta, normalmente quiero saber a través de...';
$txt['alert_board_notify'] = 'Cuando se crea un nuevo tema en un foro que sigo, normalmente quiero saber a través de...';
$txt['alert_msg_mention'] = 'Cuando mi @nombre se mencione en un mensaje';
$txt['alert_msg_quote'] = 'Cuando una de mis publicaciones es citada';
$txt['alert_msg_like'] = 'Cuando una de mis publicaciones tenga un me gusta';
$txt['alert_unapproved_reply'] = 'Cuando se responde a mi tema no aprobado';
$txt['alert_group_pm'] = 'Mensajes Privados';
$txt['alert_pm_new'] = 'Cuando reciba un nuevo mensaje privado';
$txt['alert_pm_reply'] = 'Cuando recibo una respuesta a un mensaje personal';
$txt['alert_group_groupr'] = 'Solicitudes de Grupo';
$txt['alert_groupr_approved'] = 'Cuando se apruebe mi solicitud de acceder a un grupo';
$txt['alert_groupr_rejected'] = 'Cuando se rechace mi solicitud de entrar en un grupo';
$txt['alert_group_moderation'] = 'Moderación';
$txt['alert_unapproved_attachment'] = 'Cuando se cree un adjunto sin aprobar';
$txt['alert_unapproved_post'] = 'Cuando se cree un tema sin aprobar';
$txt['alert_msg_report'] = 'Cuando se reporta una publicación';
$txt['alert_msg_report_reply'] = 'Cuando un reporte de una publicación al que he respondido recibe otra respuesta';
$txt['alert_group_members'] = 'Usuarios';
$txt['alert_member_register'] = 'Cuando se registre un nuevo usuario';
$txt['alert_warn_any'] = 'Cuando otros usuarios reciban un aviso';
$txt['alert_buddy_request'] = 'Cuando otros usuarios me agregan como su amigo';
$txt['alert_group_calendar'] = 'Calendario';
$txt['alert_event_new'] = 'Cuando se añada un nuevo evento en el calendario';
$txt['alert_request_group'] = 'Cuando alguien solicite unirse a un grupo que modero';
$txt['alert_birthday'] = '¡Cuando sea mi cumpleaños!';
$txt['alert_member_report'] = 'Cuando el perfil de otro usuario sea reportado';
$txt['alert_member_report_reply'] = 'Cuando un reporte de un usuario al que he respondido recibe otra respuesta';
$txt['alert_group_paidsubs'] = 'Suscripciones de Pago';
$txt['alert_paidsubs_expiring'] = 'Cuando mis suscripciones pagas están a punto de vencer';
$txt['toggle_all'] = 'activar todo';

$txt['notifications_topics'] = 'Notificaciones de Temas actuales';
$txt['notifications_topics_list'] = 'Recibes notificaciones para los siguientes temas';
$txt['notifications_topics_none'] = 'En este momento no estás recibiendo notificaciones para ningún tema.';
$txt['notifications_topics_howto'] = 'Para recibir notificaciones de un tema, pincha en el botón &quot;notificar&quot; mientras estés en él.';
$txt['notifications_boards'] = 'Notificaciones de Foro actuales';
$txt['notifications_boards_list'] = 'Recibes notificaciones de nuevos mensajes creados en los siguientes foros';
$txt['notifications_boards_none'] = 'No estás recibiendo por el momento, notificaciones de ningún foro.';
$txt['notifications_boards_howto'] = 'Para recibir notificaciones de un foro específico, haz clic en el botón &quot;notificar&quot; en el índice de ese foro.';
$txt['notifications_update'] = 'Desuscribirse';

$txt['statPanel_showStats'] = 'Estadísticas de usuario para: ';
$txt['statPanel_users_votes'] = 'Número de Votos emitidos';
$txt['statPanel_users_polls'] = 'Número de Encuestas creadas';
$txt['statPanel_total_time_online'] = 'Tiempo total en línea';
$txt['statPanel_noPosts'] = '¡No has publicado ningún mensaje!';
$txt['statPanel_generalStats'] = 'Estadísticas Generales';
$txt['statPanel_posts'] = 'mensajes';
$txt['statPanel_topics'] = 'temas';
$txt['statPanel_total_posts'] = 'Total de Mensajes';
$txt['statPanel_total_topics'] = 'Total de Temas creados';
$txt['statPanel_votes'] = 'votos';
$txt['statPanel_polls'] = 'encuestas';
$txt['statPanel_topBoards'] = 'Foros más populares por Mensajes';
$txt['statPanel_topBoards_posts'] = '%1$d mensajes de los %2$d mensajes del foro (%3$01.2f%%) ';
$txt['statPanel_topBoards_memberposts'] = '%1$d mensajes de los %2$d mensajes de usuarios (%3$01.2f%%) ';
$txt['statPanel_topBoardsActivity'] = 'Foros más populares por Actividad';
$txt['statPanel_activityTime'] = 'Actividad de publicaciones por Hora';
$txt['statPanel_activityTime_posts'] = '%1$d mensajes (%2$d%%)';
$txt['statPanel_timeOfDay'] = 'Hora';

$txt['deleteAccount_warning'] = '¡Advertencia - Estas acciones son irreversibles!';
$txt['deleteAccount_desc'] = 'Desde esta pantalla, puedes borrar la cuenta y los mensajes de este usuario.';
$txt['deleteAccount_member'] = 'Borrar la cuenta de este usuario';
$txt['deleteAccount_posts'] = 'Eliminar los mensajes de este usuario';
$txt['deleteAccount_all_posts'] = 'Respuestas a Temas';
$txt['deleteAccount_topics'] = 'Temas y Mensajes';
$txt['deleteAccount_votes'] = 'Eliminar votos emitidos por este usuario en encuestas';
$txt['deleteAccount_confirm'] = '¿Estás completamente seguro de desear borrar esta cuenta?';
$txt['deleteAccount_approval'] = 'Es importante mencionar que los moderadores del foro tendrán que aprobar el borrado de esta cuenta para que pueda ser eliminada.';
$txt['deleteAccount_permanent'] = '¿Eliminar de forma permanente estos mensajes/temas en lugar de enviarlos a la papelera de reciclaje?';

$txt['profile_of_username'] = 'Perfil de %1$s';
$txt['profileInfo'] = 'Información del Perfil';
$txt['showPosts'] = 'Mostrar Mensajes';
$txt['showPosts_help'] = 'Esta sección te permite ver todos los mensajes escritos por este usuario. Ten en cuenta que sólo puedes ver los mensajes escritos en zonas a las que tienes acceso en este momento.';
$txt['showMessages'] = 'Mensajes';
$txt['showTopics'] = 'Temas';
$txt['showUnwatched'] = 'Temas sin seguimiento';
$txt['showAttachments'] = 'Adjuntos';
$txt['viewWarning_help'] = 'Esta sección te permite ver todos los avisos enviados a este usuario.';
$txt['statPanel'] = 'Mostrar Estadísticas';
$txt['editBuddyIgnoreLists'] = 'Lista de Amigos/Ignorados';
$txt['could_not_add_person'] = 'No fue posible añadir a esa persona a tu lista';
$txt['could_not_remove_person'] = 'No fue posible eliminar a esa persona de tu lista';
$txt['editBuddies'] = 'Editar Amigos';
$txt['editIgnoreList'] = 'Editar lista de ignorados';
$txt['trackUser'] = 'Rastrear Usuario';
$txt['trackActivity'] = 'Actividad';
$txt['trackIP'] = 'Direccion IP';
$txt['trackLogins'] = 'Inicios de sesión';

$txt['account_info'] = 'Aquí tienes la configuración de tu cuenta. Esta página contiene toda la información critica que te identifica en el foro. Por razones de seguridad, debes introducir tu contraseña (actual) para poder modificar esta información.';
// argument(s): forum name
$txt['forumProfile_info'] = 'Puede cambiar su información personal en esta página. Esta información se mostrará a lo largo de %1$s. Si no se siente cómodo compartiendo alguna información, simplemente puedes saltártelo, ya que no hay ningún campo obligatorio.';
$txt['theme_info'] = 'Esta sección te permite personalizar la apariencia y el diseño del foro.';
$txt['notification'] = 'Notificaciones';
$txt['notification_info'] = 'SMF te permite ser notificado cuando haya respuestas a los mensajes, nuevos temas y anuncios del foro. Puedes cambiar estos valores aquí, o revisar los temas y foros de los que actualmente estás recibiendo notificaciones.';
$txt['groupmembership'] = 'Pertenencia a Grupos';
$txt['groupMembership_info'] = 'EEn esta sección de tu perfil puedes cambiar los grupos a los que perteneces.';
$txt['ignoreboards'] = 'Ignorar Foros';
$txt['ignoreboards_info'] = 'Esta página te permite ignorar foros específicos. Cuando se ignora un foro, no se mostrará el indicador de nuevos mensajes en el índice del foro. Los nuevos mensajes no se mostrarán utilizando el vínculo de búsqueda "mensajes no leídos" (al buscar no mirará en esos foros). Sin embargo, los foros ignorados seguirán apareciendo en el índice del foro y al entrar en ellos se mostrarán los temas que tienen nuevos mensajes. Al utilizar el vínculo "respuestas no leídas", los mensajes de foros ignorados se seguirán mostrando.';
$txt['alerts_show'] = 'Mostrar Alertas';

$txt['profileAction'] = 'Acciones';
$txt['deleteAccount'] = 'Borrar esta cuenta';
$txt['profileSendIm'] = 'Enviar Mensaje Privado';
$txt['profile_sendpm_short'] = 'Enviar MP';

$txt['profileBanUser'] = 'Bloquear este usuario';

$txt['display_name'] = 'Mostrar Nombre';
$txt['enter_ip'] = 'Introduce la IP (rango)';
$txt['errors_by'] = 'Mensajes de error por';
$txt['errors_desc'] = 'Debajo hay una lista con todos los errores recientes que este usuario ha generado/experimentado';
$txt['errors_from_ip'] = 'Mensajes de error desde el IP (rango)';
$txt['errors_from_ip_desc'] = 'Debajo está la lista de todos los mensajes de error generados desde esta IP (rango)';
$txt['ip_address'] = 'Dirección IP';
$txt['ips_in_errors'] = 'IPs usadas en los mensajes de error';
$txt['ips_in_messages'] = 'IPs usadas en mensajes recientes';
$txt['members_from_ip'] = 'Usuarios desde la IP (rango)';
$txt['members_in_range'] = 'Usuarios probablemente en el mismo rango';
$txt['messages_from_ip'] = 'Mensajes enviados desde la IP (rango)';
$txt['messages_from_ip_desc'] = 'Debajo está la lista de todos los mensajes publicados desde esta IP (rango).';
$txt['trackLogins_desc'] = 'A continuación se muestra una lista de todas las veces que se inició sesión en esta cuenta.';
$txt['most_recent_ip'] = 'Direcciones IP más recientes';
$txt['why_two_ip_address'] = '¿Por qué se muestran dos direcciones IP?';
$txt['no_errors_from_ip'] = 'No se encontraron mensajes de error desde la IP especificada (rango)';
$txt['no_errors_from_user'] = 'No se encontraron mensajes de error del usuario especificado';
$txt['no_members_from_ip'] = 'No se encontraron usuarios desde la IP especificada (rango)';
$txt['no_messages_from_ip'] = 'No se encontraron mensajes desde la IP especificada (rango)';
$txt['trackLogins_none_found'] = 'No se encontraron inicios de sesión recientes';
$txt['none'] = 'Ninguno';
$txt['own_profile_confirm'] = '¿Realmente deseas borrar tu cuenta?';
$txt['view_ips_by'] = 'Ver IPs usadas por';

$txt['avatar_will_upload'] = 'Subir un avatar';
$txt['avatar_max_size_wh'] = 'Tamaño máximo: %1$spx por %2$spx ';
$txt['avatar_max_size_w'] = 'Tamaño máximo: %1$spx ancho';
$txt['avatar_max_size_h'] = 'Tamaño máximo: %2$spx alto';

// Use numeric entities in the below three strings.
$txt['no_reminder_email'] = 'No ha sido posible enviar el correo recordatorio.';
$txt['send_email'] = 'Enviarle un correo a';
$txt['webmaster'] = 'webmaster';
$txt['to_ask_password'] = 'para pedirte los detalles de autenticación';

$txt['user_email'] = 'Nombre de Usuario/Email';

// Use numeric entities in the below two strings.
$txt['reminder_sent'] = 'Se ha enviado un mensaje a tu direccióon email. Pincha en el enlace de dicho mensaje para establecer una nueva contraseña.';
$txt['reminder_set_password'] = 'Establecer Contraseña';
$txt['reminder_password_set'] = 'Contraseña establecida correctamente';
$txt['reminder_error'] = '%1$s falló al responder su pregunta secreta al intentar cambiar la contraseña olvidada.';

$txt['registration_not_approved'] = 'Lo sentimos, esta cuenta aún no ha sido aprobada. Si necesitas cambiar tu dirección email, por favor, pincha <a href="%1$s">aquí</a>. ';
$txt['registration_not_activated'] = 'Lo sentimos, esta cuenta aún no ha sido activada. Si necesitas reenviar un mensaje de activación, por favor, pincha <a href="%1$s">aquí</a> ';

$txt['primary_membergroup'] = 'Grupo Primario';
$txt['post_based_membergroup'] = 'Grupo de miembros basado en publicaciones';
$txt['additional_membergroups'] = 'Grupos Adicionales';
$txt['additional_membergroups_show'] = 'mostrar grupos adicionales';
$txt['no_primary_membergroup'] = '(sin grupo primario)';
$txt['deadmin_confirm'] = '¿Estás seguro que deseas eliminar irrevocablemente tus privilegios de administrador?';

$txt['account_activate_method_2'] = 'La cuenta requiere reactivación después de un cambio de email';
$txt['account_activate_method_3'] = 'La cuenta no está aprobada';
$txt['account_activate_method_4'] = 'La cuenta está esperando aprobación para su eliminación';
$txt['account_activate_method_5'] = 'Esta cuenta es de un &quot;menor&quot; y está a la espera de aprobación';
$txt['account_not_activated'] = 'Cuenta a la espera de activación';
$txt['account_activate'] = 'activar';
$txt['account_approve'] = 'aprobar';
$txt['user_is_banned'] = 'El usuario está baneado (bloqueado) en este momento';
$txt['view_ban'] = 'Ver';
$txt['user_banned_by_following'] = 'Este usuario tiene las siguientes restricciones en este momento';
$txt['user_cannot_due_to'] = 'El usuario no puede %1$s debido a la restricción: &quot;%2$s&quot;';
$txt['ban_type_post'] = 'publicar';
$txt['ban_type_register'] = 'registrarse';
$txt['ban_type_login'] = 'iniciar sesión';
$txt['ban_type_access'] = 'acceder al foro';

$txt['show_online'] = 'Mostrar a otros usuarios que estoy conectado';

$txt['return_to_post'] = 'Volver por defecto a los temas después de publicar';
$txt['no_new_reply_warning'] = 'No advertir sobre nuevas respuestas realizadas durante la publicación.';
$txt['posts_apply_ignore_list'] = 'Ocultar mensajes publicados por usuarios en mi lista de ignorados';
$txt['recent_posts_at_top'] = 'Mostrar las publicaciones más recientes en la parte superior de la lista de temas';
$txt['recent_pms_at_top'] = 'Mostrar los mensajes personales más recientes en la parte superior';
$txt['wysiwyg_default'] = 'Cargue el editor en modo <abbr title="Lo que ve es lo que obtiene">WYSIWYG</abbr> de forma predeterminada';

$txt['timeformat_default'] = '(Por defecto del Foro)';
$txt['timeformat_easy1'] = 'Mes Día, Año, HH:MM:SS am/pm';
$txt['timeformat_easy2'] = 'Mes, Día, Año, HH:MM:SS (24 horas)';
$txt['timeformat_easy3'] = 'AAAA-MM-DD, HH:MM:SS';
$txt['timeformat_easy4'] = 'DD Mes AAAA, HH:MM:SS';
$txt['timeformat_easy5'] = 'DD-MM-AAAA, HH:MM:SS';

$txt['poster'] = 'Usuario que publica';

$txt['show_children'] = 'Mostrar sub-foros en cada página dentro de los foros, no solo en el primero';
$txt['show_no_avatars'] = 'No mostrar los avatares de otros usuarios';
$txt['show_no_signatures'] = 'No mostrar las firmas de otros usuarios';
$txt['show_no_censored'] = 'Dejar las palabras sin censurar.';
$txt['topics_per_page'] = 'Temas a mostrar por página';
$txt['messages_per_page'] = 'Mensajes a mostrar por página';
$txt['per_page_default'] = 'por defecto del foro';

$txt['calendar_start_day'] = 'Primer día de la semana en el calendario';
$txt['calendar_default_view'] = 'Vista por defecto en la página del calendario';
$txt['calendar_viewlist'] = 'Vista de lista';
$txt['calendar_viewmonth'] = 'Vista mensual';
$txt['calendar_viewweek'] = 'Vista semanal';

$txt['display_quick_mod'] = 'Mostrar la moderación rápida como ';
$txt['display_quick_mod_none'] = 'no mostrar';
$txt['display_quick_mod_check'] = 'casillas';
$txt['display_quick_mod_image'] = 'iconos';

$txt['whois_title'] = 'Buscar IP en un servidor regional de whois';
$txt['whois_apnic'] = 'APNIC (Región Asia Pacifico)';
$txt['whois_arin'] = 'ARIN (Norteamérica, una porción del Caribe, y África  subsahariana)';
$txt['whois_lacnic'] = 'LACNIC (América Latina y región del Caribe)';
$txt['whois_ripe'] = 'RIPE (Europa, Este Medio, y partes de áfrica y Asia)';

$txt['moderator_why_missing'] = '¿por qué no hay moderador aquí?';
$txt['username_change'] = 'cambiar';
$txt['username_warning'] = 'Para cambiar el nombre de usuario de este usuario, el foro debe también resetear su contraseña, que será enviada por email al usuario junto con su nuevo nombre de usuario.';

$txt['show_member_posts'] = 'Ver Mensajes del Usuario';
$txt['show_member_topics'] = 'Ver Temas del Usuario';
$txt['show_member_attachments'] = 'Ver Adjuntos del Usuario';
$txt['show_posts_none'] = 'No hay mensajes publicados todavía.';
$txt['show_topics_none'] = 'No hay temas publicados todavía.';
$txt['unwatched_topics_none'] = 'No tienes ningún tema en tu lista de seguimiento.';
$txt['show_attachments_none'] = 'Todavía no se ha publicado ningún adjunto.';
$txt['show_attach_filename'] = 'Nombre del Archivo';
$txt['show_attach_downloads'] = 'Descargas';
$txt['show_attach_posted'] = 'Publicado';

$txt['showPermissions'] = 'Mostrar Permisos';
$txt['showPermissions_status'] = 'Estado de los permisos';
$txt['showPermissions_help'] = 'Esta sección te permite ver todos los permisos de este usuario (los permisos denegados están <del>tachados</del>).';
$txt['showPermissions_given'] = 'Otorgados por';
$txt['showPermissions_denied'] = 'Denegados por';
$txt['showPermissions_permission'] = 'Permisos (los permisos denegados están <del>tachados</del>)';
$txt['showPermissions_none_general'] = 'Este usuario no tiene establecido ningún permiso general.';
$txt['showPermissions_none_board'] = 'Este usuario no tiene permisos específicos en algún foro.';
$txt['showPermissions_all'] = 'Como administrador, este usuario tiene todos los permisos posibles.';
$txt['showPermissions_select'] = 'Permisos específicos del foro para';
$txt['showPermissions_general'] = 'Permisos Generales';
$txt['showPermissions_global'] = 'Todos los foros';
$txt['showPermissions_restricted_boards'] = 'Foros restringidos';
$txt['showPermissions_restricted_boards_desc'] = 'Los siguientes foros no son accesibles para este usuario';

$txt['local_time'] = 'Hora Local';
$txt['posts_per_day'] = 'por día';

$txt['buddy_ignore_desc'] = 'Este área te permite manejar tu lista de amigos y ignorados para este foro. Al añadir usuarios a estas listas podrás, entre otras cosas, controlar quien te envía correos electronicos y mensajes personales, dependiendo de tus preferencias.';

$txt['buddy_add'] = 'Agregar a lista de amigos';
$txt['buddy_remove'] = 'Eliminar de lista de amigos';
$txt['buddy_add_button'] = 'Añadir';
$txt['no_buddies'] = 'Tu lista de amigos actualmente está vacía';

$txt['ignore_add'] = 'Agregar a la lista de ignorados';
$txt['ignore_remove'] = 'Eliminar de la lista de ignorados';
$txt['ignore_add_button'] = 'Agregar';
$txt['no_ignore'] = 'Tu lista de ignorados esta vacía en este momento';

$txt['regular_members'] = 'Usuarios Registrados';
$txt['regular_members_desc'] = 'Cada usuario del foro, sin un título o insignia diferente, pertenece a este grupo.';
$txt['group_membership_msg_free'] = 'Tu pertenencia al grupo ha sido actualizada correctamente.';
$txt['group_membership_msg_request'] = 'Se ha enviado tu solicitud. Por favor, ten paciencia mientras se considera tu solicitud.';
$txt['group_membership_msg_primary'] = 'Tu grupo principal ha sido actualizado';
$txt['current_membergroups'] = 'Grupos Actuales';
$txt['available_groups'] = 'Grupos Disponibles';
$txt['join_group'] = 'Unirse al Grupo';
$txt['leave_group'] = 'Abandonar el Grupo';
$txt['request_group'] = 'Solicitar Pertenencia';
$txt['approval_pending'] = 'Pendiente de Aprobación';
$txt['make_primary'] = 'Convertir en Grupo Primario';

$txt['request_group_membership'] = 'Solicitar Pertenencia al Grupo';
$txt['request_group_membership_desc'] = 'Antes de que puedas ingresar en este grupo, tu pertenencia debe ser aprobada por el moderador. Por favor, indícale una razón para unirte a este grupo';
$txt['submit_request'] = 'Enviar Solicitud';

$txt['profile_updated_own'] = 'Se ha actualizado correctamente tu perfil';
$txt['profile_updated_else'] = 'Se ha actualizado correctamente el perfil de %1$s.';

$txt['profile_error_signature_max_length'] = 'Tu firma no puede tener más de %1$d caracteres';
$txt['profile_error_signature_max_lines'] = 'Tu firma no puede tener más de %1$d lineas';
$txt['profile_error_signature_max_image_size'] = 'Las imágenes de tu firma no pueden ser mayores de %1$dx%2$d pixels';
$txt['profile_error_signature_max_image_width'] = 'Las imágenes de tu firma no pueden superar el ancho de %1$d pixels';
$txt['profile_error_signature_max_image_height'] = 'Las imágenes de tu firma no pueden superar el alto de %1$d pixels';
$txt['profile_error_signature_max_image_count'] = 'No puedes tener más de %1$d imágenes en tu firma';
$txt['profile_error_signature_max_font_size'] = 'El texto de tu firma no puede superar %1$s de tamaño';
$txt['profile_error_signature_allow_smileys'] = 'No tienes permisos para usar smileys en tu firma';
$txt['profile_error_signature_max_smileys'] = 'No estás autorizado a usar más de %1$d emoticonos en tu firma';
$txt['profile_error_signature_disabled_bbc'] = 'No se permiten en tu firma los siguientes códigos BBC: %1$s';

$txt['profile_view_warnings'] = 'Ver Advertencias';
$txt['profile_issue_warning'] = 'Advertir';
$txt['profile_warning_level'] = 'Nivel de Advertencia';
$txt['profile_warning_desc'] = 'En esta sección puedes ajustar el nivel de advertencia del usuario y enviarle una advertencia escrita si es necesario. Puedes también consultar el historial de advertencias y ver los efectos de su nivel de advertencia actual determinado por el administrador.';
$txt['profile_warning_name'] = 'Nombre del Usuario';
$txt['profile_warning_impact'] = 'Resultado';
$txt['profile_warning_reason'] = 'Razón de Advertencia';
$txt['profile_warning_reason_desc'] = 'Es obligatoria y quedará registrada.';
$txt['profile_warning_effect_none'] = 'Ninguno.';
$txt['profile_warning_effect_watch'] = 'El usuario se añadirá a la lista de seguimiento de los moderadores.';
$txt['profile_warning_effect_own_watched'] = 'Estás en la lista de vigilados por los moderadores.';
$txt['profile_warning_is_watch'] = 'en vigilancia';
$txt['profile_warning_effect_moderation'] = 'Todos los mensajes de usuarios se moderarán.';
$txt['profile_warning_effect_own_moderated'] = 'Todos tus mensajes serán moderados.';
$txt['profile_warning_is_moderation'] = 'mensajes en moderación';
$txt['profile_warning_effect_mute'] = 'El usuario no podrá publicar mensajes.';
$txt['profile_warning_effect_own_muted'] = 'No podrás publicar nuevos mensajes.';
$txt['profile_warning_is_muted'] = 'no puede publicar mensajes';
$txt['profile_warning_effect_text'] = 'Nivel >= %1$d: %2$s';
$txt['profile_warning_notify'] = 'Notificar';
$txt['profile_warning_notify_template'] = 'Seleccionar plantilla:';
$txt['profile_warning_notify_subject'] = 'Asunto de la Notificación';
$txt['profile_warning_notify_body'] = 'Mensaje de la Notificación';
$txt['profile_warning_notify_template_subject'] = 'Has recibido una advertencia';

// Use numeric entities in below string.
// argument(s): one of the reasons defined in $txt['profile_warning_notify_for_*']
$txt['profile_warning_notify_template_outline'] = '{MEMBER},

Has recibido una advertencia por %1$s. Deten estas actividades y cumple con las reglas del foro; de lo contrario, tomaremos medidas adicionales.

Si deseas discutir esto, por favor ponte en contacto con un administrador. 

{REGARDS}';

// argument(s): one of the reasons defined in $txt['profile_warning_notify_for_*']
$txt['profile_warning_notify_template_outline_post'] = '{MEMBER},

Has recibido una advertencia por %1$s en relación con el mensaje:
{MESSAGE}.

Deten estas actividades y cumple con las reglas del foro; de lo contrario, tomaremos medidas adicionales.

Si deseas discutir esto, por favor ponte en contacto con un administrador. 

{REGARDS}';

$txt['profile_warning_notify_for_spamming'] = 'hacer publicidad no deseada (spam)';
$txt['profile_warning_notify_title_spamming'] = 'Hacer publicidad no deseada (spam)';
$txt['profile_warning_notify_for_offence'] = 'publicación de material ofensivo';
$txt['profile_warning_notify_title_offence'] = 'Publicación de Material Ofensivo';
$txt['profile_warning_notify_for_insulting'] = 'insultar a otros usuarios y/o gestores del foro';
$txt['profile_warning_notify_title_insulting'] = 'Insulto a Usuarios/Administradores';
$txt['profile_warning_issue'] = 'Enviar Advertencia';
$txt['profile_warning_max'] = '(Max 100)';
$txt['profile_warning_limit_attribute'] = 'Ten en cuenta que no puedes ajustar el nivel de este usuario más de %1$d%% veces en un período de 24 horas.';
$txt['profile_warning_errors_occured'] = 'La advertencia no fue enviada debido a los siguientes errores';
$txt['profile_warning_success'] = 'Advertencia correctamente enviada';
$txt['profile_warning_new_template'] = 'Nueva Plantilla';

$txt['profile_warning_previous'] = 'Advertencias Anteriores';
$txt['profile_warning_previous_none'] = 'Este usuario no ha recibido advertencias previas.';
$txt['profile_warning_previous_issued'] = 'Enviada Por';
$txt['profile_warning_previous_time'] = 'Hora';
$txt['profile_warning_previous_level'] = 'Puntos';
$txt['profile_warning_previous_reason'] = 'Motivo';
$txt['profile_warning_previous_notice'] = 'Ver Noficación Enviada al Usuario';

$txt['viewwarning'] = 'Ver advertencias';
$txt['profile_viewwarning_for_user'] = 'Advertencias para %1$s';
$txt['profile_viewwarning_no_warnings'] = 'No se han enviado advertencias.';
$txt['profile_viewwarning_desc'] = 'A continuación hay un resumen de todas las advertencias que han sido enviadas por el equipo de moderación.';
$txt['profile_viewwarning_previous_warnings'] = 'Advertencias anteriores';
$txt['profile_viewwarning_impact'] = 'Impacto de las Advertencias';

$txt['subscriptions'] = 'Suscripciones de Pago';

$txt['pm_settings_desc'] = 'Desde esta página puede cambiar varias opciones relativas a los mensajes personales - incluyendo cómo se muestran estos mensajes y quien puede enviarte mensajes.';
$txt['email_notify'] = 'Notificación por email cada vez que recibas un mensaje privado:';
$txt['email_notify_buddies'] = 'Solo de Amigos';
$txt['email_notify_all'] = 'Todos los usuarios';

$txt['pm_receive_from'] = 'Recibir mensajes personales de:';
$txt['pm_receive_from_everyone'] = 'Todos los usuarios';
$txt['pm_receive_from_ignore'] = 'Todos los usuarios, excepto los que están en mi lista de ignorados';
$txt['pm_receive_from_admins'] = 'Administradores solamente';
$txt['pm_receive_from_buddies'] = 'Amigos y Administradores solamente';

$txt['popup_messages'] = 'Mostrar un mensaje emergente cuando reciba un nuevo mensaje.';
$txt['pm_remove_inbox_label'] = 'Eliminar la etiqueta de la bandeja de entrada cuando aplique otra etiqueta';
$txt['pm_display_mode'] = 'Mostrar mensajes privados';
$txt['pm_display_mode_all'] = 'Todos de golpe';
$txt['pm_display_mode_one'] = 'De uno en uno';
$txt['pm_display_mode_linked'] = 'Como una conversación';

$txt['tracking'] = 'Seguimiento';
$txt['tracking_description'] = 'Esta sección te permite revisar ciertas acciones del perfil llevadas a cabo sobre el perfil de este usuario, así como a seguir sus direcciones IPs e historial de inicio de sesión.';

$txt['trackEdits'] = 'Ediciones del perfil';
$txt['trackEdit_deleted_member'] = 'Usuario eliminado';
$txt['trackEdit_no_edits'] = 'No se tiene guardada ninguna edición del perfil de este usuario.';
$txt['trackEdit_action'] = 'Campo';
$txt['trackEdit_before'] = 'Valor anterior';
$txt['trackEdit_after'] = 'Valor posterior';
$txt['trackEdit_applicator'] = 'Cambiado por';

$txt['trackEdit_action_real_name'] = 'Nombre del usuario';
$txt['trackEdit_action_usertitle'] = 'Título personalizado';
$txt['trackEdit_action_member_name'] = 'Nombre de usuario';
$txt['trackEdit_action_email_address'] = 'Dirección de Email';
$txt['trackEdit_action_id_group'] = 'Grupo Primario';
$txt['trackEdit_action_additional_groups'] = 'Grupos Adicionales';

// Registration Agreement
$txt['trackEdit_action_agreement_accepted'] = 'Aceptaste el acuerdo de registro';
$txt['trackEdit_action_policy_accepted'] = 'Aceptaste la política de privacidad';

$txt['trackGroupRequests'] = 'Solicitudes de Grupo';
$txt['trackGroupRequests_title'] = 'Solicitudes de Grupo para %1$s ';
$txt['requested_group'] = 'Grupo solicitado';
$txt['requested_group_reason'] = 'Motivo proporcionado';
$txt['requested_group_time'] = 'Fecha';
$txt['requested_group_outcome'] = 'Resultado';
$txt['requested_none'] = 'No hay solicitudes realizadas por este usuario.';
$txt['outcome_pending'] = 'Abierta';
$txt['outcome_approved'] = 'Aprobada por %1$s el %2$s ';
$txt['outcome_refused'] = 'Rechazada por %1$s el %2$s ';
$txt['outcome_refused_reason'] = 'Rechazada por %1$s el %2$s. Razón aportada: %3$s ';

$txt['report_profile'] = 'Advertir a este usuario';
$txt['notification_remove_pref'] = 'Usar las preferencias por defecto';

$txt['tfadisable'] = 'Desactivar Autenticación de Doble Factor (2FA)';
$txt['tfa_profile_label'] = 'Autenticación de Doble Factor (2FA)';
$txt['tfa_profile_desc'] = 'La A2P le permite tener una opcion extra de seguridad mediante la asignación de un dispositivo dedicado sin el cual nadie podría iniciar sesión en su cuenta, incluso si tienen su nombre de usuario y contraseña';
$txt['tfa_profile_enable'] = 'Activar Autenticación de Doble Factor (2FA)';
$txt['tfa_profile_enabled'] = 'La Autenticación de Doble Factor está activada. <a href="%s">Desactivar</a> ';
$txt['tfa_profile_disabled'] = 'La Autenticación de Doble Factor (2FA) está desactivada';
$txt['tfa_title'] = 'Activar la Autenticación de Doble Factor (2FA) mediante una aplicación compatible';
$txt['tfa_desc'] = 'Para tener la autenticación de dos factores, necesitaría tener una aplicación compatible como Google Authenticator en su dispositivo. Una vez que tenga habilitado la autenticación de dos factores (ADP) para su cuenta, se le pedirá que ingrese un código al iniciar sesión a través del dispositivo vinculado junto con su nombre de usuario y contraseña para poder iniciar sesión correctamente. Después de haber habilitado la ADP, se proporcionará un código a modo de copia de seguridad en caso de que pierda su dispositivo vinculado.';
$txt['tfa_forced_desc'] = 'El administrador ha forzado que la A2P esté habilitado en todas las cuentas, por favor habilite la A2P aquí para continuar';
$txt['tfa_step1'] = '1. Introduce tu contraseña actual';
$txt['tfa_step2'] = '2. Introduce un código secreto';
$txt['tfa_step2_desc'] = 'Para poder configurar la aplicación, escanea el código QR que hay a la derecha, o bien introduce de forma manual el siguiente código:';
$txt['tfa_step3'] = '3. Introduce el código generado por la aplicación';
$txt['tfa_enable'] = 'Activar';
$txt['tfa_disable'] = 'Desactivar';
$txt['tfa_pass_invalid'] = 'La contraseña introducida es errónea. Por favor, inténtalo de nuevo.';
$txt['tfa_code_invalid'] = 'El código introducido es erróneo. Por favor, inténtalo de nuevo.';
$txt['tfa_backup_invalid'] = 'El código de respaldo introducido es erróneo. Por favor, inténtalo de nuevo.';
$txt['tfa_backup_title'] = '¡Guarda estos códigos de respaldo de la 2FA en un lugar seguro! Será la única forma de recuperar tu cuenta si pierdes tu dispositivo emparejado.';
$txt['tfa_backup_used_desc'] = 'Su código de copia de seguridad se ha introducido correctamente y los detalles de la A2P se han restablecido. Si desea utilizar la A2P nuevamente, necesita habilitarlo desde aquí.';
$txt['tfa_login_desc'] = 'Introduce a continuación el código generado en tu dispositivo por la aplicación de autenticación.';
$txt['tfa_backup'] = 'O usa el código de respaldo';
$txt['tfa_code'] = 'Código';
$txt['tfa_backup_code'] = 'Código de Respaldo';
$txt['tfa_backup_desc'] = 'Si no tienes acceso a tu dispositivo o a la aplicación de autenticación, puedes usar el código de respaldo proporcionado durante la activación de la autenticación de doble factor (2FA). Si tampoco dispones del código de respaldo tendrás que contactar con el administrador del foro.';
$txt['tfa_wait'] = 'Por favor, espera unos 2 minutos antes de volver a intentar el acceso mediante autenticación de doble factor.';
$txt['tfa_disable_for_user'] = 'Se desactivará la autenticación de doble factor para %s. ';
$txt['cannot_disable_tfa'] = 'No puedes desactivar la autenticación de doble factor (2FA) porque es un requisito obligatorio para todas las cuentas de usuario.';
$txt['cannot_disable_tfa2'] = 'No puedes desactivar la autenticación de doble factor (2FA) porque es un requisito para al menos uno de los grupos a los que perteneces. Contacta con el administrador para más información.';

$txt['theme_opt_calendar'] = 'Calendario';
$txt['theme_opt_display'] = 'Visualización de Foros y Temas';
$txt['theme_opt_posting'] = 'Publicación';
$txt['theme_opt_moderation'] = 'Moderación';
$txt['theme_opt_personal_messages'] = 'Mensajes Privados';

$txt['export_profile_data'] = 'Descargar los datos del perfil';
$txt['export_profile_data_desc'] = 'Esta sección te permite exportar una copia de los datos de tu perfil del foro a un archivo descargable, incluyendo opcionalmente tus publicaciones y mensajes personales.<br>Tene en cuenta:<ul class="bbc_list">%1$s</ul>';
$txt['export_profile_data_desc_list'] = array('Puede tomar algún tiempo para que el sistema termine de compilar tus datos.', 'Aparecerá un enlace de descarga en esta página una vez que se complete el proceso de exportación.', 'expiry' => 'Los archivos de exportación antiguos se borran después de %1$d días.');
$txt['active_exports'] = 'Exportaciones en curso';
$txt['completed_exports'] = 'Exportaciones completadas';
$txt['export_outdated_warning'] = 'Esta exportación está desactualizada. Faltan los datos más recientes de los siguientes apartados:';
$txt['export_file_count'] = '%1$d archivos.';
$txt['export_download_all'] = 'Descargar todo';
$txt['export_settings'] = 'Exportar ajustes';
$txt['export_include_posts'] = 'Incluir posts';
$txt['export_include_personal_messages'] = 'Incluir mensajes personales';
$txt['export_format'] = 'Formato del archivo para los datos exportados';
$txt['export_format_xml_xslt'] = 'Styled XML (legible por humanos y máquinas)';
$txt['export_format_html'] = 'HTML (amigable para humanos)';
$txt['export_format_xml'] = 'XML (amigable para máquinas)';
$txt['export_begin'] = 'Comenzar a exportar';
$txt['export_restart'] = 'Reiniciar exportación';
$txt['export_restart_confirm'] = 'Esto eliminará la exportación del perfil actual y comenzará de nuevo con la nueva configuración. ¿Seguro que quieres hacer esto?';
$txt['export_cancel'] = 'Cancelar';
$txt['export_file_desc'] = 'Información incluida: %1$s. Formato del archivo: %2$s.';
$txt['export_download_original'] = 'Descargar original';
$txt['export_view_source_button'] = 'Alternar vista de fuente';
$txt['export_open_in_browser'] = 'Por favor abri este archivo en un navegador web para ver una versión legible por humanos.';

?>