<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once $_SERVER['DOCUMENT_ROOT'] . 'app/third_party/cimongo/libraries/cimongo/Cimongo.php';

/**
 * Models User data for Mongo
 */
class User extends Cimongo
{
    public $data;

    // collection name.
    protected $_collection = 'users';

    //Collection schema
    protected $_schema = array(
            'firstName' => null,
            'lastName' => null,
            'email' => null,
            'passwd' => null,
            'active' => true
        );

    function __construct ($data = array())
    {
        $data = func_get_args();

        if (empty($data)) throw new Exception("No user data");

        $this->switch_db('bms');

        if (is_array($data[0]))
        {
            $this->data = array_replace_recursive($_schema, $data[0]);
        }
        else
        {
            if (empty($data[0])) throw new Exception("Invalid User ID");

            $this->data = $this->get_where('users', array('_id' => $data[0]));
        }
    }

    public function get_all ()
    {
        return $this->get($this->_datasource);
    }

    /**
     * Creates a new user
     */
    private function _create ()
    {
        $this->insert($this->_collection, $this->data);

        $this->data->_id = $this->insert_id();

        return true;
    }
}
