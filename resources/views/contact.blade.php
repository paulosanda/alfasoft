<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes do Contato</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Styles -->
    <style>
        .contact-detail {
            transition: all 0.2s ease;
        }
        .contact-detail:hover {
            background-color: #f9fafb;
        }
    </style>
</head>
<body class="antialiased bg-gray-50">
<div class="min-h-screen">
    <!-- Main Content -->
    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Page Header -->
                    <div class="flex justify-between items-center mb-6">
                        <h1 class="text-2xl font-bold text-gray-800">CONTACT DETAILS</h1>
                        <a href="{{ route('contact.index') }}" class="inline-flex items-center justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <i class="fas fa-arrow-left mr-2"></i> Voltar à Lista
                        </a>
                    </div>

                    <!-- Contact Details -->
                    <div class="space-y-4">
                        <div class="contact-detail p-4 rounded-md">
                            <p class="text-sm font-medium text-gray-500">Name:</p>
                            <p class="text-base text-gray-900">{{ $contact->name }}</p>
                        </div>
                        <div class="contact-detail p-4 rounded-md">
                            <p class="text-sm font-medium text-gray-500">Contact:</p>
                            <p class="text-base text-gray-900">{{ $contact->contact }}</p>
                        </div>
                        <div class="contact-detail p-4 rounded-md">
                            <p class="text-sm font-medium text-gray-500">Email:</p>
                            <p class="text-base text-gray-900">{{ $contact->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
