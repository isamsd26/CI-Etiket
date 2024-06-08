<?php

namespace App\Models;

use CodeIgniter\Model;

class PantaiModel extends Model
{
    protected $table = 'pantai';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_pantai', 'detail_pantai', 'harga_tiket', 'gambar'];
}
