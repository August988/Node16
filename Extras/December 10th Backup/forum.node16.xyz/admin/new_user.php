<?php
//===================================//
// TidyBB Project                   //
//-----------------------------------//
// Website: https://www.tidybb.co.uk  //
// Email: info@tidynode.co.uk           //
// Build Series: 1.1                 //
//===================================//

define('BASEPATH', 'Staff');
require_once('../applications/wrapper.php');

if (!$LAYER->perm->check('access_administration')) {
    redirect(SITE_URL);
}//Checks if user has permission to create a thread.
//require_once('template/top.php');
echo $ADMIN->template('top');
$notice = '';

function list_groups()
{
    global $MYSQL;
    $query = $MYSQL->query('SELECT * FROM {prefix}usergroups WHERE id > 0');
    $return = '';
    foreach ($query as $s) {
        $checked = ($s['id'] == $check) ? ' selected' : '';
        $return .= '<option value="' . $s['id'] . '"' . $checked . '>' . $s['group_name'] . '</option>';
    }
    return $return;
}


        if (isset($_POST['create'])) {
            try {
                NoCSRF::check('csrf_token', $_POST, true, 60*10, true);
                

                $username = clean($_POST['username']);
                $email = clean($_POST['email']);
                $password = $_POST['password'];
                $usergroup = clean($_POST['usergroup']);
                $time = time();

                if (!$username) {
                    throw new Exception ('All fields are required!');
                } else {
                    $MYSQL->bindMore(array(
                    'username' => $username,
                    'user_password' => encrypt($password),
                    'user_email' => $email,
                    'date_joined' => $time,
                    'user_disabled' => 0,
                    'usergroup' => $usergroup
                ));
                    try {
                        $MYSQL->query('INSERT INTO {prefix}users (username, user_password, user_email, date_joined, user_disabled, user_group) VALUES (:username, :user_password, :user_email, :date_joined, :user_disabled, :usergroup)');
                        redirect(SITE_URL . '/admin/members.php/notice/create_success');
                    } catch (mysqli_sql_exception $e) {
                        throw new Exception ('Error creating user.');
                    }

                }

            } catch (Exception $e) {
                $notice .= $ADMIN->alert(
                    $e->getMessage(),
                    'danger'
                );
            }
        }

        $token = NoCSRF::generate('csrf_token');
        echo $ADMIN->box(
            'Add New User <p class="pull-right"><a href="' . SITE_URL . '/admin/members.php" class="btn btn-default btn-xs">Back</a></p>',
            $notice .
            '<form action="" method="POST">
                <input type="hidden" name="csrf_token" value="' . $token . '">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" value="" class="form-control" />
                <label for="password">Password</label>
                <input type="password" name="password" id="password" value="" class="form-control" />
                <label for="email">Email Address</label>
                <input type="text" name="email" id="email" value="" class="form-control" />               
                <label for="usergroup">Usergroup</label><br />
                <select name="usergroup" id="usergroup" style="width:100%;">
                ' . list_groups() . '
                </select><br /><br />
                <input type="submit" name="create" value="Create User" class="btn btn-default" />
            </form>',
            '',
            '12'
        );

//require_once('template/bot.php');
echo $ADMIN->template('bot');
?>
