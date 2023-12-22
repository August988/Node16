<?php
//===================================//
// TidyBB Project                   //
//-----------------------------------//
// Website: https://www.tidybb.co.uk  //
// Email: info@tidynode.co.uk           //
// Build Series: 1.1                 //
//===================================//

/*
 * Additional Parsing Library of TidyBB
 */

if (!defined('BASEPATH')) {
    die();
}

class Library_Parse
{

    private $custom_codes = array();

    /*
     * Adding a BBCode
     */
    public function addCode($search, $replace)
    {
        $this->custom_codes[$search] = $replace;
    }

    /*
     * Parsing BBCode into HTML.
     */
    public function parse($string)
    {
        global $ICONS, $SYNONYM;
        // closures can't access $this directly until PHP 5.4
        $this_object = $this;

        $string = str_replace(
            array(
                '<',
                '>'
            ),
            array(
                '&lt;',
                '&gt;'
            ),
            $string
        );
        $uid = uniqid();
        $tags = array(
            #filetag
           '#\\[file\\](.*?)\\[/file\\]#uis' => function ($matches) {
                $output = '';
                global $DL;
                $id = trim($matches[1]);
                if (file_exists(SITE_PATH.'/applications/apps/download/functions.php')) {
                    $output = $DL->bbcode_file($id);
                } else {
                    $output = '<div class="alert alert-danger" role="alert"><i>This forum does not have Downloads installed</i></div>';
                }

                return $output;
            },
            // bold
            '#\\[b\\](.*?)\\[/b\\]#uis' => '<b>\\1</b>',
            // italic
            '#\\[i\\](.*?)\\[/i\\]#uis' => '<i>\\1</i>',
            // underlined
            '#\\[u\\](.*?)\\[/u\\]#uis' => '<u>\\1</u>',
            // strikethrough
            '#\\[s\\](.*?)\\[/s\\]#uis' => '<del>\\1</del>',
            // aligned left
            '#\\[left\\](.*?)\\[/left\\]#uis' => '<p align="left">\\1</p>',
            // centered
            '#\\[center\\](.*?)\\[/center\\]#uis' => '<p align="center">\\1</p>',
            // aligned right
            '#\\[right\\](.*?)\\[/right\\]#uis' => '<p align="right">\\1</p>',
            // font size
            '#\\[size=([^\\]]*?)\\](.*?)\\[/size\\]#uis' => '<span style="font-size: \\1;">\\2</span>',
            // font color
            '#\\[color=([^\\]]*?)\\](.*?)\\[/color\\]#uis' => '<span style="color: \\1;">\\2</span>',
            // font face
            '#\\[font=([^\\]]*?)\\](.*?)\\[/font\\]#uis' => '<span style="font-family: \\1;">\\2</span>',
            // codeblock without a specific brush
            '#\\[code\\](.*?)\\[/code\\]#uis' => '<pre class="brush: php">\\1</pre>',
            // codeblock with a specific brush
            '#\\[code=([^\\]]*?)\\](.*?)\\[/code\\]#uis' => '<pre class="brush: \\1">\\2</pre>',
            // flags
            '#\\[flag\\](.*?)\\[/flag\\]#uis' => '<span class="flag-icon flag-icon-\\1"></span>',
            // Images
            '#\\[img\\](.*?)\\[/img\\]#uis' => '<img src="\\1" class="img-responsive" />',
            // Spoiler

            '#\\[spoiler\\](.*?)\\[/spoiler\\]#uis' => '<a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapse-'.$uid.'" aria-expanded="false" aria-controls="collapseExample">Spoiler</a>
<div class="collapse" id="collapse-'.$uid.'">
  <div class="well">\\1</div>
</div>',
            // Youtube
            '#\\[youtube\\](.*?)\\[/youtube\\]#uis' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/\\1" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>',
            // image
            '#\\[img\\](.*?)\\[/img\\]#uis' => function ($matches) {
                $output = '';

                $url = trim($matches[1]);
                if ($this->checkSafeUrl($url)) {
                    $output = '<img src="' . $url . '" alt="user-provided image" class="img-responsive">';
                }

                return $output;
            },
            // text size convert
            '#\\[size=([^\\]]*?)\\](.*?)\\[/size\\]#uis' => function ($matches) use ($this_object) {
                if($matches[1]==1){
                    $size = '10';
                } elseif($matches[1]==2) {
                    $size = '12';
                } elseif($matches[1]==3) {
                    $size = '14';
                } elseif($matches[1]==4) {
                    $size = '16';
                } elseif($matches[1]==5) {
                    $size = '18';
                } elseif($matches[1]==6) {
                    $size = '24';
                } elseif($matches[1]==7) {
                    $size = '54';
                }
                $output = '<span style="font-size: ' . $size . 'px;">' . $matches[2] . '</span>';

               

                return $output;
            },
            // link without custom text
            '#\\[url\\](.*?)\\[/url\\]#uis' => function ($matches) use ($this_object) {
                $output = '';

                $url = trim($matches[1]);
                if ($this_object->checkSafeUrl($url)) {
                    $output = '<a href="' . $url . '" target="_blank">' . $url . '</a>';
                }

                return $output;
            },
            // link with custom text
            '#\\[url=([^\\]]*?)\\](.*?)\\[/url\\]#uis' => function ($matches) use ($this_object) {
                $output = '';

                $url = trim($matches[1]);
                $text = $matches[2];
                if ($this_object->checkSafeUrl($url)) {
                    $output = '<a href="' . $url . '" target="_blank">' . $text . '</a>';
                }

                return $output;
            },
            // unordered list
            '#\\[ul\\](.*?)\[/ul\\]#uis' => function ($matches) use ($this_object) {
                return '<ul>' . trim($this_object->parseListElements($matches[1])) . '</ul>';
            },
            // unordered list (alternative syntax)
            '#\\[list\\](.*?)\[/list\\]#uis' => function ($matches) use ($this_object) {
                return '<ul>' . trim($this_object->parseListElements($matches[1])) . '</ul>';
            },
            // ordered list
            '#\\[ol\\](.*?)\[/ol\\]#uis' => function ($matches) use ($this_object) {
                return '<ol>' . trim($this_object->parseListElements($matches[1])) . '</ol>';
            },
            // ordered list (alternative syntax)
            '#\\[list=1\\](.*?)\[/list\\]#uis' => function ($matches) use ($this_object) {
                return '<ol>' . trim($this_object->parseListElements($matches[1])) . '</ol>';
            },
            // quote
            '#\[quote\](.*?)\[/quote\]#uis' => function ($matches) use ($this_object) {
                return $this_object->parseQuote($matches[1]);
            },
            // media like YouTube, Vimeo and so on
            '#\\[media=([^\\]]*?)\\](.*?)\\[/media\\]#uis' => function ($matches) {
                $output = "";
                if (strtolower($matches[1]) == 'youtube') {
                    $output = '<iframe width="560" height="315" src="//www.youtube.com/embed/' . $matches[2] . '?rel=0" frameborder="0" allowfullscreen></iframe>';
                } elseif (strtolower($matches[1]) == 'vimeo') {
                    $output = '<iframe src="//player.vimeo.com/video/' . $matches[2] . '?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ffffff" width="560" height="240" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
                } elseif (strtolower($matches[1]) == 'twitch') {
                    $output = '<object type="application/x-shockwave-flash" width="620" height="378" id="live_embed_player_flash" data="https://www.twitch.tv/widgets/live_embed_player.swf?channel=' . $matches[2] . '" bgcolor="#000000"><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><param name="allowNetworking" value="all" /><param name="movie" value="http://www.twitch.tv/widgets/live_embed_player.swf" /><param name="flashvars" value="hostname=www.twitch.tv&channel=' . $matches[2] . '&auto_play=true&start_volume=100" /></object>';
                }
                return $output;
            }

        );

        // replace non-breaking spaces (caused by contenteditable attribute) with regular spaces
        $result = str_replace("\xc2\xa0", ' ', $string);

        //$result = htmlspecialchars($result, ENT_QUOTES, 'UTF-8');

        foreach ($tags as $pattern => $replacement) {
            if (is_callable($replacement)) {
                $result = preg_replace_callback($pattern, $replacement, $result);
            } else {
                $result = preg_replace($pattern, $replacement, $result);
            }
        }

        foreach ($SYNONYM as $code => $translation) {
            $result = str_replace($code, $translation, $result);
        }

        foreach ($ICONS as $var1 => $var2) {
            foreach ($var2 as $code => $translation) {
                $result = str_replace($code, '<span style="font-family:OpenSansEmoji;font-size:18px">' . $translation . '</span>', $result);
                //die('/(^|\s)(' . $code . ')(\s|\W|$)/g');
            }
        }
        $result = preg_replace(array_keys($this->custom_codes), array_values($this->custom_codes), $result);

        //Mentions
        $result = preg_replace('/@(\w+)/', '@<a href="' . SITE_URL . '/members.php/cmd/user/id/$1">$1</a>', $result);

        //Additional parsing that should be fixed.
        $result = str_replace(
            array(
                '[/*]',
                '%'
            ),
            array(
                '',
                '&#37;'
            ),
            $result
        );

        $result = nl2brPre($result);

        return $result;
    }

    /*
     * Check if a URL is valid and either uses the HTTP or the HTTPS scheme
     *
     * It's very important to not accept other schemes like `javascript:` or
     * `data:`, because they can be used for cross-site scripting.
     */
    public function checkSafeUrl($url)
    {
        $valid_url = false;

        if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_SCHEME_REQUIRED | FILTER_FLAG_HOST_REQUIRED)) {
            $parsed_url = parse_url($url);
            $valid_url = (boolean)preg_match('#\\Ahttps?\\z#ui', $parsed_url['scheme']);
        }

        return $valid_url;
    }

    public function parseListElements($list_content)
    {
        /*
         * Iko uses both the [li] tag and the [*] tag for list elements.
         * Allowing both variants at the same time would be confusing, though.
         * If [li] is used, we only parse those tags. Otherwise, we only parse
         * the [*] tags.
         */
        $uses_li_syntax = preg_match('#\\[/?li\\]#is', $list_content);

        $render_list_element = function ($match) {
            return '<li>' . trim($match[1]) . '</li>';
        };

        if ($uses_li_syntax) {
            $result = preg_replace_callback('#\\[li\\](.*?)\\[/li\\]\\s*#uis', $render_list_element, $list_content);
        } else {
            $result = preg_replace_callback('#\\[\\*\\](.*?)(?=\\[\\*\\]|\\z)#uis', $render_list_element, $list_content);
        }

        return $result;
    }

    /*
     * Additional parsing on forum content.
     */
    private function parseQuote($raw_id)
    {
        global $MYSQL, $LAYER;

        $id = preg_replace('#\\s+#u', '', $raw_id);
        $MYSQL->bind('id', $id);
        $query = $MYSQL->query('SELECT * FROM {prefix}forum_posts WHERE id = :id');
        $user = (!empty($query)) ? $LAYER->user($query['0']['post_user']) : array(
            'username' => ''
        );
        $q_c = (!empty($query)) ? $query['0']['post_content'] : $raw_id;
        $quote = $LAYER->tpl->entity(
            'quote_post',
            array(
                'quoted_post_content',
                'quoted_post_user'
            ),
            array(
                $this->parse($this->removeQuote($q_c)),
                $user['username']
            )
        );

        return $quote;
    }

    private function removeQuote($string)
    {
        return preg_replace('#\\[quote\\](.*?)\\[/quote\\]#uis', '', $string);
    }

}
