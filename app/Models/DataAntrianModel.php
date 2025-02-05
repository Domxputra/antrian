<?php

namespace App\Models;

use CodeIgniter\Model;

class DataAntrianModel extends Model
{
    protected $table            = 'dataantrian';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['uuid_data_antrian', "tanggal_data_antrian", "status_data_antrian", "nomo_data_antrian", "jam_antrian"];

}
