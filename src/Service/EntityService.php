<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

/**
 * Create Entity Manager Object
 *
 * 
 */
class EntityService {

    private $em;

    public function __construct(EntityManagerInterface $em) {
        $this->em = $em;
    }

    /**
     * Request sql for  home page  table
     * 
     */
    public function getAll() {

        $conn = $this->em->getConnection();

        $sql = 'SELECT *, groupe.name
                FROM groupe 
                JOIN user ON user.fk_group_id = groupe.id 
                ORDER BY groupe.name';

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    /**
     * Request sql for  user and group research
     * 
     */
    public function getResearch($research) {

        $conn = $this->em->getConnection();

        $sql = 'SELECT *, groupe.name
                FROM groupe 
                JOIN user ON user.fk_group_id = groupe.id 
                WHERE groupe.name = ' . "'" . $research . "'" . ' OR user.user_firstname = ' . "'" . $research . "'";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

}
