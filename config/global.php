<?php

//Config::set('FORM_TEMPLATES', __DIR__.'/../views/formtemplates/');

// Authentication
Config::set('AUTH_HASH', 'sha256');
Config::set('AUTH_TABLE', 'users');
Config::set('AUTH_USERNAME_COLUMN', 'username');
Config::set('AUTH_PASSWORD_COLUMN', 'password');