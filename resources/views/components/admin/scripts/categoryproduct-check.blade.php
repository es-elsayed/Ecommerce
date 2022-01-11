<script>
    const sub_cats = document.querySelectorAll('.sub-cat')
        sub_cats.forEach((sub_cat)=>{
        sub_cat.addEventListener(('click'), (e)=>{
            if(e.target.checked){
        e.target.parentElement.parentElement.parentElement.firstChild.checked = true;
            }
        })
        })
</script>
