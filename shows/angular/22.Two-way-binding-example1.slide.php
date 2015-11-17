<section class="slide" id="Two-way-binding-example1">
    <div>
        <h2>Two-way binding example <sup>(supper-dummy)</sup></h2>
        <?php include 'examples/example1.php'; ?>
        <div class="fs-80 next" data-ng-non-bindable>
            <hr/>
            <pre class="code no-margin">
            <?php echo code('
<div data-ng-app>
    <label>Enter something:</label>
    <input type="text" data-ng-model="something" />
    <p>You\'ve entered: <strong>{{ something }}</strong></p>
</div>', 'html', false);
            ?>
            </pre>
            <hr/>
        </div>
        <p class="next">&mdash; No JavaScript. At all.</p>
    </div>
</section>