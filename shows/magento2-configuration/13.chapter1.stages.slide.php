<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <p class="title">Configuration stages (i.e. where files are located)</p>
        <ul>
            <li><strong>Primary</strong>: <span class="directory"><?php echo htmlspecialchars('<base dir>/app/etc/')?></span></li>
            <li><strong>Global</strong>: <span class="directory"><?php echo htmlspecialchars('<your component>/etc/*.xml') ?></span></li>
            <li><strong>Area</strong>: <span class="directory"><?php echo htmlspecialchars('<your component>/etc/<area>/*.xml') ?></span></li>
        </ul>
        <br>
        <p class="annotation">
            * <b><?php echo htmlspecialchars('<your component>') ?></b> - path to your module, theme or language<br>
            ** <b><?php echo htmlspecialchars('<area>') ?></b> - ... keep calm and carry on
        </p>
    </div>
</section>