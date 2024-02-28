<?php

namespace App\Models;

use CodeIgniter\Model;

class eBookModel extends Model
{
    protected $table      = 'ebooks';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['nama', 'pdf_path'];
}
