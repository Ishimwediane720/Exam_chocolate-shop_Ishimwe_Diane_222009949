
<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    header("location:login.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chocolate shop</title>
  
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Index</title>
    <link rel="stylesheet" href="me.css">   
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">LtdDaa</h2>
                <img src="sunicon.png" width="80" height="65">
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="sidebar">
            <div class="menu">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="About us.html">ABOUT US</a></li>
                <li><a href="product.html">OUR PRODUCT</a></li>
                <li><a href="contact.html">CONTACT</a></li>
                <li><a href="#">SERVICE</a></li>
            </ul>
        </div>
        </nav>
        <div class="content">
            
            <div id="SOME INFORMATIONS"><br>
                <h1>LtdDaa Web Design & <br><span>Developmet servises</h1>
                <p><b>Welcome  Message</b>
                    Welcome to LtdDaa
                    Indulge in the Finest Chocolates
                    Experience Gourmet Bliss<br>
                   
                    <ul>
                   <il> <b>About Us</b></il>
                   <il> Handcrafted with Love</il>
                   <il> Our Story</il>
                   <ol> Tradition Meets Innovation</il>
                   <il> Artisan Chocolatier</il>
                   <il> Crafting Joy Since [Year]</il>
                </ul><br>
                
                <b>Product Highlights</b>
                    Signature Collections
                    Exclusive Flavors
                    Seasonal Specials
                    Best Sellers
                    Customer Favorites
                    Gourmet Truffles
                    Decadent Bars<br>
                    <b>Quality Assurance</b>
                    Premium Ingredients
                    Ethically Sourced
                    Sustainably Produced
                    Uncompromising Quality
                    Pure Chocolate Perfection<br>
                    <b>Shop Sections</b>
                    Shop All Chocolates
                    Gift Boxes
                    Corporate Gifts
                    Personalized Orders
                    Limited Editions
                    Vegan & Gluten-Free Options<br>
                    <b>User Engagement</b>
                    Join Our Chocolate Club
                    Subscribe for Sweet Deals
                    Read Our Blog
                    Customer Testimonials
                    Follow Us on [Social Media]<br>
                    <b>Special Features</b>
                    Free Shipping on Orders Over [Amount]
                    Hand-Delivered Freshness
                    Gift Wrapping Available
                    Customizable Gift Messages<br>
                    <b>Call to Action</b>
                    Shop Now
                    Discover More
                    Treat Yourself
                    Explore Our Collections</p
                    Order Today<br>
                    <ul>
                       <ol><h1>Footer</h1></ol>
                       <ol> Contact Us</ol>
                       <ol> Store Locator</ol>
                        <ol>FAQs</ol>
                        <ol>Privacy Policy</ol>
                        <ol>Terms of Service</ol>
                    </ul>
                  
                </div>
                <div class="content">
                    <h1>CHOCOLATE consumer</h1>
                    <ul>
                        <li><img src="ch7.webp" width="250px" height="250px"></li><br>
                        <li><img src="ch5.jpeg" width="250px" height="250px"></li><br>
                    </ul>
                    <section id="section1">
                        <h2>Section 1</h2>
                        <p>SWelcome to a visual journey through our chocolate haven!<br> Our first image captures the heart of our artisanal process: a chocolatier meticulously crafting each piece by hand, showcasing the dedication and passion that go into every creation.<br> The second picture invites you into our shop, with elegant displays of beautifully packaged chocolates, highlighting the luxurious experience we offer. Next, feast your eyes on our signature truffles, a close-up shot that reveals the rich, velvety textures and intricate designs, tempting your senses. <br>Finally, our seasonal special collection is displayed in a festive setting, perfect for gifting and celebrating special moments with loved ones.<br> Each picture tells a story of quality, craftsmanship, and the pure joy that comes with indulging in our exquisite chocolates..</p><br><br>
                    </section>
           
                    <div class="content">
                        <h1>Enjoyment of chocolate</h1>
                        <ul>
                            <li><img src="ep.jpg" width="250px" height="250px"></li><br>
                            <li><img src="ep1.jpg" width="250px" height="250px"></li><br>
                        </ul><br><br>
                        <section id="section1">
                            <h2>Section 2</h2>
                            <p>In this captivating image, we see the pure joy and indulgence that our chocolates bring to life. <br>A group of friends are gathered around a beautifully set table, each savoring a piece of our finest chocolate with expressions of delight and satisfaction. <br>The warm, inviting atmosphere is filled with laughter and conversation, underscoring the role our chocolates play in creating memorable moments.<br> One person is shown closing their eyes, lost in the blissful taste, while another holds up a piece, admiring its craftsmanship before taking a bite.<br>This picture perfectly captures the essence of what we strive for at LtdDaa shop not just providing exquisite chocolates, but also fostering connections and happiness through every delicious bite.</p><br><br>
                        </section>
        
           
            
                  
             <script src="https://kit.fontawesome.com/be44d8a83d.js" crossorigin="anonymous"></script>
             <a href="#"><i class="fa-brands fa-facebook"></i></a>
        
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <img src="f.png" width="150" height="150"> 
            <img src="i.jpg" width="150" height="150">
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    document.querySelectorAll('.sidebar a').forEach(anchor => {
                        anchor.addEventListener('click', function(e) {
                            e.preventDefault();
        
                            document.querySelector(this.getAttribute('href')).scrollIntoView({
                                behavior: 'smooth'
                            });
                        });
                    });
                });
            </script>
</body>
</html>

    
</body>
</html>