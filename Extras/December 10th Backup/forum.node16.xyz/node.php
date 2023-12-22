<?php
//===================================//
// TidyBB Project                   //
//-----------------------------------//
// Website: https://www.tidybb.co.uk  //
// Email: info@tidynode.co.uk           //
// Build Series: 1.1                 //
//===================================//

define('BASEPATH', 'Forum');
require_once('applications/wrapper.php');

if (!$LAYER->perm->check('access_administration')) {
    if($LAYER->data['site_enable'] == 0) {
        redirect(SITE_URL . '/offline.php');
    }
}

$LAYER->tpl->getTpl('page');

if ($PGET->s(true)) {

    $get = $PGET->s(true);

    //Node
    $node_id = $get['id'];
    $node_name = $get['value'];

    $MYSQL->bind('id', $node_id);
    $MYSQL->bind('name_friendly', $node_name);
    $query = $MYSQL->query("SELECT * FROM {prefix}forum_node WHERE id = :id AND name_friendly = :name_friendly");
    if (!empty($query)) {

        $allowed = explode(',', $query['0']['allowed_usergroups']);
        if (!in_array($LAYER->sess->data['user_group'], $allowed)) {
            redirect(SITE_URL . '/404.php');
        }

        if ($query['0']['node_type'] == 1) {
            $sub_forums = $LAYER->bb->subForums($query['0']['id']);
        } else {
            $sub_forums = '';
        }

        $breadcrumbs = $LAYER->tpl->entity(
            'breadcrumbs_before',
            array(
                'link',
                'name'
            ),
            array(
                SITE_URL . '/forum.php',
                $LANG['bb']['forum']
            )
        );

        if ($query['0']['node_type'] == 2) {
            $parent_node = node($query['0']['parent_node']);
            $ori_cat = category($parent_node['in_category']);

            $breadcrumbs .= $LAYER->tpl->entity(
                'breadcrumbs_before',
                array(
                    'link',
                    'name'
                ),
                array(
                    '#',
                    $ori_cat['category_title']
                )
            );

            $breadcrumbs .= $LAYER->tpl->entity(
                'breadcrumbs_before',
                array(
                    'link',
                    'name'
                ),
                array(
                    SITE_URL . '/node.php/' . $parent_node['name_friendly'] . '.' . $parent_node['id'],
                    $parent_node['node_name']
                )
            );

            $breadcrumbs .= $LAYER->tpl->entity(
                'breadcrumbs_current',
                array(
                    'name'
                ),
                array(
                    $query['0']['node_name']
                )
            );

        } elseif ($query['0']['node_type'] == 1) {

            $ori_cat = category($query['0']['in_category']);

            $breadcrumbs .= $LAYER->tpl->entity(
                'breadcrumbs_before',
                array(
                    'name',
                    'link'
                ),
                array(
                    $ori_cat['category_title'],
                    '#'
                )
            );

            $breadcrumbs .= $LAYER->tpl->entity(
                'breadcrumbs_current',
                array(
                    'name'
                ),
                array(
                    $query['0']['node_name']
                )
            );

        }

        $breadcrumbs = $LAYER->tpl->entity(
            'breadcrumbs',
            'bread',
            $breadcrumbs
        );

        $page = ($PGET->g('page')) ? clean($PGET->g('page')) : '1';

        $results = '';
        $t = '';
        /*foreach (getThreads($node_id, $page, $PGET->g('sort')) as $thread) {
            $t .= $LAYER->node->threads($thread['id']);
        }*/
        $t .= getThreads($node_id, $page, $PGET->g('sort'));

        $new_thread = '';
        if ($query['0']['node_locked'] == "0") {
            if ($LAYER->perm->check('create_thread')) {
                $new_thread .= $LAYER->tpl->entity(
                    'create_thread',
                    'url',
                    SITE_URL . '/new.php/node/' . $node_id,
                    'buttons'
                );
            }
        } else {
            if ($LAYER->perm->check('access_moderation')) {
                $new_thread .= $LAYER->tpl->entity(
                    'create_thread',
                    'url',
                    SITE_URL . '/new.php/node/' . $node_id,
                    'buttons'
                );
            }
        }

        $results .= '<div class="alert alert-info" role="alert">' . $query['0']['node_desc'] . '</div>';

        $results .= $LAYER->tpl->entity(
            'forum_listings_node_threads',
            array(
                'breadcrumbs',
                'sub_forums',
                'post_thread_button',
                'threads',
                //Sorting
                'sort_latest_created',
                'sort_name_desc',
                'sort_name_asc',
                'sort_last_updated'
            ),
            array(
                $breadcrumbs,
                $sub_forums,
                $new_thread,
                $t,
                //Sorting
                SITE_URL . '/node.php/' . $query['0']['name_friendly'] . '.' . $query['0']['id'] . '/sort/latest_created',
                SITE_URL . '/node.php/' . $query['0']['name_friendly'] . '.' . $query['0']['id'] . '/sort/name_desc',
                SITE_URL . '/node.php/' . $query['0']['name_friendly'] . '.' . $query['0']['id'] . '/sort/name_asc',
                SITE_URL . '/node.php/' . $query['0']['name_friendly'] . '.' . $query['0']['id'] . '/sort/last_updated'
            )
        );

        // Pagination
        $total_pages = ceil(fetchTotalThread($node_id) / THREAD_RESULTS_PER_PAGE);

        $sort = clean($PGET->g('sort'));
        $pag = '';
        if ($page != 1 && $total_pages > 1) {
            $LAYER->tpl->addPagination(
                '<<',
                ($sort) ? SITE_URL . '/node.php/' . $node_name . '.' . $node_id . '/sort/' . $sort . '/page/' . $i : SITE_URL . '/node.php/' . $node_name . '.' . $node_id . '/page/' . intval($page - 1)
            );
        }
        if ($total_pages > 1) {
            $i = '';
            for ($i = 1; $i <= $total_pages; ++$i) {
                $link = ($sort) ? SITE_URL . '/node.php/' . $node_name . '.' . $node_id . '/sort/' . $sort . '/page/' . $i : SITE_URL . '/node.php/' . $node_name . '.' . $node_id . '/page/' . $i;
                if ($i <= 2 || ($i == ($page - 1) && $page > 1) || $i == $page || $i == ($page + 1) || $i >= ($total_pages - 1)) {
                    if ($i == $page) {
                        $pag .= $LAYER->tpl->entity(
                            'pagination_link_current',
                            'page',
                            $i
                        );
                    } else {
                        $pag .= $LAYER->tpl->entity(
                            'pagination_links',
                            array(
                                'url',
                                'page'
                            ),
                            array(
                                $link,
                                $i
                            )
                        );
                    }
                } elseif (($i == 3 && $page != 1) || ($i == ($total_pages - 2) && $page != $total_pages)) {
                    $LAYER->tpl->addPagination(
                        '...',
                        '#'
                    );
                }
            }
        }
        if ($page != $total_pages && $total_pages > 1) {
            $LAYER->tpl->addPagination(
                '>>',
                ($sort) ? SITE_URL . '/node.php/' . $node_name . '.' . $node_id . '/sort/' . $sort . '/page/' . $i : SITE_URL . '/node.php/' . $node_name . '.' . $node_id . '/page/' . intval($page + 1)
            );
        }

        $results .= $LAYER->tpl->entity(
            'pagination',
            'pages',
            $pag
        );

        $LAYER->tpl->addParam(
            array(
                'page_title',
                'content'
            ),
            array(
                $query['0']['node_name'],
                $results
            )
        );

    } else {
        redirect(SITE_URL . '/404.php');
    }

} else {
    redirect(SITE_URL);
}

echo $LAYER->tpl->output();

?>
