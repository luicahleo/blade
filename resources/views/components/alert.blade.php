<!-- component -->

{{-- en esta linea <div {{$attributes->merge(['class' =>"bg-$color-600 text-$color px-4 py-3"])}} >  --}}
    {{-- lo que se hace es unir los atributos pasados mb-4 con el resto de atributos porque al momento de haber llamado al componente le hemos pasado ese atributo que no lo rescatamos en la clase Alert.php --}}
    {{-- los atributos se guardan en $attributes --}}

<div {{$attributes->merge(['class' =>"bg-$color-600 text-$color px-4 py-3"])}} >

    <h1>{{$title}}</h1>
    <hr><br>
    <p>{{$slot}}</p>
</div>