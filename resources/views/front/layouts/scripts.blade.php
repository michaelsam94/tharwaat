<!-- libs-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="{{ asset('design/front/js/libs.min.js') }}"></script>
<!-- scripts-->
<script src="{{ asset('design/front/js/common.min.js') }}"></script>
<script type="text/javascript">
	$('#carousel-example').on('slide.bs.carousel', function (e) {
    /*
        CC 2.0 License Iatek LLC 2018 - Attribution required
    */
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item').length;
 
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});

// Mobile Navigation Functionality
$(document).ready(function() {
    // Handle dropdown trigger click for mobile navigation
    $('.dropdown-trigger').on('click', function(e) {
        e.preventDefault();
        $('.mobile-nav').addClass('mobile-nav--active');
        $('body').addClass('mobile-nav-open');
    });
    
    // Close mobile navigation
    $('.mobile-nav__close').on('click', function(e) {
        e.preventDefault();
        $('.mobile-nav').removeClass('mobile-nav--active');
        $('body').removeClass('mobile-nav-open');
    });
    
    // Close mobile navigation when clicking outside
    $('.mobile-nav').on('click', function(e) {
        if (e.target === this) {
            $('.mobile-nav').removeClass('mobile-nav--active');
            $('body').removeClass('mobile-nav-open');
        }
    });
    
    // Handle mobile menu sub-items toggle
    $('.mobile-menu__item--has-child .mobile-menu__link').on('click', function(e) {
        e.preventDefault();
        $(this).parent().toggleClass('active');
    });
    
    // Close mobile nav when clicking on menu links
    $('.mobile-menu__link').on('click', function() {
        if ($(this).attr('href') !== 'javascript:void(0);') {
            $('.mobile-nav').removeClass('mobile-nav--active');
            $('body').removeClass('mobile-nav-open');
        }
    });
});

// Prevent body scroll when mobile nav is open
$(document).ready(function() {
    $('body').on('classChange', function() {
        if ($(this).hasClass('mobile-nav-open')) {
            $('body').css('overflow', 'hidden');
        } else {
            $('body').css('overflow', '');
        }
    });
});
</script>