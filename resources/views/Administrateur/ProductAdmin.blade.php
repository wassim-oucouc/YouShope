<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Produit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans antialiased">
<div class="flex h-screen">
    <!-- Sidebar -->
    <div class="bg-gray-900 text-white w-64 space-y-6 py-7 px-2">
        <div class="flex items-center space-x-2 px-4">
            <i class="fas fa-at text-2xl"></i>
            <span class="text-2xl font-extrabold">Your Company</span>
        </div>
        <nav class="space-y-2">
            <a class="flex items-center space-x-2 px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md" href="#">
                <i class="fas fa-th-large"></i>
                <span>Overview</span>
            </a>
            <div class="space-y-1">
                <a class="flex items-center space-x-2 px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md" href="#">
                    <i class="fas fa-stream"></i>
                    <span>Summary</span>
                </a>
                <a class="flex items-center space-x-2 px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md" href="#">
                    <i class="fas fa-filter"></i>
                    <span>Custom view</span>
                </a>
            </div>
            <a class="flex items-center space-x-2 px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md" href="#">
                <i class="fas fa-envelope"></i>
                <span>Messages</span>
                <span class="ml-auto bg-red-500 text-white text-xs font-semibold px-2 py-1 rounded-full">2</span>
            </a>
            <a class="flex items-center space-x-2 px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md" href="#">
                <i class="fas fa-box"></i>
                <span>Products</span>
            </a>
            <a class="flex items-center space-x-2 px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md" href="#">
                <i class="fas fa-shopping-cart"></i>
                <span>Orders</span>
            </a>
            <a class="flex items-center space-x-2 px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md" href="#">
                <i class="fas fa-users"></i>
                <span>Customers</span>
            </a>
            <a class="flex items-center space-x-2 px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md" href="#">
                <i class="fas fa-cog"></i>
                <span>Settings</span>
            </a>
            <a class="flex items-center space-x-2 px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md" href="/logout">
                <i class="fas fa-cog"></i>
                <span>Logout</span>
            </a>
        </nav>
    </div>
    <!-- Main content -->
    <div class="flex-1 p-6 overflow-y-auto">
        <header class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold">Produits</h1>
                <p class="text-gray-600">Gérez vos produits ici</p>
            </div>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <input class="bg-gray-200 rounded-full px-4 py-2 pl-10 focus:outline-none" placeholder="Search" type="text"/>
                    <i class="fas fa-search absolute left-3 top-2.5 text-gray-500"></i>
                </div>
                <i class="fas fa-bell text-gray-600 relative">
                    <span class="absolute top-0 right-0 bg-red-500 text-white text-xs font-semibold px-1.5 py-0.5 rounded-full">4</span>
                </i>
                <div class="flex items-center space-x-2">
                    <img alt="User  profile picture" class="w-10 h-10 rounded-full" height="40" src="https://storage.googleapis.com/a1aa/image/8mEoixjdhn-VGdE0HUGE4mDhdXZ16Pav9fXqkL5bW1k.jpg" width="40"/>
                    <span class="text-gray-600">Matthew Parker</span>
                    <i class="fas fa-chevron-down text-gray-600"></i>
                </div>
            </div>
        </header>
        <main class="mt-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-semibold">Liste des Produits</h2>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md" onclick="document.getElementById('addProductForm').classList.toggle('hidden')">Ajouter un Produit</button>
            </div>
            <div id="addProductForm" class="bg-white p-6 rounded-lg shadow-md hidden">
                <h3 class="text-xl font-semibold mb-4">Ajouter un Nouveau Produit</h3>
                <form action="/admin/products" method="POST">
                    @CSRF
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700">Nom du Produit</label>
                            <input class="w-full mt-1 p-2 border border-gray-300 rounded-md" type="text" placeholder="Nom du Produit" name="Titre"/>
                        </div>
                        <div>
                            <label class="block text-gray-700">Catégorie</label>
                            <select class="w-full mt-1 p-2 border border-gray-300 rounded-md" name="Categorie" id="Categorie">
                                @foreach($categories as $categorie)
                                <option value="{{$categorie->nom}}">{{$categorie->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700">Prix</label>
                            <input class="w-full mt-1 p-2 border border-gray-300 rounded-md" type="number" placeholder="Prix" name="Prix"/>
                        </div>
                        <div>
                            <label class="block text-gray-700">Stock</label>
                            <input class="w-full mt-1 p-2 border border-gray-300 rounded-md" type="number" placeholder="Stock" name="Quantity"/>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-gray-700">Description</label>
                            <textarea class="w-full mt-1 p-2 border border-gray-300 rounded-md" placeholder="Description" name="Description"></textarea>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-gray-700">Image du Produit</label>
                            <input class="w-full mt-1 p-2 border border-gray-300 rounded-md" type="text" name="Image"/>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" name="send" class="bg-green-500 text-white px-4 py-2 rounded-md">Ajouter</button>
                    </div>
                </form>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md mt-6">
                <table class="min-w-full bg-white">
                    <thead>
                    <tr>
                        <th class="py-3 px-6 border-b border-gray-200 text-left text-sm leading-4 text-gray-600 font-semibold">Image</th>
                        <th class="py-3 px-6 border-b border-gray-200 text-left text-sm leading-4 text-gray-600 font-semibold">Nom</th>
                        <th class="py-3 px-6 border-b border-gray-200 text-left text-sm leading-4 text-gray-600 font-semibold">Catégorie</th>
                        <th class="py-3 px-6 border-b border-gray-200 text-left text-sm leading-4 text-gray-600 font-semibold">Prix</th>
                        <th class="py-3 px-6 border-b border-gray-200 text-left text-sm leading-4 text-gray-600 font-semibold">Stock</th>
                        <th class="py-3 px-6 border-b border-gray-200 text-left text-sm leading-4 text-gray-600 font-semibold">Description</th>
                        <th class="py-3 px-6 border-b border-gray-200 text-left text-sm leading-4 text-gray-600 font-semibold">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                    <tr class="hover:bg-gray-100">
                        <td class="py-4 px-6 border-b border-gray-200">
                            <img alt="Image du produit 1" class="w-16 h-16 object-cover rounded-md" height="100" src="{{$product->Image}}" width="100"/>
                        </td>
                        <td class="py-4 px-6 border-b border-gray-200">{{$product->Titre}}</td>
                        <td class="py-4 px-6 border-b border-gray-200">{{$product->Categorie->nom}}</td>
                        <td class="py-4 px-6 border-b border-gray-200">{{$product->Prix}}$</td>
                        <td class="py-4 px-6 border-b border-gray-200">{{$product->Quantity}}</td>
                        <td class="py-4 px-6 border-b border-gray-200">{{$product->Description}}</td>
                        <td class="py-4 px-6 border-b border-gray-200">
                        <a href="/update/product/{{$product->id}}">
                            <button class="bg-yellow-500 text-white px-3 py-1 rounded-md">Modifier
                            </button>
                            </a>
                            <a href="/delete/product/{{$product->id}}">
                            <button class="bg-red-500 text-white px-3 py-1 rounded-md">Supprimer
                            </button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
</body>
</html>