@if(Session::has('success'))
    <div class="alert alert--success alert--filled">
        <div class="alert__icon">
            <svg class="icon">
                <use xlink:href="#check"></use>
            </svg>
        </div>
        <p class="alert__text"><strong>Well done!</strong> {!! Session::get('success') !!}</p>
        <span class="alert__close">
            <svg class="icon">
                <use xlink:href="#close"></use>
            </svg>
        </span>
    </div>
@endif
