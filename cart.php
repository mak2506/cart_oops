<?php

class Cart
{
    public $cart=array();

    public function addToCart($product)
    {
       if(!($this->isExistInCart($product)))
       {
        array_push($this->cart, $product);
        array_push($_SESSION["cart"], json_encode($this->cart));
            
        }
        else{
            echo "Duplicate";
        }        
    }

    public function isExistInCart($product)
    {
        foreach($_SESSION["cart"] as $cart)
        {
            $arr=json_decode($cart);
            if($arr[0]->id == $product->id){

                return true;
            }
        }
        return false;       
    }

    public function getCart()
    {
        $c="";
        foreach($_SESSION["cart"] as $cart)
        {
            $arr=json_decode($cart);
            $c.=print_r($arr[0]->id);
        }
        return $c;
    }

}

?>