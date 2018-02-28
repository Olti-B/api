<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Olti
 */
interface ApiMethod {

    public function getHoleList($placeToSearch);

    public function getDescriptionOfAGivenType($idOfGivenType);

    public function getDescriptiveListWithLimitations($idOfGivenType, $numberOfLimit);

    public function getDescriptiveListOfAskedGroup($propertyOfGroupAsked);

    public function getDescriptiveListOfAskedGroupWithLimit($propertyOfGroupAsked, $numberLimit);

    public function getNumberOfPropertiesThatAreRequested($placeToSearch, $numberLimit);

    public function getRelationIfExist($placeToSearch, $propertyOfRelationAsked);
    
    public function getRelationIfExistWithLimit($placeToSearch, $propertyOfRelationAsked, $numberLimit);
    
}
