<div class="series">
    <div class="container-fluid">
        <div class="row">
            @foreach ($series as $key => $item)
            <a href="{{route('single', ['param' => $key])}}">
            <div class="col-2">
                <img src="{{$item['thumb']}}" alt="{{$item['title']}}">
                <div class="title">
                    {{$item['series']}}
                </div>
            </div>
            </a>
            @endforeach
        </div>
    </div>
</div>

<style>

    .series{
        background-color: black;
        color: white
    }
    .container-fluid{
        width: 90%;
        padding: 30px 0px 30px 0px;
    }

    img{
        width: 200px;
        height: 200px;
        object-fit: cover;
    }

    .title{
        text-transform: uppercase;
    }
</style>