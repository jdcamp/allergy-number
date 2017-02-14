<?php
    class Allergies {
        private $allergyList;

        function __construct()
        {
            $this->allergyList = array("eggs","peanuts","shellfish","strawberries","tomatoes","chocolate","pollen","cats");
        }

        function getAllergyList()
        {
            return $this->allergyList;
        }

        function allergyNumber($myNumber)
        {
            // convert number to binary, split into array, reverse order
            $myNumber = decbin ( $myNumber );
            $myNumber = str_split( $myNumber );
            $myNumber = array_reverse( $myNumber);
            // push values from allergylist into return array
            $returnArray = array();
            foreach ( $myNumber as $index => $value) {
                if ($value == "1") {
                    array_push($returnArray, $this->allergyList[$index]);
                }
            }
            return $returnArray;
        }
    }
 ?>
