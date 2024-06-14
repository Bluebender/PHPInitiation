<?php
//Créer une classe nommée Form représentant un formulaire HTML. Le constructeur doit créer le code d'en-tête du formulaire en utilisant les éléments <form> et <fieldset>.
//Une méthode setText() doit permettre d'ajouter une zone de texte.
//Une méthode setSubmit() doit permettre d'ajouter un bouton d'envoi.
//Les paramètres de ces méthodes doivent correspondre aux attributs des éléments HTML correspondants.
//La méthode getForm() doit retourner tout le code HTML de création du formulaire.
//Créer des objets Form et y ajouter deux zones de texte et un bouton d'envoi. Tester l'affichage obtenu.

class Form
{
    public $html;

    public function __construct(string $action, string $methode = "POST")
    {
        $this->html = "<form method=$methode action=$action>
                            <fieldset>";
    }

    public function setText(string $name): void
    {
        $this->html .= "<textarea name=$name></textarea>";
    }

    public function setSubmit(): void
    {
        $this->html .= "<button type=`\"submit\">Envoyer</button>";
    }

    public function getForm(): string
    {
        $this->html .= "</fieldset></form>";
        return $this->html;
    }
}

$form = new Form("/ville");
$form->setText("monTexte");
$form->setText("monAvis");
$form->setSubmit();
echo $form->getForm();