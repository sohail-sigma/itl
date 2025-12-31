<?php namespace san\San\Classes;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\IpUtils;
use Backend\Facades\BackendAuth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

/**
 * IP Block Middleware
 * 
 * Blocks access from specific IPs, IP ranges, and bots/crawlers
 * Always allows backend/admin access regardless of IP
 */
class IpBlockMiddleware
{
    /**
     * List of blocked individual IPs
     * 
     * @var array
     */
    protected $blockedIps;

    /**
     * List of blocked IP ranges (CIDR notation)
     * 
     * @var array
     */
    protected $blockedRanges;

    /**
     * List of blocked user agent strings (partial matches)
     * 
     * @var array
     */
    protected $blockedUserAgents;

    /**
     * Whether IP blocking is enabled
     * 
     * @var bool
     */
    protected $enabled;

    /**
     * Constructor - Load configuration
     */
    public function __construct()
    {
        $this->enabled = Config::get('san.san::ipblock.enabled', true);
        $this->blockedIps = Config::get('san.san::ipblock.blocked_ips', []);
        $this->blockedRanges = Config::get('san.san::ipblock.blocked_ranges', []);
        $this->blockedUserAgents = Config::get('san.san::ipblock.blocked_user_agents', []);
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // If IP blocking is disabled, allow all requests
        if (!$this->enabled) {
            return $next($request);
        }

        // Always allow backend/admin access
        if (BackendAuth::check() || $request->is('backend/*')) {
            return $next($request);
        }

        $ip = $request->ip();
        $userAgent = $request->userAgent() ?? '';
        // Check if IP is blocked
        if ($this->isIpBlocked($ip)) {
            Log::warning('Blocked IP access attempt', [
                'ip' => $ip,
                'url' => $request->fullUrl(),
                'user_agent' => $userAgent,
            ]);
            
            return $this->getBlockedResponse();
        }

        // Check if User-Agent is blocked
        if ($this->isUserAgentBlocked($userAgent)) {
            Log::warning('Blocked User-Agent access attempt', [
                'ip' => $ip,
                'url' => $request->fullUrl(),
                'user_agent' => $userAgent,
            ]);
            
            return $this->getBlockedResponse();
        }

        return $next($request);
    }

    /**
     * Check if IP is blocked
     *
     * @param string $ip
     * @return bool
     */
    protected function isIpBlocked($ip)
    {
        // Check individual IPs
        if (in_array($ip, $this->blockedIps)) {
            return true;
        }

        // Check IP ranges
        if (!empty($this->blockedRanges) && IpUtils::checkIp($ip, $this->blockedRanges)) {
            return true;
        }

        return false;
    }

    /**
     * Check if User-Agent is blocked
     *
     * @param string $userAgent
     * @return bool
     */
    protected function isUserAgentBlocked($userAgent)
    {
        if (empty($userAgent) || empty($this->blockedUserAgents)) {
            return false;
        }

        foreach ($this->blockedUserAgents as $blockedAgent) {
            if (stripos($userAgent, $blockedAgent) !== false) {
                return true;
            }
        }

        return false;
    }

    /**
     * Get the blocked access response
     *
     * @return \Illuminate\Http\Response
     */
    protected function getBlockedResponse()
    {
        // Try to load the custom view file directly
        $viewFile = plugins_path('san/san/views/ip_blocked.htm');
        
        if (file_exists($viewFile)) {
            $html = file_get_contents($viewFile);
            return Response::make($html, 403);
        }
        
        // Fallback to a simple HTML response if view doesn't exist
        $html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Denied</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 100%;
            padding: 40px;
            text-align: center;
        }
        .icon {
            font-size: 64px;
            color: #e74c3c;
            margin-bottom: 20px;
        }
        h1 {
            color: #2c3e50;
            font-size: 28px;
            margin-bottom: 15px;
            font-weight: 600;
        }
        p {
            color: #7f8c8d;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        .message {
            background: #fff3cd;
            border: 1px solid #ffc107;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
            color: #856404;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ecf0f1;
            color: #95a5a6;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">🚫</div>
        <h1>Access Denied</h1>
        <div class="message">
            <strong>Your IP address has been blocked from accessing this website.</strong>
        </div>
        <p>
            If you believe this is an error, please contact the website administrator.
        </p>
        <div class="footer">
            Error Code: 403 Forbidden
        </div>
    </div>
</body>
</html>';
        
        return Response::make($html, 403);
    }
}

