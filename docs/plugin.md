# install plugin without ftp
append this code at end of in wp-config.php

    /** Sets up 'direct' method for wordpress, auto update without ftp */
    define('FS_METHOD','direct');