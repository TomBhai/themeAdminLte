@extends('admin.partials.app')
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
                                                <img src="/image/{{ $item->image }}" width="50px">
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


                                                <form action="{{ route( 'players.destroy' , [ $item->id ]) }}"
                                                      method="post"
                                                >
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit"
                                                            class="btn btn-rounded waves-effect waves-light"
                                                            title="Delete Player"
                                                    >
                                                        <i class="fas fa-trash"
                                                           style="color: indianred"
                                                        ></i>
                                                    </button>
                                                    <a type="button" href="{{ route( 'players.show' , [ $item->id ]) }}"
                                                       class="btn btn-rounded waves-effect waves-light"
                                                       title="View Details">
                                                        <i class="fas fa-eye text-green"></i>
                                                    </a>
                                                    <a type="button" href="{{ route( 'players.edit' , [ $item->id ]) }}"
                                                       class="btn btn-rounded waves-effect waves-light"
                                                       title="Edit Details">
                                                        <i class="fas fa-edit text-lightblue"></i>
                                                    </a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>



    {{--    <div class="modal fade" id="modal-sm" style="padding-right: 17px; display: block;" aria-hidden="true"--}}
    {{--         role="dialog">--}}
    {{--        <div class="modal-dialog modal-sm">--}}
    {{--            <div class="modal-content">--}}
    {{--                <div class="modal-header">--}}
    {{--                    <h4 class="modal-title">Confirm Delete</h4>--}}
    {{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
    {{--                        <span aria-hidden="true">×</span>--}}
    {{--                    </button>--}}
    {{--                </div>--}}
    {{--                <div class="modal-body">--}}
    {{--                    <p>--}}
    {{--                        Are you sure?--}}
    {{--                    </p>--}}
    {{--                </div>--}}
    {{--                <div class="modal-footer justify-content-between">--}}
    {{--                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
    {{--                    <form action="{{ route( 'players.destroy' , [ $item->id ]) }}"--}}
    {{--                          method="post">--}}
    {{--                        @csrf--}}
    {{--                        @method('delete')--}}
    {{--                        <button type="submit"--}}
    {{--                                class="btn btn-danger">--}}
    {{--                            Delete--}}
    {{--                        </button>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <!-- /.modal-content -->--}}
    {{--        </div>--}}
    {{--        <!-- /.modal-dialog -->--}}
    {{--    </div>--}}
    <script src= {{ asset('assets/plugins/jquery/jquery.min.js')}}></script>
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
    </script>
@stop
