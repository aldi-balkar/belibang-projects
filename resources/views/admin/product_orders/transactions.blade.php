<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Transactions') }}
        </h2>
    </x-slot>

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
                    <h3 class="text-2xl font-bold text-indigo-950">My Transactions</h3>
                </div>
                @forelse($my_transactions as $transaction)
                    <div class="flex flex-row items-center justify-between item-product">
                        <div class="flex flex-row items-center gap-x-5">
                            <img src="{{Storage::url($transaction->product->cover)}}" class="rounded-2xl h-[100px] w-auto" alt="">
                            <div>
                                <h3 class="text-xl font-bold text-indigo-950">{{$transaction->product->name}}</h3>
                                <p class="text-sm text-slate-500">{{$transaction->product->category->name}}</p>
                            </div>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500">Total Price:</p>
                            <p class="text-xl font-bold text-indigo-950">Rp {{$transaction->product->price}}</p>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500">Status:</p>
                            @if($transaction->is_paid)
                                <span class="px-3 py-1 text-sm font-bold text-white bg-green-500 rounded-full">
                                    SUCCESS
                                </span>
                            @else
                                <span class="px-3 py-1 text-sm font-bold text-white bg-orange-500 rounded-full">
                                    PENDING
                                </span>
                            @endif 
                        </div>
                        <div class="flex flex-row gap-x-3">

                            <a href="{{route('admin.product_orders.transactions.details', $transaction)}}" class="px-5 py-3 font-bold text-white bg-indigo-500 rounded-full">
                                View Details
                            </a>
                            
                        </div>
                    </div>
                @empty
                 <p>Belum ada transaksi Anda tersedia</p>
                @endforelse

            </div>
        </div>
    </div>
</x-app-layout>
