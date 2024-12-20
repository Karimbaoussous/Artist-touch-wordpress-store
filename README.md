
# Artisan Touch - WooCommerce E-commerce Project

**Artisan Touch** is an e-commerce website built using WordPress, WooCommerce, and the **WooCommerce Product Filter** plugin. The website is designed to sell handmade and crafted products in various categories such as Home Decor, Fashion, and Kitchen Essentials.

## Project Overview

This project involves the creation of a fully functional e-commerce store for **Artisan Touch**, a website dedicated to selling high-quality, handmade products. The project demonstrates the use of WooCommerce for setting up product catalogs, implementing filters, and ensuring an intuitive user experience.

The site includes:

- Product catalog with categories and filters
- Customizable product pages with descriptions, images, and prices
- Shopping cart and checkout functionality
- Contact page and "About Us" page
- Integrated filters for product search by category, price, and ratings

## Key Features

- **WooCommerce Setup**: The website uses WooCommerce for managing products, customers, and orders.
- **Custom Filters**: Using the **WooCommerce Product Filter** plugin to filter products by categories, price range, and ratings.
- **Responsive Design**: The site is fully responsive, providing a seamless experience across mobile, tablet, and desktop devices.
- **Custom Styling**: Tailored styles to match the branding of the Artisan Touch store.
- **User Accounts**: Customers can create accounts, view past orders, and manage their account settings.
- **SEO Optimization**: SEO-friendly setup for better search engine visibility.

## Technologies Used

- **WordPress**: Content Management System for the website.
- **WooCommerce**: Plugin for setting up the e-commerce functionality.
- **WooCommerce Product Filter**: Plugin to add advanced product filtering options.
- **PHP**: Server-side scripting language for customization.
- **CSS/HTML**: For styling and layout customization.
- **JavaScript**: To add interactivity (e.g., AJAX-based product filtering).
- **MySQL**: Database for storing site data, including product information and customer orders.

## Installation Instructions

Follow these steps to set up the Artisan Touch WooCommerce e-commerce site locally:

### Step 1: Clone the Repository
Clone the repository to your local machine:
```bash
git clone https://github.com/Karimbaoussous/Artist-touch-wordpress-store.git
cd Artist-touch-wordpress-store
```

### Step 2: Install WordPress and WooCommerce

1. **Set up WordPress**:
   - Download the latest version of [WordPress](https://wordpress.org/download/).
   - Set up a local server environment (use [XAMPP](https://www.apachefriends.org/) or [MAMP](https://www.mamp.info/en/)).
   - Create a new MySQL database for your site.

2. **Install WooCommerce**:
   - Go to your WordPress Dashboard.
   - Navigate to **Plugins > Add New** and search for **WooCommerce**.
   - Click **Install Now** and then **Activate**.

3. **Install WooCommerce Product Filter**:
   - Go to **Plugins > Add New** and search for **WooCommerce Product Filter**.
   - Click **Install Now** and then **Activate**.

### Step 3: Configure WooCommerce

1. **Go to WooCommerce Settings** and configure the following:
   - Set up your **currency**.
   - Configure your **shipping and payment options**.
   - Add your **tax settings**.

2. **Configure the Product Filter Plugin**:
   - Go to **WooCommerce > Settings > Product Filters** to configure filter options like categories, price range, ratings, etc.

### Step 4: Add Products

Add products to your store by going to **Products > Add New** in the WordPress Dashboard. For each product, include the following:
- Product name
- Product categories
- Price
- Description
- Product images

### Step 5: Customize the Theme

1. **Choose a theme**: Choose a WooCommerce-compatible theme (e.g., Astra, Storefront, or any other).
2. **Customize** the theme via the **Customizer** to match the branding and layout of your store.
3. **Add widgets** to your sidebar for the product filters.

### Step 6: Set Up Pages

1. **Home Page**: Create a welcoming home page with a product carousel or featured products.
2. **Shop Page**: Set up a product catalog that showcases all products.
3. **About Us**: Provide details about Artisan Touch and the brand story.
4. **Contact Page**: Include a contact form for customer inquiries.

## Usage

Once the site is set up, you can:

- **Browse Products**: Navigate through the product catalog using filters for price range, categories, and ratings.
- **Add Products to Cart**: Customers can add items to the shopping cart.
- **Checkout**: Proceed to the checkout to complete the purchase.
- **User Accounts**: Users can create accounts to track their orders.

## Customization

For advanced customization, you can modify the CSS and JavaScript files located in the theme or add additional WooCommerce extensions to add more functionality (e.g., product variations, shipping calculations, etc.).

### Example Custom CSS
You can customize the design by adding custom styles:
```css
/* Example: Custom CSS to style the filter box */
.woocommerce-product-filter {
    padding: 10px;
    background-color: #f7f7f7;
    border-radius: 5px;
}
```

### Example Custom JavaScript
If you're implementing AJAX filtering, you might want to add custom JavaScript:
```javascript
// Example: Custom JS for AJAX-based product filtering
jQuery(document).ready(function($){
    $('#product_filter').change(function(){
        var filterValue = $(this).val();
        $.ajax({
            url: '/filter-products',
            type: 'GET',
            data: { filter: filterValue },
            success: function(response) {
                // Update product list based on filter response
            }
        });
    });
});
```

## License

This project is licensed under the terms of the **GPL-2.0** License.

## Contact

For support or inquiries, contact us at **support@artisantouch.com**.

---

## Contributors

- **Karim Baoussous** 
- **Maryam Akdim** 

