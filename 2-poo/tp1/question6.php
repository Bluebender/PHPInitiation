<?php
//Créer une sous-classe nommée Form2 en dérivant la classe Form de la question précédente.
//Cette nouvelle classe doit permettre de créer des formulaires ayant en plus des boutons radio et des cases à cocher.
//Elle doit donc avoir les méthodes supplémentaires qui correspondent à ces créations.
//Créer des objets et tester le résultat.

class Form {
    public $html;

    public function __construct(string $action, string $methode="POST")
    {
        $this->html = "<form method=$methode action=$action>
                            <fieldset>";
    }

    public function setText(string $name, string $label) : void {
        $this->html .= "<fieldset>";
        $this->html .= "<legend>$label</legend>";
        $this->html .= "<textarea name=$name></textarea>";
        $this->html .= "</fieldset>";
    }

    public function setSubmit() : void {
        $this->html .= "<button type=`\"submit\">Envoyer</button>";
    }

    public function getForm() : string {
        $this->html .= "</fieldset></form>";
        return $this->html;
    }
}

class Form2 extends Form {
    public function __construct(string $action, string $methode="POST"){
        parent::__construct($action, $methode);
    }

    public function setRadio(string $question, string $name, string $v1, string $v2) : void {
        $this->html .= "<fieldset>";
        $this->html .= "<legend>$question</legend>";
        $this->html .= "<input type='radio' name=$name value=$v1>";
        $this->html .= "<label>$v1</label>";
        $this->html .= "<input type='radio' name=$name value=$v2>";
        $this->html .= "<label>$v2</label>";
        $this->html .= "</fieldset>";
    }

    public function setChechbox(string $question, string $name, string $v1, string $v2) : void {
        $this->html .= "<fieldset>";
        $this->html .= "<legend>$question</legend>";
        $this->html .= "<input type='checkbox' name=$name value=$v1>";
        $this->html .= "<label>$v1</label>";
        $this->html .= "<input type='checkbox' name=$name value=$v2>";
        $this->html .= "<label>$v2</label>";
        $this->html .= "</fieldset>";
    }

    public function getForm() : string {
        return parent::getForm();
    }
}

$form = new Form2("/ville");
$form->setText("monTexte", "Raconte-moi ta vie");
$form->setText("monAvis","Que penses tu de ta vie ?" );
$form->setRadio("Avez vous faim ?", "faim", "Oui", "Non");
$form->setChechbox("Avez vous foid ?", "froid", "Oui", "Non");
$form->setSubmit();
echo $form->getForm();