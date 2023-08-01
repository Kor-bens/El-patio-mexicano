<?php 

class Message{
    private int $id_msg;
    private string $date_envoi;
    private string $texte;
    private Categorie_msg $id_categorie;
    private Personne $personne;

    public function __construct($id_msg,$date_envoi,$texte,$id_categorie,$personne){
        $this->id_msg = $id_msg;
        $this->date_envoi = $date_envoi;
        $this->texte = $texte;
        $this->id_categorie = $id_categorie;
        $this->personne = $personne;
    }
}