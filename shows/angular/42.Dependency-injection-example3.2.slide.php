<section class="slide" id="Dependency-injection-example3.2">
    <div>
        <h2>Dependency injection example <sup>(dummy)</sup></h2>
        <div class="example-source"
             data-ng-controller="example3Controller">
            <?php include 'examples/example3.php'; ?>
            <br class="clear"/>
            <hr>
            <div class="fs-65" data-ng-non-bindable>
                <?php echo code('
angular.module("angulardemo")
    .factory("ExchangeRateDummy", function() {
        var rates = {
            "UAHUSD": { from: "UAH", to: "USD", rate: 0.06 },
            "UAHEUR": { from: "UAH", to: "EUR", rate: 0.05 },
            "UAHGBP": { from: "UAH", to: "GBP", rate: 0.04 }
        };
        return {
            getRate: function(from, to) {
                return (from + to in rates) ? rates[from + to] : {};
            }
        }
    });
',
                    'javascript');
                ?>
            </div>
        </div>
    </div>
</section>