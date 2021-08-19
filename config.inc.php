<?php
/**
 * The base configurations of RosarioSIS
 *
 * You can find more information in the INSTALL.md file
 *
 * @package RosarioSIS
 */

/**
 * PostgreSQL Database Settings
 *
 * You can get this info from your web host
 */

// Database server hostname: use localhost if on same server.
$DatabaseServer = 'ec2-3-217-68-126.compute-1.amazonaws.com';

// Database username.
$DatabaseUsername = 'ydzryncbluhlis';

// Database password.
$DatabasePassword = 'a118f774ba56bddf7e0e5079f156d3176581c138228ab0323319ab490ba32885';

// Database name.
$DatabaseName = 'dfau6qi8gd7m17';

// Database port: default is 5432.
$DatabasePort = '5432';


/**
 * Paths
 */

/**
 * Full path to the PostrgeSQL database dump utility for this server
 *
 * @example /usr/bin/pg_dump
 * @example C:/Progra~1/PostgreSQL/bin/pg_dump.exe
 */
$pg_dumpPath = '/usr/bin/pg_dump';

/**
 * Full path to wkhtmltopdf binary file
 *
 * An empty string means wkhtmltopdf will not be called
 * and reports will be rendered in HTML instead of PDF
 *
 * @link http://wkhtmltopdf.org
 *
 * @example /usr/local/bin/wkhtmltopdf
 * @example C:/Progra~1/wkhtmltopdf/bin/wkhtmltopdf.exe
 */
// $wkhtmltopdfPath = '/usr/local/bin/wkhtmltopdf';


/**
 * Default school year
 *
 * Do not change on install
 * Change after rollover
 * Should match the database to be able to login
 *
 * @see School > Rollover program
 */
$DefaultSyear = '2021';


/**
 * Email address to receive notifications
 * - new administrator account
 * - new student / user account
 * - new registration
 *
 * Leave empty to not receive email notifications
 */
$RosarioNotifyAddress = '';


/**
 * Email address to receive errors
 * - PHP fatal error
 * - database SQL error
 * - hacking attempts
 *
 * Leave empty to not receive errors
 */
$RosarioErrorsAddress = '';


/**
 * Locales
 *
 * Add other languages you want to support here
 *
 * @see locale/ folder
 *
 * For American, French and Spanish:
 *
 * @example array( 'en_US.utf8', 'fr_FR.utf8', 'es_ES.utf8' );
 */
$RosarioLocales = array( 'en_US.utf8' );
