<?php

namespace App\DataFixtures\ORM;

use Faker\Provider\Base as BaseProvider;
use Faker\Generator;

class PersonProvider extends BaseProvider
{
    public function __construct(Generator $generator)
    {
        parent::__construct($generator);
    }

    public function bufferName()
    {
        $key = array_rand($this->names);
        return $this->names[$key];
    }

    // src: https://thoughtcatalog.com/jayson-flores/2014/06/the-25-best-buffy-the-vampire-slayer-quotes/
    private $names = array(
        'Mario',
        'Luigi',
        'Sonic',
        'Pikachu',
        'Link',
        'Lara Croft',
        'Trogdor',
        'Pac-Man',
    );
}