@extends('app')


@section('content')

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 p-3">
        <div class="card text-center">
            <div class="card-body">
                <h5>UPDATE SCORE</h5>
                <hr>
               <input class="form-control scorevalue" type="text"><br>
                <button class="btn update btn-success">Update</button>
                <h4 class="lastscore"> </h4>
            </div>

        </div>
        </div>

    </div>

</div>

@endsection



@section('script')

<script type="text/javascript">
    $('.update').click(function(){
    var scorevalue= $('.scorevalue').val()
    var url="/pushScoreValue"
    axios.post(url,{score:scorevalue}).then(function(response){
        $('.lastscore').html(response.data)
    }).catch(function(){

    })
    })

</script>
@endsection