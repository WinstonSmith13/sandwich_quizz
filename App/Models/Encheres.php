<?php

namespace SYRADEV\AutoEncheres\Models;

/*
 * Modèle Enchères
 */
class EncheresModel
{
    private int $uid_utilisateur;
    private int $uid_annonce;
    private int $date;
    private float $montant;


    public function __construct($EnchereInfos) {
        $this->uid_utilisateur = $EnchereInfos['uid_utilisateur'];
        $this->uid_annonce = $EnchereInfos['uid_annonce'];
        $this->date = strtotime($EnchereInfos['date']);
        $this->montant = $EnchereInfos['montant'];
        return $this;
    }

    public function __get($property) {
        return $this->$property;
    }

}
