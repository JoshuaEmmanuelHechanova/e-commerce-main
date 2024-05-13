<?php
include("./models/card.php");

$collection = array(
    new Card("Up & Down jersy", "750", "Add to cart", "./images/up&down.png"),
    new Card("Hoodie", "₱430", "Add to Cart", "./images/hoodie.png"),
    new Card("Elementary uniform", "₱400", "Add to Cart", "./images/elem-uni.png"),
    new Card("KNP Uniform", "₱660", "Add to Cart", "./images/KNP UNIFORM.png"),
    new Card("Lab Gown", "₱600", "Add to Cart", "./images/LAB-Gown.png"),
    new Card("Nursing Uniform", "₱660", "Add to Cart", "./images/nursing-uni.png"),
    new Card("Scrub Suits", "₱660", "Add to Cart", "./images/srub-suit.png"),
    new Card("Slacks & Blazer", "₱660", "Add to Cart", "./images/Slacks-blazer.png"),
    new Card("Slacks", "₱1000", "Add to Cart", "./images/slacks.png"),
    new Card("Tropical", "₱1000", "Add to Cart", "./images/tropical.png")
)
?>
<h1 class="white">Our Clothing Collection</h1>
<div class="grid">
    <?php
    foreach ($collection as $e) {
        include("./widgets/listing1.php");
    }
    ?>
</div>
<?php
$specialOffers = array(
    new Card("Special Offer 1", "Exclusive Discount", "Grab Deal", "./images/hoodie.png"),
    new Card("Special Offer 2", "Limited Time Only", "Get Offer", "./images/product9.jpg"),
    new Card("Special Offer 3", "Exclusive Discount", "Grab Deal", "./images/product8.jpg"),
    new Card("Special Offer 4", "Limited Time Only", "Get Offer", "./images/3 jersy.jpg"),
    new Card("Special Offer 5", "Limited Time Only", "Get Offer", "./images/Slacks-blazer.png"),
)
?>

<h1 class="white" id="special">Special Offers</h1>
<div class="grid">
    <?php
    foreach ($specialOffers as $s) {
        include("./widgets/listing2.php");
    }
    ?>
</div>


<?php
$limitedOffers = array(
    new Special("./images/product21.png"),
    new Special("./images/product23.png"),
    new Special("./images/product18.png"),
    new Special("./images/product14.png"),
    new Special("./images/product17.png"),
)
?>

<div class="container-limited">
    <h1 class="white">Limited Edition</h1>
    <div class="grids">
        <?php
        foreach ($limitedOffers as $x) {
            include("./widgets/listing3.php");
        }
        ?>
    </div>
</div>