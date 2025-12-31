<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Blocked IPs
    |--------------------------------------------------------------------------
    |
    | List of individual IP addresses to block from accessing the site.
    | These IPs will receive a 403 Forbidden response.
    |
    */
    'blocked_ips' => [
        // Add specific IPs to block here
        // Example: '1.2.3.4',
        // Example: '5.6.7.8',
        // '182.191.123.199',
        // '162.158.88.126',
        // '172.70.189.136',
        // '162.158.108.54',
        //Mozilla/5.0 (Windows NT 5.1; rv:11.0) Gecko Firefox/11.0 (via ggpht.com GoogleImageProxy
        '66.249.84.98',
        '66.249.84.99',
        '66.249.84.100',
        '66.249.93.228',
        '66.249.93.229',
        '66.249.93.230',
        '66.249.93.13',
        '66.249.93.14',
        //Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0;+http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36)
        '20.15.133.191',
        '52.167.144.205',
        '40.77.167.52',
        '40.77.167.77',
        '52.167.144.211',
        '52.167.144.198',
        '52.167.144.189',
        '52.167.144.191',
        '52.167.144.166',
        '40.77.167.151',
        '40.77.167.28',
        //Mozilla/5.0+(compatible; UptimeRobot/2.0; http://www.uptimerobot.com/)
        '49.13.164.148',
        '167.235.143.113',
        '128.140.106.114',
        '52.59.43.236',
        '78.47.98.55',
        '88.99.80.227',
        '49.13.130.29',
        '18.192.166.72',
        '128.140.41.193',
        '157.90.156.63',
        '168.119.53.160',
        '52.28.162.93',
        '3.79.134.69',
        '78.46.215.1',
        '168.119.96.239',
        '49.13.167.123',
        '142.132.180.39',
        '49.13.24.81',
        '78.46.190.63',
        '78.47.173.76',
        '63.178.84.147',
        '159.69.158.189',
        '3.77.67.4',
        '18.193.252.127',
        //Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)
        '185.191.171.17',
        '185.191.171.11',
        '185.191.171.18',
        '85.208.96.206',
        '185.191.171.13',
        '185.191.171.15',
        '185.191.171.2',
        '85.208.96.194',
        '85.208.96.196',
        //Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)
        '51.68.247.202',
        '5.39.109.160',
        '92.222.104.219',
        '51.75.236.138',
        '176.31.139.18',
        '51.75.236.135',
        '92.222.108.119',
        '51.75.236.154',
        '176.31.139.2',
        '51.68.247.201',
        '94.23.188.221',
        '176.31.139.1',
        '54.37.118.79',
        '54.37.118.84',
        '51.68.247.212',
        '94.23.188.211',
        '94.23.188.209',
        '5.39.109.178',
        '51.68.247.197',
        '51.68.247.205',
        '51.68.247.218',
        '51.68.236.64',
        //meta-externalagent/1.1 (+https://developers.facebook.com/docs/sharing/webmasters/crawler)
        '57.141.0.54',
        '57.141.6.15',
        '57.141.6.70',
        '57.141.6.6',
        '57.141.6.42',
        '57.141.6.23',
        '57.141.6.48',
        '57.141.6.9',
        '57.141.6.54',
        '57.141.6.76',
        '57.141.6.13',
        '57.141.6.19',
        '57.141.6.52',
        '57.141.6.21',
        '57.141.6.40',
        //Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Amazonbot/0.1; +https://developer.amazon.com/support/amazonbot) Chrome/119.0.6045.214 Safari/537.36
        '18.214.124.6',
        '54.198.33.233',
        '52.203.237.170',
        //Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)
        '87.250.224.100',
        '213.180.203.167',
        '5.255.231.51',
        //Mozilla/5.0 (Linux; Android 5.0) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; TikTokSpider; ttspider-feedback@tiktok.com)
        '47.128.16.146',
        '47.128.122.100',
        //Mozilla/5.0 (compatible; MJ12bot/v1.4.8; http://mj12bot.com/)
        '65.108.125.120',
        '37.187.226.33',
        //LinkedInBot/1.0 (compatible; Mozilla/5.0; Apache-HttpClient +http://www.linkedin.com)
        '108.174.5.113',
        '108.174.2.218',
        '108.174.8.25',
        '108.174.8.27',
        '108.174.8.21',
        '108.174.2.219',
        //Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)
        '66.249.65.34',
        '66.249.70.166',
        '66.249.65.164',
        
        '18.97.9.98 ', //PerplexityBot: 
        '216.73.216.111', // ClaudeBot:
        '114.119.128.154', // PetalBot:
        '104.196.43.91',// ZoominfoBot:
        '199.16.157.180',// Twitterbot:
        '8.217.211.31', // AliyunSecBot:
        '3.83.76.234',// TerraCotta:
        '74.7.242.156', // OAI-SearchBot:
        '216.198.1.122', // Zendesk Asset Proxy:

    ],

    /*
    |--------------------------------------------------------------------------
    | Blocked IP Ranges
    |--------------------------------------------------------------------------
    |
    | List of IP ranges (CIDR notation) to block from accessing the site.
    | Examples:
    |   '66.249.0.0/16' - Blocks all IPs from 66.249.0.0 to 66.249.255.255
    |   '192.168.1.0/24' - Blocks all IPs from 192.168.1.0 to 192.168.1.255
    |
    */
    'blocked_ranges' => [
        // Add IP ranges to block here
        // Example: '66.249.0.0/16',
    ],

    /*
    |--------------------------------------------------------------------------
    | Blocked User Agents
    |--------------------------------------------------------------------------
    |
    | List of user agent strings to block (partial matches).
    | If any of these strings are found in the user agent, access will be denied.
    |
    */
    'blocked_user_agents' => [
        // Common malicious bots and scrapers (uncomment to block)
        'Mozilla/5.0 (Windows NT 5.1; rv:11.0) Gecko Firefox/11.0 (via ggpht.com GoogleImageProxy)',
        'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0;+http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36)',
        'Mozilla/5.0+(compatible; UptimeRobot/2.0; http://www.uptimerobot.com/)',
        'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)',
        'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)',
        'meta-externalagent/1.1 (+https://developers.facebook.com/docs/sharing/webmasters/crawler)',
        'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Amazonbot/0.1; +https://developer.amazon.com/support/amazonbot) Chrome/119.0.6045.214 Safari/537.36',
        'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)',
        'Mozilla/5.0 (Linux; Android 5.0) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; TikTokSpider; ttspider-feedback@tiktok.com)',
        'Mozilla/5.0 (compatible; MJ12bot/v1.4.8; http://mj12bot.com/)',
        'LinkedInBot/1.0 (compatible; Mozilla/5.0; Apache-HttpClient +http://www.linkedin.com)',
        'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',
        'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko); compatible; ChatGPT-User/1.0; +https://openai.com/bot'
        // 'AhrefsBot',           // SEO crawler
        // 'SemrushBot',         // SEO crawler
        // 'MJ12bot',            // SEO crawler
        // 'DotBot',             // SEO crawler
        // 'Baiduspider',        // Chinese search engine bot
        // 'YandexBot',          // Russian search engine bot
        // 'CCBot',              // Common Crawl bot
        // 'PetalBot',           // Huawei search bot
        // 'Bytespider',        // ByteDance crawler
        // 'DataForSeoBot',      // SEO data scraper
        // 'MegaIndex',         // SEO crawler
        // 'BLEXBot',           // SEO crawler
        // 'AspiegelBot',       // SEO crawler
        // 'Barkrowler',        // SEO crawler
        // 'Baiduspider',       // Chinese search bot
        // 'Sogou',             // Chinese search bot
        // 'YisouSpider',       // Chinese search bot
        // 'Scrapy',            // Python web scraping framework
        // 'curl',              // Command line tool (often used for scraping)
        // 'wget',              // Command line tool (often used for scraping)
        // 'python-requests',    // Python library (often used for scraping)
        // 'Go-http-client',    // Go HTTP client (often used for scraping)
        // 'Java/',             // Java HTTP clients (often used for scraping)
        // 'HttpClient',        // Generic HTTP client
        // 'okhttp',            // Android HTTP client
        // 'PostmanRuntime',    // API testing tool
        // 'Apache-HttpClient', // Java HTTP client
        // 'masscan',           // Port scanner
        // 'nmap',              // Network scanner
        // 'sqlmap',            // SQL injection tool
        // 'nikto',             // Web scanner
        // 'dirb',              // Web content scanner
        // 'Wfuzz',             // Web application fuzzer
        // 'masscan',           // Port scanner
        // 'zgrab',             // Network scanner
        // 'Nuclei',            // Vulnerability scanner
        // 'X11;',              // X11 forwarding (often automated)
        // 'bot',               // Generic bot identifier (use carefully - may block legitimate bots)
        // 'crawler',           // Generic crawler identifier (use carefully)
        // 'spider',            // Generic spider identifier (use carefully)
    ],

    /*
    |--------------------------------------------------------------------------
    | Enable IP Blocking
    |--------------------------------------------------------------------------
    |
    | Set to false to disable IP blocking entirely.
    |
    */
    'enabled' => true,
];

