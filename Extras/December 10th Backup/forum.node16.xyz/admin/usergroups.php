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

/*
 * Additional notice.
 */
if ($PGET->g('notice')) {
    switch ($PGET->g('notice')) {
        case "create_success":
            $notice .= $ADMIN->alert(
                'Usergroup has been created!',
                'success'
            );
            break;
        case "edit_success":
            $notice .= $ADMIN->alert(
                'Usergroup has been successfully edited!',
                'success'
            );
            break;
    }
}

/*
 * Delete Usergroup.
 */
if ($PGET->g('delete_usergroup')) {
    $d_u = clean($PGET->g('delete_usergroup'));
    /*$MYSQL->where('id', $d_u);
    $query = $MYSQL->get('{prefix}usergroups');*/
    $MYSQL->bind('id', $d_u);
    $query = $MYSQL->query('SELECT * FROM {prefix}usergroups WHERE id = :id');

    if (!empty($query)) {

        //$MYSQL->where('id', $d_u);
        $MYSQL->bind('id', $d_u);
        try {
            //$MYSQL->delete('{prefix}usergroups');
            $MYSQL->query('DELETE FROM {prefix}usergroups WHERE id = :id');
            $notice .= $ADMIN->alert(
                'Usergroup <strong>' . $query['0']['group_name'] . '</strong> has been deleted!',
                'success'
            );
        } catch (mysqli_sql_exception $e) {
            $notice .= $ADMIN->alert(
                'Error deleting usergroup.',
                'danger'
            );
        }

    } else {
        $notice .= $ADMIN->alert(
            'Usergroup does not exist!',
            'danger'
        );
    }
}

$query = $MYSQL->query("SELECT * FROM {prefix}usergroups WHERE id > 0");

$token = NoCSRF::generate('csrf_token');
$groups = '';
foreach ($query as $g) {
    $groups .= '<tr>
                        <td>
                          <strong>' . $g['group_name'] . '</strong>
                        </td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              Options <span class="caret"></span>
                            </button>
                            <span class="dropdown-arrow dropdown-arrow-inverse"></span>
                            <ul class="dropdown-menu dropdown-inverse" role="menu">
                              <li><a href="' . SITE_URL . '/admin/edit_usergroup.php/id/' . $g['id'] . '">Edit Usergroup</a></li>
                              <li><a href="' . SITE_URL . '/admin/usergroups.php/delete_usergroup/' . $g['id'] . '">Delete Usergroup</a></li>
                            </ul>
                          </div>
                        </td>
                      </tr>';
}

echo $ADMIN->box(
    'Usergroups  <p class="pull-right"><a href="' . SITE_URL . '/admin/new_usergroup.php" class="btn btn-default btn-xs">New Usergroup</a></p>',
    $notice .
    'You can manage the user groups here.',
    '<table class="table table-hover">
         <thead>
           <tr>
              <th style="width:80%">Group</th>
              <th style="width:20%">Controls</th>
            </tr>
         </thead>
         <tbody>
           ' . $groups . '
        </tbody>
       </table>',
    '12'
);

//require_once('template/bot.php');
echo $ADMIN->template('bot');
?>
