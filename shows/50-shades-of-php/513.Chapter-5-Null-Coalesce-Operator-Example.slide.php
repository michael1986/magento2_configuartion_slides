<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <br/>
        <?=code('php', '
$config = $this->config ?? static::$defaultConfig;
// instead of:
$config = isset($this->config)
    ? $this->config : static::$defaultConfig;
        ') ?>
    </div>
</section>