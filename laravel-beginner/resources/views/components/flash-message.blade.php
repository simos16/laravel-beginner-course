@if(session() ->has('message'))

    <div x-data="{show:true}"  x-init=" setTimeout(() => show=false , 2500)" x-show="show" class="bg-info fixed-top  w-50 mx-auto px-5"><p class="lead text-white">{{session('message')}}</p></div>

@endif
