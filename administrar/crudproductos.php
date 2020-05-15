<?php

	class Producto  {
        private $idproducto;
        private $nombreproducto;
        private $precioproducto;

        function __construct() {}

        public function getId() {
			return $this->idproducto;
        }
        public function getNombre() {
			return $this->nombreproducto;
        }
        public function getPrecio() {
			return $this->precioproducto;
        }
        
        public function setId($idproducto) {
			$this->idproducto=$idproducto;
        }
        public function setNombre($nombreproducto) {
			$this->nombreproducto=$nombreproducto;
        }
        public function setPrecio($precioproducto) {
			$this->precioproducto=$precioproducto;
        }
    }
?>