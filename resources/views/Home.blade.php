<html lang="fr">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   HOOD STYLE - Hoodies Premium et Streetwear
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <style>
   @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');
    
    body {
      font-family: 'Montserrat', sans-serif;
    }
    
    .hover-scale {
      transition: transform 0.3s ease;
    }
    
    .hover-scale:hover {
      transform: scale(1.03);
    }
    
    .product-card:hover {
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
  </style>
 </head>
 <body class="bg-gray-50 font-sans">
  <!-- Header/Navigation -->
  <header class="bg-white shadow-md fixed w-full z-50">
   <div class="max-w-7xl mx-auto">
    <div class="flex justify-between items-center px-4 py-3 sm:px-6 lg:px-8">
     <div class="flex items-center">
      <a class="flex items-center" href="#">
       <svg class="h-8 w-8 text-indigo-600" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
        </path>
       </svg>
       <h1 class="ml-2 text-2xl font-bold text-gray-900">
        HOOD
        <span class="text-indigo-600">
         STYLE
        </span>
       </h1>
      </a>
     </div>
     <div class="hidden md:flex space-x-10">
      <a class="text-gray-900 hover:text-indigo-600 font-medium transition duration-300" href="#">
       Accueil
      </a>
      <a class="text-gray-600 hover:text-indigo-600 font-medium transition duration-300" href="#">
       Collection
      </a>
      <a class="text-gray-600 hover:text-indigo-600 font-medium transition duration-300" href="#">
       Nouveautés
      </a>
      <a class="text-gray-600 hover:text-indigo-600 font-medium transition duration-300" href="#">
       Promotions
      </a>
      <a class="text-gray-600 hover:text-indigo-600 font-medium transition duration-300" href="#">
       À propos
      </a>
     </div>
     <div class="flex items-center space-x-6">
      <div class="hidden md:block">
       <div class="relative">
        <input class="bg-gray-100 rounded-full py-2 pl-4 pr-10 w-44 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:bg-white transition duration-300" placeholder="Rechercher..." type="text"/>
        <button class="absolute right-3 top-2.5 text-gray-500">
         <i class="fas fa-search">
         </i>
        </button>
       </div>
      </div>
      <div class="flex items-center space-x-4">
       <a class="text-gray-600 hover:text-indigo-600 transition duration-300" href="#">
        <i class="fas fa-user text-xl">
        </i>
       </a>
       <a class="text-gray-600 hover:text-indigo-600 transition duration-300" href="#">
        <i class="fas fa-heart text-xl">
        </i>
       </a>
       <a class="text-gray-600 hover:text-indigo-600 transition duration-300 relative" href="#">
        <i class="fas fa-shopping-bag text-xl">
        </i>
        <span class="absolute -top-1 -right-2 bg-indigo-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center" id="cart-count">
         0
        </span>
       </a>
      </div>
      <button class="md:hidden text-gray-600">
       <i class="fas fa-bars text-xl">
       </i>
      </button>
     </div>
    </div>
   </div>
  </header>
  <!-- Hero Section -->
  <section class="relative pt-20 overflow-hidden">
   <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 opacity-10">
   </div>
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
     <div class="animate__animated animate__fadeInLeft">
      <h1 class="text-4xl md:text-5xl xl:text-6xl font-bold text-gray-900 leading-tight">
       Exprimez Votre
       <span class="text-indigo-600">
        Style Unique
       </span>
       Avec Nos Hoodies
      </h1>
      <p class="mt-6 text-xl text-gray-600 max-w-2xl">
       Découvrez notre collection exclusive de hoodies premium conçus pour ceux qui veulent se démarquer par leur style et leur confort.
      </p>
      <div class="mt-10 flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
       <a class="bg-indigo-600 text-white px-8 py-4 rounded-lg font-medium hover:bg-indigo-700 transition duration-300 text-center" href="#">
        Découvrir la collection
       </a>
       <a class="bg-white border-2 border-gray-200 text-gray-700 px-8 py-4 rounded-lg font-medium hover:border-indigo-600 hover:text-indigo-600 transition duration-300 text-center" href="#">
        Voir les nouveautés
       </a>
      </div>
      <div class="mt-10 flex items-center space-x-6">
       <div class="flex -space-x-2">
        <img alt="Photo de profil d'un utilisateur satisfait" class="h-10 w-10 rounded-full border-2 border-white" height="50" src="https://storage.googleapis.com/a1aa/image/vDBlNSLt32QIsVqBRMXVzv_NB-c-oUfjU3rrBBGGOhc.jpg" width="50"/>
        <img alt="Photo de profil d'un utilisateur satisfait" class="h-10 w-10 rounded-full border-2 border-white" height="50" src="https://storage.googleapis.com/a1aa/image/vDBlNSLt32QIsVqBRMXVzv_NB-c-oUfjU3rrBBGGOhc.jpg" width="50"/>
        <img alt="Photo de profil d'un utilisateur satisfait" class="h-10 w-10 rounded-full border-2 border-white" height="50" src="https://storage.googleapis.com/a1aa/image/vDBlNSLt32QIsVqBRMXVzv_NB-c-oUfjU3rrBBGGOhc.jpg" width="50"/>
       </div>
       <div class="text-gray-600">
        <span class="font-bold text-indigo-600">
         500+
        </span>
        clients satisfaits cette semaine
       </div>
      </div>
     </div>
     <div class="animate__animated animate__fadeInRight relative">
      <div class="absolute -right-20 -top-20 bg-indigo-600 rounded-full h-64 w-64 opacity-20">
      </div>
      <div class="absolute -left-10 -bottom-10 bg-indigo-600 rounded-full h-40 w-40 opacity-20">
      </div>
      <img alt="Hoodie Premium de couleur noire" class="rounded-xl shadow-2xl relative z-10 mx-auto" height="700" src="https://storage.googleapis.com/a1aa/image/5xYMcYko0lQK6Zh26tzYJfy58aEVfF5X_LgEdr_w-Gs.jpg" width="600"/>
     </div>
    </div>
   </div>
  </section>
  <!-- Features -->
  <section class="py-16 bg-white">
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
     <div class="flex items-start p-6 border border-gray-100 rounded-xl hover-scale">
      <div class="flex-shrink-0 bg-indigo-100 p-3 rounded-lg">
       <svg class="h-6 w-6 text-indigo-600" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
        </path>
       </svg>
      </div>
      <div class="ml-4">
       <h3 class="text-lg font-semibold text-gray-900">
        Qualité Premium
       </h3>
       <p class="mt-2 text-gray-600">
        Fabriqués avec des matériaux durables et confortables pour une expérience de port exceptionnelle.
       </p>
      </div>
     </div>
     <div class="flex items-start p-6 border border-gray-100 rounded-xl hover-scale">
      <div class="flex-shrink-0 bg-indigo-100 p-3 rounded-lg">
       <svg class="h-6 w-6 text-indigo-600" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
        </path>
       </svg>
      </div>
      <div class="ml-4">
       <h3 class="text-lg font-semibold text-gray-900">
        Livraison Rapide
       </h3>
       <p class="mt-2 text-gray-600">
        Livraison en 2-3 jours ouvrables et possibilité de retour dans les 30 jours.
       </p>
      </div>
     </div>
     <div class="flex items-start p-6 border border-gray-100 rounded-xl hover-scale">
      <div class="flex-shrink-0 bg-indigo-100 p-3 rounded-lg">
       <svg class="h-6 w-6 text-indigo-600" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
        </path>
       </svg>
      </div>
      <div class="ml-4">
       <h3 class="text-lg font-semibold text-gray-900">
        Paiement Sécurisé
       </h3>
       <p class="mt-2 text-gray-600">
        Plusieurs options de paiement sécurisées pour une expérience d'achat sans souci.
       </p>
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- Collections -->
  <section class="py-16 bg-gray-50">
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
     <h2 class="text-3xl font-bold text-gray-900">
      Nos Collections
     </h2>
     <p class="mt-4 text-xl text-gray-600 max-w-3xl mx-auto">
      Des designs uniques pour tous les styles et toutes les occasions
     </p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
     <div class="group relative overflow-hidden rounded-xl shadow-lg">
      <img alt="Collection Streetwear avec des hoodies de style urbain" class="w-full h-96 object-cover transition duration-700 transform group-hover:scale-110" height="800" src="https://storage.googleapis.com/a1aa/image/JRJCuAE1V5jRFU2wlvf14fba2yt1y3bpBOcm6Y4tmrA.jpg" width="600"/>
      <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70">
      </div>
      <div class="absolute bottom-0 left-0 right-0 p-6">
       <h3 class="text-2xl font-bold text-white">
        Streetwear
       </h3>
       <p class="mt-2 text-gray-200">
        Designs urbains pour un style décontracté
       </p>
       <a class="mt-4 inline-block px-6 py-2 bg-white text-gray-900 rounded-lg font-medium transform -translate-y-2 opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transition duration-300" href="#">
        Explorer
       </a>
      </div>
     </div>
     <div class="group relative overflow-hidden rounded-xl shadow-lg">
      <img alt="Collection Premium avec des hoodies de haute qualité" class="w-full h-96 object-cover transition duration-700 transform group-hover:scale-110" height="800" src="https://storage.googleapis.com/a1aa/image/83uwnFRKMI-Ar2FgN2zCDuNLCCkgxKDczK_ihT6DqM8.jpg" width="600"/>
      <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70">
      </div>
      <div class="absolute bottom-0 left-0 right-0 p-6">
       <h3 class="text-2xl font-bold text-white">
        Premium
       </h3>
       <p class="mt-2 text-gray-200">
        Qualité supérieure pour un confort exceptionnel
       </p>
       <a class="mt-4 inline-block px-6 py-2 bg-white text-gray-900 rounded-lg font-medium transform -translate-y-2 opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transition duration-300" href="#">
        Explorer
       </a>
      </div>
     </div>
     <div class="group relative overflow-hidden rounded-xl shadow-lg">
      <img alt="Collection Édition Limitée avec des hoodies exclusifs" class="w-full h-96 object-cover transition duration-700 transform group-hover:scale-110" height="800" src="https://storage.googleapis.com/a1aa/image/-gr38UgEjGBPtmwYkXWDoUgriwsflKZ5ixkOLoJdW4Q.jpg" width="600"/>
      <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70">
      </div>
      <div class="absolute bottom-0 left-0 right-0 p-6">
       <h3 class="text-2xl font-bold text-white">
        Édition Limitée
       </h3>
       <p class="mt-2 text-gray-200">
        Designs exclusifs en quantité limitée
       </p>
       <a class="mt-4 inline-block px-6 py-2 bg-white text-gray-900 rounded-lg font-medium transform -translate-y-2 opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transition duration-300" href="#">
        Explorer
       </a>
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- Trending Products -->
  <section class="py-16 bg-white">
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center mb-12">
     <h2 class="text-3xl font-bold text-gray-900">
      Produits Tendance
     </h2>
     <a class="flex items-center text-indigo-600 font-medium hover:text-indigo-800 transition duration-300" href="#">
      Voir tous les produits
      <svg class="ml-2 h-5 w-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
       <path clip-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" fill-rule="evenodd">
       </path>
      </svg>
     </a>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-12">
     <!-- Product 1 -->
      @foreach($products as $product)
     <div class="product-card bg-white rounded-xl overflow-hidden shadow transition duration-300">
      <div class="relative">
       <img alt="Urban Noir Premium Hoodie" class="w-full h-80 object-cover" height="600" src="{{$product->Image}}" width="500"/>
       <div class="absolute top-4 right-4 bg-indigo-600 text-white text-xs uppercase font-bold px-3 py-1 rounded-full">
        Nouveau
       </div>
       <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
        <button class="bg-white p-3 rounded-full text-gray-800 mx-2 hover:bg-gray-100 focus:outline-none transition duration-300 transform hover:scale-110">
         <i class="fas fa-eye">
         </i>
        </button>
        <button class="bg-white p-3 rounded-full text-gray-800 mx-2 hover:bg-gray-100 focus:outline-none transition duration-300 transform hover:scale-110">
         <i class="fas fa-heart">
         </i>
        </button>
       </div>
      </div>
      <div class="p-5">
       <div class="flex text-yellow-400 mb-2">
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star-half-alt">
        </i>
        <span class="text-gray-500 ml-2 text-sm">
         (42)
        </span>
       </div>
       <h3 class="font-semibold text-gray-900 text-lg">
       {{$product->Titre}}
       </h3>
       <p class="text-gray-500 mt-1">
       {{$product->Categorie->nom}}
       </p>
       <div class="mt-3 flex justify-between items-center">
        <span class="font-bold text-gray-900 text-xl">
        {{$product->Prix}}$
        </span>
        <button class="bg-gray-900 text-white p-2 rounded-lg hover:bg-indigo-600 transition duration-300 add-to-cart">
         <i class="fas fa-shopping-cart">
         </i>
        </button>
       </div>
      </div>
     </div>
     @endforeach
    </div>
   </div>
  </section>
 </body>
</html>
