<link rel="icon" href="/img/polnep.png" type="image/icon type">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.2/datatables.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.2/datatables.min.js"></script>





<script src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>


<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">




<style>
  .alert-message {
    color: red;
  }

  @media (min-width: 1200px) {
    .container1 {
      width: 190px;
    }
  }
</style>

<body>

  <h1 class="text-center mb-4 mt-4">Data Alumni</h1>
  <div class="container">
    <div class="row g-3 align-items-center mt-2">
      <div class="col-auto">
        <a href="javascript:void(0)" class="btn btn-primary" id="create-new-post" onclick="addPost()">Tambah Data <i class="fa fa-plus"></i></a>
        <a href="/import-forms" class="btn btn-success" id="import-new-post">Import Data <i class="fa fa-upload"></i></a>
        <a href="/exportsformat" class="btn btn-success ">Format Import <i class="fa fa-download"></i></a>
        <a href="/download" class="btn btn-danger " style="float: right;margin-left:5px;">Manual Book <i class="fa fa-book"></i></a>
        <a href="/exportexcels" class="btn btn-warning" style="float: right;">Export Data <i class="fa fa-database"></i></a>

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
              
              <th>Peran</th>
              <th>Aksi</th>



            </tr>
          </thead>
          <tbody>
            @php
            $no=1;
            @endphp
            @foreach($sadmin as $post)
            <tr id="row_{{$post->id}}">
              <td>{{ $no++  }}</td>
              <td>{{ $post->name }}</td>
              <td>{{ $post->nim }}</td>
              <td>{{ $post->prodi }}</td>
              <td>{{ $post->message }}</td>
              <td>{{ $post->pekerjaan }}</td>
             
              <td>{{ $post->utype}}</td>

              <td>
                <div class="container1">
                  <a href="javascript:void(0)" data-id="{{ $post->id }}" onclick="editPost(event.target)" class="btn btn-success">Edit <i class="fa fa-edit text-gray-300"></i></a>
                  <a href="javascript:void(0)" data-id="{{ $post->id }}" data-nama="{{ $post->name }}" class="btn btn-danger delete">Hapus <i class="fa fa-trash"></i></a>
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
                <input type="text" class="form-control" id="name" name="nama" placeholder="Masukkan nama">
                <span id="nameError" class="alert-message"></span>
              </div>
            </div>

            <div class="form-group">
              <label for="name" class="col-sm-2">NIM</label>
              <div class="col-sm-12">
                <input type="text" class="form-control" id="nim" name="nama" placeholder="Masukkan NIM">
                <span id="nimError" class="alert-message"></span>
              </div>
            </div>

            <div class="form-group">

              <div class="col-sm-12">
                <label for="exampleInputEmail1" class="form-label">Prodi</label>




              </div>

              <div class="col-sm-12">
                <select class="form-control" id="prodi" name="nama" aria-label="Default select example"">
                  <option disabled selected>Pilih admin untuk login sebagai admin</option>
                  <option value="Admin">Admin</option>
                  <option value="Akuntansi (D3)">1. Akuntansi (D3)</option>
                  <option value="Administrasi Negara (D4)">2. Administrasi Negara (D4)</option>
                  <option value="Akuntansi (D4)">3. Akuntansi (D4)</option>
                  <option value="Perencanaan Perumahan Dan Pemukiman (D4)">4. Perencanaan Perumahan Dan Pemukiman (D4)</option>
                  <option value="Administrasi Bisnis (D3)">5. Administrasi Bisnis (D3)</option>
                  <option value="Arsitektur (D3)">6. Arsitektur (D3)</option>
                  <option value="Budidaya Perikanan (D3">7. Budidaya Perikanan (D3)</option>
                  <option value="Teknik Elektronika (D3)">8. Teknik Elektronika (D3)</option>
                  <option value="Teknik Informatika (D3">9. Teknik Informatika (D3)</option>
                  <option value="Teknik Listrik (D3)">10. Teknik Listrik (D3)</option>
                  <option value="Teknik Mesin (D3">11. Teknik Mesin (D3)</option>
                  <option value="Teknik Sipil (D3)">12. Teknik Sipil (D3)</option>
                  <option value="Teknologi Budidaya Perikanan K. Kab. Kapuas Hulu (D3)">13. Teknologi Budidaya Perikanan K. Kab. Kapuas Hulu (D3)</option>
                  <option value="Teknologi Penangkapan Ikan (D3)">14. Teknologi Penangkapan Ikan (D3)</option>
                  <option value="Teknologi Pengolahan Hasil Perikanan (D3)">15. Teknologi Pengolahan Hasil Perikanan (D3)</option>
                  <option value="Teknologi Pengolahan Hasil Perkebunan (D3)">16. Teknologi Pengolahan Hasil Perkebunan (D3)</option>
                  <option value="Teknologi Pengolahan Hasil Perkebunan K. Kab Kapuas Hulu (D3)">17. Teknologi Pengolahan Hasil Perkebunan K. Kab Kapuas Hulu (D3)</option>
                  <option value="Operator dan Peralatan Alat Berat (D1)">18. Operator dan Peralatan Alat Berat (D1)</option>
                  <option value="Budidaya Tanaman Perkebunan (D4)">19. Budidaya Tanaman Perkebunan (D4)</option>
                  <option value="Manajemen Perkebunan (D4)">20. Manajemen Perkebunan (D4)</option>
                  <option value="Teknik Mesin (D4)">21. Teknik Mesin (D4)</option>
                  <option value="Teknik Sipil K. Kab. Kapuas Hulu (D3)">22. Teknik Sipil K. Kab. Kapuas Hulu (D3)</option>
                  <option value="Administrasi Bisnis Otomotif (D4)">23. Administrasi Bisnis Otomotif (D4)</option>
                  <option value="Arsitektur Bangunan Gedung (D4)">24. Arsitektur Bangunan Gedung (D4)</option>
                  <option value="Desain Kawasan Binaan (D4)">25. Desain Kawasan Binaan (D4)</option>
                  <option value="Akuntansi (Kampus Kab. Sanggau) (D3)">26. Akuntansi (Kampus Kab. Sanggau) (D3)</option>
                  <option value="Pengelolaan Hasil Perkebunan (Kampus Kab. Sanggau) (D3)">27. Pengelolaan Hasil Perkebunan (Kampus Kab. Sanggau) (D3)</option>
                  <option value="Teknologi Mesin (Kampus Kab. Sanggau) (D3)">28. Teknologi Mesin (Kampus Kab. Sanggau) (D3)</option>
                  <option value="Teknik Informatika, Kampus Singkawang (D2)">29. Teknik Informatika, Kampus Singkawang (D2)</option>
                  <option value="Teknik Mesin Kampus Kabupaten Polewali Mandar (D2)">30. Teknik Mesin Kampus Kabupaten Polewali Mandar (D2)</option>
                  <option value="Teknik Pengolahan Hasil Perkebunan Kampus Kabupaten Polewali Mandar (D2)">31. Teknik Pengolahan Hasil Perkebunan Kampus Kabupaten Polewali Mandar (D2)</option>
                  <option value="Teknologi Pengolahan Hasil Perkebunan, Kampus Singkawang">32. Teknologi Pengolahan Hasil Perkebunan, Kampus Singkawang</option>
                </select>

              </div>
              <div class="col-sm-12">
                <span id="utypeError" class="alert-message"></span>
              </div>

            </div>

            <div class="form-group">

              <div class="col-sm-12">
                <label for="exampleInputEmail1" class="form-label">Login Sebagai</label>
              </div>

              <div class="col-sm-12">
                <select class="form-control" id="utype" name="nama" aria-label="Default select example"">

                  <option value="USR">User</option>
                  <option value="ADM">Admin</option>
                </select>

              </div>
              <div class="col-sm-12">
                <span id="utypeError" class="alert-message"></span>
              </div>

            </div>

            <div class="form-group">
              <label for="name" class="col-sm-2">Password</label>
              <div class="col-sm-12">
                <input type="text" class="form-control" id="password" name="nama" placeholder="Masukkan password">
                <span id="passwordError" class="alert-message"></span>
              </div>
            </div>

          </form>
        </div>
        <div class=" modal-footer">
          <button type="button" class="btn btn-primary" onclick="createPost()">Simpan</button>
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

              <div class="col-sm-12">
                <label for="exampleInputEmail1" class="form-label">Prodi</label>
              </div>

              <div class="col-sm-12">
                <select class="form-control" id="prodi-edit" name="nama" aria-label="Default select example"">
				
                  <option value="Admin">Admin</option>
                  <option value="Akuntansi (D3)">1. Akuntansi (D3)</option>
                  <option value="Administrasi Negara (D4)">2. Administrasi Negara (D4)</option>
                  <option value="Akuntansi (D4)">3. Akuntansi (D4)</option>
                  <option value="Perencanaan Perumahan Dan Pemukiman (D4)">4. Perencanaan Perumahan Dan Pemukiman (D4)</option>
                  <option value="Administrasi Bisnis (D3)">5. Administrasi Bisnis (D3)</option>
                  <option value="Arsitektur (D3)">6. Arsitektur (D3)</option>
                  <option value="Budidaya Perikanan (D3">7. Budidaya Perikanan (D3)</option>
                  <option value="Teknik Elektronika (D3)">8. Teknik Elektronika (D3)</option>
                  <option value="Teknik Informatika (D3">9. Teknik Informatika (D3)</option>
                  <option value="Teknik Listrik (D3)">10. Teknik Listrik (D3)</option>
                  <option value="Teknik Mesin (D3">11. Teknik Mesin (D3)</option>
                  <option value="Teknik Sipil (D3)">12. Teknik Sipil (D3)</option>
                  <option value="Teknologi Budidaya Perikanan K. Kab. Kapuas Hulu (D3)">13. Teknologi Budidaya Perikanan K. Kab. Kapuas Hulu (D3)</option>
                  <option value="Teknologi Penangkapan Ikan (D3)">14. Teknologi Penangkapan Ikan (D3)</option>
                  <option value="Teknologi Pengolahan Hasil Perikanan (D3)">15. Teknologi Pengolahan Hasil Perikanan (D3)</option>
                  <option value="Teknologi Pengolahan Hasil Perkebunan (D3)">16. Teknologi Pengolahan Hasil Perkebunan (D3)</option>
                  <option value="Teknologi Pengolahan Hasil Perkebunan K. Kab Kapuas Hulu (D3)">17. Teknologi Pengolahan Hasil Perkebunan K. Kab Kapuas Hulu (D3)</option>
                  <option value="Operator dan Peralatan Alat Berat (D1)">18. Operator dan Peralatan Alat Berat (D1)</option>
                  <option value="Budidaya Tanaman Perkebunan (D4)">19. Budidaya Tanaman Perkebunan (D4)</option>
                  <option value="Manajemen Perkebunan (D4)">20. Manajemen Perkebunan (D4)</option>
                  <option value="Teknik Mesin (D4)">21. Teknik Mesin (D4)</option>
                  <option value="Teknik Sipil K. Kab. Kapuas Hulu (D3)">22. Teknik Sipil K. Kab. Kapuas Hulu (D3)</option>
                  <option value="Administrasi Bisnis Otomotif (D4)">23. Administrasi Bisnis Otomotif (D4)</option>
                  <option value="Arsitektur Bangunan Gedung (D4)">24. Arsitektur Bangunan Gedung (D4)</option>
                  <option value="Desain Kawasan Binaan (D4)">25. Desain Kawasan Binaan (D4)</option>
                  <option value="Akuntansi (Kampus Kab. Sanggau) (D3)">26. Akuntansi (Kampus Kab. Sanggau) (D3)</option>
                  <option value="Pengelolaan Hasil Perkebunan (Kampus Kab. Sanggau) (D3)">27. Pengelolaan Hasil Perkebunan (Kampus Kab. Sanggau) (D3)</option>
                  <option value="Teknologi Mesin (Kampus Kab. Sanggau) (D3)">28. Teknologi Mesin (Kampus Kab. Sanggau) (D3)</option>
                  <option value="Teknik Informatika, Kampus Singkawang (D2)">29. Teknik Informatika, Kampus Singkawang (D2)</option>
                  <option value="Teknik Mesin Kampus Kabupaten Polewali Mandar (D2)">30. Teknik Mesin Kampus Kabupaten Polewali Mandar (D2)</option>
                  <option value="Teknik Pengolahan Hasil Perkebunan Kampus Kabupaten Polewali Mandar (D2)">31. Teknik Pengolahan Hasil Perkebunan Kampus Kabupaten Polewali Mandar (D2)</option>
                  <option value="Teknologi Pengolahan Hasil Perkebunan, Kampus Singkawang">32. Teknologi Pengolahan Hasil Perkebunan, Kampus Singkawang</option>
                </select>

              </div>
              <div class="col-sm-12">
                <span id="prodiError" class="alert-message"></span>
              </div>

            </div>

            <div class="form-group">

              <div class="col-sm-12">
                <label for="exampleInputEmail1" class="form-label">Login Sebagai</label>
              </div>

              <div class="col-sm-12">
                <select class="form-control" id="utype-edit" name="nama" aria-label="Default select example"">


                  <option value="USR">User</option>
                  <option value="ADM">Admin</option>
                </select>

              </div>
              <div class="col-sm-12">
                <span id="utypeError" class="alert-message"></span>
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
              <button type="button" class="btn btn-primary" onclick="createEdit()">Simpan</button>
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
          window.location = "/deletes/" + pegawaiid + ""
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
    let _url = `/sadmin/${id}`;
    $('#nameError').text('');
    $('#nimError').text('');
    $('#prodiError').text('');
    $('#utypeError').text('');
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
          $('#utype-edit').val(response.utype);
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
    var utype = $('#utype').val();
    var id = $('#post_id').val();

    let _url = `/sadmin`;
    let _token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({

      url: _url,
      type: "POST",
      data: {
        id: id,
        name: name,
        nim: nim,
        prodi: prodi,
        utype: utype,
        password: password,
        _token: _token
      },
      success: function(response) {
        if (response.code == 200) {

          if (id != "") {
            $("#row_" + id + " td:nth-child(3)").html(response.data.name);
            $("#row_" + id + " td:nth-child(2)").html(response.data.nim);
            $("#row_" + id + " td:nth-child(6)").html(response.data.prodi);
            $("#row_" + id + " td:nth-child(7)").html(response.data.utype);
            $("#row_" + id + " td:nth-child(10)").html(response.data.password);
          } else {

            $('table tbody').append('<tr id="row_' + response.data.id + '"><td>' + response.data.id + '</td><td>' + response.data.nama + '</td><td>' + response.data.nim + '</td><td>' + response.data.prodi + '</td><td>' + response.data.utype + '</td><td>' + response.data.password + '</td><td><a href="javascript:void(0)" data-id="' + response.data.id + '" onclick="editPost(event.target)" class="btn btn-info">Edit</a></td><td><a href="javascript:void(0)" data-id="' + response.data.id + '" class="btn btn-danger" onclick="deletePost(event.target)">Delete</a></td></tr>');
          }

          $('#name').val('');
          $('#nim').val('');
          $('#prodi').val('');
          $('#password').val('');
          $('#utype').val('');
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
        $('#utypeError').text(response.responseJSON.errors.prodi);
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
    var utype = $('#utype-edit').val();
    var password = $('#password-edit').val();
    var id = $('#post_id-edit').val();

    let _url = `/sadmin`;
    let _token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({

      url: _url,
      type: "POST",
      data: {
        id: id,
        name: name,
        nim: nim,
        prodi: prodi,
        utype: utype,
        password: password,
        _token: _token
      },
      success: function(response) {
        if (response.code == 200) {
          if (id != "") {
            $("#row_" + id + " td:nth-child(2)").html(response.data.name);
            $("#row_" + id + " td:nth-child(3)").html(response.data.nim);
            $("#row_" + id + " td:nth-child(4)").html(response.data.prodi);
            $("#row_" + id + " td:nth-child(8)").html(response.data.utype);
            $("#row_" + id + " td:nth-child(10)").html(response.data.password);
          } else {
            $('table tbody').prepend('<tr id="row_' + response.data.id + '"><td>' + response.data.id + '</td><td>' + response.data.nama + '</td><td>' + response.data.nim + '</td><td>' + response.data.prodi + '</td><td>' + response.data.utype + '</td><td>' + response.data.password + '</td><td><a href="javascript:void(0)" data-id="' + response.data.id + '" onclick="editPost(event.target)" class="btn btn-info">Edit</a></td><td><a href="javascript:void(0)" data-id="' + response.data.id + '" class="btn btn-danger" onclick="deletePost(event.target)">Delete</a></td></tr>');
          }
          $('#name-edit').val('');
          $('#nim-edit').val('');
          $('#prodi-edit').val('');
          $('#utype-edit').val('');
          $('#password-edit').val('');
          $('#edit-modal').modal('hide');
          toastr.success(response.berhasil);
        }
      },

      error: function(response) {
        $('#nameError').text(response.responseJSON.errors.name);
        $('#nimError').text(response.responseJSON.errors.nim);
        $('#prodiError').text(response.responseJSON.errors.prodi);
        $('#utypeError').text(response.responseJSON.errors.utype);
        $('#passwordError').text(response.responseJSON.errors.password);
      }
    });
  }

  function deletePost(event) {
    var id = $(event).data("id");
    let _url = `/sadmin/${id}`;
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