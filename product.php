<?php

class Product
{
    public $id;
    public $name;
    public $price;
    public $quantity;

    public function __construct($id, $name, $price)
    {
        $this->id=$id;
        $this->name=$name;
        $this->price=$price;
        $this->quantity=1;
    }

    // public function showProduct()
    // {
    //     // foreach($_SESSION["product"] as $product)
    //     // {
    //         echo '<div id="'.$this->id.'" class="product">';
    //         //echo '<img src="images/'.$product->image.'">';
    //         echo '<h3 class="title"><a href="#">'.$this->name.'</a></h3>';
    //         echo '<span>Price: $'.this->price.'</span>';
    //         echo '<a class="add-to-cart" href="#" data-id="'.$this->id.'">Add To Cart</a>';
    //         echo '</div>';	
    //     //}
    // }

    public function getProduct()
    {
        return array("id"=>$this->id, "name"=>$this->name, "price"=>$this->price);
    }
}

?>