<?php
// Version: 2.1.0; Modlog

$txt['modlog_date'] = 'Fecha';
$txt['modlog_member'] = 'Usuario';
$txt['modlog_position'] = 'Posición';
$txt['modlog_action'] = 'Acción';
$txt['modlog_ip'] = 'IP';
$txt['modlog_search_result'] = 'Resultados de la búsqueda';
$txt['modlog_total_entries'] = 'Nº total de entradas';
$txt['modlog_ac_approve_topic'] = 'Tema &quot;{topic}&quot; aprobado por &quot;{member}&quot;';
$txt['modlog_ac_unapprove_topic'] = 'Tema sin aprobar  &quot;{topic}&quot; por &quot;{member}&quot; ';
$txt['modlog_ac_approve'] = 'Mensaje &quot;{subject}&quot; en &quot;{topic}&quot; aprobado por &quot;{member}&quot;';
$txt['modlog_ac_unapprove'] = 'Mensaje sin aprobar &quot;{subject}&quot; en &quot;{topic}&quot; por &quot;{member}&quot; ';
$txt['modlog_ac_lock'] = 'Cerrado &quot;{topic}&quot;';
$txt['modlog_ac_warning'] = '{member} advertido por &quot;{message}&quot; ';
$txt['modlog_ac_unlock'] = 'Reabierto &quot;{topic}&quot;';
$txt['modlog_ac_sticky'] = 'Fijado &quot;{topic}&quot;';
$txt['modlog_ac_unsticky'] = 'Despegado &quot;{topic}&quot;';
$txt['modlog_ac_delete'] = 'Borrado &quot;{subject}&quot; por &quot;{member}&quot; de &quot;{topic}&quot;';
$txt['modlog_ac_delete_member'] = 'Borrado el usuario &quot;{name}&quot;';
$txt['modlog_ac_remove'] = 'Eliminado el tema &quot;{topic}&quot; de &quot;{board}&quot;';
$txt['modlog_ac_modify'] = 'Editado &quot;{message}&quot; por &quot;{member}&quot;';
$txt['modlog_ac_merge'] = 'Unidos dos temas para crear &quot;{topic}&quot;';
$txt['modlog_ac_split'] = 'Dividido &quot;{topic}&quot; para crear &quot;{new_topic}&quot;';
$txt['modlog_ac_move'] = 'Movido &quot;{topic}&quot; desde &quot;{board_from}&quot; hasta &quot;{board_to}&quot;';
$txt['modlog_ac_profile'] = 'Editado el perfil de &quot;{member}&quot;';
$txt['modlog_ac_pruned'] = 'Purgados algunos posts de hace más de {days} días';
$txt['modlog_ac_news'] = 'Editadas las noticias';
$txt['modlog_ac_clearlog_moderate'] = 'Limpiado el registro de moderación';
$txt['modlog_ac_clearlog_admin'] = 'Limpiado el registro de administración';
$txt['modlog_enter_comment'] = 'Introducir comentario de moderación';
$txt['modlog_moderation_log'] = 'Log de moderación';
$txt['modlog_moderation_log_desc'] = 'A continuación hay una lista con todas las acciones de moderación llevadas a cabo por moderadores del foro.';
$txt['modlog_no_entries_found'] = 'Actualmente no hay registros en el log de moderación.';
$txt['modlog_remove'] = 'Eliminar seleccionados';
$txt['modlog_removeall'] = 'Eliminar todo';
$txt['modlog_remove_selected_confirm'] = '¿Estás seguro de que quieres eliminar las entradas del registro seleccionadas?';
$txt['modlog_remove_all_confirm'] = '¿Estás seguro de que quieres limpiar el registro completamente?';
$txt['modlog_go'] = 'Ir';
$txt['modlog_add'] = 'Añadir';
$txt['modlog_search'] = 'Búsqueda rápida';
$txt['modlog_by'] = 'Por';
$txt['modlog_id'] = '<em>(ID:%1$d)</em>';

$txt['modlog_ac_add_warn_template'] = 'Añadida plantilla de aviso: &quot;{template}&quot;';
$txt['modlog_ac_modify_warn_template'] = 'Editada la plantilla de aviso: &quot;{template}&quot;';
$txt['modlog_ac_delete_warn_template'] = 'Eliminada la plantilla de aviso: &quot;{template}&quot;';

$txt['modlog_ac_ban'] = 'Añadidos desencadenantes de baneo:';
$txt['modlog_ac_ban_remove'] = 'Disparadores de prohibición de acceso eliminados:';
$txt['modlog_ac_ban_trigger_member'] = ' <em>Usuario:</em> {member}';
$txt['modlog_ac_ban_trigger_email'] = ' <em>Correo electrónico: </em> {email}';
$txt['modlog_ac_ban_trigger_ip_range'] = ' <em>IP: </em> {ip_range}';
$txt['modlog_ac_ban_trigger_hostname'] = ' <em>Nombre del host:</em> {hostname}';

$txt['modlog_admin_log'] = 'Log de administración';
$txt['modlog_admin_log_desc'] = 'A continuación hay una lista de las acciones administrativas que han sido registradas en su foro.';
$txt['modlog_admin_log_no_entries_found'] = 'Actualmente no existen registros de administración.';
$txt['modlog_admin_log_gdpr_no_delete'] = '<strong>Tenga en cuenta:</strong> Las entradas para las actualizaciones del acuerdo de registro y la política de privacidad no se pueden eliminar de este registro.';

// Admin type strings.
$txt['modlog_ac_upgrade'] = 'Actualizado el foro a la versión {version}';
$txt['modlog_ac_install'] = 'Instalada la versión {version}';
$txt['modlog_ac_add_board'] = 'Añadido un nuevo foro: &quot;{board}&quot;';
$txt['modlog_ac_edit_board'] = 'Editado el foro &quot;{board}&quot;';
$txt['modlog_ac_delete_board'] = 'Eliminado el foro &quot;{boardname}&quot;';
$txt['modlog_ac_add_cat'] = 'Añadida una nueva categoría, &quot;{catname}&quot;';
$txt['modlog_ac_edit_cat'] = 'Editada la categoría &quot;{catname}&quot;';
$txt['modlog_ac_delete_cat'] = 'Eliminada la categoría &quot;{catname}&quot;';

$txt['modlog_ac_delete_group'] = 'Eliminado el grupo &quot;{group}&quot;';
$txt['modlog_ac_add_group'] = 'Añadido el grupo &quot;{group}&quot;';
$txt['modlog_ac_edited_group'] = 'Editado el grupo &quot;{group}&quot;';
$txt['modlog_ac_added_to_group'] = 'Añadido el usuario &quot;{member}&quot; al grupo &quot;{group}&quot;';
$txt['modlog_ac_removed_from_group'] = 'Eliminado el usuario &quot;{member}&quot; del grupo &quot;{group}&quot;';
$txt['modlog_ac_removed_all_groups'] = 'Eliminado el usuario &quot;{member}&quot; de todos los grupos';

$txt['modlog_ac_agreement_updated'] = 'Se actualizó el acuerdo de registro en {idioma}';
$txt['modlog_ac_policy_updated'] = 'Se actualizó la política de privacidad en {idioma}';

$txt['modlog_ac_remind_member'] = 'Enviado un recordatorio a &quot;{member}&quot; para activar su cuenta';
$txt['modlog_ac_approve_member'] = 'Aprobada/Activada la cuenta del usuario &quot;{member}&quot;';
$txt['modlog_ac_newsletter'] = 'Boletín enviado';

$txt['modlog_ac_install_package'] = 'Nuevo paquete instalado: &quot;{package}&quot;, version {version} ';
$txt['modlog_ac_upgrade_package'] = 'Paquete actualizado: &quot;{package}&quot; to version {version} ';
$txt['modlog_ac_uninstall_package'] = 'Paquete desinstalado: &quot;{package}&quot;, version {version} ';

// Restore topic.
$txt['modlog_ac_restore_topic'] = 'Restaurado el tema &quot;{topic}&quot; desde &quot;{board}&quot; hasta &quot;{board_to}&quot;';
$txt['modlog_ac_restore_posts'] = 'Restaurados los posts desde &quot;{subject}&quot; hasta el tema &quot;{topic}&quot; en el foro &quot;{board}&quot;.';

$txt['modlog_parameter_guest'] = '<em>Invitado</em>';

$txt['modlog_ac_approve_attach'] = '"{filename}" se aprobó en "{message}"';
$txt['modlog_ac_remove_attach'] = 'Eliminado el archivo sin aprobar &quot;{filename}&quot; en &quot;{message}&quot; ';

// Handling reports on posts
$txt['modlog_report'] = 'informe';
$txt['modlog_ac_close_report'] = '{report} sobre &quot;{message}&quot; cerrado';
$txt['modlog_ac_ignore_report'] = 'Ignorado {report} en &quot;{message}&quot;';
$txt['modlog_ac_open_report'] = 'Reabierto {report} en &quot;{message}&quot;';
$txt['modlog_ac_unignore_report'] = 'Deshecho el descarte de {report} en &quot;{message}&quot; ';

// Handling reports on users
$txt['modlog_ac_close_user_report'] = 'Cerrado {report} en perfil de {member}';
$txt['modlog_ac_ignore_user_report'] = 'Ignorado {report} en perfil de {member}';
$txt['modlog_ac_open_user_report'] = 'Reabierto{report} en perfil de {member}';
$txt['modlog_ac_unignore_user_report'] = 'Deshecho el descarte de {report} en el perfil de {member}';

// Poll stuff
$txt['modlog_ac_add_poll'] = 'Se añadió una encuesta a &quot;{topic}&quot;';
$txt['modlog_ac_edit_poll'] = 'Se editó la encuesta en &quot;{topic}&quot;';
$txt['modlog_ac_lock_poll'] = 'Se cerraron las votaciones en la encuesta en &quot;{topic}&quot;';
$txt['modlog_ac_remove_poll'] = 'Se eliminó la encuesta de &quot;{topic}&quot; ';
$txt['modlog_ac_reset_poll'] = 'Votos restablecidos en la encuesta en &quot;{topic}&quot;';
$txt['modlog_ac_unlock_poll'] = 'Se abrieron las votaciones en la encuesta en &quot;{topic}&quot;';

?>