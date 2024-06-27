<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Creator Dashboard') }}
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

                <div class="flex flex-row items-center justify-between mb-5">
                    <h3 class="text-2xl font-bold text-indigo-950">Overview</h3>
                </div>

                <div class="flex flex-row justify-between">
                    <div>
                        <p class="text-sm text-slate-500">Total Product:</p>
                        <p class="text-xl font-bold text-indigo-950">{{count($my_products)}}</p>
                    </div>
    
                    <div>
                        <p class="text-sm text-slate-500">Total Order:</p>
                        <p class="text-xl font-bold text-indigo-950">{{count($total_order_success)}}</p>
                    </div>
    
                    <div>
                        <p class="text-sm text-slate-500">Total Revenue:</p>
                        <p class="text-xl font-bold text-indigo-950">Rp {{number_format($my_revenue)}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
