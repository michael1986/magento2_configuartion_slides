<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <span class="chapter">Chapter 3</span>
        <h2>Cross-site Scripting (XSS)</h2>

        <div class="small">
            <?php echo code('php', '
<?php
$employeeId = $_GET[\'employee_id\'];
...
?>
Exmployee ID: <?php echo $employeeId ?>
            ') ?>

        <?php echo code('html', 'http://testsite.com/vuln.php?employee_id=123<script>alert(1)</script>') ?>
        </div>
    </div>
</section>