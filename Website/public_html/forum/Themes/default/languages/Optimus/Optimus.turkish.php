<?php

$txt['optimus_title'] = 'Arama Motoru Optimizasyonu';

$txt['optimus_basic_title'] = 'Temel ayarlar';
$txt['optimus_basic_desc'] = 'Mod sürümü: <strong>%1$s</strong>, PHP sürümü: <strong>%2$s</strong>, %3$s sürümü: <strong>%4$s</strong>. Modun hataları ve özellikleri <a class="bbc_link" href="https://www.simplemachines.org/community/index.php?topic=422210.0">simplemachines.org</a> adresinde tartışılabilir.';

$txt['optimus_main_page'] = 'Ana Sayfa';
$txt['optimus_forum_index'] = 'Forum Ana Sayfası başlığı';
$txt['optimus_description'] = 'Forum açıklaması';
$txt['optimus_description_subtext'] = '<strong>description</strong> meta etiketinin içeriği olarak kullanılacaktır.';

$txt['optimus_all_pages'] = 'Konu ve bölüm sayfaları';
$txt['optimus_board_extend_title'] = 'Forum adlarını bölüm başlıklarına ekle';
$txt['optimus_board_extend_title_set'] = array('Ekleme', 'Bölüm başlığından önce', 'Bölüm başlığından sonra');
$txt['optimus_topic_extend_title'] = 'Konu başlıklarına bölüm ve forum başlığı ekle';
$txt['optimus_topic_extend_title_set'] = array('Ekleme', 'Konu başlığından önce', 'Konu başlığından sonra');
$txt['optimus_topic_description'] = 'Konunun ilk mesaj içeriğini meta-tag <strong>description</strong> olarak ayarla';
$txt['optimus_allow_change_topic_desc'] = 'Konu açıklaması yazmak için ayrı bir alan oluştur';
$txt['optimus_allow_change_topic_desc_subtext'] = 'Konu oluştururken, düzenlerken görüntülenir.';
$txt['optimus_allow_change_topic_keywords'] = 'Konu anahtar kelimeleri yazmak için ayrı bir alan oluşturs';
$txt['optimus_allow_change_topic_keywords_subtext'] = 'Konu oluştururken, düzenlerken görüntülenir.';
$txt['optimus_show_keywords_block'] = 'Display a block with keywords above the first post of the topic';
$txt['optimus_show_keywords_on_message_index'] = 'Display keywords in topic lists within boards';
$txt['optimus_allow_keyword_phrases'] = 'Anahtar ifadelerin tamamını eklemeye izin ver';
$txt['optimus_correct_http_status'] = 'Getirilen sayfa durumuna bağlı olarak <a href="https://en.wikipedia.org/wiki/List_of_HTTP_status_codes" target="_blank" rel="noopener" class="bbc_link">403/404 kodunu</a> döndür';

$txt['optimus_extra_settings'] = 'Ek ayarlar';
$txt['optimus_log_search'] = 'Arama terimlerinin günlüğe kaydedilmesini etkinleştir';
$txt['optimus_disable_syntax_highlighting'] = 'Metin alanlarında sözdizimi vurgulamayı devre dışı bırak';

$txt['optimus_extra_title'] = 'Üst Veri';
$txt['optimus_extra_desc'] = 'Burada forum sayfaları için ek bir  <a href="https://ogp.me/" target="_blank" rel="noopener" class="bbc_link">işaretleme</a> ekleyebilirsiniz.';
$txt['optimus_extra_info'] = 'Open Graph etiketlerinizde hata ayıklamak için <a href="https://webmaster.yandex.ru/tools/microtest/" target="_blank" rel="noopener" class="bbc_link">yapılandırılmış veri</a>  doğrulayıcı (Yandex.Webmaster) veya <a href="https://developers.facebook.com/tools/debug" target="_blank" rel="noopener" class="bbc_link">Facebook Paylaşım Hata Ayıklayıcı</a> kullanın.
<hr><strong>Not:</strong> Facebook, görüntüleri ve diğer OG verilerini önbelleğe alır. Önbelleği sıfırlamak için, yeniden gönderme hata ayıklayıcısına fbrefresh parametresiyle sayfa adresini yazın, ör. <em>fbrefresh</em>, i.e. %1$s?fbrefresh=reset.';

$txt['optimus_og_image'] = '<strong>og:image</strong> meta etiketi için konu içideki ilk resmi kullan';
$txt['optimus_og_image_subtext'] = 'Varsayılan olarak, <a href="%s" class="bbc_link">kullanılan tema ayarlarında</a> belirtilen resim kullanılır.';
$txt['optimus_og_image_help'] = 'If enabled, the <strong>og:image</strong> meta tag will include a link to the first image attached to the first topic message. If there aren\'t any attachment, and the image inside the <strong>img</strong> tag is found in the message text, it is used.';
$txt['optimus_allow_change_board_og_image'] = 'Bölüm <strong>OG Resmi</strong> için ayrı bir alana izin verin';
$txt['optimus_allow_change_board_og_image_subtext'] = 'Bölüm düzenlenirken görüntülenir.';
$txt['optimus_fb_appid'] = 'Facebook Uygulama kimliği (varsa)';
$txt['optimus_fb_appid_help'] = '<a href="https://developers.facebook.com/apps" target="_blank" rel="noopener" class="bbc_link"><strong>Buradan</strong></a>, bir uygulama oluşturun, kimliğini kopyalayın  ve bu alana girin.';
$txt['optimus_tw_cards'] = 'Twitter hesap adı (varsa)';
$txt['optimus_tw_cards_help'] = 'Twitter kartları hakkında daha fazla bilgiye <a href="https://dev.twitter.com/cards/overview" target="_blank" rel="noopener" class="bbc_link"><strong>buradan</strong></a> ulaşabilirsiniz.';

$txt['optimus_favicon_title'] = 'Favicon';
$txt['optimus_favicon_desc'] = 'Kendi forum simgenizi oluşturun. Tarayıcı tarafından açık sekmenin ve diğer arayüz öğelerinin yanında gösterilecektir.';

$txt['optimus_favicon_text'] = 'Favicon kodu';
$txt['optimus_favicon_help'] = '<a href="https://www.favicomatic.com/" target="_blank" rel="noopener" class="bbc_link">Burada</a>, veya <a href="https://digitalagencyrankings.com/iconogen/" target="_blank" rel="noopener" class="bbc_link">buradan</a> <br> kendi favicon\'unuzu oluşturun. Ardından favicon dosyalarını forum\'un kurulu olduğu dizine yükleyin ve aşağıda ki alana siteden aldığınız kodu kaydedin.
Bu kod, site sayfalarının en üstüne, &lt;head&gt;&lt;/head&gt; etiketleri arasına yüklenecektir.';

$txt['optimus_meta_title'] = 'Meta etiketleri';
$txt['optimus_meta_desc'] = 'Bu sayfada, aşağıdaki listeden site doğrulama kodlarını ekleyebilirsiniz.';

$txt['optimus_meta_addtag'] = 'Yeni bir etiket ekle';
$txt['optimus_meta_customtag'] = 'Özel meta etiketi';
$txt['optimus_meta_tools'] = 'Arama motoru (Araçlar)';
$txt['optimus_meta_name'] = 'İsim';
$txt['optimus_meta_content'] = 'İçerik';
$txt['optimus_meta_info'] = 'Lütfen meta etiketlerin yalnızca <strong>içerik</strong> parametresindeki değerleri kullanın.<br>Örnek: <span class="smalltext">&lt;meta name="<strong>İSİM</strong>" content="<strong>DEĞER</strong>"&gt;</span>';
$txt['optimus_search_engines'] = array(
	'Google' => array('google-site-doğrulama','https://search.google.com/search-console/about?hl=tr', 'Google Arama Konsolu'),
	'Bing' => array('msvalidate.01', 'https://www.bing.com/webmasters/about?cc=tr', 'Bing Web Yöneticisi'),
	'Yandex' => array('yandex-doğrulaması', 'https://webmaster.yandex.com/', 'Yandex Web Yöneticisi'),
);


$txt['optimus_counters'] = 'AdSense/JS kodu';
$txt['optimus_counters_desc'] = 'Forumunuzun istatistiklerini/ziyaretlerini kaydetmek için bu bölümde herhangi bir JS kodunu ekleyebilir ve değiştirebilirsiniz.';

$txt['optimus_head_code'] = '<strong>head</strong> bölümüne yüklenen görünmez JS sayaç kodları';
$txt['optimus_head_code_subtext'] = 'Örneğin, <a href="https://www.google.com/analytics/sign_up.html" target="_blank" rel="noopener" class="bbc_link">Google Analytics</a>, or <a href="https://www.google.com/adsense/start/" target="_blank" rel="noopener" class="bbc_link">Google AdSense</a>';
$txt['optimus_stat_code'] = '<strong>body</strong> bölümüne yüklenen JS kodları';
$txt['optimus_stat_code_subtext'] = 'Örnek: <a href="https://matomo.org/" target="_blank" rel="noopener" class="bbc_link">Matomo</a> etc';
$txt['optimus_count_code'] = 'Görünen JS kodları (görüntü sayaçları, banner, vb.)';
$txt['optimus_counters_css'] = 'Görünen sayaçların stili (CSS kodu)';
$txt['optimus_ignored_actions'] = 'Yok sayılan eylemler';
$txt['optimus_ignored_actions_subtext'] = 'Bu alanlara sayaç kodları yüklenmeyecek!';

$txt['optimus_robots_title'] = 'Robots.txt dosyasını yönetin';
$txt['optimus_robots_desc'] = 'Kural oluşturucu, kurulu modlara ve SMF ayarlarına bağlı olarak güncellenir.';

$txt['optimus_rules'] = 'Kural oluşturucu';
$txt['optimus_rules_hint'] = 'Bu kuralları robots.txt dosyanız için örnek olarak kullanabilirsiniz (sağdaki metin alanında):';
$txt['optimus_links_title'] = 'Bilgi Sayfaları';
$txt['optimus_links'][0] = array('Robots.txt dosyası oluştur', 'https://support.google.com/webmasters/answer/6062596?hl=tr');
$txt['optimus_links'][1] = array('Robots.txt kullanımı', 'https://yandex.com/support/webmaster/controlling-robot/robots-txt.html?lang=tr');

$txt['optimus_htaccess_title'] = '.htaccess Düzenleyici';
$txt['optimus_htaccess_desc'] = 'Burada forumunuz için .htaccess dosyasını değiştirebilirsiniz. <strong>Dikkat olun!</strong>';

$txt['optimus_sitemap_title'] = 'Site Haritası';
$txt['optimus_sitemap_desc'] = '%1$s, aşağıdaki ayarlara göre basit bir XML haritası oluşturabilir.';

$txt['optimus_sitemap_enable'] = 'Site Haritasını Etkinleştir';
$txt['optimus_sitemap_enable_subtext'] = 'Ayarlar kaydedildikten sonra harita oluşturulacak/güncellenecektir.';
$txt['optimus_sitemap_link'] = 'Alt kısımda Site Haritası bağlantısını göster';
$txt['optimus_remove_previous_xml_files'] = 'Önceden oluşturulmuş sitemap*.xml dosyalarını kaldır';
$txt['optimus_main_page_frequency'] = 'Ana sayfanın güncelleme sıklığı';
$txt['optimus_main_page_frequency_set'] = array('Sabit (her zaman)', 'Son iletinin tarihine bağlı olarak');
$txt['optimus_sitemap_boards'] = 'Site Haritasına bölüm bağlantılarını ekle';
$txt['optimus_sitemap_boards_subtext'] = 'Ziyaretçilere kapalı olan bölümler EKLENMEYECEKTİR.';
$txt['optimus_sitemap_topics_num_replies'] = 'İleti sayısına göre ekle >=';
$txt['optimus_sitemap_items_display'] = 'Sayfa başına maksimum öğe sayısı';
$txt['optimus_sitemap_all_topic_pages'] = 'TÜM konu sayfalarını site haritasına ekleyin';
$txt['optimus_sitemap_all_topic_pages_subtext'] = 'İşaretlenmezse, site haritasına yalnızca konuların ilk sayfaları eklenecektir.';
$txt['optimus_start_year'] = 'Site Haritası, belirtilen yıldan itibaren girişler içersin';
$txt['optimus_update_frequency'] = 'Site Haritası ne sıklıkla güncellensin?';
$txt['optimus_update_frequency_set'] = array('Günde bir kez', '3 günde bir', 'Haftada bir', '2 haftada bir', 'Ayda bir');

$txt['optimus_mobile'] = 'Mobil';
$txt['optimus_images'] = 'Resimler';
$txt['optimus_news'] = 'Haberler';
$txt['optimus_video'] = 'Video';
$txt['optimus_index'] = 'Dizin';
$txt['optimus_total_files'] = 'Toplam dosya';
$txt['optimus_total_urls'] = 'Toplam URL';
$txt['optimus_last_modified'] = 'Son düzenleme';
$txt['optimus_frequency'] = 'Sıklık';
$txt['optimus_priority'] = 'Öncelik';
$txt['optimus_direct_link'] = 'Direkt link';
$txt['optimus_caption'] = 'Altyazı';
$txt['optimus_thumbnail'] = 'Küçük resim';

$txt['permissionname_optimus_add_descriptions'] = $txt['group_perms_name_optimus_add_descriptions'] = 'Konulara açıklama ekleyebilir';
$txt['permissionhelp_optimus_add_descriptions'] = 'Bir konu oluştururken/düzenlerken açıklama ekleyebilir.';
$txt['permissionname_optimus_add_keywords'] = $txt['group_perms_name_optimus_add_keywords'] = 'Konulara anahtar kelimeler ekleyebilir';
$txt['permissionhelp_optimus_add_keywords'] = 'Bir konu oluştururken/düzenlerken anahtar kelimeler ekleyebilir.';
$txt['permissionname_optimus_add_descriptions_own'] = $txt['permissionname_optimus_add_keywords_own'] = 'Kendi konuları';
$txt['permissionname_optimus_add_descriptions_any'] = $txt['permissionname_optimus_add_keywords_any'] = 'Herhangi bir konu';
$txt['group_perms_name_optimus_add_descriptions_own'] = 'Kendi konularına açıklama ekleyebilir';
$txt['group_perms_name_optimus_add_descriptions_any'] = 'Herhangi bir konuya açıklama ekleyebilir';
$txt['permissionname_optimus_view_search_terms'] = $txt['group_perms_name_optimus_view_search_terms'] = 'Arama terimlerinin istatistiklerini görüntüleyebilir';
$txt['permissionhelp_optimus_view_search_terms'] = 'Forumdaki arama istatistiklerini görüntüleme izinleri.';

$txt['optimus_404_page_title'] = '404 - Sayfa Bulunamadı';
$txt['optimus_404_h2'] = 'Hata 404';
$txt['optimus_404_h3'] = 'Üzgünüz, ancak istenen sayfa mevcut değil.';
$txt['optimus_403_page_title'] = '403 - Erişim Yasaklandı';
$txt['optimus_403_h2'] = 'Hata 403';
$txt['optimus_403_h3'] = 'Üzgünüz, ancak bu sayfaya erişiminiz yok.';
$txt['optimus_goto_main_page'] = '<a class="bbc_link" href="%1$s">Ana sayfaya</a> git.';
$txt['optimus_seo_description'] = 'Açıklama [SEO]';
$txt['optimus_seo_keywords'] = 'Anahtar Kelimeler [SEO]';
$txt['optimus_enter_keywords'] = 'Bir veya daha fazla anahtar kelime girin';
$txt['optimus_topics_with_keyword'] = '"%s" anahtar kelimesine sahip forum konuları';
$txt['optimus_keyword_id_not_found'] = 'Belirtilen anahtar kelime kimliği bulunamadı.';
$txt['optimus_no_keywords'] = 'Bu anahtar kelime tanımlayıcı hakkında bilgi yok.';
$txt['optimus_all_keywords'] = 'Forum konularındaki tüm anahtar kelimeler';
$txt['optimus_keyword_column'] = 'Anahtar kelimeler';
$txt['optimus_frequency_column'] = 'Sıklık';
$txt['optimus_top_queries'] = 'Popüler arama sorguları';
$txt['optimus_chart_title'] = 'En Çok %1$s';
$txt['optimus_no_search_terms'] = 'İstatistikler henüz mevcut değil.';
