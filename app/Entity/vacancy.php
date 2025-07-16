<?php

namespace App\Entity;

class Vacancy{

    /**
     * Identificador único da vaga
     * @var integer
     */
    public $ID;

    /**
     * Titulo da vaga 
     * @var string
     */
    public $TITLE;

    /**
     * Descrição da vaga
     * @var string
     */
    public $DESCRIPTION;

    /**
     * Define se a vaga está ativa ou não (True or False)
     * @var boolean
     */
    public $STATUS;

    /**
     * Data de publicação da vaga
     * @var string
     */
    public $DATE;

}