<?php


class QueryForApiMethod {
    //put your code here
    
    protected function getAllProperties() {
        return "SELECT * FROM rest";
    }

    protected function getDescriptionByGivenParameter($parameter) {
        return "SELECT descri FROM rest WHERE descri='$parameter'";
    }

    public static function getValuesWithLimit($numberLimit) {
         return "SELECT * FROM rest LIMIT $numberLimit";
    }

}
