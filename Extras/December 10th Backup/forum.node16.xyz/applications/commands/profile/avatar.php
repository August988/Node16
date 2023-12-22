<?php
//===================================//
// TidyBB Project                   //
//-----------------------------------//
// Website: https://www.tidybb.co.uk  //
// Email: info@tidynode.co.uk           //
// Build Series: 1.1                 //
//===================================//

/*
 * Profile edit module for TidyBB.
 */
if (!defined('BASEPATH')) {
    die();
}
if (!$LAYER->sess->isLogged) {
    redirect(SITE_URL . '/404.php');
}//Check if user is logged in.

$page_title = $LANG['bb']['profile']['avatar'];
$content = '';
$notice = '';

if (isset($_POST['edit'])) {

    try {

        $mime = array(
            'image/png',
            'image/jpeg',
            'image/jpg',
            'image/gif'
        );

        $gravatar = (isset($_POST['gravatar'])) ? '1' : '0';

        if ($gravatar == "1") {
            $MYSQL->bind('id', $LAYER->sess->data['id']);
            if ($MYSQL->query("UPDATE {prefix}users SET avatar_type = 1 WHERE id = :id") > 0) {
                $notice .= $LAYER->tpl->entity(
                    'success_notice',
                    'content',
                    $LANG['bb']['profile']['successful_adding_gravatar']
                );
            } else {
                throw new Exception ($LANG['bb']['profile']['error_adding_gravatar']);
            }

        } elseif (!$_FILES['avatar']) {
            throw new Exception ($LANG['global_form_process']['all_fields_required']);
        } elseif (!in_array($_FILES['avatar']['type'], $mime)) {
            throw new Exception ($LANG['global_form_process']['invalid_file_format']);
        } else {

            $image = $_FILES['avatar'];
            $bin_dir = 'public/img/bin/' . $LAYER->sess->data['id'] . '.png';
            copy($image['tmp_name'], $bin_dir);
            list($width, $height, $type, $attr) = getimagesize($bin_dir);

            if ($width > 500 && $height > 500) {
                throw new Exception ($LANG['global_form_process']['img_dimension_limit']);
            } else {

                unlink($bin_dir);
                $avatar_dir = 'public/img/avatars/' . $LAYER->sess->data['id'] . '.png';
                if (copy($image['tmp_name'], $avatar_dir)) {
                    $MYSQL->bind('user_avatar', $LAYER->sess->data['id'] . '.png');
                    $MYSQL->bind('id', $LAYER->sess->data['id']);
                    $MYSQL->query("UPDATE {prefix}users SET user_avatar = :user_avatar WHERE id = :id");
                    $MYSQL->bind('id', $LAYER->sess->data['id']);
                    $MYSQL->query("UPDATE {prefix}users SET avatar_type = 0 WHERE id = :id");
                    $notice .= $LAYER->tpl->entity(
                        'success_notice',
                        'content',
                        $LANG['bb']['profile']['successful_upload_avatar']
                    );

                } else {
                    throw new Exception ($LANG['bb']['profile']['error_upload_avatar']);
                }

            }

        }

    } catch (Exception $e) {
        $notice .= $LAYER->tpl->entity(
            'danger_notice',
            'content',
            $e->getMessage()
        );
    }

}

//Breadcrumbs
$LAYER->tpl->addBreadcrumb(
    $LANG['bb']['forum'],
    SITE_URL . '/forum.php'
);
$LAYER->tpl->addBreadcrumb(
    $LANG['bb']['members']['home'],
    SITE_URL . '/conversations.php'
);
$LAYER->tpl->addBreadcrumb(
    $LANG['bb']['profile']['avatar'],
    '#',
    true
);
$bc = $LAYER->tpl->breadcrumbs();

$gravatar_checked = ($LAYER->sess->data['avatar_type'] == "1") ? ' checked' : '';
$content .= '<form id="TIDY_form" action="" method="POST" enctype="multipart/form-data">
                 <div class="iko avatar_uploader">
                   <label for="avatar">' . $LANG['bb']['profile']['change_avatar'] . '</label>
                   <input type="file" name="avatar" id="avatar" />
                   <br />
                 </div>
                 <input type="checkbox" id="gravatar" name="gravatar" value="1"' . $gravatar_checked . ' /> <label for="gravatar">' . $LANG['bb']['profile']['use_gravatar'] . '</label>
                 <br /><br />
                 <input type="submit" name="edit" value="' . $LANG['bb']['profile']['form_save'] . '" />
               </form>';

$content = $bc . $notice . $content;

?>
