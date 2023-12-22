<?php
// Version: 2.1.3; index

global $forum_copyright, $webmaster_email, $scripturl, $context, $boardurl;

// Native name, please use full HTML entities to write your language's name.
$txt['native_name'] = 'Español (LATAM)';

// Locale (strftime, basename). For more information see:
//   - https://php.net/function.setlocale
$txt['lang_locale'] = 'es_LATIN';
$txt['lang_dictionary'] = 'es-419';
//https://developers.google.com/recaptcha/docs/language
$txt['lang_recaptcha'] = 'es-419';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'UTF-8';
// Character set right to left?  0 = ltr; 1 = rtl
$txt['lang_rtl'] = '0';
// Number format.
$txt['number_format'] = '1,234.00';

$txt['days_title'] = 'Días';
$txt['days'] = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');
$txt['days_short'] = array('Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months_title'] = 'Meses';
$txt['months'] = array(1 => 'Enero', 2 => 'Febrero', 3 => 'Marzo', 4 => 'Abril', 5 => 'Mayo', 6 => 'Junio', 7 => 'Julio', 8 => 'Agosto', 9 => 'Septiembre', 10 => 'Octubre', 11 => 'Noviembre', 12 => 'Diciembre');
$txt['months_titles'] = array(1 => 'Enero', 2 => 'Febrero', 3 => 'Marzo', 4 => 'Abril', 5 => 'Mayo', 6 => 'Junio', 7 => 'Julio', 8 => 'Agosto', 9 => 'Septiembre', 10 => 'Octubre', 11 => 'Noviembre', 12 => 'Diciembre');
$txt['months_short'] = array(1 => 'Mar', 2 => 'Feb', 3 => 'Mar', 4 => 'Abr', 5 => 'Mayo', 6 => 'Jun', 7 => 'Jul', 8 => 'Ago', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dic');
$txt['prev_month'] = 'Mes anterior';
$txt['next_month'] = 'Mes siguiente';
$txt['start'] = 'Empieza';
$txt['end'] = 'Termina';
$txt['starts'] = 'Empieza';
$txt['ends'] = 'Termina';
$txt['none'] = 'En ninguna';

$txt['minutes_label'] = 'Minutos';
$txt['hours_label'] = 'Horas';
$txt['years_title'] = 'Años';

$txt['time_am'] = 'am';
$txt['time_pm'] = 'pm';

// Short form of minutes
$txt['minutes_short'] = 'min';
// Short form of hour
$txt['hour_short'] = 'hr';
// Short form of hours
$txt['hours_short'] = 'hrs';
// Descimal sign
$txt['decimal_sign'] = '.';

$txt['admin'] = 'Administración';
$txt['moderate'] = 'Moderar';

$txt['save'] = 'Guardar';
$txt['reset'] = 'Restaurar';
$txt['upload'] = 'Subir';
$txt['upload_all'] = 'Subir todos';
$txt['processing'] = 'Procesando...';

$txt['modify'] = 'Modificar';
$txt['forum_index'] = '%1$s - Índice';
$txt['members'] = 'Miembros';
$txt['board_name'] = 'Nombre del foro';
$txt['posts'] = 'Mensajes';

$txt['member_postcount'] = 'Mensajes';
$txt['no_subject'] = '(Sin asunto)';
$txt['view_profile'] = 'Ver Perfil';
$txt['guest_title'] = 'Visitante';
$txt['author'] = 'Autor';
$txt['on'] = 'en';
$txt['remove'] = 'Eliminar';
$txt['start_new_topic'] = 'Crear nuevo tema';

$txt['login'] = 'Iniciar sesión';
// Use numeric entities in the below string.
$txt['username'] = 'Nombre de usuario';
$txt['password'] = 'Contraseña';

$txt['username_no_exist'] = 'Nombre de usuario no existente.';
$txt['no_user_with_email'] = 'No hay usuarios asociados a este correo electrónico.';

$txt['board_moderator'] = 'Moderador del Foro';
$txt['remove_topic'] = 'Eliminar Tema';
$txt['topics'] = 'Temas';
$txt['modify_msg'] = 'Modificar mensaje';
$txt['name'] = 'Nombre';
$txt['email'] = 'Correo electrónico';
$txt['user_email_address'] = 'Dirección Email';
$txt['subject'] = 'Asunto';
$txt['message'] = 'Mensaje';
$txt['redirects'] = 'Redirecciones';
$txt['quick_modify'] = 'Modificación Rápida';
$txt['quick_modify_message'] = 'Has modificado este mensaje satisfactoriamente.';
$txt['reason_for_edit'] = 'Razón de edición';

$txt['choose_pass'] = 'Escoge contraseña';
$txt['verify_pass'] = 'Verifica contraseña';
$txt['notify_announcements'] = 'Permitir a los administradores enviarme anuncios importances por email';

$txt['position'] = 'Posición';

// argument(s): username
$txt['view_profile_of_username'] = 'Viendo el perfil de %1$s';
$txt['total'] = ' Total';
$txt['website'] = 'Web';
$txt['register'] = 'Regístrarse';
$txt['warning_status'] = 'Estado de Advertencia';
$txt['user_warn_watch'] = 'El usuario está en la lista de vigilados';
$txt['user_warn_moderate'] = 'Cola de aprobación de mensajes de usuarios';
$txt['user_warn_mute'] = 'El usuario tiene restringida la publicación de mensajes';
$txt['warn_watch'] = 'Vigilado';
$txt['warn_moderate'] = 'Moderado';
$txt['warn_mute'] = 'Silenciado';

$txt['message_index'] = 'Índice de Mensajes';
$txt['news'] = 'Noticias';
$txt['home'] = 'Inicio';
$txt['page'] = 'Página';
$txt['prev'] = 'página previa';
$txt['next'] = 'siguiente página';

$txt['lock_unlock'] = 'Bloquear/Desbloquear Tema';
$txt['post'] = 'Publicar';
$txt['error_occured'] = '¡Un error ha ocurrido!';
$txt['at'] = 'a las';
$txt['by'] = 'de';
$txt['logout'] = 'Cerrar sesión';
$txt['started_by'] = 'Publicado por';
$txt['topic_started_by'] = 'Publicado por <strong>%1$s</strong> en <em>%2$s</em>';
$txt['replies'] = 'Respuestas';
$txt['last_post'] = 'Último Mensaje';
$txt['first_post'] = 'Primer mensaje';
$txt['last_poster'] = 'Último mensaje por';
$txt['last_post_message'] = '<strong>Último mensaje: </strong>%3$s <span class="postby">%2$s por %1$s</span>';
$txt['last_post_topic'] = '%1$s<br>por %2$s';
$txt['post_by_member'] = '<strong>%1$s</strong> por <strong>%2$s</strong><br>';
$txt['boardindex_total_posts'] = '%1$s Mensajes en %2$s Temas por %3$s Usuarios';
$txt['show'] = 'Mostrar';
$txt['hide'] = 'Ocultar';

$txt['admin_login'] = 'Ingresar a Administración';
// Use numeric entities in the below string.
$txt['topic'] = 'Tema';
$txt['help'] = 'Ayuda';
$txt['terms_and_rules'] = 'Reglas y Términos';
$txt['watch_board'] = 'Vigilar este foro';
$txt['unwatch_board'] = 'Dejar de seguir este foro';
$txt['watch_topic'] = 'Vigilar este tema';
$txt['unwatch_topic'] = 'Dejar de seguir este tema';
$txt['watching_topic'] = 'Tema que estas viendo';
$txt['watching_this_topic'] = 'Estás vigilando este tema, y recibirás notificaciones sobre él.';
$txt['notify'] = 'Notificar';
$txt['unnotify'] = 'Desuscribirse';

// Use numeric entities in the below string.
// argument(s): forum name
$txt['regards_team'] = 'Saludos,
El equipo de %1$s.';

$txt['notify_replies'] = 'Notificar respuestas';
$txt['move_topic'] = 'Mover tema';
$txt['move_to'] = 'Mover a';
$txt['pages'] = 'Páginas';
$txt['users_active'] = 'Usuarios activos en los últimos %1$d minutos';
$txt['personal_messages'] = 'Mensajes Personales';
$txt['reply_quote'] = 'Responder con cita';
$txt['reply'] = 'Responder';
$txt['reply_noun'] = 'Responder';
$txt['reply_number'] = 'Respuesta #%1$s%2$s';
$txt['approve'] = 'Aprobar';
$txt['unapprove'] = 'Desaprobar';
$txt['approve_all'] = 'aprobar todo';
$txt['issue_warning'] = 'Enviar Advertencia';
$txt['awaiting_approval'] = 'Esperando aprobación';
$txt['attach_awaiting_approve'] = 'Adjuntos esperando aprobación';
$txt['post_awaiting_approval'] = 'Nota: Este mensaje está esperando la aprobación de un moderador.';
$txt['there_are_unapproved_topics'] = 'Hay %1$s temas y %2$s mensajes esperando aprobación en este foro. Pulsa <a href="%3$s">aquí</a> para verlos todos.';
$txt['send_message'] = 'Enviar mensaje';

$txt['msg_alert_no_messages'] = 'usted no tiene ningún mensaje';
$txt['msg_alert_one_message'] = 'tienes <a href="%1$s">1 mensaje</a>';
$txt['msg_alert_many_message'] = 'tienes <a href="%1$s">%2$d mensajes</a>';
$txt['msg_alert_one_new'] = '1 es nuevo';
$txt['msg_alert_many_new'] = '%1$d son nuevos';
$txt['new_alert'] = 'Nueva Alerta';
$txt['remove_message'] = 'Eliminar este mensaje';
$txt['remove_message_question'] = 'Eliminar este mensaje?';

$txt['topic_alert_none'] = 'No hay mensajes...';
$txt['pm_alert_none'] = 'No hay mensajes...';
$txt['no_messages'] = 'Sin mensajes';

$txt['online_users'] = 'Usuarios en línea';
$txt['jump_to'] = 'Ir a';
$txt['go'] = 'Ir';
$txt['are_sure_remove_topic'] = '¿Estás seguro de borrar este tema?';
$txt['yes'] = 'Sí';
$txt['no'] = ' No';

$txt['search_end_results'] = 'Fin de resultados';
$txt['search_on'] = 'en';

$txt['search'] = 'Buscar';
$txt['all'] = 'Todos';
$txt['search_entireforum'] = 'Todo el foro';
$txt['search_thisboard'] = 'Este foro';
$txt['search_thistopic'] = 'Este tema';
$txt['search_members'] = 'Usuarios';

$txt['back'] = 'Atrás';
$txt['continue'] = 'Continuar';
$txt['password_reminder'] = 'Contraseña recordatorio';
$txt['topic_started'] = 'Mensaje publicado por';
$txt['title'] = 'Título';
$txt['post_by'] = 'Publicado por';
$txt['memberlist_searchable'] = 'Lista (con opción de búsqueda) de todos los usuarios registrados.';
$txt['welcome_newest_member'] = 'Por favor da la bienvenida a %1$s, nuestro más reciente usuario.';
$txt['admin_center'] = 'Centro de Administración';
$txt['last_edit_by'] = '<span class="lastedit">Ultima modificación</span>: %1$s por %2$s';
$txt['last_edit_reason'] = '<span id="reason" class="lastedit">Razón</span>: %1$s';
$txt['notify_deactivate'] = '¿Deseas desactivar la notificación en este tema?';
$txt['modified_time'] = 'Última edición';
$txt['modified_by'] = 'Editado por';

$txt['recent_posts'] = 'Mensajes recientes';

$txt['location'] = 'Ubicación';
$txt['location_desc'] = 'Ubicación geográfica.';
$txt['gender'] = 'Sexo';
$txt['gender_0'] = 'Ninguno';
$txt['gender_1'] = 'Hombre';
$txt['gender_2'] = 'Mujer';
$txt['gender_desc'] = 'Tu género.';
$txt['icq'] = 'ICQ';
$txt['icq_desc'] = 'Este es tu número de ICQ.';
$txt['skype'] = 'Skype';
$txt['skype_desc'] = 'Este es tu nombre de usuario de Skype';
$txt['personal_text'] = 'Texto Personal';
$txt['date_registered'] = 'Fecha de registro';

$txt['recent_view'] = 'Ver los mensajes más recientes del foro.';
$txt['recent_updated'] = 'es el tema actualizado más recientemente';
$txt['is_recent_updated'] = '%1$s es el tema más recientemente actualizado';

$txt['male'] = 'Masculino';
$txt['female'] = 'Femenino';

$txt['error_invalid_characters_username'] = 'Usado un caracter inválido en el nombre de usuario.';

// argument(s): forum name, login URL, login JavaScript snippet
$txt['welcome_guest'] = 'Bienvenido a <strong>%1$s</strong>. Por favor, <a href="%2$s" onclick="%3$s">iniciar sesión</a>.';

// argument(s): forum name, login URL, login JavaScript snippet, signup URL
$txt['welcome_guest_register'] = 'Bienvenido a <strong>%1$s</strong>. Por favor, <a href="%2$s" onclick="%3$s">iniciar sesión</a> o <a href="%4$s">regístrate</a>.';

// argument(s): $scripturl
$txt['welcome_guest_activate'] = '<a href="%1$s?action=activate">¿Perdiste tu correo electrónico de activación?</a>';

// argument(s): $scripturl
$txt['register_prompt'] = '¿No tienes una cuenta? <a href="%1$s?action=signup">Regístrate</a>.';

// argument(s): forum name
$txt['welcome_to_forum'] = 'Bienvenido a <strong>%1$s</strong>.';

// @todo the following to sprintf
$txt['hello_member'] = 'Hola,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Bienvenido(a),';
$txt['select_destination'] = 'Por favor selecciona un destino';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'Publicado por';

$txt['icon_smiley'] = 'Sonrisa';
$txt['icon_angry'] = 'Enojado';
$txt['icon_cheesy'] = 'Reir';
$txt['icon_laugh'] = 'Risa';
$txt['icon_sad'] = 'Triste';
$txt['icon_wink'] = 'Guiñar';
$txt['icon_grin'] = 'Sonreir';
$txt['icon_shocked'] = 'Impresionado';
$txt['icon_cool'] = 'Estupendo';
$txt['icon_huh'] = 'Eh';
$txt['icon_rolleyes'] = 'Girar ojos';
$txt['icon_tongue'] = 'Lengua';
$txt['icon_embarrassed'] = 'Avergonzado';
$txt['icon_lips'] = 'Labios sellados';
$txt['icon_undecided'] = 'Indeciso';
$txt['icon_kiss'] = 'Beso';
$txt['icon_cry'] = 'Llorar';

$txt['moderator'] = 'Moderador';
$txt['moderators'] = 'Moderadores';

$txt['views'] = 'Vistas';
$txt['new'] = 'Nuevo';

$txt['view_all_members'] = 'Ver todos los usuarios';
$txt['view'] = 'Ver';

$txt['viewing_members'] = 'Viendo usuarios de %1$s a %2$s';
$txt['of_total_members'] = 'de %1$s usuarios totales';

$txt['forgot_your_password'] = '¿Olvidaste tu contraseña?';

$txt['date'] = 'Fecha';
// Use numeric entities in the below string.
$txt['from'] = 'De';
$txt['check_new_messages'] = 'Recibir Nuevos Mensajes';
$txt['to'] = 'Para';

$txt['board_topics'] = 'Temas';
$txt['members_title'] = 'Miembros';
$txt['members_list'] = 'Lista de usuarios';
$txt['new_posts'] = 'Mensajes Nuevos';
$txt['old_posts'] = 'No hay nuevos Mensajes';
$txt['redirect_board'] = 'Foro Redirigido';

$txt['sendtopic_send'] = 'Enviar';
$txt['report_sent'] = 'Tu informe fue enviado con éxito.';
$txt['post_becomes_unapproved'] = 'Tu mensaje no ha sido aprovado porque se ha publicado en un tema sin aprobar. Una vez que el tema sea aprobado tu mensaje también lo será.';

$txt['time_offset'] = 'Diferencia Horaria';
$txt['or'] = 'o';

$txt['no_matches'] = 'No se encontraron coincidencias';

$txt['notification'] = 'Notificación';

$txt['your_ban'] = 'Lo siento %1$s, tienes el acceso denegado a este foro!';
$txt['your_ban_expires'] = 'Tu bloqueo de acceso expira %1$s.';
$txt['your_ban_expires_never'] = 'Tu bloqueo de acceso es permanente.';
$txt['ban_continue_browse'] = 'Puedes continuar navegando por el foro como invitado.';

$txt['mark_as_read'] = 'Marcar TODOS los mensajes como leídos';

$txt['locked_topic'] = 'Tema cerrado';
$txt['normal_topic'] = 'Tema normal';
$txt['participation_caption'] = 'Temas en los que has publicado';
$txt['moved_topic'] = 'Tema Movido';

$txt['go_caps'] = 'IR';

$txt['print'] = 'Imprimir';
$txt['profile'] = 'Perfil';
$txt['topic_summary'] = 'Sumario de Temas';
$txt['not_applicable'] = 'N/D';
$txt['name_in_use'] = 'Este nombre está en uso por otro usuario.';

$txt['total_members'] = 'Total de Usuarios';
$txt['total_posts'] = 'Total de Mensajes';
$txt['total_topics'] = 'Total de Temas';

$txt['time_logged_in'] = 'Tiempo de conexión';

$txt['preview'] = 'Previsualizar';
$txt['always_logged_in'] = 'Siempre';

$txt['logged'] = 'En línea';
$txt['show_ip'] = 'Mostrar dirección IP';
// Use numeric entities in the below string.
$txt['ip'] = 'IP';
$txt['url'] = 'URL ';
$txt['www'] = 'WWW';

$txt['hours'] = 'horas';
$txt['minutes'] = 'minutos';
$txt['seconds'] = 'segundos';

// Used upper case in Paid subscriptions management
$txt['hour'] = 'Hora';
$txt['days_word'] = 'días';

$txt['search_for'] = 'Buscar por:';
$txt['search_match'] = 'Coincidencias';

$txt['forum_in_maintenance'] = 'Tu foro está en Modo de Mantenimiento. Solo los Administradores pueden iniciar sesión.';
$txt['maintenance_page'] = 'Puedes desactivar el Modo de Mantenimiento desde la página <a href="%1$s">Configuración del Servidor</a>.';

$txt['read_one_time'] = 'Leído 1 vez';
$txt['read_many_times'] = 'Leído %1$d veces';

$txt['forum_stats'] = 'Estadísticas SMF';
$txt['latest_member'] = 'Último usuario';
$txt['total_cats'] = 'Total de Categorías';
$txt['latest_post'] = 'Último mensaje';

$txt['total_boards'] = 'Total de Foros';

$txt['print_page'] = 'Imprimir Página';
$txt['print_page_text'] = 'Sólo texto';
$txt['print_page_images'] = 'Texto con Imágenes';

$txt['valid_email'] = 'Debe ser una dirección válida de email.';

$txt['geek'] = 'un montón';
$txt['info_center_title'] = '%1$s - Centro de Información';

$txt['watch'] = 'Vigilar';
$txt['unwatch'] = 'Dejar de vigilar';

$txt['check_all'] = 'Seleccionar todo';

// Use numeric entities in the below string.
$txt['database_error'] = 'Error en la Base de Datos';
$txt['try_again'] = 'Por favor intenta nuevamente.  Si esta pantalla aparece nuevamente, notifica del error a un administrador.';
$txt['file'] = 'Archivo';
$txt['line'] = 'Línea';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'SMF ha detectado errores en la base de datos, y los ha tratado de corregir automáticamente.  Si los problemas persisten, o sigues obteniendo estos correos, por favor, contacta con tu proveedor de alojamiento web.';
$txt['database_error_versions'] = '<strong>Nota:</strong> Parece que tu base de datos <em>puede</em> necesitar una actualización. La versión de los archivos de tu foro están en la versión %1$s, mientras que tu base de datos está en la versión de SMF %2$s. Este error probablemente desaparecerá si ejecutas la última versión de upgrade.php.';
$txt['template_parse_error'] = '¡Error al analizar la Plantilla!';
$txt['template_parse_error_message'] = 'Parece que algo se ha estropeado en el foro con el sistema de temas.  Este problema puede que solamente sea temporal, por favor, regresa en unos momentos e intentalo nuevamente.  Si continuas viendo este mensaje, por favor contacta al administrador.<br /><br />Puedes intentar <a href="javascript:location.reload();">actualizar esta página</a>.';
// argument(s): filename, $boardurl, $scripturl
$txt['template_parse_error_details'] = 'Hubo un problema cargando el tema o archivo de idioma <pre><strong<%1$s</strong></pre>.  Por favor revisa la sintaxis e intenta nuevamente - recuerda, los apóstrofes (<pre>\'</pre>) por lo general deben tener una secuencia de escape con la diagonal invertida (<pre>\\</pre>).  Para ver información especifica del error PHP intenta <a href="%2$s%1$s">acceder al archivo directamente</a>.<br /><br />Puedes intentar <a href="javascript:location.reload();">actualizar esta página</a> o <a href="%3$s?theme=1">usar el tema predeterminado</a>.';
$txt['template_parse_errmsg'] = 'Desafortunadamente no hay más información en este momento para definir qué está mal.';

$txt['today'] = '<strong>Hoy</strong> a las ';
$txt['yesterday'] = '<strong>Ayer</strong> a las ';
$txt['new_poll'] = 'Nueva encuesta';
$txt['poll_question'] = 'Pregunta';
$txt['poll_vote'] = 'Enviar voto';
$txt['poll_total_voters'] = 'Total de votos';
$txt['poll_results'] = 'Ver resultados';
$txt['poll_lock'] = 'Cerrar Encuesta';
$txt['poll_unlock'] = 'Reabrir Encuesta';
$txt['poll_edit'] = 'Editar Encuesta';
$txt['poll'] = 'Encuesta';
$txt['one_hour'] = '1 Hora';
$txt['one_day'] = '1 Día';
$txt['one_week'] = '1 Semana';
$txt['two_weeks'] = '2 Semanas';
$txt['one_month'] = '1 Mes';
$txt['two_months'] = '2 Meses';
$txt['forever'] = 'Recordar siempre Usuario/Contraseña';
$txt['moved'] = 'MOVIDO';
$txt['move_why'] = 'Por favor introduce una breve descripción de <br>por qué este tema está siendo movido';
$txt['board'] = 'Foro';
$txt['in'] = 'en';
$txt['sticky_topic'] = 'Tema fijado';

$txt['delete'] = 'Eliminar';
$txt['no_change'] = 'Sin cambios';

$txt['your_pms'] = 'Tus Mensajes privados';

$txt['kilobyte'] = 'kB';
$txt['megabyte'] = 'Mb';

$txt['more_stats'] = '[Más Estadísticas]';

// Use numeric entities in the below three strings.
$txt['code'] = 'Código';
$txt['code_select'] = '[Seleccionar]';
$txt['code_expand'] = 'Expandir';
$txt['code_shrink'] = 'Encoger';
$txt['quote_from'] = 'Cita de';
$txt['quote'] = 'Citar';
$txt['quote_action'] = 'Citar';
$txt['quote_selected_action'] = 'Citar el texto seleccionado';
$txt['fulledit'] = 'Edición completa';
$txt['edit'] = 'Editar';
$txt['quick_edit'] = 'Edición Rápida';
$txt['post_options'] = 'Más...';

$txt['merge_to_topic_id'] = 'ID del tema de destino';
$txt['split'] = 'Dividir Tema';
$txt['merge'] = 'Combinar Temas';
$txt['target_id'] = 'Seleccionar objetivo por ID del tema';
$txt['target_below'] = 'Seleccionar objetivo de la siguiente lista';
$txt['subject_new_topic'] = 'Asunto para el nuevo tema';
$txt['split_this_post'] = 'Sólo dividir este mensaje.';
$txt['split_after_and_this_post'] = 'Dividir tema a partir de este mensaje (incluyéndolo).';
$txt['select_split_posts'] = 'Selecciona los mensajes a dividir.';
$txt['new_topic'] = 'Nuevo Tema';
$txt['split_successful'] = 'El tema se ha dividido satisfactoriamente en dos temas.';
$txt['origin_topic'] = 'Tema de Origen';
$txt['please_select_split'] = 'Por favor selecciona qué mensajes deseas dividir.';
$txt['merge_successful'] = 'Los temas han sido satisfactoriamente combinados.';
$txt['new_merged_topic'] = 'Nuevo Tema Combinado';
$txt['topic_to_merge'] = 'Tema a ser combinado';
$txt['target_board'] = 'Foro destino';
$txt['target_topic'] = 'Tema destino';
$txt['merge_desc'] = 'Esta función combinará los mensajes de dos temas en un tema. Los mensajes serán ordenados de acuerdo con la fecha en que se publicaron. Por lo tanto, el mensaje publicado más recientemente será el primer mensaje del tema combinado.';

$txt['set_sticky'] = 'Fijar tema';
$txt['set_nonsticky'] = 'Desfijar tema';
$txt['set_lock'] = 'Bloquear tema';
$txt['set_unlock'] = 'Desbloquear tema';

$txt['search_advanced'] = 'Búsqueda avanzada';

$txt['security_risk'] = 'RIESGO MAYOR DE SEGURIDAD:';
$txt['not_removed'] = 'No has borrado ';
$txt['not_removed_extra'] = '%1$s es un respaldo de %2$s que no fue generado por SMF. Este respaldo es accesible directamente y puede ser utilizado para obtener acceso no autorizado a tu foro. Debes eliminarlo inmediatamente.';
$txt['generic_warning'] = 'Aviso';
$txt['agreement_missing'] = 'Necesita que los nuevos usuarios acepten un acuerdo de registro; sin embargo, el archivo (agreement.txt) no existe.';
$txt['policy_agreement_missing'] = 'Necesita que los nuevos usuarios acepten una política de privacidad; sin embargo, la política de privacidad está vacía.';
$txt['auth_secret_missing'] = 'No se puede establecer el secreto de autenticación en Settings.php. Esto debilita la seguridad de su foro y lo pone en riesgo de ataques. Verifique los permisos del archivo en Settings.php para asegurarse de que SMF pueda escribir en el archivo.';

$txt['cache_writable'] = 'No se puede escribir en el directorio caché - afectará negativamente al rendimiento de tu foro.';

$txt['page_created_full'] = 'Pagina creada en %1$.3f segundos con %2$d consultas.';

$txt['report_to_mod_func'] = 'Usa esta función para informar a los moderadores y administradores de un mensaje abusivo, o publicado incorrectamente.';
$txt['report_profile_func'] = 'Usa esta función para informar al administrador sobre contenido abusivo en el perfil, como por ejemplo spam o imágenes inapropiadas.';

$txt['online'] = 'Conectado';
$txt['member_is_online'] = '%1$s está conectado';
$txt['offline'] = 'Desconectado';
$txt['member_is_offline'] = '%1$s está desconectado';
$txt['pm_online'] = 'Mensaje Privado (Conectado)';
$txt['pm_offline'] = 'Mensaje Privado (Desconectado)';
$txt['status'] = 'Estado';

$txt['go_up'] = 'Ir Arriba';
$txt['go_down'] = 'Ir Abajo';

// argument(s): SMF_FULL_VERSION, SMF_SOFTWARE_YEAR, $scripturl
$forum_copyright = '<a href="%3$s?action=credits" title="License" target="_blank" rel="noopener">%1$s &copy; %2$s</a>, <a href="https://www.simplemachines.org" title="Simple Machines" target="_blank" rel="noopener">Simple Machines</a>';

$txt['birthdays'] = 'Cumpleaños:';
$txt['events'] = 'Eventos:';
$txt['birthdays_upcoming'] = 'Cumpleaños próximos:';
$txt['events_upcoming'] = 'Eventos próximos:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = 'Días festivos:';
$txt['calendar_month'] = 'Mes';
$txt['calendar_year'] = 'Año';
$txt['calendar_day'] = 'Día';
$txt['calendar_event_title'] = 'Título del Evento';
$txt['calendar_event_options'] = 'Opciones de Eventos';
$txt['calendar_post_in'] = 'Publicar en';
$txt['calendar_edit'] = 'Editar evento';
$txt['calendar_export'] = 'Exportar Evento';
$txt['calendar_view_week'] = 'Ver Semana';
$txt['event_delete_confirm'] = '¿Borrar este evento?';
$txt['event_delete'] = 'Borrar evento';
$txt['calendar_post_event'] = 'Publicar evento';
$txt['calendar'] = 'Calendario';
$txt['calendar_link'] = 'Enlazar al calendario';
$txt['calendar_upcoming'] = 'Calendario de eventos próximos';
$txt['calendar_today'] = 'Calendario de Hoy';
$txt['calendar_week'] = 'Semana';
$txt['calendar_week_title'] = 'Semana %1$d de %2$d ';
// %1$s is the month, %2$s is the day, %3$s is the year. Change to suit your language.
$txt['calendar_week_beginning'] = 'Semana empezando %1$s %2$s, %3$s';
$txt['calendar_numb_days'] = 'Número de Días';
$txt['calendar_how_edit'] = '¿cómo editas esos eventos?';
$txt['calendar_link_event'] = 'Enlazar evento a un tema';
$txt['calendar_confirm_delete'] = '¿Estás seguro que deseas borrar este evento?';
$txt['calendar_linked_events'] = 'Eventos Vinculados';
$txt['calendar_click_all'] = 'Pulsa para verlos todos %1$s';
$txt['calendar_allday'] = 'Todo el día';
$txt['calendar_timezone'] = 'Zona Horaria';
$txt['calendar_list'] = 'Lista';
$txt['calendar_empty'] = 'No hay eventos que mostrar.';

$txt['movetopic_change_subject'] = 'Cambiar el título del tema';
$txt['movetopic_new_subject'] = 'Nuevo título';
$txt['movetopic_change_all_subjects'] = 'Cambiar el título en cada mensaje';
$txt['move_topic_unapproved_js'] = '¡Advertencia! Este tema aún no ha sido aprobado.\n\nNo se recomienda que crees un tema de redirección a menos que tengas la intención de aprobar el mensaje inmediatamente después de moverlo.';
$txt['movetopic_auto_board'] = '[FORO]';
$txt['movetopic_auto_topic'] = '[URL DEL TEMA]';

// argument(s): $txt['movetopic_auto_board'], $txt['movetopic_auto_topic']
$txt['movetopic_default'] = 'Este tema se ha movido a %1$s.

%2$s';

$txt['movetopic_redirect'] = 'Redireccionar al tema movido';

$txt['post_redirection'] = 'Publicar un tema de redirección';
$txt['redirect_topic_expires'] = 'Eliminar el tema de redirección automáticamente';
$txt['mergetopic_redirect'] = 'Redireccionar al tema combinado';
$txt['merge_topic_unapproved_js'] = '¡Advertencia! Este tema aún no ha sido aprobado.\n\nNo es recomendable que crees un tema de redirección a menos que apruebes el tema justo después de combinar el tema.';

$txt['theme_template_error'] = 'No se pudo cargar la plantilla \'%1$s\'.';
$txt['theme_language_error'] = 'No se pudo cargar el archivo de idioma \'%1$s\'.';

$txt['sub_boards'] = 'Subforos';
$txt['restricted_board'] = 'Foro de Redirección';

$txt['smtp_no_connect'] = 'No fue posible conectarse al servidor SMTP';
$txt['smtp_port_ssl'] = 'Puerto SMTP configurado incorrectamente; debería ser 465 en servidores SSL. El servidor podría necesitar el prefijo ssl://';
$txt['smtp_bad_response'] = 'No se pudieron obterer los codigos de respuesta del servidor de correo';
$txt['smtp_error'] = 'Hubo problemas al enviar el mail. Error: ';
$txt['mail_send_unable'] = 'No se pudo enviar el email a la dirección \'%1$s\'';

$txt['mlist_search'] = 'Buscar usuarios';
$txt['mlist_search_again'] = 'Buscar de nuevo';
$txt['mlist_search_filter'] = 'Opciones de Búsqueda';
$txt['mlist_search_email'] = 'Buscar por dirección de email';
$txt['mlist_search_messenger'] = 'Buscar por nick de messenger';
$txt['mlist_search_group'] = 'Buscar por grupo';
$txt['mlist_search_name'] = 'Buscar por nombre';
$txt['mlist_search_website'] = 'Buscar por sitio Web';
$txt['mlist_search_results'] = 'Buscar resultados por';
$txt['mlist_search_by'] = 'Buscar %1$s';
$txt['mlist_menu_view'] = 'Ver la lista de usuarios';

$txt['attach_downloaded'] = 'descargado %1$d veces';
$txt['attach_viewed'] = 'visto %1$d veces';

$txt['settings'] = 'Configuración';
$txt['never'] = 'Nunca';
$txt['more'] = 'más';
$txt['etc'] = 'etc.';

$txt['hostname'] = 'Nombre del servidor';
$txt['you_are_post_banned'] = 'Lo sentimos %1$s, tienes restringido el poder publicar mensajes o enviar mensajes privados en el foro.';
$txt['ban_reason'] = 'Motivo';
$txt['select_item_check'] = 'Por favor, selecciona al menos un elemento de la lista';

$txt['tables_optimized'] = 'Tablas de la base de datos optimizadas';

$txt['add_poll'] = 'Agregar encuesta';
$txt['poll_options_limit'] = 'Puedes elegir hasta un máximo de %1$s opciones.';
$txt['poll_remove'] = 'Eliminar encuesta';
$txt['poll_remove_warn'] = '¿Estás seguro que deseas eliminar esta encuesta del tema?';
$txt['poll_results_expire'] = 'Los resultados se mostrarán una vez que la encuesta se haya cerrado';
$txt['poll_expires_on'] = 'La votación se cierra';
$txt['poll_expired_on'] = 'Votación cerrada';
$txt['poll_change_vote'] = 'Eliminar Voto';
$txt['poll_return_vote'] = 'Opciones de votación';
$txt['poll_cannot_see'] = 'No puedes ver los resultados de la encuesta en este momento';

$txt['quick_mod_approve'] = 'Aprobar los seleccionados';
$txt['quick_mod_remove'] = 'Eliminar seleccionados';
$txt['quick_mod_lock'] = 'Cerrar/reabrir seleccionado(s)';
$txt['quick_mod_sticky'] = 'Fijar/soltar seleccionado(s)';
$txt['quick_mod_move'] = 'Mover seleccionado(s) a';
$txt['quick_mod_merge'] = 'Combinar seleccionado(s)';
$txt['quick_mod_markread'] = 'Marcar seleccionados como leídos';
$txt['quick_mod_markunread'] = 'Marcar los seleccionados como no leídos';
$txt['quick_mod_selected'] = 'Con las opciones seleccionadas hacer lo siguiente:';
$txt['quick_mod_go'] = 'Ir';
$txt['quickmod_confirm'] = '¿Estás seguro de que quieres hacerlo?';

$txt['spell_check'] = 'Revisar Ortografía';

$txt['quick_reply'] = 'Respuesta rápida';
$txt['quick_reply_warning'] = '¡Advertencia: el tema está cerrado! Solamente admins y moderadores pueden responder.';
$txt['quick_reply_verification'] = 'Tras enviar tu post serás dirigido a la página de posts normal para verificar tu post %1$s.';
$txt['quick_reply_verification_guests'] = '(requerido para todos los invitados)';
$txt['quick_reply_verification_posts'] = '(requerido para todos los usuarios con menos de %1$d posts)';
$txt['wait_for_approval'] = 'Nota: este mensaje no será mostrado hasta que sea aprobado por un moderador.';

$txt['notification_enable_board'] = '¿Estás seguro que deseas activar la notificación de nuevos temas para este foro?';
$txt['notification_disable_board'] = '¿Estás seguro que deseas desactivar la notificación de nuevos temas para este foro?';
$txt['notification_enable_topic'] = '¿Estás seguro que deseas activar la notificación de nuevas respuestas para este tema?';
$txt['notification_disable_topic'] = '¿Estás seguro que deseas desactivar la notificación de nuevas respuestas para este tema?';

// Mentions
$txt['mentions'] = 'Menciones';

// Likes
$txt['likes'] = 'Me gustas';
$txt['like'] = 'Me Gusta';
$txt['unlike'] = 'Ya no me gusta';
$txt['like_success'] = 'Indicaste correctamente que este contenido te gusta';
$txt['like_delete'] = 'Tu contenido fue borrado satisfactoriamente';
$txt['like_insert'] = 'Tu contenido fue insertado satisfactoriamente';
$txt['like_error'] = 'Hubo un error con tu petición.';
$txt['like_disable'] = 'La función "Me Gusta" se encuentra desactivada';
$txt['not_valid_like_type'] = 'El tipo de "Me Gusta" no es un tipo válido.';
// Translators, if you need to make more strings to suit your language, e.g. $txt['likes_2'] = 'Two people like this', please do so.
$txt['likes_1'] = 'A <a href="%1$s">%2$s persona</a> le gusta esto.';
$txt['likes_n'] = 'A <a href="%1$s">%2$s personas</a> les gusta esto.';
$txt['you_likes_0'] = 'Te gusta esto.';
$txt['you_likes_1'] = 'A ti y a <a href="%1$s">%2$s personas</a> les gusta esto.';
$txt['you_likes_n'] = 'A ti y a <a href="%1$s">%2$s personas</a> más les gusta esto.';

$txt['report_to_mod'] = 'Reportar al moderador';
$txt['report_profile'] = 'Reportar el perfil de %1$s';

$txt['unread_topics_visit'] = 'Temas no leídos';
// argument(s): scripturl
$txt['unread_topics_visit_none'] = 'No se han encontrado temas no leídos desde tu última visita.  <a href="%1$s?action=unread;all">Haga clic aquí para ver todos los temas no leídos</a>.';
$txt['updated_topics_visit_none'] = 'No se encontraron temas actualizados desde su última visita.';
$txt['unread_topics_all'] = 'Todos los temas no leídos';
$txt['unread_replies'] = 'Temas actualizados';

$txt['who_title'] = 'Quién está en línea';
$txt['who_and'] = ' y ';
$txt['who_viewing_topic'] = ' están viendo este tema.';
$txt['who_viewing_board'] = ' están viendo este foro.';
$txt['who_member'] = 'Usuario';

// No longer used by default theme, but for backwards compat
$txt['powered_by_php'] = 'Impulsado por PHP';
$txt['powered_by_mysql'] = 'Impulsado por MySQL';
$txt['valid_css'] = '¡CSS válido!';

$txt['rss'] = 'RSS';
$txt['atom'] = 'Atom';
$txt['html'] = 'HTML';

$txt['guest'] = 'Visitante';
$txt['guests'] = 'Visitantes';
$txt['user'] = 'Usuario';
$txt['users'] = 'Usuarios';
$txt['hidden'] = 'Oculto';

// Plural form of hidden for languages other than English
$txt['hidden_s'] = 'Oculto';
$txt['buddy'] = 'Amigo';
$txt['buddies'] = 'Amigos';
$txt['most_online_ever'] = 'Máximo en linea siempre';
$txt['most_online_today'] = 'Máximo en linea hoy';

$txt['merge_select_target_board'] = 'Selecciona el foro destino del tema combinado';
$txt['merge_select_poll'] = 'Selecciona cual encuesta tendrá el tema combinado';
$txt['merge_topic_list'] = 'Selecciona los temas a combinar';
$txt['merge_select_subject'] = 'Selecciona el título del tema combinado';
$txt['merge_custom_subject'] = 'Título personalizado';
$txt['merge_include_notifications'] = '¿Incluir notificaciones?';
$txt['merge_check'] = '¿Combinar?';
$txt['merge_no_poll'] = 'Sin encuesta';
$txt['merge_why'] = 'Por favor, introduce una breve descripción en cuanto a por qué estos temas han sido combinados.';
$txt['merged_subject'] = '[COMBINADO]%1$s';
// argument(s): $txt['movetopic_auto_topic']
$txt['mergetopic_default'] = 'Este tema se ha fusionado en %2$s.';

$txt['response_prefix'] = 'Re:';
$txt['current_icon'] = 'Icono actual';
$txt['message_icon'] = 'Icono de mensaje';

$txt['smileys_current'] = 'Conjunto actual de Smileys';
$txt['smileys_none'] = 'Sin Smileys';
$txt['smileys_forum_board_default'] = 'Las que el foro esté utilizando por defecto';

$txt['search_results'] = 'Resultados de la Búsqueda';
$txt['search_no_results'] = 'Lo siento, no se encontraron mensajes';

$txt['total_time_logged_days'] = 'días,';
$txt['total_time_logged_hours'] = 'horas y';
$txt['total_time_logged_minutes'] = ' minutos';
$txt['total_time_logged_d'] = 'd';
$txt['total_time_logged_h'] = 'h';
$txt['total_time_logged_m'] = 'm';

$txt['approve_members_waiting'] = 'esperando aprobación.';

$txt['activate_code'] = 'Tu código de activación es';

$txt['find_members'] = 'Buscar usuarios';
$txt['find_username'] = 'Nombre, nombre de usuario, o dirección de email';
$txt['find_buddies'] = '¿Mostrar amigos solamente?';
$txt['find_wildcards'] = 'Comodines permitidos: *, ?';
$txt['find_no_results'] = 'No se encontraron resultados';
$txt['find_results'] = 'Resultados';
$txt['find_close'] = 'Cerrar';

$txt['unread_since_visit'] = 'Mostrar mensajes no leídos desde la última visita.';
$txt['show_unread_replies'] = 'Mostrar nuevas respuestas a tus mensajes.';

$txt['change_color'] = 'Cambiar Color';

$txt['quickmod_delete_selected'] = 'Eliminar seleccionados';
$txt['quickmod_split_selected'] = 'Dividir los seleccionados';

$txt['show_personal_messages_heading'] = 'Nuevos mensajes';
$txt['show_personal_messages'] = 'Has recibido <strong>%1$s</strong> mensajes privados.<br><br><a href="%2$s">¿Deseas ir a tu bandeja de entrada?</a>';

$txt['help_popup'] = '¿Estás algo perdido? Déjame explicarte:';

$txt['previous_next_back'] = 'Tema anterior';
$txt['previous_next_forward'] = 'Siguiente tema';

$txt['mark_unread'] = 'Marcar como no leídos';

$txt['ssi_not_direct'] = 'Por favor no accedas a SSI.php usando directamente el URL; mejor utiliza la ruta (%1$s) o agrega ?ssi_function=algun_valor.';
$txt['ssi_session_broken'] = '¡SSI.php no pudo cargar una sesión!  Esto puede causar problemas con algunas funciones, tales como ingresar o salir - ¡Por favor, asegúrate de que SSI.php esté incluído siempre al principio *antes de cualquier otro código* en todos tus scripts!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Previsualizar mensaje';
$txt['preview_fetch'] = 'Obteniendo la previsualización...';
$txt['preview_new'] = 'Mensaje Nuevo';
$txt['pm_error_while_submitting'] = 'Ocurrieron el siguiente error o errores cuando se enviaba este Mensaje Privado:';
$txt['error_while_submitting'] = 'Hubo un error mientras se enviaba este mensaje.';
$txt['error_old_topic'] = 'Advertencia: No se ha publicado ninguna respuesta a este tema desde hace %1$d días como mínimo.<br />A menos que estés seguro de que quieres responder, por favor, considera el empezar un nuevo tema.';

$txt['split_selected_posts'] = 'Mensajes seleccionados';
$txt['split_selected_posts_desc'] = 'Los mensajes mostrados a continuación formarán un nuevo tema una vez divididos.';
$txt['split_reset_selection'] = 'reinicializar selección';

$txt['modify_cancel'] = 'Cancelar';
$txt['modify_cancel_all'] = 'Cancelar Todos';
$txt['mark_read_short'] = 'Marcar como leido';

$txt['alerts'] = 'Alertas';

$txt['pm_short'] = 'Mis mensajes';
$txt['pm_menu_read'] = 'Leer tus mensajes';
$txt['pm_menu_send'] = 'Enviar un mensaje';

$txt['unapproved_posts'] = 'Mensajes no aprobados (Temas: %1$d, Mensajes: %2$d)';

$txt['ajax_in_progress'] = 'Cargando...';

$txt['mod_reports_waiting'] = 'Mensajes Informados';

$txt['view_unread_category'] = 'Mensajes no leídos';
$txt['new_posts_in_category'] = 'Haz click para ver los nuevos mensajes en %1$s';
$txt['verification'] = 'Verificación';
$txt['visual_verification_hidden'] = 'Por favor, deja este campo vacío';
$txt['visual_verification_description'] = 'Escribe las letras mostradas en la imagen';
$txt['visual_verification_sound'] = 'Escuchar el texto';
$txt['visual_verification_request_new'] = 'Solicitar otra imagen';

// Sub menu labels
$txt['summary'] = 'Resumen';
$txt['account'] = 'Ajustes de Cuenta';
$txt['theme'] = 'Tema y Diseño';
$txt['forumprofile'] = 'Perfil del Foro';
$txt['activate_changed_email_title'] = 'Dirección de Correo Electrónico cambiada';
$txt['activate_changed_email_desc'] = 'Has modificado tu cuenta de correo electrónico. Para validad esta cuenta recibirás un correo electrónico. Haz click en el enlace proporcionado para reactivar tu cuenta.';
$txt['modSettings_title'] = 'Características y Opciones ';
$txt['package'] = 'Instalador de Paquetes';
$txt['errorlog'] = 'Registro de Errores';
$txt['edit_permissions'] = 'Permisos';
$txt['mc_unapproved_attachments'] = 'Adjuntos no aprobados';
$txt['mc_unapproved_poststopics'] = 'Mensajes y Temas no aprobados';
$txt['mc_reported_posts'] = 'Informes de moderación abiertos';
$txt['mc_reported_members'] = 'Usuarios reportados';
$txt['modlog_view'] = 'Registro de Moderación';
$txt['calendar_menu'] = 'Ver el Calendario';

// @todo Send email strings - should move?
$txt['send_email'] = 'Enviar Email';

$txt['ignoring_user'] = 'Estás ignorando a este usuario.';
$txt['show_ignore_user_post'] = 'Muéstrame el mensaje.';

$txt['spider'] = 'Araña';
$txt['spiders'] = 'Buscadores';

$txt['downloads'] = 'Descargas';
$txt['filesize'] = 'Tamaño';

// Restore topic
$txt['restore_topic'] = 'Restaurar Tema';
$txt['restore_message'] = 'Restaurar Mensaje';
$txt['quick_mod_restore'] = 'Restaurar Seleccionado';

// Editor prompt.
$txt['prompt_text_email'] = 'Por favor introduce la dirección de email.';
$txt['prompt_text_ftp'] = 'Por favor, introduce la dirección FTP';
$txt['prompt_text_url'] = 'Por favor, introduce la URL a la que quieres enlazar';
$txt['prompt_text_img'] = 'Introduce la dirección de la imagen';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'Borrar elemento';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'Plantillas:';
$txt['debug_subtemplates'] = 'Sub plantillas:';
$txt['debug_language_files'] = 'Archivos de idioma:';
$txt['debug_stylesheets'] = 'Hojas de estilo:';
$txt['debug_files_included'] = 'Archivos incluídos:';
$txt['debug_memory_use'] = 'Memoria usada:';
$txt['debug_kb'] = 'kB.';
$txt['debug_show'] = 'mostrar';
$txt['debug_cache_hits'] = 'Caché de resultados:';
$txt['debug_cache_misses'] = 'Fallos de Caché:';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s bytes';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss para %2$s bytes ';
$txt['debug_queries_used'] = 'Consultas utilizadas: %1$d. ';
$txt['debug_queries_used_and_warnings'] = 'Consultas utilizadas: %1$d, %2$d advertencias.';
$txt['debug_query_in_line'] = 'en <em>%1$s</em> linea <em>%2$s</em>,';
$txt['debug_query_which_took'] = 'se demoró %1$s segundos.';
$txt['debug_query_which_took_at'] = 'se demoró %1$s segundos en realizar %2$s peticiones.';
$txt['debug_show_queries'] = '[Mostrar Consultas]';
$txt['debug_hide_queries'] = '[Ocultar Consultas]';
$txt['debug_tokens'] = 'Tokens:';
$txt['debug_browser'] = 'ID del Buscador:';
$txt['debug_hooks'] = 'Hooks solicitados:';
$txt['debug_instances'] = 'Instancias creadas:';
$txt['are_sure_mark_read'] = '¿Estás seguro de que quieres marcar estos mensajes como leídos?';

// Inline attachments messages.
$txt['attachments_not_enable'] = 'Los archivos adjuntos están desactivados';
$txt['attachments_no_data_loaded'] = 'No es una ID de adjunto válida';
$txt['attachments_not_allowed_to_see'] = 'No puede ver este archivo adjunto.';
$txt['attachments_no_msg_associated'] = 'No hay mensajes asociados a este adjunto.';
$txt['attachments_unapproved'] = 'El archivo adjunto está pendiente de aprobación.';

// Accessibility
$txt['hide_category'] = 'Ocultar Categoría';
$txt['show_category'] = 'Mostrar Categoría';
$txt['hide_infocenter'] = 'Ocultar el Centro de Información';
$txt['show_infocenter'] = 'Mostrar el Centro de Información';

// Notification post control
$txt['notify_topic_0'] = 'No Seguir';
$txt['notify_topic_1'] = 'Sin Alertas o Emails';
$txt['notify_topic_2'] = 'Recibir Alertas';
$txt['notify_topic_3'] = 'Recibir Emails y Alertas';
$txt['notify_topic_0_desc'] = 'No recibirás ningún email o alerta de este tema y tampoco se mostrará en tu lista de temas/mensajes no leídos. Seguirás recibiendo las @menciones de los usuarios en este tema.';
$txt['notify_topic_1_desc'] = 'No recibirás ninguna alerta o correo, solo las menciones de otros miembros.';
$txt['notify_topic_2_desc'] = 'Recibirás alertas de este tema.';
$txt['notify_topic_3_desc'] = 'Recibirás tanto emails como alertas de este tema.';
$txt['notify_board_1'] = 'Ni Alertas ni Emails';
$txt['notify_board_2'] = 'Recibir Alertas';
$txt['notify_board_3'] = 'Recibir Emails y Alertas';
$txt['notify_board_1_desc'] = 'No recibirás ningún email or alerta para nuevos temas';
$txt['notify_board_2_desc'] = 'Recibirás alertas de este foro.';
$txt['notify_board_3_desc'] = 'Recibirás tanto alertas como emails de este foro.';

$txt['notify_board_prompt'] = '¿Deseas una notificación por email cuando alguien publique un nuevo tema en este foro?';
$txt['notify_board_subscribed'] = '%1$s te suscribiste a las notificaciones de nuevos temas para este foro.';
$txt['notify_board_unsubscribed'] = '%1$s cancelaste la suscripción a las notificaciones de nuevos temas para este foro.';

$txt['notify_topic_prompt'] = '¿Deseas una notificación por email si alguien responde a este tema?';
$txt['notify_topic_subscribed'] = '%1$s te suscribiste a nuevas notificaciones de respuesta para este tema.';
$txt['notify_topic_unsubscribed'] = '%1$s cancelaste la suscripción a nuevas notificaciones de respuesta para este tema.';

$txt['notify_announcements_prompt'] = '¿Quieres recibir boletines, anuncios y notificaciones importantes del foro por correo electrónico?';
$txt['notify_announcements_subscribed'] = '%1$s te suscribiste a boletines, anuncios y notificaciones importantes del foro.';
$txt['notify_announcements_unsubscribed'] = '%1$s te diste de baja de los boletines, anuncios y notificaciones importantes del foro.';

$txt['unsubscribe_announcements_plain'] = 'Para darse de baja de los boletines, anuncios y notificaciones importantes del foro, siga este enlace: %1$s';
$txt['unsubscribe_announcements_html'] = '<span style="font-size:small"><a href="%1$s">Darse de baja</a> de boletines, anuncios y notificaciones importantes del foro.</span>';
$txt['unsubscribe_announcements_manual'] = 'Para cancelar tu suscripción al boletín de noticias, anuncios y notificaciones de interés, por favor, usa el siguiente enlace:%1$s.';

// Mobile Actions
$txt['mobile_action'] = 'Acciones del Usuario';
$txt['mobile_moderation'] = 'Moderación';
$txt['mobile_user_menu'] = 'Menú principal';
$txt['mobile_generic_menu'] = 'Menú %1$s';

// Formats for lists in a sentence (e.g. "Alice, Bob, and Charlie")
// Examples:
// 	$txt['sentence_list_format'][2] specifies a format for a list with two items
// 	$txt['sentence_list_format']['n'] specifies the default format
// Notes on placeholders:
// 	{1} = first item in the list, {2} = second item, etc.
// 	{-1} = last item in the list, {-2} = second last item, etc.
// 	{series} = concatenated string of the rest of the items in the list
$txt['sentence_list_format'][1] = '{1}';
$txt['sentence_list_format'][2] = '{1} y {-1} ';
$txt['sentence_list_format'][3] = '{series}, y {-1}';
$txt['sentence_list_format'][4] = '{series}, y {-1} ';
$txt['sentence_list_format'][5] = '{series}, y {-1} ';
$txt['sentence_list_format']['n'] = '{series}, y {-1} ';
// Separators used to build lists in a sentence
$txt['sentence_list_separator'] = ',';
$txt['sentence_list_separator_alt'] = ';';

?>