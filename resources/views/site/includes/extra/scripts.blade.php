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
$(document).ready(function(){

    $('#product').on('keyup',null, search)
    $('#region').on('keyup',null, search)
    $('#city').on('keyup',null, search)
    $('#district').on('keyup',null, search)
$('#region').on('change',function(e){
    console.log(e.value());
})
    function search(e){

        let id = e.target.attributes.id.value
        let target = "#"+id+"s"

        var query = $(this).val();
        $.ajax({
            url:"{{ route('site.search') }}",
            type: "GET",
            data: {'search':query,'where':id},
            success: function(data){
                // console.log(data);
                $(target).html(data);
            }
        })
    }

})

</script>
@yield('extra-js')
