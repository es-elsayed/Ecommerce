@props(['rate'])
@for ($i = 1; $i <= $rate; $i++)
<i class="bx bxs-star text-warning"></i>
@endfor

@for ($i = $rate; $i < 5 ; $i++)
<i class="bx bxs-star text-white"></i>
@endfor
