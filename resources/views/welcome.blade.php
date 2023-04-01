<x-main>

<x-heading/>
        
       @foreach ($items as $item )
       <x-card :$item/>
       @endforeach 
        
    




</x-main>