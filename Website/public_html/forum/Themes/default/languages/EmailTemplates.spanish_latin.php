<?php
// Version: 2.1.0; EmailTemplates

// Since all of these strings are being used in emails, numeric entities should be used.

// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.
//   Additionally, do not translate the @additional_params: line or the variable names in the lines that follow it. You may
//   translate the description of the variable. Do not translate @description:, however you may translate the rest of that line.

// Do not use block comments in this file, they will have special meaning.

global $txtBirthdayEmails;

/**
	@additional_params: resend_activate_message
		REALNAME: The display name for the member receiving the email.
		USERNAME:  The user name for the member receiving the email.
		ACTIVATIONLINK:  The URL link to activate the member's account.
		ACTIVATIONCODE:  The code needed to activate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The URL to the page where the activation code can be entered.
		FORGOTPASSWORDLINK: The URL to the "forgot password" page.
	@description:
*/
$txt['resend_activate_message_subject'] = 'Bienvendo a {FORUMNAME}';
$txt['resend_activate_message_body'] = 'Gracias por registrarte en {FORUMNAME}. Tu nombre de usuario es {USERNAME}. Si has olvidado tu contraseña puedes  restablecerla visitando {FORGOTPASSWORDLINK}.

Antes de poder iniciar sesión, primero debes activar tu cuenta a través del siguiente enlace:

{ACTIVATIONLINK}

En caso de tener algún problema con la activación, por favor visite {ACTIVATIONLINKWITHOUTCODE} e ingrese el código "{ACTIVATIONCODE}".

{REGARDS}';

/**
	@additional_params: resend_pending_message
		REALNAME: The display name for the member receiving the email.
		USERNAME:  The user name for the member receiving the email.
	@description:
*/
$txt['resend_pending_message_subject'] = 'Bienvenido a {FORUMNAME}';
$txt['resend_pending_message_body'] = 'Hola {REALNAME}, tu petición de registro {FORUMNAME} ha sido recibida.

El nombre de usuario con el que te has registrado es {USERNAME}.

Antes de que puedas iniciar sesión y comenzar a usar el foro, su solicitud debe ser revisada y aprobada. Cuando esto suceda, recibirá otro correo electrónico desde esta dirección.

{REGARDS}';

/**
	@additional_params: mc_group_approve
		USERNAME: The user name for the member receiving the email.
		GROUPNAME: The name of the membergroup that the user was accepted into.
	@description: The request to join a particular membergroup has been accepted.
*/
$txt['mc_group_approve_subject'] = 'Aprobación de Membresía de Grupo';
$txt['mc_group_approve_body'] = '{USERNAME}, 

Nos complace notificarte que tu solicitud para unirte al grupo "{GROUPNAME}" en {FORUMNAME} ha sido aceptada y que tu cuenta ha sido actualizada para incluir este nuevo grupo.

{REGARDS}';

/**
	@additional_params: mc_group_reject
		USERNAME: The user name for the member receiving the email.
		GROUPNAME: The name of the membergroup that the user was rejected from.
	@description: The request to join a particular membergroup has been rejected.
*/
$txt['mc_group_reject_subject'] = 'Rechazo de Membresía de Grupo';
$txt['mc_group_reject_body'] = '{USERNAME}, 

Lamentamos notificarte que tu solicitud para unirte al grupo "{GROUPNAME}" en {FORUMNAME} ha sido rechazada.

{REGARDS}';

/**
	@additional_params: mc_group_reject_reason
		USERNAME: The user name for the member receiving the email.
		GROUPNAME: The name of the membergroup that the user was rejected from.
		REASON: Reason for the rejection.
	@description: The request to join a particular membergroup has been rejected with a reason given.
*/
$txt['mc_group_reject_reason_subject'] = 'Rechazo de Membresía de Grupo';
$txt['mc_group_reject_reason_body'] = '{USERNAME},

Lamentamos notificarte que tu solicitud para unirte al grupo "{GROUPNAME}" en {FORUMNAME} ha sido rechazada debido a que {REASON}

{REGARDS}';

/**
	@additional_params: admin_approve_accept
		NAME: The display name of the member.
		USERNAME: The user name for the member receiving the email.
		PROFILELINK: The URL of the profile page.
		FORGOTPASSWORDLINK: The URL of the "forgot password" page.
	@description:
*/
$txt['admin_approve_accept_subject'] = 'Bienvenido a {FORUMNAME}';
$txt['admin_approve_accept_body'] = 'Bienvenido, {NAME}

Tu cuenta fue activada manualmente por un adminitrador y ahora puedes iniciar sesión y publicar. Tu nombre de usuario es: {USERNAME}. Si olvidas tu contraseña, puedes cambiarla en {FORGOTPASSWORDLINK}.

{REGARDS}';

/**
	@additional_params: admin_approve_activation
		USERNAME: The user name for the member receiving the email.
		ACTIVATIONLINK:  The URL link to activate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The URL to the page where the activation code can be entered.
		ACTIVATIONCODE: The activation code.
	@description:
*/
$txt['admin_approve_activation_subject'] = 'Bienvenido a {FORUMNAME}';
$txt['admin_approve_activation_body'] = 'Bienvenido, {USERNAME}!

Tu cuenta en {FORUMNAME} ha sido aprovada por el administrador del foro. Antes de que puedas iniciar sesión, primero debes activar tu cuenta haciendo clic en el siguiente link:

{ACTIVATIONLINK}

Si encuentras problemas con la activación, por favor visita {ACTIVATIONLINKWITHOUTCODE} y entra el codigo "{ACTIVATIONCODE}"


{REGARDS}';

/**
	@additional_params: admin_approve_reject
		USERNAME: The user name for the member receiving the email.
	@description:
*/
$txt['admin_approve_reject_subject'] = 'Registro Rechazado';
$txt['admin_approve_reject_body'] = '{USERNAME},

Lamentablemente tu solicitud para unirse a {FORUMNAME} ha sido rechazada.

{REGARDS}';

/**
	@additional_params: admin_approve_delete
		USERNAME: The user name for the member receiving the email.
	@description:
*/
$txt['admin_approve_delete_subject'] = 'Cuenta Eliminada';
$txt['admin_approve_delete_body'] = '{USERNAME}, 

Tu cuenta en {FORUMNAME} ha sido eliminada. 

Esto puede haber sucedido porque nunca llegaste a activar tu cuenta. En tal caso, puedes registrarte de nuevo.

{REGARDS}';

/**
	@additional_params: admin_approve_remind
		USERNAME: The user name for the member receiving the email.
		ACTIVATIONLINK:  The URL link to activate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The URL to the page where the activation code can be entered.
		ACTIVATIONCODE: The activation code.
	@description:
*/
$txt['admin_approve_remind_subject'] = 'Recordatorio de Registro';
$txt['admin_approve_remind_body'] = '{USERNAME},

Aún no tienes tu cuenta activada en {FORUMNAME}.

Por favor, usa el siguiente enlace para activar tu cuenta: {ACTIVATIONLINK}.

Si tienes algún problema con la activación, por favor visita {ACTIVATIONLINKWITHOUTCODE} e introduce el código "{ACTIVATIONCODE}".

{REGARDS}';

/**
	@additional_params:
		USERNAME: The user name for the member receiving the email.
		ACTIVATIONLINK:  The URL link to activate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The URL to the page where the activation code can be entered.
		ACTIVATIONCODE: The activation code.
	@description:
*/
$txt['admin_register_activate_subject'] = 'Bienvenido a {FORUMNAME}';
$txt['admin_register_activate_body'] = 'Gracias por registrarse en {FORUMNAME}. Su usuario es {USERNAME} y su contraseña es {PASSWORD}. Debe activar su cuenta antes de poder iniciar sesión, para ello haga clic en el siguiente enlace:
 {ACTIVATIONLINK} En caso de que tenga algún problema con la activación, por favor visite {ACTIVATIONLINKWITHOUTCODE} e introduzca el código "{ACTIVATIONCODE}". {REGARDS}';

$txt['admin_register_immediate_subject'] = 'Bienvenido a {FORUMNAME}';
$txt['admin_register_immediate_body'] = 'Gracias por registrarse en {FORUMNAME}. Su usuario es {USERNAME}, su contraseña es {PASSWORD} y el enlace al foro es: {SCRIPTURL}. {REGARDS}';

/**
	@additional_params: new_announcement
		TOPICSUBJECT: The subject of the topic being announced.
		MESSAGE: The message body of the first post of the announced topic.
		TOPICLINK: A link to the topic being announced.
		UNSUBSCRIBELINK: Link to unsubscribe from announcements.
	@description:
*/
$txt['new_announcement_subject'] = 'Nuevo Anuncio: {TOPICSUBJECT}';
$txt['new_announcement_body'] = '{MESSAGE} Para cancelar la suscripción a estos anuncios, inicie sesión en el foro y desmarque la casilla «recibir anuncios del foro y notificaciones importantes en mi correo electrónico» de su perfil. Puede ver el anuncio completo en el siguiente enlace: {TOPICLINK} {REGARDS}';

/**
	@additional_params: notify_boards_once_body
		TOPICSUBJECT: The subject of the topic causing the notification
		TOPICLINK: A link to the topic.
		MESSAGE: This is the body of the message.
		UNSUBSCRIBELINK: Link to unsubscribe from notifications.
	@description:
*/
$txt['notify_boards_once_body_subject'] = 'Nuevo Tema: {TOPICSUBJECT}';
$txt['notify_boards_once_body_body'] = 'Un nuevo tema, \'{TOPICSUBJECT}\', ha sido creado en un foro que usted está viendo. Puede verlo en {TOPICLINK} serán publicados más temas, pero no recibirá más notificaciones de correo electrónico hasta que regrese al foro y lea algunas de ellas. El contenido del tema será mostrado abajo: {MESSAGE} Cancele la suscripción de nuevos temas de este foro accediendo a este enlace: {UNSUSCRIBELINK} {REGARDS}';

/**
	@additional_params: notify_boards_once
		TOPICSUBJECT: The subject of the topic causing the notification
		TOPICLINK: A link to the topic.
		UNSUBSCRIBELINK: Link to unsubscribe from notifications.
	@description:
*/
$txt['notify_boards_once_subject'] = 'Nuevo Tema: {TOPICSUBJECT}';
$txt['notify_boards_once_body'] = 'Un nuevo tema, \'{TOPICSUBJECT}\', ha sido creado en un foro que usted está viendo. Puede verlo en {TOPICLINK} Más temas serán publicados, pero usted no recibirá más notificaciones de correo electrónico hasta que entre al foro y lea algunas de ellas. Cancele la suscripción de nuevos temas de este foro accediendo a este enlace: {UNSUSCRIBELINK} {REGARDS}';

/**
	@additional_params: notify_boards_body
		TOPICSUBJECT: The subject of the topic causing the notification
		TOPICLINK: A link to the topic.
		MESSAGE: This is the body of the message.
		UNSUBSCRIBELINK: Link to unsubscribe from notifications.
	@description:
*/
$txt['notify_boards_body_subject'] = 'Nuevo Tema: {TOPICSUBJECT}';
$txt['notify_boards_body_body'] = 'Un nuevo tema, \'{TOPICSUBJECT}\', ha sido creado en un foro que usted está viendo. Puede verlo en {TOPICLINK} El contenido del tema será mostrado a continuación: {MESSAGE} Cancele la suscripción de nuevos temas de este foro accediento a este enlace: {UNSUSCRIBELINK} {REGARDS}';

/**
	@additional_params: notify_boards
		TOPICSUBJECT: The subject of the topic causing the notification
		TOPICLINK: A link to the topic.
		UNSUBSCRIBELINK: Link to unsubscribe from notifications.
	@description:
*/
$txt['notify_boards_subject'] = 'Nuevo Tema: {TOPICSUBJECT}';
$txt['notify_boards_body'] = 'Un nuevo tema, \'{TOPICSUBJECT}\', ha sido creado en un foro que usted está viendo. Puede verlo en {TOPICLINK} Cancele la suscripción de nuevos temas de este foro accediendo a este enlace: {UNSUSCRIBELINK} {REGARDS}';

/**
	@additional_params: alert_unapproved_reply
		SUBJECT: The subject of the topic causing the notification
		LINK: A link to the topic.
	@description:
*/
$txt['alert_unapproved_reply_subject'] = 'Respuesta a tema: {SUBJECT}';
$txt['alert_unapproved_reply_body'] = '{POSTERNAME} ha publicado una respuesta en el tema {SUBJECT}. Puede verlo en {LINK} {REGARDS}';

/**
	@additional_params: unapproved_attachment
		SUBJECT: The subject of the topic causing the notification
		LINK: A link to the message with the attachment.
	@description:
*/
$txt['unapproved_attachment_subject'] = 'Nuevo Adjunto No Aprobado en: {SUBJECT}';
$txt['unapproved_attachment_body'] = 'Se ha incluido un nuevo adjunto en \'{SUBJECT}\' que necesita ser aprobado. Puedes aprobar o rechazar este adjunto desde el siguiente enlace que te llevará al mensaje del que forma parte. {LINK} 

{REGARDS} ';

/**
	@additional_params: alert_unapproved_post
		SUBJECT: The subject of the topic causing the notification
		LINK: A link to the topic.
	@description:
*/
$txt['alert_unapproved_post_subject'] = 'Nuevo mensaje esperando aprobación: {SUBJECT}';
$txt['alert_unapproved_post_body'] = 'Un nuevo mensaje creado, \'{SUBJECT}\', está esperando aprobación. Puedes aprobarlo o rechazarlo haciendo click en el siguiente enlace: {LINK}

{REGARDS}';

/**
	@additional_params: alert_unapproved_topic
		SUBJECT: The subject of the topic causing the notification
		LINK: A link to the topic.
	@description:
*/
$txt['alert_unapproved_topic_subject'] = 'Nuevo tema esperando aprobación: {SUBJECT}';
$txt['alert_unapproved_topic_body'] = 'Un nuevo tema creado, \'{SUBJECT}\' está esperando aprobación. Puedes aprobarlo o rechazarlo haciendo click en el siguiente enlace: {LINK} {REGARDS}';

/**
	@additional_params: request_membership
		RECPNAME: The name of the person receiving the email
		APPLYNAME: The name of the person applying for group membership
		GROUPNAME: The name of the group being applied to.
		REASON: The reason given by the applicant for wanting to join the group.
		MODLINK: Link to the group moderation page.
	@description:
*/
$txt['request_membership_subject'] = 'Nueva solicitud de Grupo';
$txt['request_membership_body'] = '{RECPNAME}, {APPYNAME} ha solicitado ser miembro del grupo "{GROUPNAME}. El usuario ha dado la siguiente justificación: {REASON} Puede aprobar o rechazar esta aplicación accediendo al siguiente enlace: {MODLINK} {REGARDS}';

/**
	@additional_params: paid_subscription
		REALNAME: The real (display) name of the person receiving the email.
		PROFILE_LINK: Link to profile of member receiving email where can renew.
		SUBSCRIPTION: Name of the subscription.
		END_DATE: Date it expires.
	@description:
*/
$txt['paid_subscription_reminder_subject'] = 'Tu suscripción en {FORUMNAME} está a punto de expirar';
$txt['paid_subscription_reminder_body'] = '{REALNAME},

Su suscripción a {FORUMNAME} está a punto de vencer. Si ha elegido la renovación automática, no es necesario que realice ninguna acción; de lo contrario, es posible que desee considerar suscribirse una vez más. Los detalles están a continuación: 

Nombre de la suscripción: {SUBSCRIPTION}
Vencimiento: {END_DATE}

Para editar su suscripcion, visite la siguiente URL:
{PROFILE_LINK}

{REGARDS}';

/**
	@additional_params: activate_reactivate
		ACTIVATIONLINK:  The URL link to reactivate the member's account.
		ACTIVATIONCODE:  The code needed to reactivate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The URL to the page where the activation code can be entered.
	@description:
*/
$txt['activate_reactivate_subject'] = 'Bienvenido de nuevo a {FORUMNAME}';
$txt['activate_reactivate_body'] = 'Con motivo de revalidar tu dirección de correo electrónico, tu cuenta ha sido desactivada. Haz click en el siguiente enlace para activarla de nuevo {ACTIVATIONLINK}

Si tienes algún problema con la activación, por favor visita {ACTIVATIONLINKWITHOUTCODE} e introduce el código "{ACTIVATIONCODE}".

{REGARDS}';

/**
	@additional_params: forgot_password
		REALNAME: The real (display) name of the person receiving the reminder.
		REMINDLINK: The link to reset the password.
		IP: The IP address of the requester.
		MEMBERNAME:
	@description:
*/
$txt['forgot_password_subject'] = 'Nueva contraseña para {FORUMNAME}';
$txt['forgot_password_body'] = 'Estimado {REALNAME},

Este correo ha sido enviado porque se ha seleccionado la opción de restablecer contraseña en tu cuenta. Para establecer una nueva contraseña, haz click en el siguiente enlace: {REMINDLINK}

IP: {IP}
Nombre de Usuario: {MEMBERNAME}

{REGARDS}';

/**
	@additional_params: send_email
		EMAILSUBJECT: The subject the user wants to email.
		EMAILBODY: The body the user wants to email.
		SENDERNAME: The name of the member sending the email.
		RECPNAME: The name of the person receiving the email.
	@description:
*/
$txt['send_email_subject'] = '{EMAILSUBJECT}';
$txt['send_email_body'] = '{EMAILBODY}';

/**
	@additional_params: report_to_moderator
		TOPICSUBJECT: The subject of the reported post.
		POSTERNAME: The reported post's author's name.
		REPORTERNAME: The name of the person reporting the post.
		TOPICLINK: The URL of the post that is being reported.
		REPORTLINK: The URL of the moderation center report.
		COMMENT: The comment left by the reporter, hopefully to explain why they are reporting the post.
	@description: When a user reports a post this email is sent out to moderators and admins of that board.
*/
$txt['report_to_moderator_subject'] = 'Tema informado por {POSTERNAME}: {TOPICSUBJECT}';
$txt['report_to_moderator_body'] = 'El siguiente mensaje, \'{TOPICSUBJECT}\' de {POSTERNAME} ha sido informado por {REPORTERNAME} en un foro que tú moderas:

El tema: {TOPICLINK}

Centro de Moderación: {REPORTLINK}

El usuario que ha reportado ha dejado el siguiente comentario: {COMMENT}

{REGARDS}';

/**
	@additional_params: report_to_moderator
		TOPICSUBJECT: The subject of the reported post.
		POSTERNAME: The reported post's author's name.
		COMMENTERNAME: The name of the person who replied to the report.
		TOPICLINK: The URL of the post that is being reported.
		REPORTLINK: The URL of the moderation center report.
	@description: When a moderator replies to a moderation report, this can be sent to the other moderators who previously replied.
*/
$txt['reply_to_moderator_subject'] = 'Ir al tema informado: {TOPICSUBJECT} de {POSTERNAME}';
$txt['reply_to_moderator_body'] = 'Anteriormente «{TOPICSUBJECT}» había sido reportado a los moderadores. Desde entonces, {COMMENTERNAME} ha añadido un comentario al reporte. Puede encontrar más información en el foro. El tema: {TOPICLINK} Centro de moderación: {REPORTLINK} {REGARDS}';

/**
	@additional_params: report_user_profile
		MEMBERNAME: The display name of the reported user
		REPORTERNAME: The name of the person reporting the profile
		PROFILELINK: The link to the profile that was reported
		COMMENT: The comment left by the reporter.
 	@description: When a user's profile is reported
*/
$txt['report_member_profile_subject'] = 'Perfil Reportado: {MEMBERNAME}';
$txt['report_member_profile_body'] = 'El perfil de "{MEMBERNAME}" ha sido informado por {REPORTERNAME}.

El perfil: {PROFILELINK}

Centro de Moderación: {REPORTLINK}

El usuario que ha informado dejó el siguiente comentario: {COMMENT}

{REGARDS}';

/**
	@additional_params: report_user_profile
		MEMBERNAME: The display name of the reported user
		COMMENTERNAME: The name of the person who added the comment
		PROFILELINK: The link to the profile that was reported
 	@description: When someone replies to a report about a profile, this can be sent to others who replied
*/
$txt['reply_to_member_report_subject'] = 'Ir al perfil informado: {MEMBERNAME}';
$txt['reply_to_member_report_body'] = 'Anteriormente, el perfil de {MEMBERNAME} fue informado. Desde entonces, {COMMENTERNAME} ha añadido un comentario al informe.

Más información en el foro.

El perfil: {PROFILELINK}

Centro de Moderación: {REPORTLINK}

{REGARDS}';

/**
	@additional_params: change_password
		USERNAME: The user name for the member receiving the email.
		PASSWORD: The password for the member.
	@description:
*/
$txt['change_password_subject'] = 'Nuevos detalles de Contraseña';
$txt['change_password_body'] = 'Querido {USERNAME} Sus datos de ingreso en {FORUMNAME} han sido modificados y su contraseña ha sido reseteada. Abajo se encuentran sus nuevos datos de ingreso. Su nombre de usuario es "{USERNAME}" y su contraseña es "{PASSWORD}". Deberá cambiarla luego de iniciar sesión, accediendo a la página de perfil o visitando esta página luego de su inicio de sesión: {SCRIPTURL}?action=profile {REGARDS}';

/**
	@additional_params: register_activate
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		PASSWORD: The password for the member.
		ACTIVATIONLINK:  The URL link to reactivate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The URL to the page where the activation code can be entered.
		ACTIVATIONCODE:  The code needed to reactivate the member's account.
		FORGOTPASSWORDLINK: The URL to the "forgot password" page.
	@description:
*/
$txt['register_activate_subject'] = 'Bienvenido a {FORUMNAME}';
$txt['register_activate_body'] = 'Gracias por registrarse en {FORUMNAME}. Su nombre de usuario es {USERNAME}. Si olvidó su contraseña, puede restaurarla visitando {FORGOTPASSWORDLINK}. Es necesario que active su cuenta antes de poder iniciar sesión. Para hacerlo, por favor visite este enlace: {ACTIVATIONLINK} En caso de que tenga algún problema con la activación, por favor visite {ACTIVATIONLINKWITHOUTCODE} y utilice este código "{ACTIVATIONCODE}". {REGARDS}';

/**
	@additional_params: register_coppa
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		PASSWORD: The password for the member.
		COPPALINK:  The URL link to the coppa form.
		FORGOTPASSWORDLINK: The URL to the "forgot password" page.
	@description:
*/
$txt['register_coppa_subject'] = 'Bienvenido a {FORUMNAME}';
$txt['register_coppa_body'] = 'Gracias por registrarse en {FORUMNAME}. Su nombre de usuario es {USERNAME}. Si olvidó su contraseña, puede restaurarla visitando {FORGOTPASSWORDLINK}. Antes de que pueda iniciar sesión, el administrador requiere el consentimiento de su(s) padre(s)/tutor(es) para que se unan a la comunidad. Se puede obtener más información en el siguiente enlace: {COPPALINK}. {REGARDS}

';

/**
	@additional_params: register_immediate
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		PASSWORD: The password for the member.
		FORGOTPASSWORDLINK: The URL to the "forgot password" page.
	@description:
*/
$txt['register_immediate_subject'] = 'Bienvenido a {FORUMNAME}';
$txt['register_immediate_body'] = 'Gracias por registrarte en {FORUMNAME}.

Tu nombre de usuario es {USERNAME}. Si olvidas tu contraseña, puedes cambiarla en {FORGOTPASSWORDLINK}.

{REGARDS}';

/**
	@additional_params: register_pending
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		PASSWORD: The password for the member.
		FORGOTPASSWORDLINK: The URL to the "forgot password" page.
	@description:
*/
$txt['register_pending_subject'] = 'Bienvenido a {FORUMNAME}';
$txt['register_pending_body'] = 'Hola {REALNAME}, se recibió su solicitud de registro en {FORUMNAME}. El nombre de usuario con el que se registró era {USERNAME}. Si olvida su contraseña, puede cambiarla en {FORGOTPASSWORDLINK}. Antes de que puedas iniciar sesión y comenzar a usar el foro, su solicitud será revisada y aprobada. Cuando esto suceda, recibirá otro correo electrónico desde esta dirección. {REGARDS}';

/**
	@additional_params: notification_reply
		TOPICSUBJECT:
		POSTERNAME:
		TOPICLINK:
		UNSUBSCRIBELINK:
	@description:
*/
$txt['notification_reply_subject'] = 'Respuesta a Tema: {TOPICSUBJECT}';
$txt['notification_reply_body'] = 'Se ha publicado una respuesta a un tema que estabas viendo de {POSTERNAME}. Ver la respuesta en: {TOPICLINK} Anular la notificacion a este tema utilizando este vínculo: {UNSUBSCRIBELINK}{REGARDS}';

/**
	@additional_params: notification_reply_body
		TOPICSUBJECT:
		POSTERNAME:
		TOPICLINK:
		UNSUBSCRIBELINK:
		MESSAGE:
	@description:
*/
$txt['notification_reply_body_subject'] = 'Respuesta a Tema: {TOPICSUBJECT}';
$txt['notification_reply_body_body'] = 'Se ha publicado una respuesta a un tema que estabas viendo de {POSTERNAME}. Ver la respuesta en: {TOPICLINK} Anular la notificacion a este tema utilizando este vínculo: {UNSUBSCRIBELINK} El texto de la respuesta se muestra a continuación: {MESSAGE}{REGARDS}';

/**
	@additional_params: notification_reply_once
		TOPICSUBJECT:
		POSTERNAME:
		TOPICLINK:
		UNSUBSCRIBELINK:
	@description:
*/
$txt['notification_reply_once_subject'] = 'Respuesta a Tema: {TOPICSUBJECT}';
$txt['notification_reply_once_body'] = 'Se ha publicado una respuesta en un tema que estabas viendo de {POSTERNAME}. Ver la respuesta en: {TOPICLINK} Anular la notificacion a este tema mediante este vínculo: {UNSUBSCRIBELINK} Se pueden publicar más respuestas, pero no recibirá más notificaciones hasta que leas el tema. {REGARDS}';

/**
	@additional_params: notification_reply_body_once
		TOPICSUBJECT:
		POSTERNAME:
		TOPICLINK:
		UNSUBSCRIBELINK:
		MESSAGE:
	@description:
*/
$txt['notification_reply_body_once_subject'] = 'Respuesta a Tema: {TOPICSUBJECT}';
$txt['notification_reply_body_once_body'] = 'Se ha publicado una respuesta a un tema que has mirado de {POSTERNAME}. Ver la respuesta en: {TOPICLINK} Anular la notificacion a este tema utilizando este vínculo: {UNSUBSCRIBELINK} El texto de la respuesta se muestra a continuación: {MESSAGE} Más respuestas pueden ser publicadas, pero no recibirá más notificaciones hasta que haya leído el tema. {REGARDS}';

/**
	@additional_params: notification_sticky
	@description:
*/
$txt['notification_sticky_subject'] = 'Tema Fijado: {TOPICSUBJECT} ';
$txt['notification_sticky_body'] = 'Un tema que estabas viendo ha sido marcado como un tema fijo. Ver el tema en: {TOPICLINK} Anular la notificacion a este tema utilizando este vínculo: {UNSUBSCRIBELINK} {REGARDS}';

/**
	@additional_params: notification_lock
	@description:
*/
$txt['notification_lock_subject'] = 'Tema Cerrado: {TOPICSUBJECT}';
$txt['notification_lock_body'] = 'Un tema que estabas viendo ha sido bloqueado. Ver el tema en: {TOPICLINK} Anular la notificacion a este tema utilizando este vínculo: {UNSUBSCRIBELINK} {REGARDS}';

/**
	@additional_params: notification_unlock
	@description:
*/
$txt['notification_unlock_subject'] = 'Tema Reabierto: {TOPICSUBJECT}';
$txt['notification_unlock_body'] = 'Un tema que estabas viendo ha sido desbloqueado. Ver el tema en: {TOPICLINK} Anular la notificacion a este tema utilizando este vínculo: {UNSUBSCRIBELINK} {REGARDS}';

/**
	@additional_params: notification_remove
	@description:
*/
$txt['notification_remove_subject'] = 'Tema Eliminado: {TOPICSUBJECT}';
$txt['notification_remove_body'] = 'Un tema que estabas viendo ha sido eliminado. 

{REGARDS}';

/**
	@additional_params: notification_move
	@description:
*/
$txt['notification_move_subject'] = 'Tema Movido: {TOPICSUBJECT}';
$txt['notification_move_body'] = 'Un tema que estabas viendo ha sido movido a otro foro. Ver el tema en: {TOPICLINK} Anular la notificacion a este tema utilizando este vínculo: {UNSUBSCRIBELINK} {REGARDS}';

/**
	@additional_params: notification_merged
	@description:
*/
$txt['notification_merge_subject'] = 'Tema Combinado: {TOPICSUBJECT}';
$txt['notification_merge_body'] = 'Un tema que estabas mirando se ha unificado con otro tema. Vea el nuevo tema combinado en: {TOPICLINK} Anule la notificacion a este tema utilizando este vínculo: {UNSUBSCRIBELINK} {REGARDS}';

/**
	@additional_params: notification_split
	@description:
*/
$txt['notification_split_subject'] = 'Tema Dividido: {TOPICSUBJECT}';
$txt['notification_split_body'] = 'Un tema que estabas viendo se ha dividido en dos o más temas. Vea lo que queda de este tema en: {TOPICLINK} Anular la notificacion a este tema utilizando este vínculo: {UNSUBSCRIBELINK} {REGARDS}';

/**
	@additional_params: admin_notify
		USERNAME:
		PROFILELINK:
	@description:
*/
$txt['admin_notify_subject'] = 'Hay un nuevo usuario en tu foro';
$txt['admin_notify_body'] = '{USERNAME} se acaba registrado como usuario en tu foro. 

Puedes ver su perfil en el siguiente enlace: {PROFILELINK}

{REGARDS}';

/**
	@additional_params: admin_notify_approval
		USERNAME:
		PROFILELINK:
		APPROVALLINK:
	@description:
*/
$txt['admin_notify_approval_subject'] = 'Se ha unido un nuevo miembro';
$txt['admin_notify_approval_body'] = '{USERNAME} se acaba de unir como nuevo miembro de tu foro. Haz click en el siguiente enlace para ver su perfil. 

{PROFILELINK}

Antes de que este miembro pueda empezar a publicar mensajes debe tener su cuenta aprobada. Haz click en el siguiente enlace para ir a la página de aprobación. {APPROVALLINK}

{REGARDS}';

/**
	@additional_params: admin_attachments_full
		REALNAME:
	@description:
*/
$txt['admin_attachments_full_subject'] = '¡Urgente! Directorio de Adjuntos casi lleno';
$txt['admin_attachments_full_body'] = '{REALNAME}, el directorio de archivos adjuntos de {FORUMNAME} está casi lleno. Por favor visite el foro para resolver este problema. Una vez que el directorio de archivos adjuntos alcanza su tamaño máximo permitido, los usuarios no podrán continuar publicando archivos adjuntos ni subir avatares personalizados (si está habilitado). {REGARDS}';

/**
	@additional_params: paid_subscription_refund
		NAME: Subscription title.
		REALNAME: Recipients name
		REFUNDUSER: Username who took out the subscription.
		REFUNDNAME: User's display name who took out the subscription.
		DATE: Today's date.
		PROFILELINK: Link to members profile.
	@description:
*/
$txt['paid_subscription_refund_subject'] = 'Suscripción de Pago Reembolsada';
$txt['paid_subscription_refund_body'] = '{REALNAME},

Un miembro de tu foro ha recibido el reembolso de una suscripción de pago. A continuación se muestran los detalles de la suscripción:

Nombre de la Suscripción: {NAME}

Nombre del Usuario: {REFUNDNAME} ({REFUNDUSER})

Fecha: {DATE}

Puedes ver el perfil de este miembro haciendo click en el siguiente enlace: {PROFILELINK}

{REGARDS}';

/**
	@additional_params: paid_subscription_new
		NAME: Subscription title.
		REALNAME: Recipients name
		SUBEMAIL: Email address of the user who took out the subscription
		SUBUSER: Username who took out the subscription.
		SUBNAME: User's display name who took out the subscription.
		DATE: Today's date.
		PROFILELINK: Link to members profile.
	@description:
*/
$txt['paid_subscription_new_subject'] = 'Nueva Suscripción de Pago';
$txt['paid_subscription_new_body'] = '{REALNAME},

Un miembro ha adquirido una nueva suscripción de pago: A continuación se muestran los detalles de la suscripción:

Nombre de la Suscripción: {NAME}

Nombre del Usuario: {SUBNAME} ({SUBUSER})

Correo Electrónico del Usuario: {SUBEMAIL}

Precio: {PRICE}

Fecha: {DATE}

Puedes ver el perfil del miembro haciendo click en el siguiente enlace: {PROFILELINK}

{REGARDS}';

/**
	@additional_params: paid_subscription_error
		ERROR: Error message.
		REALNAME: Recipients name
	@description:
*/
$txt['paid_subscription_error_subject'] = 'Ocurrió un error con la Suscripción de Pago';
$txt['paid_subscription_error_body'] = 'Estimado {REALNAME}, Ocurrieron los siguientes errores cuando se procesaba una suscripción de pago --------------------------------------------------------------- {ERROR}

{REGARDS} ';

/**
	@additional_params: new_pm
		SUBJECT: The personal message subject.
		SENDER:  The user name for the member sending the personal message.
		READLINK:  The link to directly access the read page.
		REPLYLINK:  The link to directly access the reply page.
	@description: A notification email sent to the receivers of a personal message
*/
$txt['new_pm_subject'] = 'Nuevo Mensaje Privado: {SUBJECT}';
$txt['new_pm_body'] = 'Acaba de recibir un mensaje privado de {SENDER} en {FORUMNAME}. IMPORTANTE: Recuerde, esto es solo una notificación. Por favor no responda a este correo electrónico. Lea este mensaje personal aquí: {READLINK} Responda a este mensaje privado aquí: {REPLYLINK}';

/**
	@additional_params: new_pm_body
		SUBJECT: The personal message subject.
		SENDER:  The user name for the member sending the personal message.
		MESSAGE:  The text of the personal message.
		REPLYLINK:  The link to directly access the reply page.
	@description: A notification email sent to the receivers of a personal message
*/
$txt['new_pm_body_subject'] = 'Nuevo Mensaje Privado: {SUBJECT}';
$txt['new_pm_body_body'] = 'Acaba de recibir un mensaje privado de {SENDER} en {FORUMNAME}. IMPORTANTE: Recuerde, esto es solo una notificación. Por favor no responda a este correo electrónico. Lea este mensaje personal aquí: {READLINK} Responda a este mensaje privado aquí: {REPLYLINK}';

/**
	@additional_params: new_pm_tolist
		SUBJECT: The personal message subject.
		SENDER:  The user name for the member sending the personal message.
		READLINK:  The link to directly access the read page.
		REPLYLINK:  The link to directly access the reply page.
		TOLIST:  The list of users that will receive the personal message.
	@description: A notification email sent to the receivers of a personal message
*/
$txt['new_pm_tolist_subject'] = 'Nuevo Mensaje Privado: {SUBJECT}';
$txt['new_pm_tolist_body'] = 'Vos y {TOLIST} acaban de recibir un mensaje privado de {SENDER} en {FORUMNAME} IMPORTANTE: recuerde, esto es solo una notificación. Por favor no responder a este correo electrónico. Lea este mensaje personal aquí: {READLINK} Responda a este mensaje privado (solo al usuario que envió el mensaje) aquí: {REPLYLINK}';

/**
	@additional_params: new_pm_body_tolist
		SUBJECT: The personal message subject.
		SENDER:  The user name for the member sending the personal message.
		MESSAGE:  The text of the personal message.
		REPLYLINK:  The link to directly access the reply page.
		TOLIST:  The list of users that will receive the personal message.
	@description: A notification email sent to the receivers of a personal message
*/
$txt['new_pm_body_tolist_subject'] = 'Nuevo Mensaje Privado: {SUBJECT}';
$txt['new_pm_body_tolist_body'] = 'Vos y {TOLIST} acaban de recibir un mensaje privado de {SENDER} en {FORUMNAME} IMPORTANTE: recuerde, esto es solo una notificación. Por favor no responder a este correo electrónico. Lea este mensaje personal aquí: {READLINK} Responda a este mensaje privado (solo al usuario que envió el mensaje) aquí: {REPLYLINK}';

/**
	@additional_params: msg_quote
		CONTENTSUBJECT: The post subject.
		QUOTENAME:  The user name for the member creating the quote
		MEMBERNAME:  The user name for the member being quoted
		CONTENTLINK:  The post's link
	@description: A notification email sent to the members who've been quoted in a post
 */
$txt['msg_quote_subject'] = 'Tu mensaje ha sido citado en el mensaje: {CONTENTSUBJECT}';
$txt['msg_quote_body'] = 'Hola {MEMBERNAME},

Tu mensaje ha sido citado en el tema titulado "{CONTENTSUBJECT}" de {QUOTENAME}, puedes ver el mensaje aquí:{CONTENTLINK}

{REGARDS} ';

/**
	@additional_params: msg_mention
		CONTENTSUBJECT: The post subject.
		MENTIONNAME:  The user name for the member creating the mention
		MEMBERNAME:  The user name for the member being mentioned
		CONTENTLINK:  The post's link
	@description: A notification email sent to the members who've been mentioned in a post
 */
$txt['msg_mention_subject'] = 'Has sido mencionado en el tema: {CONTENTSUBJECT}';
$txt['msg_mention_body'] = 'Hola {MEMBERNAME}, Has sido mencionado en el tema titulado "{CONTENTSUBJECT}" de {MENTIONNAME}. Puedes ver el mensaje aquí: {CONTENTLINK}

{REGARDS}';

/**
	@additional_params: happy_birthday
		REALNAME: The real (display) name of the person receiving the birthday message.
	@description: A message sent to members on their birthday.
*/
$txtBirthdayEmails['happy_birthday_subject'] = '¡Feliz cumpleaños desde {FORUMNAME}!. ';
$txtBirthdayEmails['happy_birthday_body'] = 'Estimado {REALNAME},

Desde {FORUMNAME} nos gustaría desearte un feliz cumpleaños. Esperamos que puedas disfrutar de un día lleno de alegría y felicidad.

{REGARDS}';
$txtBirthdayEmails['happy_birthday_author'] = '<a href="http://www.simplemachines.org/community/?action=profile;u=2676">Thantos</a>';

$txtBirthdayEmails['karlbenson1_subject'] = 'En el día de tu cumpleaños...';
$txtBirthdayEmails['karlbenson1_body'] = 'Podríamos haberte enviado una tarjeta de cumpleaños. Podríamos haberte enviado flores o una torta. Incluso podríamos haberte enviado uno de esos mensajes generados automáticamente para desearte un feliz cumpleaños en el que ni siquiera tengamos que reemplazar INSERTAR NOMBRE. Pero no lo hicimos... 

Por eso escribimos este saludo de cumpleaños solo para ti. Nos gustaría desearte un cumpleaños muy especial.


{REGARDS}

//:: Este mensaje se genera automáticamente :://';
$txtBirthdayEmails['karlbenson1_author'] = '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>';

$txtBirthdayEmails['nite0859_subject'] = '¡Feliz cumpleaños!';
$txtBirthdayEmails['nite0859_body'] = 'Tus amigos de {FORUMNAME} quieren dedicar un momento de su tiempo para desearte un feliz cumpleaños, {REALNAME}. Si hace tiempo que no nos visitas, por favor, date una vuelta para que podamos darte nuestras felicitaciones. Aunque hoy el cumpleaños es el tuyo, {REALNAME}, queremos recordarte que el mejor regalo es que estés con nosotros en nuestra comunidad.

Con nuestros mejores deseos, la plantilla de {FORUMNAME}';
$txtBirthdayEmails['nite0859_author'] = '<a href="http://www.simplemachines.org/community/?action=profile;u=46625">nite0859</a>';

$txtBirthdayEmails['zwaldowski_subject'] = 'Nuestra felicitación de cumpleaños para {REALNAME}';
$txtBirthdayEmails['zwaldowski_body'] = 'Estimado {REALNAME},

Ya ha pasado un año más. Desde {FORUMNAME} esperamos que haya estado lleno de felicidad y te deseamos lo mejor para este nuevo año que empiezas.

{REGARDS}';
$txtBirthdayEmails['zwaldowski_author'] = '<a href="http://www.simplemachines.org/community/?action=profile;u=72038">zwaldowski</a>';

$txtBirthdayEmails['geezmo_subject'] = '¡Feliz cumpleaños, {REALNAME}!';
$txtBirthdayEmails['geezmo_body'] = 'Do you know who\'s having a birthday today, {REALNAME}? We know... YOU! Happy birthday! You\'re now a year older but we hope you\'re a lot happier than last year. Enjoy your day today, {REALNAME}! - From your {FORUMNAME} family';
$txtBirthdayEmails['geezmo_author'] = '<a href="http://www.simplemachines.org/community/?action=profile;u=48671">geezmo</a>';

$txtBirthdayEmails['karlbenson2_subject'] = 'Un saludo de cumpleaños';
$txtBirthdayEmails['karlbenson2_body'] = 'Esperamos que tu cumpleaños sea el mejor de todos, aunque esté nublado, soleado o en cualquier clima. Que tengas una gran torta de cumpleaños junto a mucha diversión, y que nos cuentes cómo te ha ido. Deseamos que este mensaje te haya animado y que dure hasta el próximo año...

{REGARDS}.';
$txtBirthdayEmails['karlbenson2_author'] = '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>';

?>