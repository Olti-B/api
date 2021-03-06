<?php

class QueryForApiMethod {



    protected function getAllProperties() {
        return "SELECT * FROM rest";
    }

    protected function getDescriptionByGivenParameter($parameter) {
        return "SELECT descri FROM rest WHERE descri='$parameter'";
    }

    public static function getValuesWithLimit($numberLimit) {
        return "SELECT * FROM rest LIMIT $numberLimit";
    }

    public static function getNameOfGivenTypeWithLimit($nameOfGivenType, $numberLimit) {
        return "SELECT $nameOfGivenType FROM rest LIMIT $numberLimit";
    }

}
