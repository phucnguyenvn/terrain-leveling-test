# Terrain Leveling Test

### Problem Statement

You are building a new house. You have already purchased a rectangular area where you will place the house.
The basement of the house should be built on a level ground, so you will have to level the entire area.
The area is leveled if the difference between the heights of its lowest and highest square meter is at most 1.
You want to measure the effort you need to put into ground leveling.

You are given a string[] area. Each character in area denotes the height at the corresponding square meter of the terrain area.
Using 1 unit of effort, you can change the height of any square meter on his area by 1 up or down.
Return the minimum total effort you need to put to obtain a leveled area.


**Definition**

| Class | Method | Parameters | Returns | Method signature 
|---|:---:|:---:|:---:|:---:|
|TerrainLeveling | getMinimum | string[] | int | int getMinimum(string[] area)



**Constraints**

* Area will contain between 1 and 50 elements, inclusive.
* Each element of area will be between 1 and 50 characters long, inclusive.
TerrainLeveling
* All elements of area will be of the same length.
* Each element of area will contain digits ('0'­'9') only.

**Installation**

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar install
```

**Run Unit Test**

Command:
```
vendor/bin/phpunit
```

Result:
```
⇒  phpunit          
PHPUnit 8.0.4 by Sebastian Bergmann and contributors.

Runtime:       PHP 7.3.2
Configuration: /Users/phucnguyenvn/Projects/terrain-leveling-test/phpunit.xml.dist

.                                                                   1 / 1 (100%)

Time: 144 ms, Memory: 10.00MB

OK (1 test, 10 assertions)
```
