<section class="slide full-page" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <div class="small">
            <?=code('html', '
<!-- ===== PHP/FI Code Example ===== -->
<!--include /text/header.html-->

<!--getenv HTTP_USER_AGENT-->
<!--ifsubstr $exec_result Mozilla-->
  Hey, you are using Netscape!<p>
<!--endif-->

<!--sql database select * from table where user=\'$username\'-->
<!--ifless $numentries 1-->
  Sorry, that record does not exist<p>
<!--endif exit-->
  Welcome <!--$user-->!<p>
  You have <!--$index:0--> credits left in your account.<p>

<!--include /text/footer.html-->'
            ) ?>
        </div>
    </div>
</section>