<?php
/**
 * Created by WaYi
 * Author: Ying Wang
 * Date: 2019-05-22
 * Time: 16:22
 */

class Helper
{
    public static function escapeHtmlValue($value)
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
}