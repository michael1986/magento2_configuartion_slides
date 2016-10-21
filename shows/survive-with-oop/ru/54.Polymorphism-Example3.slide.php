<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <?php echo code('php', '
class ContainerCollection implements Iterator {
    public function current() : Container { /* ... */ };
    // ...
}

$containersOnTable = new ContainerCollection();

// Your mom fills the collection here:
$eventManager->dispatch(\'serve_table\', $containers);

array_walk($containersOnTable, 
    function(Container $container) use ($cat) {
        $cat->dropContainer($container);
    }
);
', true, 'fs-80'); ?>
    </div>
</section>