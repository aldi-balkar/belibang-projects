<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
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
                
                <div class="flex flex-col item-product gap-y-10">
                    <img src="{{Storage::url($order->product->cover)}}" class="h-auto w-[300px]" alt="">
                    <div>
                        <h3 class="text-xl font-bold text-indigo-950">{{$order->product->name}}</h3>
                        <p class="text-sm font-bold text-slate-500">{{$order->product->category->name}}</p>
                        <p class="text-sm font-bold text-slate-500">{{$order->product->creator->name}}</p>
                    </div>
                    <div class="flex flex-row items-center gap-x-5">
                        <p class="mb-2">Rp {{$order->total_price}}</p>
                        @if($order->is_paid)
                            <span class="px-5 py-2 text-sm font-bold text-white bg-green-500 rounded-full">
                                PAID
                            </span>
                        @else
                            <span class="px-5 py-2 text-sm font-bold text-white bg-orange-500 rounded-full">
                                PENDING
                            </span>
                        @endif    
                        
                    </div>
                    <img src="{{Storage::url($order->proof)}}" class="h-auto w-[300px]" alt="">
                    <div class="flex flex-row gap-x-3">
                        @if($order->is_paid)
                            <a href="{{route('admin.product_orders.download', $order)}}" class="px-5 py-3 text-white bg-indigo-500">
                                Download Product
                            </a>
                        @endif
                    </div>
                </div>
                    
            </div>
        </div>
    </div>
</x-app-layout>
