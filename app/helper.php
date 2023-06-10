<?php
function getStars($avgStars){
    $averageScore = $avgStars;

// get integer value of $averageScore
    $wholeStarCount = (int) $averageScore;
// get integer value of 5 - $averageScore
    $noStarCount    = (int) (5 - $averageScore);
// is $averageScore - $wholeStarCount larger than 0?
    $hasHalfStar    = $averageScore - $wholeStarCount > 0;

    $stars = str_repeat('<a href="#"><i class="fa fa-star "></i></a>' . PHP_EOL, $wholeStarCount) .
        ($hasHalfStar ? '<a href="#"><i class="fa fa-star-half-alt "></i></a>' . PHP_EOL : '') .
        str_repeat('<a href="#"><i class="fa fa-star-o"></i></a>' . PHP_EOL, $noStarCount);

    return $stars;
}
