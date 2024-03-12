<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <nav class="bg-blue-500 text-white p-4">
        <div class="container mx-auto flex justify-center">
            <a href="{{ route('blogs.public') }}" class="mr-6 hover:underline">Home</a>
            <a href="{{ route('blogs.about') }}" class="mr-6 hover:underline">About</a>
            <a href="{{ route('blogs.contact') }}" class="hover:underline">Contact</a>
        </div>
    </nav>
<div class="bg-gray-100 py-12">

    <div class="container mx-auto px-4">
        <h1 class="text-3xl lg:text-4xl font-semibold text-center text-gray-800 mb-6">Contact Us</h1>
        <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
            <form>
                <div class="mb-4">
                    <label for="name" class="block text-gray-800 font-semibold mb-2">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="John Doe" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-800 font-semibold mb-2">Your Email</label>
                    <input type="email" id="email" name="email" placeholder="john@example.com" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-800 font-semibold mb-2">Message</label>
                    <textarea id="message" name="message" rows="4" placeholder="Your message..." class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
