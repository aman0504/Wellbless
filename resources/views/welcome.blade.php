<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Green Sprout Organics – Dehydrated Foods & Organic Oils</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
:root{
    --primary:#2F9E44;
    --primary-dark:#237636;
    --bg:#F6FBF6;
    --muted:#64748b;
    --card:#fff;
    --radius:14px;
    --shadow:0 8px 24px rgba(47,158,68,0.08);
    font-family: 'Inter', sans-serif;
}

*{box-sizing:border-box;margin:0;padding:0}
body{background:var(--bg);color:#0f172a;line-height:1.5}

/* NAVBAR */
nav{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:18px 40px;
    background:#fff;
    box-shadow:0 2px 8px rgba(0,0,0,0.05);
}
nav .logo{font-size:22px;font-weight:700;color:var(--primary-dark)}
nav ul{display:flex;gap:26px;list-style:none}
nav ul li a{text-decoration:none;font-weight:500;color:#0f172a}
nav ul li a:hover{color:var(--primary)}

.btn-primary{
    background:linear-gradient(180deg,var(--primary),var(--primary-dark));
    color:#fff;
    padding:10px 18px;
    border-radius:10px;
    border:none;
    cursor:pointer;
    font-weight:600;
    font-size:15px;
    box-shadow:var(--shadow);
}

/* HERO */
.hero{
    padding:80px 40px;
    display:grid;
    grid-template-columns:1fr 1fr;
    align-items:center;
    gap:40px;
}
.hero-text h1{
    font-size:44px;font-weight:700;margin-bottom:14px;
}
.hero-text p{font-size:16px;color:var(--muted);margin-bottom:20px}
.hero img{
    width:100%;border-radius:20px;box-shadow:var(--shadow);
}

/* SECTION TITLES */
.section-title{
    text-align:center;
    font-size:28px;
    margin-top:40px;
    margin-bottom:14px;
    font-weight:700;
}

/* PRODUCT GRID */
.grid{
    padding:20px 40px;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
    gap:28px;
}
.card{
    background:#fff;
    border-radius:var(--radius);
    padding:16px;
    box-shadow:var(--shadow);
    text-align:center;
}
.card img{
    width:100%;height:200px;object-fit:cover;border-radius:12px;
}
.card h3{margin-top:10px;font-size:18px}
.card p{color:var(--muted);font-size:14px;margin:8px 0}
.card button{
    margin-top:10px;
    background:var(--primary);
    color:#fff;
    border:none;
    padding:8px 14px;
    border-radius:8px;
    cursor:pointer;
}

/* FEATURES */
.features{
    padding:40px;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
    gap:20px;
}
.feature-box{
    background:#fff;border-radius:var(--radius);
    padding:20px;text-align:center;box-shadow:var(--shadow);
}
.feature-box h4{margin-top:10px}

/* FOOTER */
footer{
    background:#fff;
    padding:30px;
    text-align:center;
    margin-top:40px;
    font-size:14px;
    color:var(--muted);
}

@media(max-width:820px){
    .hero{grid-template-columns:1fr}
    .hero-text h1{font-size:34px}
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav>
    <div class="logo">Green Sprout Organics</div>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#products">Products</a></li>
        <li><a href="#features">Why Us</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
    <form action="{{route('login')}}">
    <button class="btn-primary" >Login</button>
    </form>
</nav>

<!-- HERO -->
<section class="hero">
    <div class="hero-text">
        <h1>Pure • Organic • Natural Pantry Essentials</h1>
        <p>Discover dehydrated vegetables & fruits, wood-pressed oils, organic spices, and fresh peeled garlic — all sourced ethically and packed with love.</p>
        <button class="btn-primary">Shop Now</button>
    </div>

    <img src="https://images.unsplash.com/photo-1502741338009-cac2772e18bc?auto=format&w=800" alt="Organic food">
</section>

<!-- PRODUCTS -->
<h2 class="section-title" id="products">Our Best Sellers</h2>

<div class="grid">
    <!-- PRODUCT 1 -->
    <div class="card">
        <img src="https://images.unsplash.com/photo-1506807803488-8eafc15323c0?auto=format&w=800" alt="">
        <h3>Dehydrated Vegetables</h3>
        <p>Perfect for cooking, soups, travel & long shelf life.</p>
        <button>Add to Cart</button>
    </div>

    <!-- PRODUCT 2 -->
    <div class="card">
        <img src="https://images.unsplash.com/photo-1490474418585-ba9bad8fd0ea?auto=format&w=800" alt="">
        <h3>Dehydrated Fruits</h3>
        <p>Healthy, crispy, natural, and chemical-free.</p>
        <button>Add to Cart</button>
    </div>

    <!-- PRODUCT 3 -->
    <div class="card">
        <img src="https://images.unsplash.com/photo-1622483767697-b64d10dfd3ce?auto=format&w=800" alt="">
        <h3>Wood-Pressed Oils</h3>
        <p>Cold-pressed for maximum nutrients & purity.</p>
        <button>Add to Cart</button>
    </div>

    <!-- PRODUCT 4 -->
    <div class="card">
        <img src="https://images.unsplash.com/photo-1606857521015-7f4a9602878f?auto=format&w=800" alt="">
        <h3>Organic Spices</h3>
        <p>Aromatic, pure, pesticide-free whole spices.</p>
        <button>Add to Cart</button>
    </div>

    <!-- PRODUCT 5 -->
    <div class="card">
        <img src="https://images.unsplash.com/photo-1587812892381-c40c1fda53e6?auto=format&w=800" alt="">
        <h3>Fresh Peeled Garlic</h3>
        <p>Ready to use — saves time, pure, and preservative-free.</p>
        <button>Add to Cart</button>
    </div>
</div>

<!-- FEATURES -->
<h2 class="section-title" id="features">Why Choose Us?</h2>
<div class="features">
    <div class="feature-box">
        <h4>100% Natural Products</h4>
        <p>No chemicals, no preservatives — only purity.</p>
    </div>
    <div class="feature-box">
        <h4>Ethical Sourcing</h4>
        <p>We support organic farmers directly.</p>
    </div>
    <div class="feature-box">
        <h4>Fast Delivery</h4>
        <p>Pan-India shipping with eco-friendly packaging.</p>
    </div>
    <div class="feature-box">
        <h4>Lab Tested</h4>
        <p>Every batch passes strict quality checks.</p>
    </div>
</div>

<!-- FOOTER -->
<footer id="contact">
    © 2025 Green Sprout Organics — Dehydrated Foods, Oils & Spices.  
    <br> Email: support@greensprout.com | Phone: +91-98765-43210
</footer>

</body>
</html>
