<x-app-layout>
    <x-slot name="header">
        <h1> DASHBOARD USER </h1>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Hi..{{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">

 This is DASHBOARD USER



    </div>
</x-app-layout>
