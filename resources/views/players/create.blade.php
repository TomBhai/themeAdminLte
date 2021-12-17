@extends('partials.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <!-- end page title -->


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
                            <h5 class="card-title">CREATE NEW PLAYER</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('players.store') }}"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('post')
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="name">Name*:</label>
                                        <div class="form-floating mb-3">
                                            <input type="text" required class="form-control" name="name" id="name"
                                                   placeholder="Enter Name"
                                                   value="">
                                        </div>
                                    </div>
                                    @error('name')
                                    <label style="color: red">{{ $message }}</label>
                                    @enderror
                                    <div class="col-md-12">
                                        <label for="name">Email*:</label>
                                        <div class="form-floating mb-3">
                                            <input type="email" required class="form-control" name="email" id="email"
                                                   placeholder="Enter Email"
                                                   value="">
                                        </div>
                                    </div>
                                    @error('email')
                                    <label style="color: red">{{ $message }}</label>
                                    @enderror
                                    <div class="col-md-12">
                                        <label for="player_rank">Player Rank*:</label>
                                        <div class="form-floating mb-3">
                                            <input type="text" required class="form-control" name="player_rank" id="player_rank"
                                                   placeholder="Enter Player Rank"
                                                   value="">
                                        </div>
                                    </div>
                                    @error('player_rank')
                                    <label style="color: red">{{ $message }}</label>
                                    @enderror
                                    <div class="col-md-12" style="text-align: right">
                                        <button type="submit" class="btn btn-primary w-lg">Submit</button>
                                    </div>
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
