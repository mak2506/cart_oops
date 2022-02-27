<?php
if(!isset($_SESSION))
{
       session_start();
}
if(!isset($_SESSION["product"]))
{
    $_SESSION["product"]=array();
}
if(!isset($_SESSION["cart"]))
{
    $_SESSION["cart"]=array();
}
 
    include 'function.php';
    require 'classes/product.php';
    require 'classes/cart.php'; 
    
    $cart=new Cart();
        
    //print_r($cart);
    $_SESSION["product"]=array();

    

    foreach($products as $product)
    {
        $product=new Product($product["id"], $product["name"], $product["price"], $product["image"], $product["quantity"]);
        array_push($_SESSION["product"], $product);
    }



function showProducts()
{
    foreach($_SESSION["product"] as $product)
    {
        echo '<div id="'.$product->id.'" class="product">';
        //echo '<img src="images/'.$product->image.'">';
        echo '<h3 class="title"><a href="#">'.$product->name.'</a></h3>';
        echo '<span>Price: $'.$product->price.'</span>';
        echo '<a class="add-to-cart" href="#" data-id="'.$product->id.'">Add To Cart</a>';
        echo '</div>';	
    }    
}



if(isset($_GET["action"]))
{
    $action=$_GET["action"];
    //echo "hELLO";
    //echo $action." ".$_GET["id"];
    $id=$_GET["id"];
   switch($action)
   {
       case "add":  addToCart();
                    break;
   }
}


function addToCart()
{
    global $cart;
    $id=$_GET["id"];
    foreach($_SESSION["product"] as $product)
    {
        if($product->id==$id)
        {
            echo "Hello";
            $cart->addToCart($product);
            print_r($cart->getCart());
        }        
    }
    // echo "<pre>";
    // echo json_encode($_SESSION["cart"]);
    // echo "</pre>";
}


?>