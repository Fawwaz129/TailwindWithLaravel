<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <section class="h-screen py-[18rem] w-full bg-gray-700">
        <div class="text-center">
        <h1 class="text-5xl text-center text-white font-bold uppercase">Book House</h1>
        <p class="text-center mt-3 text-base text-white">Welcome to Book House, here you can search for your favorite book and look for books that people like the most.</p>
        <a href="{{url("/tasks")}}" class="inline-flex mt-3 items-center justify-center px-5 py-3 text-base font-medium text-center text-white rounded-lg bg-gray-500 ">
            See Book House
            <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
    </section>
</body>
</html>