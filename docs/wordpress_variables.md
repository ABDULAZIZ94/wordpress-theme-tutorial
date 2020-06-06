# prevent plugin direct access to file

    define( 'ABSPATH', dirname(dirname(__FILE__)) . '/' );
    define( 'WPINC', 'wp-includes' );

