<?php
    require_once "src/AnagramGenerator.php";

    class AnagramGeneratorTest extends PHPUnit_Framework_TestCase {

        function test_CreateAnagram_oneLetter(){

            //Arrange
            $test_AnagramGenerator = new Anagram;
            $input_anagram = "a";
            $input_list = "a";

            //Act
            $result = $test_AnagramGenerator->createAnagram($input_anagram, $input_list);

            //Assert
            
            $this->assertEquals("a" , $result);
        }







    }

?>
