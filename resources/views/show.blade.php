@extends('layouts.app')

@section('content')


<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header bg-primary"><h1>{{$vehicle->vcn}}</h1></div>

                    <div class="card-body">
                    <form action="/image/save/{{$vehicle->vcn}}" class="form-group" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
                        @csrf
                                <label for="">Add Image for Vehicle</label>
                              <!--  <input type="file" name="img[]" class="form-control-file" id="img" required> -->
                                <input type='file' id="image" name="img[]" multiple accept=".png, .jpg, .jpeg" />

                                <button type="submit" class="btn btn-primary">add</button>
                            </form>

                            <div class="row pt-5">
                                    @foreach ($vehicle->image as $item)
                                <div class="col-4 pt-3">
                                <img src="/storage/{{$item->img}}" class="w-100" alt="">
                                </div>
                                @endforeach

                            </div>






                    </div>
                </div>
            </div>
        </div>

</div>

@endsection
