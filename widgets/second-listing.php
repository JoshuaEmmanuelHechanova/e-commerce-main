<?php
include("../models/card.php");


$secondListing = array(
    new Card("Up & Down jersy", "750", "Add to cart", "../images/up&down.png"),
    new Card("Hoodie", "₱430", "Add to Cart", "../images/hoodie.png"),
    new Card("Elementary uniform", "₱400", "Add to Cart", "../images/elem-uni.png"),
    new Card("KNP Uniform", "₱660", "Add to Cart", "../images/KNP UNIFORM.png"),
    new Card("Lab Gown", "₱600", "Add to Cart", "../images/LAB-Gown.png"),
    new Card("Nursing Uniform", "₱660", "Add to Cart", "../images/nursing-uni.png"),
    new Card("Scrub Suits", "₱660", "Add to Cart", "../images/srub-suit.png"),
    new Card("Slacks & Blazer", "₱660", "Add to Cart", "../images/Slacks-blazer.png"),
    new Card("Slacks", "₱1000", "Add to Cart", "../images/slacks.png"),
    new Card("Tropical", "₱1000", "Add to Cart", "../images/tropical.png"),
    new Card("Special Offer 1", "Exclusive Discount", "Grab Deal", "../images/hoodie.png"),
    new Card("Special Offer 2", "Limited Time Only", "Get Offer", "../images/product9.jpg"),
    new Card("Special Offer 3", "Exclusive Discount", "Grab Deal", "../images/product8.jpg"),
    new Card("Special Offer 4", "Limited Time Only", "Get Offer", "../images/3 jersy.jpg"),
    new Card("Special Offer 5", "Limited Time Only", "Get Offer", "../images/Slacks-blazer.png"),
    new Card("New West", "₱760", "Get Offer", "../images/product22.png"),
    new Card("New West", "₱760", "Get Offer", "../images/product12.png"),
    new Card("New West", "₱760", "Get Offer", "../images/product13.png"),
    new Card("New West", "₱760", "Get Offer", "../images/product14.png"),
    new Card("New West", "₱760", "Get Offer", "../images/product15.png"),
    new Card("New West", "₱760", "Get Offer", "../images/product16.png"),
    new Card("New West", "₱760", "Get Offer", "../images/product17.png"),
    new Card("New West", "₱760", "Get Offer", "../images/product18.png"),
    new Card("New West", "₱760", "Get Offer", "../images/product19.png"),
    new Card("New West", "₱760", "Get Offer", "../images/product20.png"),
    new Card("New West", "₱760", "Get Offer", "../images/product21.png"),
    new Card("New West", "₱760", "Get Offer", "../images/product22.png"),
    new Card("New West", "₱760", "Get Offer", "../images/product23.png"),
)

?>

<h1 class="p-header high-font">All products</h1>
<div class="p-con">
    <div class="p-grid">
        <?php
        foreach ($secondListing as $q) {
            include("../widgets/slisting.php");
        }
        ?>
    </div>