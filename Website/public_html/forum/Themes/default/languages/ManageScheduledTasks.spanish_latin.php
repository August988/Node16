<?php
// Version: 2.1.0; ManageScheduledTasks

$txt['scheduled_tasks_title'] = 'Tareas programadas';
$txt['scheduled_tasks_header'] = 'Todas las tareas programadas';
$txt['scheduled_tasks_name'] = 'Nombre de la tarea';
$txt['scheduled_tasks_next_time'] = 'Próxima vez';
$txt['scheduled_tasks_regularity'] = 'Regularidad';
$txt['scheduled_tasks_enabled'] = 'Activada';
$txt['scheduled_tasks_run_now'] = 'Ejecutar tarea ahora';
$txt['scheduled_tasks_save_changes'] = 'Guardar cambios';
$txt['scheduled_tasks_time_offset'] = '<strong>Nota:</strong> Todos los tiempos dados a continuación son <em>tiempos de servidor</em> y no tienen en cuenta ninguna configuración de offset que se haya establecido en SMF.';
$txt['scheduled_tasks_were_run'] = 'Todas las tareas seleccionadas fueron completadas';
$txt['scheduled_tasks_were_run_errors'] = 'Todas las tareas seleccionadas fueron completadas pero algunas tuvieron errores:';

$txt['scheduled_tasks_na'] = ' N/A';
$txt['scheduled_task_auto_optimize'] = 'Optimizar Base de datos';
$txt['scheduled_task_desc_auto_optimize'] = 'Optimizar la base de datos para resolver problemas de fragmentación.';
$txt['scheduled_task_daily_maintenance'] = 'Mantenimiento diario';
$txt['scheduled_task_desc_daily_maintenance'] = 'Lleva a cabo un mantenimiento diario esencial en el foro - no debería ser desactivada.';
$txt['scheduled_task_daily_digest'] = 'Sumario de notificaciones diarias';
$txt['scheduled_task_desc_daily_digest'] = 'Envía un resumen diario para los suscriptores de notificaciones.';
$txt['scheduled_task_weekly_digest'] = 'Sumario de notificaciones semanal';
$txt['scheduled_task_desc_weekly_digest'] = 'Envía un resumen semanal para los suscriptores de notificaciones.';
$txt['scheduled_task_fetchSMfiles'] = 'Obtener archivos de Simple Machines';
$txt['scheduled_task_desc_fetchSMfiles'] = 'Obtiene archivos javascript con notificaciones de actualizaciones y otra información.';
$txt['scheduled_task_birthdayemails'] = 'Enviar emails de cumpleaños';
$txt['scheduled_task_desc_birthdayemails'] = 'Envía emails deseando a los usuarios un feliz cumpleaños.';
$txt['scheduled_task_weekly_maintenance'] = 'Mantenimiento semanal';
$txt['scheduled_task_desc_weekly_maintenance'] = 'Lleva a cabo un mantenimiento semanal esencial en el foro - no debería ser desactivada.';
$txt['scheduled_task_paid_subscriptions'] = 'Comprobaciones de suscripciones de pago';
$txt['scheduled_task_desc_paid_subscriptions'] = 'Envía los recordatorios de suscripciones de pago necesarios y elimina las suscripciones caducadas de los usuarios.';
$txt['scheduled_task_remove_topic_redirect'] = 'Eliminar mensajes de redirección MOVIDO:';
$txt['scheduled_task_desc_remove_topic_redirect'] = 'Elimina las notificaciones de temas "MOVIDO:" como se especificó cuando la notificación movida fue creada';
$txt['scheduled_task_remove_temp_attachments'] = 'Eliminar archivos adjuntos temporales';
$txt['scheduled_task_desc_remove_temp_attachments'] = 'Elimina los archivos temporales creados al adjuntar un archivo a un mensaje que por alguna razón no fueron renombrados o movidos antes.';

$txt['scheduled_task_reg_starting'] = 'Iniciada a las %1$s';
$txt['scheduled_task_reg_repeating'] = 'repetida cada %1$d %2$s';
$txt['scheduled_task_reg_unit_m'] = 'minuto(s)';
$txt['scheduled_task_reg_unit_h'] = 'hora(s)';
$txt['scheduled_task_reg_unit_d'] = 'día(s)';
$txt['scheduled_task_reg_unit_w'] = 'semana(s)';

$txt['scheduled_task_edit'] = 'Editar tarea programada';
$txt['scheduled_task_edit_repeat'] = 'Repetir tarea cada';
$txt['scheduled_task_edit_interval'] = 'Intervalo';
$txt['scheduled_task_edit_start_time'] = 'Hora de inicio';
$txt['scheduled_task_edit_start_time_desc'] = 'Hora a la que la primera instancia del día debería comenzar (horas:minutos)';
$txt['scheduled_task_time_offset'] = 'Tenga en cuenta que la hora de inicio debería ser el offset respecto al tiempo de servidor actual, que es: %1$s';

$txt['scheduled_view_log'] = 'Ver Log';
$txt['scheduled_log_empty'] = 'Actualmente no hay registros en el log de tareas.';
$txt['scheduled_log_time_run'] = 'Hora de ejecución';
$txt['scheduled_log_time_taken'] = 'Tiempo empleado';
$txt['scheduled_log_time_taken_seconds'] = '%1$d segundos';
$txt['scheduled_log_empty_log'] = 'Vaciar Log';
$txt['scheduled_log_empty_log_confirm'] = '¿Estás seguro de que quieres limpiar el registro completamente?';

$txt['scheduled_task_remove_old_drafts'] = 'Eliminar borradores antiguos';
$txt['scheduled_task_desc_remove_old_drafts'] = 'Elimina los borradores con más días de antigüedad que el número especificado en las opciones de borradores del panel de administración.';

$txt['scheduled_task_prune_log_topics'] = 'Marcar foros como Leídos';
$txt['scheduled_task_desc_prune_log_topics'] = 'Marca los foros como leídos para los usuarios inactivos por más tiempo que el número de días definido en la <a href="%1$s?action=admin;area=logs;sa=settings#markread_title">Configuración de lectura de registros</a> en el panel de administración.';

$txt['cron_is_real_cron'] = 'Desactivar el método basado en JavaScript para ejecutar tareas programadas.';
$txt['cron_is_real_cron_desc'] = '<strong>NO marques esta casilla</strong> a menos que estés <strong><u>SEGURO</u></strong> de haber configurado otro método para indicarle a tu servidor que ejecute el archivo cron.php de SMF de forma regular.';
$txt['cron_not_working'] = 'No se ha ejecutado ninguna tarea programada en las últimas 24 horas. Reactivando el método basado en JavaScript para ejecutar tareas programadas.';

?>