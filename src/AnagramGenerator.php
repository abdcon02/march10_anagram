<?php
    class Anagram {

        function createAnagram($anagram, $list){
            //if word in $list matches $anagram, add the word in $list to an array $outputarray

            $listArray = explode(", ",$list);
            $outputArray = array();
            foreach ($listArray as $listItem)
            {
                if ($listItem == $anagram)
                {
                    array_push($outputArray, $listItem);
                }
            }
            return implode(", ", $outputArray);

            
        }
    }


?>
