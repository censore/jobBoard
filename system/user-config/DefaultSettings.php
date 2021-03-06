<?php


return array (
	'DEBUG_MODE'				=> false,
	'CLASSES_DIR' 				=>	SJB_BASE_DIR . 'system/core/',
	'MODULES_DIR'				=>	SJB_BASE_DIR . 'system/modules/',
	'TEMPLATES_DIR'				=>	'templates/',
	'SYSTEM_TEMPLATE_DIR'		=>	'_system',
	'CACHE_DIR'					=>	SJB_BASE_DIR . 'system/cache',
	'COMPILED_TEMPLATES_DIR'	=>	SJB_BASE_DIR . 'system/cache/smarty/',
	'SMARTY_PATH'				=>	SJB_BASE_DIR . 'system/ext/Smarty/Smarty.class.php',
	'LIBRARY_DIR'				=>	SJB_BASE_DIR . 'system/lib/',
	'EXT_LIBRARY_DIR'			=>	SJB_BASE_DIR . 'system/ext/',
	'CRON_LOG_DIR'				=>	SJB_BASE_DIR . 'cron/log/',
	'SYSTEM_ACCESS_TYPE'		=>	'user',
	'STARTUP_MODULE'			=>	'main',
	'SYSTEM_URL_BASE'			=>	'system',
	'SYSTEM_DEFAULT_TEMPLATE'	=>	'index.tpl',
	'ADMIN_ACCESS_TYPE'			=>	'admin',
	'EXTERNAL_COMPONENTS_DIR'	=>	'system/ext/',
	'PAGE_TEMPLATES_MODULE_NAME'=>	'main',
	'DEFAULT_THEME'				=>	'CorporateView',
	'SCRIPTS_DIR'				=>	SJB_BASE_DIR . 'system/user-scripts/',
	'FILES_DIR'					=>	SJB_BASE_DIR . 'files/',
	'UPLOAD_FILES_DIRECTORY'	=>	'files',
	'EXPORT_FILES_DIRECTORY'	=>  'temp/export',
	'I18NSettings_PathToLanguageFiles'                  => SJB_BASE_DIR . 'languages',
	'I18NSettings_FileNameTemplateForLanguageFile'      => '%s.conf.xml',
	'I18NSettings_FileNameTemplateForLanguagePagesFile' => '%s.pages.xml',
	'I18NSettings_HighlightedPattern'                   => "%2\$s(<a style='color:red;' href=\"%5\$s/system/I18N/auto_translate/?showsplash=true&phrase=%4\$s&domain=%1\$s&translations[%3\$s]=%4\$s\" target=\"_blank\" onclick=\"javascript:window.open(this.href, this.target, 'width=700,height=600,top=200,left=400,scrollbars=yes');return false;\" title=\"Translate this\">T</a>)",
	'PLUGINS_DIR'				 => SJB_BASE_DIR . 'system/plugins',
	'MOBILE_LOGO_FILENAME'       => '/logo_mobile_sjb_banner.png',
	'SESSION_STORAGE'            => 'files',
	'LISTING_VIEW_IGNORING_BOTS' => array(
		'abcdatos',
		'ahoythehomepagefinder',
		'Alkaline',
		'anthill',
		'appie',
		'arachnophilia',
		'arale',
		'araneo',
		'araybot',
		'architext',
		'aretha',
		'ariadne',
		'arks',
		'aspider',
		'atn',
		'atomz',
		'auresys',
		'backrub',
		'bbot',
		'bigbrother',
		'bjaaland',
		'blackwidow',
		'blindekuh',
		'Bloodhound',
		'boxseabot',
		'brightnet',
		'bspider',
		'cactvschemistryspider',
		'calif',
		'cassandra',
		'cgireader',
		'checkbot',
		'christcrawler',
		'churl',
		'cienciaficcion',
		'cmc',
		'Collective',
		'combine',
		'confuzzledbot',
		'coolbot',
		'core',
		'cosmos',
		'cruiser',
		'cusco',
		'cyberspyder',
		'cydralspider',
		'desertrealm',
		'deweb',
		'dienstspider',
		'digger',
		'diibot',
		'directhit',
		'dnabot',
		'download_express',
		'dragonbot',
		'dwcp',
		'ebiness',
		'eit',
		'elfinbot',
		'emacs',
		'emcspider',
		'esculapio',
		'esther',
		'evliyacelebi',
		'nzexplorer',
		'fastcrawler',
		'fdse',
		'felix',
		'ferret',
		'fetchrover',
		'fido',
		'finnish',
		'fireball',
		'fish',
		'fouineur',
		'francoroute',
		'freecrawl',
		'funnelweb',
		'gama',
		'gazz',
		'gcreep',
		'getbot',
		'geturl',
		'golem',
		'googlebot',
		'grapnel',
		'griffon',
		'gromit',
		'gulliver',
		'gulperbot',
		'hambot',
		'harvest',
		'havindex',
		'hi',
		'hometown',
		'htdig',
		'htmlgobble',
		'hyperdecontextualizer',
		'iajabot',
		'ibm',
		'iconoclast',
		'Ilse',
		'imagelock',
		'incywincy',
		'informant',
		'infoseek',
		'infoseeksidewinder',
		'infospider',
		'inspectorwww',
		'intelliagent',
		'irobot',
		'iron33',
		'israelisearch',
		'javabee',
		'JBot',
		'jcrawler',
		'askjeeves',
		'jobo',
		'jobot',
		'joebot',
		'jubii',
		'jumpstation',
		'kapsi',
		'katipo',
		'kdd',
		'kilroy',
		'ko_yappo_robot',
		'labelgrabber.txt',
		'larbin',
		'legs',
		'linkidator',
		'linkscan',
		'linkwalker',
		'lockon',
		'logo_gif',
		'lycos',
		'macworm',
		'magpie',
		'marvin',
		'mattie',
		'mediafox',
		'merzscope',
		'meshexplorer',
		'MindCrawler',
		'mnogosearch',
		'moget',
		'momspider',
		'monster',
		'motor',
		'msnbot',
		'muncher',
		'muninn',
		'muscatferret',
		'mwdsearch',
		'myweb',
		'NDSpider',
		'netcarta',
		'netmechanic',
		'netscoop',
		'nhse',
		'nomad',
		'northstar',
		'objectssearch',
		'occam',
		'octopus',
		'OntoSpider',
		'openfind',
		'orb_search',
		'packrat',
		'pageboy',
		'parasite',
		'patric',
		'pegasus',
		'perignator',
		'perlcrawler',
		'phantom',
		'phpdig',
		'piltdownman',
		'pimptrain',
		'pioneer',
		'pitkow',
		'pjspider',
		'pka',
		'plumtreewebaccessor',
		'poppi',
		'portalb',
		'psbot',
		'Puu',
		'python',
		'raven',
		'rbse',
		'resumerobot',
		'rhcs',
		'rixbot',
		'roadrunner',
		'robbie',
		'robi',
		'robocrawl',
		'robofox',
		'robozilla',
		'roverbot',
		'rules',
		'safetynetrobot',
		'scooter',
		'search_au',
		'searchprocess',
		'senrigan',
		'sgscout',
		'shaggy',
		'shaihulud',
		'sift',
		'simbot',
		'sitetech',
		'skymob',
		'slcrawler',
		'slurp',
		'smartspider',
		'snooper',
		'solbot',
		'speedy',
		'spider_monkey',
		'spiderbot',
		'spiderline',
		'spiderman',
		'spiderview',
		'spry',
		'ssearcher',
		'suke',
		'suntek',
		'sven',
		'sygol',
		'tach_bw',
		'tarantula',
		'tarspider',
		'tcl',
		'techbot',
		'templeton',
		'titin',
		'titan',
		'tkwww',
		'tlspider',
		'ucsd',
		'udmsearch',
		'uptimebot',
		'urlck',
		'us',
		'valkyrie',
		'verticrawl',
		'victoria',
		'visionsearch',
		'voidbot',
		'voyager',
		'vwbot',
		'w3index',
		'w3m2',
		'wallpaper',
		'wanderer',
		'wapspider',
		'webbandit',
		'webcatcher',
		'webcopy',
		'webfetcher',
		'webfoot',
		'webinator',
		'weblayers',
		'weblinker',
		'webmirror',
		'webmoose',
		'webquest',
		'webreader',
		'webreaper',
		'webs',
		'websnarf',
		'webspider',
		'webvac',
		'webwalk',
		'webwalker',
		'webwatch',
		'wget',
		'whatuseek',
		'whowhere',
		'wlm',
		'wmir',
		'wolp',
		'wombat',
		'worm',
		'wwwc',
		'wz101',
		'xget',
		'Nederland.zoek',
	)
);

