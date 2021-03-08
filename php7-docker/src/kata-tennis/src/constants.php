<?php

    defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
    defined('EXIT_ERROR')          OR define('EXIT_ERROR', -1); // generic error
    defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
    defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
    defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
    defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
    defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
    defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
    defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
    defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code