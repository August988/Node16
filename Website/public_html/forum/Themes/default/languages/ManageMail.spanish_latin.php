<?php
// Version: 2.1.0; ManageMail

$txt['mailqueue_desc'] = 'Desde esta página puedes configurar los ajustes del correo, así como la visualización y administración de la cola actual del correo.';

$txt['mail_type'] = 'Tipo Correo';
$txt['mail_type_default'] = '(por defecto PHP)';
$txt['smtp_host'] = 'servidor SMTP';
$txt['smtp_port'] = 'puerto SMTP';
$txt['smtp_username'] = 'usuario SMTP';
$txt['smtp_password'] = 'contraseña SMTP';

$txt['mail_limit'] = 'Nº Máximo de emails a enviar por minuto';
$txt['mail_quantity'] = 'Nº Máximo de emails a enviar por carga de página';

$txt['mailqueue_stats'] = 'Estadísticas de Cola de Correos';
$txt['mailqueue_oldest'] = 'Correo más Antiguo';
$txt['mailqueue_oldest_not_available'] = 'N/D';
$txt['mailqueue_size'] = 'Tamaño de la Cola';

$txt['mailqueue_age'] = 'Antigüedad';
$txt['mailqueue_priority'] = 'Prioridad';
$txt['mailqueue_recipient'] = 'Destinatario';
$txt['mailqueue_subject'] = 'Asunto';
$txt['mailqueue_clear_list'] = 'Enviar Ahora la Cola de Correos';
$txt['mailqueue_no_items'] = 'La Cola de Correos está vacía';
$txt['personal_message'] = 'Mensaje Personal';
// Do not use numeric entities in below string.
$txt['mailqueue_clear_list_warning'] = '¿Estás seguro de que quieres enviar toda la cola de Correos ahora? Esto sobreescribirá cualquier límite que hayas establecido.';

$txt['mq_day'] = '%1.1f Día';
$txt['mq_days'] = '%1.1f Días';
$txt['mq_hour'] = '%1.1f Hora';
$txt['mq_hours'] = '%1.1f Horas';
$txt['mq_minute'] = '%1$d Minuto';
$txt['mq_minutes'] = '%1$d Minutos';
$txt['mq_second'] = '%1$d Segundo';
$txt['mq_seconds'] = '%1$d Segundos';

$txt['mq_mpriority_5'] = 'Muy Baja';
$txt['mq_mpriority_4'] = 'Baja';
$txt['mq_mpriority_3'] = 'Normal';
$txt['mq_mpriority_2'] = 'Alta';
$txt['mq_mpriority_1'] = 'Muy Alta';

$txt['birthday_email'] = 'Mensaje de Cumpleaños a usar';
$txt['birthday_body'] = 'Cuerpo';
$txt['birthday_subject'] = 'Asunto';

$txt['mailtest_header'] = 'Email de Prueba';
$txt['mailtest_result_success'] = 'Mensaje de prueba correctamente enviado';
$txt['mailtest_result_failure'] = 'No ha sido posible enviar el mensaje de prueba. Por favor, revisa el <a href="%1$s">registro de errorres</a> para más información.';

?>