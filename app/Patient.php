<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Patient extends Model
{
    use Sortable;


    protected $fillable = [ 'id', 'svnr', 'firstname','lastname','email','address','plz','city','country' ];


    public $sortable = ['id', 'svnr', 'firstname', 'lastname','email','address','plz','city','country','created_at', 'updated_at'];
}
