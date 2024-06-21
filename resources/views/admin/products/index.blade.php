<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('My Products') }}
        </h2>
    </x-slot>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .modal-enter {
            opacity: 0;
            transform: scale(0.9);
        }
        .modal-enter-active {
            opacity: 1;
            transform: scale(1);
            transition: opacity 0.3s ease-out, transform 0.3s ease-out;
        }
        .modal-leave {
            opacity: 1;
            transform: scale(1);
        }
        .modal-leave-active {
            opacity: 0;
            transform: scale(0.9);
            transition: opacity 0.3s ease-out, transform 0.3s ease-out;
        }
    </style>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-col p-10 overflow-hidden bg-white shadow-sm sm:rounded-lg gap-y-5">

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li class="py-5 font-bold text-white bg-red-500">
                                    {{$error}}
                                </li>
                            @endforeach    
                        </ul>
                    </div>
                @endif

                <div class="flex flex-row items-center justify-between mb-5">
                    <h3 class="text-2xl font-bold text-indigo-950">My Products</h3>
                    <a href="{{route('admin.products.create')}}" class="px-5 py-3 text-white rounded-full w-fit bg-indigo-950">
                        Add New Product
                    </a>
                </div>
                @forelse($products as $product)
                    <div class="flex flex-row items-center justify-between item-product">
                        <div class="flex flex-row items-center gap-x-5">
                             <!-- Thumbnail Image -->
                            <div class="p-2">
                                <img src="{{ Storage::url($product->cover) }}" class="rounded-2xl w-[100px] h-[100px] object-cover cursor-pointer hover:border-4 hover:border-blue-500" alt="Product Image" onclick="openModal('{{ Storage::url($product->cover) }}')">
                            </div>
                            <!-- Modal for Full Image -->
                            <div id="imageModal" class="fixed inset-0 z-50 flex items-center justify-center hidden transition-opacity duration-300 bg-black bg-opacity-75">
                                <span class="absolute text-2xl text-white cursor-pointer top-4 right-4" onclick="closeModal()">&times;</span>
                                <img id="modalImage" src="" class="max-w-full max-h-full transition-transform duration-300 transform rounded-2xl" alt="Full Image">
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-indigo-950">{{$product->name}}</h3>
                                <p class="text-sm text-slate-500">{{$product->category->name}}</p>
                            </div>
                        </div>
                        <div>
                            <p class="text-xl font-bold text-indigo-950">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        </div>
                        <div class="flex flex-row gap-x-3">
                            <a href="{{route('admin.products.edit', $product)}}" class="px-5 py-3 font-bold text-white bg-indigo-500 rounded-full">
                                Edit
                            </a>

                            <form action="{{route('admin.products.destroy', $product)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-5 py-3 text-white bg-red-500 rounded-full">
                                    Delete
                                </button>
                            </form>
                            
                        </div>
                    </div>
                @empty
                    <p>Belum ada produk tersedia</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>

<!-- JavaScript -->
<script>
    function openModal(imageSrc) {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');

        modalImage.src = imageSrc;
        modal.classList.remove('hidden');
        modal.classList.add('modal-enter');

        setTimeout(() => {
            modal.classList.add('modal-enter-active');
        }, 10);
    }

    function closeModal() {
        const modal = document.getElementById('imageModal');

        modal.classList.remove('modal-enter-active');
        modal.classList.add('modal-leave-active');

        modal.addEventListener('transitionend', () => {
            modal.classList.add('hidden');
            modal.classList.remove('modal-leave-active');
            modal.classList.add('modal-enter');
        }, { once: true });
    }
</script>

