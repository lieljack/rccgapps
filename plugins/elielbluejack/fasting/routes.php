<?php

use ElielBluejack\Fasting\Models\FastingDays;

Route::get('api/fasting', function() {
  return FastingDays::with("prayer_points")->get();
});