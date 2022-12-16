<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = [
        'about_title', 'about_text', 
        'ser_title', 'ser_des', 's_t1', 's_c1', 's_t2', 's_c2', 's_t3', 's_c3', 's_t4', 's_c4',
        'why_phone', 'why_op1', 'why_op2', 'why_title', 'why_content',
        'faq_title', 'faq_q1', 'faq_a1', 'faq_q2', 'faq_a2', 'faq_q3', 'faq_a3',
        'b_t1', 'b_t2', 'b_text', 'b_img', 
        'pro_title', 'pro_des',
    ];
}
