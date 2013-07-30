Google Mirror API's Quick Start for PHP using SQLite3
========================

This has been modified by Tony Gaitatzis - http://www.linkedin.com/in/tonygaitatzis

The documentation for this quick start was modified 
from the code avaliable on developers.google.com.
Please see here for more information:
https://developers.google.com/glass/quickstart/php


Motivation behind this project
==============================
The motivation behind this project is that modern Linux distributions do not support
SQLite2, which is coded into Google's demo code for PHP/Glassware.  This results in the error:

PHP Fatal error:  Call to undefined function sqlite_fetch_single() in util.php on line 61


In addition, the Google implementation handles data structures as arrays, but attempts to
treat them as objects, causing the following error:

PHP Fatal error:  Call to a member function getItems() on a non-object in index.php on line 145


I've modified util.php to support SQLite3, and modified google-api-php-client/config.php to support object data structures, resolving both these issues.


Configuration:
------------

- Download and configure this code on your server (see https://developers.google.com/glass/quickstart/php).

- if you want to manage subscriptions, be sure you have an SSL cert.  If you've never done that before, good luck!  A decent tutorial for self-signed ssl certificates can be found at http://blog.kabisa.nl/2010/03/08/setup-a-self-signed-ssl-site-with-apache2/

- Register an API key from https://code.google.com/apis/console/ under the "API Access" menu.  Be sure to make the Redirect URI the same url structure as your $base_url listed in the next step.  That means that if your $base_url is "https://example.com/glasswarename", then your Redirect URI is "https://example.com/glasswarename/oauth2callback.php"
  

- Edit account information in config.php under in the root folder:
   
 $api_client_id = "YOUR_API_CLIENT_ID";  
 $api_client_secret = "YOUR_CLIENT_SECRET"; 
 $api_simple_key = "YOUR_SIMPLE_KEY"; 
 $base_url = "YOUR_URL"; // e.g. "https://example.com/glasswarename" 
 $sqlite_database = "YOUR_DATABASE"; // e.g. "/var/db/glasswarename.sqlite" - make sure it's writeable
 

  If your webpage prints out all the information successfully, congratulations! You may now use this to develop your own glassware app
  