<?php
  use knerd\WP_Config;
  require_once( __DIR__ . '/vendor/knerd/wp-config/class.php' );


  $table_prefix = 'wp_';

  /**
   * WP_Config
   * add any WordPress Constant to the array below.
   * quickly set your content and wp dir using the WP_DIR and and WP_CONTENT options
   */

  new WP_Config([
    // CONFIG SCHEME & FILE STRUCTURE
    'SITE_SCHEME'           => 'https',       //* WORDPRESS SITE SCHEME
    'DIR'                   => __DIR__,       //* PROJECT DIRECTORY
    'DOCROOT'               => 'public',      //* PUBLIC DIRECTORY
    'WP_DIR'                => '',            //* BLANK UNLESS WORDPRESS IS IN SUB DIRECTORY
    'WP_CONTENT'            => 'wp-content',  //* WORDPRESS CONTENT DIRECTORY

    // DATABASE SETTINGS
    'DB_NAME'               => 'default',
    'DB_USER'               => 'user',
    'DB_PASSWORD'           => 'user',
    'DB_HOST'               => 'db',
    'DB_CHARSET'            => 'utf8',
    'DB_COLLATE'            => '',
    'DB_PREFIX'             => $table_prefix,

    // SECURITY
    'FORCE_SSL_LOGIN'       => true,
    'FORCE_SSL_ADMIN'       => true,

    // PERFORMANCE
    'WP_MEMORY_LIMIT'       => '128M',
    'WP_MAX_MEMORY_LIMIT'   => '256M',
    'WP_POST_REVISIONS'     => 2,
    'WP_CACHE'              => false,

    // DEBUG
    'WP_DEBUG'              => true,
    'SCRIPT_DEBUG'          => true,

    // SPEED
    'ENFORCE_GZIP'          => true,
    'CONCATENATE_SCRIPTS'   => false,
    'COMPRESS_SCRIPTS'      => false,
    'COMPRESS_CSS'          => false,

    // LANGUAGE
    'WPLANG'                => '',

    // THIRD-PARTY INTEGRATIONS
    'WP_REDIS_HOST'         => 'redis',
    'WPMDB_LICENSE'         => ''
  ]);

  /* That's all, stop editing! Happy blogging. */