<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <span class="chapter">Chapter 3</span>
        <h2>LDAP Injection</h2>

        <?php echo code('php', '
$ldapSearchQuery = "(cn=" + $userName + ")";
') ?>
        <ul>
            <li>*</li>
            <li>jonys) (| (password = * )</li>
        </ul>
    </div>
</section>