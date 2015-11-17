<section class="slide full-page" id="Directives-example5.1">
    <div>
        <h2>Cache manager directive</h2>
        <div class="example-source">
            <div class="fs-65" data-ng-non-bindable>
                <?php echo code('
<!-- app/templates/index.html -->
<footer class="container-fluid">
    ...
    <div data-cache-manager></div>
    ...
</footer>
',
                    'html');
                ?>
            </div>
            <div class="next fs-65" data-ng-non-bindable>
                <hr>
                <pre class="code no-margin">
                <?php echo code('
<!-- app/templates/cache-manager.directive.html -->
<div class="cache-manager pull-right">
    <button type="button" data-ng-click="clear()">Clear Cache</button>
</div>
',
                    'html', false);
                ?>
                </pre>
            </div>
        </div>
    </div>
</section>