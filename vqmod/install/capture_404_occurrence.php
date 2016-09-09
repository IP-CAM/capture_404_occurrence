<?php
/*
 * @support
 * http://www.opensourcetechnologies.com/contactus.html
 * sales@opensourcetechnologies.com
 * */
        // Add database
        require('../../config.php');
        $con = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD,DB_DATABASE);
        //mysqli_select_db(DB_DATABASE, $con);
        $SQL = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "capture_404_occurrence` (
                            `id` int(11) NOT NULL AUTO_INCREMENT,
                            `request_uri` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
                            `occurrence` int(11),
                             PRIMARY KEY (`id`)
                            ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;";
        mysqli_query( $con,$SQL);
        die('Setup Successful !');
?>
