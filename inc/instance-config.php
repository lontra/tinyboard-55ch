<?php

/*
 *  Instance Configuration
 *  ----------------------
 *  Edit this file and not config.php for imageboard configuration.
 *
 *  You can copy values from config.php (defaults) and paste them here.
 */

// XXX: Organizar essa buceta ~ lwbr

	// Database driver (http://www.php.net/manual/en/pdo.drivers.php)
	// Only MySQL is supported by Tinyboard at the moment, sorry.
	$config['db']['type'] = 'mysql';
	// Hostname, IP address or Unix socket (prefixed with ":")
	$config['db']['server'] = 'localhost';
	// Example: Unix socket
	// $config['db']['server'] = ':/tmp/mysql.sock';
	// Login
	$config['db']['user'] = '';
	$config['db']['password'] = '';
	// Tinyboard database
	$config['db']['database'] = '';
	// Table prefix (optional)
	$config['db']['prefix'] = '';
	// Use a persistent database connection when possible
	$config['db']['persistent'] = false;
	// Anything more to add to the DSN string (eg. port=xxx;foo=bar)
	$config['db']['dsn'] = '';
	// Connection timeout duration in seconds
	$config['db']['timeout'] = 30;


/* ======
 *  WEBM
 * ======
 */

 	$config['allowed_ext_files'][] = 'webm';
	$config['file_icons']['webm'] = 'video.png';
	$config['additional_javascript'][] = 'cc/settings.js';
	$config['additional_javascript'][] = 'cc/expandvideo.js';

	// Do diretório .../inc/ para .../cc/posthandler.php
	require_once '../cc/posthandler.php';
	event_handler('post', 'postHandler');



	// Configurações da postagem
	$config['field_disable_name'] = true;
	$config['field_disable_subject'] = false;


	// Only admins can post to the noticeboard
	$config['mod']['noticeboard_post'] = MOD;
	// View the search IP page - Only MODS and ADMINS
	$config['mod']['search_ip'] = MOD;
	// View the wordfilters page
	$config['mod']['wordfilters'] = DISABLED;
	// View the filters page
	$config['mod']['filters'] = ADMIN;
	// View the recent posts page
	$config['mod']['recent'] = MOD;

	// Javascript
	$config['additional_javascript'] = array();
	$config['additional_javascript'][] = 'js/jquery.min.js';
	$config['additional_javascript'][] = 'js/style-select.js';
	$config['additional_javascript'][] = 'js/expand.js';
	$config['additional_javascript'][] = 'js/hide-images.js';
	$config['additional_javascript'][] = 'js/hide-threads.js';
	$config['additional_javascript'][] = 'js/quick-post-controls.js';
	$config['additional_javascript'][] = 'js/jquery-ui.custom.min.js';
    $config['additional_javascript'][] = 'js/quick-reply.js';
	$config['additional_javascript'][] = 'js/toggle-images.js';
	$config['additional_javascript'][] = 'js/post-hover.js'; // must come before show-backlinks.js
	$config['additional_javascript'][] = 'js/show-backlinks.js';
	$config['additional_javascript'][] = 'js/inline-expanding.js';
	$config['additional_javascript'][] = 'js/expand-all-images.js';
	$config['additional_javascript'][] = 'js/catalog-link.js';
    $config['additional_javascript'][] = 'js/show-op.js';
	$config['additional_javascript'][] = 'js/mobile-style.js';
	$config['additional_javascript'][] = 'js/titlebar-notifications.js';
	$config['additional_javascript'][] = 'js/auto-reload.js';
	$config['additional_javascript'][] = 'js/watch.js';

	// Make stylesheet selections board-specific.
	$config['stylesheets_board'] = true;

	// $config['use_bootstrap'] = true;
	$config['bootstrap_stylesheet'] = 'bootstrap.min.css';

	//
	$config['filenameclick_expand_new'] = true;

	// Enable the search form
	$config['search']['enable'] = true;

	// Boards for searching
	$config['search']['boards'] = array('a', 'b', 'd', 'mod');

	// Temas
	$config['stylesheets']['Favela'] = 'favela.css';
	$config['stylesheets']['Yotsuba B'] = '';
	$config['stylesheets']['Yotsuba'] = 'yotsuba.css';
	$config['stylesheets']['Futaba'] = 'futaba.css';
	$config['stylesheets']['Dark'] = 'dark.css';
	$config['stylesheets']['Festaduro'] = 'festaduro.css';
	$config['stylesheets']['Cotas'] = 'cotas.css';
	$config['stylesheets']['Burichan'] = 'burichan.css';
	$config['stylesheets']['Jj'] = 'jj.css';
	$config['stylesheets']['Nigrachan'] = 'nigrachan.css';
	$config['stylesheets']['Novo Jungle'] = 'novo_jungle.css';
	$config['stylesheets']['Confraria'] = 'confraria.css';
	$config['stylesheets']['Dark Roach'] = 'dark_roach.css';
	$config['stylesheets']['Ferus'] = 'ferus.css';
	$config['stylesheets']['Futaba+vichan'] = 'futaba+vichan.css';
	$config['stylesheets']['Futaba Light'] = 'futaba-light.css';
	$config['stylesheets']['Gentoochan'] = 'gentoochan.css';
	$config['stylesheets']['Jungle'] = 'jungle.css';
	$config['stylesheets']['Luna'] = 'luna.css';
	$config['stylesheets']['Miku'] = 'miku.css';
	$config['stylesheets']['Notsuba'] = 'notsuba.css';
	$config['stylesheets']['Photon'] = 'photon.css';
	$config['stylesheets']['Piwnichan'] = 'piwnichan.css';
	$config['stylesheets']['Ricechan'] = 'ricechan.css';
	$config['stylesheets']['Roach'] = 'roach.css';
	$config['stylesheets']['Stripes'] = 'stripes.css';
	$config['stylesheets']['szalet'] = 'szalet.css';
	$config['stylesheets']['Terminal 2'] = 'terminal2.css';
	$config['stylesheets']['Testorange'] = 'testorange.css';
	$config['stylesheets']['Wasabi'] = 'wasabi.css';

	// The default stylesheet to use.
	$config['default_stylesheet'] = array('Favela', $config['stylesheets']['Favela']);

	// boardlist
	$config['boards'] = array(
		array('*','a','b','d','mod','cri','c'),
		array('an','lit','mu','tv','jo','lan'),
		array('cb','comp','help','pol','UF55','sch'),
		array('34','pr0n','pinto','tr'),
		array('esp','o','high','mimimi','gtk'),
		array('$','fit','pfiu','vs'),
		array('irc' => 'https://kiwiirc.com/client/irc.rizon.net/55ch')
	);

	// Categorias
	$config['categories'] = array(
		'VIP' => array('a','b','d','mod','cri','c'),
		'Mídia' => array('an','lit','mu','tv','jo','lan'),
		'Barracks' => array('cb','comp','help','pol','UF55','sch'),
		'Amor amorrr' => array('34','pr0n','pinto','tr'),
		'Outcasts' => array('esp','o','high','mimimi','gtk'),
		'Experimental' => array('$','fit','pfiu','vs')
	);

	// capcodes
	// "## Custom" becomes lightgreen, italic and bold:
	$config['custom_capcode']['Custom'] ='<span class="capcode" style="color:lightgreen;font-style:italic;font-weight:bold"> ## %s</span>';

	// "## Admin" makes everything purple, including the name and tripcode:
	$config['custom_capcode']['Admin'] = array(
		'<span class="capcode" style="color:purple"> ## %s</span>',
		'color:purple', // Change name style; optional
		'color:purple' // Change tripcode style; optional
	);

	// "## Mod" makes everything red and bold, including the name and tripcode:
	$config['custom_capcode']['Mod'] = array(
		'<span class="capcode" style="color:red;font-weight:bold"> ## %s</span>',
		'color:red;font-weight:bold', // Change name style; optional
		'color:red;font-weight:bold' // Change tripcode style; optional
	);

	// The default name (ie. Anonymous).
	$config['anonymous'] = 'Anônimo';

	// When true, users are instead presented a selectbox for email. Contains, blank, noko and sage.
	$config['field_email_selectbox'] = true;

	// Display image identification links using regex.info/exif, TinEye and Google Images.
	$config['image_identification'] = true;

	// When true, all names will be set to $config['anonymous']. Exceto na área de administração.
	$config['field_disable_name'] = true;

	// "Wiki" markup syntax ($config['wiki_markup'] in pervious versions):
	$config['markup'][] = array("/\[b\](.+?)\[\/b\]/", "<strong>\$1</strong>");
	$config['markup'][] = array("/\[\i\](.+?)\[\/i\]/", "<em>\$1</em>");
	$config['markup'][] = array("/\[spoiler\](.+?)\[\/spoiler\]/", "<span class=\"spoiler\">\$1</span>");

	$config['locale'] = 'pt_BR.UTF-8'; // default locale to pt_BR
	
