<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI-1 E-commerce website</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <a href="https://fontawesome.com"></a>
    <link rel="stylesheet" href="landingpage/style.css">
</head>
<body>
    <section id="header">
        <a href="#"><img src="landingpage/image/logo/logo.png" class="custom-image rounded-image fixed-image" alt="" ></a>
       
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.html">Home </a></li>
                <li><a href="landingpage/shop.html">Shop </a></li>
                <li><a href="landingpage/collection.html">Collection </a></li>
                <li><a href="landingpage/about.html">About </a></li>
              
               
                <li><a href="landingpage/cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </section>
    <div class="bigdiv">
    <section id="hero">
        <div class="line"></div>
       
     <br>
     <br>
     <br>
     <li><a href="lanpopular.html"><i class="fa-solid fa-fire"></i>Popular product </a></li>
     <li><a href="explore.html">Explore New</a></li>
     <li><a href="clothing.html">Clothing and Shoes </a></li>
     <li><a href="electronic.html">Electronic Devives </a></li>
     <li><a href="home.html">Home and Decor </a></li>
     <li><on type="button" class="login_btn" onclick="navigateToPage()">Login</on></li>
    
        
   
    </section>
   <script>
    function navigateToPage() {
    window.location.href = "login.html";
}
</script>
    <script src="landingpage/script.js"></script>

<!-- <div class="category-container">
    <div class="category-box" onclick="navigateToCategory('category-link1.html')">
        <img src="image/category/e1.jpg" alt="Category Image 1">
        <h3></h3>
    </div> -->
    <div class="category-box" onclick="navigateToCategory('category-link2.html')">
        <img src="landingpage/image/category/e1.jpg" alt="Category Image 1" width="550" height="100">
        <h3></h3>
    </div>

    <div class="category-box" onclick="navigateToCategory('category-link2.html')">
        <img src="landingpage/image/category/apple.jpg" alt="Category Image 2">
        <h3></h3>
    </div>

    <div class="category-box" onclick="navigateToCategory('category-link3.html')">
        <img src="landingpage/image/category/home.jpg" alt="Category Image 3">
        <h3></h3>
    </div>

    <div class="category-box" onclick="navigateToCategory('category-link4.html')">
        <img src="landingpage/image/category/sofa.webp" alt="Category Image 4">
        <h3></h3>
    </div>

    <div class="category-box" onclick="navigateToCategory('category-link5.html')">
        <img src="landingpage/image/category/c2.webp" alt="Category Image 5">
        <h3></h3>
    </div>

   
</div>
</div>
</body>
</html>