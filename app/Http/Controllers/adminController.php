<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use File;

class adminController extends Controller
{
    public function index(){
        return view('admin/admin');     
    }

    public function setting(){
        return view('admin/admin_setting');     
    }


    public function regiss(){
        return view('user/register-new');
    }

    public function tambahAdmin(Request $request){
        $add = DB::table('admin')->insert([
                'username'   =>   $request->username_admin,
                'password'   =>   md5($request->pwd_admin),
                'nama_admin' =>   $request->nama_admin,
                'tipe'       =>   $request->jabatan_admin
        ]);
        return redirect(url('/setting_admin'));
    }
    
    public function hapusAdmin($id){
        $delete = DB::table('admin')
                  ->where('id',$id)
                  ->delete();
        return redirect(url('/setting_admin'));
    }


    public function detailTim($id){
        $datas = DB::table('team')
                 ->where('id',$id)
                 ->get();
        $dam = $this->getAdminId(session('id_admin'));
        return view('admin/admin_detail',compact('datas','dam'));
    }

    public function butuh_perhatian($kolom,$val){
        $tims = DB::table('team')				
                ->where($kolom,$val )
                ->get();
        return $tims;
    }
    
    public function needValidator($kolom,$val){
        $tims = DB::table('team')	
				 ->where('kunci_data',1)
                 ->where($kolom,$val)                 
                 ->get();
        return $tims;
    }

    public function validasiBiodata($id){
        $result = DB::table('team')
                ->where('id',$id)
                ->update([
                  'sek' => '1'  
                ]);
        $getData = DB::table('team')
                ->where('id',$id)
                ->get();
        
        foreach($getData as $data){
            $lulus = $data->lolos;
            $bendahara = $data->ben;
        }

        if($bendahara == 1 && $lulus != 1 && $lulus != 2){
            $loloskan = $this->lolosTim($id);
            if($loloskan == "lolos"){
                return redirect('admin/team/detail/'.$id)->with('update_sukses','Validasi Biodata Berhasil Dilakukan dan Tim Lolos');    
            }
        }elseif($bendahara == 2 && $lulus != 1){
            $gagalkan = $this->tidakLolos($id);
            if($gagalkan == "gagal"){
                return redirect('admin/team/detail/'.$id)->with('update_sukses','Validasi Biodata Berhasil Ditolak dan Tim Tidak Lolos');                    
            }
        }else{
            return redirect('admin/team/detail/'.$id)->with('update_sukses','Validasi Biodata Berhasil Dilakukan');
        }                
    }

    public function batalBiodata($id){
        $result = DB::table('team')
                ->where('id',$id)
                ->update([
                  'sek' => '0',
                  'lolos'   => '0'  
                ]);
        return redirect('admin/team/detail/'.$id)->with('update_sukses','Validasi Biodata Berhasil Dibatalkan');
    }

    public function gagalBiodata($id){
        $result = DB::table('team')
                ->where('id',$id)
                ->update([
                  'sek' => '2'  
                ]);

                $getData = DB::table('team')
                ->where('id',$id)
                ->get();
                
                
                $gagalkan = $this->tidakLolos($id);
                if($gagalkan == "gagal"){
                        return redirect('admin/team/detail/'.$id)->with('update_sukses','Validasi Biodata Berhasil Dilakukan dan Tim Tidak Lolos');                                                    
                }else{                
                    return redirect('admin/team/detail/'.$id)->with('update_sukses','Validasi Biodata Berhasil tidak diloloskan');
                }                
        // return redirect('admin/team/detail/'.$id)->with('update_sukses','Biodata yang anda inputkan tidak valid');
    }


    public function validasiPembayaran($id){
        $result = DB::table('team')
                ->where('id',$id)
                ->update([
                  'ben' => '1'  
                ]);
                $getData = DB::table('team')
                ->where('id',$id)
                ->get();
        
        foreach($getData as $data){
            $lulus = $data->lolos;
            $sek = $data->sek;
        }

        if($sek == 1 && $lulus != 1 && $lulus != 2){
            $loloskan = $this->lolosTim($id);
            if($loloskan == "lolos"){
                return redirect('admin/team/detail/'.$id)->with('update_sukses','Validasi Pembayaran Berhasil Dilakukan dan Tim Lolos');                    
            }
        }else{
            return redirect('admin/team/detail/'.$id)->with('update_sukses','Validasi Pembayaran Berhasil Dilakukan');
        }        
        
    }

    public function batalPembayaran($id){
        $result = DB::table('team')
                ->where('id',$id)
                ->update([
                  'ben'     => '0',
                  'lolos'   => '0'
                ]);        
        return redirect('admin/team/detail/'.$id)->with('update_sukses','Validasi Pembayaran Berhasil Dibatalkan');
    }
    
    public function gagalPembayaran($id){
        $result = DB::table('team')
                ->where('id',$id)
                ->update([
                  'ben' => '2'  
                ]);

        $getData = DB::table('team')
        ->where('id',$id)
        ->get();        
        
        $gagalkan = $this->tidakLolos($id);
        if($gagalkan == "gagal"){
            return redirect('admin/team/detail/'.$id)->with('update_sukses','Validasi Pembayaran Berhasil Dilakukan dan Tim Tidak Lolos');                    
                    
        }else{                
            return redirect('admin/team/detail/'.$id)->with('update_sukses','Data pembayaran tidak diloloskan');
        }
    }
    
    public function lolosTim($id){
        $result = DB::table('team')
                ->where('id',$id)
                ->update([
                  'lolos' => '1'  
                ]);
        return 'lolos';
    }


    public function bukaKunci($id){
        $result = DB::table('team')
                ->where('id',$id)
                ->update([
                  'lolos'   => 0,  
                  'sek'     => 0,  
                  'ben'     => 0,
                  'kunci_data' => 0
                ]);
                return redirect('admin/team/detail/'.$id)->with('update_sukses','Penguncian Data Berhasil Dibuka Kembali');
    }

    public function batalLolos($id){
        $result = DB::table('team')
                ->where('id',$id)
                ->update([
                'sek'       => '0',
                  'lolos'   => '0',
                  'ben'     => '0'  
                ]);
        return redirect('admin/team/detail/'.$id)->with('update_sukses','Tim Batal Diloloskan');
    }

    public function tidakLolos($id){
        $result = DB::table('team')
                ->where('id',$id)
                ->update([
                  'lolos' => '2'  
                ]);
        return "gagal";
        // return redirect('admin/team/detail/'.$id)->with('update_sukses','Tim Batal Diloloskan');
    }
    
    public function diskualifikasiTim($id){
        $result = DB::table('team')
                ->where('id',$id)
                ->update([
                  'lolos' => '3'  
                ]);
        return redirect('admin/team/detail/'.$id)->with('update_sukses','Tim Telash di Diskualifikasi');
    }
    


    public function countColumn($kolom,$val){
        $tims = DB::table('team')
                ->where($kolom,$val)
                ->count();
        return $tims;
    }

    public function getPeserta(){
        $tims = DB::table('team')                
                ->get();
        return $tims;
    }

    public function getAdmin(){        
        $result = DB::table('admin')                
                ->get();        
        return $result;
    }

    public function getAdminId($id){      
        $result = DB::table('admin')                
                ->where('id',$id)
                ->get();        
        return $result;
    }

    public function showDashboard(){
        $sek         = $this->needValidator('sek',0);
        $ben         = $this->needValidator('ben',0);
        $countAnalog = $this->countColumn('team_type',1);
        $countMikro  = $this->countColumn('team_type',2);
        $countLolos  = $this->countColumn('lolos',1);
        $countDis    = $this->countColumn('lolos',3);
        $dam       = $this->getAdminId(session('id_admin'));
        return view('admin/admin', compact('countAnalog','countMikro','sek','ben','countLolos','countDis','dam'));
    }

    public function strangeTim(){
        $all = $this->butuh_perhatian('verif_email',0);
        $dam       = $this->getAdminId(session('id_admin'));
        $analog    = DB::table('team')
                     ->where('team_type',1)
                     ->where('verif_email',0)
                     ->get();

        $mikro    = DB::table('team')
                     ->where('team_type',2)
                     ->where('verif_email',0)
                     ->get();                     
        return view('admin/stranger_tim', compact('all','analog','mikro','dam'));
    }
    
    public function deleteStrangeTim($id){
        $del = DB::table('team')->where('id',$id)->delete();
        return redirect(url('/admin/stranger-team'));  
    }

    public function showTim(){
        $analog     = $this->butuh_perhatian('team_type',1);
        $mikro      = $this->butuh_perhatian('team_type',2);
        $all        = $this->getPeserta();
        $dam      = $this->getAdminId(session('id_admin'));
        return view('admin/team',compact('analog','mikro','all','dam'));
    }

    public function showTimLolos(){    
        $all       = $this->butuh_perhatian('lolos',1);    
        $dam       = $this->getAdminId(session('id_admin'));
        $analog    = DB::table('team')
                     ->where('team_type',1)
                     ->where('lolos',1)
                     ->get();

        $mikro    = DB::table('team')
                     ->where('team_type',2)
                     ->where('lolos',1)
                     ->get(); 
        return view('admin/team_lolos',compact('analog','mikro','all','dam'));
    }


    public function loginAdmin(Request $request){
        $logins = DB::table('admin')
                ->where('username', $request->email)
                ->where('password', md5($request->pass))
                ->count();
        if($logins == 1){
            $getDataAdmin = DB::table('admin')
                            ->where('username', $request->email)
                            ->where('password', md5($request->pass))
                            ->get();
            
            foreach($getDataAdmin as $data){
                session(['id_admin'  => $data->id]);
                session(['tipe_admin'  => $data->tipe]);            
            }
            return redirect(url('/admin'));
        }else{
            return redirect(url('/login_admin'))->with('login_admin_gagal','username atau password salah');
        }
    }   
    
    public function logout(){
        // Session::flush();
        Session::forget('id_admin');        
        Session::forget('tipe_admin');
        return redirect('/login_admin');
    }

    
    public function settingRegis(){
        $result = DB::table('pengaturan')->get();
        foreach($result as $atur){
            $tgl1 = strtotime("$atur->tgl_buka");
            $tgl2 = strtotime("$atur->tgl_tutup");
            $today = strtotime(date("y-m-d"));
            if($today >= $tgl2){
                return 0;
            }else{
                return 1;
            }
        }   
    }

    public function bukaRegis(){
        $result = DB::table('pengaturan')->get();
        $today = strtotime(date("y-m-d"));
        foreach($result as $atur){
            $tgl2 = strtotime("$atur->tgl_buka");
        }

        if($today < $tgl2){
            return 0;
        }else{
            return 1;
        }
    }

    public function berkas(){
        $result = DB::table('pengaturan')->get();
        $today = strtotime(date("y-m-d"));
        foreach($result as $atur){
            $berkas = strtotime("$atur->batas_berkas");
        }

        if($today >= $berkas){
            return 1;
        }else{
            return 0;
        }
    }

    public function maintenance(){
        $result = DB::table('pengaturan')->get();        
        foreach($result as $atur){
            $maint = $atur->maintenance;
        }
        return $maint;
    }

    public function settingAdmin(){ 
        $idadmin = session('id_admin');
        $dataz  = $this->getAdmin();
        $dam  = $this->getAdminId($idadmin);
        $result = DB::table('pengaturan')->get();
        return view('admin/setting_admin',compact('dataz','result','dam'));
    }

    public function settingSponsor(){
        $getSponsor = DB::table('sponsor')->get();
        $dam  = $this->getAdminId(session('id_admin'));
        return view('admin/setting_sponsor',compact('dam','getSponsor'));
    }

    public function showFileInfo(){
        $dam  = $this->getAdminId(session('id_admin'));
        $getInfo = $this->getFileInfo();
        return view('admin/admin_file_info',compact('dam','getInfo'));
    }

    public function showTambahManual(){
        $dam  = $this->getAdminId(session('id_admin'));
        return view('admin/admin_tambah_manual',compact('dam'));
    }

    public function tambahFileInfo(Request $request){
        $add = DB::table('file_info')->insert([
              'nama_file' => $request->nama_file,
              'kategori'  => $request->tipe,
              'link'      => $request->link_file  
        ]);
        return redirect(url('/setting_info'));  
    }

    public function deleteFileInfo($id){
        $del = DB::table('file_info')->where('id',$id)->delete();
        return redirect(url('/setting_info'));  
    }

    public function getFileInfo(){
        $infos = DB::table('file_info')->get();
        return $infos;
    }

    // /file teknis
    public function showFileTeknis(){
        $dam  = $this->getAdminId(session('id_admin'));
        $getTeknis = $this->getFileteknis();
        return view('admin/admin_file_teknis',compact('dam','getTeknis'));
    }

    public function tambahFileTeknis(Request $request){
        $add = DB::table('file_teknis')->insert([
              'nama_file' => $request->nama_file,
              'kategori'  => $request->tipe,
              'link'      => $request->link_file,
              'tipe_file' => $request->tipe_file
        ]);
        return redirect(url('/setting_teknis'));  
    }

    public function deleteFileTeknis($id){
        $del = DB::table('file_teknis')->where('id',$id)->delete();
        return redirect(url('/setting_teknis'));  
    }

    public function getFileTeknis(){
        $tekniss = DB::table('file_teknis')->get();
        return $tekniss;
    }

    public function aturWeb(Request $request){
       $result= DB::table('pengaturan')
                ->where('id',1)
                ->update([
                    'kuota_analog'   => $request->kuota_analog,
                    'kuota_mikro'    => $request->kuota_mikro,
                    'tgl_buka'       => $request->regis_buka,
                    
                    'tgl_tutup'      => $request->regis_tutup,
                    'maintenance'    => $request->maintenance,
                    'batas_berkas'   => $request->batas_berkas, 

                ]);
        return redirect(url('/setting_admin'));
    }

    public function tambahSponsor(Request $request){
        $file = $request->image_sponsor;
        $size = $file->getSize();
        if($size >= 200000 ){            
            return redirect('/setting_sponsor')->with('upload_warning','Ukuran file tidak boleh lebih dari 200kb , compress gambar melalui link berikut ');
        }else{  
        
            $ins = DB::table('sponsor')
                    ->insert([
                        'keterangan'    => $request->keterangan,
                        'tipe'          => $request->tipe,                    
                    ]);

            $get = DB::table('sponsor')->latest('upload_time')->first();       
            $id = $get->id;        
        }
        
        $aplot = $this->updateImageSponsor($id,$request->image_sponsor,'image','SMP');
        if($aplot == "Berhasilupload"){
            return redirect('/setting_sponsor')->with('upload_warning','File berhasil ditambahkan');
        }
    }
    public function updateImageSponsor($id,$file_nama,$kolom,$kode){            
        $id_foto = $id;
        $getFoto =  DB::table('sponsor')
                    ->where('id',$id_foto)
                    ->get();
        foreach($getFoto as $foto){
            $tempfoto   = $foto->$kolom;            
        }
      
            $tujuan_file = 'Sponsor/';           
            $file = $file_nama;
            $ekstensi = $file->getClientOriginalExtension();
            $namafile = "$kode".$id_foto.'.'.$ekstensi;
            if($tempfoto == NULL){
                $pindahin =  $file->move($tujuan_file,$namafile);
                if($pindahin){
                    $update_foto_ketua = DB::table('sponsor')
                                        ->where('id',$id)
                                        ->update([
                                            $kolom => $namafile
                                        ]);
                    if($update_foto_ketua){
                        return 'Berhasilupload';                                                
                    }                         
                }
            }else{
                if(file_exists($tujuan_file.'/'.$tempfoto)){                        
                    $delfile = File::delete($tujuan_file.'/'.$tempfoto);
                    if($delfile){
                        $pindahin =  $file->move($tujuan_file,$namafile);
                        if($pindahin){ 
                            $update_foto_ketua = DB::table('sponsor')
                                                ->where('id',$id)
                                                ->update([
                                                    $kolom => $namafile
                                                ]);
                                                
                            return 'Berhasilupload';                                                                            
                    }
                    }else{
                        return 'Berhasilupload';                                                
                    } 
                        
                }else{
                    $pindahin =  $file->move($tujuan_file,$namafile);
                    if($pindahin){
                        $update_foto_ketua = DB::table('sponsor')
                                            ->where('id',$id)
                                            ->update([
                                                $kolom => $namafile
                                            ]);
                        if($update_foto_ketua){
                            return 'Berhasilupload';                                                
                        }                         
                    }
                }
            }                      
    }

    public function deleteSponsor($id){
        $gets = DB::table('sponsor')->where('id',$id)->get();
        foreach($gets as $datas){
            $foto = $datas->image;
        }
        $del = DB::table('sponsor')->where('id',$id)->delete();
        if(file_exists('Sponsor/'.$foto)){                        
            $delfile = File::delete('Sponsor/'.$foto);
            return redirect(url('/setting_sponsor'))->with('hapus_sponsor','Sukses Menghapus sponsor');
        }
    }


}
