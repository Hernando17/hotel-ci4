<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array
     */
    public $aliases = [
        'csrf'     => CSRF::class,
        'toolbar'  => DebugToolbar::class,
        'honeypot' => Honeypot::class,
        'authFilter' => \App\Filters\AuthFilter::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array
     */
    public $globals = [
        'before' => [
            'authFilter' => ['except' => ['/', 'home/index', 'home/message', 'login/index', 'login/login', 'register/index', 'register/register']]
            // 'honeypot',
            // 'csrf',
        ],
        'after' => [
            'authFilter' => ['except' => ['/', 'home/index', 'home/message', 'login/index', 'login/logout', 'login/login', 'register/index', 'register/register', 'dashboard/index', 'dashboard/user', 'dashboard/message', 'dashboard/messagedetail/*', 'dashboard/useredit/*', 'dashboard/userupdate/*', 'dashboard/userdelete/*', 'dashboard/room', 'dashboard/room/create', 'dashboard/room/add', 'dashboard/room/edit/*', 'dashboard/room/update/*', 'dashboard/book', 'dashboard/book/create', 'dashboard/book/add', 'dashboard/book/delete/*', 'dashboard/room/delete/*']]
            // 'honeypot',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['csrf', 'throttle']
     *
     * @var array
     */
    public $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     *
     * @var array
     */
    public $filters = [];
}
