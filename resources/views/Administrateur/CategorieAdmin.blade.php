<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Catégories</title>
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
        </nav>
    </div>
    <!-- Main content -->
    <div class="flex-1 p-6">
        <header class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold">Catégories</h1>
                <p class="text-gray-600">Gérez vos catégories ici</p>
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
                    <img alt="User profile picture" class="w-10 h-10 rounded-full" height="40" src="https://storage.googleapis.com/a1aa/image/8mEoixjdhn-VGdE0HUGE4mDhdXZ16Pav9fXqkL5bW1k.jpg" width="40"/>
                    <span class="text-gray-600">Matthew Parker</span>
                    <i class="fas fa-chevron-down text-gray-600"></i>
                </div>
            </div>
        </header>
        <main class="mt-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-semibold">Liste des Catégories</h2>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md" onclick="document.getElementById('addCategoryForm').classList.toggle('hidden')">Ajouter une Catégorie</button>
            </div>
            <div id="addCategoryForm" class="bg-white p-6 rounded-lg shadow-md hidden">
                <h3 class="text-xl font-semibold mb-4">Ajouter une Nouvelle Catégorie</h3>
                <form method = "POST" action = "/admin/categories">
                    @CSRF
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700">Nom de la Catégorie</label>
                            <input name = "name" class="w-full mt-1 p-2 border border-gray-300 rounded-md" type="text" placeholder="Nom de la Catégorie"/>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button class="bg-green-500 text-white px-4 py-2 rounded-md">Ajouter</button>
                    </div>
                </form>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md mt-6">
                <table class="min-w-full bg-white">
                    <thead>
                    <tr>
                        <th class="py-3 px-6 border-b border-gray-200 text-left text-sm leading-4 text-gray-600 font-semibold">Nom</th>
                        <th class="py-3 px-6 border-b border-gray-200 text-left text-sm leading-4 text-gray-600 font-semibold">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $categorie)
                    <tr class="hover:bg-gray-100">
                        <td class="py-4 px-6 border-b border-gray-200">{{$categorie->nom}}</td>
                        <td class="py-4 px-6 border-b border-gray-200">
                            <a href="/update/categorie/{{$categorie->id}}">
                            <button class="bg-yellow-500 text-white px-3 py-1 rounded-md">Modifier</button>
                            </a>
                            <a href="/delete/categorie/{{$categorie->id}}">
                            <button class="bg-red-500 text-white px-3 py-1 rounded-md">Supprimer</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    <!-- Ajoutez plus de lignes de catégories ici -->
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
</body>
</html>