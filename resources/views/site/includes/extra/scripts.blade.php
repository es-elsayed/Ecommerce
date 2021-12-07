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
    $('#district').prop('disabled',true)

    $('#product').on('keyup',null, function(){
        search(this,'product')
    })
    $('#region').on('keyup',null, function(){
        search(this,'region')
    })
    $('#city').on('keyup',null, function(){
        search(this,'city',$( "#regions input[type='hidden']" ).val())
    })
    $('#district').on('keyup',null, function(){
        search(this,'district',$( "#regions input[type='hidden']" ).val(),$( "#citys input[type='hidden']" ).val())
    })

    $('#region').on('change',function()
    {
        $('#city').val('')
        $('#district').val('')
        $('#district').prop('disabled',true)
        $('#city').prop('disabled',false)
    });
    $('#city').on('change',function()
    {
        $('#district').val('')
        $('#district').prop('disabled',false)
    });
    function search(e,where, region_id=null, city_id=null){
        let target = "#"+where+"s"
        var query = e.value;
        // console.log();
        console.log(region_id,city_id);
        $.ajax({
            url:"{{ route('site.search') }}",
            type: "GET",
            data: {'search':query,'where':where,region_id,city_id},
            success: function(data){
                console.log(data);
                $(target).html(data);
            }
        })
    }
})
</script>
<script>
    $('input[type="radio"]').on('change',function(){
        if($(this).val() === 'new'){
            $('#region').val('')
            $('#city').val('')
            $('#district').val('')
            $('#region').prop('disabled',false)
            $('#city').prop('disabled',true)
            $('#district').prop('disabled',true)
        }
        else if($(this).val() === 'billing'){
            $('#region').val('')
            $('#city').val('')
            $('#district').val('')
            $('#region').prop('disabled',true)
            $('#city').prop('disabled',true)
            $('#district').prop('disabled',true)
        }
    })
</script>
@yield('extra-js')
