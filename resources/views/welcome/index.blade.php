@extends('layouts.app')

<p>This message comes from the /views/welcome/index.blade.php file!</p>
@section('content')
    <h1>This blog will help you streamline your learning!</h1>
@endsection

@section('advertisement')
    @parent
        <p>
            Hugo's friends will always get 10% off at Amazon Books!
        </p>
@endsection
