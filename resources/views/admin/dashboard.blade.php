@extends('site.layout')
@section('title', 'DashBoard')
@section('Conteudo')
    @include('admin.produtos', ['produtos' => $produtos])
@endsection
