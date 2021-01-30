<!DOCTYPE html>
<html lang="en">
@include('admin/admin_head')
<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        @include('admin/admin_header')
        @include('admin/admin_sidebar')
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Setting</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Setting</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->

            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-two">
                                    <header>
                                        <div class="avatar">
                                            <img src="{{asset('ela/images/avatar/1.png')}}" alt="Allison Walker" />
                                        </div>
                                    </header>
                                    @foreach($datas as $data)
                                    <h3>Tim :  {{$data->team_name}}<br>
                                        <small>{{$data->team_instansi}}</small> <br>
                                        <small class="label label-warning">
                                            @if($data->team_type == 1)
                                                Analog
                                            @else
                                                Mikrokontroller
                                            @endif
                                        </small>
                                    </h3>                  

                                    <div>
                                    </div>                                    
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <!-- Nav tabs -->
                            
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#ketua" role="tab">Ketua</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#anggota" role="tab">Anggota</a> </li>
                                @if($data->team_type != 2)
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#pembimbing" role="tab">Pembimbing</a> </li>
                                @endif
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#pembayaran" role="tab">Pembayaran</a> </li>
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#status" role="tab">Status</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            
                            <div class="tab-content">
                                    @if(session('update_sukses'))
                                    <div class="alert alert-success">
                                        {{session('update_sukses')}}
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    </div>                                     
                                    @endif
                                <div class="tab-pane" id="ketua" role="tabpanel">
                                    <div class="card-body">                                    
                                        <div id="tabel-ketua">                                                                 
                                            <div class="table-responsive">                                    
                                                <table class="table table-bordered" id="tabel-ketua">
                                                    <thead></thead>
                                                    <tbody>
                                                        <tr><td>Nama</td><td>{{$data->team_nama_ketua}}</td></tr>      
                                                        <tr><td>Jenis Kelamin</td><td>
                                                            @if($data->team_jekel_ketua == 1)
                                                                Laki - Laki
                                                            @else
                                                                Perempuan
                                                            @endif
                                                            </td></tr>      
                                                        <tr><td>Instagram</td><td>{{$data->team_instagram}}</td></tr>      
                                                        <tr><td>Email</td><td>{{$data->team_email_ketua}}</td></tr>      
                                                        <tr><td>Nomor Telepon</td><td>{{$data->team_notel_ketua}}</td></tr>      
                                                        <tr><td>Foto</td><td> <img 
                                                            @if($data->foto_ketua == NULL) 
                                                                src="{{asset('ela/images/noimage.png')}}" 
                                                            @else
                                                                src="{{asset('Data Peserta/Foto Ketua/'.$data->team_name.'/'.$data->foto_ketua)}}"
                                                            @endif
                                                            style="width:50%" alt=""> <br>
                                                        </td></tr>

                                                        <tr><td>Foto Kartu Identitas</td><td><img 
                                                        @if($data->foto_ketua == NULL) 
                                                            src="{{asset('ela/images/noimage.png')}}" 
                                                        @else
                                                            src="{{asset('Data Peserta/Foto Ketua/'.$data->team_name.'/'.$data->ktm_ketua)}}"
                                                        @endif
                                                        style="width:50%" alt=""><br>
                                                        </td></td></tr>      
                                                    </tbody>
                                                </table>
                                                <br>
                                                <button class="btn btn-primary" id="editKetua"> 
                                                    <span class="fa fa-pencil"></span>
                                                    Ubah Data Ketua
                                                </button>
                                            </div>
                                        </div>
                                        <div id="tabel-edit-ketua">
                                            <div class="table-responsive">
                                                <form action="{{url('/admin/admin_edit_ketua_tim')}}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <table class="table table-bordered" id="tabel-ketua">
                                                    <thead></thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Nama</td>
                                                            <td>
                                                                <input type="hidden" value="{{$data->id}}" name="id_tim">
                                                                <input type="text" name="team_ketua" class="form-control" value="{{$data->team_nama_ketua}}" required="required">                                                                
                                                            </td>
                                                        </tr>
                                                        

                                                        <tr>
                                                            <td>Jenis Kelamin</td>
                                                            <td><select name="team_jenis_kelamin" class="form-control" required="required">
                                                                    <option value="1">Laki - Laki</option>
                                                                    <option value="2">Perempuan</option>
                                                                </select
                                                            ></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Instagram</td>
                                                            <td><input type="text" name="team_instagram" class="form-control" value="{{$data->team_instagram}}" required="required"></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Email</td>
                                                            <td><input type="email" class="form-control" value="{{$data->team_email_ketua}}" disabled></td>
                                                            <td><input type="hidden" name="team_email_ketua" class="form-control" value="{{$data->team_email_ketua}}" required="required"></td>
                                                        </tr>      

                                                        <tr>
                                                            <td>Nomor Telepon</td>
                                                            <td><input type="number" class="form-control" value="{{$data->team_notel_ketua}}" name="team_ketua_notelpon" required="reuired"></td>                                                        
                                                        </tr>

                                                        <tr>
                                                            <td>Foto</td>
                                                            <td> 
                                                                <img 
                                                                @if($data->foto_ketua == NULL) 
                                                                    src="{{asset('ela/images/noimage.png')}}" 
                                                                @else
                                                                    src="{{asset('Data Peserta/Foto Ketua/'.$data->team_name.'/'.$data->foto_ketua)}}"
                                                                @endif
                                                                style="width:60%" alt=""> <br>
                                                                <input type="file" name="foto_ketua" class="form-control">
                                                                <small class="text-danger">
                                                                    *Foto harus berukuran kurang dari 400kb
                                                                </small>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Foto</td>
                                                            <td> 
                                                            <img 
                                                                @if($data->ktm_ketua == NULL) 
                                                                    src="{{asset('ela/images/noimage.png')}}" 
                                                                @else
                                                                    src="{{asset('Data Peserta/Foto Ketua/'.$data->team_name.'/'.$data->ktm_ketua)}}"
                                                                @endif
                                                                style="width:60%" alt=""> <br>
                                                                <input type="file" name="ktm_ketua" class="form-control">
                                                                <small class="text-danger">
                                                                    *Foto harus berukuran kurang dari 400kb
                                                                </small>
                                                            </td>
                                                        </tr>                                                          
                                                    </tbody>
                                                </table>

                                                <br>
                                                <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span>&nbsp;Simpan Data</button>
                                                <button type="button" id="cancel_ketua" class="btn btn-danger"><span class="fa fa-close"></span>&nbsp;Batalkan</button>
                                                <button type="reset" class="btn btn-success"><span class="fa fa-refresh"></span>&nbsp;Reset</button>
                                                </form>                                        
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="anggota" role="tabpanel">
                                    <div class="card-body">
                                        <div id="tabel-anggota">
                                            <div class="table-responsive">                                    
                                                <table class="table table-bordered">
                                                    <thead></thead>
                                                    <tbody>
                                                        <tr><td>Nama</td><td>{{$data->team_nama_anggota}}</td></tr>      
                                                        <tr><td>Jenis Kelamin</td><td>
                                                            @if($data->team_jekel_anggota == 1)
                                                                Laki - Laki
                                                            @else   
                                                                Perempuan
                                                            @endif
                                                            </td></tr>                                                      
                                                        <tr><td>Nomor Telepon</td><td>{{$data->team_notel_anggota}}</td></tr>      
                                                        <tr><td>Foto</td>
                                                        <td>
                                                            <img 
                                                                @if($data->foto_ketua == NULL) 
                                                                    src="{{asset('ela/images/noimage.png')}}" 
                                                                @else
                                                                    src="{{asset('Data Peserta/Foto Anggota/'.$data->team_name.'/'.$data->foto_anggota)}}"
                                                                @endif
                                                                style="width:60%" alt=""> <br>
                                                        </td></tr>      
                                                        <tr><td>Foto KTM</td>
                                                            <td>
                                                            <img 
                                                                @if($data->foto_ketua == NULL) 
                                                                    src="{{asset('ela/images/noimage.png')}}" 
                                                                @else
                                                                    src="{{asset('Data Peserta/Foto Anggota/'.$data->team_name.'/'.$data->ktm_anggota)}}"
                                                                @endif
                                                                style="width:60%" alt=""> <br>                                                            
                                                            </td>
                                                        </tr>      
                                                    </tbody>
                                                </table>
                                                <br>
                                                <button class="btn btn-primary" id="editAnggota"> 
                                                    <span class="fa fa-pencil"></span>
                                                    Ubah Data Anggota
                                                </button>
                                            </div>
                                        </div>

                                        <div id="tabel-edit-anggota">
                                            <div class="table-responsive">                                    
                                                <form action="{{url('/admin/admin_edit_anggota_tim')}}" enctype="multipart/form-data" method="post">
                                                    {{csrf_field()}}
                                                    <table class="table table-bordered">
                                                        <thead></thead>
                                                        <tbody>
                                                            <input type="hidden" value="{{$data->id}}" name="id_tim">
                                                            <tr><td>Nama</td><td> <input type="text" name="team_nama_anggota" required="required" value="{{$data->team_nama_anggota}}" class="form-control"></td></tr>      
                                                            <tr><td>Jenis Kelamin</td><td>
                                                                    <select name="team_jekel_anggota" required="required" class="form-control">
                                                                        <option value="1">Laki Laki</option>
                                                                        <option value="2">Perempuan</option>
                                                                    </select>
                                                                </td></tr>                                                      
                                                            <tr><td>Nomor Telepon</td><td> <input type="number" required="required" name="team_notel_anggota" value="{{$data->team_notel_anggota}}" class="form-control" ></td></tr>      
                                                            <tr><td>Foto</td>
                                                            <td>
                                                                <img 
                                                                @if($data->foto_anggota == NULL) 
                                                                    src="{{asset('ela/images/noimage.png')}}" 
                                                                @else
                                                                    src="{{asset('Data Peserta/Foto Anggota/'.$data->team_name.'/'.$data->foto_anggota)}}"
                                                                @endif
                                                                style="width:60%" alt=""> <br>
                                                                <input type="file" name="foto_anggota" class="form-control">
                                                                <small class="text-danger">
                                                                    *Foto harus berukuran kurang dari 400kb
                                                                </small>
                                                            </td></tr>      
                                                            <tr>
                                                            <td>Foto kartu Identitas</td>
                                                            <td>
                                                                <img 
                                                                @if($data->ktm_anggota == NULL) 
                                                                    src="{{asset('ela/images/noimage.png')}}" 
                                                                @else
                                                                    src="{{asset('Data Peserta/Foto Anggota/'.$data->team_name.'/'.$data->ktm_anggota)}}"
                                                                @endif
                                                                style="width:60%" alt=""> <br>
                                                                <input type="file" name="ktm_anggota" class="form-control">
                                                                <small class="text-danger">
                                                                    *Foto harus berukuran kurang dari 400kb
                                                                </small>
                                                            </td></tr>      
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                    <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span>&nbsp;Simpan Data</button>
                                                    <button type="button" id="cancel_pembimbing" class="btn btn-danger"><span class="fa fa-close"></span>&nbsp;Batalkan</button>
                                                    <button type="reset" class="btn btn-success"><span class="fa fa-refresh"></span>&nbsp;Reset</button>
                                                </form>
                                            </div>
                                        </div>                                                                  
                                    </div>
                                </div>
                                <!--third tab-->
                                @if($data->team_type != 2)
                                <div class="tab-pane" id="pembimbing" role="tabpanel">
                                    <div class="card-body">   
                                        <div id="tabel-pembimbing">
                                            <div class="table-responsive">                                    
                                                <table class="table table-bordered">
                                                    <thead></thead>
                                                    <tbody>
                                                        <tr><td>Nama </td><td>{{$data->team_nama_pembimbing}}</td></tr>      
                                                        <tr><td>Jenis Kelamin</td><td>
                                                            @if($data->team_jekel_pembimbing == 1)
                                                                Laki - Laki
                                                            @else   
                                                                Perempuan
                                                            @endif
                                                            </td></tr>                                                      
                                                        <tr><td>NIP</td><td>{{$data->team_nip_pembimbing}}</td></tr>      
                                                        <tr><td>Nomor Telepon</td><td>{{$data->team_notel_pembimbing}}</td></tr>      
                                                        <tr><td>Alamat</td><td>{{$data->team_alamat_pembimbing}}</td></tr>          
                                                        <tr><td>Foto Kartu Identitas</td>
                                                            <td>
                                                                <img 
                                                                @if($data->ktm_pembimbing == NULL) 
                                                                    src="{{asset('ela/images/noimage.png')}}" 
                                                                @else
                                                                    src="{{asset('Data Peserta/Foto Pembimbing/'.$data->team_name.'/'.$data->ktm_pembimbing)}}"
                                                                @endif
                                                                style="width:60%" alt=""> <br>
                                                        </td></tr>      
                                                    </tbody>
                                                </table>
                                                <br>
                                                <button class="btn btn-primary" id="editPembimbing"> 
                                                    <span class="fa fa-pencil"></span>
                                                    Ubah Data Pembimbing
                                                </button>
                                            </div>
                                        </div>

                                        <div id="tabel-edit-pembimbing">
                                            <div class="table-responsive">  
                                                <form action="{{url('admin/admin_edit_pembimbing_tim')}}" method="post" enctype="multipart/form-data">                                  
                                                {{csrf_field()}}
                                                <table class="table table-bordered">
                                                    <thead></thead>
                                                    <tbody>
                                                        <input type="hidden" name="id_tim" value="{{$data->id}}">
                                                        <tr><td>Nama </td><td><input type="text" class="form-control" required="required" name="team_nama_pembimbing" value="{{$data->team_nama_pembimbing}}"></td></tr>      
                                                        <tr><td>Jenis Kelamin</td><td>
                                                            <select name="team_jekel_pembimbing" class="form-control">
                                                                <option value="1">Laki - Laki</option>
                                                                <option value="2">Perempuan</option>
                                                            </select>
                                                            </td></tr>                                                      
                                                        <tr><td>NIP</td><td> <input type="text" name="team_nip_pembimbing" value="{{$data->team_nip_pembimbing}}" class="form-control"></td></tr>      
                                                        <tr><td>Nomor Telepon</td><td><input type="number" name="team_notel_pembimbing" value="{{$data->team_notel_pembimbing}}" class="form-control" required="required"></td></tr>      
                                                        <tr><td>Alamat</td><td><textarea name="team_alamat_pembimbing" class="form-control"  rows="10">{{$data->team_alamat_pembimbing}}</textarea></td></tr>      
                                                        <tr><td>Foto Kartu Identitas</td>
                                                            <td>
                                                                <img 
                                                                @if($data->ktm_pembimbing == NULL) 
                                                                    src="{{asset('ela/images/noimage.png')}}" 
                                                                @else
                                                                    src="{{asset('Data Peserta/Foto Pembimbing/'.$data->team_name.'/'.$data->ktm_pembimbing)}}"
                                                                @endif
                                                                style="width:60%" alt=""> <br>
                                                                <input type="file" name="ktm_pembimbing" class="form-control">
                                                                <small class="text-danger">
                                                                    *Foto harus berukuran kurang dari 400kb
                                                                </small>
                                                        </td></tr> 
                                                    </tbody>
                                                </table>
                                                <br>
                                                <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span>&nbsp;Simpan Data</button>
                                                <button type="button" id="cancel_pembimbing" class="btn btn-danger"><span class="fa fa-close"></span>&nbsp;Batalkan</button>
                                                <button type="reset" class="btn btn-success"><span class="fa fa-refresh"></span>&nbsp;Reset</button>
                                                </form>
                                            </div>
                                        </div> 

                                    </div>
                                </div>
                                @endif
                                <div class="tab-pane" id="pembayaran" role="tabpanel">
                                    <br>
                                    <div class="card-body row">                                                                  
                                        <div class="col-md-6">
                                            <img                                             
                                            @if($data->bukti_bayar == NULL) 
                                                src="{{asset('ela/images/noimage.png')}}" 
                                            @else
                                                src="{{asset('Data Peserta/Bukti Bayar/'.$data->team_name.'/'.$data->bukti_bayar)}}"
                                            @endif                                            
                                            
                                            width="100%">
                                                <div id="bukti-bayar-area">
                                                    <h1>{{$data->bukti_bayar}}</h1>
                                                    <form action="{{url('/admin/admin_edit_buktibayar')}}" enctype="multipart/form-data" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" value="{{$data->id}}" name="team_id">
                                                    <input type="file" name="bukti_bayar">
                                                    <small class="text-danger">
                                                        *Foto harus berukuran kurang dari 400kb
                                                    </small>
                                                     <br> <br>
                                                    <button type="submit" class="btn btn-primary">
                                                        <span class="fa fa-upload"></span>
                                                        &nbsp;Unggah
                                                    </button>
                                                    <button type="button" class="btn btn-danger" id="cancel-pembayaran">
                                                        <span class="fa fa-close"></span>
                                                        Batal
                                                    </button>
                                                    </form>
                                                </div>
                                            <center>
                                                <button class="btn btn-primary" id="edit-pembayaran">
                                                    <span class="fa fa-pencil"></span>&nbsp;
                                                    Perbarui Bukti Bayar
                                                </button>
                                            </center>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Petunjuk Pembayaran</h3>
                                            <b class="text-danger">PENTING!</b><br>
                                            <p class="instruksi-bayar">
                                            Biaya pendaftaran untuk kategori <b>Analog</b> sebesar <b>Rp. 210.000,-</b> dan untuk kategori <b>Mikrokontroller</b> sebesar <b>Rp. 230.000,-.</b><br>
                                            Kirim biaya pendaftaran dengan cara transfer ke Bank BRI. <b>Nomor rekening : 0836587837 a/n Muhammad Iqbal Akbar.</b>
                                            Segera lakukan pembayaran dan upload foto bukti transaksi pembayaran.
                                            Bila pembayaran sudah lunas dan data sudah divalidasi oleh admin, maka anda dapat mendownload file arena lomba.
                                            File arena lomba dapat didownload melalui pilihan  File Lomba pada menu navigasi.
                                            <br>
                                            <small class="text-danger  ">* Form upload bukti transaksi pembayaran dapat ditutup sewaktu-waktu tanpa pemberitahuan bila kuota atau batas waktu pendaftaran sudah terpenuhi.</small>
                                            </p>
                                        </div>
                                    </div>                                    
                                </div>

                                <div class="tab-pane active" id="status" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th colspan="2"><center>Status Validasi Tim</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Validasi Email</td>                                                
                                                    <td>                                                        
                                                        @if($data->verif_email == 1)
                                                            <div class="alert alert-success">
                                                                <center>
                                                                    <h4> <span class="fa fa-check"></span>&nbsp;Valid</h4>
                                                                </center>
                                                            </div>
                                                        @else
                                                            <div class="alert alert-danger">
                                                                <center>
                                                                    <h4> <span class="fa fa-close"></span>&nbsp;Tidak Valid</h4>
                                                                </center>
                                                            </div>
                                                        @endif                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Validasi Data Tim</td>                                                
                                                    <td>
                                                        @if($data->kunci_data == 0 && $data->sek != 1)
                                                            <div class="alert alert-warning">
                                                                <center>
                                                                    <h4> <span class="fa fa-key"></span>&nbsp;Data Belum Dikunci</h4>
                                                                </center>
                                                            </div>
                                                        @elseif($data->kunci_data == 1 && $data->sek == 0)
                                                            <div class="alert alert-primary">
                                                                <center>
                                                                    <h4> <span class="fa fa-user"></span>&nbsp;Menunggu Proses Validasi</h4>
                                                                </center>
                                                            </div>
                                                        @elseif($data->kunci_data == 1 && $data->sek == 2)
                                                            <div class="alert alert-danger">
                                                                <center>
                                                                    <h4> <span class="fa fa-close"></span>&nbsp;Data Tidak Valid</h4>
                                                                </center>
                                                            </div>
                                                        @else
                                                            <div class="alert alert-success">
                                                                <center>
                                                                    <h4> <span class="fa fa-check"></span>&nbsp;Valid</h4>
                                                                </center>
                                                            </div>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Validasi Pembayaran
                                                    </td>
                                                    <td>
                                                        @if($data->kunci_data == 0 && $data->ben != 1)
                                                            <div class="alert alert-warning">
                                                                <center>
                                                                    <h4> <span class="fa fa-key"></span>&nbsp;Data Belum Dikunci</h4>
                                                                </center>
                                                            </div>
                                                        @elseif($data->kunci_data == 1 && $data->ben == 0)
                                                            <div class="alert alert-primary">
                                                                <center>
                                                                    <h4> <span class="fa fa-user"></span>&nbsp;Menunggu Proses Validasi</h4>
                                                                </center>
                                                            </div>
                                                        @elseif($data->kunci_data == 1 && $data->ben == 2)
                                                            <div class="alert alert-danger">
                                                                <center>
                                                                    <h4> <span class="fa fa-close"></span>&nbsp;Data Tidak Valid</h4>
                                                                </center>
                                                            </div>
                                                        @else
                                                            <div class="alert alert-success">
                                                                <center>
                                                                    <h4> <span class="fa fa-check"></span>&nbsp;Valid</h4>
                                                                </center>
                                                            </div>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kelolosan</td>                                                
                                                    <td>
                                                        @if($data->lolos == 1)
                                                            <div class="alert alert-success">
                                                                <center>
                                                                    <h4> <span class="fa fa-check"></span>&nbsp;Selamat Anda Lolos Seleksi</h4>
                                                                </center>
                                                            </div>
                                                        @elseif($data->lolos == 0)
                                                            <div class="alert alert-primary">
                                                                <center>
                                                                    <h4> <span class="fa fa-user"></span>&nbsp;Menunggu Proses Validasi</h4>
                                                                </center>
                                                            </div>
                                                        @elseif($data->lolos == 2)
                                                            <div class="alert alert-danger">
                                                                <center>
                                                                    <h4> <span class="fa fa-close"></span>&nbsp;Maaf Anda Tidak Lolos</h4>
                                                                </center>
                                                            </div>
                                                        @elseif($data->lolos == 3)
                                                        <div class="alert alert-danger">
                                                                <center>
                                                                    <h5> <span class="fa fa-close"></span>&nbsp;Mohon maaf anda didiskualifikasi dari LTDC 2019</h5>
                                                                </center>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                        <br>
                                        <h4> <b>Petunjuk Validasi : </b></h4>
                                        <ul>
                                            <li>- Validasi dilakukan pada tiga hal : <b> Email Tim, Biodata Tim, dan Data Pembayaran Tim</b></li>
                                            <li>- Validasi Email dilakukan secara otomoatis setelah Tim mendaftar</li>
                                            <li>- Sekretaris hanya bisa memvalidasi <b>Biodata Tim</b> </li>
                                            <li>- Bendahara hanya bisa memvalidasi <b>Data Pembayaran Tim</b> </li>
                                            <li>- Ketupel dapat memvalidasi <b>Biodata Tim dan Data Pembayaran Tim</b> </li>
                                            <li>- Tim boleh diloloskan jika biodata dan data pembayaran dinyatakan valid</li>
                                        </ul>
                                        <br>
                                    
                                    @if(Session::get('tipe_admin') == 1 || Session::get('tipe_admin') == 2)                                                          
                                        Lakukan Validasi Biodata:
                                        <small class="text-danger">Validasi ini hanya dapat dilakukan sekretaris</small><br>
                                        <div class="btn-group">
                                            @if($data->sek == 0)
                                            <a href="{{url('/validasi_biodata/'.$data->id)}}" class="btn btn-primary"><span class="fa fa-user-circle"> Validasi Biodata</span></a>
                                            @else
                                            <a href="{{url('/batal_biodata/'.$data->id)}}" class="btn btn-primary"><span class="fa fa-undo"> Batalkan Validasi Biodata</span></a>
                                            @endif
                                            <a href="{{url('/gagal_biodata/'.$data->id)}}" class="btn btn-danger"><span class="fa fa-close"> Gagalkan Biodata Tim</span></a>                                            
                                        </div>
                                    @endif

                                         <br>
                                         <br>
                                    @if(Session::get('tipe_admin') == 1 || Session::get('tipe_admin') == 3)                        
                                        Lakukan Validasi Data Pembayaran:
                                        <small class="text-danger">Validasi hanya dapat dilakukan oleh bendahara</small><br>                                        
                                        <div class="btn-group">
                                            @if($data->ben == 0) 
                                            <a href="{{url('/validasi_pembayaran/'.$data->id)}}" class="btn btn-primary"><span class="fa fa-money"> Validasi Pembayaran</span></a>
                                            @else
                                            <a href="{{url('/batal_pembayaran/'.$data->id)}}" class="btn btn-warning"><span class="fa fa-undo"> Batalkan Validasi Pembayaran</span></a>
                                            @endif                                                                                      
                                            <a href="{{url('/gagal_pembayaran/'.$data->id)}}" class="btn btn-danger"><span class="fa fa-close"> Gagalkan Validasi Pembayaran</span></a>
                                            
                                        </div>
                                        <br>
                                        <br>
                                    @endif

                                    @if(Session::get('tipe_admin') == 1 )                        
                                        Putuskan Kelolosan Tim :
                                        <small class="text-danger">Memutuskan kelolosan hanya dapat dilakukan oleh sekretaris dan ketupel</small>
                                        <div class="btn-group">  
                                            @if($data->lolos == 0)
                                            <a href="{{url('/lolos_tim/'.$data->id)}}" class="btn btn-success"><span class="fa fa-trophy"> Loloskan Tim</span></a>                                            
                                            @else
                                            <a href="{{url('/batal_lolos/'.$data->id)}}" class="btn btn-success"><span class="fa fa-undo"> Batalkan</span></a>                                            
                                            @endif
                                            <a href="{{url('/tidak_lolos/'.$data->id)}}" class="btn btn-danger"><span class="fa fa-close"> Gagalkan Tim</span></a>                                            
                                            <a href="{{url('/diskualifikasi/'.$data->id)}}" class="btn btn-warning"><span class="fa fa-fire"> Diskualifikasi Tim</span></a>                                   
                                            <a href="{{url('/buka_kunci/'.$data->id)}}" class="btn btn-primary"><span class="fa fa-key"> Buka Penguncian Data</span></a>                                                     
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Column -->
                </div>

                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
                               
               
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="{{ asset('ela/js/lib/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('ela/js/lib/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('ela/js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('ela/js/jquery.slimscroll.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('ela/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{ asset('ela/js/lib/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->

    <script src="{{ asset('ela/js/custom.min.js')}}"></script>

    <script src="{{asset('ela/js/lib/datatables/datatables.min.js')}}"></script>

    <script src="{{ asset('ela/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js') }}"></script>    
    <script src="{{ asset('ela/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('ela/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js')}}"></script>
    <script src="{{ asset('ela/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js')}}"></script>
    <script src="{{ asset('ela/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js')}}"></script>
    <script src="{{ asset('ela/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('ela/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js')}}"></script>    
    <script>
        $(document).ready(function(){
            $("#myTable").DataTable();

            $("#tabel-edit-ketua").hide();
            $("#editKetua").click(function(){
                $("#tabel-ketua").hide();
                $("#tabel-edit-ketua").show();
                $
            });
            $("#cancel_ketua").click(function(){
                $("#tabel-ketua").show();
                $("#tabel-edit-ketua").hide();
                $
            });


            $("#tabel-edit-anggota").hide();
            $("#editAnggota").click(function(){
                $("#tabel-anggota").hide();
                $("#tabel-edit-anggota").show();
                $
            });
            $("#cancel_anggota").click(function(){
                $("#tabel-anggota").show();
                $("#tabel-edit-anggota").hide();
                $
            });

            $("#tabel-edit-pembimbing").hide();
            $("#editPembimbing").click(function(){
                $("#tabel-pembimbing").hide();
                $("#tabel-edit-pembimbing").show();
                
            });
            $("#cancel_pembimbing").click(function(){
                $("#tabel-pembimbing").show();
                $("#tabel-edit-pembimbing").hide();
                $
            });

            $("#bukti-bayar-area").hide();
            $("#edit-pembayaran").click(function(){
                $("#bukti-bayar-area").show();
                $(this).hide();
            });
            $("#cancel-pembayaran").click(function(){
                $("#bukti-bayar-area").hide();
                $("#edit-pembayaran").show();
            });
        });
    </script>
</body>

</html>