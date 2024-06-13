<?php

class Input {
    private $type;
    private $name;
    private $value;

    // Constructeur pour initialiser le type, le nom et la valeur de l'input
    public function __construct($type, $name, $value = '') {
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
    }

    // Générer le HTML de l'input
    public function render() {
        // Escaper les valeurs et générer l'input HTML
        return sprintf(
            '<input type="%s" name="%s" value="%s">',
            htmlspecialchars($this->type),
            htmlspecialchars($this->name),
            htmlspecialchars($this->value)
        );
    }
}
?>
