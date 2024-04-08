<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SchedulerController extends Controller
{
    public function index()
    {
        // $user = DB::select("SELECT * FROM users");
        // dd($user);
        return view('auth.login');
    }
    public function fisio()
    {
        $tanggal_awal = Carbon::today()->subDays(2);
        $tanggal_akhir = Carbon::today()->subDays(1);
        // die($tanggal_akhir.' - '.$tanggal_akhir);
        $query = "select
                    r.pasien_id,
                    r.tgl_masuk,
                    r.jenis_rawat,
                    rd.bagian_id,
                    pr.penanggung_rawat_id,
                    pr.kirim_user_id,
                    pr.rawat_user_id,
                    pr.penanggung_rawat_id
                from
                    registrasi r
                join registrasi_detail rd on
                    r.registrasi_id = rd.registrasi_id
                join penanggung_rawat pr on
                    r.registrasi_id = pr.registrasi_id
                join emr e on
                    e.registrasi_detail_id = rd.registrasi_detail_id
                where
                    rd.bagian_id = 51
                    and r.jenis_rawat = 'RJ'
                    and pr.rawat_user_id = '207'
                    and r.status_batal is null
                    and r.tgl_masuk BETWEEN '$tanggal_awal' AND '$tanggal_akhir'
                order by tgl_masuk desc";
                echo $query;
        $data = DB::connection('PHIS-V2')->select($query);
        // dd($data);
        $id = '';
        foreach($data as $item){
            $id .= $item->penanggung_rawat_id.',';
        }
        $id = substr($id,0, -1);
        $update = "UPDATE  penanggung_rawat SET rawat_user_id=148 WHERE penanggung_rawat_id IN ($id)";
        $res = DB::connection('PHIS-V2')->select($update);
        // dd($data, $id);
    }

}
