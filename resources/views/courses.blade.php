<x-main>
<x-heading/>


<div class="container"><div class="row"><h2>Corsi disponibili</h2></div></div>
@foreach ($items as $item)
    <x-card :$item />
@endforeach



</x-main>