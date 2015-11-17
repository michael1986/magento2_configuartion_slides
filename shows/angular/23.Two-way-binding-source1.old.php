<section class="slide" id="Two-way-binding-source1">
    <div>
        <h2>
            Two-way binding example <sup>(supper-dummy)</sup>
        </h2>
        <div class="fs-80" data-ng-non-bindable>
            <?php echo code('
<div data-ng-app>
    <label>Enter something:</label>
    <input type="text" data-ng-model="something" />
    <p>You\'ve entered: <strong>{{ something }}</strong></p>
</div>', 'html');
            ?>
        </div>
        <p class="next">&mdash; No JavaScript. At all.</p>
    </div>
</section>