<?php
    require_once "src/Allergies.php";
    class AllergiesTest extends PHPUnit_Framework_TestCase
    {
        function test_Allergies()
        {
        // Arrange
        $test_case = new Allergies;
        $input_number = 75;
        //Act
        $result = $test_case->allergyNumber($input_number);
        //assert
        $this->assertEquals(array("eggs","peanuts", "strawberries" ,"pollen"),$result);
    }
}
 ?>
