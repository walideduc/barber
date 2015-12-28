@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Page Heading
                    <small>Secondary Text</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            @foreach( $shops->slice(1,4) as $shop )
                <div class="col-md-3 portfolio-item">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{$shop->name}}r</div>
                        <div class="panel-body">
                            {{$shop->address}}
                            {{$shop->city}}
                            {{$shop->phone_number}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            @foreach( $shops->slice(4,4) as $shop )
                <div class="col-md-3 portfolio-item">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{$shop->name}}r</div>
                        <div class="panel-body">
                            {{$shop->address}}
                            {{$shop->city}}
                            {{$shop->phone_number}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            @foreach( $shops->slice(8,4) as $shop )
                <div class="col-md-3 portfolio-item">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{$shop->name}}r</div>
                        <div class="panel-body">
                            {{$shop->address}}
                            {{$shop->city}}
                            {{$shop->phone_number}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->

        {!! $shops->links() !!}
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
@endsection
