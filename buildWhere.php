<?php

/**
* @param {string} $username
* @param {string} $title
* @return {string}
*/

function buildWhereCondition( $username, $title ) {
$QryStr = 'SELECT username, title FROM editcount WHERE username > $username';
    //bind param username else title
    $QryStr .= ($username) ? ' AND username = $username' : $title ;
    
    return $QryStr;

}
?>