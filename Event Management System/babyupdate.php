<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Baby Shower Gallery</title>
  <style>
    /* Basic Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #ffffff; /* White background */
      color: #333333; /* Dark text for readability */
    }

    /* Page Heading */
    .heading {
      text-align: center;
      margin: 40px 0;
      font-size: 2.5rem;
      font-weight: bold;
      color: violet; /* Heading color */
      text-transform: uppercase;
      letter-spacing: 4px;
    }

    /* Gallery Grid */
    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 15px;
      padding: 20px;
    }

    /* Image Cards */
    .gallery-item {
      position: relative;
      overflow: hidden;
      border-radius: 8px;
      transition: transform 0.3s;
      cursor: pointer;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow for depth */
      background: #f9f9f9; /* Light background for details */
    }

    .gallery-item:hover {
      transform: scale(1.05);
    }

    .gallery-item img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      display: block;
    }

    .gallery-item-details {
      padding: 10px;
      text-align: center;
    }

    .gallery-item-details .price {
      font-size: 1.2rem;
      color: #28a745; /* Green color for price */
      font-weight: bold;
    }

    .gallery-item-details .rating {
      margin: 5px 0;
      font-size: 1rem;
      color: #ffc107; /* Yellow for star rating */
    }

    .gallery-item-details .checkout-btn {
      display: inline-block;
      margin-top: 10px;
      padding: 8px 15px;
      background-color: #007bff; /* Blue button */
      color: #ffffff;
      text-decoration: none;
      font-size: 1rem;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .gallery-item-details .checkout-btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <h1 class="heading">Baby Shower</h1>
  <div class="gallery">
    <div class="gallery-item">
      <a href="baby1.jpg" target="_blank">
        <img src="baby1.jpg" alt="Baby Decoration 1">
      </a>
      <div class="gallery-item-details">
        <p class="price">&#8377 2000</p>
        <p class="rating">★★★★☆</p>
        <a href="checkout1.html" target="_blank" class="checkout-btn">Check Out</a>
      </div>
    </div>

    <div class="gallery-item">
      <a href="baby2.jpg" target="_blank">
        <img src="baby2.jpg" alt="Baby Decoration 2">
      </a>
      <div class="gallery-item-details">
        <p class="price">&#8377 2500</p>
        <p class="rating">★★★★★</p>
        <a href="checkout2.html" target="_blank" class="checkout-btn">Check Out</a>
      </div>
    </div>

    <div class="gallery-item">
      <a href="baby3.jpg" target="_blank">
        <img src="baby3.jpg" alt="Baby Decoration 3">
      </a>
      <div class="gallery-item-details">
        <p class="price">&#8377 3800</p>
        <p class="rating">★★★★☆</p>
        <a href="checkout3.html" target="_blank" class="checkout-btn">Check Out</a>
      </div>
    </div>

    <div class="gallery-item">
      <a href="baby4.jpg" target="_blank">
        <img src="baby4.jpg" alt="Baby Decoration 4">
      </a>
      <div class="gallery-item-details">
        <p class="price">&#8377 3000</p>
        <p class="rating">★★★★★</p>
        <a href="checkout4.html" target="_blank" class="checkout-btn">Check Out</a>
      </div>
    </div>

    <div class="gallery-item">
      <a href="baby5.jpg" target="_blank">
        <img src="baby5.jpg" alt="Baby Decoration 5">
      </a>
      <div class="gallery-item-details">
        <p class="price">&#8377 4220</p>
        <p class="rating">★★★★☆</p>
        <a href="checkout5.html" target="_blank" class="checkout-btn">Check Out</a>
      </div>
    </div>

    <div class="gallery-item">
      <a href="baby6.jpg" target="_blank">
        <img src="baby6.jpg" alt="Baby Decoration 6">
      </a>
      <div class="gallery-item-details">
        <p class="price">&#8377 2240</p>
        <p class="rating">★★★★☆</p>
        <a href="checkout6.html" target="_blank" class="checkout-btn">Check Out</a>
      </div>
    </div>

    <div class="gallery-item">
      <a href="baby7.jpg" target="_blank">
        <img src="baby7.jpg" alt="Baby Decoration 7">
      </a>
      <div class="gallery-item-details">
        <p class="price">&#8377 2260</p>
        <p class="rating">★★★★★</p>
        <a href="checkout7.html" target="_blank" class="checkout-btn">Check Out</a>
      </div>
    </div>

    <div class="gallery-item">
      <a href="baby8.jpg" target="_blank">
        <img src="baby8.jpg" alt="Baby Decoration 8">
      </a>
      <div class="gallery-item-details">
        <p class="price">&#8377 2200</p>
        <p class="rating">★★★★☆</p>
        <a href="checkout8.html" target="_blank" class="checkout-btn">Check Out</a>
      </div>
    </div>

    <div class="gallery-item">
      <a href="baby9.jpg" target="_blank">
        <img src="baby9.jpg" alt="Baby Decoration 9">
      </a>
      <div class="gallery-item-details">
        <p class="price">&#8377 2270</p>
        <p class="rating">★★★★★</p>
        <a href="checkout9.html" target="_blank" class="checkout-btn">Check Out</a>
      </div>
    </div>

    <div class="gallery-item">
      <a href="baby10.jpg" target="_blank">
        <img src="baby10.jpg" alt="Baby Decoration 10">
      </a>
      <div class="gallery-item-details">
        <p class="price">&#8377 2230</p>
        <p class="rating">★★★★☆</p>
        <a href="checkout10.html" target="_blank" class="checkout-btn">Check Out</a>
      </div>
    </div>
  </div>
</body>
</html>

