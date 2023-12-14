<?php


class Team 
{
    protected $name;
    protected $members = [];

    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members[] = $members;
    }
    // nice way to start new class object
    public static function start(...$params)
    {
        // var_dump($params);
        return new static(...$params);
    }

    public function name()
    {
        return $this->name;
    }

    public function members()
    {
        return $this->members;
    }

    public function add($name)
    {
        $this->members[] = $name;
    }

    public function cancel()
    {
        
    }

    public function manager()
    {
        
    }

}

class Member
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function lastView()
    {
        
    }
}
$ismail = Team::start('Ismail', [
    new Member('Norhan'),
    new Member('Rashed'),
]);

// $ismail->add('Norhan');
// $ismail->add('Rashed');

var_dump($ismail->members());