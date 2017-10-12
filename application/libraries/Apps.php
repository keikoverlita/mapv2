<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apps {
    var $name="MAP - ODP & DP Witel Denpasar";
    var $page_header="MAP ODP & DP Witel Denpasar";
    var $title="MAP";
    var $release="Version Production";
    var $ver="Version 2.3.0";
    var $modname="";
    var $moddesc="";
    var $copyright = 'MAP &copy; 2017';
    var $statnav="development";
    
    public function __construct(){

    }
        
    public function modulname() {
        return $this->modname;
    }
    
    public function moduldesc() {
        return $this->moddesc;
    }
    
    public function titlepage($param) {
        return $param;
    }
    
    public function modulsource($param) {
        return $param;
    }
    
    public function idmenu($param) {
        return $param;
    }
    
    public function namamenu($param) {
        return $param;
    }
}
