<?php
namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['judul', 'penulis', 'penerbit', 'tahun_terbit'];

    //validation
    protected $validationRules = [

    ];
}
