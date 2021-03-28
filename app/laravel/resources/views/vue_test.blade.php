@extends('layouts.app')

@section('content')
    <example-component :data="{{ json_encode(config('pref'))  }}">
    </example-component>
    {{ Form::open(['route' => 'store']) }}
        <test-component></test-component>
    {{ Form::submit('送信') }}
    {{ Form::close() }}

        <test-paginate :posts="{{ $posts }}"></test-paginate>

        <pusher-component></pusher-component>
    <div>{{ old('test.name') }}</div>
    @if(old('test'))
    <div>{{ var_dump(old('test')) }}</div> {{-- old('変数名')で配列のまま取得  --}}
    @endif
    @foreach( $errors->all() as $err)
        <p>{{ $err }}</p>
    @endforeach

        <div id="validate">
        {{ Form::open(['route' => 'store']) }}
            <validate-test :data="{{ json_encode(old('test')) }}"></validate-test>
        {{ Form::close() }}
        </div>
        {{-- <x-testcomponent id="2" />  --}}

    <!-- Scripts -->
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}

    <script src="{{ mix('js/vee_validate.js') }}"></script>
    <script src="{{ asset('js/jquery.binarytransport.js') }}"></script>
    <script>
        $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/api/test/ajax',  //Routingのurl
        type: 'POST', //送信方法
        dataType: 'binary',
        responseType:'blob',
        processData: false,
        data: {'word': 'テストなんじゃ'},
        timeout: 10000,
        beforeSend : function(xhr) {
            xhr.overrideMimeType('text/html;charset=Shift_JIS');
        }
      })// Ajax通信が成功した時
      .done( function(result, textStatus, jqXHR) {
          console.log('通信成功');
          console.log(result);
          download(result);
      })
      // Ajax通信が失敗した時
      .fail(function(jqXHR, textStatus, errorThrown){
          console.log('通信失敗');
          console.log("jqXHR          : " + jqXHR.status); 
          console.log("textStatus     : " + textStatus);
          console.log("errorThrown    : " + errorThrown);
      })

        function download(csv) {
            let blob = new Blob([csv], { type: "text/csv" });
            var a = document.createElement("a");
            a.href = (window.URL || window.webkitURL).createObjectURL(blob);
            a.download = 'tes.csv';
            a.click();
            (window.URL || window.webkitURL).revokeObjectURL(a.href);
        }
    </script>
  
@endsection