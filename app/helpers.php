<?php

function c_rand($file) {
    return mt_rand(0, count($file)-1);
}