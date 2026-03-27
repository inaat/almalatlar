@if(app()->getLocale() === 'ar')
    @include('layouts.frontend_layout_ar')
@else
    @include('layouts.frontend_layout_en')
@endif
