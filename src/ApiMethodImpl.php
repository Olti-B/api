<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ApiMethodImpl
 *
 * @author Olti
 * 
 */
require '../vendor/autoload.php';

require 'DatabaseConn.php';

class ApiMethodImpl extends QueryForApiMethod {

    public function getDescriptionOfAGivenType($idOfGivenType) {
        
    }

    public function getDescriptiveListOfAskedGroup($propertyOfGroupAsked) {
        
    }

    public function getDescriptiveListOfAskedGroupWithLimit($propertyOfGroupAsked, $numberLimit) {
        
    }

    public function getDescriptiveListWithLimitations($idOfGivenType, $numberOfLimit) {
        
    }

    public function getHoleList() {
        $result = $this->getConnection()->connect()->query(parent::getAllProperties())->fetchAll(PDO::FETCH_OBJ);
        $encode = $this->encodeJson($result);
        return $encode;
    }

    public function getNumberOfPropertiesThatAreRequested($placeToSearch, $numberLimit) {
        
    }

    public function getRelationIfExist($placeToSearch, $propertyOfRelationAsked) {
        
    }

    public function getRelationIfExistWithLimit($placeToSearch, $propertyOfRelationAsked, $numberLimit) {
        
    }

    public function getDescriptionByGivenName($byGivenName) {
        
    }

    public function getSingleDescriptionOfAsketParameter($nameOfAsketParameter) {
        
    }

    private function encodeJson($result) {
        $jsonResponse = json_encode($result);
        return $jsonResponse;
    }

    protected function getConnection() {
        $getConn = new DatabaseConn();
        return $getConn;
    }

}
