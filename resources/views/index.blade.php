<x-layout>
    <div class="background-img">
        <x-navbar></x-navbar>
        <div class="container">
            <div class="search-lg-centred">
                <h1>Find your tribe</h1>
                <x-search></x-search>
            </div>
            <div class="down-arrow">
                <h1>></h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card-container">
            <x-info-card></x-info-card>
            <x-info-card></x-info-card>
            <x-info-card></x-info-card>
            <x-info-card></x-info-card>
        </div>
        <div class="card-container">
            <x-info-card></x-info-card>
            <x-info-card></x-info-card>
            <x-info-card></x-info-card>
            <x-info-card></x-info-card>
        </div>
    </div>
</x-layout>
