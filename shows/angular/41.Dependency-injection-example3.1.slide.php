<section class="slide" id="Dependency-injection-example3.1">
    <div>
        <h2>Dependency injection example <sup>(dummy)</sup></h2>
        <div class="example-source"
             data-ng-controller="example3Controller">
            <?php include 'examples/example3.php'; ?>
            <br class="clear"/>
            <hr>
            <div class="fs-65" data-ng-non-bindable>
                <pre class="code no-margin">
                <?php echo code('
<div>UAH: <input type="text" data-ng-model="amount" /></div>
<div>USD: {{ convert(amount, "UAH", "USD") | number:2 }}</div>
<div>EUR: {{ convert(amount, "UAH", "EUR") | number:2 }}</div>
<div>GBP: {{ convert(amount, "UAH", "GBP") | number:2 }}</div>
',
                    'html', false);
                ?>
                </pre>
            </div>
            <div class="next fs-65" data-ng-non-bindable>
                <hr>
                <?php echo code('
angular.module("angulardemo")
    .controller("example3Controller", function($scope, ExchangeRateDummy) {
        $scope.convert = function(amount, from, to) {
            var rate = ExchangeRateDummy.getRate(from, to);
            return (parseFloat(amount) || 0) * (rate.rate || 0);
        }
    });
',
                    'javascript');
                ?>
            </div>
        </div>
    </div>
</section>