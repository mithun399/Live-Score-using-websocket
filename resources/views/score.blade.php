@extends('app')


@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 p-3">
        <div class="card text-center">
            <div class="card-body">
                <h2 id="score">...</h2>
                <h5>Live Score</h5>

            </div>

        </div>
        </div>

    </div>

</div>


@endsection



@section('script')

    <script type="text/javascript">
        var pusher=new Pusher('b7693b21c0bcd4f068af',{
            cluster:'ap2'
        });
        var channel= pusher.subscribe('my-channel')
        channel.bind('my-event',function(data){
            $('#score').html('')

            $('#score').html(data['scorevalue'])
    })

    </script>

@endsection