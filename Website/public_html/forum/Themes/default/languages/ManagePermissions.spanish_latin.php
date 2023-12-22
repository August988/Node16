<?php
// Version: 2.1.0; ManagePermissions

$txt['permissions_title'] = 'Administrar Permisos';
$txt['permissions_modify'] = 'Modificar';
$txt['permissions_view'] = 'Ver';
$txt['permissions_allowed'] = 'Permitido';
$txt['permissions_denied'] = 'Denegado';
$txt['permission_cannot_edit'] = '<strong>Nota:</strong> No puedes editar este perfil de permiso ya que se trata de un perfil predefinido incluido por defecto en el software del foro. Si deseas cambiar los permisos de este perfil debes crear primero un perfil duplicado. Puedes realizar esa tarea pinchando <a href="%1$s">aquí</a>.';

$txt['permissions_for_profile'] = 'Permisos para el Perfil';
$txt['permissions_boards_desc'] = 'La siguiente lista muestra qué permisos han sido asignados a cada foro. Puedes editar el perfil de permisos asignado pinchando en el nombre del foro o seleccionando &quot;editar todo&quot; al final de la página. Para editar un perfil simplemente pincha en su nombre.';
$txt['permissions_board_all'] = 'Editar Todo';
$txt['permission_profile'] = 'Perfil de Permisos';
$txt['permission_profile_desc'] = '<a href="%1$s">Permisos</a> que debería usar el foro. ';
$txt['permission_profile_inherit'] = 'Heredar del foro padre';

$txt['permissions_profile'] = 'Perfil';
$txt['permissions_profiles_desc'] = 'Los perfiles de permiso se asignan a foros individuales para permitirte gestionar de manera sencilla los ajustes de seguridad. Desde este área puedes crear, editar y eliminar perfiles de permisos.';
$txt['permissions_profiles_change_for_board'] = 'Editar Perfil de Permisos para: &quot;%1$s&quot; ';
$txt['permissions_profile_default'] = 'Por defecto';
$txt['permissions_profile_no_polls'] = 'Sin Encuestas';
$txt['permissions_profile_reply_only'] = 'Solo Respuestas';
$txt['permissions_profile_read_only'] = 'Solo Lectura';

$txt['permissions_profile_rename'] = 'Renombrar todos';
$txt['permissions_profile_edit'] = 'Editar Perfiles';
$txt['permissions_profile_new'] = 'Nuevo Perfil';
$txt['permissions_profile_new_create'] = 'Crear';
$txt['permissions_profile_name'] = 'Nombre del Perfil';
$txt['permissions_profile_used_by'] = 'Usado por';
$txt['permissions_profile_used_by_one'] = '1 Foro';
$txt['permissions_profile_used_by_many'] = '%1$d Foros';
$txt['permissions_profile_used_by_none'] = 'Ningún Foro';
$txt['permissions_profile_do_edit'] = 'Editar';
$txt['permissions_profile_do_delete'] = 'Eliminar';

$txt['permissionname_profile_signature'] = 'Editar firma';
$txt['permissionhelp_profile_signature'] = 'Permitir al miembro editar la firma en su perfil.';
$txt['permissionname_profile_signature_own'] = 'Propia Firma';
$txt['permissionname_profile_signature_any'] = 'Cualquier firma';
$txt['permissionname_profile_forum'] = 'Permitir editar Perfiles del Foro';
$txt['permissionhelp_profile_forum'] = 'Esta opción le permitirá a un miembro editar su Perfil del Foro';
$txt['permissionname_profile_forum_own'] = 'Propio Perfil';
$txt['permissionname_profile_forum_any'] = 'Cualquier perfil';
$txt['permissionname_profile_website'] = 'Editar web';
$txt['permissionhelp_profile_website'] = 'Permitir a los usuarios editar el campo de sitio web en sus perfiles';
$txt['permissionname_profile_website_own'] = 'Propio Perfil';
$txt['permissionname_profile_website_any'] = 'Cualquier Perfil';
$txt['permissionname_profile_blurb'] = 'Editar texto personal';
$txt['permissionhelp_profile_blurb'] = 'Permitir al miembro editar el campo Texto Personal en su perfíl';
$txt['permissionname_profile_blurb_own'] = 'Propio perfil';
$txt['permissionname_profile_blurb_any'] = 'Cualquier perfil';
$txt['permissions_profile_copy_from'] = 'Copiar permisos desde';

$txt['permissions_includes_inherited'] = 'Grupos Heredados';

$txt['permissions_all'] = 'todos';
$txt['permissions_none'] = 'ninguno';
$txt['permissions_set_permissions'] = 'Definir permisos';

$txt['permissions_advanced_options'] = 'Opciones Avanzadas';
$txt['permissions_with_selection'] = 'Con selección';
$txt['permissions_apply_pre_defined'] = 'Aplicar ajustes de permisos predefinidos';
$txt['permissions_select_pre_defined'] = 'Seleccionar un perfil predefinido';
$txt['permissions_copy_from_board'] = 'Copiar permisos desde este foro';
$txt['permissions_select_board'] = 'Seleccionar foro';
$txt['permissions_like_group'] = 'Definir permisos como en este grupo';
$txt['permissions_select_membergroup'] = 'Seleccionar Grupo';
$txt['permissions_add'] = 'Añadir permiso';
$txt['permissions_remove'] = 'Eliminar permiso';
$txt['permissions_deny'] = 'Denegar permiso';
$txt['permissions_select_permission'] = 'Seleccionar un permiso';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Solo puedes seleccionar una acción para modificar los permisos';
$txt['permissions_no_action'] = 'Acción no seleccionada';
$txt['permissions_deny_dangerous'] = 'Estás a punto de denegar uno o más permisos.\nEsta acción puede ser peligrosa y provocar resultados inesperados si no te has asegurado de que no haya nadie \\"accidentalmente\\" en el grupo o grupos a los que les vas a denegar el permiso.\n\n¿Estás seguro de que quieres continuar?';

$txt['permissions_modify_group'] = 'Modificar Grupo';
$txt['permissions_general'] = 'Permisos Generales';
$txt['permissions_board'] = 'Perfil de Permisos por Defecto para el Foro';
$txt['permissions_board_desc'] = '<strong>Nota</strong>: cambiar estos permisos del foro afectará a todos los foros que en este momento estén asignados al perfil &quot;Por Defecto&quot;. Los foros que no usen el perfil &quot;Por Defecto&quot;no quedarán afectados por los cambios en esta página.';
$txt['permissions_commit'] = 'Guardar Cambios';
$txt['permissions_on'] = 'en el perfil';
$txt['permissions_local_for'] = 'Permisos para el grupo';
$txt['permissions_option_own'] = 'Propios';
$txt['permissions_option_any'] = 'Cualquiera';
$txt['permissions_option_on'] = '&#x2705;';
$txt['permissions_option_off'] = '&mdash;';
$txt['permissions_option_deny'] = '&#x1F6AB;';
$txt['permissions_option_desc'] = 'Para cada permiso, puede elegir \'Allow\' (&#x2705;), \'Disallow\' (&mdash;), o <span class="red">\'Deny\' (&#x1F6AB;)</span>.<br><br>Recuerda que si niegas un permiso, a cualquier usuario, ya sea moderador o no, que esté en ese grupo también se le negará ese permiso.<br>Por este motivo, debe usar deny con cuidado, solo cuando sea <strong>necesario</strong>. Disallow, por otro lado, niega a menos que se otorgue lo contrario.';

$txt['permissiongroup_general'] = ' General';
$txt['permissionname_view_stats'] = 'Ver estadísticas del foro';
$txt['permissionhelp_view_stats'] = 'La página de estadísticas del foro resume aspectos como la contabilización de usuarios, número diario de mensajes y estadísticas top 10. Al activar este permiso se añade un enlace al final del índice del foro (\'[Más Estadísticas]\'). ';
$txt['permissionname_view_mlist'] = 'Ver la lista de usuarios y grupos';
$txt['permissionhelp_view_mlist'] = 'La listas de usuarios muestra a todos los usuarios que se han registrado en tu foro. La lista puede ser ordenada y realizar búsquedas en ella. La lista cuenta con enlaces desde el índice del foro y la página de estadísticas y se accede al pinchar en el número de usuarios. También se aplica a la página de grupos que es una lista en miniatura de los usuarios de ese grupo.';
$txt['permissionname_who_view'] = 'Ver página Quién está conectado';
$txt['permissionhelp_who_view'] = 'La página \'Quién está en línea\' muestra a todos los usuarios que están activos en este momento y cuál es su actividad. Este permiso solo funciona si también lo has activado en \'Características y Opciones\'. Puedes acceder a \'Quién está en línea\' pinchando en el enlace de la sección \'Usuarios en línea\' del índice del foro. Aún en el caso de que este permiso sea denegado, los usuarios todavía podrán ver quién está en línea; aunque no lo que estén haciendo.';
$txt['permissionname_search_posts'] = 'Buscar en mensajes y temas';
$txt['permissionhelp_search_posts'] = 'Los permiso de búsqueda e permiten al usuario buscar en todos los foros a los que tenga acceso. Cuando se activa el permiso de búsqueda, un botón de \'Búsqueda\' aparecerá en la barra del foro.';

$txt['permissiongroup_pm'] = 'Mensajería Personal';
$txt['permissionname_pm_read'] = 'Leer mensajes personales';
$txt['permissionhelp_pm_read'] = 'Este permiso otorga a los usuarios acceso a la sección de Mensajes Personales. Sin este permiso, los usuarios no podrán enviar Mensajes Personales.';
$txt['permissionname_pm_send'] = 'Enviar mensajes personales';
$txt['permissionhelp_pm_send'] = 'Envío de mensajes personales a otros usuarios registrados. Necesita del permiso \'Leer mensajes personales\'.';

$txt['permissiongroup_calendar'] = 'Calendario';
$txt['permissionname_calendar_view'] = 'Ver el calendario';
$txt['permissionhelp_calendar_view'] = 'El calendario muestra para cada mes, los cumpleaños, eventos y días festivos. Este permiso permite el acceso al calendario. Cuando este permiso está activo, un botón será agregado a la barra de botones del foro y se mostrará una lista en la parte inferior del índice del foro con los cumpleaños, eventos y días festivos próximos. El calendario necesita ser activado desde \'Config. y Opciones\'.';
$txt['permissionname_calendar_post'] = 'Crear eventos en el calendario';
$txt['permissionhelp_calendar_post'] = 'Un evento es un tema enlazado a una cierta fecha o rango de fechas. Es posible crear eventos desde el calendario. Un evento solo puede ser creado si el usuario que crea el evento tiene permiso para publicar nuevos temas.';
$txt['permissionname_calendar_edit'] = 'Editar eventos en el calendario';
$txt['permissionhelp_calendar_edit'] = 'Un Evento es un tema enlazado a una cierta fecha o rango de fechas. El evento puede ser editado pinchando en el asterisco rojo (*) junto al evento en la vista del calendario. Para poder editar un evento, el usuario debe contar con los permisos necesarios para editar el primer mensaje del tema al que esté enlazado el evento.';
$txt['permissionname_calendar_edit_own'] = 'Propios eventos';
$txt['permissionname_calendar_edit_any'] = 'Cualquier evento';

$txt['permissiongroup_maintenance'] = 'Administración del foro';
$txt['permissionname_admin_forum'] = 'Administrar el foro y la base de datos';
$txt['permissionhelp_admin_forum'] = 'Este permiso le permite al usuario:<ul class="normallist"><li>modificar el foro, la base de datos y los ajustes de temas</li><li>administrar paquetes</li><li>usar las herramientas de mantenimiento del foro y la base de datos</li><li>ver los registros de errores y moderación</li></ul> Usa este permiso con cautela ya que es muy poderoso.';
$txt['permissionname_manage_boards'] = 'Administrar foros y categorías';
$txt['permissionhelp_manage_boards'] = 'Este permiso te permite crear, editar y eliminar foros y categorías<br><br>Los usuarios con este permiso pueden ver todos los foros.';
$txt['permissionname_manage_attachments'] = 'Administrar adjuntos y avatares';
$txt['permissionhelp_manage_attachments'] = 'Este permiso concede acceso al centro de adjuntos, en el que se muestran todos los adjuntos y avatares y pueden ser eliminados.';
$txt['permissionname_manage_smileys'] = 'Administrar smileys e iconos de mensaje';
$txt['permissionhelp_manage_smileys'] = 'Este permiso concede acceso al centro de smileys, en el que podrás añadir, editar y eliminar smileys individuales y conjuntos de smileys. Si has activado los iconos de mensaje personalizados también podrás añadirlos y editarlos con este permiso.';
$txt['permissionname_edit_news'] = 'Editar noticias';
$txt['permissionhelp_edit_news'] = 'La función de noticias permite que en cada pantalla aparezca una línea aleatoria de noticias. Para usar la función de noticias, activala en la Config. del foro.';
$txt['permissionname_access_mod_center'] = 'Acceso al centro de moderación';
$txt['permissionhelp_access_mod_center'] = 'Con este permiso cualquier usuario de este grupo podrá acceder al centro de moderación desde el que tendrá acceso a las funciones de moderación. A tener enc uenta que este ajuste, en sí mismo, no concede ningún privilegio de moderación.';

$txt['permissiongroup_member_admin'] = 'Administración de usuarios';
$txt['permissionname_moderate_forum'] = 'Modera a los usuarios del foro';
$txt['permissionhelp_moderate_forum'] = 'Este permiso incluye todas las funciones importates de moderación de miembros:<ul class="normallist"><li>acceso al manejo de registros</li><li>acceso a la pantalla de ver/borrar miembros</li><li>información detallada del perfil, incluyendo rastrear IP/usuario y estado en linea (oculto)</li><li>activar cuentas</li><li>recibir notificaciones de aprobación y aprobar cuentas</li><li>inmunidad a ignorar MP</li><li>varias cosas más</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Administrar y asignar grupos de usuarios';
$txt['permissionhelp_manage_membergroups'] = 'Este permiso permite que un usuario edite grupos de usuarios y asigne a otros usuarios a determinados grupos.';
$txt['permissionname_manage_permissions'] = 'Administrar permisos';
$txt['permissionhelp_manage_permissions'] = 'Este permiso da acceso a un usuario a editar todos los permisos de un grupo, globalmente o en foros individuales.';
$txt['permissionname_manage_bans'] = 'Administrar lista de prohibiciones';
$txt['permissionhelp_manage_bans'] = 'Este permiso le da acceso a un usuario a añadir o eliminar nombres de usuario, direcciones IP, dominios y direcciones de correo a una lista de usuarios bloqueados. También permite que el usuario vea y elimine entradas en el registro de usuarios bloqueados que han intentado acceder.';
$txt['permissionname_send_mail'] = 'Enviar desde el foro un correo a los usuarios';
$txt['permissionhelp_send_mail'] = 'Envío masivo de correo a todos los usuarios del foro, o solo a un grupo seleccionado, por correo o mensajería personal (esta última opción requiere del permiso \'Enviar Mensaje Personal\').';
$txt['permissionname_issue_warning'] = 'Enviar aviso a los usuarios';
$txt['permissionhelp_issue_warning'] = 'Enviar un aviso a los usuarios del foro y cambiar su nivel de aviso. Requiere que el sistema de avisos esté activo.';

$txt['permissiongroup_profile'] = 'Perfiles de Usuarios';
$txt['permissionname_profile_view'] = 'Ver el resumen del perfil de otros usuarios y la página de estadísticas';
$txt['permissionhelp_profile_view'] = 'Este permiso permite que los usuarios que pinchen en el nombre de otro usuario vean un resumen de su perfil, algunas estadísticas y sus mensajes.';
$txt['permissionname_profile_extra'] = 'Editar ajustes de perfil adicionales';
$txt['permissionhelp_profile_extra'] = 'Ajustes de perfil adicionales entre los que se incluyen avatar, preferencias de tema, notificaciones y Mensajería Personal.';
$txt['permissionname_profile_extra_own'] = 'Propio Perfil';
$txt['permissionname_profile_extra_any'] = 'Cualquier Perfil';
$txt['permissionname_profile_title'] = 'Editar título personalizado';
$txt['permissionhelp_profile_title'] = 'El título personalizado se muestra en la página del tema, bajo el perfil de cada usuario que tenga un título personalizado.';
$txt['permissionname_profile_title_own'] = 'Propio perfil';
$txt['permissionname_profile_title_any'] = 'Cualquier perfil';
$txt['permissionname_profile_server_avatar'] = 'Seleccionar un avatar del servidor';
$txt['permissionhelp_profile_server_avatar'] = 'Si se activa, este ajuste permitirá a un usuario seleccionar un avatar de la colección de avatares instalada en el servidor.';
$txt['permissionname_profile_upload_avatar'] = 'Subir un avatar al servidor';
$txt['permissionhelp_profile_upload_avatar'] = 'Este permiso permite que el usuario suba su avatar personal al servidor.';
$txt['permissionname_profile_remote_avatar'] = 'Elegir un avatar alojado de forma externa';
$txt['permissionhelp_profile_remote_avatar'] = 'Ya que los avatares pueden influir negativamente en el tiempo de carga de las páginas, es posible bloquear el acceso de ciertos usuarios a avatares alojados en servidores externos.';

$txt['permissiongroup_profile_account'] = 'Cuentas de Usuarios';
$txt['permissionname_profile_identity'] = 'Editar ajustes de cuenta';
$txt['permissionhelp_profile_identity'] = 'Los ajustes de cuenta son ajustes básicos de un perfil, como la contraseña, dirección de correo, grupo de usuario o idioma preferido.';
$txt['permissionname_profile_identity_own'] = 'Propio perfil';
$txt['permissionname_profile_identity_any'] = 'Cualquier perfil';
$txt['permissionname_profile_displayed_name'] = 'Editar el nombre a mostrar';
$txt['permissionhelp_profile_displayed_name'] = 'Le permite al usuario editar el nombre a mostrar en su perfil';
$txt['permissionname_profile_displayed_name_own'] = 'Propio nombre a mostrar ';
$txt['permissionname_profile_displayed_name_any'] = 'Cualquier nombre a mostrar';
$txt['permissionname_profile_password'] = 'Cambiar contraseña';
$txt['permissionhelp_profile_password'] = 'Permite que el usuario cambie su contraseña y/o las preguntas secretas';
$txt['permissionname_profile_password_own'] = 'Propio perfil';
$txt['permissionname_profile_password_any'] = 'Cualquier perfil';
$txt['permissionname_profile_remove'] = 'Eliminar cuenta';
$txt['permissionhelp_profile_remove'] = 'Este permiso permite que el usuario elimine su propia cuenta, siempre y cuando se active \'Propia cuenta\'.';
$txt['permissionname_profile_remove_own'] = 'Propia cuenta';
$txt['permissionname_profile_remove_any'] = 'Cualquier cuenta';
$txt['permissionname_view_warning'] = 'Ver estado de aviso';
$txt['permissionname_view_warning_own'] = 'Propia cuenta';
$txt['permissionname_view_warning_any'] = 'Cualquier cuenta';
$txt['permissionhelp_view_warning'] = 'Permite que el usuario vea su propio estado de aviso e historial (\'Propia cuenta\') o de cualquier usuario (\'Cualquier cuenta\')';

$txt['permissionname_report_user'] = 'Reportar perfiles de usuarios';
$txt['permissionhelp_report_user'] = 'Este permiso permitirá a los usuarios reportar los perfiles de otros usuarios a los administradores para avisarles de smpam u otros contenidos inapropiados en su perfil.';

$txt['permissiongroup_general_board'] = ' General';
$txt['permissionname_moderate_board'] = 'Moderar foro';
$txt['permissionhelp_moderate_board'] = 'El permiso de moderación de foro añade algunos pequeños permisos que convierten al moderador en un moderador \'de verdad\'. Estos permisos incluyen la respuesta a temas bloqueados, modificar la fecha de expiración de una encuesta o ver sus resultados.';

$txt['permissiongroup_topic'] = 'Temas';
$txt['permissionname_post_new'] = 'Publicar nuevos temas';
$txt['permissionhelp_post_new'] = 'Este permiso permite que el usuario publique nuevos temas. No da permiso a publicar respuestas a temas ya creados.';
$txt['permissionname_merge_any'] = 'Unificar cualquier tema';
$txt['permissionhelp_merge_any'] = 'Unificar dos o más temas en uno solo. El orden de los mensajes en el tema unificado será el cronológico por fecha de creación. Un usuario solo puede unificar temas en aquellos foros en los que cuente con ese permiso. Para unificar varios temas de golpe, el usuario debe activar la moderación rápida en sus ajustes de perfil.';
$txt['permissionname_split_any'] = 'Dividir cualquier tema';
$txt['permissionhelp_split_any'] = 'Dividir un tema en dos temas diferentes.';
$txt['permissionname_make_sticky'] = 'Fijar temas';
$txt['permissionhelp_make_sticky'] = 'Los temas fijados son los que siempre permanecen en la parte superior de un foro. Pueden ser de utilidad para anuncios y otros mensajes de importancia.';
$txt['permissionname_move'] = 'Mover tema';
$txt['permissionhelp_move'] = 'Mover un tema de un foro a otro. Los usuarios solo pueden seleccionar como destino aquellos foros a los que tengan acceso.';
$txt['permissionname_move_own'] = 'Propios temas';
$txt['permissionname_move_any'] = 'Cualquier tema';
$txt['permissionname_lock'] = 'Bloquear temas';
$txt['permissionhelp_lock'] = 'Este permiso le permite a un usuario bloquear un tema. Esto se puede hacer para asegurarse que nadie responda a un tema. Solamente usuarios con el permiso de \'Moderar foro\' pueden todavía publicar en temas bloqueados.';
$txt['permissionname_lock_own'] = 'Propios temas';
$txt['permissionname_lock_any'] = 'Cualquier tema';
$txt['permissionname_remove'] = 'Borrar temas';
$txt['permissionhelp_remove'] = 'Eliminar temas completos. ¡A tener en cuenta que este permiso no permite borrar mensajes específicos dentro del tema!';
$txt['permissionname_remove_own'] = 'Propios temas';
$txt['permissionname_remove_any'] = 'Cualquier tema';
$txt['permissionname_post_reply'] = 'Publicar respuestas a temas';
$txt['permissionhelp_post_reply'] = 'Este permiso permite añadir respuestas a temas ya creados.';
$txt['permissionname_post_reply_own'] = 'Propios temas';
$txt['permissionname_post_reply_any'] = 'Cualquier tema';
$txt['permissionname_modify_replies'] = 'Modificar respuestas a temas propios';
$txt['permissionhelp_modify_replies'] = 'Este permiso permite que el usuario que inició un tema pueda modificar todas las respuestas en su tema.';
$txt['permissionname_delete_replies'] = 'Eliminar respuestas a temas propios';
$txt['permissionhelp_delete_replies'] = 'Este permiso permite al usuario que inició un tema eliminar toda las respuestas a su tema.';
$txt['permissionname_announce_topic'] = 'Anunciar tema';
$txt['permissionhelp_announce_topic'] = 'Este permiso permite al usuario enviar un email de anuncio sobre un tema a todos los usuarios, o solo a unos grupos.';

$txt['permissiongroup_post'] = 'Mensajes';
$txt['permissionname_delete'] = 'Eliminar mensajes';
$txt['permissionhelp_delete'] = 'Eliminar mensajes. Este permiso no permite eliminar el primer mensaje de un tema.';
$txt['permissionname_delete_own'] = 'Propios mensajes';
$txt['permissionname_delete_any'] = 'Cualquier mensaje';
$txt['permissionname_modify'] = 'Modificar mensajes';
$txt['permissionhelp_modify'] = 'Editar mensajes';
$txt['permissionname_modify_own'] = 'Propios mensajes';
$txt['permissionname_modify_any'] = 'Cualquier mensaje';
$txt['permissionname_report_any'] = 'Reportar mensajes a los moderadores';
$txt['permissionhelp_report_any'] = 'Este permiso añade un enlace a cada mensaje, permitiendo a los usuarios reportar un menasje a los moderadores. Una vez reportado, todos los moderadores de ese foro recibirán un email con un enlace al mensaje reportado y una descripción del problema (según la proporcione el usuario).';

$txt['permissiongroup_likes'] = 'Me gusta';
$txt['permissionname_likes_like'] = 'Puede usar \'Me gusta\' en cualquier contenido';
$txt['permissionhelp_likes_like'] = 'Este permiso permite que el usuario haga uso de \'Me gusta\' en cualquier contenido. Los usuarios no pueden usar esta función en sus propios contenidos.';

$txt['permissiongroup_mentions'] = 'Menciones';
$txt['permissionname_mention'] = 'Mencionar a otros usuarios mediante su @nombre';
$txt['permissionhelp_mention'] = 'Este permiso permite que un usuario mencione a otros usuarios por su @nombre. Por ejemplo, el usuario Jack podría ser mencionado si otro usuario con el permiso necesario escribe @Jack.';

$txt['permissiongroup_poll'] = 'Encuestas';
$txt['permissionname_poll_view'] = 'Ver encuestas';
$txt['permissionhelp_poll_view'] = 'Este permiso permite a los usuarios ver una encuesta. Sin este permiso, el usuario solo verá el tema.';
$txt['permissionname_poll_vote'] = 'Votar en encuestas';
$txt['permissionhelp_poll_vote'] = 'Este permiso permite que el usuario emita su voto. <br><br><strong>Nota en la votación de invitados</strong> SMF usa cookies en un intento de evitar que los invitados voten más de una vez. Sin embargo, resulta del todo imposible evitar que un invitado pueda votar más de una vez y, por lo tanto, los resultados de las votaciones abiertas a invitados pueden no ser fiables. A tener en cuenta también que la votación de invitados debe activarse de manera individual para cada encuesta.';
$txt['permissionname_poll_post'] = 'Publicar encuestas';
$txt['permissionhelp_poll_post'] = 'Este permiso permite que los usuarios publiquen nuevas encuestas. El usuario necesita contar con el permiso \'Publicar nuevos temas\'.';
$txt['permissionname_poll_add'] = 'Añadir encuestas a temas';
$txt['permissionhelp_poll_add'] = 'Este ajuste permite que los usuarios añadan encuestas una vez que un tema ya ha sido creado. Este permiso requiere permisos suficientes para poder editar el primer mensaje de un tema.';
$txt['permissionname_poll_add_own'] = 'Propios temas';
$txt['permissionname_poll_add_any'] = 'Cualquier tema';
$txt['permissionname_poll_edit'] = 'Editar encuestas';
$txt['permissionhelp_poll_edit'] = 'Este permiso permite que un usuario edite las opciones de una encuesta para reiniciar una encuesta. Para editar el número máximo de votos y la fecha de caducidad, el usuario necesita contar con el permiso de \'Moderar foro\'.';
$txt['permissionname_poll_edit_own'] = 'Propia encuesta';
$txt['permissionname_poll_edit_any'] = 'Cualquier encuesta';
$txt['permissionname_poll_lock'] = 'Bloquear encuestas';
$txt['permissionhelp_poll_lock'] = 'Bloquear encuestas impide que la encuesta acepte más votos';
$txt['permissionname_poll_lock_own'] = 'Propia encuesta';
$txt['permissionname_poll_lock_any'] = 'Cualquier encuesta';
$txt['permissionname_poll_remove'] = 'Eliminar encuesta';
$txt['permissionhelp_poll_remove'] = 'Este permiso permite borrar encuestas';
$txt['permissionname_poll_remove_own'] = 'Propia encuesta';
$txt['permissionname_poll_remove_any'] = 'Cualquier encuesta';

$txt['permissionname_post_draft'] = 'Guardar borradores de nuevos mensajes';
$txt['permissionhelp_post_draft'] = 'Este permiso permite que los usuarios guarden borradores de sus mensajes para que puedan finalizarlos más adelante.';
$txt['permissionname_pm_draft'] = 'Guardar borradores de mensajes personales';
$txt['permissionhelp_pm_draft'] = 'Este permiso permite que los usuarios guarden los borradores de sus mensajes personales para que puedan completarlos más tarde.';

$txt['permissiongroup_approval'] = 'Moderación de Mensajes';
$txt['permissionname_approve_posts'] = 'Aprobar elementos a la espera de aprobación';
$txt['permissionhelp_approve_posts'] = 'Este permiso permite a un usuario aprobar todos los elementos pendientes de aprobación en un foro.';
$txt['permissionname_post_unapproved_replies'] = 'Publicar respuestas a temas, pero ocultarlas hasta que sean aprobadas';
$txt['permissionhelp_post_unapproved_replies'] = 'Este permiso permite a un usuario publicar respuestas a un tema. Las respuesta no se mostrarán hasta que hayan sido aprobadas por un moderador.';
$txt['permissionname_post_unapproved_replies_own'] = 'Propios temas';
$txt['permissionname_post_unapproved_replies_any'] = 'Cualquier tema';
$txt['permissionname_post_unapproved_topics'] = 'Publicar nuevos temas, pero ocultarlos hasta que sean aprobados';
$txt['permissionhelp_post_unapproved_topics'] = 'Este permiso permite a un usuario publicar un nuevo tema que requerirá de aprobación antes de que se muestre.';
$txt['permissionname_post_unapproved_attachments'] = 'Publicar adjuntos, pero ocultarlos hasta que sean aprobados';
$txt['permissionhelp_post_unapproved_attachments'] = 'Este permiso permite que un usuario adjunte archivos a sus mensajes. Los archivos adjuntos tendrán que ser aprobados antes de que otros usuarios tengan acceso.';

$txt['permissiongroup_attachment'] = 'Adjuntos';
$txt['permissionname_view_attachments'] = 'Ver adjuntos';
$txt['permissionhelp_view_attachments'] = 'Los adjuntos son archivos que quedan unidos a un mensaje. Esta función puede activarse y configurarse en \'Adjuntos y avatares\'. Puesto que no se puede acceder directamente a los adjuntos, puedes evitar que sean descargados por usuarios que no cuenten con este permiso.';
$txt['permissionname_post_attachment'] = 'Publicar adjuntos';
$txt['permissionhelp_post_attachment'] = 'Los adjuntos son archivos que quedan unidos a un mensaje. Un mensaje puede contener múltiples archivos adjuntos.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Ajustes de Permisos';
$txt['groups_manage_permissions'] = 'Grupos que pueden administrar permisos';
$txt['permission_settings_submit'] = 'Guardar';
$txt['permission_settings_enable_deny'] = 'Activa la opción para denegar permisos';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Desactivar esta opción actualizará los permisos \\\'Denegar\\\' a \\\'No Permitir\\\'. ';
$txt['permission_by_board_desc'] = 'Aquí puedes definir qué perfil de permisos usará un foro. Puedes crear un nuevo perfil de permisos desde el menú  &quot;Editar Perfiles&quot;';
$txt['permission_settings_desc'] = 'Aquí pueds definir quién tendrá permiso para modificar permisos, así como el nivel de sofisticación del sistema de permisos.';
$txt['permission_settings_enable_postgroups'] = 'Activar permisos para los grupos basados en el conteo de mensajes';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Al desactivar esta opción se eliminarán los permisos actualmente establecidos a grupos basados en el número de mensajes.';

$txt['permissions_post_moderation_desc'] = 'Desde esta página puedes configurar la posibilidad de retener los mensajes de usuarios antes de que sean visibles para los usuarios regulares del foro, incluyendo qué grupo o grupos de usuarios pueden aprobarlos. Los usuarios cuyos mensajes queden retenido podrán ver sus propios mensajes, así como las respuestas de los que puedan aprobarlos, por ejemplo, comentarios del moderador sobre cómo hacer el mensaje cumpla con los requisitos necesarios.';
$txt['permissions_post_moderation_enable'] = 'Activar la Moderación de Mensajes';
$txt['permissions_post_moderation_deny_note'] = 'Ten en cuenta que mientras tengas activos los permisos avanzados no podrás aplicar el permiso &quot;denegar&quot; desde esta página. Por favor, edita los permisos directamente si deseas aplicar un permiso de denegación.';
$txt['permissions_post_moderation_select'] = 'Seleccionar Perfil';
$txt['permissions_post_moderation_new_topics'] = 'Nuevos Temas';
$txt['permissions_post_moderation_replies_own'] = 'Propias Respuestas';
$txt['permissions_post_moderation_replies_any'] = 'Cualquier Respuesta';
$txt['permissions_post_moderation_attachments'] = 'Adjuntos';
$txt['permissions_post_moderation_legend'] = 'Leyenda';
$txt['permissions_post_moderation_allow'] = 'Puede crear';
$txt['permissions_post_moderation_moderate'] = 'Puede crear, pero requiere aprobación';
$txt['permissions_post_moderation_disallow'] = 'No puede crear';
$txt['permissions_post_moderation_group'] = 'Grupo';

$txt['auto_approve_topics'] = 'Publicar nuevos temas, pero requerir aprobación';
$txt['auto_approve_replies'] = 'Publicar nuevos temas, sin que sea necesaria la aprobación';
$txt['auto_approve_attachments'] = 'Publicar adjuntos, sin requerir aprobación';

$txt['permissiongroup_bbc'] = 'BBCode';
$txt['permissionname_bbc'] = 'Usar el BBCode [%1$s] ';
$txt['permissionhelp_bbc_html'] = 'Este permiso permite que los usuarios usen el BBCode [html] para insertar código HTML arbitrario en los mensajes, mensajes privados, etc.<br><br><strong>La inserción de código HTML arbitrario puede causar problemas y comprometer seriamente la seguridad de tu web. <u>¡No concedas este permiso a nadie salvo que estés completamente seguro de que no causará problemas</u></strong> ';
$txt['permissionnote_bbc_html'] = '¡Genera un riesgo de seguridad!';

?>