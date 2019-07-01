
//Controller part
for ($i=1; $i <= 12; $i++) { 
    $data['courseEnrollOf_'.$i]  = EnCourseEnrolled::valid()
        ->where(DB::raw("YEAR(created_at)"), date("Y"))
        ->where(DB::raw("MONTH(created_at)"), ($i <= 9 ? '0' : '').$i)
        ->count();  
}

//Blade Part
<?php $courseEnrollOf_ = 'courseEnrollOf_'; ?>
@for ($i = 1; $i <= 12; $i++)
    <input type="hidden" id="courseEnrollOf_<?php echo $i; ?>" value="{{eval('return $'. $courseEnrollOf_ .$i.';')}}">
@endfor