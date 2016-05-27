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
        $scope.converted = {"AUD": 0, "EUR": 0, "GBP": 0};
        $scope.$watch("amount", function(amount) {
            angular.forEach($scope.converted, function(convertedValue, currency) {
                ExchangeRate.getRate("USD", currency).then(function(rate) {
                    $scope.converted[currency] = (parseFloat(amount) || 0) * (rate || 0);
                });
            });
        });
    })
    .factory("ExchangeRate", ["$http", function($http) {
        var apiUrl = "http://apilayer.net/api/live?access_key=XXX";
        return {
            getRate: function(from, to) {
                var requestUrl = apiUrl + "&source=" + from + "&currencies=" + to
                    + "&callback=JSON_CALLBACK";
                return $http.jsonp(requestUrl, {cache: true}).then(function(response) {
                    return response.data.quotes[from + to];
                });
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