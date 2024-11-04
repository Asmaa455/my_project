<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // أول طريقة بدك تعرفي أسماء كل الأعمدة
    protected $fillable=['title','body'];

   //تاني طريقة ما بتحددي شي فبياخد الكل
   // protected $guarded=[];
    
   //هي معناتها اقبل الكل إلا هي
    //protected $guarded=['body'];
}
