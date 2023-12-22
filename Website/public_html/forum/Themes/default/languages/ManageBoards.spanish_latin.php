<?php
// Version: 2.1.0; ManageBoards

$txt['boards_and_cats'] = 'Manejar Foros y Categorías';
$txt['order'] = 'Orden';
$txt['full_name'] = 'Nombre completo';
$txt['name_on_display'] = 'Este es el nombre que será mostrado.';
$txt['boards_and_cats_desc'] = 'Edita tus categorías y foros aquí. Lista múltiples moderadores como <em>&quot;nombredeusuario&quot;, &quot;nombredeusuario&quot;</em>. (Éstos deben ser nombres de usuarios, no los nombres que se muestran)<br>Para crear un nuevo foro, haz clic en el botón Nuevo Foro. Para hacer al nuevo foro un subforo del foro actual, selecciona "Subforo de..." en el menú desplegable Orden cuando estés creando el foro.';
$txt['parent_members_only'] = 'Usuarios no agrupados';
$txt['parent_guests_only'] = 'Visitantes';
$txt['cat_delete_confirm'] = '¿Seguro que quieres eliminar esta  categoría?';
$txt['board_delete_confirm'] = '¿Seguro que quieres eliminar este foro?';

$txt['cat_edit'] = 'Editar Categoría';
$txt['collapse_enable'] = 'Colapsable';
$txt['collapse_desc'] = 'Permitir a los usuarios colapsar esta categoría';
$txt['cat_modify'] = '(modificar)';

$txt['mboards_order_after'] = 'Después ';
$txt['mboards_order_inside'] = 'Dentro ';
$txt['mboards_order_first'] = 'En primer lugar';

$txt['mboards_new_board'] = 'Agregar foro';
$txt['mboards_new_cat_name'] = 'Nueva Categoría';
$txt['mboards_add_cat_button'] = 'Agregar Categoría';
$txt['mboards_new_board_name'] = 'Nuevo Foro';

$txt['mboards_name'] = 'Nombre';
$txt['mboards_modify'] = 'modificar';
$txt['mboards_permissions'] = 'permisos';
// Don't use entities in the below string.
$txt['mboards_permissions_confirm'] = '¿Estás seguro que deseas cambiar este foro a que use permisos locales?';

$txt['mboards_delete_cat'] = 'Borrar Categoría';
$txt['mboards_delete_board'] = 'Borrar Foro';

$txt['mboards_delete_cat_contains'] = 'Al borrar esta categoría también borrarás los siguientes foros, incluyendo todos los temas, mensajes y archivos adjuntos que contenga cada foro.';
$txt['mboards_delete_option1'] = 'Borrar categoría con todos los foros que contiene.';
$txt['mboards_delete_option2'] = 'Borrar categoría y mover todos los foros que contiene a';
$txt['mboards_delete_board_contains'] = 'Borrando este foro moverá también sus subforos, incluyendo todos los temas, mensajes y archivos adjuntos dentro de cada foro';
$txt['mboards_delete_board_option1'] = 'Borrar foro y mover todos sus subforos al nivel de categoría.';
$txt['mboards_delete_board_option2'] = 'Borrar foro y mover todos sus subforos a';
$txt['mboards_delete_what_do'] = 'Por favor, selecciona que te gustaría hacer con esos foros';
$txt['mboards_delete_confirm'] = 'Confirmar';
$txt['mboards_delete_cancel'] = 'Cancelar';

$txt['mboards_category'] = 'Categoría';
$txt['mboards_description'] = 'Descripción';
$txt['mboards_description_desc'] = 'Una breve descripción de tu foro. No se permite el uso de HTML, aunque puedes usar las siguientes etiquetas BBC: {allowed_tags}';
$txt['mboards_cat_description_desc'] = 'Una descripción breve de tu categoría. El uso de HTML no está permitido, aunque sí puedes usar las siguientes etiquetas BBC: {allowed_tags}';
$txt['mboards_groups'] = 'Grupos permitidos';
$txt['mboards_groups_desc'] = 'Grupos de usuarios a los que se les permite acceder a este foro.<br><em>Nota: si el usuario pertenece a un grupo marcado, tendrá acceso a este foro.</em>';
$txt['mboards_groups_regular_members'] = 'Este grupo contiene todos los miembros que no tienen asignado ningún grupo primario.';
$txt['mboards_groups_post_group'] = 'Este grupo es un grupo basado en el número de mensajes.';
$txt['mboards_moderators'] = 'Moderadores';
$txt['mboards_moderators_desc'] = 'Usuarios adicionales que tendrán privilegios de moderación en este foro. Los administradores no están listados aquí.';
$txt['mboards_moderator_groups'] = 'Grupos de Moderador';
$txt['mboards_moderator_groups_desc'] = 'Grupos cuyos miembros tienen privilegios de moderación en este foro. Ten en cuenta que esto está limitado a grupos que no están basados en mensajes (por ejemplo, en el número de mensajes) y que no están "ocultos".';
$txt['mboards_count_posts'] = 'Contar Mensajes';
$txt['mboards_count_posts_desc'] = 'Cuando se publique un nuevo tema o mensaje, se incrementa el conteo de mensajes publicados de los usuarios.';
$txt['mboards_unchanged'] = 'Sin Cambiar';
$txt['mboards_theme'] = 'Tema del foro';
$txt['mboards_theme_desc'] = 'Esto te permite cambiar la apariencia de tu foro solo dentro de este foro.';
$txt['mboards_theme_default'] = '(utilizar el tema default global.)';
$txt['mboards_override_theme'] = 'Hacer caso omiso de los temas de los usuarios';
$txt['mboards_override_theme_desc'] = 'Usar este tema del foro aún si el usuario no escogió usar los valores default';

$txt['mboards_redirect'] = 'Redireccionar a una dirección web';
$txt['mboards_redirect_desc'] = 'Habilita esta opción para redireccionar a cualquiera que haga click en este foro a otra dirección web.';
$txt['mboards_redirect_url'] = 'Dirección a la que redireccionar los usuarios';
$txt['mboards_redirect_url_desc'] = 'Por ejemplo: &quot;http://www.simplemachines.org&quot;. ';
$txt['mboards_redirect_reset'] = 'Poner a 0 el contador de redirecciones';
$txt['mboards_redirect_reset_desc'] = 'Seleccionar esta opción pondrá a 0 el contador de redirecciones para este tablón.';
$txt['mboards_current_redirects'] = 'Actualmente: %1$s';

$txt['mboards_order_before'] = 'Antes';
$txt['mboards_order_child_of'] = 'Subforo de ';
$txt['mboards_order_in_category'] = 'En categoria';
$txt['mboards_current_position'] = 'Posición actual';
$txt['no_valid_parent'] = 'El foro %1$s no tiene un padre válido. Por favor usa la función \'buscar y reparar errores\' para solucionar este problema.';

$txt['mboards_recycle_disabled_delete'] = 'Nota: debes seleccionar un foro "papelera de reciclaje" alternativo o desactivar el reciclaje antes de que puedas borrar este foro.';

$txt['mboards_settings_desc'] = 'Editar configuración general de foros y categorías.';
$txt['groups_manage_boards'] = 'Miembros permitidos para modificar foros y categorías';
$txt['mboards_settings_submit'] = 'Guardar';
$txt['recycle_enable'] = 'Activar el reciclado de temas borrados';
$txt['recycle_board'] = 'Foro para guardar los temas reciclados';
$txt['redirect_board_desc'] = 'Un foro que redirige a tus usuarios cuando lo visitan';
$txt['recycle_board_unselected_notice'] = 'Has habilitado el reciclaje de temas sin especificar un tablón en el que colocarlos. Esta característica no será habilitada hasta que especifiques un foro en el que colocar los temas.';
$txt['boardindex_max_depth'] = 'Máxima profundidad de subforos en los que comprobar nuevos mensajes, etc.';
$txt['countChildPosts'] = 'Contar mensajes de los subforos en el total del foro padre';
$txt['allow_ignore_boards'] = 'Permitir ignorar foros';
$txt['deny_boards_access'] = 'Activar la opción de denegar acceso al foro en base al grupo de usuario';
$txt['boardsaccess_option_desc'] = 'Para cada permiso puedes elegir \'Permitir\' (A), \'Ignorar\' (X) o <span class="alert">\'Denegar\' (D)</span>.<br><br>Si deniegas el acceso, cualquier miembro - (incluyendo los moderadores) - en ese grupo tendrá el acceso denegado.<br>Por este motivo, deberías establecer las denegaciones de acceso con cuidado, sólo cuando sea <strong>necesario</strong>. Ignorar, por otro lado, deniega el acceso a menos que se permita de otra manera.';

$txt['mboards_select_destination'] = 'Seleccione foro de destino \'<strong>%1$s</strong>\'';
$txt['mboards_cancel_moving'] = 'Cancelar traslado';
$txt['mboards_move'] = 'mover';

$txt['mboards_no_cats'] = 'No hay ninguna categoría o foro configurado en este momento.';

?>