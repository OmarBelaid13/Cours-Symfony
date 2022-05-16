<?php

namespace App\Taxes;

class Detector 
{
    protected $tva;

    public function __construct(float $seuil) 
    {
        $this->seuil = $seuil;
    }

    /**
     * Détecte montant si doit être soumis à tva u pas
     */
    public function detect(float $prix) : bool {
        if ($prix > $this->seuil) {
            return true;
        } 
        
        return false;
    }    
}