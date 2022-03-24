<?php
    class persegipanjang{
        private $p;
        private $l;
        function __construct($p,$l)
        {
            $this->panjang = $p;
            $this->lebar = $l;
        }
        function getluas()
        {
            return $this->panjang *$this->lebar;
        }
        function getkeliling()
        {
            return 2 * ($this->panjang + $this->lebar);
        }
        
    }
?>