<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Models User data for Mongo
 */
class User_model extends Base_Model
{
    /**
     * Indicates that model perisist in Mongodb
     */
    protected $_mongodb = true;

    /**
     * collection name.
     *
     * @var mixed  Defaults to 'users'. 
     */
    protected $_datasource = 'users';

    /**
     * Collection schema
     *
     * @var mixed  Defaults to array(). 
     */
    protected $_fields = array(
            'firstName' => null,
            'lastName' => null,
            'email' => null,
            'passwd' => null,
            'active' => true
        );

    /**
     * TODO: description.
     *
     * @var mixed  Defaults to array(). 
     */
    protected $validate = array(
            array(
                'field' => 'firstName',
                'label' => 'First Name',
                'rules' => 'trime|max_length[300]'
            )
        );
}
