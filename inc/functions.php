<?php

//this file contains the quotes array and functions to generate a random quote and associated markup

//array of quotes
$quotes = [
    [
        "quote" => "If you don't cannibalize yourself, someone else will",
        "source" => "Steve Jobs",
        "citation" => "iPhone interview",
        "year" => "2007",
        "tags" => ["business", "disruption", "innovation"]
    ],
    [
        "quote" => "If I asked my customers what they wanted, they would have said a faster horse",
        "source" => "Henry Ford",
        "year" => "1908",
        "tags" => ["automotive", "business", "innovation"]
    ],
    [
        "quote" => "You have two lives, the second begins when you realize you have only one",
        "source" => "Confucious",
        "citation" => "Truths"
    ],
    [
        "quote" => "Jazz isn't dead, it just smells funny",
        "source" => "Frank Zappa",
        "citation" => "Larry King Interview",
        "year" => "1978",
        "tags" => ["music"]
    ],
    [
        "quote" => "What is important is seldom urgent, and what is urgent is seldom important",
        "source" => "Dwight Eisenhower"
    ],

];



//getRandomQuote function generates a random quote from a given array
function getRandomQuote($array) {
    $arr_length = count($array);
    $rand_num = rand(0, $arr_length - 1);
    return $array[$rand_num];
}

// printQuote function generates the html markup to display random quote
function printQuote($array){
    $rand_quote = getRandomQuote($array);

    $markup = '<p class="quote">' . $rand_quote["quote"] . '</p>';
    $markup .= '<p class="source">' . $rand_quote["source"];

    //if no citation or no year, don't add associated markup
    if(array_key_exists("citation", $rand_quote)) {
        $markup .= '<span class="citation">' . $rand_quote["citation"] . '</span>';
    }

    if(array_key_exists("year", $rand_quote)){
        $markup .= '<span class="year">' . $rand_quote["year"] . '</span>';
    }
    //if tags available, add tags to markup
    if(array_key_exists("tags", $rand_quote)){
        $markup .= '<div class="tags-container">';
        foreach ($rand_quote["tags"] as $tag){
            $markup .= '<span class="tags">' . $tag . '</span>';
        }
        $markup .= '</div>';
    }

    $markup .= '</p>';

    return $markup;

}

//generate random color

function rand_color(){
    return '#' . dechex(mt_rand(0, 0xFFFFFF));
}

?>