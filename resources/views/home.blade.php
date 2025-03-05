<x-layout :game="$game">

    <x-jumbotron />
    <x-thisweeksspecial :special="$special"/>
    <x-aboutlocation />
    <x-donturo />
    <x-featuring />
    <x-pinballmachines :machines="$machines" :url="$url" />
    <x-testimonials />
    <x-footer />

</x-layout>