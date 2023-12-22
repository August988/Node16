<?php

$txt['optimus_title'] = 'Zoekmachine optimalisatie';

$txt['optimus_basic_title'] = 'Algemene instellingen';
$txt['optimus_basic_desc'] = 'Versie van de Mod: <strong>%1$s</strong>, PHP versie: <strong>%2$s</strong>, %3$s versie: <strong>%4$s</strong>.<br>Bugs en features van de mod kunnen besproken worden op <a class="bbc_link" href="https://www.simplemachines.org/community/index.php?topic=422210.0">simplemachines.org</a>.';

$txt['optimus_main_page'] = 'Startpagina';
$txt['optimus_forum_index'] = 'Forum startpagina titel';
$txt['optimus_description'] = 'Forum beschrijving';
$txt['optimus_description_subtext'] = 'Wordt gebruikt als inhoud van de meta-tag <strong>description</strong>.';

$txt['optimus_all_pages'] = 'Topic & board paginas';
$txt['optimus_board_extend_title'] = 'Voeg forumnaam toe aan board titels';
$txt['optimus_board_extend_title_set'] = array('Niet toevoegen', 'Voor board titel', 'Na board titel');
$txt['optimus_topic_extend_title'] = 'Voeg categorie en boardnaam toe aan topic titels';
$txt['optimus_topic_extend_title_set'] = array('Niet toevoegen', 'Voor topic titel', 'Na topic titel');
$txt['optimus_topic_description'] = 'Gebruik het eerste bericht van het topic als meta-tag <strong>description</strong>';
$txt['optimus_allow_change_topic_desc'] = 'Gebruik een extra veld voor de topic beschrijving';
$txt['optimus_allow_change_topic_desc_subtext'] = 'Dit wordt getoond als een topic wordt gewijzigd.';
$txt['optimus_allow_change_topic_keywords'] = 'Gebruik een extra veld voor de topic zoektermen';
$txt['optimus_allow_change_topic_keywords_subtext'] = 'Dit wordt getoond als een topic wordt gewijzigd.';
$txt['optimus_show_keywords_block'] = 'Display a block with keywords above the first post of the topic';
$txt['optimus_show_keywords_on_message_index'] = 'Display keywords in topic lists within boards';
$txt['optimus_allow_keyword_phrases'] = 'Allow to add entire key phrases';
$txt['optimus_correct_http_status'] = 'Geef <a href="https://en.wikipedia.org/wiki/List_of_HTTP_status_codes" target="_blank" rel="noopener" class="bbc_link">403/404 code</a> afhankelijk van de status van de opgevraagde pagina';

$txt['optimus_extra_settings'] = 'Extra instellingen';
$txt['optimus_log_search'] = 'Activeer het logboek met gebruikte zoektermen';
$txt['optimus_disable_syntax_highlighting'] = 'Deactiveer het markeren van syntax in tekstvelden';

$txt['optimus_extra_title'] = 'Metadata';
$txt['optimus_extra_desc'] = 'Hier kan extra <a href="https://ogp.me/" target="_blank" rel="noopener" class="bbc_link">markup code</a> voor forumpaginas onderhouden worden.';
$txt['optimus_extra_info'] = 'Gebruik een <a href="https://webmaster.yandex.ru/tools/microtest/" target="_blank" rel="noopener" class="bbc_link">struktuur data validator</a> (Yandex.Webmaster) of de <a href="https://developers.facebook.com/tools/debug" target="_blank" rel="noopener" class="bbc_link">Facebook Sharing Debugger</a> om je Open Graph tags te anayseren.<hr><strong>Let op</strong>: Facebook cached afbeeldingen en andere OG data. Om de cache te resetten, voer je in de debugger het webaddres in met de parameter <em>fbrefresh</em>, dat is %1$s?fbrefresh=reset.';

$txt['optimus_og_image'] = 'Gebruik de eerste afbeeldingsbijlage uit het eerste bericht van het topic in de meta tag <strong>og:image</strong>.';
$txt['optimus_og_image_subtext'] = 'De standaard afbeelding kan worden opgegeven in de instellingen van het <a href="%s" class="bbc_link">Huidige thema</a>.';
$txt['optimus_og_image_help'] = 'If enabled, the <strong>og:image</strong> meta tag will include a link to the first image attached to the first topic message. If there aren\'t any attachment, and the image inside the <strong>img</strong> tag is found in the message text, it is used.';
$txt['optimus_allow_change_board_og_image'] = 'Gebruik een apart veld voor de board <strong>OG Afbeelding</strong>';
$txt['optimus_allow_change_board_og_image_subtext'] = 'Deze kan worden gewijzigd bij het aanpassen van een board.';
$txt['optimus_fb_appid'] = 'Facebook Application ID (als je dit hebt)';
$txt['optimus_fb_appid_help'] = 'Maak <a href="https://developers.facebook.com/apps" target="_blank" rel="noopener" class="bbc_link"><strong>hier</strong></a> een applicatie aan en kopieer het ID naar dit veld.';
$txt['optimus_tw_cards'] = '<a class="bbc_link" href="https://twitter.com/" target="_blank">Twitter</a> account naam (geef deze op voor <a class="bbc_link" href="https://dev.twitter.com/cards/overview" target="_blank">Twitter Cards</a>)';
$txt['optimus_tw_cards_help'] = 'Lees <a href="https://dev.twitter.com/cards/overview" target="_blank" rel="noopener" class="bbc_link"><strong>hier</strong></a> meer over Twitter cards.';

$txt['optimus_favicon_title'] = 'Favicon';
$txt['optimus_favicon_desc'] = 'Maak je eigen forum icoon. Dit zal getoond worden in de browser tab voor de naam.';

$txt['optimus_favicon_text'] = 'De favicon code';
$txt['optimus_favicon_help'] = 'Genereer je eigen favicon <a class="bbc_link" href="http://www.favicomatic.com/" target="_blank">hier</a>, of gebruik een speciale generator (deze dient de API sleutel in het veld hierboven te plaatsen).<br />Plaats dan de favicon bestanden in de forum root, en bewaar de code van de de generator site in het veld rechts. Deze code zal laden bovenaan de site paginas, tussen de &lt;head&gt;&lt;/head&gt; tags.';

$txt['optimus_meta_title'] = 'Meta tags';
$txt['optimus_meta_desc'] = 'Op deze pagina kun je verificatiecode(s) van onderstaande lijst onderhouden.';

$txt['optimus_meta_addtag'] = 'Klik hier om een nieuwe tag toe te voegen';
$txt['optimus_meta_customtag'] = 'Aangepaste meta tag';
$txt['optimus_meta_tools'] = 'Zoekmachine (Tools)';
$txt['optimus_meta_name'] = 'Naam';
$txt['optimus_meta_content'] = 'Inhoud';
$txt['optimus_meta_info'] = 'Gebruik alleen de waarden van de <strong>inhoud</strong> parameter van de meta tags.<br>Bijvoorbeeld: <span class="smalltext">&lt;meta name="<strong>NAME</strong>" content="<strong>WAARDE</strong>"&gt;</span>';
$txt['optimus_search_engines'] = array(
	'Google' => array('google-site-verificatie','https://www.google.com/webmasters/tools/', 'Google Search Console'),
	'Bing' => array('msvalidate.01', 'https://www.bing.com/toolbox/webmaster/', 'Bing Webmaster'),
	'Yandex' => array('yandex-verificatie', 'https://webmaster.yandex.com/', 'Yandex.Webmaster'),
);


$txt['optimus_counters'] = 'AdSense/JS code';
$txt['optimus_counters_desc'] = 'Je kunt hier JS code toevoegen en wijzigen voor het bijhouden van bezoeken aan je forum.';

$txt['optimus_head_code'] = 'Onzichtbare JS tellers die geladen worden in de <strong>head</strong> sectie';
$txt['optimus_head_code_subtext'] = 'Bijvoorbeeld, <a href="https://www.google.com/analytics/sign_up.html" target="_blank" rel="noopener" class="bbc_link">Google Analytics</a>, of <a href="https://www.google.com/adsense/start/" target="_blank" rel="noopener" class="bbc_link">Google AdSense</a>';
$txt['optimus_stat_code'] = 'Onzichtbare JS tellers die geladen worden in de <strong>body</strong> sectie';
$txt['optimus_stat_code_subtext'] = 'Bijvoorbeeld, <a href="https://matomo.org/" target="_blank" rel="noopener" class="bbc_link">Matomo</a> etc';
$txt['optimus_count_code'] = 'Zichtbare JS (teller afbeeldingen, banners, enz)';
$txt['optimus_counters_css'] = 'Opmaak voor zichtbare tellers (CSS code)';
$txt['optimus_ignored_actions'] = 'Acties die genegeerd worden';
$txt['optimus_ignored_actions_subtext'] = 'Tellers zullen niet geladen worden in deze pagina\'s!';

$txt['optimus_robots_title'] = 'Beheer robots.txt';
$txt['optimus_robots_desc'] = 'De generator wordt bijgewerkt op basis van de geinstalleerde modificaties en instellingen van SMF.';

$txt['optimus_rules'] = 'robots.txt generator';
$txt['optimus_rules_hint'] = 'Je kunt deze regels gebruiken als voorbeelden voor jouw robots.txt (in het rechter tekstblok):';
$txt['optimus_links_title'] = 'Nuttige links';
$txt['optimus_links'][0] = array('Genereer robots.txt bestand', 'https://support.google.com/webmasters/answer/6062596?hl=nl');
$txt['optimus_links'][1] = array('Gebruik van robots.txt', 'https://yandex.com/support/webmaster/controlling-robot/robots-txt.html?lang=nl');

$txt['optimus_htaccess_title'] = 'Beheer .htaccess';
$txt['optimus_htaccess_desc'] = 'Hier kun je het .htaccess bestand van je forum aanpassen. Wees voorzichtig!';

$txt['optimus_sitemap_title'] = 'Sitemap';
$txt['optimus_sitemap_desc'] = '%1$s kan een eenvoudige XML sitemap genereren op basis van onderstaande instellingen.';

$txt['optimus_sitemap_enable'] = 'Activeer de Sitemap instellingen';
$txt['optimus_sitemap_enable_subtext'] = 'De sitemap zal worden gegenereerd of gewijzigd na het opslaan van de instellingen.';
$txt['optimus_sitemap_link'] = 'Toon een link naar de Sitemap in de footer';
$txt['optimus_remove_previous_xml_files'] = 'Verwijder eerder aangemaakte sitemap*.xml bestanden';
$txt['optimus_main_page_frequency'] = 'De vernieuwingsfrequentie van de hoofdpagina';
$txt['optimus_main_page_frequency_set'] = array('Direct (voortdurend)', 'Afhankelijk van de datum van het nieuwste bericht');
$txt['optimus_sitemap_boards'] = 'Neem links naar de boards op in de sitemap';
$txt['optimus_sitemap_boards_subtext'] = 'Boards die niet toegankelijk zijn voor gasten worden NIET opgenomen.';
$txt['optimus_sitemap_topics_num_replies'] = 'Voeg alleen topics aan de sitemap toe die meer dan zoveel reacties hebben';
$txt['optimus_sitemap_items_display'] = 'Maximum aantal items per pagina';
$txt['optimus_sitemap_all_topic_pages'] = 'Voeg ALLE topics toe aan de sitemap';
$txt['optimus_sitemap_all_topic_pages_subtext'] = 'Als dit niet is aangevinkt, wordt alleen de eerste pagina van alle topics toegevoegd aan de sitemap.';
$txt['optimus_start_year'] = 'De Sitemap moet de paginas bevatten van het opgegeven jaar';
$txt['optimus_update_frequency'] = 'Hoe frequent wordt de Sitemap bijgewerkt';
$txt['optimus_update_frequency_set'] = array('Eens per dag', 'Elke 3 dagen', 'Eens per week', 'Elke 2 weken', 'Eens per maand');

$txt['optimus_mobile'] = 'Mobiel';
$txt['optimus_images'] = 'Afbeeldingen';
$txt['optimus_news'] = 'Nieuws';
$txt['optimus_video'] = 'Video';
$txt['optimus_index'] = 'Index';
$txt['optimus_total_files'] = 'Totaal aantal bestanden';
$txt['optimus_total_urls'] = 'Totaal aantal URLs';
$txt['optimus_last_modified'] = 'Laatst gewijzigd';
$txt['optimus_frequency'] = 'Frequentie';
$txt['optimus_priority'] = 'Prioriteit';
$txt['optimus_direct_link'] = 'Directe link';
$txt['optimus_caption'] = 'Titel';
$txt['optimus_thumbnail'] = 'Miniatuur';

$txt['permissionname_optimus_add_descriptions'] = $txt['group_perms_name_optimus_add_descriptions'] = 'Omschrijvingen toevoegen aan topics';
$txt['permissionhelp_optimus_add_descriptions'] = 'De mogelijkheid om een beschrijving toe te voegen bij het aanleggen en wijzigen van een topic.';
$txt['permissionname_optimus_add_keywords'] = $txt['group_perms_name_optimus_add_keywords'] = 'Zoektermen toevoegen aan topics';
$txt['permissionhelp_optimus_add_keywords'] = 'De mogelijkheid om zoektermen toe te voegen bij het aanleggen en wijzigen van een topic.';
$txt['permissionname_optimus_add_descriptions_own'] = $txt['permissionname_optimus_add_keywords_own'] = 'Eigen topic';
$txt['permissionname_optimus_add_descriptions_any'] = $txt['permissionname_optimus_add_keywords_any'] = 'Elk topic';
$txt['group_perms_name_optimus_add_descriptions_own'] = 'Toevoegen van omschrijvingen aan eigen topics';
$txt['group_perms_name_optimus_add_descriptions_any'] = 'Toevoegen van omschrijvingen aan elk topic';
$txt['permissionname_optimus_view_search_terms'] = $txt['group_perms_name_optimus_view_search_terms'] = 'Toon statistieken van zoektermen';
$txt['permissionhelp_optimus_view_search_terms'] = 'De mogelijkheid om statistieken over gebruikte zoektermen te bekijken.';

$txt['optimus_404_page_title'] = '404 - Pagina niet gevonden';
$txt['optimus_404_h2'] = '404 fout';
$txt['optimus_404_h3'] = 'Sorry, de gevraagde pagina bestaat niet.';
$txt['optimus_403_page_title'] = '403 - Geen toegang';
$txt['optimus_403_h2'] = '403 fout';
$txt['optimus_403_h3'] = 'Sorry, maar je hebt geen toegang tot deze pagina.';
$txt['optimus_goto_main_page'] = 'Ga naar de <a class="bbc_link" href="%1$s">hoofdpagina</a>.';
$txt['optimus_seo_description'] = 'Topic omschrijving [SEO]';
$txt['optimus_seo_keywords'] = 'Topic zoektermen [SEO]';
$txt['optimus_enter_keywords'] = 'Geef een of meer zoektermen op';
$txt['optimus_topics_with_keyword'] = 'Forumtopics met zoekterm "%s"';
$txt['optimus_keyword_id_not_found'] = 'Het opgegeven zoekterm ID werd niet gevonden.';
$txt['optimus_no_keywords'] = 'Er is geen informatie gevonden voor dit zoekterm.';
$txt['optimus_all_keywords'] = 'Alle zoektermen in de forum topics';
$txt['optimus_keyword_column'] = 'Zoekterm';
$txt['optimus_frequency_column'] = 'Frequentie';
$txt['optimus_top_queries'] = 'Veelgebruikte zoekacties';
$txt['optimus_chart_title'] = 'Top %1$s';
$txt['optimus_no_search_terms'] = 'Statistieken zijn nog niet beschikbaar.';
