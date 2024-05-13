<?php
class Card
{
    public $description;
    public $price;
    public $imgUrl;
    public $addToCart;

    function __construct($description, $price, $addToCart, $imgUrl)
    {
        $this->description = $description;
        $this->price = $price;
        $this->addToCart = $addToCart;
        $this->imgUrl = $imgUrl;
    }
}

class special
{
    public $img;


    function __construct($img)
    {
        $this->img = $img;
    }
}

class SecondListing
{
    public $description;
    public $price;
    public $imgUrl;
    public $addToCart;

    function __construct($description, $price, $addToCart, $imgUrl)
    {
        $this->description = $description;
        $this->price = $price;
        $this->addToCart = $addToCart;
        $this->imgUrl = $imgUrl;
    }
}
