** Unvetica New Framework README **
===================================

This files-set uses the following versions of components:

CodeIgniter 3.1.10

PHP 7.2.8

Jquery 3.4.1

JQueryUI 1.12

Twitter Bootsrap 4.3.1


Things of Note:
===============

Database Constructors are located in the SQL folder

Database connection settings are located in application/config/config.php

Routes for new controllers are entered in application/config/routes.php

Please create your own branch and do not commit directly to Master to minimize conflicts / headaches

Currently working on MAMP Server


Database Settings:
==================

username : unvetica

password : !1unvetica9!

db: unvetica_site


.htaccess
=========

A git pull may not bring the .htaccess file, in the event that happens create a new one in your webroot with the following:

---- COPY HERE -----

RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-f

RewriteCond %{REQUEST_FILENAME} !-d

RewriteRule ^(.*)$ index.php?/$1 [L]


---- END COPY ------




