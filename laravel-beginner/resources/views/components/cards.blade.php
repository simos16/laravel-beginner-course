<!---<div class="card m-5">
    {{$slot}}
</div>-->

<div {{$attributes->merge(['class' => 'card m-5'])}} >
    {{$slot}}
</div>
