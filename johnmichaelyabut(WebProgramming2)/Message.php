<?php 
	/**
	* Filename: Message.php
	* Class Message for the Guestbook Project
	*/

class Message{
	private $_id;
	private $_name;
	private $_message;
	private $_email;
	private $_date_posted;
	private $_is_approved;

public function __construct($config) {
        if (isset($config['_name'])) {
            $this->_name = $config['_name'];
        }
        if (isset($config['_mess'])) {
            $this->_message = $config['_mess'];
        }
        if (isset($config['_email'])) {
            $this->_email = $config['_email'];
        }
    }


    public function getMessage() {    
        return $this->_message;
    }
    public function getName() {
        return $this->_name;
    }
    public function getEmail() {
        return $this->_email;
    }
}
 ?>