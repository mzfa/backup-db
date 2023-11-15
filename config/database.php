<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DATABASE_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
            'dump' => [
                'dump_binary_path' => '/Applications/XAMPP/xamppfiles/bin', // only the path, so without `mysqldump` or `pg_dump`
                'use_single_transaction',
                'timeout' => 60000000 * 5, // 5 minute timeout
                'exclude_tables' => ['users', 'bagian'],
            ],
        ],
        'e-office' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL_E_OFFICE'),
            'host' => env('DB_HOST_E_OFFICE', '127.0.0.1'),
            'port' => env('DB_PORT_E_OFFICE', '3306'),
            'database' => env('DB_DATABASE_E_OFFICE', 'forge'),
            'username' => env('DB_USERNAME_E_OFFICE', 'forge'),
            'password' => env('DB_PASSWORD_E_OFFICE', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
            'dump' => [
                'dump_binary_path' => '/Applications/XAMPP/xamppfiles/bin', // only the path, so without `mysqldump` or `pg_dump`
                'use_single_transaction',
                'timeout' => 60000000 * 5, // 5 minute timeout
                'exclude_tables' => ['users', 'bagian'],
            ],
        ],

        'PHIS-V2' => [
            'driver' => 'pgsql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_PHIS', '127.0.0.1'),
            'port' => env('DB_PORT_PHIS', '5432'),
            'database' => env('DB_DATABASE_PHIS', 'forge'),
            'username' => env('DB_USERNAME_PHIS', 'forge'),
            'password' => env('DB_PASSWORD_PHIS', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
            'dump' => [
                'dump_binary_path' => '/Applications/XAMPP/xamppfiles/bin', // only the path, so without `mysqldump` or `pg_dump`
                'use_single_transaction',
                'timeout' => 60000000 * 5, // 5 minute timeout
                'exclude_tables' => ['zyx_users','zyx_user_group_detail','zyx_user_group','zyx_user_akses','zyx_urut_visum','zyx_upload_fpk','zyx_uang_muka','zyx_tipe_bayar','zyx_tindakan_group_detail_sub','zyx_tindakan_group_detail','zyx_tindakan_group','zyx_tindakan_detail','zyx_tindakan','zyx_tim_bedah_detail','zyx_tim_bedah','zyx_terapi_obat_dosis','zyx_template_penunjang','zyx_telaah_resep','zyx_task_bpjs_log','zyx_tarif_default','zyx_tarif','zyx_tanggal_merah','zyx_surat_pemusnahan_barang','zyx_surat_kontrol','zyx_supplier_barang','zyx_supplier','zyx_sub_menu','zyx_stock_depo_temp','zyx_stock_depo_real','zyx_stock_depo_pakai','zyx_status_kepegawaian','zyx_spesialisasi_dokter','zyx_spesialisasi','zyx_spesial_person','zyx_slot','zyx_skrining_covid','zyx_skdp','zyx_satu_sehat_response','zyx_rujukan_sep','zyx_rujukan_pasien','zyx_riwayat_tutup_billing','zyx_riwayat_kll','zyx_restriksi_obat','zyx_rekap_stock_opname','zyx_rekap_gizi','zyx_registrasi_urut','zyx_registrasi_igd','zyx_registrasi_detail','zyx_registrasi','zyx_provinsi','zyx_profesi','zyx_principal','zyx_pola_diskon','zyx_pindah_dpjp','zyx_pesan_slot_bedah','zyx_pesan_makanan_monitoring_asupan','zyx_pesan_bedah','zyx_permintaan_brg_detail','zyx_permintaan_brg','zyx_perjanjian_kerjasama','zyx_peresepan_obat_retur','zyx_peresepan_obat_dispense_head','zyx_peresepan_obat_dispense','zyx_peresepan_obat_detail','zyx_peresepan_obat','zyx_perencanaan_pembelian','zyx_penerimaan_brg_detail','zyx_penerimaan_brg','zyx_penanggung_rawat','zyx_pemusnahan_barang','zyx_pemesanan_brg_detail','zyx_pemesanan_brg','zyx_pemeriksaan_rad','zyx_pemakaian_obat_farmasi','zyx_pegawai','zyx_pasien_nasabah','zyx_pasien_gabung','zyx_pasien_activity','zyx_pasien','zyx_paket_tindakan','zyx_paket_peresepan','zyx_paket_mcu_detail','zyx_paket_mcu','zyx_order_rehab_medik','zyx_order_rad_detail','zyx_order_rad','zyx_order_lab_detail','zyx_order_lab','zyx_objek_form_control','zyx_objek','zyx_notif_penyakit','zyx_nasabah','zyx_mortalitas','zyx_modul','zyx_migrate_tindakan','zyx_menu','zyx_material_request_template_approved','zyx_material_request_detail_partisi','zyx_material_request_detail','zyx_material_request_approval','zyx_material_request','zyx_material_racik_detail','zyx_material_racik','zyx_master_antrian_penunjang','zyx_mapping_poli_bpjs','zyx_mapping_farmasi','zyx_manage_barang_aset','zyx_makanan','zyx_luaran','zyx_log_nasabah','zyx_level_detail','zyx_level','zyx_lab_hasil','zyx_kuitansi_kolektif','zyx_kuitansi','zyx_konfirmasi_prb','zyx_konfigurasi_tim_dokter','zyx_konfigurasi_satu_sehat','zyx_konfigurasi_pembagi_jasmed_3','zyx_konfigurasi_pembagi_jasmed_2','zyx_konfigurasi_pembagi_jasmed','zyx_konfigurasi_jasa_non_medis_detail','zyx_konfigurasi_jasa_non_medis','zyx_konfigurasi_jasa_medis_detail','zyx_konfigurasi_jasa_medis','zyx_konfigurasi_integrasi','zyx_konfigurasi_biaya_administrasi_nasabah','zyx_konfigurasi_biaya_administrasi_detail','zyx_konfigurasi_biaya_administrasi','zyx_komposisi','zyx_kelurahan','zyx_kelas_ruang','zyx_kecamatan','zyx_kartu_stock_global','zyx_kartu_stock','zyx_kabupaten','zyx_jenis_tindakan','zyx_jenis_diit','zyx_jenis_diagnosa_diit','zyx_jadwal_rehab_medik','zyx_jadwal_dokter_igd','zyx_jadwal_dokter','zyx_jabatan','zyx_intervensi','zyx_integrasi_simrs_inacbg','zyx_integrasi_gabung_bill_simrs_inacbg','zyx_instruksi_rawat','zyx_index_remunerasi_pegawai','zyx_index_remunerasi_detail','zyx_index_remunerasi','zyx_implementasi_tindakan','zyx_implant','zyx_identitas_pasien','zyx_icd','zyx_hasil_rad_foto','zyx_hasil_rad_detail','zyx_hasil_rad','zyx_hasil_patologi_foto','zyx_hasil_patologi_anatomi_detail','zyx_hasil_patologi_anatomi','zyx_hasil_lab_master','zyx_hasil_lab_detail','zyx_hasil_lab','zyx_harga_jual_obat_pakai','zyx_harga_jual_obat','zyx_form','zyx_floor_stock','zyx_flash_news','zyx_file_upload_berkas','zyx_faktur_detail','zyx_faktur','zyx_emr_detail','zyx_emr','zyx_draft_material_request_detail','zyx_draft_material_request','zyx_dpjp_hfis','zyx_diet','zyx_diagnosa_rawat','zyx_diagnosa_keperawatan_rj','zyx_diagnosa_keperawatan_luaran','zyx_diagnosa_keperawatan_intervensi','zyx_diagnosa_keperawatan_indikasi_kriteria','zyx_diagnosa_keperawatan_indikasi','zyx_diagnosa_keperawatan','zyx_detail_tindakan_bedah','zyx_detail_akses_tindakan','zyx_dashboard_menu_sub_extra','zyx_dashboard_menu_sub','zyx_dashboard_menu','zyx_cuti_dokter_detail','zyx_cuti_dokter','zyx_covid_claim','zyx_cito_konfigurasi','zyx_cicilan_detail','zyx_cicilan','zyx_capture_bor','zyx_bridging_ris','zyx_bridging_eis_log','zyx_billing_selisih','zyx_bill_temp_detail','zyx_bill_temp','zyx_bill_obat_otc','zyx_bill_kasir_detail','zyx_bill_kasir','zyx_berkas','zyx_bed_waitlist','zyx_bed_log_hd','zyx_bed_log','zyx_bed','zyx_bayi','zyx_barang_sub_golongan','zyx_barang_principal_supplier','zyx_barang_jenis','zyx_barang_golongan_detail','zyx_barang_golongan','zyx_barang','zyx_bank','zyx_bagian','zyx_aset_detail','zyx_aset','zyx_asa_konfigurasi','zyx_arsip_dokumen','zyx_antrian_system_urutan','zyx_antrian_system_detail','zyx_antrian_system','zyx_antrian_area','zyx_alat','zyx_akta_bayi','zyx_akses_log_detail','zyx_akses_log','zyx_akses_ehr'],
            ],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            // 'encrypt' => env('DB_ENCRYPT', 'yes'),
            // 'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];
