<?php

//use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

if(!function_exists('formatnumber')) {
      function formatnumber($number) {
            return number_format($number, 2);
      }
}

