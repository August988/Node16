<?php

$txt['optimus_title'] = 'Ottimizzazione per i motori di ricerca';

$txt['optimus_basic_title'] = 'Impostazioni base';
$txt['optimus_basic_desc'] = 'Versione mod: <strong>%1$s</strong>, versione PHP: <strong>%2$s</strong>, versione %3$s: <strong>%4$s</strong>.<br>Puoi chiedere supporto, nuove features o segnalare bugs su <a class="bbc_link" href="https://www.simplemachines.org/community/index.php?topic=422210.0">simplemachines.org</a>.';

$txt['optimus_main_page'] = 'Pagina principale';
$txt['optimus_forum_index'] = 'Titolo della pagina principale';
$txt['optimus_description'] = 'Descrizione del Forum';
$txt['optimus_description_subtext'] = 'Verrà utilizzato come contenuto del meta-tag <strong>description</strong>.';

$txt['optimus_all_pages'] = 'Discussioni & pagine delle sezioni';
$txt['optimus_board_extend_title'] = 'Aggiungi il nome del forum nei titoli delle sezioni';
$txt['optimus_board_extend_title_set'] = array('Non aggiungere', 'Prima del titolo della sezione', 'Dopo il titolo della sezione');
$txt['optimus_topic_extend_title'] = 'Aggiungi il titolo della sezione e del forum nel titolo della discussione';
$txt['optimus_topic_extend_title_set'] = array('Non aggiungere', 'Prima del titolo della discussione', 'Dopo il titolo della discussione');
$txt['optimus_topic_description'] = 'Visualizza la parte del primo messaggio della discussione nel metatag <strong>description</strong>';
$txt['optimus_allow_change_topic_desc'] = 'Abilita un campo separato per la descrizione della discussione';
$txt['optimus_allow_change_topic_desc_subtext'] = 'Viene visualizzato durante la modifica di una discussione.';
$txt['optimus_allow_change_topic_keywords'] = 'Abilita un campo separato per le keywords della discussione';
$txt['optimus_allow_change_topic_keywords_subtext'] = 'Viene visualizzato durante la modifica di una discussione.';
$txt['optimus_show_keywords_block'] = 'Display a block with keywords above the first post of the topic';
$txt['optimus_show_keywords_on_message_index'] = 'Display keywords in topic lists within boards';
$txt['optimus_allow_keyword_phrases'] = 'Allow to add entire key phrases';
$txt['optimus_correct_http_status'] = 'Ritorna <a href="https://it.wikipedia.org/wiki/Codici_di_stato_HTTP" target="_blank" rel="noopener" class="bbc_link">Codici 403/404</a> a seconda dello stato della pagina richiesta';

$txt['optimus_extra_settings'] = 'Impostazioni aggiuntive';
$txt['optimus_log_search'] = 'Abilita la registrazione dei termini di ricerca';
$txt['optimus_disable_syntax_highlighting'] = 'Disabilita l\'evidenziazione della sintassi nelle aree di testo';

$txt['optimus_extra_title'] = 'Metadata';
$txt['optimus_extra_desc'] = 'Here you can add an additional <a href="https://ogp.me/" target="_blank" rel="noopener" class="bbc_link">markup</a> for forum pages.';
$txt['optimus_extra_info'] = 'Use <a href="https://webmaster.yandex.ru/tools/microtest/" target="_blank" rel="noopener" class="bbc_link">structured data validator</a> (Yandex.Webmaster) or <a href="https://developers.facebook.com/tools/debug" target="_blank" rel="noopener" class="bbc_link">Facebook Sharing Debugger</a> to debug your Open Graph tags.<hr><strong>Note</strong>: Facebook caches images and other OG data. To reset the cache, in the repost debugger, type the page address with the parameter <em>fbrefresh</em>, i.e. %1$s?fbrefresh=reset.';

$txt['optimus_og_image'] = 'Use the image from the first topic message in the meta tag <strong>og:image</strong>';
$txt['optimus_og_image_subtext'] = 'By default, the image specified in <a href="%s" class="bbc_link">current theme settings</a> is used.';
$txt['optimus_og_image_help'] = 'If enabled, the <strong>og:image</strong> meta tag will include a link to the first image attached to the first topic message. If there aren\'t any attachment, and the image inside the <strong>img</strong> tag is found in the message text, it is used.';
$txt['optimus_allow_change_board_og_image'] = 'Allow a separate field for the board <strong>OG Image</strong>';
$txt['optimus_allow_change_board_og_image_subtext'] = 'Viene visualizzato durante la modifica di una discussione.';
$txt['optimus_fb_appid'] = 'ID Applicazione Facebook (Se disponibile)';
$txt['optimus_fb_appid_help'] = 'Create an application <a href="https://developers.facebook.com/apps" target="_blank" rel="noopener" class="bbc_link"><strong>here</strong></a>, copy its ID and fill this field.';
$txt['optimus_tw_cards'] = 'Nome account Twitter (Se disponibile)';
$txt['optimus_tw_cards_help'] = 'Read more about Twitter cards <a href="https://dev.twitter.com/cards/overview" target="_blank" rel="noopener" class="bbc_link"><strong>here</strong></a>.';

$txt['optimus_favicon_title'] = 'Favicon';
$txt['optimus_favicon_desc'] = 'Create your own forum icon. It will be displayed by the browser as an image next to the open tab and other interface elements.';

$txt['optimus_favicon_text'] = 'Codice favicon';
$txt['optimus_favicon_help'] = 'Generate your own favicon <a href="https://www.favicomatic.com/" target="_blank" rel="noopener" class="bbc_link">here</a>, or <a href="https://digitalagencyrankings.com/iconogen/" target="_blank" rel="noopener" class="bbc_link">here</a>.<br>Then upload the favicon files to the forum root, and save the code from the generator site in the field on the right.<br>This code will be load at the top of the site pages, between the &lt;head&gt;&lt;/head&gt; tags.';

$txt['optimus_meta_title'] = 'Meta tags';
$txt['optimus_meta_desc'] = 'On this page you can add any regular/verification code(s) from the list below.';

$txt['optimus_meta_addtag'] = 'Clicca qui per aggiungere un nuovo tag';
$txt['optimus_meta_customtag'] = 'Meta tag personale';
$txt['optimus_meta_tools'] = 'Motore di ricerca (Strumento)';
$txt['optimus_meta_name'] = 'Name';
$txt['optimus_meta_content'] = 'Content';
$txt['optimus_meta_info'] = 'Please use only the values from <strong>content</strong> parameter of the meta tags.<br>Example: <span class="smalltext">&lt;meta name="<strong>NAME</strong>" content="<strong>VALUE</strong>"&gt;</span>';
$txt['optimus_search_engines'] = array(
	'Google' => array('google-site-verification','https://www.google.com/webmasters/tools/', 'Google Search Console'),
	'Bing' => array('msvalidate.01', 'https://www.bing.com/toolbox/webmaster/', 'Bing Webmaster'),
	'Yandex' => array('yandex-verification', 'https://webmaster.yandex.com/', 'Yandex.Webmaster'),
);


$txt['optimus_counters'] = 'AdSense/Codice JS';
$txt['optimus_counters_desc'] = 'You can add and change any JS code in this section to log stats/visits of your forum.';

$txt['optimus_head_code'] = 'Invisible JS with loading in the <strong>head</strong> section';
$txt['optimus_head_code_subtext'] = 'For example, <a href="https://www.google.com/analytics/sign_up.html" target="_blank" rel="noopener" class="bbc_link">Google Analytics</a>, or <a href="https://www.google.com/adsense/start/" target="_blank" rel="noopener" class="bbc_link">Google AdSense</a>';
$txt['optimus_stat_code'] = 'Invisible JS with loading in the <strong>body</strong> section';
$txt['optimus_stat_code_subtext'] = 'For example, <a href="https://matomo.org/" target="_blank" rel="noopener" class="bbc_link">Matomo</a> etc';
$txt['optimus_count_code'] = 'JS visibile (immagini contatori, banner, ecc.)';
$txt['optimus_counters_css'] = 'Aspetto per i contatori visibili (codice CSS)';
$txt['optimus_ignored_actions'] = 'Actions ignorate';
$txt['optimus_ignored_actions_subtext'] = 'I contatori non verranno caricati in queste aree!';

$txt['optimus_robots_title'] = 'Gestisci robots.txt';
$txt['optimus_robots_desc'] = 'The rule generator is updated depending on the installed mods and some settings of your SMF.';

$txt['optimus_rules'] = 'Generatore regole';
$txt['optimus_rules_hint'] = 'You can use these rules as an example for your robots.txt (on the right textarea):';
$txt['optimus_links_title'] = 'Link utili';
$txt['optimus_links'][0] = array('Genera il file robots.txt', 'https://support.google.com/webmasters/answer/6062596?hl=en');
$txt['optimus_links'][1] = array('Utilizza robots.txt', 'https://yandex.com/support/webmaster/controlling-robot/robots-txt.html?lang=en');

$txt['optimus_htaccess_title'] = 'Gestisci .htaccess';
$txt['optimus_htaccess_desc'] = 'Here you can modify the .htaccess file for your forum. Be careful!';

$txt['optimus_sitemap_title'] = 'Sitemap';
$txt['optimus_sitemap_desc'] = '%1$s can generate a simple XML map in accordance with the settings below.';

$txt['optimus_sitemap_enable'] = 'Attiva la Sitemap';
$txt['optimus_sitemap_enable_subtext'] = 'The map will be created/updated after saving the settings.';
$txt['optimus_sitemap_link'] = 'Visualizza il link della Sitemap in fondo';
$txt['optimus_remove_previous_xml_files'] = 'Rimuovi files sitemap*.xml creati precedentemente';
$txt['optimus_main_page_frequency'] = 'The update frequency of the main page';
$txt['optimus_main_page_frequency_set'] = array('Costante (sempre)', 'Depending on the date of the last message');
$txt['optimus_sitemap_boards'] = 'Aggiunge una link al forum per la Sitemap';
$txt['optimus_sitemap_boards_subtext'] = 'Boards that are closed to guests will NOT be added.';
$txt['optimus_sitemap_topics_num_replies'] = 'Add links to topics that have the number of replies >=';
$txt['optimus_sitemap_items_display'] = 'Numero massimo di elementi per pagina';
$txt['optimus_sitemap_all_topic_pages'] = 'Aggiunge TUTTE le discussioni nella sitemap';
$txt['optimus_sitemap_all_topic_pages_subtext'] = 'If not checked, only the first pages of topics will be added to the sitemap.';
$txt['optimus_start_year'] = 'The Sitemap must contain entries starting from the specified year';
$txt['optimus_update_frequency'] = 'Con quale frequenza viene aggiornata la Sitemap';
$txt['optimus_update_frequency_set'] = array('Una volta al giorno', 'Ogni 3 giorni', 'Una volta a settimana', 'Ogni 2 settimane', 'Una volta al mese');

$txt['optimus_mobile'] = 'Mobile';
$txt['optimus_images'] = 'Immagini';
$txt['optimus_news'] = 'Notizie';
$txt['optimus_video'] = 'Video';
$txt['optimus_index'] = 'Indice';
$txt['optimus_total_files'] = 'Files totali';
$txt['optimus_total_urls'] = 'URLs totali';
$txt['optimus_last_modified'] = 'Ultima modifica';
$txt['optimus_frequency'] = 'Frequenza';
$txt['optimus_priority'] = 'Priorità';
$txt['optimus_direct_link'] = 'Link diretto';
$txt['optimus_caption'] = 'Didascalia';
$txt['optimus_thumbnail'] = 'Anteprima';

$txt['permissionname_optimus_add_descriptions'] = $txt['group_perms_name_optimus_add_descriptions'] = 'Aggiunta descrizione per le discussioni';
$txt['permissionhelp_optimus_add_descriptions'] = 'Abilita la possibilità di aggiungere una descrizione durante la creazione/modifica di una discussione.';
$txt['permissionname_optimus_add_keywords'] = $txt['group_perms_name_optimus_add_keywords'] = 'Aggiunta keywords per le discussioni';
$txt['permissionhelp_optimus_add_keywords'] = 'Abilita la possibilità di aggiungere le parole chiave durante la creazione/modifica di una discussione.';
$txt['permissionname_optimus_add_descriptions_own'] = $txt['permissionname_optimus_add_keywords_own'] = 'Propria discussione';
$txt['permissionname_optimus_add_descriptions_any'] = $txt['permissionname_optimus_add_keywords_any'] = 'Tutte le discussioni';
$txt['group_perms_name_optimus_add_descriptions_own'] = 'Aggiungere descrizioni per le proprie discussioni';
$txt['group_perms_name_optimus_add_descriptions_any'] = 'Aggiungere descrizioni in tutte le discussioni';
$txt['permissionname_optimus_view_search_terms'] = $txt['group_perms_name_optimus_view_search_terms'] = 'Visualizza le statistiche dei termini cercati';
$txt['permissionhelp_optimus_view_search_terms'] = 'Abilita la visualizzazione delle statistiche di ricerca nel forum.';

$txt['optimus_404_page_title'] = '404 - Pagina non trovata';
$txt['optimus_404_h2'] = 'Errore 404';
$txt['optimus_404_h3'] = 'Spiacente, la pagina richiesta non esiste.';
$txt['optimus_403_page_title'] = '403 - Accesso Proibito';
$txt['optimus_403_h2'] = 'Errore 403';
$txt['optimus_403_h3'] = 'Spiacente, non hai accesso a questa pagina.';
$txt['optimus_goto_main_page'] = 'Vai alla <a class="bbc_link" href="%1$s">pagina principale</a>.';
$txt['optimus_seo_description'] = 'Descrizione discussione [SEO]';
$txt['optimus_seo_keywords'] = 'Keywords discussione [SEO]';
$txt['optimus_enter_keywords'] = 'Inserisci una o più parole chiave';
$txt['optimus_topics_with_keyword'] = 'Discussioni con la keyword "%s"';
$txt['optimus_keyword_id_not_found'] = 'La keyword specificata non è stata trovata.';
$txt['optimus_no_keywords'] = 'Non c\'è nessuna informazione riguardo questa keyword.';
$txt['optimus_all_keywords'] = 'Tutte le keywords nelle discussioni del forum';
$txt['optimus_keyword_column'] = 'Keyword';
$txt['optimus_frequency_column'] = 'Frequenza';
$txt['optimus_top_queries'] = 'Termini di ricerca più popolari';
$txt['optimus_chart_title'] = 'Top %1$s';
$txt['optimus_no_search_terms'] = 'Le statistiche non sono ancora disponibili.';
