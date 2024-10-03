@extends('dashboard.layouts.footer')
@extends('dashboard.layouts.navbar')
@section('body')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"> <span class="text-muted fw-light">DataTables </span> </h4>
            <div class="card">
                <div class="card-header">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                        <div class="card-header flex-column flex-md-row">
                            <div class="head-label text-center">
                                <h5 class="card-title mb-0">DataTable with Buttons</h5>
                            </div>
                            <div class="dt-action-buttons text-end pt-3 pt-md-0">
                                <div class="dt-buttons">
                                    <button class="send-model dt-button create-new btn btn-primary waves-effect waves-light"
                                        tabindex="0" type="button"><span><i class="mdi mdi-plus me-sm-1"></i> <span
                                                class="d-none d-sm-inline-block">Add New Record</span></span></button>
                                </div>
                            </div>
                        </div>
                        <table id="example" class="dt-fixedheader table border-top dataTable dtr-column">
                            <thead>
                                <tr>
                                    <th>image</th>
                                    <th>name</th>
                                    <th>title </th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->updated_at }}</td>
                                        <td>
                                            <a href="{{ route('userApp.profile', ['id' => $user->id]) }}"
                                                class="dropdown-item"><i class="fa fa-eye"></i> View</a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer-script')
    <script>
        new DataTable('#example', {
            "paging": true,
            "page": false,
            // scrollX: true,
            "searching": true,
            "ordering": true,
            "info": true,
            "responsive": true,
            "autoWidth": true,
            "fixedHeader": true,
            "order": [
                [6, "desc"]
            ],
            "colReorder": true,
            keys: true,
            dom: 'Bfrtip',
        });
    </script>
@endsection
