<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create a Post
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form class="p-2" action="/action_page.php">
                    <label for="title">Title</label><br><br>

                    <input class="w-full" type="text" id="title" name="title"><br><br>

                    <label for="meta-description">Meta Description</label><br><br>

                    <textarea class="w-full" id="meta-description" name="meta-description" rows="2"></textarea><br><br>

                    <label for="body">Body</label><br><br>

                    <textarea class="w-full" id="body" name="body" rows="10" cols="40"></textarea><br><br>

                    <input type="radio" id="blog" name="content-type" value="blog">

                    <label for="blog">Blog</label><br>

                    <input type="radio" id="guide" name="content-type" value="guide">

                    <label for="guide">Guide</label><br>

                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
