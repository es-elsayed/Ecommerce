<!-- Bootstrap JS -->
<script src="{{ asset('assets/site/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins-->
<script src="{{ asset('assets/site/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/site/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/site/plugins/OwlCarousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/site/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js') }}"></script>
<script src="{{ asset('assets/site/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/site/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<!--app JS-->
<script src="{{ asset('assets/site/js/app.js') }}"></script>
<script src="{{ asset('assets/site/js/index.js') }}"></script>

<!--fo search-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
<script>
    // for chechout new Addresses
$(document).ready(function(){
    $('#city').prop('disabled',true)
    $('#address').prop('disabled',true)

    $('#product').on('keyup',null, function(){
        search(this,'product')
    })
    $('#region').on('keyup',null, function(){
        search(this,'region')
    })
    $('#city').on('keyup',null, function(){
        search(this,'city',$( "#regions input[type='hidden']" ).val())
    })
    $('#address').on('keyup',null, function(){
        search(this,'address',$( "#regions input[type='hidden']" ).val(),$( "#citys input[type='hidden']" ).val())
    })

    $('#region').on('change',function()
    {
        $('#city').val('')
        $('#address').val('')
        $('#address').prop('disabled',true)
        $('#city').prop('disabled',false)
    });
    $('#city').on('change',function()
    {
        $('#address').val('')
        $('#address').prop('disabled',false)
    });
    function search(e,where, region_id=null, city_id=null){
        let target = "#"+where+"s"
        var query = e.value;
        // console.log();
        // console.log(region_id,city_id);
        $.ajax({
            url:"{{ route('site.search.index') }}",
            type: "GET",
            data: {'search':query,'where':where,region_id,city_id},
            success: function(data){
                // console.log(data);
                $(target).html(data);
            }
        })
    }
})
</script>
<script>
    // Check-out Addresses
    $('div.hide-address').css('display',"none")
    $('input[type="radio"]').on('change',function(){
        switch ($(this).val()) {
            case 'new':
                $('#region').val('')
                $('#city').val('')
                $('#address').val('')
                $('#region').prop('disabled',false)
                $('#city').prop('disabled',true)
                $('#address').prop('disabled',true)
                $('div.hide-address').css('display',"block")
            break;

            default:
                $('#region').val('')
                $('#city').val('')
                $('#address').val('')
                $('#region').prop('disabled',true)
                $('#city').prop('disabled',true)
                $('#address').prop('disabled',true)
                $('div.hide-address').css('display',"none")
            break;
        }
    })
</script>
<script>
    $("#product").on('change', function (e) {
        window.location = $( "#products input[type='hidden']" ).val();
});
</script>
@yield('extra-js')
