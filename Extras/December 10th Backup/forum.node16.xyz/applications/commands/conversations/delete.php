<?php
//===================================//
// TidyBB Project                   //
//-----------------------------------//
// Website: https://www.tidybb.co.uk  //
// Email: info@tidynode.co.uk           //
// Build Series: 1.1                 //
//===================================//

/*
* Conversations module for TidyBB
* Everything that you want to display MUST be in the $content variable.
*/

if (!defined('BASEPATH')) {
    die();
}

$content = '';
$page_title = '';

if ($PGET->g('id')) {
    $MYSQL->bind('id', $PGET->g('id'));
    $msg = $MYSQL->query("SELECT * FROM {prefix}messages WHERE id = :id LIMIT 1");

    // store the data from database
    $sender_deleted = $msg['0']['sender_deleted'];
    $receiver_deleted = $msg['0']['receiver_deleted'];
    // If user is sender                         
    if ($msg['0']['message_sender'] == $LAYER->sess->data['id']) {
        // and the sender didn't delete the message
        if ($msg['0']['sender_deleted'] == 0) {
            $sender_deleted = 1;
        }
    }
    if ($msg['0']['message_receiver'] == $LAYER->sess->data['id']) {
        if ($msg['0']['receiver_deleted'] == 0) {
            $receiver_deleted = 1;
        }
    }
    $MYSQL->bindMore(
        array(
            'receiver_deleted' => $receiver_deleted,
            'sender_deleted' => $sender_deleted,
            'id' => $PGET->g('id')
        )
    );
    $MYSQL->query("UPDATE {prefix}messages SET receiver_deleted = :receiver_deleted, sender_deleted = :sender_deleted WHERE id = :id");


    if ($receiver_deleted == 1 && $sender_deleted == 1) {
        // Deleting the main message
        $MYSQL->bind('id', $PGET->g('id'));
        $MYSQL->query("DELETE FROM {prefix}messages WHERE id = :id");

        // Deleting the answers
        $MYSQL->bind('origin_message', $PGET->g('id'));
        $MYSQL->query("DELETE FROM {prefix}messages WHERE origin_message = :origin_message");
    }


    redirect(SITE_URL . '/conversations.php');
}

?>