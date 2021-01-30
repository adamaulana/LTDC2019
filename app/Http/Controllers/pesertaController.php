<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\LTDC2019;
use Illuminate\Support\Facades\Mail;
use Session;
use File;
class emailController{
    public function kirimEmail($tujuan,$nama,$keyVerif){
        Mail::to("$tujuan")->send(new LTDC2019($nama,$keyVerif));                
    }
}

class pesertaController extends Controller
{
    protected $layananEmail;
    public function __construct(emailController $emailController){
        $this->layananEmail = $emailController;
    }

    public function index(){
        $getSponsor = $this->getSponsorMedia(1);
        $getMedpart = $this->getSponsorMedia(2);
        return view('user/index',compact('getSponsor','getMedpart'));     
    }

    public function getSponsorMedia($tipe){
        $result = DB::table('sponsor')
        ->where('tipe',$tipe)
        ->get();
        return $result;
    }

    public function getData(){
        $id = session('id_tim');
        $tims = DB::table('team')
                ->where('id',$id)
                ->get();
        return view('user/user_dashboard',['datas' => $tims]);      
    }
    
    public function petunjuk(){
        $id = session('id_tim');
        $datas = DB::table('team')
                ->where('id',$id)
                ->get();
        return view('user/user_petunjuk_registrasi',compact('datas'));
    }

    public function file_info(){
        $id = session('id_tim');
        $tipes = session('tipe_tim');
        $datas = DB::table('team')
                ->where('id',$id)
                ->get();
        $infos = DB::table('file_info')
                ->where('kategori',$tipes)
                ->orWhere('kategori',3)
                ->get();
        return view('user/user_file_info',compact('datas','infos'));
    }

    public function file_lomba(){
        $id = session('id_tim');
        $tipes = session('tipe_tim');
        $datas = DB::table('team')
                ->where('id',$id)
                ->get();
        $lombas = DB::table('file_teknis')
                ->where('kategori',$tipes)
                ->orWhere('kategori',3)
                ->where('tipe_file',1)
                ->get();
        $rulebook = DB::table('file_teknis')
                    ->where('tipe_file',2)                    
                    ->where('kategori',$tipes)
                    ->orWhere('kategori',3)
                    ->get();
        return view('user/user_file_lomba',compact('datas','lombas','rulebook'));
    }
    
    public function loginPeserta(Request $request){
        $logins = DB::table('team')
                ->where('team_email_ketua', $request->email)
                ->where('team_password', md5($request->pass))
                ->count();
        if($logins != 0){
            $getDataPeserta = DB::table('team')
                ->where('team_email_ketua', $request->email)
                ->where('team_password', md5($request->pass))
                ->get();

            foreach($getDataPeserta as $val){
                $id_tim                =   $val->id;                              
                $verification_email    =   $val->verif_email;                
                $tipes                 =   $val->team_type;                
            }
            session(['id_tim' => $id_tim]);
            session(['tipe_tim' => $tipes]);

            if($verification_email != 0){                
                session(['verif_email'  => $verification_email]);
                return redirect('/user_dashboard');                                 
            }else{                
                return redirect('/verif');
            }
            
        }else{
            return redirect('/login')->with('login_gagal','Maaf username atau password anda tidak tepat');
        }
    }

    public function kunciData($id){
        $result = DB::table('team')
                ->where('id',$id)
                ->update([
                  'kunci_data' => '1'  
                ]);
        return redirect(url('/user_dashboard'))->with('update_sukses','Data Berhasil Dikunci');
    }    

    public function verifPeserta(Request $request){        
        $id_tim     = session('id_tim');        
        $searchTim = DB::table('team')
                ->where('id',$id_tim)
                ->get();
            foreach($searchTim as $getTim){
                $verif = $getTim->kode_verif;
            }
            
            if($verif == $request->verifcode){               
                $update_verif = DB::table('team')
                                 ->where('id',$id_tim)
                                 ->update([
                                        'verif_email' => '1'
                                    ]);
                if($update_verif){
                    session(['verif_email'  => 1]);
                    return redirect('/user_dashboard');
                }
                                 
            }else{
                return redirect('/verif');	
            }

    } 

    public function updateFoto($file_nama,$konten,$kolom,$kode){            
            $id_tim = session('id_tim');
            $getFoto =  DB::table('team')
                        ->where('id',$id_tim)
                        ->get();
            foreach($getFoto as $foto){
                $tempfoto   = $foto->$kolom;
                $namaTim    = $foto->team_name;
            }

            $tujuan_file = 'Data Peserta/'.$konten.'/'.$namaTim;            
            $file = $file_nama;
            $ekstensi = $file->getClientOriginalExtension();
            $namafile = "$kode".$id_tim.'.'.$ekstensi;
            if($tempfoto == NULL){
                $pindahin =  $file->move($tujuan_file,$namafile);
                if($pindahin){
                    $update_foto_ketua = DB::table('team')
                                        ->where('id',session('id_tim'))
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
                            $update_foto_ketua = DB::table('team')
                                                ->where('id',session('id_tim'))
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
                        $update_foto_ketua = DB::table('team')
                                            ->where('id',session('id_tim'))
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

	public function adminUpdateFoto($file_nama,$konten,$kolom,$kode,$team_id){            		
		$getFoto =  DB::table('team')
					->where('id',$team_id)
					->get();
		foreach($getFoto as $foto){
			$tempfoto   = $foto->$kolom;
			$namaTim    = $foto->team_name;
		}

		$tujuan_file = 'Data Peserta/'.$konten.'/'.$namaTim;            
		$file = $file_nama;
		$ekstensi = $file->getClientOriginalExtension();
		$namafile = "$kode".$team_id.'.'.$ekstensi;
		if($tempfoto == NULL){
			$pindahin =  $file->move($tujuan_file,$namafile);
			if($pindahin){
				$update_foto_ketua = DB::table('team')
									->where('id',$team_id)
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
						$update_foto_ketua = DB::table('team')
											->where('id',$team_id)
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
					$update_foto_ketua = DB::table('team')
										->where('id',$team_id)
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
	//function for ' peserta'
    public function updateKetua(Request $request){                
        $update = DB::table('team')
                ->where('id',session('id_tim'))   
                ->update([
                    'team_instagram'        => $request->team_instagram,
                    'team_nama_ketua'       => $request->team_ketua,
                    'team_jekel_ketua'      => $request->team_jenis_kelamin,
                    'team_email_ketua'      => $request->team_email_ketua,                    
                    'team_notel_ketua'      => $request->team_ketua_notelpon
                ]);
            $sizeFoto = 0;
            $sizeKtm = 0;

            if(isset($request->foto_ketua) && isset($request->ktm_ketua)){
                $foto       = $request->foto_ketua;
                $sizeFoto   = $foto->getSize();
                
                $ktm = $request->ktm_ketua;
                $sizeFoto   = $ktm->getSize();
            }elseif(isset($request->foto_ketua) && !isset($request->ktm_ketua)){
                $foto       = $request->foto_ketua;
                $sizeFoto   = $foto->getSize();                
            }elseif(!isset($request->foto_ketua) && isset($request->ktm_ketua)){
                $ktm = $request->ktm_ketua;
                $sizeFoto   = $ktm->getSize();
            }


            if($sizeFoto >= 400000 || $sizeKtm >= 400000){
                return redirect('/user_dashboard')->with('file_kebesaran','Ukuran file tidak boleh lebih dari 400kb , compress gambar melalui link berikut');
            }else{            
                if(isset($request->foto_ketua) && isset($request->ktm_ketua)){
                    $aplotFoto  = $this->updateFoto($request->foto_ketua,'Foto Ketua','foto_ketua','FP');            
                    $aplotKTM   = $this->updateFoto($request->ktm_ketua,'Foto Ketua','ktm_ketua','K');
                }elseif(isset($request->foto_ketua) && !isset($request->ktm_ketua)){
                    $aplotFoto  = $this->updateFoto($request->foto_ketua,'Foto Ketua','foto_ketua','FP');            
                }elseif(!isset($request->foto_ketua) && isset($request->ktm_ketua)){
                    $aplotKTM = $this->updateFoto($request->ktm_ketua,'Foto Ketua','ktm_ketua','K');                                    
                }else{
                    return redirect('/user_dashboard')->with('update_sukses','Data ketua tim berhasil diperbarui');
                }        

            if($aplotFoto == 'Berhasilupload' || $aplotKTM == 'Berhasilupload'){    
                return redirect('/user_dashboard')->with('update_sukses','Data ketua tim berhasil diperbarui');
            }else{
                return redirect('/user_dashboard')->with('update_sukses','Data ketua tim gagal diperbarui, Silahkan coba lagi nanti');
            }
        }  
    }

    public function updateAnggota(Request $request){
        $aplotFoto = "";
        $aplotKTM = "";
        $update = DB::table('team')
        ->where('id',session('id_tim'))
        ->update([
            'team_nama_anggota'     => $request->team_nama_anggota,
            'team_notel_anggota'    => $request->team_notel_anggota,
            'team_jekel_anggota'    => $request->team_jekel_anggota            
        ]);

        $sizeFoto = 0;
        $sizeKtm = 0;

        if(isset($request->foto_anggota) && isset($request->ktm_anggota)){
            $foto       = $request->foto_anggota;
            $sizeFoto   = $foto->getSize();
            
            $ktm = $request->ktm_anggota;
            $sizeFoto   = $ktm->getSize();
        }elseif(isset($request->foto_anggota) && !isset($request->ktm_anggota)){
            $foto       = $request->foto_anggota;
            $sizeFoto   = $foto->getSize();                
        }elseif(!isset($request->foto_anggota) && isset($request->ktm_anggota)){
            $ktm = $request->ktm_anggota;
            $sizeFoto   = $ktm->getSize();
        }

        if($sizeFoto >= 400000 || $sizeKtm >= 400000){
            return redirect('/user_dashboard')->with('file_kebesaran','Ukuran file tidak boleh lebih dari 400kb , compress gambar melalui link berikut');
        }else{
            if(isset($request->foto_anggota) && isset($request->ktm_anggota)){
                $aplotFoto  = $this->updateFoto($request->foto_anggota,'Foto Anggota','foto_anggota','FP');            
                $aplotKTM   = $this->updateFoto($request->ktm_anggota,'Foto Anggota','ktm_anggota','K');
            }elseif(!isset($request->ktm_anggota) && isset($request->foto_anggota)){            
                $aplotFoto  = $this->updateFoto($request->foto_anggota,'Foto Anggota','foto_anggota','FP');            
            }elseif(!isset($request->foto_anggota) && isset($request->ktm_anggota)){
                $aplotKTM = $this->updateFoto($request->ktm_anggota,'Foto Anggota','ktm_anggota','K');                                    
            }else{
                return redirect('/user_dashboard')->with('update_sukses','Data Anggota Tim Berhasil Diperbarui');
            }
        }

        if($aplotFoto == 'Berhasilupload' || $aplotKTM == 'Berhasilupload'){    
            return redirect('/user_dashboard')->with('update_sukses','Data Anggota Tim Berhasil Diperbarui');
        }else{
            return redirect('/user_dashboard')->with('update_sukses','Data Anggota Tim Gagal Diperbarui, Silahkan Coba Lagi');
        }
    }
    public function updatePembimbing(Request $request){
        $aplotFoto = "";
        $aplotKTM = "";
        $update = DB::table('team')
        ->where('id',session('id_tim'))
        ->update([
            'team_nama_pembimbing'     => $request->team_nama_pembimbing,
            'team_notel_pembimbing'     => $request->team_notel_pembimbing,
            'team_jekel_pembimbing'     => $request->team_jekel_pembimbing,            
            'team_alamat_pembimbing'    => $request->team_alamat_pembimbing,
            'team_nip_pembimbing'    => $request->team_nip_pembimbing
        ]);
        if(isset($request->ktm_pembimbing)){
            $ktm = $request->ktm_pembimbing;
            $sizeKtm = $ktm->getSize();
            if($sizeKtm >= 400000){
                return redirect('/user_dashboard')->with('file_kebesaran','Ukuran file tidak boleh lebih dari 400kb , compress gambar melalui link berikut');                
            }else{
                $aplotKTM   = $this->updateFoto($request->ktm_pembimbing,'Foto Pembimbing','ktm_pembimbing','K');
                if($aplotKTM == 'Berhasilupload'){    
                // if($aplotFoto == 'Berhasilupload' || $aplotKTM == 'Berhasilupload'){    
                    return redirect('/user_dashboard')->with('update_sukses','Data Pembimbing Tim Berhasil Diperbarui');
                }else{
                    return redirect('/user_dashboard')->with('update_sukses','Data Pembimbing Tim Gagal Diperbarui, Silahkan Coba Lagi');
                }                
            }

        }else{
            return redirect('/user_dashboard');
        }
        
    }

    public function updateBayar(Request $request){
        if(isset($request->bukti_bayar)){
            $bukti = $request->bukti_bayar;            
            $sizeBukti = $bukti->getSize();
            if($sizeBukti >= 400000){
                return redirect('/user_dashboard')->with('file_kebesaran','Ukuran file tidak boleh lebih dari 400kb , compress gambar melalui link berikut');                
            }else{
                $aplotBayar  = $this->updateFoto($request->bukti_bayar,'Bukti Bayar','bukti_bayar','BBY');            
                if($aplotBayar == 'Berhasilupload'){
                    return redirect('/user_dashboard')->with('update_sukses','Bukti Pembayaran Berhasil Diperbarui');
                }
            }
        }else{
            return redirect('/user_dashboard');
        }
    }
    public function keyGenerator($length = 10){        
            $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ12345678';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
    }

    public function adminUpdateKetua(Request $request){ 
		$team_id = $request->id_tim;                
        echo $team_id;        

        $update = DB::table('team')
                ->where('id',$team_id)   
                ->update([
                    'team_instagram'        => $request->team_instagram,
                    'team_nama_ketua'       => $request->team_ketua,
                    'team_jekel_ketua'      => $request->team_jenis_kelamin,
                    'team_email_ketua'      => $request->team_email_ketua,                    
                    'team_notel_ketua'      => $request->team_ketua_notelpon
                ]);

        
            $sizeFoto = 0;
            $sizeKtm = 0;			
            if(isset($request->foto_ketua) && isset($request->ktm_ketua)){
                $foto       = $request->foto_ketua;
                $sizeFoto   = $foto->getSize();
                
                $ktm = $request->ktm_ketua;
                $sizeFoto   = $ktm->getSize();
            }elseif(isset($request->foto_ketua) && !isset($request->ktm_ketua)){
                $foto       = $request->foto_ketua;
                $sizeFoto   = $foto->getSize();                
            }elseif(!isset($request->foto_ketua) && isset($request->ktm_ketua)){
                $ktm = $request->ktm_ketua;
                $sizeFoto   = $ktm->getSize();
            }


        if($sizeFoto >= 400000 || $sizeKtm >= 400000){
            return redirect('/admin/team/detail/'.$team_id)->with('file_kebesaran','Ukuran file tidak boleh lebih dari 400kb , compress gambar melalui link berikut');
        }else{            
            if(isset($request->foto_ketua) && isset($request->ktm_ketua)){
                    $aplotFoto  = $this->adminUpdateFoto($request->foto_ketua,'Foto Ketua','foto_ketua','FP',$team_id);            
                    $aplotKTM   = $this->adminUpdateFoto($request->ktm_ketua,'Foto Ketua','ktm_ketua','K',$team_id);
            }elseif(isset($request->foto_ketua) && !isset($request->ktm_ketua)){
                    $aplotFoto  = $this->adminUpdateFoto($request->foto_ketua,'Foto Ketua','foto_ketua','FP',$team_id);            
            }elseif(!isset($request->foto_ketua) && isset($request->ktm_ketua)){
                    $aplotKTM = $this->adminUpdateFoto($request->ktm_ketua,'Foto Ketua','ktm_ketua','K',$team_id);                                    
            }else{
                    return redirect('/admin/team/detail/'.$team_id)->with('update_sukses','Data ketua tim berhasil diperbarui');
            }        

            if($aplotFoto == 'Berhasilupload' || $aplotKTM == 'Berhasilupload'){    
                return redirect('/admin/team/detail/'.$team_id)->with('update_sukses','Data ketua tim berhasil diperbarui');
            }else{
                return redirect('/admin/team/detail/'.$team_id)->with('update_sukses','Data ketua tim gagal diperbarui, Silahkan coba lagi nanti');
            }
        }  
    }

    public function adminUpdateBayar(Request $request){
        $team_id = $request->team_id;        
        if(isset($request->bukti_bayar)){
            $bukti = $request->bukti_bayar;            
            $sizeBukti = $bukti->getSize();
            if($sizeBukti >= 400000){
                return redirect('/admin/team/detail/'.$team_id)->with('file_kebesaran','Ukuran file tidak boleh lebih dari 400kb , compress gambar melalui link berikut');                
            }else{
                echo "Cougk";
                $aplotBayar  = $this->adminUpdateFoto($request->bukti_bayar,'Bukti Bayar','bukti_bayar','BBY',$team_id);            
                if($aplotBayar == 'Berhasilupload'){
                    return redirect('/admin/team/detail/'.$team_id)->with('update_sukses','Data Pembayaran berhasil diperbarui');
                }
            }
        }else{
            echo "hai";
            return redirect('/admin/team/detail/'.$team_id);
        }
    }

    public function adminUpdatePembimbing(Request $request){
        $aplotFoto = "";
        $aplotKTM = "";
        $team_id = $request->id_tim;
        $update = DB::table('team')
        ->where('id',$team_id)
        ->update([
            'team_nama_pembimbing'     => $request->team_nama_pembimbing,
            'team_notel_pembimbing'     => $request->team_notel_pembimbing,
            'team_jekel_pembimbing'     => $request->team_jekel_pembimbing,            
            'team_alamat_pembimbing'    => $request->team_alamat_pembimbing,
            'team_nip_pembimbing'    => $request->team_nip_pembimbing
        ]);
        if(isset($request->ktm_pembimbing)){
            $ktm = $request->ktm_pembimbing;
            $sizeKtm = $ktm->getSize();
            if($sizeKtm >= 400000){
                return redirect('/user_dashboard')->with('file_kebesaran','Ukuran file tidak boleh lebih dari 400kb , compress gambar melalui link berikut');                
            }else{
                $aplotKTM   = $this->adminUpdateFoto($request->ktm_pembimbing,'Foto Pembimbing','ktm_pembimbing','K',$team_id);
                if($aplotKTM == 'Berhasilupload'){    
                // if($aplotFoto == 'Berhasilupload' || $aplotKTM == 'Berhasilupload'){    
                    return redirect('/admin/team/detail/'.$team_id)->with('update_sukses','Data Pembimbing berhasil diperbarui');
                }else{
                    return redirect('/admin/team/detail/'.$team_id)->with('update_sukses','Data Pembimbing berhasil diperbarui');
                }                
            }

        }else{
            return redirect('/admin/team/detail/'.$team_id);
        }
        
    }      
    
    public function adminUpdateAnggota(Request $request){
        $aplotFoto = "";
        $aplotKTM = "";
        $team_id = $request->id_tim;
        $update = DB::table('team')
        ->where('id',$team_id)
        ->update([
            'team_nama_anggota'     => $request->team_nama_anggota,
            'team_notel_anggota'    => $request->team_notel_anggota,
            'team_jekel_anggota'    => $request->team_jekel_anggota            
        ]);

        $sizeFoto = 0;
        $sizeKtm = 0;

        if(isset($request->foto_anggota) && isset($request->ktm_anggota)){
            $foto       = $request->foto_anggota;
            $sizeFoto   = $foto->getSize();
            
            $ktm = $request->ktm_anggota;
            $sizeFoto   = $ktm->getSize();
        }elseif(isset($request->foto_anggota) && !isset($request->ktm_anggota)){
            $foto       = $request->foto_anggota;
            $sizeFoto   = $foto->getSize();                
        }elseif(!isset($request->foto_anggota) && isset($request->ktm_anggota)){
            $ktm = $request->ktm_anggota;
            $sizeFoto   = $ktm->getSize();
        }

        if($sizeFoto >= 400000 || $sizeKtm >= 400000){
            return redirect('/user_dashboard')->with('file_kebesaran','Ukuran file tidak boleh lebih dari 400kb , compress gambar melalui link berikut');
        }else{
            if(isset($request->foto_anggota) && isset($request->ktm_anggota)){
                $aplotFoto  = $this->adminUpdateFoto($request->foto_anggota,'Foto Anggota','foto_anggota','FP',$team_id);            
                $aplotKTM   = $this->adminUpdateFoto($request->ktm_anggota,'Foto Anggota','ktm_anggota','K',$team_id);
            }elseif(!isset($request->ktm_anggota) && isset($request->foto_anggota)){            
                $aplotFoto  = $this->adminUpdateFoto($request->foto_anggota,'Foto Anggota','foto_anggota','FP',$team_id);             
            }elseif(!isset($request->foto_anggota) && isset($request->ktm_anggota)){
                $aplotKTM   = $this->adminUpdateFoto($request->ktm_anggota,'Foto Anggota','ktm_anggota','K',$team_id);
            }else{
                return redirect('/admin/team/detail/'.$team_id)->with('update_sukses','Data Anggota berhasil diperbarui');
            }
        }

        if($aplotFoto == 'Berhasilupload' || $aplotKTM == 'Berhasilupload'){    
            return redirect('/admin/team/detail/'.$team_id)->with('update_sukses','Data Anggota berhasil diperbarui');
        }else{
            return redirect('/admin/team/detail/'.$team_id)->with('update_sukses','Data Anggota berhasil diperbarui');
        }
    }


    public function tambahTim(Request $request){
        $kodeVerif = $this->keyGenerator();
        $default_key = 0;
        $masukgan = DB::table('team')->insert([
            'team_name'             => $request->team_name,
            'team_type'             => $request->team_kategori, 
            'team_instansi'         => $request->team_instation,
            'team_instagram'        => $request->team_instagram,
            'team_nama_ketua'       => $request->team_ketua,
            'team_jekel_ketua'      => $request->team_jenis_kelamin,
            'team_email_ketua'      => $request->team_email_ketua,
            'team_password'         => md5($request->team_ketua_password),
            'team_notel_ketua'      => $request->team_ketua_notelpon,
            'team_nama_anggota'     => $request->team_anggota,
            'team_notel_anggota'    => $request->team_notelpon_anggota,
            'team_jekel_anggota'    => $request->team_jenis_kelamin_anggota,
            'team_nama_pembimbing'  => $request->team_pembimbing,
            'team_jekel_pembimbing' => $request->team_jenis_kelamin_pembimbing,
            'team_nip_pembimbing'   => $request->team_nip_pembimbing,
            'team_notel_pembimbing' => $request->team_notelpon_pembimbing,
            'team_alamat_pembimbing'=> $request->team_alamat_pembimbing,
            'kode_verif'            => $kodeVerif,
            'verif_email'           => $default_key
        ]);

        if($masukgan){            
            $this->layananEmail->kirimEmail($request->team_email_ketua,$request->team_name,$kodeVerif);            
            return redirect('/login')->with('login_gagal','Pendaftaran berhasil dilakukan silahkan lakukan login');            
        }else{            
            return redirect('/login')->with('login_gagal','Pendaftaran Gagal dilakukan silahkan registrasi ulang');            
        }        
    }

    public function tambahManual(Request $request){
        $kodeVerif = $this->keyGenerator();
        $default_key = 1;
        $masukgan = DB::table('team')->insert([
            'team_name'             => $request->team_name,
            'team_type'             => $request->team_kategori, 
            'team_instansi'         => $request->team_instation,
            'team_instagram'        => $request->team_instagram,
            'team_nama_ketua'       => $request->team_ketua,
            'team_jekel_ketua'      => $request->team_jenis_kelamin,
            'team_email_ketua'      => $request->team_email_ketua,
            'team_password'         => md5($request->team_ketua_password),
            'team_notel_ketua'      => $request->team_ketua_notelpon,
            'team_nama_anggota'     => $request->team_anggota,
            'team_notel_anggota'    => $request->team_notelpon_anggota,
            'team_jekel_anggota'    => $request->team_jenis_kelamin_anggota,
            'team_nama_pembimbing'  => $request->team_pembimbing,
            'team_jekel_pembimbing' => $request->team_jenis_kelamin_pembimbing,
            'team_nip_pembimbing'   => $request->team_nip_pembimbing,
            'team_notel_pembimbing' => $request->team_notelpon_pembimbing,
            'team_alamat_pembimbing'=> $request->team_alamat_pembimbing,
            'kode_verif'            => $kodeVerif,
            'verif_email'           => $default_key
        ]);            
        return redirect('/admin/tambah_manual')->with('manual_behasil','Tim Telah Berhasil Didaftarkan Secara Manual');                    
    }

    // public function deleteTim($id){
    // 	$del = DB::table('team').
    // }

    public function logout(){
        // Session::flush();
        Session::forget('id_tim');
        Session::forget('verif_email');
        return redirect('/login');
    }
}
