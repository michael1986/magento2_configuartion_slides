<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <?php echo code('php', '
interface Container {
    public function drop();
}
class Glass implements Container {
    public function drop() { /* well, crash */ }
}
class Cup implements Container {
    public function drop() { /* well, crash, and throw the handle out */ }
}
class Cat {
    public function dropContainer(Container $container) {
        $container->drop();
    }
}
', true, 'small'); ?>
    </div>
</section>