<?php

namespace App\Models;

use CodeIgniter\Model;

class ContaModel extends Model
{
    protected $table      = 'conta';
    protected $primaryKey = 'conta_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['Nome', 'CPF', 'Email', 'Senha', 'Saldo'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}