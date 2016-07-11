<?php

/*
 * This file is part of Crawler Detect - the web crawler detection library.
 *
 * (c) Mark Beech <m@rkbee.ch>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Jaybizzle\CrawlerDetect\Fixtures;

class Crawlers extends AbstractProvider
{
    /**
     * Array of regular expressions to match against the user agent.
     *
     * @var array
     */
    protected $data = array(
        '.*Java.*outbrain',
        '008\/',
        '^Java\/',
        '^NING\/',
        'a3logics\.in',
        'A6-Indexer',
        'Aboundex',
        'aboutthedomain',
        'Accoona-AI-Agent',
        'acoon',
        'AddThis',
        'ADmantX',
        'aeshortener',
        'agentslug',
        'AHC',
        'Airmail',
        'akula\/k311',
        'alertra',
        'alexa site audit',
        'Anemone',
        'Ant\.com',
        'Apache-HttpClient\/',
        'Arachmo',
        'arachnode',
        'Arachnophilia',
        'archive-com',
        'aria2',
        'Astute',
        'autocite',
        'Autonomy',
        'B-l-i-t-z-B-O-T',
        'Backlink-Ceck\.de',
        'Bad-Neighborhood',
        'baidu\.com',
        'BazQux',
        'BDFetch',
        'bibnum\.bnf',
        'BigBozz',
        'biglotron',
        'BingLocalSearch',
        'BingPreview',
        'binlar',
        'Bloglovin',
        'BlogSearch',
        'Blogtrottr',
        'BoardReader Favicon Fetcher',
        'boitho\.com-dc',
        'BPImageWalker',
        'Browsershots',
        'BUbiNG',
        'Butterfly\/',
        'buzzstream-tools-hrd',
        'BuzzSumo',
        'CakePHP',
        'CapsuleChecker',
        'cb crawl',
        'CC Metadata Scaper',
        'Cerberian Drtrs',
        'cg-eye',
        'changedetection',
        'Charlotte',
        'CheckHost',
        'CISPA Vulnerability Notification',
        'clips\.ua\.ac\.be',
        'closure-compiler-hrd',
        'CloudFlare-AlwaysOnline',
        'cmcm\.com',
        'coccoc',
        'contactbigdatafr',
        'CommaFeed',
        'Commons-HttpClient',
        'Comodo SSL Checker',
        'convera',
        'copyright sheriff',
        'corporatetwitnews',
        'cosmos',
        'Covario-IDS',
        'cron-job\.org',
        'Crowsnest',
        'curb',
        'Curious George',
        'curl',
        'CyberPatrol',
        'cybo\.com',
        'DareBoost',
        'DataparkSearch',
        'dataprovider',
        'Daum(oa)?[ \/][0-9]',
        'DeuSu',
        'developers\.google\.com\/\+\/web\/snippet\/',
        'Digg',
        'Dispatch\/',
        'dlvr',
        'DNS-Tools Header-Analyzer',
        'docoloc',
        'DomainAppender',
        'dotSemantic',
        'downforeveryoneorjustme',
        'DowntimeDetector',
        'Dragonfly File Reader',
        'drupact',
        'Drupal (\+http:\/\/drupal\.org\/)',
        'dubaiindex',
        'e2pagemakker',
        'EARTHCOM',
        'Easy-Thumb',
        'ec2linkfinder',
        'eCairn-Grabber',
        'ECCP',
        'ElectricMonk',
        'elefent',
        'EMail Exractor',
        'EmailWolf',
        'Embed PHP Library',
        'Embedly',
        'europarchive\.org',
        'EventMachine HttpClient',
        'Evidon',
        'Evrinid',
        'ExactSearch',
        'ExaleadCloudview',
        'Excel\/',
        'Exploratodo',
        'ezooms',
        'facebookexternalhit',
        'facebookplatform',
        'Faveeo',
        'Feed Wrangler',
        'Feedbin',
        'FeedBooster',
        'FeedBucket',
        'FeedBurner',
        'FeedChecker',
        'Feedfetcher-Google',
        'Feedly',
        'Feedspot',
        'FeedValidator',
        'Fetch API',
        'Fever',
        'findlink',
        'findthatfile',
        'Flamingo_SearchEngine',
        'FlipboardProxy',
        'FlipboardRSS',
        'fluffy',
        'flynxapp',
        'forensiq',
        'FreeWebMonitoring SiteChecker',
        'fullstoryapp',
        'Funnelback',
        'g00g1e\.net',
        'GAChecker',
        'geek-tools',
        'Genderanalyzer',
        'Genieo',
        'GentleSource',
        'getprismatic\.com',
        'GigablastOpenSource',
        'Go [\d\.]* package http',
        'Go-http-client',
        'gooblog',
        'Google favicon',
        'Google Keyword Suggestion',
        'Google Keyword Tool',
        'Google Page Speed Insights',
        'Google PP Default',
        'Google Search Console',
        'Google Web Preview',
        'Google-Adwords',
        'Google-Apps-Script',
        'Google-Calendar-Importer',
        'Google-HTTP-Java-Client',
        'Google-Publisher-Plugin',
        'Google-SearchByImage',
        'Google-Site-Verification',
        'Google-Structured-Data-Testing-Tool',
        'Google_Analytics_Snippet_Validator',
        'google_partner_monitoring',
        'GoogleHC\/',
        'GoogleProducer',
        'GoScraper',
        'GoSpotCheck',
        'GoSquared-Status-Checker',
        'gosquared-thumbnailer',
        'Grammarly',
        'grouphigh',
        'grub-client',
        'GTmetrix',
        'Hatena',
        'hawkReader',
        'HEADMasterSEO',
        'HeartRails_Capture',
        'heritrix',
        'Holmes',
        'ht:\/\/check',
        'htdig',
        'HTTP-Header-Abfrage',
        'http-kit',
        'HTTP_Compression_Test',
        'http_request2',
        'http_requester',
        'httphr',
        'HTTPMon',
        'httpunit',
        'HttpUrlConnection',
        'httrack',
        'huaweisymantec',
        'HubPages.*crawlingpolicy',
        'HubSpot Connect',
        'HubSpot Marketing Grader',
        'HyperZbozi.cz Feeder',
        'ichiro',
        'IdeelaborPlagiaat',
        'IDG Twitter Links Resolver',
        'Iframely',
        'igdeSpyder',
        'IlTrovatore',
        'InAGist',
        'inbound\.li parser',
        'infegy',
        'infohelfer',
        'InfoWizards Reciprocal Link System PRO',
        'inpwrd\.com',
        'Integrity',
        'integromedb',
        'InternetSeer',
        'internetVista monitor',
        'IODC',
        'IOI',
        'ips-agent',
        'iZSearch',
        'Jigsaw',
        'Jobboerse',
        'jobo',
        'Jobrapido',
        'knows\.is',
        'KOCMOHABT',
        'kouio',
        'KrOWLer',
        'kulturarw3',
        'KumKie',
        'L\.webis',
        'Larbin',
        'LayeredExtractor',
        'libwww',
        'link checker',
        'Link Valet',
        'link validator',
        'linkCheck',
        'linkdex',
        'LinkExaminer',
        'LinkTiger',
        'LinkWalker',
        'Lipperhey',
        'livedoor ScreenShot',
        'LoadImpactRload',
        'LongURL API',
        'ltx71',
        'lwp-trivial',
        'lycos',
        'mabontland',
        'MagpieRSS',
        'Mail.Ru',
        'MailChimp\.com',
        'Mandrill',
        'marketinggrader',
        'Mediapartners-Google',
        'MegaIndex\.ru',
        'Melvil Rawi\/',
        'MergeFlow-PageReader',
        'MetaInspector',
        'Metaspinner',
        'MetaURI',
        'Microsearch',
        'Microsoft Office ',
        'Microsoft Windows Network Diagnostics',
        'Mindjet',
        'Miniflux',
        'Mnogosearch',
        'mogimogi',
        'Mojolicious (Perl)',
        'monitis',
        'montastic',
        'MonTools',
        'Moreover',
        'Morning Paper',
        'mowser',
        'Mrcgiguy',
        'mShots',
        'MVAClient',
        'Netcraft SSL Server Survey',
        'Netcraft Web Server Survey',
        'NetcraftSurveyAgent',
        'NetLyzer FastProbe',
        'netresearch',
        'NetShelter ContentScan',
        'NetTrack',
        'Netvibes',
        'Neustar WPM',
        'NeutrinoAPI',
        'NewsBlur .*(Fetcher|Finder)',
        'NewsGator',
        'newsme',
        'newspaper\/',
        'NG-Search',
        'nineconnections\.com',
        'NLNZ_IAHarvester',
        'node-superagent',
        'node\.io',
        'nominet\.org\.uk',
        'Notifixious',
        'notifyninja',
        'nuhk',
        'nutch',
        'Nuzzel',
        'Nymesis',
        'oegp',
        'okhttp',
        'Omea Reader',
        'omgili',
        'Online Domain Tools',
        'OpenCalaisSemanticProxy',
        'Optimizer',
        'Orbiter',
        'ow\.ly',
        'ownCloud News',
        'Page Valet',
        'page2rss',
        'PagePeeker',
        'panscient',
        'PayPal IPN',
        'Pcore-HTTP',
        'peerindex',
        'Peew',
        'PhantomJS\/',
        'phpcrawl',
        'phpservermon',
        'Pi-Monster',
        'Pingdom\.com',
        'PingSpot',
        'Pinterest',
        'Pizilla',
        'Ploetz \+ Zeller',
        'Plukkie',
        'PocketParser',
        'Pompos',
        'postano',
        'PostPost',
        'postrank',
        'Prlog',
        'prospectb2b',
        'Protopage',
        'proximic',
        'Pulsepoint XT3 web scraper',
        'Python-httplib2',
        'python-requests',
        'Python-urllib',
        'Qseero',
        'Qualidator.com SiteAnalyzer',
        'Quora Link Preview',
        'Qwantify',
        'Radian6',
        'RankSonicSiteAuditor',
        'Readability',
        'RealPlayer%20Downloader',
        'RebelMouse',
        'ReederForMac',
        'RestSharp',
        'RetrevoPageAnalyzer',
        'Riddler',
        'Rival IQ',
        'Robosourcer',
        'ROI Hunter',
        'Ruby',
        's~turbo-tips',
        'SalesIntelligent',
        'SBIder',
        'Scoop',
        'scooter',
        'ScoutJet',
        'ScoutURLMonitor',
        'Scrapy',
        'Scrubby',
        'SearchSight',
        'semanticdiscovery',
        'SEO Browser',
        'SEOstats',
        'Server Density Service Monitoring',
        'servernfo\.com',
        'Seznam screenshot-generator',
        'Shelob',
        'Shoppimon Analyzer',
        'ShopWiki',
        'ShortLinkTranslate',
        'SilverReader',
        'SimplePie',
        'SimplyFast',
        'Site24x7',
        'SiteBar',
        'siteexplorer\.info',
        'SiteGuardian',
        'Siteimprove\.com',
        'Sitemap(s)? Generator',
        'SiteTruth',
        'SiteUptime',
        'SkypeUriPreview',
        'slider\.com',
        'slurp',
        'SMRF URL Expander',
        'snapchat-proxy',
        'Snappy',
        'SniffRSS',
        'sniptracker',
        'SNK Siteshooter B0t',
        'Snoopy',
        'sogou',
        'SortSite',
        'Specificfeeds',
        'speedy',
        'Spinn3r',
        'spyonweb',
        'Sqworm',
        'SSL Labs',
        'StackRambler',
        'StatusCake',
        'Stratagems Kumo',
        'StudioFACA',
        'suchen',
        'summify',
        'Super Monitoring',
        'SwiteScraper',
        'Sysomos',
        'teoma',
        'terrainformatica\.com',
        'theinternetrules',
        'theoldreader\.com',
        'TinEye',
        'Tiny Tiny RSS',
        'touche.com',
        'Traackr.com',
        'truwoGPS',
        'tweetedtimes\.com',
        'Tweetminster',
        'Twikle',
        'Twingly',
        'Typhoeus',
        'ubermetrics-technologies',
        'UdmSearch',
        'UnwindFetchor',
        'updated',
        'Upflow',
        'uptimedoctor',
        'URLChecker',
        'urlresolver',
        'Urlstat',
        'UrlTrends Ranking Updater',
        'Vagabondo',
        'Validator\.nu\/LV',
        'via ggpht\.com GoogleImageProxy',
        'virustotalcloud',
        'visionutils',
        'vkShare',
        'voltron',
        'Vortex',
        'voyager\/',
        'VYU2',
        'w3af\.org',
        'W3C-checklink',
        'W3C-mobileOK',
        'W3C_CSS_Validator_JFouffa',
        'W3C_I18n-Checker',
        'W3C_Unicorn',
        'W3C_Validator',
        'wangling',
        'Wappalyzer',
        'WatchMouse',
        'web-capture\.net',
        'Web-sniffer',
        'Webauskunft',
        'WebCapture',
        'webcollage',
        'WebCookies',
        'WebCorp',
        'WebFetch',
        'WebIndex',
        'webkit2png',
        'webmastercoffee',
        'webmon ',
        'weborama-fetcher',
        'Webshot',
        'websitepulse[+ ]checker',
        'Websquash\.com',
        'WebThumbnail',
        'WeCrawlForThePeace',
        'WeLikeLinks',
        'WEPA',
        'WeSEE',
        'wf84',
        'wget',
        'WhatsApp',
        'WhatWeb',
        'Whibse',
        'WinHttpRequest',
        'wmtips',
        'Woko',
        'WomlpeFactory',
        'Word\/',
        'WordPress\/',
        'wotbox',
        'WP Engine Install Performance API',
        'WPScan',
        'wscheck',
        'WWW-Mechanize',
        'www\.monitor\.us',
        'XaxisSemanticsClassifier',
        'Xenu Link Sleuth',
        'Y!J-(ASR|BSC)',
        'Yaanb',
        'yacy',
        'Yahoo Ad monitoring',
        'Yahoo Link Preview',
        'Yahoo! Site Explorer Feed Validator',
        'YahooCacheSystem',
        'YahooSeeker',
        'YahooYSMcm',
        'yandex',
        'yanga',
        'yeti',
        'Yo-yo',
        'Yoleo Consumer',
        'yoogliFetchAgent',
        'YottaaMonitor',
        'yourls\.org',
        'Zao',
        'Zemanta Aggregator',
        'Zend_Http_Client',
        'zgrab',
        'ZnajdzFoto',
        'ZyBorg',
        '[a-z0-9\-_]*((?<!cu)bot|crawler|archiver|transcoder|spider)',
    );
}
