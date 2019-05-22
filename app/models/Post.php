<?php
/**
 * Created by WaYi
 * Author: Ying Wang
 * Date: 2019-05-22
 * Time: 12:44
 */

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'title', 'body', 'views'];
}