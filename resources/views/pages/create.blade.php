@extends('layouts.main-layout')
@section('content')

<h2>Create New Postcard</h2>
<form 
    action="{{route('postcards.store')}}" 
    method="POST"
    enctype="multipart/form-data">

    @method('POST')
    @csrf

    <label for="sender">Sender</label>
    <input class="form-control" type="text" name="sender"> <br>
    <label for="address">Address</label>
    <input class="form-control" type="address" name="address"> <br>
    <label for="text">Text</label>
    <input class="form-control" type="text" name="text"> <br>
    <label for="image">Image</label>
    <input type="file" name="image"><br>
    <br>
    <input type="submit" value="CREATE">

</form>
    
@endsection