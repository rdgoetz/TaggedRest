<?php
namespace Tagged\Rest;

class Schema {
    protected $_schema;
    function __construct($config){
        $this->_schema = array();
    }

    public function get(){
        return $this->_schema;
    }

    static function build($config=array()){
        $schema = new static($config);
        return $schema->get();
    }

    public static function __callStatic($method, $args) {
        $class = "\\Tagged\Rest\\Schema\\$method";
        return $class::build();
    }
}
