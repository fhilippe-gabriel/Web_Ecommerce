@extends('site.layout')
@section('title', 'Carrinho')
@section('Conteudo')

    <div class="py-24 sm:py-32 bg-white">
        <div class=" mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <p
                    class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-indigo-600 sm:text-5xl lg:text-balance">
                    Seu carrinho possui: {{ count($itens) }} itens</p>

                <p class="mt-6 text-lg leading-8 text-2xl font-light text-pretty text-gray-600">
                    @if ($mensagem = @session('sucesso'))
                        {{ $mensagem }}
                    @endif
                </p>

            </div>


            <div class="bg-white">
                <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                    <h2 class="sr-only">Products</h2>
                    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                        @foreach ($itens as $item)
                            <div class="">
                                <a href="#" class="">
                                    <img src="{{ $item->attributes->image }}"
                                        alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                                        class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8" />
                                    <h3 class="mt-4 text-sm text-gray-700">{{ $item->name }}</h3>
                                    <p class="mt-1 text-lg font-medium text-gray-900">
                                        {{ number_format($item->price, 2, ',', '.') }}</p>
                                    <p class="mt-1 text-lg font-medium text-gray-900">
                                        <input type="number" name="quantity" value="{{ $item->quantity }}">
                                    </p>
                                </a>
                                <button href="#">
                                    <p
                                        class="text-red-600 border-2 border-red-800 border-solid rounded-md p-2 mt-2 flex items-center justify-center hover:bg-red-50 hover:border-red-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </p>
                                </button>
                                <button href="#">
                                    <p
                                        class="text-indigo-600 border-2 border-indigo-800 border-solid rounded-md p-2 mt-2 flex items-center justify-center hover:bg-indigo-50 hover:border-indigo-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>

                                    </p>
                                </button>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>

            <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
                <div class="flex justify-between text-base font-medium text-gray-900">
                    <p>Subtotal</p>
                    <p>${{ number_format(\Cart::getTotal(), 2, '.', ',') }}</p>
                </div>
                <div class="mt-6">
                    <a href="#"
                        class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-xs hover:bg-indigo-700">Checkout</a>
                </div>
                <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                    <p>
                        or
                        <button type="button" command="close" commandfor="drawer"
                            class="font-medium text-indigo-600 hover:text-indigo-500">
                            Continue Shopping
                            <span aria-hidden="true"> &rarr;</span>
                        </button>
                    </p>
                </div>
            </div>
        </div>

    </div>



    {{-- <div class="mt-8 flex justify-center">

        {{ $produtos->links('custom.pagination') }}
    </div> --}}


@endsection
