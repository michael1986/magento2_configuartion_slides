<section class="slide full-page" id="Dependency-injection-example4.2">
    <div>
        <h2>Dependency injection example <sup>(pro)</sup></h2>
        <div class="example-source"
             data-ng-controller="example4Controller">
            <?php include 'examples/example4.php'; ?>
            <br class="clear"/>
            <hr>
            <div class="fs-60" data-ng-non-bindable>
                <pre class="code no-margin">
                <?php echo code('
angular.module("angulardemo")
    .controller("example4Controller", function($scope, ExchangeRate) {
        $scope.converted = {"USD": 0, "EUR": 0, "GBP": 0};
        $scope.$watch("amount", function(amount) {
            angular.forEach($scope.converted, function(convertedValue, currency) {
                ExchangeRate.getRate("UAH", currency).then(function(response) {
                    $scope.converted[currency] = (parseFloat(amount) || 0)
                        * (response.data.rate || 0);
                });
            });
        });
    })
    .factory("ExchangeRate", ["$http", function($http) {
        var apiUrl = "http://jsonrates.com/get/";
        var apiKey = "jr-1c7042ea799d59b6daa30515862ec36c";
        return {
            getRate: function(from, to) {
                return $http.jsonp(apiUrl + "?from=" + from + "&to=" + to
                    + "&apiKey=" + apiKey + "&callback=JSON_CALLBACK", {cache: true});
            }
        }
    }]);
',
                    'javascript', false);
                ?>
                </pre>
            </div>
        </div>
    </div>
</section>