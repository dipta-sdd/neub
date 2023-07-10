
<script>
    $(document).ready(function () {
        $(document).on('click', '.nav-link , .dropdown-toggle', function(event) {
            // event.preventDefault();
            var p=$(this).parent().children('ul').toggleClass('ddm_show');
            console.log(p);
        });
    });
</script>
</body>
<!-- git add --all && git commit -m "b1" && git push -->

</html>