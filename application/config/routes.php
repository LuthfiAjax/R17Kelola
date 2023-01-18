<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about'] = 'Welcome/about';

// solution
$route['solution/digital-age-networking'] = 'Welcome/digital_age_networking';
$route['solution/business-continuity-collaboration'] = 'Welcome/business_continuity_collaboration';
$route['solution/security-intelligence'] = 'Welcome/security_intelligence';

// technology
$route['technology/unified-network-infrastructure'] = 'Welcome/unified_network_infrastructure';
$route['technology/private-cloud-computing-for-mission-critical-system'] = 'Welcome/private_cloud';
$route['technology/internet-of-things'] = 'Welcome/internet_of_things';
$route['technology/collaboration-communication'] = 'Welcome/collaboration_communication';
$route['technology/secured-communication'] = 'Welcome/secured_communication';
$route['technology/military-grade-communication-system'] = 'Welcome/military_grade';
$route['technology/digital-workplace'] = 'Welcome/digital_workplace';
$route['technology/r17-integrated-security-solutions'] = 'Welcome/r17_integrated';
$route['technology/location-services'] = 'Welcome/location_services';
$route['technology/security-intelligence'] = 'Welcome/tech_security_intelligence';

// project
$route['project'] = 'Welcome/project';
$route['project/it-service-management'] = 'Welcome/it_service_management';
$route['project/it-enterprise-architecture'] = 'Welcome/it_enterprise_architecture';
$route['project/secure-cyber-ecosystem-monitoring-center'] = 'Welcome/secure_cyber';
$route['project/radio-communication-system-combat-vehicles'] = 'Welcome/radio_communication';
$route['project/data-digital-forensic'] = 'Welcome/data_digital_forensic';

// contact
$route['contact-us'] = 'Welcome/contact_us';

// career
$route['career'] = 'Welcome/career';
$route['career/(:any)'] = 'Welcome/career_us/$1';
$route['apply/career'] = 'Welcome/career_apply';

// insight article
$route['insight/article-news'] = 'Article/article_news';
$route['insight/article-news/(:num)'] = 'Article/article_news';
$route['insight/article/(:any)'] = 'Article/single_article/$1';
$route['insight/event'] = 'Article/event';
$route['insight/event/(:num)'] = 'Article/event';
$route['insight/event/R17/(:any)'] = 'Article/single_event/$1';

// sitemap
$route['sitemap\.xml'] = 'Welcome/sitemap';
