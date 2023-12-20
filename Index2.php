<?php

// Example 1
// class CoffeeMaker
// {
//     public function brew()
//     {
//         var_dump('Brewing the coffee');
//     }
// }

// class SpecialtyCoffeeMaker extends CoffeeMaker
// {
//     public function brewLatte()
//     {
//         var_dump('Brewing a latte');
//     }
// }

// (new SpecialtyCoffeeMaker())->brew();





// Example 2

class Collection
{
    protected array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
        // return array_sum(array_map(function($items) use ($key) {
        //     return $items->$key;
        // }, $this->items));
        return array_sum(array_column($this->items, $key));
    }
}

class Video 
{
    public $title;
    public $length;

    public function __construct($title,$length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}

class VideosCollection extends Collection
{
    public function length()
    { 
        return $this->sum('length');
    }
}

$videoCollection = new VideosCollection([
    new Video('Some video 1', 100),
    new Video('Some video 2', 200),
    new Video('Some video 3', 300),
]);


var_dump($videoCollection->length());