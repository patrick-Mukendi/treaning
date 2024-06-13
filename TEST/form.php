<?php

class Form {
    private $attributes;
    private $elements = [];

    // Constructeur pour initialiser les attributs du formulaire
    public function __construct($attributes = []) {
        $this->attributes = $attributes;
    }

    // Ajouter un élément au formulaire
    public function addElement($element) {
        $this->elements[] = $element;
    }

    // Générer les attributs HTML sous forme de chaîne
    private function renderAttributes() {
        $html = '';
        foreach ($this->attributes as $key => $value) {
            // Escaper les clés et les valeurs pour éviter les injections de code
            $html .= sprintf(' %s="%s"', htmlspecialchars($key), htmlspecialchars($value));
        }
        return $html;
    }

    // Générer le HTML complet du formulaire
    public function render() {
        // Début du formulaire avec ses attributs
        $html = '<form' . $this->renderAttributes() . '>';
        
        // Ajouter chaque élément du formulaire
        foreach ($this->elements as $element) {
            $html .= $element->render();
        }
        
        // Fin du formulaire
        $html .= '</form>';
        return $html;
    }
}
?>
