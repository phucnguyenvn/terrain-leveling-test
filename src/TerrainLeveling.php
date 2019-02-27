<?php

class TerrainLeveling
{
    /**
     * The basement of the house should be built on a level ground, so you will have to level the entire area.
     * The area is leveled if the difference between the heights of its lowest and highest square meter is at most 1.
     * You want to measure the effort you need to put into groundleveling.
     * You are given a string[] area.
     * Each character in area denotes the height at the corresponding square meter of the terrain area.
     * Using 1 unit of effort, you can change the height of any square meter on his area by 1 up or down.
     * Return the minimum total effort you need to put to obtain a leveled area.
     *
     * @param  string[]  $area
     * @return int $minimumEffort or -1: Input data invalid
     */
    public static function getMinimum($area)
    {
        $_arrEffort = [];
        $_max = 0;
        $_min = 10;
        if(!(TerrainLeveling::checkConstraints($area))){
          return -1;
        }

        // Scan all items in array for max and min value
        foreach ($area as $levelHeight) {
          $arrHeighElement = str_split($levelHeight);
          $_min = min(min($arrHeighElement), $_min);
          $_max = max(max($arrHeighElement), $_max);
        }

        // Try $i as optimal min height value
        for ($i = $_min; $i <= $_max ; $i++) {
          $_effort = 0;
          // Scan all items in array effort
          foreach ($area as $levelHeight) {
            $arrHeighElement = str_split($levelHeight);
            foreach ($arrHeighElement as $heightVal) {
              $_gap = abs($i - $heightVal);
              $_effort += ($i < $heightVal) ?  max($_gap - 1, 0) :  $_gap;
            }
          }
          array_push($_arrEffort, $_effort);
        }
        return min($_arrEffort);
    }

    /**
    * checks if the area given to the getMinimum respects the different constaints
    * 
    * @param  string[]  $area
    * @return bool $validInput
    */
    public static function checkConstraints($area){
      // Area is not an array
      if(!is_array($area)){
        return false;
      }

      // Area will contain between 1 and 50 elements, inclusive.
      if(count($area) < 1 || count($area) > 50){
        return false;
      }

      $_length = 0;
      foreach ($area as $element) {
        // Each element of area will be between 1 and 50 characters long, inclusive.
        if(strlen($element) < 1 || strlen($element) > 50){
          return false;
        }
        $_length = $_length === 0 ? strlen($element) : $_length;

        // All elements of area will be of the same length.
        if($_length != strlen($element)){
          return false;
        }

        // Each element of area will contain digits ('0'­'9') only.
        $arrElement = str_split($element);
        foreach ($arrElement as $c) {
          if($c < '0' || $c > '9'){
            return false;
          }
        }
      }
      return true;
    }
}