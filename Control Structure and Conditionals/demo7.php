<?php

//Ternary Operator

//$favoriteColor = 'Red';
//$secondFavoriteColor = 'Yellow';

//$color = isset($favoriteColor) ? $favoriteColor : 'blue';

//Null Coalescing Operator
//$color = $favoriteColor ?? 'blue';

//echo $color;

//$color2 = isset($favoriteColor) ? $favoriteColor : (isset($secondFavoriteColor) ? $secondFavoriteColor : 'blue');

$color2 = $favoriteColor ?? $secondFavoriteColor ?? 'blue';
echo $color2;