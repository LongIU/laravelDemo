<!繼承layouts.app>
@extends('layouts.app')

<!將內容注入title區塊中>
@section('title', 'Running Man')


<!將內容附加到sidebar區塊>
@section('sidebar')
    <p>附加資料</p>@parent
@endsection


<!將內容注入content區塊>
@section('content')
  <p>Hi 大家好!我們是{{$name}}</p>
  <!include layouts.long內容>
  @include('layouts.long')
@endsection





