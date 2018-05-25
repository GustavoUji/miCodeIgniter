<?php

$data = array(
        array('Name', 'Color', 'Size'),
        array('Juan', 'Blue', 'Pequeño'),
        array('Maria', 'Red', 'Large'),
        array('Esteban', 'Green', 'Medio')
);

echo $this->table->generate($data);

?>