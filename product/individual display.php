<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oneseat"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch product details by category name
$category_name = 'Dining'; // Replace with the actual category name
$sql = "SELECT product_id, product_name, product_price, product_image FROM product WHERE category = '$category_name'";

$result = $conn->query($sql);

$products = array();

if ($result->num_rows > 0) {
    // Fetch all products into an array
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
} else {
    echo "No products found.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>

    <link rel='stylesheet' id='generate-fonts-css'
        href='//fonts.googleapis.com/css?family=Open+Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic&#038;subset=latin%2Clatin-ext&#038;ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css'
        href='https://arpicofurniture.com/wp-includes/css/dist/block-library/style.min.css?ver=6.4.2' type='text/css'
        media='all' />
    <link rel='stylesheet' id='contact-form-7-css'
        href='https://arpicofurniture.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='cff-css'
        href='https://arpicofurniture.com/wp-content/plugins/custom-facebook-feed/css/cff-style.css?ver=2.4.1.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='cff-font-awesome-css'
        href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css?ver=4.5.0' type='text/css'
        media='all' />
    <link rel='stylesheet' id='gglcptch-css'
        href='https://arpicofurniture.com/wp-content/plugins/google-captcha/css/gglcptch.css?ver=1.33' type='text/css'
        media='all' />
    <link rel='stylesheet' id='btsearch-style-css'
        href='https://arpicofurniture.com/wp-content/plugins/jano-wp-woocommerce-advanced-search/assets/css/btsearch-style.css?ver=6.4.2'
        type='text/css' media='' />
    <link rel='stylesheet' id='btsearch-fontello-style-css'
        href='https://arpicofurniture.com/wp-content/plugins/jano-wp-woocommerce-advanced-search/assets/css/fontello.css?ver=6.4.2'
        type='text/css' media='' />
    <link rel='stylesheet' id='theme.css-css'
        href='https://arpicofurniture.com/wp-content/plugins/popup-builder/public/css/theme.css?ver=3.49'
        type='text/css' media='all' />
    <link rel='stylesheet' id='sidebar-login-css'
        href='https://arpicofurniture.com/wp-content/plugins/sidebar-login/assets/css/sidebar-login.css?ver=2.7.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wonderplugin-slider-css-css'
        href='https://arpicofurniture.com/wp-content/plugins/wonderplugin-slider/engine/wonderpluginsliderengine.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='owl-carousel-css'
        href='https://arpicofurniture.com/wp-content/plugins/woo-product-gallery-slider/public/css/owl.carousel.css?ver=all'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wpgs-fa-css'
        href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css?ver=6.4.2' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wpgs-css-css'
        href='https://arpicofurniture.com/wp-content/plugins/woo-product-gallery-slider/public/css/woocommerce-product-gallery-slider-public.css?ver=all'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wpmenucart-icons-css'
        href='https://arpicofurniture.com/wp-content/plugins/woocommerce-menu-bar-cart/css/wpmenucart-icons.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wpmenucart-css'
        href='https://arpicofurniture.com/wp-content/plugins/woocommerce-menu-bar-cart/css/wpmenucart-main.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce_prettyPhoto_css-css'
        href='//arpicofurniture.com/wp-content/plugins/woocommerce/assets/css/prettyPhoto.css?ver=2.6.2' type='text/css'
        media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='//arpicofurniture.com/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=2.6.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='//arpicofurniture.com/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=2.6.2'
        type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href='//arpicofurniture.com/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=2.6.2' type='text/css'
        media='all' />
    <link rel='stylesheet' id='yith_wcas_frontend-css'
        href='https://arpicofurniture.com/wp-content/plugins/yith-woocommerce-ajax-search/assets/css/yith_wcas_ajax_search.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='generate-style-css'
        href='https://arpicofurniture.com/wp-content/themes/generatepress/style.css?ver=1.2.9.8' type='text/css'
        media='all' />
    <link rel='stylesheet' id='generate-child-css'
        href='https://arpicofurniture.com/wp-content/themes/generatepress_child/style.css?ver=1706591942'
        type='text/css' media='all' />
    <link rel='stylesheet' id='superfish-css'
        href='https://arpicofurniture.com/wp-content/themes/generatepress/css/superfish.css?ver=1.2.9.8' type='text/css'
        media='all' />
    <link rel='stylesheet' id='fontawesome-css'
        href='https://arpicofurniture.com/wp-content/themes/generatepress/css/font-awesome.min.css?ver=4.3.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='generate-style-grid-no-mobile-css'
        href='https://arpicofurniture.com/wp-content/themes/generatepress/css/unsemantic-grid-no-mobile.css?ver=1.2.9.8'
        type='text/css' media='all' />

    <meta name="viewport" content="width=1200px">
</head>

<body itemtype="http://schema.org/WebPage" itemscope="itemscope"
    class="product-template-default single single-product postid-13436 woocommerce woocommerce-page featured-image-active right-sidebar nav-below-header contained-header separate-containers active-footer-widgets-3 nav-aligned-right header-aligned-center">
    <div id="page" class="hfeed site grid-container container grid-parent">
        <div id="content" class="site-content">
            <div id="primary" class="content-area grid-parent grid-75" itemprop="mainContentOfPage">
                <div class="inside-article">
                    <?php foreach ($products as $product): ?>
                        <div itemscope itemtype="http://schema.org/Product"
                            id="product-<?php echo $product['product_id']; ?>"
                            class="post-<?php echo $product['product_id']; ?> product type-product status-publish has-post-thumbnail product_cat-new-arrivals product_cat-sofas product_cat-living-room product_cat-living-sofas product_tag-divan-sofa product_tag-fabric-sofa product_tag-new-arrival instock shipping-taxable purchasable product-type-simple">
                            <div class="images">
                                <img width="429" height="490"
                                    src="data:image/jpeg;base64,<?php echo base64_encode($product['product_image']); ?>"
                                    class="attachment-shop_single size-shop_single wp-post-image"
                                    alt=<?php echo $product['product_name']; ?>>
                            </div>
                            <div class="summary entry-summary">
                                <h1 itemprop="name" class="product_title entry-title">
                                    <?php echo $product['product_name']; ?>
                                </h1>
                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                    <p class="price"><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">Rs.</span><?php echo number_format($product['product_price'], 2); ?></span>
                                    </p>
                                    <meta itemprop="price" content="<?php echo $product['product_price']; ?>" />
                                    <meta itemprop="priceCurrency" content="LKR" />
                                    <link itemprop="availability" href="https://schema.org/InStock" />
                                </div>
                                <p class="stock in-stock">In stock</p>
                                <form method="post" action="add-to-cart.php">
                                    <div class="quantity">
                                        <input type="number" step="1" min="1" name="quantity" value="1" title="Qty"
                                            class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric" />
                                    </div>
                                    <input type="hidden" name="add-to-cart" value="<?php echo $product['product_id']; ?>" />
                                    <button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div><!-- .inside-article -->
            </div><!-- #primary -->
        </div><!-- #content -->
    </div><!-- #page -->
</body>

</html>