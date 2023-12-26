<?php

namespace App\Model\Entity;

class Organization
{
    /**
     * ID da organização
     * @var integer
     */
    public $id = 1;
    /**
     * Nome da organização
     * @var string
     */
    public $name = 'WDEV';

    /**
     * Site da organização
     * @var string
     */

    public $site = 'https://www.google.com.br';

    /**
     * Descrição da organização
     * @var string
     */
    public $description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quam nemo repudiandae possimus neque veniam et. Cum inventore, explicabo, soluta perferendis 
    tempora repellat iste culpa veniam blanditiis eveniet voluptatem voluptatibus!";
}