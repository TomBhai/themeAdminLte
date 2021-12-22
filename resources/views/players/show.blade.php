@extends('partials.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row pt-5">
                <div class="col-md-12">
                    <a href="{{ route('players.index') }}" class="btn btn-primary" style="float: right">
                        <i class="fa fa-backward"></i> Go Back
                    </a>
                </div>

                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">PLAYER DETAILS</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" action=""
                                  enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <label for="name">Name*:</label>
                                            <input type="text" readonly class="form-control" name="name" id="name"
                                                   placeholder="Enter Name"
                                                   value="{{ $player->name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <label for="email">Email*:</label>
                                            <input type="email" readonly class="form-control" name="email" id="email"
                                                   placeholder="Enter Email"
                                                   value="{{ $player->email }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <label for="player_rank">Player Rank*:</label>
                                            <input type="text" readonly class="form-control" name="player_rank" id="player_rank"
                                                   placeholder="Enter Player Rank"
                                                   value="{{ $player->player_rank}}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <label for="image">Image*:</label>
                                        <div class="form-floating mb-3">
                                            <img src="/image/{{ $player->image }}" width="500px">
                                        </div>
                                    </div>
{{--                                    <div class="col-md-12" style="text-align: right">--}}
{{--                                        <button type="submit" class="btn btn-primary w-lg">Submit</button>--}}
{{--                                    </div>--}}
                                </div>
                            </form>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
@endsection
