<div class="carousel relative container mx-auto mt-10" style="max-width: 1600px">
    <div class="carousel-inner relative overflow-hidden w-full">
        <!--Slide 1-->
        <input class="hidden carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
            checked="checked" />
        <div class="carousel-item absolute opacity-0" style="height: 60vh">
            <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right"
                style="background-image: url('https://images.pexels.com/photos/69371/pexels-photo-69371.jpeg?auto=compress&cs=tinysrgb&w=1200');
           width:100%;">
                <div class="container mx-auto">
                    <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                        <p class="text-white text-2xl my-4 font-bold">
                            More than Just a Home finder
                        </p>
                        @auth
                            <a class="text-xl inline-block bg-indigo-500 text-white p-4 rounded-lg transition-all duration-300 hover:bg-indigo-600
                            "
                                href="{{ route('adopt') }}">Find
                                yourself a best
                                Friend Today!</a>
                        @else
                            <a class="text-xl inline-block bg-indigo-500 text-white p-4 rounded-lg transition-all duration-300 hover:bg-indigo-600"
                                href="{{ secure_url(route('register')) }}">Get Started</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        <label for="carousel-3"
            class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-2"
            class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <!--Slide 2-->
        <input class="hidden carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true"
            hidden="" />
        <div class="carousel-item absolute opacity-0 bg-cover bg-right" style="height: 60vh">
            <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right"
                style="
            background-image: url('https://images.pexels.com/photos/850602/pexels-photo-850602.jpeg?auto=compress&cs=tinysrgb&w=1200');
            width:100%;
          ">
                <div class="container mx-auto">
                    <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                        <p class="text-white text-2xl my-4 font-bold">Cute as they Come!</p>
                        <a class="text-xl inline-block bg-indigo-500 text-white p-4 rounded-lg transition-all duration-300 hover:bg-indigo-600"
                            href="{{ route('about') }}">About Us >></a>
                    </div>
                </div>
            </div>
        </div>
        <label for="carousel-1"
            class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-3"
            class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <!--Slide 3-->
        <input class=" hidden carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true"
            hidden="" />
        <div class="carousel-item absolute opacity-0" style="height: 60vh">
            <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-bottom"
                style="
            background-image: url('https://rb.gy/sb4uuf');
            width:100%;
          ">
                <div class="container mx-auto">
                    <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                        <p class="text-black text-2xl my-4 font-bold">
                            What's up buddy! Want me?
                        </p>
                        <a class="text-xl inline-block bg-indigo-500 text-white p-4 rounded-lg transition-all duration-300 hover:bg-indigo-600"
                            href="{{ route('contact-us') }}">Contact Me >></a>
                    </div>
                </div>
            </div>
        </div>
        <label for="carousel-2"
            class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-1"
            class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <!-- Add additional indicators for each slide-->
        <ol class="carousel-indicators">
            <li class="inline-block mr-3">
                <label for="carousel-1"
                    class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-2"
                    class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-3"
                    class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
            </li>
        </ol>
    </div>
</div>
