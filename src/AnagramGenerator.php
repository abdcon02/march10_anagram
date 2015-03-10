<?php
    class Anagram {

        function createAnagram($anagram, $list){

            $listArray = explode(", ", $list);

            $anaArray = str_split(strtolower($anagram));
            sort($anaArray);
            $outputArray = array();

            foreach($listArray as $listItem){
                $lowerCaseListItem = strtolower($listItem);
                //$split_Item is the array of lower case list item letters
                $split_Item = str_split($lowerCaseListItem);
                sort($split_Item);
                //$split_Item is now sorted

// for each letter in $ana, check if
    //for each letter in in $list matches,
        //if true, unset letter in $list
    //at the end of the loops, if list is empty, push list word to output

                foreach($anaArray as $anaLetter){
                    foreach($split_Item as $key => $splitLetter){
                        if ($anaLetter == $splitLetter){
                            unset($split_Item[$key]);
                        }
                    }

                }
                if(empty($split_Item)){

                    array_push($outputArray, $lowerCaseListItem);
                }
            }

            return implode(", ", $outputArray);

        }
    }

?>
