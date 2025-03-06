<html lang="fr">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   HOOD STYLE -  Panier
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
  <script src="https://cdn.tailwindcss.com">
  </script>
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
  </style>
 </head>
 <body class="bg-gray-100 font-sans">
  <!-- Header/Navigation -->
  <header class="bg-gray-800 shadow-md fixed w-full z-50">
   <div class="max-w-7xl mx-auto">
    <div class="flex justify-between items-center px-4 py-3 sm:px-6 lg:px-8">
     <div class="flex items-center">
      <a class="flex items-center" href="#">
       <svg class="h-8 w-8 text-yellow-500" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
        </path>
       </svg>
       <h1 class="ml-2 text-2xl font-bold text-white">
        HOOD
        <span class="text-yellow-500">
         STYLE
        </span>
       </h1>
      </a>
     </div>
     <div class="flex items-center space-x-6">
      <a class="text-white hover:text-yellow-500 font-medium transition duration-300" href="#">
       Home
      </a>
      <a class="text-gray-400 hover:text-yellow-500 transition duration-300" href="#">
       <i class="fas fa-user text-xl">
       </i>
      </a>
     </div>
    </div>
   </div>
  </header>
  <!-- Cart Validation Section -->
  <section class="pt-24 pb-16 bg-white">
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
     <h2 class="text-3xl font-bold text-gray-900">
       Panier
     </h2>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
     <div class="lg:col-span-2 overflow-x-auto">
      <table class="min-w-full bg-white">
       <thead>
        <tr>
         <th class="py-2 px-4 border-b-2 border-gray-300 bg-gray-200 text-left text-sm font-semibold text-gray-700">
          Produit
         </th>
         <th class="py-2 px-4 border-b-2 border-gray-300 bg-gray-200 text-left text-sm font-semibold text-gray-700">
          Taille
         </th>
         <th class="py-2 px-4 border-b-2 border-gray-300 bg-gray-200 text-left text-sm font-semibold text-gray-700">
          Quantité
         </th>
         <th class="py-2 px-4 border-b-2 border-gray-300 bg-gray-200 text-left text-sm font-semibold text-gray-700">
          Prix
         </th>
         <th class="py-2 px-4 border-b-2 border-gray-300 bg-gray-200 text-left text-sm font-semibold text-gray-700">
          Action
         </th>
        </tr>
       </thead>
       <tbody id="cart-items">
        @foreach($Product as $Products)
        <form action="/">
        <tr>
         <td class="py-2 px-4 border-b border-gray-300">
          <div class="flex items-center">
           <img alt="Image of a black hoodie with a minimalist design" class="h-10 w-10 rounded-full mr-4" height="100" src="{{$Products['Image']}}" width="100"/>
           <div>
            <p class="text-gray-900">
            {{$Products['title']}}
            </p>
            <p class="text-gray-600 text-sm">
            {{$Products['categorie']}}
            </p>
           </div>
          </div>
         </td>
         <td class="py-2 px-4 border-b border-gray-300">
          <select class="bg-gray-100 rounded-full py-1 px-2">
           <option selected="{{$Products['Size']}}" value="{{$Products['Size']}}">{{$Products['Size']}}</option>
           <option value="S">S</option>
           <option value="M">M</option>
           <option value="L">l</option>
           <option value="XL">XL</option>
           <option value="XS">XS</option>
          </select>
         </td>
         <td class="py-2 px-4 border-b border-gray-300">
          <input class="bg-gray-100 rounded-full py-1 px-2 w-16 text-center" min="1" type="number" value="{{$Products['Quantity']}}"/>
         </td>
         <td class="py-2 px-4 border-b border-gray-300">
         {{$Products['Prix']}}$
         </td>
         <td class="py-2 px-4 border-b border-gray-300">
          <a href="/delete/cart/{{$Products['id']}}/{{$Products['Quantity']}}/{{$Products['Size']}}">
          <button class="text-red-600 hover:text-red-800 transition duration-300">
           <i class="fas fa-trash">
           </i>
          </button>
          </a>
         </td>
        </tr>
        </form>
        @endforeach
       </tbody>
      </table>
     </div>
     <div class="mt-6 lg:mt-0">
      <div class="bg-gray-50 p-6 rounded-lg shadow-lg">
       <h3 class="text-xl font-bold text-gray-900 mb-4">
        Résumé de la commande
       </h3>
       <div class="flex justify-between font-bold text-lg mb-4">
        <span>
         Total
        </span>
        <span id="cart-total">
         165,00 €
        </span>
       </div>
       <button class="bg-yellow-500 text-white w-full py-3 rounded-lg font-medium hover:bg-yellow-600 transition duration-300">
        Passer la commande
       </button>
      </div>
     </div>
    </div>
   </div>
  </section>
 </body>
</html>