@extends('partials.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18 pt-2 pb-2">Players</h4>
                        <a href="{{ route('players.create') }}" class="btn btn-success" style="float: right">
                            <i class="fa fa-plus"></i>
                            Add New
                        </a>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="clearfix"></div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Players Management</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="example2">
{{--                                    <div class="row">--}}

{{--                                        <div class="col-sm-12 col-md-6">--}}
{{--                                            <div class="dataTables_length" id="example1_length"><label>Show <select--}}
{{--                                                        name="example1_length" aria-controls="example1"--}}
{{--                                                        class="custom-select custom-select-sm form-control form-control-sm">--}}
{{--                                                        <option value="10">10</option>--}}
{{--                                                        <option value="25">25</option>--}}
{{--                                                        <option value="50">50</option>--}}
{{--                                                        <option value="100">100</option>--}}
{{--                                                    </select> entries</label></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-12 col-md-6">--}}
{{--                                            <div id="example1_filter" class="dataTables_filter"><label>Search:<input--}}
{{--                                                        type="search" class="form-control form-control-sm"--}}
{{--                                                        placeholder=""--}}
{{--                                                        aria-controls="example1"></label></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <thead class="table-light">
                                    <tr>
                                        <th class="align-middle">Image</th>
                                        <th class="align-middle">Name</th>
                                        <th class="align-middle">Email</th>
                                        <th class="align-middle">Player Ranking</th>
                                        <th class="align-middle">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $items as $item)
                                        <tr style="text-align:center">
                                            <td>
                                                <img src="/image/{{ $item->image }}" width="25px">
                                            </td>
                                            <td>
                                                {{ $item->name }}
                                            </td>
                                            <td>
                                                {{ $item->email }}
                                            </td>
                                            <td>
                                                {{ $item->player_rank }}
                                            </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                                                                <form action="{{ route( 'players.destroy' , [ $item->id ]) }}"
                                                                                                      method="post">
                                                                                                    @csrf
                                                                                                    @method('delete')
                                                                                                    <button type="submit"
                                                                                                            data-toggle="modal"
                                                                                                            data-target="#modal-sm"
                                                                                                            class="btn btn-lg btn-rounded waves-effect waves-light">
                                                                                                        <i class="fas fa-times-circle"></i>
                                                                                                    </button>
                                                                                                    <a type="button" href="{{ route( 'players.show' , [ $item->id ]) }}"
                                                                                                       class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                                                                        View Details
                                                                                                    </a>
                                                                                                </form>
{{--                                                <a type="button" href="{{ route( 'players.destroy' , [ $item->id ]) }}"--}}
{{--                                                   class="btn btn-danger pr-2 btn-sm btn-rounded waves-effect waves-light">--}}
{{--                                                    <i class="fas fa-trash"></i>--}}
{{--                                                </a>--}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
{{--                                <div class="col-sm-12 col-md-5">--}}
{{--                                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">--}}
{{--                                        Showing 1 to 10 of 57 entries--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-12 col-md-7">--}}
{{--                                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">--}}
{{--                                            <ul class="pagination">--}}
{{--                                                <li class="paginate_button page-item previous disabled"--}}
{{--                                                    id="example1_previous"><a href="#" aria-controls="example1"--}}
{{--                                                                              data-dt-idx="0" tabindex="0"--}}
{{--                                                                              class="page-link">Previous</a></li>--}}
{{--                                                <li class="paginate_button page-item active"><a href="#"--}}
{{--                                                                                                aria-controls="example1"--}}
{{--                                                                                                data-dt-idx="1" tabindex="0"--}}
{{--                                                                                                class="page-link">1</a></li>--}}
{{--                                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"--}}
{{--                                                                                          data-dt-idx="2" tabindex="0"--}}
{{--                                                                                          class="page-link">2</a></li>--}}
{{--                                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"--}}
{{--                                                                                          data-dt-idx="3" tabindex="0"--}}
{{--                                                                                          class="page-link">3</a></li>--}}
{{--                                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"--}}
{{--                                                                                          data-dt-idx="4" tabindex="0"--}}
{{--                                                                                          class="page-link">4</a></li>--}}
{{--                                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"--}}
{{--                                                                                          data-dt-idx="5" tabindex="0"--}}
{{--                                                                                          class="page-link">5</a></li>--}}
{{--                                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"--}}
{{--                                                                                          data-dt-idx="6" tabindex="0"--}}
{{--                                                                                          class="page-link">6</a></li>--}}
{{--                                                <li class="paginate_button page-item next" id="example1_next"><a href="#"--}}
{{--                                                                                                                 aria-controls="example1"--}}
{{--                                                                                                                 data-dt-idx="7"--}}
{{--                                                                                                                 tabindex="0"--}}
{{--                                                                                                                 class="page-link">Next</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                            <!-- end table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>

    <div class="modal fade" id="showModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="text-left mb-4">
                            <input type="hidden" name="id" id="delId">
                            <div class="row justify-content-center">
                                <div class="col-xl-10">
                                    <h3>Are You Sure?</h3>
                                    <label>
                                        Are you sure you want to delete this record this will not redo.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pull-right">
                        <button class="btn btn-primary" type="submit">Yes</button>
                        <button class="btn btn-default" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src= {{ asset('assets/plugins/jquery/jquery.min.js')}}> </script>
{{--    <!-- Bootstrap 4 -->--}}
    <script src= {{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}></script>
    <!-- DataTables  & Plugins -->
    <script src= {{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}></script>
    <script src= {{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}></script>
    <script src= {{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}></script>
    <script src= {{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}></script>
    <script src= {{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}></script>
    <script src= {{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}></script>
    <script src= {{ asset('assets/plugins/jszip/jszip.min.js')}}></script>
    <script src= {{ asset('assets/plugins/pdfmake/pdfmake.min.js')}}></script>
    <script src= {{ asset('assets/plugins/pdfmake/vfs_fonts.js')}}></script>
    <script src= {{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}></script>
    <script src= {{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}></script>
    <script src= {{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}></script>
    <!-- SweetAlert2 -->
    <script src= {{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}></script>
    <!-- Toastr -->
    <script src= {{ asset('assets/plugins/toastr/toastr.min.js') }}></script>
    <!-- AdminLTE App -->
    <script src= {{ asset('assets/dist/js/adminlte.min.js')}}></script>
    <!-- AdminLTE for demo purposes -->
    <script src= {{ asset('assets/dist/js/demo.js')}}></script>
    <script>
        $(function () {
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-right',
                showConfirmButton: true,
                timer: 3000
            });
            $('.toastrDefaultWarning').click(function () {
                toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
        });
    </script>
@stop
