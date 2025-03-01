<html lang="fr"> 
<head>   
  <meta charset="UTF-8">   
  <meta name="viewport" content="width=device-width, initial-scale=1.0">   
  <title>HOOD STYLE - Détails du Produit</title>   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">   
  <script src="https://cdn.tailwindcss.com"></script>   
  <style>     
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');          
    
    body {       
      font-family: 'Montserrat', sans-serif;     
    }          
    
    .hover-scale {       
      transition: transform 0.1s ease;     
    }          
    
    .hover-scale:hover {       
      transform: scale(1.03);     
    }          
    
    .product-card:hover {       
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);     
    }      
    
    /* Animation du panier */     
    .cart-panel {       
      transform: translateX(100%); 
      transition: transform 1s ease-in-out;     
    }          
    
    .cart-panel.open {       
      transform: translateX(0);     
    }      
    
    .cart-overlay {       
      opacity: 0;       
      visibility: hidden;       
      transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;     
    }          
    
    .cart-overlay.open {       
      opacity: 1;       
      visibility: visible;     
    }   
  </style> 
</head> 

<body class="bg-gray-50 font-sans">   
  <!-- Header/Navigation -->   
  <header class="bg-white shadow-md fixed w-full z-50">     
    <div class="max-w-7xl mx-auto">       
      <div class="flex justify-between items-center px-4 py-3 sm:px-6 lg:px-8">         
        <div class="flex items-center">           
          <a href="#" class="flex items-center">             
            <svg class="h-8 w-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">               
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />             
            </svg>             
            <h1 class="ml-2 text-2xl font-bold text-gray-900">HOOD<span class="text-indigo-600">STYLE</span></h1>           
          </a>         
        </div>         
        <div class="hidden md:flex space-x-10">           
          <a href="#" class="text-gray-900 hover:text-indigo-600 font-medium transition duration-300">Accueil</a>           
          <a href="#" class="text-gray-600 hover:text-indigo-600 font-medium transition duration-300">Collection</a>           
          <a href="#" class="text-gray-600 hover:text-indigo-600 font-medium transition duration-300">Nouveautés</a>           
          <a href="#" class="text-gray-600 hover:text-indigo-600 font-medium transition duration-300">Promotions</a>           
          <a href="#" class="text-gray-600 hover:text-indigo-600 font-medium transition duration-300">À propos</a>         
        </div>         
        <div class="flex items-center space-x-6">           
          <div class="hidden md:block">             
            <div class="relative">               
              <input type="text" placeholder="Rechercher..." class="bg-gray-100 rounded-full py-2 pl-4 pr-10 w-44 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:bg-white transition duration-300">               
              <button class="absolute right-3 top-2.5 text-gray-500">                 
                <i class="fas fa-search"></i>               
              </button>             
            </div>           
          </div>           
          <div class="flex items-center space-x-4">             
            <a href="#" class="text-gray-600 hover:text-indigo-600 transition duration-300">               
              <i class="fas fa-user text-xl"></i>             
            </a>             
            <a href="#" class="text-gray-600 hover:text-indigo-600 transition duration-300">               
              <i class="fas fa-heart text-xl"></i>             
            </a>             
            <a href="#" class="text-gray-600 hover:text-indigo-600 transition duration-300 relative" id="cart-icon">               
              <i class="fas fa-shopping-bag text-xl"></i>               
              <span class="absolute -top-1 -right-2 bg-indigo-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center" id="cart-count">0</span>             
            </a>           
          </div>           
          <button class="md:hidden text-gray-600">             
            <i class="fas fa-bars text-xl"></i>           
          </button>         
        </div>       
      </div>     
    </div>   
  </header>    
  
  <!-- Overlay du panier -->   
  <div class="cart-overlay fixed inset-0 bg-black bg-opacity-50 z-50 hidden"></div>    
  
  <!-- Panneau du panier -->   
  <div class="cart-panel fixed top-0 right-0 h-full w-full sm:w-96 bg-white z-50 shadow-xl overflow-hidden flex flex-col">     
    <div class="p-6 bg-indigo-600 text-white flex justify-between items-center">       
      <h2 class="text-xl font-bold">Votre Panier</h2>       
      <button id="close-cart" class="focus:outline-none">         
        <i class="fas fa-times text-xl"></i>       
      </button>     
    </div>          
    
    <div class="flex-1 overflow-y-auto p-4" id="cart-items">       
      <!-- Les éléments du panier seront ajoutés ici dynamiquement -->
      <div class="flex py-5 border-b border-gray-200">
        <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md">
          <img src="https://storage.googleapis.com/a1aa/image/0O_NScPD-SdowzU7iZ2OZe5eS79pFA2hNGl7cHYIo4o.jpg" alt="Urban Noir Premium Hoodie" class="h-full w-full object-cover object-center">
        </div>
        <div class="ml-4 flex flex-1 flex-col">
          <div>
            <div class="flex justify-between text-base font-medium text-gray-900">
              <h3 >{{$Produit->Titre}}</h3>
              <p class="ml-4">89,99 €</p>
            </div>
            <p class="mt-1 text-sm text-gray-500">Taille: M</p>
          </div>
          <div class="flex flex-1 items-end justify-between text-sm">
            <div class="flex items-center space-x-2">
              <p class="text-gray-500">Qté 1</p>
            </div>
            <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">
              <i class="fas fa-trash"></i>
            </button>
          </div>
        </div>
      </div>
    </div>          
    
    <div class="border-t border-gray-200 p-4 bg-gray-50">       
      <div class="flex justify-between font-bold text-lg mb-4">         
        <span>Total</span>         
        <span id="cart-total">89,99 €</span>       
      </div>       
      <button class="bg-indigo-600 text-white w-full py-3 rounded-lg font-medium hover:bg-indigo-700 transition duration-300">         
        Passer la commande       
      </button>     
    </div>   
  </div>    
  
  <!-- Product Details Section -->   
  <section class="pt-24 pb-16 bg-white">     
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">       
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12">         
        <div>           
          <img src="{{$Produit->Image}}" alt="Urban Noir Premium Hoodie" id = "image"class="image w-full h-auto rounded-lg shadow-lg">         
        </div>         
        <div>           
          <h2 id = "title" class="title text-3xl font-bold text-gray-900">{{$Produit->Titre}}</h2>           
          <div class="flex items-center mt-4">                          
            <span class="text-gray-500 ml-2">Categorie : {{$Produit->Categorie->nom}}</span>           
          </div>           
          <p id = "description" class="description mt-6 text-gray-600">{{$Produit->Description}}</p>                      
          
          <!-- Tailles disponibles -->           
          <div class="mt-6">             
            <h3 class="text-sm text-gray-900 font-medium">Taille</h3>             
            <div class="grid grid-cols-5 gap-2 mt-2">               
              <button class="size-option border border-gray-300 rounded-md py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:border-indigo-500" data-size="XS">XS</button>               
              <button class="size-option border border-gray-300 rounded-md py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:border-indigo-500" data-size="S">S</button>               
              <button class="size-option border border-gray-300 rounded-md py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:border-indigo-500" data-size="M">M</button>               
              <button class="size-option border border-gray-300 rounded-md py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:border-indigo-500" data-size="L">L</button>               
              <button class="size-option border border-gray-300 rounded-md py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:border-indigo-500" data-size="XL">XL</button>             
            </div>           
          </div>                      
          
          <!-- Quantité -->           
          <div class="mt-6">             
            <h3 class="text-sm text-gray-900 font-medium">Quantité</h3>             
            <div class="flex items-center mt-2">               
              <button id="decrease-qty" class="bg-gray-200 px-3 py-1 rounded-l-md">-</button>               
              <input type="text" id="item-qty" value="1" class="Quantity w-12 text-center border-t border-b border-gray-300 py-1" readonly>               
              <button id="increase-qty" class="bg-gray-200 px-3 py-1 rounded-r-md">+</button>             
            </div>           
          </div>                      
          
          <div class="mt-6">             
            <span class="prix text-3xl font-bold text-gray-900">{{$Produit->Prix}}$</span>           
          </div>                      
          
          <div class="mt-6">             
            <button id="add-to-cart-main" class="bg-indigo-600 text-white px-8 py-4 rounded-lg font-medium hover:bg-indigo-700 transition duration-300">               
              <i class="fas fa-shopping-cart"></i> Ajouter au panier             
            </button>           
          </div>         
        </div>       
      </div>     
    </div>   
  </section>    
  
  <!-- Related Products Section -->   
  <section class="py-16 bg-gray-50">     
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">       
      <div class="text-center mb-16">         
        <h2 class="text-3xl font-bold text-gray-900">Produits Similaires</h2>       
      </div>       
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-12">         
        <!-- Product 1 -->         
        <div class="product-card bg-white rounded-xl overflow-hidden shadow transition duration-300">           
          <div class="relative">             
            <img src="https://storage.googleapis.com/a1aa/image/zbn6DyvJJkEi0q8AWCUdRR8CQ1ci1mr-sH4IREL6neg.jpg" alt="Urban Noir Premium Hoodie" class="w-full h-80 object-cover">             
            <div class="absolute top-4 right-4 bg-indigo-600 text-white text-xs uppercase font-bold px-3 py-1 rounded-full">Nouveau</div>             
            <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">               
              <button class="bg-white p-3 rounded-full text-gray-800 mx-2 hover:bg-gray-100 focus:outline-none transition duration-300 transform hover:scale-110">                 
                <i class="fas fa-eye"></i>               
              </button>               
              <button class="bg-white p-3 rounded-full text-gray-800 mx-2 hover:bg-gray-100 focus:outline-none transition duration-300 transform hover:scale-110">                 
                <i class="fas fa-heart"></i>               
              </button>             
            </div>           
          </div>           
          <div class="p-5">             
            <div class="flex text-yellow-400 mb-2">               
              <i class="fas fa-star"></i>               
              <i class="fas fa-star"></i>               
              <i class="fas fa-star"></i>               
              <i class="fas fa-star"></i>               
              <i class="fas fa-star-half-alt"></i>               
              <span class="text-gray-500 ml-2 text-sm">(42)</span>             
            </div>             
            <h3 class="title font-semibold text-gray-900 text-lg">Urban Noir Premium Hoodie</h3>             
            <p class="text-gray-500 mt-1">Streetwear Collection</p>             
            <div class="mt-3 flex justify-between items-center">               
              <span class="font-bold text-gray-900 text-xl">89,99 €</span>               
              <button class="bg-gray-900 text-white p-2 rounded-lg hover:bg-indigo-600 transition duration-300 add-to-cart-other">                 
                <i class="fas fa-shopping-cart"></i>               
              </button>             
            </div>           
          </div>         
        </div>         
        
        <!-- Product 2 -->         
        <div class="product-card bg-white rounded-xl overflow-hidden shadow transition duration-300">           
          <div class="relative">             
            <img src="https://storage.googleapis.com/a1aa/image/5xYMcYko0lQK6Zh26tzYJfy58aEVfF5X_LgEdr_w-Gs.jpg" alt="Oversize Grey Hoodie" class="w-full h-80 object-cover">             
            <div class="absolute top-4 right-4 bg-red-600 text-white text-xs uppercase font-bold px-3 py-1 rounded-full">-15%</div>             
            <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">               
              <button class="bg-white p-3 rounded-full text-gray-800 mx-2 hover:bg-gray-100 focus:outline-none transition duration-300 transform hover:scale-110">                 
                <i class="fas fa-eye"></i>               
              </button>               
              <button class="bg-white p-3 rounded-full text-gray-800 mx-2 hover:bg-gray-100 focus:outline-none transition duration-300 transform hover:scale-110">                 
                <i class="fas fa-heart"></i>               
              </button>             
            </div>           
          </div>           
          <div class="p-5">             
            <div class="flex text-yellow-400 mb-2">               
              <i class="fas fa-star"></i>               
              <i class="fas fa-star"></i>               
              <i class="fas fa-star"></i>               
              <i class="fas fa-star"></i>               
              <i class="fas fa-star"></i>               
              <span class="text-gray-500 ml-2 text-sm">(67)</span>             
            </div>             
            <h3 class="font-semibold text-gray-900 text-lg">Oversize Gris Confort Hoodie</h3>             
            <p class="text-gray-500 mt-1">Casual Collection</p>             
            <div class="mt-3 flex justify-between items-center">               
              <div>                 
                <span class="font-bold text-gray-900 text-xl">67,99 €</span>                 
                <span class="text-gray-500 line-through ml-2">79,99 €</span>               
              </div>               
              <button class="bg-gray-900 text-white p-2 rounded-lg hover:bg-indigo-600 transition duration-300 add-to-cart-other">                 
                <i class="fas fa-shopping-cart"></i>               
              </button>             
            </div>           
          </div>         
        </div>         
        
        <!-- Product 3 -->         
        <div class="product-card bg-white rounded-xl overflow-hidden shadow transition duration-300">           
          <div class="relative">             
            <img src="https://storage.googleapis.com/a1aa/image/4sYg7228eFtcca-IeLXu8-YvA8k8LRtbDvu-dxrP2cw.jpg" alt="Navy Blue Premium Hoodie" class="w-full h-80 object-cover">             
            <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">               
              <button class="bg-white p-3 rounded-full text-gray-800 mx-2 hover:bg-gray-100 focus:outline-none transition duration-300 transform hover:scale-110">                 
                <i class="fas fa-eye"></i>               
              </button>               
              <button class="bg-white p-3 rounded-full text-gray-800 mx-2 hover:bg-gray-100 focus:outline-none transition duration-300 transform hover:scale-110">                 
                <i class="fas fa-heart"></i>               
              </button>             
            </div>           
          </div>           
          <div class="p-5">             
            <div class="flex text-yellow-400 mb-2">               
              <i class="fas fa-star"></i>               
              <i class="fas fa-star"></i>               
              <i class="fas fa-star"></i>               
              <i class="fas fa-star"></i>               
              <i class="far fa-star"></i>               
              <span class="text-gray-500 ml-2 text-sm">(28)</span>             
            </div>             
            <h3 class="font-semibold text-gray-900 text-lg">Bleu Marine Premium Hoodie</h3>             
            <p class="text-gray-500 mt-1">Premium Collection</p>             
            <div class="mt-3 flex justify-between items-center">               
              <span class="font-bold text-gray-900 text-xl">94,99 €</span>               
              <button class="bg-gray-900 text-white p-2 rounded-lg hover:bg-indigo-600 transition duration-300 add-to-cart-other">                 
                <i class="fas fa-shopping-cart"></i>               
              </button>             
            </div>           
          </div>         
        </div>         
        
        <!-- Product 4 -->         
        <div class="product-card bg-white rounded-xl overflow-hidden shadow transition duration-300">           
          <div class="relative">             
            <img src="https://storage.googleapis.com/a1aa/image/UQ3AJ6qXrlEyXpiH2OmCWDGKATWGIu6Kq1bsnUFlIaM.jpg" alt="Red Street Hoodie" class="w-full h-80 object-cover">             
            <div class="absolute top-4 right-4 bg-green-600 text-white text-xs uppercase font-bold px-3 py-1 rounded-full">Populaire</div>             
            <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">               
              <button class="bg-white p-3 rounded-full text-gray-800 mx-2 hover:bg-gray-100 focus:outline-none transition duration-300 transform hover:scale-110">                 
                <i class="fas fa-eye"></i>               
              </button>               
              <button class="bg-white p-3 rounded-full text-gray-800 mx-2 hover:bg-gray-100 focus:outline-none transition duration-300 transform hover:scale-110">                 
                <i class="fas fa-heart"></i>               
              </button>             
            </div>           
          </div>           
          <div class="p-5">             
            <div class="flex text-yellow-400 mb-2">               
              <i class="fas fa-star"></i>               
              <i class="fas fa-star"></i>               
              <i class="fas fa-star"></i>               
              <i class="fas fa-star"></i>               
              <i class="fas fa-star-half-alt"></i>               
              <span class="text-gray-500 ml-2 text-sm">(53)</span>             
            </div>             
            <h3 class="font-semibold text-gray-900 text-lg">Rouge Streetwear Hoodie</h3>             
            <p class="text-gray-500 mt-1">Urban Collection</p>             
            <div class="mt-3 flex justify-between items-center">               
              <span class="font-bold text-gray-900 text-xl">74,99 €</span>               
              <button class="bg-gray-900 text-white p-2 rounded-lg hover:bg-indigo-600 transition duration-300 add-to-cart-other">                 
                <i class="fas fa-shopping-cart"></i>               
              </button>             
            </div>           
          </div>         
        </div>       
      </div>     
    </div>   
  </section>    
  
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const cartPanel = document.querySelector('.cart-panel');
      const cartOverlay = document.querySelector('.cart-overlay');
      const cartIcon = document.getElementById('cart-icon');
      const closeCartBtn = document.getElementById('close-cart');
      const cartCount = document.getElementById('cart-count');
      const addToCartMainBtn = document.getElementById('add-to-cart-main');
      const addToCartOtherBtns = document.querySelectorAll('.add-to-cart-other');
      const decreaseQtyBtn = document.getElementById('decrease-qty');
      const increaseQtyBtn = document.getElementById('increase-qty');
      const itemQty = document.getElementById('item-qty');
      const sizeOptions = document.querySelectorAll('.size-option');

      const title = document.querySelector('#title');
      const image = document.querySelector('#image');
      console.log(title);
      // const description = document.queryselector('#description');

      let count = 0;
      
      let cartItemsCount = 0;
      let selectedSize = null;
      
      function toggleCart() {
        cartPanel.classList.toggle('open');
        cartOverlay.classList.toggle('open');
      }
      
   
   
      
      cartIcon.addEventListener('click', toggleCart);
      closeCartBtn.addEventListener('click', toggleCart);
      cartOverlay.addEventListener('click', toggleCart);
      
      addToCartMainBtn.addEventListener('click', function() {
        count++;
        cartCount.textContent =  count ;

        let productobject = {
          'Title' : title.textContent,
          'image' : image.src,

          
        };

        console.log(productobject);


    
      });
      
      
      decreaseQtyBtn.addEventListener('click', function() {
        let qty = parseInt(itemQty.value);
        if (qty > 1) {
          itemQty.value = qty - 1;
        }
      });
      
      increaseQtyBtn.addEventListener('click', function() {
        let qty = parseInt(itemQty.value);
        itemQty.value = qty + 1;
      });
      
      sizeOptions.forEach(button => {
        button.addEventListener('click', function() {
          sizeOptions.forEach(btn => {
            btn.classList.remove('bg-indigo-500', 'text-white');
            btn.classList.add('text-gray-700');
          });
          
          this.classList.add('bg-indigo-500', 'text-white');
          this.classList.remove('text-gray-700');
          
          selectedSize = this.dataset.size;
        });
      });
    });
  </script>
</body>
</html>