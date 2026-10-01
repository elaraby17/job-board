<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public static function getJobs()
    {
        return [
            ['id' => 1, 'title' => 'soft ware engineer', 'salary' => 1000],
            ['id' => 2, 'title' => 'graphic designer ', 'salary' => 2000],
            ['id' => 3, 'title' => 'web developer', 'salary' => 3000],
        ];
    }
}
