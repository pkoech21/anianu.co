<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyPage extends Model
{
    use HasFactory;

    // Optional: if your table name is not plural ("company_pages")
    protected $table = 'company_pages';

    // Optional: if you don’t use Laravel’s default timestamps
    public $timestamps = false;

    // Optional: define fillable fields
    protected $fillable = ['name', 'description', 'logo'];
}
