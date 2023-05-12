<footer class="bg-gray-100 p-8 flex flex-col items-center">
    <div class="container mx-auto px-4">
        <div class="space-y-2 text-center text-sm">
            <div>
                <ul class="flex justify-center space-x-4">
                    <li><a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-800">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-600 hover:text-gray-800">About</a></li>
                </ul>
            </div>
            <div>
                <span class="text-gray-600">&copy; Womb Mates <script>document.write(/\d{4}/.exec(Date())[0])</script></span>
            </div>
        </div>
    </div>
</footer>
