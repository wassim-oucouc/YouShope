<html lang="fr">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>HOOD STYLE - Paiement</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>
  <script src="https://cdn.tailwindcss.com"></script>
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
    
    .input-focus {
      transition: all 0.3s ease;
    }
    
    .input-focus:focus {
      border-color: #4f46e5;
      box-shadow: 0 0 0 2px rgba(79, 70, 229, 0.2);
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
              <path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
            </svg>
            <h1 class="ml-2 text-2xl font-bold text-gray-900">
              HOOD
              <span class="text-indigo-600">STYLE</span>
            </h1>
          </a>
        </div>
        <div class="hidden md:flex space-x-10">
          <a class="text-gray-600 hover:text-indigo-600 font-medium transition duration-300" href="#">Accueil</a>
          <a class="text-gray-600 hover:text-indigo-600 font-medium transition duration-300" href="#">Collection</a>
          <a class="text-gray-600 hover:text-indigo-600 font-medium transition duration-300" href="#">Nouveautés</a>
          <a class="text-gray-600 hover:text-indigo-600 font-medium transition duration-300" href="#">Promotions</a>
          <a class="text-gray-600 hover:text-indigo-600 font-medium transition duration-300" href="#">À propos</a>
        </div>
        <div class="flex items-center space-x-6">
          <div class="flex items-center space-x-4">
            <a class="text-gray-600 hover:text-indigo-600 transition duration-300" href="#">
              <i class="fas fa-user text-xl"></i>
            </a>
            <a class="text-gray-600 hover:text-indigo-600 transition duration-300" href="#">
              <i class="fas fa-heart text-xl"></i>
            </a>
            <a class="text-gray-600 hover:text-indigo-600 transition duration-300 relative" href="#">
              <i class="fas fa-shopping-bag text-xl"></i>
              <span class="absolute -top-1 -right-2 bg-indigo-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center" id="cart-count">3</span>
            </a>
          </div>
          <button class="md:hidden text-gray-600">
            <i class="fas fa-bars text-xl"></i>
          </button>
        </div>
      </div>
    </div>
  </header>

  <!-- Checkout Section -->
  <section class="pt-24 pb-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="mb-12 text-center">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900">Finaliser votre commande</h1>
        <p class="mt-3 text-gray-600">Complétez les informations ci-dessous pour terminer votre achat</p>
      </div>
      
      <!-- Checkout Process Steps -->
      <div class="mb-12">
        <div class="flex justify-center">
          <div class="relative">
            <div class="flex items-center">
              <div class="z-10 flex items-center justify-center w-10 h-10 bg-indigo-600 rounded-full">
                <i class="fas fa-shopping-cart text-white"></i>
              </div>
              <div class="text-sm font-medium text-indigo-600 ml-2">Panier</div>
            </div>
            <div class="absolute top-5 left-10 w-full h-0.5 bg-indigo-600"></div>
          </div>
          
          <div class="relative px-16">
            <div class="flex items-center">
              <div class="z-10 flex items-center justify-center w-10 h-10 bg-indigo-600 rounded-full">
                <i class="fas fa-credit-card text-white"></i>
              </div>
              <div class="text-sm font-medium text-indigo-600 ml-2">Paiement</div>
            </div>
            <div class="absolute top-5 left-0 w-full h-0.5 bg-gray-300"></div>
          </div>
          
          <div class="relative">
            <div class="flex items-center">
              <div class="z-10 flex items-center justify-center w-10 h-10 bg-gray-300 rounded-full">
                <i class="fas fa-check text-white"></i>
              </div>
              <div class="text-sm font-medium text-gray-500 ml-2">Confirmation</div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Checkout Form -->
        <div class="lg:col-span-2">
          <div class="bg-white rounded-xl shadow-lg p-6 md:p-8">
            <h2 class="text-xl font-semibold text-gray-900 mb-6">Informations personnelles</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1" for="firstName">Prénom</label>
                <input class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus" id="firstName" placeholder="Votre prénom" type="text"/>
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1" for="lastName">Nom</label>
                <input class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus" id="lastName" placeholder="Votre nom" type="text"/>
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1" for="email">Email</label>
                <input class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus" id="email" placeholder="votre@email.com" type="email"/>
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1" for="phone">Téléphone</label>
                <input class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus" id="phone" placeholder="Votre numéro de téléphone" type="tel"/>
              </div>
            </div>
            
            <h2 class="text-xl font-semibold text-gray-900 mb-6">Adresse de livraison</h2>
            
            <div class="grid grid-cols-1 gap-6 mb-8">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1" for="address">Adresse</label>
                <input class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus" id="address" placeholder="Rue, numéro, etc." type="text"/>
              </div>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1" for="postalCode">Code postal</label>
                  <input class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus" id="postalCode" placeholder="Code postal" type="text"/>
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1" for="city">Ville</label>
                  <input class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus" id="city" placeholder="Votre ville" type="text"/>
                </div>
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1" for="country">Pays</label>
                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus" id="country">
                  <option value="">Sélectionnez votre pays</option>
                  <option value="FR">France</option>
                  <option value="BE">Belgique</option>
                  <option value="CH">Suisse</option>
                  <option value="CA">Canada</option>
                  <option value="LU">Luxembourg</option>
                </select>
              </div>
            </div>
            
            <h2 class="text-xl font-semibold text-gray-900 mb-6">Méthode de paiement</h2>
            
            <div class="mb-6">
              <div class="flex flex-col space-y-4">
                <label class="relative flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover-scale">
                  <input checked class="form-radio h-5 w-5 text-indigo-600" name="paymentMethod" type="radio" value="card"/>
                  <span class="ml-3 font-medium text-gray-900">Carte bancaire</span>
                  <span class="ml-auto flex space-x-2">
                    <img alt="Visa" class="h-8" src="/api/placeholder/48/30" />
                    <img alt="Mastercard" class="h-8" src="/api/placeholder/48/30" />
                    <img alt="American Express" class="h-8" src="/api/placeholder/48/30" />
                  </span>
                </label>
                
                <label class="relative flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover-scale">
                  <input class="form-radio h-5 w-5 text-indigo-600" name="paymentMethod" type="radio" value="paypal"/>
                  <span class="ml-3 font-medium text-gray-900">PayPal</span>
                  <span class="ml-auto">
                    <img alt="PayPal" class="h-8" src="/api/placeholder/80/30" />
                  </span>
                </label>
                
                <label class="relative flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover-scale">
                  <input class="form-radio h-5 w-5 text-indigo-600" name="paymentMethod" type="radio" value="applepay"/>
                  <span class="ml-3 font-medium text-gray-900">Apple Pay</span>
                  <span class="ml-auto">
                    <img alt="Apple Pay" class="h-8" src="/api/placeholder/80/30" />
                  </span>
                </label>
              </div>
            </div>
            
            <div class="credit-card-form mt-6">
              <div class="grid grid-cols-1 gap-6">
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1" for="cardNumber">Numéro de carte</label>
                  <div class="relative">
                    <input class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus" id="cardNumber" placeholder="1234 5678 9012 3456" type="text"/>
                    <div class="absolute right-3 top-3">
                      <i class="fas fa-credit-card text-gray-400"></i>
                    </div>
                  </div>
                </div>
                <div class="grid grid-cols-2 gap-6">
                  <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1" for="expiry">Date d'expiration</label>
                    <input class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus" id="expiry" placeholder="MM/AA" type="text"/>
                  </div>
                  <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1" for="cvv">CVV</label>
                    <input class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus" id="cvv" placeholder="123" type="text"/>
                  </div>
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1" for="nameOnCard">Nom sur la carte</label>
                  <input class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus" id="nameOnCard" placeholder="Nom complet sur la carte" type="text"/>
                </div>
              </div>
            </div>
          </div>
        </div>
          
        <!-- Order Summary -->
        <div class="lg:col-span-1">
          <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 sticky top-24">
            <h2 class="text-xl font-semibold text-gray-900 mb-6">Récapitulatif de la commande</h2>
            
            <div class="space-y-4 mb-6">
              <div class="flex items-start">
                <div class="h-20 w-16 flex-shrink-0 overflow-hidden rounded-md">
                  <img alt="Urban Noir Premium Hoodie" class="h-full w-full object-cover" src="/api/placeholder/64/80" />
                </div>
                <div class="ml-4 flex-1">
                  <h3 class="text-sm font-medium text-gray-900">Hoodie Urban Noir</h3>
                  <p class="mt-1 text-sm text-gray-500">Taille: L | Quantité: 1</p>
                  <p class="mt-1 text-sm font-semibold text-gray-900">69,99 €</p>
                </div>
              </div>
              
              <div class="flex items-start">
                <div class="h-20 w-16 flex-shrink-0 overflow-hidden rounded-md">
                  <img alt="Streetwear Gray Hoodie" class="h-full w-full object-cover" src="/api/placeholder/64/80" />
                </div>
                <div class="ml-4 flex-1">
                  <h3 class="text-sm font-medium text-gray-900">Hoodie Streetwear Gris</h3>
                  <p class="mt-1 text-sm text-gray-500">Taille: M | Quantité: 1</p>
                  <p class="mt-1 text-sm font-semibold text-gray-900">59,99 €</p>
                </div>
              </div>
              
              <div class="flex items-start">
                <div class="h-20 w-16 flex-shrink-0 overflow-hidden rounded-md">
                  <img alt="Limited Edition Blue Hoodie" class="h-full w-full object-cover" src="/api/placeholder/64/80" />
                </div>
                <div class="ml-4 flex-1">
                  <h3 class="text-sm font-medium text-gray-900">Hoodie Édition Limitée Bleu</h3>
                  <p class="mt-1 text-sm text-gray-500">Taille: XL | Quantité: 1</p>
                  <p class="mt-1 text-sm font-semibold text-gray-900">89,99 €</p>
                </div>
              </div>
            </div>
            
            <div class="border-t border-gray-200 pt-4 mb-6">
              <div class="flex justify-between text-sm mb-2">
                <span class="text-gray-600">Sous-total</span>
                <span class="font-medium">219,97 €</span>
              </div>
              <div class="flex justify-between text-sm mb-2">
                <span class="text-gray-600">Frais de livraison</span>
                <span class="font-medium">4,99 €</span>
              </div>
              <div class="flex justify-between text-sm mb-2">
                <span class="text-gray-600">Taxes</span>
                <span class="font-medium">19,99 €</span>
              </div>
            </div>
            
            <div class="border-t border-gray-200 pt-4 mb-6">
              <div class="flex justify-between">
                <span class="text-lg font-semibold text-gray-900">Total</span>
                <span class="text-lg font-bold text-indigo-600">244,95 €</span>
              </div>
            </div>
            
            <div class="mb-6">
              <div class="flex items-center border border-gray-300 rounded-lg p-4">
                <i class="fas fa-tag text-indigo-600 mr-3"></i>
                <input class="flex-1 outline-none bg-transparent" placeholder="Code promo" type="text"/>
                <button class="text-indigo-600 font-medium">Appliquer</button>
              </div>
            </div>
            
            <button class="w-full bg-indigo-600 text-white font-medium py-4 rounded-lg hover:bg-indigo-700 transition duration-300 flex items-center justify-center">
              <i class="fas fa-lock mr-2"></i>
              Confirmer et payer
            </button>
            
            <div class="mt-6 text-center">
              <p class="text-sm text-gray-500">
                En procédant au paiement, vous acceptez nos
                <a class="text-indigo-600 hover:text-indigo-800" href="#">Conditions Générales de Vente</a> et notre
                <a class="text-indigo-600 hover:text-indigo-800" href="#">Politique de Confidentialité</a>.
              </p>
            </div>
            
            <div class="mt-6 flex justify-center space-x-4">
              <div class="text-xs text-gray-500 flex items-center">
                <i class="fas fa-shield-alt text-indigo-600 mr-1"></i>
                Paiement sécurisé
              </div>
              <div class="text-xs text-gray-500 flex items-center">
                <i class="fas fa-truck text-indigo-600 mr-1"></i>
                Livraison rapide
              </div>
              <div class="text-xs text-gray-500 flex items-center">
                <i class="fas fa-exchange-alt text-indigo-600 mr-1"></i>
                Retours gratuits
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Footer -->
  <footer class="bg-gray-900 text-white pt-12 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div>
          <div class="flex items-center mb-4">
            <svg class="h-8 w-8 text-indigo-500" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
            </svg>
            <h2 class="ml-2 text-2xl font-bold">
              HOOD<span class="text-indigo-500">STYLE</span>
            </h2>
          </div>
          <p class="text-gray-400 mb-4">
            La meilleure sélection de hoodies premium pour exprimer votre style unique.
          </p>
          <div class="flex space-x-4">
            <a class="text-gray-400 hover:text-indigo-500 transition duration-300" href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a class="text-gray-400 hover:text-indigo-500 transition duration-300" href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a class="text-gray-400 hover:text-indigo-500 transition duration-300" href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a class="text-gray-400 hover:text-indigo-500 transition duration-300" href="#">
              <i class="fab fa-tiktok"></i>
            </a>
          </div>
        </div>
        
        <div>
          <h3 class="text-lg font-semibold mb-4">Liens rapides</h3>
          <ul class="space-y-2">
            <li><a class="text-gray-400 hover:text-indigo-500 transition duration-300" href="#">Accueil</a></li>
            <li><a class="text-gray-400 hover:text-indigo-500 transition duration-300" href="#">Collections</a></li>
            <li><a class="text-gray-400 hover:text-indigo-500 transition duration-300" href="#">Nouveautés</a></li>
            <li><a class="text-gray-400 hover:text-indigo-500 transition duration-300" href="#">Promotions</a></li>
            <li><a class="text-gray-400 hover:text-indigo-500 transition duration-300" href="#">À propos</a></li>
          </ul>
        </div>
        
        <div>
          <h3 class="text-lg font-semibold mb-4">Aide & Support</h3>
          <ul class="space-y-2">
            <li><a class="text-gray-400 hover:text-indigo-500 transition duration-300" href="#">FAQ</a></li>
            <li><a class="text-gray-400 hover:text-indigo-500 transition duration-300" href="#">Expédition</a></li>
            <li><a class="text-gray-400 hover:text-indigo-500 transition duration-300" href="#">Retours & échanges</a></li>
            <li><a class="text-gray-400 hover:text-indigo-500 transition duration-300" href="#">Tailles & guide</a></li>
            <li><a class="text-gray-400 hover:text-indigo-500 transition duration-300" href="#">Contactez-nous</a></li>
          </ul>
        </div>
        
        <div>
          <h3 class="text-lg font-semibold mb-4">Newsletter</h3>
          <p class="text-gray-400 mb-4">
            Inscrivez-vous pour recevoir nos offres exclusives et les dernières nouveautés.
          </p>
          <form class="mb-2">
            <div class="flex">
              <input class="px-4 py-2 rounded-l-lg w-full bg-gray-800 text-white border border-gray-700 focus:outline-none focus:border-indigo-500" placeholder="Votre email" type="email"/>
              <button class="bg-indigo-600 text-white px-4 py-2 rounded-r-lg hover:bg-indigo-700 transition duration-300" type="submit">
                <i class="fas fa-paper-plane"></i>
              </button>
            </div>
          </form>
          <p class="text-xs text-gray-500">
            En vous inscrivant, vous acceptez notre politique de confidentialité.
          </p>
        </div>
      </div>
      
      <div class="border-t border-gray-800 mt-10 pt-6">
        <div class="flex flex-col md:flex-row justify-between items-center">
          <p class="text-gray-400 text-sm">
            &copy; 2025 HOOD STYLE. Tous droits réservés.
          </p>
          <div class="flex space-x-4 mt-4 md:mt-0">
            <a class="text-gray-400 hover:text-indigo-500 text-sm transition duration-300" href="#">Mentions légales</a>
            <a class="text-gray-400 hover:text-indigo-500 text-sm transition duration-300" href="#">Conditions générales</a>
            <a class="text-gray-400 hover:text-indigo-500 text-sm transition duration-300" href="#">Politique de confidentialité</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const paymentMethods = document.querySelectorAll('input[name="paymentMethod"]');
      const creditCardForm = document.querySelector('.credit-card-form');
      
      paymentMethods.forEach(method => {
        method.addEventListener('change', function() {
          if (this.value === 'card') {
            creditCardForm.style.display = 'block';
          } else {
            creditCardForm.style.display = 'none';
          }
        });
      });
    });
  </script>
</body>
</html>