<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <title>CRUD</title>
</head>
<style>
    .alert-message {
        color: red;
    }

    @media (min-width: 1200px) {
        .container1 {
            width: 184px;
        }
    }
</style>

<body>

    <h1 class="text-center mb-4 mt-4">Data Pegawai</h1>
    <div class="container">
        <div class="row g-3 align-items-center mt-2">
            <div class="col-auto">
                <a href="javascript:void(0)" class="btn btn-success mb-3" id="create-new-post" onclick="addPost()">Add Post</a>
                <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#import-modal" onclick="importPost()">
                    Import Data
                </a>
                <a href=" javascript:void(0)" class="btn btn-success mb-3" id="import-new-post" onclick="importPost()">Import Post</a>
                <a href="/exportexcel" class="btn btn-info">Export Excel</a>

            </div>
        </div>
        <div class="row" style="clear: both;margin-top: 18px;">
            <div class="col-12">
                <table id="laravel_crud" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Prodi</th>
                            <th>Testimoni</th>
                            <th>Pekerjaan</th>
                            <th>No Telpon</th>

                            <th>Aksi</th>



                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach($pot as $post)
                        <tr id="row_{{$post->id}}">
                            <td>{{ $no++  }}</td>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->nim }}</td>
                            <td>{{ $post->prodi }}</td>
                            <td>{{ $post->message }}</td>
                            <td>{{ $post->pekerjaan }}</td>
                            <td>{{ $post->telepon }}</td>

                            <td>
                                <div class="container1">
                                    <a href="javascript:void(0)" data-id="{{ $post->id }}" onclick="editPost(event.target)" class="btn btn-success">Edit <i class="fa fa-edit text-gray-300"></i></a>
                                    <a href="javascript:void(0)" data-id="{{ $post->id }}" data-nama="{{ $post->name }}" class="btn btn-danger delete">Delete <i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="post-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                </div>
                <div class="modal-body">
                    <form name="userForm" class="form-horizontal">
                        <input type="hidden" name="post_id" id="post_id">
                        <div class="form-group">
                            <label for="name" class="col-sm-2">Nama</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="name" name="nama" placeholder="Enter nama">
                                <span id="nameError" class="alert-message"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-2">NIM</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="nim" name="nama" placeholder="Enter nama">
                                <span id="nimError" class="alert-message"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-2">Prodi</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="prodi" name="nama" placeholder="Enter nama">
                                <span id="prodiError" class="alert-message"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-2">Password</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="password" name="nama" placeholder="Enter nama">
                                <span id="passwordError" class="alert-message"></span>
                            </div>
                        </div>

                    </form>
                </div>
                <div class=" modal-footer">
                    <button type="button" class="btn btn-primary" onclick="createPost()">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> Edit Data</h4>
                </div>
                <div class="modal-body">
                    <form name="userForm" class="form-horizontal">
                        <input type="hidden" name="post_id" id="post_id-edit">
                        <div class="form-group">
                            <label for="name" class="col-sm-2">Nama</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="name-edit" name="nama" placeholder="Enter nama">
                                <span id="nameError" class="alert-message"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-2">NIM</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="nim-edit" name="nama" placeholder="Enter nama">
                                <span id="nimError" class="alert-message"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-2">Prodi</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="prodi-edit" name="nama" placeholder="Enter nama">
                                <span id="prodiError" class="alert-message"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-2">Password</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" disabled="true" id="password-edit" name="nama" placeholder="Enter nama">
                                <span id="passwordError" class="alert-message"></span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" onclick="createEdit()">Save</button>
                        </div>
                </div>
            </div>
        </div>


    </div>

    <div class="modal fade" id="import-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import Data Mahasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/importexcel" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">
                        <div class="form-">
                            <input type="file" name="file" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
            </div>
            </form>
        </div>
    </div>



    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</body>
<script>
    $('.delete').click(function() {
        var pegawaiid = $(this).attr('data-id');
        var nama = $(this).attr('data-nama');
        swal({
                title: "Yakin?",
                text: "Kami akan menghapus data " + nama + "",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/delete/" + pegawaiid + ""
                }
            });
    });
    $('#laravel_crud').DataTable();


    function addPost() {
        $("#post_id").val('');
        $('#post-modal').modal('show');
    }

    function importPost() {
        $('#import-modal').modal('show');
    }

    function editPost(event) {
        var id = $(event).data("id");
        let _url = `/posts/${id}`;
        $('#nameError').text('');
        $('#nimError').text('');
        $('#prodiError').text('');
        $('#passwordError').text('');

        $.ajax({
            url: _url,
            type: "GET",
            success: function(response) {
                if (response) {
                    $("#post_id-edit").val(response.id);
                    $('#name-edit').val(response.name);
                    $('#nim-edit').val(response.nim);
                    $('#prodi-edit').val(response.prodi);
                    $('#password-edit').val(response.password);
                    $('#edit-modal').modal('show');
                }
            },

        });
    }

    function createPost() {
        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "positionClass": "toast-top-right"
        };
        var name = $('#name').val();
        var nim = $('#nim').val();
        var prodi = $('#prodi').val();
        var password = $('#password').val();
        var id = $('#post_id').val();

        let _url = `/posts`;
        let _token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({

            url: _url,
            type: "POST",
            data: {
                id: id,
                name: name,
                nim: nim,
                prodi: prodi,
                password: password,
                _token: _token
            },
            success: function(response) {
                if (response.code == 200) {

                    if (id != "") {
                        $("#row_" + id + " td:nth-child(3)").html(response.data.name);
                        $("#row_" + id + " td:nth-child(2)").html(response.data.nim);
                        $("#row_" + id + " td:nth-child(6)").html(response.data.prodi);
                        $("#row_" + id + " td:nth-child(7)").html(response.data.password);
                    } else {

                        $('table tbody').append('<tr id="row_' + response.data.id + '"><td>' + response.data.id + '</td><td>' + response.data.nama + '</td><td>' + response.data.nim + '</td><td>' + response.data.prodi + response.data.password + '</td><td>' + '</td><td><a href="javascript:void(0)" data-id="' + response.data.id + '" onclick="editPost(event.target)" class="btn btn-info">Edit</a></td><td><a href="javascript:void(0)" data-id="' + response.data.id + '" class="btn btn-danger" onclick="deletePost(event.target)">Delete</a></td></tr>');
                    }

                    $('#name').val('');
                    $('#nim').val('');
                    $('#prodi').val('');
                    $('#password').val('');
                    $('#post-modal').modal('hide');
                    toastr.success(response.success);
                    setTimeout(function() {
                        window.location.reload(); // you can pass true to reload function to ignore the client cache and reload from the server
                    }, 2000);

                }

            },

            error: function(response) {
                $('#nameError').text(response.responseJSON.errors.name);
                $('#nimError').text(response.responseJSON.errors.nim);
                $('#prodiError').text(response.responseJSON.errors.prodi);
                $('#passwordError').text(response.responseJSON.errors.password);
            },

        });
    }

    function createEdit() {
        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "positionClass": "toast-top-right"
        };
        var name = $('#name-edit').val();
        var nim = $('#nim-edit').val();
        var prodi = $('#prodi-edit').val();
        var password = $('#password-edit').val();
        var id = $('#post_id-edit').val();

        let _url = `/posts`;
        let _token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({

            url: _url,
            type: "POST",
            data: {
                id: id,
                name: name,
                nim: nim,
                prodi: prodi,
                password: password,
                _token: _token
            },
            success: function(response) {
                if (response.code == 200) {
                    if (id != "") {
                        $("#row_" + id + " td:nth-child(2)").html(response.data.name);
                        $("#row_" + id + " td:nth-child(3)").html(response.data.nim);
                        $("#row_" + id + " td:nth-child(4)").html(response.data.prodi);
                        $("#row_" + id + " td:nth-child(9)").html(response.data.password);
                    } else {
                        $('table tbody').prepend('<tr id="row_' + response.data.id + '"><td>' + response.data.id + '</td><td>' + response.data.nama + '</td><td>' + response.data.nim + '</td><td>' + response.data.prodi + '</td><td>' + response.data.password + '</td><td><a href="javascript:void(0)" data-id="' + response.data.id + '" onclick="editPost(event.target)" class="btn btn-info">Edit</a></td><td><a href="javascript:void(0)" data-id="' + response.data.id + '" class="btn btn-danger" onclick="deletePost(event.target)">Delete</a></td></tr>');
                    }
                    $('#name-edit').val('');
                    $('#nim-edit').val('');
                    $('#prodi-edit').val('');
                    $('#password-edit').val('');
                    $('#edit-modal').modal('hide');
                    toastr.success(response.berhasil);
                }
            },

            error: function(response) {
                $('#nameError').text(response.responseJSON.errors.name);
                $('#nimError').text(response.responseJSON.errors.nim);
                $('#prodiError').text(response.responseJSON.errors.prodi);
                $('#passwordError').text(response.responseJSON.errors.prodi);
            }
        });
    }

    function deletePost(event) {
        var id = $(event).data("id");
        let _url = `/posts/${id}`;
        let _token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: _url,
            type: 'DELETE',
            data: {
                _token: _token
            },
            success: function(response) {
                $("#row_" + id).remove();
            }
        });
    }
</script>
@if(Session::has('success'))
<script>
    toastr.success("{{Session::get('success')}}")
</script>
@endif


</html>