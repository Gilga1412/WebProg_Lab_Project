@extends('MainBody.Main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mb-3">
                <img src="img/pngwing.png"class="rounded mx-auto d-block " alt="logo" width="100">
            </div>
            @foreach ($barang as $barang)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the cards content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
