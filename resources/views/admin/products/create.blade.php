<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('My Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="p-10 overflow-hidden bg-white shadow-sm sm:rounded-lg">

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error )
                                <li class="py-5 font-bold text-white bg-red-500">
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                    @csrf

                    <h2 class="text-3xl font-bold text-indigo-950">Add New Product</h2>
            
                    <div class="mt-4">
                        <x-input-label for="cover" :value="__('cover')" />
                        <x-text-input id="cover" class="block w-full mt-1" type="file" name="cover" required />
                        <x-input-error :messages="$errors->get('cover')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="path_file" :value="__('path_file')" />
                        <x-text-input id="path_file" class="block w-full mt-1" type="file" name="path_file" required />
                        <x-input-error :messages="$errors->get('path_file')" class="mt-2" />
                    </div>
            
                    <!-- Name -->
                    <div class="mt-4">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                     <!-- Price -->
                     <div class="mt-4">
                        <x-input-label for="price" :value="__('price')" />
                        <x-text-input id="price" class="block w-full mt-1" type="number" name="price" :value="old('price')" required autofocus autocomplete="price" />
                        <x-input-error :messages="$errors->get('price')" class="mt-2" />
                    </div>

                     <!-- Category -->
                     <div class="mt-4">
                        <x-input-label for="category" :value="__('category')" />
                        <select name="category_id" id="category" class="w-full py-3 pl-5 border">
                            <option value="">Select Category</option>
                            @forelse($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @empty
                                
                            @endforelse
                            
                        </select>
                        <x-input-error :messages="$errors->get('category')" class="mt-2" />
                    </div>

                     <!-- About -->
                     <div class="mt-4">
                        <x-input-label for="about" :value="__('about')" />
                        <textarea name="about" id="about" class="w-full py-3 pl-5 border">
                        </textarea>
                        <x-input-error :messages="$errors->get('about')" class="mt-2" />
                    </div>
                    
            
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ms-4">
                            {{ __('Add Product') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
