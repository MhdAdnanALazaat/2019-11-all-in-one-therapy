<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Patient extends Model
{
    use Sortable;


    protected $fillable = [ 'firstname', 'id', 'plz' ];


    public $sortable = ['id', 'svnr', 'firstname', 'created_at', 'updated_at'];
}
