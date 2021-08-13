<div>
    <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
        <form action="{{ route('savepost') }}" method="POST">
            <div>
                @if($errors->any())
                <div>
                    @foreach($errors->all() as $error)
                        - {{ $error }} <br>
                    @endforeach
                </div>
                @endif

                <div class="grid grid-cols-12 gap-12">
                    <div class="grid grid-cols-2">
                        <label for="nombre" class="block text-sm font-medium text-gray-700">nombre</label>
                        <input type="text" name="nombre" id="nombre" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="about" class="block text-sm font-medium text-gray-700">
                            About
                        </label>
                        <div class="mt-1">
                            <textarea id="about" name="about" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="you@example.com"></textarea>
                        </div>
                    </div>
                    <div>
                        @csrf
                        <button class="bg-indigo-600 rounded-md" type="submit" >Enviar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
