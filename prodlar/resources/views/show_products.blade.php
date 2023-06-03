<html>
<?php 
foreach($products as $prod)
{
    echo "<b>  product name :  <b>";
    echo "<b>{$prod->name}<b>";
    echo "--";
    echo "<b>  product price  <b>";
    echo "<b>{$prod->price}<b>";
    echo "--";
    echo "<b>   main category:  <b>";
    echo "<b>{$prod->category->parent->name}<b>";
    echo "--";
    echo "<b>  sub category:  <b>";
    echo "<b>{$prod->category->name}<b>";
    echo "--";
    echo "<b>  owners are :  <b>";
    foreach($prod->owners as $owner)
    {
        echo " "."<b>{$owner->brand}<b> "." ";
    }
   
    echo '<hr>';
}

?>
<a href="create_product">create product</a>

</html>