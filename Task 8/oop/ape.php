<?php

require('animal.php');

Class ape extends Animal {
    public $legs = '2';

    public function yell() {
        return "Auooo";
    }
}

?>