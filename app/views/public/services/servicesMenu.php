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
    <a href="webdesign" class="list-group-item">Web Design</a>
    <a href="ecommerce" class="list-group-item">e-Commerce</a>
    <a href="seo" class="list-group-item">SEO</a>
    <a href="maintenance" class="list-group-item">Website Maintenance</a>
    <a href="hosting" class="list-group-item">Hosting</a>
</div>