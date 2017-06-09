<?php

require 'IP2Location.php';

/**
* Redirect to correct localization
*/
class Locate {
    
    private $_route = '';

    function __construct()
    {
        $db = new IP2Location(__DIR__ .'/ipdb/IP2LOCATION-LITE-DB5.BIN', IP2Location::FILE_IO);
        $ip = $_SERVER['REMOTE_ADDR'];
        $records = $db->lookup($ip, IP2Location::ALL);

        switch ($records['countryCode'] ) {
            case 'UA':
                $this->_route = 'ukr';
                break;
            case 'RU':
            case 'BY':
                $this->_route = 'rus';
                break;
            
            default:
                $this->_route = '';
                break;
        }

    }

    public function handle()
    {

        $host = "http://$_SERVER[HTTP_HOST]";
        $actual_link = "$host$_SERVER[REQUEST_URI]";
        $path = parse_url($actual_link, PHP_URL_PATH);
        $path_parts = null;

        $this->_route = (isset($_COOKIE['userSelectedLocal'])) ? $_COOKIE['userSelectedLocal'] : $this->_route;

        if ($this->_route == 'eng')
            $this->_route = '';

        // current route is not correct
        if ( strpos($path, $this->_route) == false && $path != '/debtmarket/' && $path != '/tarantino/' && $path != '/dacollection/') {
            $path_parts = explode('/', $path); // $path_parts[1] is local route

            // var_dump($path_parts);

            // page with local id
            if ( count($path_parts) == 3 ){
                // is page
                if (strpos($path_parts[2], 'html') !== false) {
                    // for /loc/page.html

                    if (strlen($this->_route) == 0) {
                        unset($path_parts[1]);
                    } else {
                        $path_parts[1] = $this->_route;
                    }

                } elseif (strpos($path_parts[1], 'rus') !== false || strpos($path_parts[1], 'ukr') !== false) {
                    // for /loc_id/
                    $path_parts[1] = $this->_route;
                } else {
                    // for /page/
                    $path_parts[1] = (strlen($this->_route) == 0) ? $path_parts[1] : $this->_route.'/'.$path_parts[1];

                    // temporary for /ukr/project and /rus/project redirect to /project
                    if ( strpos($path_parts[1], 'debtmarket') !== false || strpos($path_parts[1], 'tarantino') !== false || strpos($path_parts[1], 'dacollection') !== false) {
                        $temp_split = explode('/', $path_parts[1]);
                        $path_parts[1] = $temp_split[1];
                    }

                }

            } elseif ( count($path_parts) == 2 ) { // page without local id /
                
                if (strpos($path_parts[1], 'html') !== false) {
                    // for /page.html
                    $path_parts[2] = $path_parts[1];
                    if (strlen($this->_route) == 0) {
                        unset($path_parts[1]);
                    } else {
                        $path_parts[1] = $this->_route;
                    }

                } else {
                    $path_parts[1] = $this->_route;
                }
            } elseif ( count($path_parts) == 4 ) {
                // for /rus/tarantino/
                $path_parts[1] = $this->_route;
                // temporary for /ukr/project and /rus/project redirect to /project
                if ( strpos($path_parts[2], 'debtmarket') !== false || strpos($path_parts[2], 'tarantino') !== false || strpos($path_parts[2], 'dacollection') !== false) {
                    unset($path_parts[1]);
                }
            }


            // handle ENG
            if ($actual_link == $host.implode('/', $path_parts)) {
                $path_parts = null;
            }
        }

        // if local is incorrect
        if ($path_parts != null) {
            $assambled_path = implode('/', $path_parts);
            $redirectUrl = $host.$assambled_path;

            // var_dump($redirectUrl);
            header('Location: '.$redirectUrl);
            exit;
            
        }
    }
}
(new Locate())->handle();