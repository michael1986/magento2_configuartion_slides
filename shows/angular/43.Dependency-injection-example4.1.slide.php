<section class="slide" id="Dependency-injection-example4.1">
    <div>
        <h2>Dependency injection example <sup>(pro)</sup></h2>
        <div class="example-source"
             data-ng-controller="example4Controller">
            <?php include 'examples/example4.php'; ?>
            <br class="clear"/>
            <hr>
            <div class="fs-65 next" data-ng-non-bindable>
                <pre class="code no-margin">
                <?php echo code('
<div>UAH: <input type="text" data-ng-model="amount" /></div>
<div>USD: {{ converted.USD | number:2 }}</div>
<div>EUR: {{ converted.EUR | number:2 }}</div>
<div>GBP: {{ converted.GBP | number:2 }}</div>
',
                    'html', false);
                ?>
                </pre>
            </div>
        </div>
    </div>
</section>