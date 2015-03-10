<?php
    class Anagram {

        // function createAnagram($anagram, $list){
        //     //if word in $list matches $anagram, add the word in $list to an array $outputarray
        //
        //     $listArray = explode(", ",$list);
        //     $outputArray = array();
        //     foreach ($listArray as $listItem)
        //     {
        //         if ($listItem == $anagram)
        //         {
        //             array_push($outputArray, $listItem);
        //         }
        //     }
        //     return implode(", ", $outputArray);
        //
        //
        // }

        function createAnagram($anagram, $list){
            //if word in $list matches $anagram, add the word in $list to an array $outputarray

            $listArray = explode(", ", $list);

            $anaArray = str_split($anagram);
            sort($anaArray);
            $outputArray = array();

            foreach($listArray as $listItem){
                $split_Item = str_split($listItem);
                sort($split_Item);



                if($split_Item == $anaArray){

                    array_push($outputArray, $listItem);
                }
            }

            return implode(", ", $outputArray);

        }
    }


?>
