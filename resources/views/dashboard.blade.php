<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard del Cap de Departament') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('autos') }}"><b>Autos → </b>Visualitzar, actualitzar i esborrar<a/>
                </div>
                <div class="p-6 text-gray-900">
                <a href="{{ url('autos/create') }}"><b>Autos → </b>Afegir autos<a/>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('clients') }}"><b>Clients → </b>Visualitzar, actualitzar i esborrar<a/>
                </div>
                <div class="p-6 text-gray-900">
                <a href="{{ url('clients/create') }}"><b>Clients → </b>Afegir clients<a/>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('lloguers') }}"><b>Lloguers → </b>Visualitzar, actualitzar i esborrar<a/>
                </div>
                <div class="p-6 text-gray-900">
                <a href="{{ url('lloguers/create') }}"><b>Lloguers → </b>Afegir lloguer<a/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
