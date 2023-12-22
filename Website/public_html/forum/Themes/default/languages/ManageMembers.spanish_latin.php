<?php
// Version: 2.1.0; ManageMembers

global $context;

$txt['groups'] = 'Grupos';
$txt['viewing_groups'] = 'Viendo Grupos';

$txt['membergroups_title'] = 'Manejar Grupos de usuarios';
$txt['membergroups_description'] = 'Los grupos de usuarios sirven para agrupar usuarios que tienen la misma configuración de permisos, apariencia, o derechos de acceso. Algunos grupos están basados en el número de mensajes que un usuario ha publicado. Puedes asignar a alguien a un grupo seleccionando su perfil y cambiando la configuración de su cuenta.';
$txt['membergroups_modify'] = 'Modificar';

$txt['membergroups_add_group'] = 'Agregar grupo';
$txt['membergroups_regular'] = 'Grupos regulares';
$txt['membergroups_post'] = 'Grupos basados en el conteo de mensajes';
$txt['membergroups_guests_na'] = 'n/d';

$txt['membergroups_group_name'] = 'Nombre del grupo de usuarios';
$txt['membergroups_new_board'] = 'Foros Visibles';
$txt['membergroups_new_board_desc'] = 'Foros que el grupo de usuarios puede ver.';
$txt['membergroups_new_board_post_groups'] = '<em>Nota: normalmente, los grupos basados en conteo de mensajes no necesitan acceso porque el grupo en el que el usuario se encuentra les dará acceso.</em>';
$txt['membergroups_new_as_inherit'] = 'heredar de';
$txt['membergroups_new_as_type'] = 'por tipo';
$txt['membergroups_new_as_copy'] = 'en base a';
$txt['membergroups_new_copy_none'] = '(ninguno)';
$txt['membergroups_can_edit_later'] = 'puedes editarlos después.';
$txt['membergroups_can_manage_access'] = 'Este grupo puede ver todos los foros porque sus miembros tienen asignada la capacidad de gestionar foros.';

$txt['membergroups_cannot_delete_paid'] = 'Este grupo no puede ser eliminado, pues está siendo actualmente utilizado por la(s) siguiente(s) subscripción(es) de pago: %1$s ';

$txt['membergroups_edit_group'] = 'Editar Grupo';
$txt['membergroups_edit_name'] = 'Nombre del grupo';
$txt['membergroups_edit_inherit_permissions'] = 'Heredar permisos';
$txt['membergroups_edit_inherit_permissions_desc'] = 'Selecciona &quot;No&quot; para establecer que cada grupo tenga sus propios permisos.';
$txt['membergroups_edit_inherit_permissions_no'] = 'No - Utilizar Permisos Únicos';
$txt['membergroups_edit_inherit_permissions_from'] = 'Heredar desde';
$txt['membergroups_edit_hidden'] = 'Visibilidad';
$txt['membergroups_edit_hidden_no'] = 'Visible';
$txt['membergroups_edit_hidden_boardindex'] = 'Visible - Excepto en Grupo';
$txt['membergroups_edit_hidden_all'] = 'Invisible ';
// Do not use numeric entities in the below string.
$txt['membergroups_edit_hidden_warning'] = '¿Estás seguro de que quieres impedir que se asigne este grupo como un grupo primario de usuarios?\n\nAl hacerlo, restringirás la asignación sólo a los grupos adicionales, y actualizarás todos los usuarios &quot;primarios&quot; como si sólo tuvieran un grupo adicional.\n\nTambién eliminará el grupo como moderador de cualquier foro al que esté actualmente asignado como tal.';
$txt['membergroups_edit_desc'] = 'Descripción del Grupo';
$txt['membergroups_edit_group_type'] = 'Tipo de Grupo';
$txt['membergroups_edit_select_group_type'] = 'Selecciona el Tipo de Grupo';
$txt['membergroups_group_type_private'] = 'Privado <span class="smalltext">(Debe asignarse una pertenencia)</span>';
$txt['membergroups_group_type_protected'] = 'Protegido <span class="smalltext">(Sólo los administradores lo pueden gestionar y asignar)</span> ';
$txt['membergroups_group_type_request'] = 'Solicitable <span class="smalltext">(El usuario puede solicitar una pertenencia)</span>';
$txt['membergroups_group_type_free'] = 'Libre <span class="smalltext">(El usuario puede ingresar o salir de un grupo según desee)</span>';
$txt['membergroups_group_type_post'] = 'Basado en mensajes <span class="smalltext">(La pertenencia está basada en el número de mensajes)</span>';
$txt['membergroups_min_posts'] = 'Número de mensajes requeridos';
$txt['membergroups_online_color'] = 'Color en la lista de usuarios en línea';
$txt['membergroups_icon_count'] = 'Número de imágenes de icono';
$txt['membergroups_icon_image'] = 'Nombre de archivo de la imagen de icono';
$txt['membergroups_icon_image_note'] = 'Puedes subir imágenes personalizadas al directorio predeterminado del tema para poder seleccionarlas aquí. Imágenes diferentes pueden ser usadas en temas distintos, sólo asígnales el mismo nombre.';
$txt['membergroups_icon_image_size'] = 'Tamaño máximo permitido 128x32px';
$txt['membergroups_max_messages'] = 'Máx. mensajes privados';
$txt['membergroups_max_messages_note'] = '0 = ilimitado';
$txt['membergroups_tfa_force'] = 'Forzar autenticación de factor doble (2FA) para este grupo de usuarios';
$txt['membergroups_tfa_force_note'] = '¡Asegúrate de avisar a tus usuarios antes de activar esto!';
$txt['membergroups_edit_save'] = 'Guardar';
$txt['membergroups_delete'] = 'Borrar';
$txt['membergroups_confirm_delete'] = '¡¿Estás seguro que deseas borrar este grupo?!';
$txt['membergroups_confirm_delete_mod'] = 'Este grupo está asignado para moderar uno o más foros. ¿Estás seguro de que quieres borrarlo?';
$txt['membergroups_swap_mod'] = 'Este grupo está asignado para moderar uno o más foros. Cambiarlo a un grupo de publicación tendrá como consecuencia que sea eliminado como moderador de esos foros.';

$txt['membergroups_members_title'] = 'Mostrando todos los usuarios del grupo';
$txt['membergroups_members_group_members'] = 'Usuarios del Grupo';
$txt['membergroups_members_no_members'] = 'Este grupo se encuentra actualmente vacío';
$txt['membergroups_members_add_title'] = 'Agregar un usuario a este grupo';
$txt['membergroups_members_add_desc'] = 'Lista de Usuarios a Agregar';
$txt['membergroups_members_add'] = 'Agregar Usuarios';
$txt['membergroups_members_remove'] = 'Eliminarlo del Grupo';
$txt['membergroups_members_last_active'] = 'Último Activo';
$txt['membergroups_members_additional_only'] = 'Añadir sólo como grupo adicional.';
$txt['membergroups_members_group_moderators'] = 'Moderadores del Grupo';
$txt['membergroups_members_description'] = 'Descripción';
// Use javascript escaping in the below.
$txt['membergroups_members_deadmin_confirm'] = '¿Estás seguro de que quieres eliminarte del grupo de Administración?';

$txt['membergroups_postgroups'] = 'Grupos basados en el número de mensajes';
$txt['membergroups_settings'] = 'Configuración de Grupos';
$txt['groups_manage_membergroups'] = 'Grupos permitidos para cambiar grupos';
$txt['membergroups_select_permission_type'] = 'Seleccionar perfil de permisos';
$txt['membergroups_images_url'] = 'Themes/default/images/membericons/ ';
$txt['membergroups_select_visible_boards'] = 'Mostrar foros';
$txt['membergroups_members_top'] = 'Miembros';
$txt['membergroups_name'] = 'Nombre';
$txt['membergroups_icons'] = 'Iconos';

$txt['admin_browse_approve'] = 'Usuarios que están esperando aprobación de sus cuentas';
$txt['admin_browse_approve_desc'] = 'Desde aquí puedes manejar a todos los usuarios que están esperando la aprobación de sus cuentas.';
$txt['admin_browse_activate'] = 'Usuarios que sus cuentas están esperando activación';
$txt['admin_browse_activate_desc'] = 'Esta pantalla lista todos los usuarios que aún no han activado sus cuentas.';
$txt['admin_browse_awaiting_approval'] = 'Esperando Aprobación (%1$d)';
$txt['admin_browse_awaiting_activate'] = 'Esperando Activación (%1$d)';

$txt['admin_browse_username'] = 'Nombre de usuario';
$txt['admin_browse_email'] = 'Dirección email';
$txt['admin_browse_ip'] = 'Dirección IP';
$txt['admin_browse_registered'] = 'Registrado';
$txt['admin_browse_id'] = 'ID ';
$txt['admin_browse_with_selected'] = 'Con selección';
$txt['admin_browse_no_members_approval'] = 'Ningún usuario está esperando aprovación.';
$txt['admin_browse_no_members_activate'] = 'Ningún usuario tiene actualmente su cuenta pendiente de activar.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = '¿Todos los usuarios seleccionados?';
$txt['admin_browse_outstanding_warn'] = '¿todos los usuarios afectados?';
$txt['admin_browse_w_approve'] = 'Aprobar';
$txt['admin_browse_w_activate'] = 'Activar';
$txt['admin_browse_w_delete'] = 'Borrar';
$txt['admin_browse_w_reject'] = 'Rechazar';
$txt['admin_browse_w_remind'] = 'Recordar';
$txt['admin_browse_w_approve_deletion'] = 'Aprobar (Borrar Cuentas)';
$txt['admin_browse_w_email'] = 'y enviar email';
$txt['admin_browse_no_email'] = '(sin correo electrónico)';
$txt['admin_browse_w_approve_require_activate'] = 'Esperando activación o aprobación';

$txt['admin_browse_filter_by'] = 'Filtrar por';
$txt['admin_browse_filter_show'] = 'Mostrando';
$txt['admin_browse_filter_type_0'] = 'Cuentas nuevas sin activar';
$txt['admin_browse_filter_type_2'] = 'Cambios de Email sin activar';
$txt['admin_browse_filter_type_3'] = 'Nuevas cuentas sin aprobar';
$txt['admin_browse_filter_type_4'] = 'Borrado de cuentas sin aprobar';
$txt['admin_browse_filter_type_5'] = 'Cuentas de menores de edad sin aprobar';

$txt['admin_browse_outstanding'] = 'Usuarios Excepcionales';
$txt['admin_browse_outstanding_days_1'] = 'Con todos los usuarios que se registraron hace más de';
$txt['admin_browse_outstanding_days_2'] = 'días';
$txt['admin_browse_outstanding_perform'] = 'Realiza la siguiente acción';
$txt['admin_browse_outstanding_go'] = 'Realizar Acción';

$txt['check_for_duplicate'] = 'Comprobar Duplicados';
$txt['dont_check_for_duplicate'] = 'No Comprobar Duplicados';
$txt['duplicates'] = 'Duplicados';

$txt['not_activated'] = 'No activado';

?>