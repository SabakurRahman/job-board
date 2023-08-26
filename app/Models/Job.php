<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected  $guarded =[];

    public static array $experience =['entry','intermediate','senior'];
   // public const EXPERIENCE=['entry','intermediate','senior'];
    public static array $category =[
        'IT',
        'Finance',
        'Sales',
        'Marketing'
    ];

    public function getJobTitle()
    {
        return self::all();
    }


}
