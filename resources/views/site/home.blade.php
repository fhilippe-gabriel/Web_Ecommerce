@extends('site.layout')
@section('title', 'Inicio')
@section('Conteudo')

    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">

            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($produtos as $produto)
                    <div class="group relative">
                        <img src="{{ $produto->imagem }}" alt="Front of men&#039;s Basic Tee in black."
                            class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80" />
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-xl text-gray-800">
                                    <a href="{{ route('site.details', $produto->slug) }}">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        {{ $produto->nome }}
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">
                                    {{ Str::limit($produto->descricao, 120) }}
                                </p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">
                                R$ {{ number_format($produto->preco, 2, ',', '.') }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- footer navigation --}}



    <div class="mt-8 flex justify-center">

        {{ $produtos->links('custom.pagination') }}
    </div>




@endsection
