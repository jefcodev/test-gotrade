@extends('layouts.app')

@section('title','Dashboard')
@section('content')


<div class="container">
    


    <h1>Inicio</h1>
    @if(session()->has('data_user'))
                <?php $dataUser = session('data_user'); ?>
               <p> Bienvenido {{ $dataUser['name'].' '. $dataUser['surname']}} </p> 
                @endif
    
</div>

@php
$token = session('token');
@endphp


<script>
    if ('{{ $token }}') {
        const token = '{{ $token }}';
        localStorage.setItem('Authentication', token);
    }
</script>

@endsection