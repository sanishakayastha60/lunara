<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Lunara</title>
  </head>
  <body>
    <header>
      <div class="nav-left">
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">Product</a></li>
          <li><a href="">Categories</a></li>
          <li><a href="">SALE</a></li>
        </ul>
      </div>
      <div class="nav-center">
        <span class="brand">Lunara</span>
      </div>
      <div class="nav-right">
        <ul>
          <li><input type="text" placeholder="Search" /></li>
          <li><a href=""><i class="fa-solid fa-cart-shopping"></i></a></li>
          <li><a href="signin.php"><i class="fa-solid fa-user"></i></a></li>
        </ul>
      </div>
    </header>
    <main>
      <div id="hero">
        <img src="home.jpg" alt="" id="background">
        <h1>Lunara</h1>
        <p>One Stop For Your Everday Need</p>
        <button>Shop Now</button>
      </div>
      <div id="featured">
        <h2>Featured Products</h2>
       <div id="featured_cards">
        <div class="card">
          <img src="clothes.jpg" alt="Clothes">
          <div class="card-overlay">
            <h3>Clothes</h3>
            <button>Shop Now</button>
          </div>
        </div>
        <div class="card">
          <img src="shoe.jpg" alt="Shoes">
          <div class="card-overlay">
            <h3>Shoes</h3>
            <button>Shop Now</button>
          </div>
        </div>
        <div class="card">
          <img src="jewel.jpg" alt="Accesories">
          <div class="card-overlay">
            <h3>Accesories</h3>
            <button>Shop Now</button>
          </div>
        </div>
       </div>
      </div>
      <div id="categories">
        <h2>Categories</h2>
        <div id="category_cards">
          <div>Casual</div>
          <div>Formal</div>
          <div>Prom</div>
          <div>Wedding</div>
          <div>Boho</div>
        </div>       
      </div>
    </main>
    <footer>
      <div>
        <span class="brand">Lunara</span><br />
        <span>Perfect Fit for the perfect person</span>
      </div>
      <div>
        <h2>SHOPPING</h2>
        <ul>
          <li><a href="">Product</a></li>
          <li><a href="">Categories</a></li>
          <li><a href="">Accesories</a></li>
          <li><a href="">SALE</a></li>
        </ul>
      </div>
      <div>
        <h2>CONTACT</h2>
        <ul>
          <li><a href="">Contact Us</a></li>
          <li><a href="">Payment Method</a></li>
          <li><a href="">Delivery</a></li>
          <li><a href="">Return and Exchange</a></li>
        </ul>
      </div>
      <div>
        <h2>NEWSLETTER</h2>
        <p>Be the first to know what's new</p>
        <input type="email" name="" id="" placeholder="Johndoe@gmail.com"/>
      </div>
    </footer>
  </body>
</html>
