<?php
// Version: 2.1.4; Errors

global $scripturl, $modSettings;

$txt['no_access'] = 'No estás autorizado para entrar a esta sección';
$txt['not_found'] = 'Lo sentimos, esta sección no está disponible en este momento.';

$txt['mods_only'] = 'Sólo Moderadores pueden usar la función de eliminado directo, por favor elimina este mensaje a través de la función modificar.';
$txt['no_name'] = 'No rellenaste el campo nombre. Es requerido.';
$txt['no_email'] = 'No rellenaste el campo email. Es requerido';
$txt['topic_locked'] = 'Este tema está bloqueado, no estás autorizado para publicar o modificar mensajes...';
$txt['no_password'] = 'Campo contraseña vacío';
$txt['already_a_user'] = 'El nombre de usuario que trataste de registrar ya existe.';
$txt['cant_move'] = 'No estás autorizado para mover temas...';
$txt['passwords_dont_match'] = 'No coinciden las contraseñas.';
$txt['register_to_use'] = 'Lo siento, debes estar registrado antes de usar esta función.';
$txt['password_invalid_character'] = 'Carácter inválido en la contraseña';
$txt['name_invalid_character'] = 'Carácter inválido en el nombre.';
$txt['email_invalid_character'] = 'Carácter inválido en el Email.';
$txt['username_reserved'] = 'El nombre de usuario que trataste de registrar contiene el nombre reservado\'%s\'. Por favor intenta otro nombre de usuario.';
$txt['numbers_one_to_nine'] = 'Este campo sólo acepta números del 0-9';
$txt['not_a_user'] = 'El usuario cuyo perfil estás intentando editar no existe.';
$txt['not_a_topic'] = 'Este tema no existe en el foro.';
$txt['email_in_use'] = 'Esa dirección de correo (%1$s) está siendo usada por un miembro registrado. Si crees que es un error, dirígete a la página de ingreso y escribe tu dirección en el recordatorio de contraseña.';
$txt['attachments_no_write'] = 'No puede escribirse en el directorio para subir archivos adjuntos.  Tu archivo adjunto o avatar no se pudo guardar.';
$txt['avatars_no_write'] = 'El directorio de avatares no se puede escribir';
$txt['attachment_not_created'] = 'No se pudo crear el archivo adjunto';
$txt['export_dir_not_writable'] = 'El directorio de exportación no se puede escribir';
$txt['export_dir_forced_change'] = '%1$s no se puede escribir. Volver a intentar en %2$s';
$txt['export_low_diskspace'] = 'Espacio en disco insuficiente para continuar con la exportación del perfil del miembro. El espacio mínimo en disco actual se establece en %1$d%%. El proceso de exportación intentará reanudarse automáticamente mañana.';

$txt['didnt_select_vote'] = 'No seleccionaste una opción del voto.';
$txt['poll_error'] = 'Esa encuesta no existe, o ha sido bloqueada, o intentaste votar más de una vez.';
$txt['members_only'] = 'Este servicio es solo para usuarios...';
$txt['locked_by_admin'] = 'Fue bloqueada por un administrador.  No la puedes desbloquear.';
$txt['feature_disabled'] = 'Lo siento, esta función ha sido desactivada.';
$txt['feature_no_exists'] = 'Lo sentimos, esta característica no existe.';
$txt['couldnt_connect'] = 'No se pudo conectar al servidor o no se encontró el archivo';
$txt['no_board'] = 'El foro que especificaste no existe';
$txt['no_message'] = 'El mensaje ya no está disponible';
$txt['cant_split'] = 'No estás autorizado para dividir temas';
$txt['cant_merge'] = 'No estás autorizado para combinar temas';
$txt['no_topic_id'] = 'Especificaste un ID de tema inválido.';
$txt['split_first_post'] = 'No puedes dividir un tema desde el primer mensaje.';
$txt['topic_one_post'] = 'Este tema sólo contiene un mensaje y no puede ser dividido';
$txt['no_posts_selected'] = 'no se seleccionaron mensajes';
$txt['selected_all_posts'] = 'Imposible dividir. Has seleccionado todos los mensajes.';
$txt['cant_find_messages'] = 'No se encontraron los mensajes';
$txt['cant_find_user_email'] = 'Imposible encontrar la dirección email del usuario.';
$txt['cant_insert_topic'] = 'No se pudo insertar el tema';
$txt['already_a_mod'] = 'Has seleccionado el nombre de usuario de un moderador. Por favor selecciona otro nombre de usuario';
$txt['session_timeout'] = 'Falla al enviar el formulario. La sesión ha expirado.';
$txt['session_verify_fail'] = 'Fallo al verificar la sesión. Por favor intenta cerrar la sesión e ingresar, y prueba de nuevo.';
$txt['verify_url_fail'] = 'Sitio de referencia inválido. Por favor, regresa y prueba de nuevo.';
$txt['token_verify_fail'] = 'Token de verificación fallido. Por favor, vuelve atrás e inténtalo de nuevo.';
$txt['guest_vote_disabled'] = 'Los invitados no pueden votar en esta encuesta.';

$txt['cannot_like_content'] = 'No puedes indicar que te gusta ese contenido.';
$txt['cannot_view_likes'] = 'No puedes ver quiénes dieron me gusta a ese contenido.';
$txt['cannot_access_mod_center'] = 'No tienes permiso para acceder al Centro de Moderación.';
$txt['cannot_admin_forum'] = 'No estás autorizado para administrar este foro.';
$txt['cannot_announce_topic'] = 'No estás autorizado para publicar anuncios en este foro.';
$txt['cannot_approve_posts'] = 'No tienes permiso para aprobar elementos.';
$txt['cannot_post_unapproved_attachments'] = 'No tienes permiso para publicar adjuntos no aprobados.';
$txt['cannot_post_unapproved_topics'] = 'No tienes permiso para publicar temas no aprobados.';
$txt['cannot_post_unapproved_replies_own'] = 'No tienes permiso para publicar respuestas no aprobadas a tus temas.';
$txt['cannot_post_unapproved_replies_any'] = 'No tienes permiso para publicar respuestas no aprobadas a temas de otros usuarios.';
$txt['cannot_calendar_edit_any'] = 'No puedes editar los eventos del calendario.';
$txt['cannot_calendar_edit_own'] = 'No tienes los privilegios necesarios para editar tus propios eventos.';
$txt['cannot_calendar_post'] = 'La edición de eventos no está permitida - Lo sentimos.';
$txt['cannot_calendar_view'] = 'Lo sentimos, pero no estás autorizado para ver el calendario.';
$txt['cannot_remove_any'] = 'Lo sentimos, pero no tienes el privilego para eliminar ningún tema. Revisa para asegurarte que el mensaje no haya sido movido a otro foro.';
$txt['cannot_remove_own'] = 'No puedes eliminar tus propios temas en este foro. Compruébalo para asegurarte de que el tema no fue movido a otro foro.';
$txt['cannot_edit_news'] = 'No estás autorizado para editar los elementos de las noticias en este foro.';
$txt['cannot_pm_read'] = 'Lo sentimos, no estás autorizado para leer tus mensajes personales.';
$txt['cannot_pm_send'] = 'No estás autorizado para enviar mensajes personales.';
$txt['cannot_lock_any'] = 'No estás autorizado para bloquear temas aquí.';
$txt['cannot_lock_own'] = 'Lo sentimos, pero no puedes bloquear tus propios temas aquí.';
$txt['cannot_make_sticky'] = 'No estás autorizado para fijar este tema.';
$txt['cannot_manage_attachments'] = 'No estás autorizado para administrar archivos adjuntos o avatares.';
$txt['cannot_manage_bans'] = 'No estás autorizado para cambiar la lista de accesos prohibidos.';
$txt['cannot_manage_boards'] = 'No estás autorizado para administrar foros y categorís.';
$txt['cannot_manage_membergroups'] = 'No tienes los permisos necesarios para modificar o asignar grupos de usuarios.';
$txt['cannot_manage_permissions'] = 'No tienes los permisos necesarios para administrar los permisos.';
$txt['cannot_manage_smileys'] = 'No estás autorizado para administrar smileys.';
$txt['cannot_merge_any'] = 'No estás autorizado para combinar temas en este foro.';
$txt['cannot_merge_redirect'] = 'Uno o más temas que seleccionaste son un tema de redirección y no puede ser combinado.';
$txt['cannot_moderate_forum'] = 'No estás autorizado para moderar este foro.';
$txt['cannot_moderate_board'] = 'No está autorizado para moderar este foro';
$txt['cannot_modify_any'] = 'No estás autorizado para modificar mensajes.';
$txt['cannot_modify_own'] = 'Lo sentimos, pero no estás autorizado para editar tus propios mensajes.';
$txt['cannot_modify_replies'] = 'A pesar que este mensaje es en respuesta a tu tema, no lo puedes editar.';
$txt['cannot_move_own'] = 'No puedes mover tus propios temas en este foro.';
$txt['cannot_move_any'] = 'No estás autorizado para mover temas en este foro.';
$txt['cannot_poll_add_own'] = 'Lo sentimos, pero no estás autorizado para agregarle encuestas a tus temas en este foro.';
$txt['cannot_poll_add_any'] = 'No puedes agregarle encuestas a este tema.';
$txt['cannot_poll_edit_own'] = 'No puedes editar esta encuesta, aunque sea tuya.';
$txt['cannot_poll_edit_any'] = 'Se te ha denegado el acceso para editar encuestas en este foro.';
$txt['cannot_poll_lock_own'] = 'No estás autorizado para bloquear tus propias encuestas en este foro.';
$txt['cannot_poll_lock_any'] = 'Lo sentimos, pero no estás autorizado para bloquear cualquier encuesta.';
$txt['cannot_poll_post'] = 'No estás autorizado para publicar encuestas en el foro actual.';
$txt['cannot_poll_remove_own'] = 'No tienes los permisos para eliminar esta encuesta de tu tema.';
$txt['cannot_poll_remove_any'] = 'No puedes eliminar encuestas en este foro.';
$txt['cannot_poll_view'] = 'No estás autorizado para ver encuestas en este foro.';
$txt['cannot_poll_vote'] = 'Lo sentimos, pero no puedes votar en las encuestas de este foro.';
$txt['cannot_post_attachment'] = 'No tienes los permisos necesarios para subir archivos adjuntos aquí.';
$txt['cannot_post_new'] = 'Lo sentimos, pero no puedes publicar nuevos temas en este foro.';
$txt['cannot_post_reply_any'] = 'No tienes los permisos necesarios para publicar respuestas a temas en este foro.';
$txt['cannot_post_reply_own'] = 'No estás autorizado para publicar respuestas aún para tus propios temas en este foro.';
$txt['cannot_post_redirect'] = 'No puedes publicar en foros de redirección.';
$txt['cannot_profile_remove_own'] = 'Lo sentimos, pero no estás autorizado para borrar tu cuenta.';
$txt['cannot_profile_remove_any'] = '¿No tienes los permisos necesarios para eliminar las cuentas de otras personas!';
$txt['cannot_profile_extra_any'] = 'No tienes los permisos necesarios modificar la configuración de otros perfiles.';
$txt['cannot_profile_identity_any'] = 'No estás autorizado para modificar la configuración de otras cuentas.';
$txt['cannot_profile_title_any'] = 'No puedes editar los títulos personalizados de otras personas.';
$txt['cannot_profile_extra_own'] = 'Lo sentimos, pero no tienes los permisos necesarios para editar los datos de tu perfil.';
$txt['cannot_profile_identity_own'] = 'Por el momento, no puedes cambiar tu identidad.';
$txt['cannot_profile_title_own'] = 'No estás autorizado para cambiar tu título personalizado.';
$txt['cannot_profile_server_avatar'] = 'No estás autorizado para utilizar un avatar alojado en el servidor.';
$txt['cannot_profile_upload_avatar'] = 'No tienes permiso para subir un avatar.';
$txt['cannot_profile_remote_avatar'] = 'No tienes el privilegio de usar un avatar remoto.';
$txt['cannot_profile_view'] = 'Pedimos disculpas, pero no puedes ver cualquier perfil.';
$txt['cannot_delete_own'] = 'No tenes permitido eliminar tus propias publicaciones en este foro.';
$txt['cannot_delete_replies'] = 'Lo sentimos, pero no puedes eliminar estos mensajes, aún cuando son respuestas a tu tema.';
$txt['cannot_delete_any'] = 'No está permitido borrar mensajes en este foro.';
$txt['cannot_report_any'] = 'No estás autorizado para reportar mensajes en este foro.';
$txt['cannot_search_posts'] = 'No estás autorizado a buscar mensajes en este foro.';
$txt['cannot_send_mail'] = 'No tienes el privilegio de enviar mails.';
$txt['cannot_issue_warning'] = 'Lo sentimos, no tienes permiso para enviar advertencias a los usuarios.';
$txt['cannot_send_email_to_members'] = 'Lo sentimos, pero el administrador ha desactivado la función de enviar emails en este foro.';
$txt['cannot_split_any'] = 'No está permitido dividir temas en este foro.';
$txt['cannot_view_attachments'] = 'Parece que no estás autorizado para descargar o ver archivos adjuntos en este foro.';
$txt['cannot_view_mlist'] = 'No puedes ver la lista de usuarios, ya que no tienes permisos para ello.';
$txt['cannot_view_stats'] = 'No estás autorizado para ver las estadísticas del foro.';
$txt['cannot_who_view'] = 'Lo sentimos - no tienes los permisos necesarios para ver la lista de usuarios en línea.';

$txt['no_theme'] = 'Ese tema no existe.';
$txt['theme_dir_wrong'] = 'El directorio de defecto de los temas es incorrecto, debe corregirlo haciendo clic en este texto.';
$txt['registration_disabled'] = 'Lo sentimos, el registro de usuarios está actualmente deshabilitado.';
$txt['registration_no_secret_question'] = 'Lo sentimos, no se ha especificado pregunta secreta para este usuario.';
$txt['poll_range_error'] = 'Lo sentimos, la encuesta debe durar más de 0 días.';
$txt['delFirstPost'] = 'No estás autorizado a borrar el primer mensaje de este tema.<p>Si deseas eliminarlo, haz clic en \'Eliminar Tema\', o pídele a un Administrador/Moderador que lo borre por ti.</p>';
$txt['parent_error'] = '¡No se pudo crear el foro!';
$txt['login_cookie_error'] = 'No pudiste ingresar.  Por favor revisa la configuración de tus cookies.';
$txt['login_ssl_required'] = 'Sólo puedes iniciar sesión a través del protocolo HTTPS';
$txt['register_ssl_required'] = 'Sólo puedes registrarte a través del protocolo HTTPS';
$txt['incorrect_answer'] = 'Lo sentimos, pero no contestaste correctamente tu pregunta secreta.  Haz clic en el botón Atrás para intentar nuevamente, o haz clic en el botón Atrás 2 veces para usar el método por defecto para obtener tu contraseña.';
$txt['no_mods'] = '¡No se encontraron moderadores!';
$txt['parent_not_found'] = 'Estructura corrupta del foro: no se pudo encontrar el foro padre';
$txt['modify_post_time_passed'] = 'No puedes modificar este mensaje ya que el tiempo límite permitido para editar mensajes ha transcurrido.';

$txt['calendar_off'] = 'El calendario está deshabilitado, no puedes acceder a él en este momento.';
$txt['calendar_export_off'] = 'No puedes exportar eventos del calendario porque esta característica está actualmente deshabilitada.';
$txt['invalid_month'] = 'Mes inválido.';
$txt['invalid_year'] = 'Año inválido.';
$txt['invalid_day'] = 'Día no válido.';
$txt['event_month_missing'] = 'Falta el mes del evento.';
$txt['event_year_missing'] = 'Falta el año del evento.';
$txt['event_day_missing'] = 'Falta el día del evento.';
$txt['event_title_missing'] = 'Falta el título del evento.';
$txt['invalid_date'] = 'Fecha inválida.';
$txt['no_event_title'] = 'No se especificó el título del evento.';
$txt['missing_event_id'] = 'Falta el ID del evento.';
$txt['cant_edit_event'] = 'No estas autorizado para modificar este evento.';
$txt['missing_board_id'] = 'Falta ID del foro.';
$txt['missing_topic_id'] = 'Falta ID del tema.';
$txt['topic_doesnt_exist'] = 'No existe el tema.';
$txt['not_your_topic'] = 'No eres el dueño de este tema.';
$txt['board_doesnt_exist'] = 'El foro no existe.';
$txt['invalid_days_numb'] = 'Número inválido de días para expandirse.';

$txt['moveto_noboards'] = '¡No hay foros a donde mover este tema!';
$txt['topic_already_moved'] = 'El tema %1$s ha sido movido al foro %2$s, por favor verifica su localización antes de moverlo de nuevo.';

$txt['already_activated'] = 'Tu cuenta ya ha sido previamente activada.';
$txt['still_awaiting_approval'] = 'Tu cuenta está todavía en espera de la aprobación de un administrador.';

$txt['invalid_email'] = 'Email / rango del email inválido.<br />Ejemplo de una dirección de email válida: webmaster@HablaJapones.org.<br />Ejemplo de un rango de dirección email válido: *@*.HablaJapones.org';
$txt['invalid_expiration_date'] = 'La fecha de expiración no es válida';
$txt['invalid_hostname'] = 'Nombre del dominio / rango del dominio inválido.<br />Ejemplo de un nombre de dominio válido: proxy4.HablaJapones.org<br />Ejemplo de un rango de dominio válido: *.HablaJapones.org';
$txt['invalid_ip'] = 'IP / rango de IPs inválido.<br />Ejemplo de una dirección IP válida: 127.0.0.1<br />Ejemplo de un rango válido de direcciones IP: 127.0.0-20.*';
$txt['invalid_tracking_ip'] = 'IP / Rango de IP inválido.<br />Ejemplo de IP válida: 127.0.0.1<br />Ejemplo de rango de IP válido: 127.0.0.*';
$txt['invalid_username'] = 'Nombre del usuario no encontrado';
$txt['no_user_selected'] = 'Miembro no encontrado';
$txt['no_ban_admin'] = '¡No puedes prohibirle el acceso a un administrador - Debes degradarlo primero!';
$txt['no_bantype_selected'] = 'No se seleccionó el tipo prohibición de acceso';
$txt['ban_not_found'] = 'No se encontró esta restricción de acceso';
$txt['ban_unknown_restriction_type'] = 'Tipo de restricción desconocida';
$txt['ban_name_empty'] = 'El nombre para banear está en blanco';
$txt['ban_id_empty'] = 'ID de Restricción de Acceso no encontrada';
$txt['ban_no_triggers'] = 'No se han especificado los desencadenantes de la restricción de acceso';
$txt['ban_ban_item_empty'] = 'No se han encontrado desencadenantes de la restricción de acceso';
$txt['impossible_insert_new_bangroup'] = 'Ocurrió un error al introducir la nueva restricción de acceso';

$txt['ban_name_exists'] = 'Ya existe ese nombre para banear. Por favor, elige un nombre diferente.';
$txt['ban_trigger_already_exists'] = 'Este desencadenante de restricción de acceso (baneo) (%1$s) ya existe en %2$s.';

$txt['recycle_no_valid_board'] = 'No se ha seleccionado un foro válido para reciclar temas';
$txt['post_already_deleted'] = 'El tema o mensaje ha sido movido al foro de temas reciclados. ¿Estás seguro de que deseas borrarlo totalmente?<br>Si es así, sigue <a href="%1$s">este enlace</a>';

$txt['login_threshold_fail'] = 'Lo sentimos, por el momento no cuentas con intentos para ingresar.  Por favor, inténtalo nuevamente más tarde.';
$txt['login_threshold_brute_fail'] = 'Lo sentimos pero has alcanzado el número máximo de intentos para la cuenta %1$s. Por favor, espera 30 segundos e inténtalo de nuevo.';

$txt['who_off'] = 'No puedes accesar la lista de usuarios en línea por el momento, ya que está deshabilitada.';

$txt['merge_create_topic_failed'] = 'Error al intentar crear un nuevo tema.';
$txt['merge_need_more_topics'] = 'El combinar temas necesita de al menos 2 temas para combinar.';

$txt['post_WaitTime_broken'] = 'La última publicación de tu IP fue hace menos de %1$d segundos. Por favor, inténtalo de nuevo más tarde.';
$txt['register_WaitTime_broken'] = '¡Ya te has registrado hace %1$d segundos!';
$txt['login_WaitTime_broken'] = 'Tendrás que esperar %1$d segundos para ingresar de nuevo, lo sentimos.';
$txt['pm_WaitTime_broken'] = 'El último Mensaje Privado enviado desde tu IP fue hace menos de %1$d segundos. Por favor, inténtalo de nuevo más tarde.';
$txt['reporttm_WaitTime_broken'] = 'El último informe de un tema fue enviado desde tu IP hace menos de %1$d segundos. Por favor, inténtalo de nuevo más tarde.';
$txt['sendmail_WaitTime_broken'] = 'El último email enviado desde tu IP fue hace menos de %1$d segundos. Por favor, inténtalo de nuevo más tarde.';
$txt['search_WaitTime_broken'] = 'Tu última búsqueda fue hace menos de %1$d segundos. Por favor, inténtalo de nuevo más tarde.';
$txt['remind_WaitTime_broken'] = 'Tu último recordatorio fue hace menos de %1$d segundos. Por favor, inténtalo de nuevo más tarde.';

$txt['email_missing_data'] = 'Debes introducir algo tanto en el título como en el texto del mensaje.';

$txt['topic_gone'] = 'El tema o foro que estás buscando parece que no existe, o fuera de tus límites.';
$txt['theme_edit_missing'] = '¡El archivo que intentas editar... no puede encontrarse!';

$txt['pm_not_yours'] = 'El mensaje personal que estás tratando de citar no es tuyo o no existe, por favor regresa e intenta nuevamente.';
$txt['mangled_post'] = 'Datos de la forma destrozados - por favor regresa e intenta nuevamente.';
$txt['too_many_groups'] = 'Lo siento, has seleccionado demasiados grupos. Por favor, quita algunos.';
$txt['post_upload_error'] = 'No se encuentran los datos de la publicación. Este error puede ser causado por intentar enviar un archivo más grande que el máximo permitido por el servidor. En caso de que el problema persista, por favor contacte con el administrador.';
$txt['quoted_post_deleted'] = 'El mensaje que estás intentando no existe, fue eliminado, o ya no lo puedes ver.';
$txt['pm_too_many_per_hour'] = 'Has superado el límite de %1$d mensaje(s) privado(s) por hora.';

$txt['register_only_once'] = 'Lo sentimos, pero no tienes permitido el registrar múltiples cuentas al mismo tiempo desde la misma computadora.';
$txt['admin_setting_coppa_require_contact'] = 'Debes introducir una dirección postal o fax de contacto si se necesita aprobación de padres/tutores.';

$txt['error_long_name'] = 'El nombre que utilizaste fue muy largo.';
$txt['error_no_name'] = 'No se proporcionó ningún nombre.';
$txt['error_bad_name'] = 'El nombre que enviaste no se pudo utilizar, ya que es un nombre reservado.';
$txt['error_no_email'] = 'No se proporcionó ninguna dirección de email.';
$txt['error_bad_email'] = 'Se proporcionó una dirección de email inválida.';
$txt['error_no_event'] = 'No se proporcionó un nombre de evento.';
$txt['error_no_subject'] = 'No se llenó el asunto.';
$txt['error_no_question'] = '¡La encuesta debe tener una pregunta!';
$txt['error_no_message'] = 'El cuerpo del mensaje se dejó vacío.';
$txt['error_long_message'] = 'El mensaje excede la longitúd máxima permitida (%s caracteres).';
$txt['error_no_comment'] = 'El campo de comentario esta vacio.';
// duplicate of post_too_long in Post.{language}.php
$txt['error_post_too_long'] = 'Tu mensaje es demasiado largo. Por favor, reduce su tamaño e inténtalo de nuevo.';
$txt['error_session_timeout'] = 'Tu sesión ha expirado. Por favor, reenvía tu mensaje.';
$txt['error_no_to'] = 'No se especificaron destinatarios.';
$txt['error_bad_to'] = 'No se encontraron uno o mas destinatarios-\'para\'.';
$txt['error_bad_bcc'] = 'No se encontraron uno o mas destinatarios-\'bcc\'.';
$txt['error_form_already_submitted'] = 'Ya has enviado previamente este mensaje!  Probablemente hiciste doble-clic, o intentaste actualizar la página en el navegador.';
$txt['error_poll_few'] = '¡Debes tener al menos dos opciones!';
$txt['error_poll_many'] = 'No tienes más de 256 posibilidades';
$txt['error_need_qr_verification'] = 'Por favor completa la sección de verificación para enviar tu mensaje.';
$txt['error_wrong_verification_code'] = 'Las letras que has escrito no coinciden con las del dibujo.';
$txt['error_wrong_verification_recaptcha'] = 'Verificación fallida. Valor captcha inválido.';
$txt['error_wrong_verification_answer'] = 'No has contestado a las preguntas de verificación correctamente.';
$txt['error_need_verification_code'] = 'Por favor introduce el código de verificación para continuar a los resultados.';
$txt['error_bad_file'] = 'Lo siento, pero el archivo especificado no se pudo abrir: %1$s';
$txt['error_bad_line'] = 'La línea especificada no es válida.';
$txt['error_draft_not_saved'] = 'Hubo un error guardando el borrador';
$txt['error_topic_locked_already'] = 'Este tema ya fue bloqueado por el moderador.';
$txt['error_topic_unlocked_already'] = 'Este tema ya fue desbloqueado por el moderador.';
$txt['error_topic_sticky_already'] = 'Este tema ya fue fijado por el moderador.';
$txt['error_topic_nonsticky_already'] = 'Este tema ya fue desfijado por el moderador.';

$txt['smiley_not_found'] = 'No se encontró el smiley.';
$txt['smiley_has_no_code'] = 'No se proporcionó código para este smiley.';
$txt['smiley_has_no_filename'] = 'No se proporcionó el nombre del archivo para este smiley.';
$txt['smiley_not_unique'] = 'Un smiley con ese código ya existe previamente.';
$txt['smiley_set_already_exists'] = 'Un smiley con ese URL ya existe previamente';
$txt['smiley_set_not_found'] = 'No se encontró esa colección de smileys';
$txt['smiley_set_dir_not_found'] = 'El directorio del paquete de smileys %1$s es inválido o no es accesible';
$txt['smiley_set_path_already_used'] = 'El URL para esa colección de smileys esta siendo utilizado actualmente por otra colección de smileys.';
$txt['smiley_set_unable_to_import'] = 'No se pudo importar la colección de smileys. El directorio es inválido o no pudo ser accesado.';

$txt['smileys_upload_error'] = 'No se pudo subir el archivo.';
$txt['smileys_upload_error_blank'] = '¡Todos los conjuntos de smileys deben tener una imagen!';
$txt['smileys_upload_error_name'] = '¡Todos los smileys deben tener el mismo nombre de archivo!';
$txt['smileys_upload_error_illegal'] = 'Tipo Ilegal.';

$txt['search_invalid_weights'] = 'Buscar pesos que no estén configurados adecuadamente. Al menos un peso debe estar configurado para que sea diferente de cero. Por favor, informa sobre este error a un administrador.';
$txt['unable_to_create_temporary'] = 'La función de búsqueda no pudo crear tablas temporales.  Por favor, inténtalo nuevamente.';

$txt['package_no_file'] = '¡No se pudo encontrar el archivo!';
$txt['packageget_unable'] = 'No fue posible conectarse al servidor.  Por favor, inténtalo usando <a href="%1$s" target="_blank" rel="noopener">esta URL</a>. ';
$txt['not_on_simplemachines'] = 'Lo sentimos, los paquetes solo pueden ser descargados de esta manera del servidor de simplemachines.org.';
$txt['package_cant_uninstall'] = 'Este paquete o nunca fue instalado, o ya ha sido desinstalado previamente - no puedes desinstalarlo ahora.';
$txt['package_cant_download'] = '¡No puedes descargar o instalar nuevos paquetes ya que no se puede escribir en el directorio "Packages"!';
$txt['package_upload_error_nofile'] = 'No has seleccionado un paquete para subir.';
$txt['package_upload_error_failed'] = 'No se ha podido subir el paquete, ¡por favor comprueba los permisos del directorio!';
$txt['package_upload_error_exists'] = 'El archivo que estás subiendo ya existe en el servidor. Por favor, bórralo e inténtalo nuevamente.';
$txt['package_upload_error_supports'] = 'El gestor de paquetes actualmente sólo soporta estos tipos de archivos: %1$s.';
$txt['package_upload_error_broken'] = 'El paquete que estás intentando subir no es un paquete válido o bien está estropeado.';
$txt['package_theme_upload_error_broken'] = 'Se produjo un fallo al subir el tema debido al siguiente error:<br>&quot;%1$s&quot;';

$txt['package_get_error_not_found'] = 'El paquete que estás intentando instalar no se puede encontrar. Puede que quieras subirlo manualmente a tu directorio &quot;Packages&quot;.';
$txt['package_get_error_missing_xml'] = 'Al paquete que estás intentando instalar le falta el archivo package-info.xml que debe estar en la carpeta principal del paquete.';
$txt['package_get_error_is_zero'] = 'Aunque el paquete ha sido descargado al servidor, parece que está vacío. Revisa si el directorio de paquetes y el subdirectorio &quot;temp&quot; pueden escribirse. Si continúas teniendo este problema, intenta descomprimir el paquete en tu computadora y luego subiendo los archivos a una subcarpeta del directorio de paquetes. Por ejemplo, si el paquete tiene de nombre shout.tar.gz, deberías:<br>1) Descargar el paquete a tu computadora y descomprimir los archivos.<br>2) Usando un cliente FTP, crear una subcarpeta en el directorio &quot;Paquetes&quot;. En este ejemplo podrías llamarla "shout".<br>3) Sube todos los archivos del paquete descomprimido a la carpeta recién creada.<br>4) Volver a la página del administrador de paquetes y el paquete será detectado automáticamente por SMF.';
$txt['package_get_error_packageinfo_corrupt'] = 'SMF no pudo encontrar información válida dentro del archivo package-info.xml incluido en el paquete. Puede que haya un error en la modificació, o el paquete esta corrupto.';
$txt['package_get_error_is_theme'] = 'No puedes instalar temas desde esta sección, para ello utilice la página de administración <a href="{MANAGETHEMEURL}"> Temas y plantillas</a>';
$txt['package_get_error_is_mod'] = 'No puedes instalar modificaciones (mods) desde esta sección, para ello utiliza la página del <a href="{MANAGEMODURL}">administrador de paquetes</a>';
$txt['package_get_error_theme_not_compatible'] = 'Tu tema parece no ser compatible con %1$s. Por favor, contacta con el autor del tema.';
$txt['package_get_error_theme_no_based_on_found'] = 'El tema que está intentando instalar depende de otro tema: %1$s, necesita instalar ese tema primero.';
$txt['package_get_error_theme_no_new_version'] = 'El tema que está intentando instalar ya se encuentra instalado o es una versión desactualizada del mismo. La versión que está intentando instalar es: %1$s y la versión instalada es: %2$s.';

$txt['no_membergroup_selected'] = 'No se seleccionó ningún grupo de usuarios';
$txt['membergroup_does_not_exist'] = 'El grupo no existe o no es válido.';

$txt['at_least_one_admin'] = '¡Debe haber por lo menos un administrador en el foro!';

$txt['error_functionality_not_windows'] = 'Lo sentimos, esta funcionalidad no esta disponible para servidores Windows en este momento.';

// Don't use entities in the below string.
$txt['attachment_not_found'] = 'No se encontró el archivo adjunto';

$txt['error_no_boards_selected'] = '¡No se seleccionó ningún foro válido!';
$txt['error_no_boards_available'] = 'Lo sentimos, actualmente no hay foros disponibles para ti.';
$txt['error_invalid_search_string'] = '¿Olvidaste escribir lo que se buscará?';
$txt['error_invalid_search_string_blacklist'] = 'Tu búsqueda contiene palabras demasiado triviales. Por favor, intenta con una búsqueda diferente.';
$txt['error_search_string_small_words'] = 'Cada palabra debe tener al menos dos caracteres.';
$txt['error_query_not_specific_enough'] = 'La consulta no es lo suficientemente específica. Por favor, utiliza palabras más largas.';
$txt['error_no_messages_in_time_frame'] = 'No se encontraron mensajes en el tiempo que se especificó';
$txt['error_no_labels_selected'] = '¡Ninguna etiqueta fue seleccionada!';
$txt['error_no_search_daemon'] = 'No se ha podido iniciar el servicio de búsqueda';

$txt['profile_errors_occurred'] = 'Ocurrieron los siguientes errores mientras se intentaba guardar tu perfil';
$txt['profile_error_bad_offset'] = 'La diferencia horaria está fuera de rango';
$txt['profile_error_bad_timezone'] = 'La zona horaria introducida no es válida';
$txt['profile_error_no_name'] = 'El campo del nombre se dejó en blanco';
$txt['profile_error_digits_only'] = 'El campo "número de mensajes" sólo puede contener dígitos.';
$txt['profile_error_name_taken'] = 'El nombre de usuario especificado ya está siendo utilizado por alguien más';
$txt['profile_error_name_too_long'] = 'El nombre seleccionado es demasiado largo. Debe ser menor de 60 caracteres de largo';
$txt['profile_error_no_email'] = 'El campo de email se dejó en blanco';
$txt['profile_error_bad_email'] = 'No has proporcionado una dirección de email válida';
$txt['profile_error_email_taken'] = 'Otro usuario ya se encuentra registrado con esa dirección de email';
$txt['profile_error_no_password'] = 'No especificaste tu contraseña';
$txt['profile_error_bad_new_password'] = 'Las nuevas contraseñas que especificaste no coinciden';
$txt['profile_error_bad_password'] = 'La contraseña que proporcionaste es incorrecta';
$txt['profile_error_bad_avatar'] = 'El avatar que has seleccionado es muy grande';
$txt['profile_error_bad_avatar_invalid_url'] = 'El enlace que ha especificado es inválido, por favor verifíquelo.';
$txt['profile_error_bad_avatar_url_too_long'] = 'La URL del avatar que has proporcionado es demasiado largo, por favor, usa una URL más corta.';
$txt['profile_error_bad_avatar_too_large'] = 'La imagen que está intentando utilizar sobrepasa el máximo de dimensiones establecido, por favor utilice una más pequeña.';
$txt['profile_error_bad_avatar_fail_reencode'] = 'La imagen que subiste estaba corrupta y el intento de recuperarla falló.';
// argument(s): the minimum length of user passwords as stored in the settings
$txt['profile_error_password_short'] = 'Tu contraseña debe contener al menos %1$s caracteres.';
$txt['profile_error_password_restricted_words'] = 'Tu contraseña no debe contener tu usuario, dirección email u otras palabras usuales.';
$txt['profile_error_password_chars'] = 'Tu contraseña debe contener una mezcla de letras mayúsculas y minúsculas, así como números.';
$txt['profile_error_already_requested_group'] = '¡Ya tienes una consulta en curso para ese grupo!';
$txt['profile_error_signature_not_yet_saved'] = 'La firma no ha sido guardada.';
$txt['profile_error_personal_text_too_long'] = 'El texto personal es demasiado largo.';
$txt['profile_error_user_title_too_long'] = 'El título personalizado es demasiado largo.';
$txt['profile_error_website_title_too_long'] = 'El título del sitio web es demasiado largo.';
$txt['profile_error_custom_field_mail_fail'] = 'El verificador de la validación de correo electrónico retornó un error, debe introducir un formato válido (usuario@dominio).';
$txt['profile_error_custom_field_regex_fail'] = 'La verificación de expresión regular retornó un error, si no está seguro de qué colocar aquí, por favor contacte con un administrador del foro.';
$txt['profile_error_custom_field_nohtml_fail'] = 'Las etiquetas HTML no están permitidas.';
$txt['profile_error_posts_out_of_range'] = 'El número de publicaciones está fuera de rango';

// Registration form.
$txt['under_age_registration_prohibited'] = 'Lo sentimos, pero los usuarios menores de %1$d años no pueden registrarse en el foro.';
$txt['error_too_quickly'] = 'Hiciste el registro demasiado rápido, más de lo habitual. Por favor, espera un momento e inténtalo de nuevo.';
$txt['mysql_error_space'] = ' - revisa el espacio disponible de la base de datos.';

$txt['icon_not_found'] = 'El icono no se pudo encontrar en el tema por defecto - por favor revisa que la imagen ha sido subida a su respectivo directorio e intenta nuevamente.';
$txt['icon_after_itself'] = '¡El icono no puede colocarse después de sí mismo!';
$txt['icon_name_too_long'] = 'El nombre del inono no puede tener mas de 16 caracteres de largo';

$txt['name_censored'] = 'Lo sentimos, el nombre que intentaste usar, %1$s, contiene palabras que han sido censuradas. Por favor intenta con otro nombre.';

$txt['poll_already_exists'] = '¡Un tema solamente puede contener una encuesta asociada!';
$txt['poll_not_found'] = '¡No hay ninguna encuesta asociada a este tema!';

$txt['error_while_adding_poll'] = 'Ocurrieron los siguientes errores al añadir esta encuesta';
$txt['error_while_editing_poll'] = 'Ocurrieron los siguientes errores al editar esta encuesta';

$txt['loadavg_search_disabled'] = 'Debido a la sobrecarga del servidor, la función de búsquedas no está disponible actualmente. Por favor, inténtalo de nuevo más tarde.';
$txt['loadavg_generic_disabled'] = 'Lo sentimos, debido a la sobrecarga del servidor, esta funciín no está disponible actualmente.';
$txt['loadavg_allunread_disabled'] = 'Los recursos del servidor están sobrecargados como para encontrar todos los temas que no has leído.';
$txt['loadavg_unreadreplies_disabled'] = 'El servidor está sobrecargado. Por favor, inténtalo de nuevo más tarde.';
$txt['loadavg_show_posts_disabled'] = 'Por favor, inténtalo de nuevo más tarde.  Los mesajes de este usuario no están disponibles debido a la sobrecarga del servidor.';
$txt['loadavg_unread_disabled'] = 'Los recursos del servidor se encuentran temporalmente bajo una demanda excesivamente alta, y no se pueden listar tus temas sin leer en estos momentos.';
$txt['loadavg_userstats_disabled'] = 'Las estadísticas de este miembro no se encuentran disponibles en este momento debido a la sobrecarga del servidor. Por favor, intente más tarde.';

$txt['cannot_edit_permissions_inherited'] = 'No puedes editar permisos inherentes directamente, debes editar el grupo padre o bien la correspondencia del grupo.';

$txt['mc_no_modreport_specified'] = 'Necesitas especificar que informe deseas ver.';
$txt['mc_no_modreport_found'] = 'El reporte especificado no existe o está fuera de tus límites.';

$txt['st_cannot_retrieve_file'] = 'No se pudo obtener el archivo %1$s.';
$txt['admin_file_not_found'] = 'No se pudo cargar el archivo solicitado: %1$s.';

$txt['themes_none_selectable'] = 'Debe seleccionarse al menos un tema.';
$txt['themes_default_selectable'] = 'El tema por defecto debe ser un tema seleccionable.';
$txt['ignoreboards_disallowed'] = 'La opción para ignorar foros no ha sido habilitada.';

$txt['mboards_delete_error'] = '¡Ninguna categoría seleccionada!';
$txt['mboards_delete_board_error'] = '¡Ningún foro seleccionado!';

$txt['mboards_parent_own_child_error'] = 'No puedes hacer de un foro un subforo de si mismo.';
$txt['mboards_board_own_child_error'] = 'No puedes hacer un foro como subforo de si mismo.';

$txt['smileys_upload_error_notwritable'] = 'Los siguientes directorios de emoticonos son tienen permisos de escritura: %1$s';
$txt['smileys_upload_error_types'] = 'La imagen sólo puede tener una de las siguientes extensiones: %1$s.';

$txt['change_email_success'] = 'Tu dirección email ha cambiado, se enviará un nuevo email de activación a dicha dirección.';
$txt['resend_email_success'] = 'Email de activación enviado correctamente.';

$txt['custom_option_need_name'] = '¡La opción del perfil debe tener un nombre!';
$txt['custom_option_not_unique'] = '¡El nombre del campo no es único!';
$txt['custom_option_regex_error'] = 'La expresión regular introducida es inválida';

$txt['warning_no_reason'] = 'Es necesario que entre una razón por cual estas alterando el estatus de alerta para un miembro.';
$txt['warning_notify_blank'] = 'Has seleccionado notificar al usuario pero no rellenaste los campos Asunto/Mensaje.';

$txt['cannot_connect_doc_site'] = 'No se ha podido conectar al Manual Online de Simple Machines. Por favor, comprueba que la configuración de tu servidor permite conexiones externas e inténtalo de nuevo más tarde.';

$txt['movetopic_no_reason'] = 'Debes introducir una razon para mover el tema, o bien desactivar la opción \'publicar un tema de redirección\'.';

$txt['error_custom_field_too_long'] = 'El campo &quot;%1$s&quot; no puede tener una longitud superior a los %1$d caracteres.';
$txt['error_custom_field_invalid_email'] = 'El campo &quot;%1$s&quot; debe ser una dirección de email válida.';
$txt['error_custom_field_not_number'] = 'El campo &quot;%1$s&quot; debe ser numérico.';
$txt['error_custom_field_inproper_format'] = 'El campo &quot;%1$s&quot; tiene un formato no válido.';
$txt['error_custom_field_empty'] = 'El campo &quot;%1$s&quot; no puede ser dejado en blanco.';

$txt['email_no_template'] = 'La plantilla de email &quot;%1$s&quot; no pudo ser encontrada.';

$txt['search_api_missing'] = 'No se pudo encontrar la API de búsqueda. Por favor, contacte con el administrador para que compruebe que se han subido los archivos adecuados.';
$txt['search_api_not_compatible'] = 'La API de búsqueda seleccionada que está usando el foro está obsoleta - volviendo a la búsqueda estándar. Compruebe el archivo %1$s.';

// Registration Agreement
$txt['error_no_agreement'] = '¡No existe un acuerdo de registro para mostrar!';
$txt['error_no_privacy_policy'] = 'No se ha creado una política de privacidad para este foro.';

// Unsubscribe
$txt['unsubscribe_invalid'] = 'El enlace para cancelar la suscripción que lo trajo aquí no parece ser válido.';

// Handling hook calls
$txt['hook_fail_loading_file'] = 'Hook call: No fue posible cargar el archivo de la ruta: %s';
$txt['hook_fail_call_to'] = 'Hook call: La función «%1$s» del archivo %2$s no pudo ser llamada.';

$txt['file_not_created'] = 'El archivo en "%1$s" no pudo ser creado. Por favor, asegúrate de que el directorio tiene los permisos adecuados.';
$txt['file_minimize_fail'] = 'El archivo «%1$s» podría no estar localizado en el tema actual o por defecto y por lo tanto no fue incluido en en el archivo minificado.';
$txt['unlink_minimized_fail'] = 'Los siguientes archivos no han podido ser eliminados. Por favor, revisa los permisos de los propios archivos y del directorio raíz.<br>%1$s ';

// SubActions failed attempt.
$txt['sub_action_fail'] = 'No se ha podido hacer una llamada a %s.';

// Restore topic/posts
$txt['cannot_restore_first_post'] = 'No puedes restaurar el primer mensaje de un tema.';
$txt['parent_topic_missing'] = 'El tema padre del mensaje que estás intentando restaurar ha sido eliminado.';
$txt['restored_disabled'] = 'Se ha deshabilitado la restauración de temas.';
$txt['restore_not_found'] = 'Los siguientes mensajes no pudieron ser restaurados; el tema original puede haber sido eliminado:<ul style="margin-top: 0px;">%1$s</ul>Tendrás que moverlos manualmente.';

$txt['error_invalid_dir'] = 'El directorio introducido no es válido.';

// json errors.
$txt['json_JSON_ERROR_DEPTH'] = 'Error de decodificación de Json: La profundidad máxima de apilamiento ha sido excedida.';
$txt['json_JSON_ERROR_STATE_MISMATCH'] = 'Error de decodificación de JSON: JSON inválido o malformado.';
$txt['json_JSON_ERROR_CTRL_CHAR'] = 'Error de decodificación de JSON: Error en el control de caracteres, posiblemente debido a una codificación incorrecta';
$txt['json_JSON_ERROR_SYNTAX'] = 'Error de decodificación de JSON: Error de sintaxis, JSON malformado';
$txt['json_JSON_ERROR_UTF8'] = 'Error de decodificación de JSON: Caracteres UTF-8 malformados, posiblemente debido a una codificación incorrecta';
$txt['json_JSON_ERROR_RECURSION'] = 'Error de decodificación de JSON: Hay una o más referencias recursivas en el valor a ser codificado';
$txt['json_JSON_ERROR_INF_OR_NAN'] = 'Error de decodificación de JSON: Hay uno o más valores NAN o INF en el valor a ser codificado';
$txt['json_JSON_ERROR_UNSUPPORTED_TYPE'] = 'Error de decodificación de JSON: Se suministró un valor que no puede ser codificado';
$txt['json_unknown'] = 'Error Desconocido';

// The following strings are used with various trigger_error calls. Most include the function that they're called from.
// Board errors
$txt['create_board_missing_options'] = 'createBoard(): Una o más de las opciones necesarias no están definidas';
$txt['move_board_no_target'] = 'createBoard(): El foro de destino no está especificado';
$txt['modify_board_move_to_incorrect'] = 'modifyBoard(): El valor move_to \'%s\' es incorrecto';

// Category errors
$txt['create_category_no_name'] = 'createCategory(): Se requiere un nombre de categoría';
$txt['cannot_move_to_deleted_category'] = 'deleteCategories(): No se pueden mover los foros a una categoría que se está borrando';

// Package manager error
$txt['undefined_xml_attribute'] = 'Atributo XML no definido: %s';
$txt['undefined_xml_element'] = 'Elemento XML no definido: %s';

// loadMemberData() error
$txt['invalid_member_data_set'] = 'loadMemberData(): Conjunto de usuarios no válidos: \'%s\'';

// loadMemberContext() error
$txt['user_not_loaded'] = 'loadMemberContext(): La Id del usuario \'%d\' no se cargo previamente por loadMemberData()';

// logActions() errors
$txt['logActions_not_array'] = 'logActions(): los datos no son una matriz con acción \'%s\'';
$txt['logActions_topic_not_numeric']  = 'logActions(): los temas de los datos no son un número';
$txt['logActions_message_not_numeric'] = 'logActions(): el mensaje de los datos no es un número';
$txt['logActions_member_not_numeric'] = 'logActions(): los usuarios de los datos no son un número';
$txt['logActions_board_not_numeric'] = 'logActions(): el foro de datos no es un número';
$txt['logActions_board_to_not_numeric'] = 'logActions(): los datos de board_to no es un número';

// Login error
$txt['login_no_session_cookie'] = 'Login2(): No se puede iniciar sesión sin una sesión o cookie';

// PM error (see isAccessiblePM function)
$txt['pm_invalid_validation_type'] = 'Se proporciono un tipo de validación indefinido';

$txt['check_submit_once_invalid_action'] = 'checkSubmitOnce(): Acción inválida \'%s\'';

$txt['get_server_versions_no_database'] = 'getServerVersions(): debes estar conectado a la base de datos para obtener la versión del servidor';

// Subs-Db-postgresql.php line 801
$txt['postgres_id_not_int'] = 'Intentando devolver la ID de un campo que no es un Int';

$txt['add_members_to_group_invalid_type'] = 'addMembersToGroup(): Tipo desconocido \'%s\'';

$txt['get_members_online_stats_invalid_sort'] = 'El método de clasificación para la función getMembersOnlineStats() no está permitido';

$txt['get_board_list_cannot_include_and_exclude'] = 'getBoardList(): No se permite la configuración de foros_excluidos y foros_incluidos.';

$txt['parse_path_filename_required'] = 'parse_path(): Nunca debe haber un nombre de archivo vacío';
$txt['parse_modification_filename_not_full_path'] = 'parseModification (): ¡El nombre de archivo \'%s\' no es una ruta completa!';
$txt['parse_boardmod_filename_not_full_path'] = 'parseBoardMod(): ¡El nombre de archivo \'%s\' no es una ruta completa!';
$txt['package_flush_cache_not_writable'] = 'package_flush_cache(): algunos archivos todavía no son modificables';

$txt['create_post_invalid_member_id'] = 'createPost(): Id de usuario inválido \'%d\'';

$txt['invalid_statistic_type'] = 'updateStats(): tipo de estadística inválido \'%s\'';

$txt['fetch_web_data_bad_url'] = 'fetch_web_data(): URL incorrecta';

?>