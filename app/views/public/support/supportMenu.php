<script type="text/javascript">
    $(document).ready(function () {
        var segment1 = '<?php echo Request::segment(1); ?>';

        $('.sideMenu a').each(function(){
            if($(this).attr('href')== segment1)
            {
                $(this).addClass('active');
            }
        });
    });
</script>
<div class="list-group sideMenu">
    <a href="faq" class="list-group-item">FAQ</a>
    <a href="contactus" class="list-group-item">Contact us</a>
</div>