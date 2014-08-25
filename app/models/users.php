<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once $_SERVER['DOCUMENT_ROOT'] . 'app/third_party/cimongo/libraries/cimongo/Cimongo.php';

/**
 * Models Users data for Mongo
 */
class User extends Cimongo
{
     // collection name.
    protected $_collection = 'users';

    function __construct ()
    {
    }
}
