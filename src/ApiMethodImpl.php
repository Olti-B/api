<?php

/**
 * Description of ApiMethodImpl
 *
 * @author Olti
 * 
 */
require '../vendor/autoload.php';

require 'DatabaseConn.php';

class ApiMethodImpl extends QueryForApiMethod {

    public function getDescriptiveListWithLimitations($nameOfGivenType, $numberLimit) {
        $result = $this->getConnection()->connect()->query(parent::getNameOfGivenTypeWithLimit($nameOfGivenType, $numberLimit))->fetchAll(PDO::FETCH_OBJ);
        $encode = $this->encodeJson($result);
        return $encode;
    }

    public function getHoleList() {
        $result = $this->getConnection()->connect()->query(parent::getAllProperties())->fetchAll(PDO::FETCH_OBJ);
        $encode = $this->encodeJson($result);
        return $encode;
    }

    public function getNumberOfPropertiesThatAreRequested($numberLimit) {
        $result = $this->getConnection()->connect()->query(parent::getValuesWithLimit($numberLimit))->fetchAll(PDO::FETCH_OBJ);
        $encode = $this->encodeJson($result);
        return $encode;
    }

    public function getDescriptionByGivenParameter($parameter) {
        $result = $this->getConnection()->connect()->query(parent::getDescriptionByGivenParameter($parameter))->fetchAll(PDO::FETCH_OBJ);
        $encode = $this->encodeJson($result);
        return $encode;
    }

    protected function encodeJson($result) {
        return $jsonResponse = json_encode($result);
    }

    protected function getConnection() {
        return $getConn = new DatabaseConn();
    }

}
