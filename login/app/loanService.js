loanApp.factory('loanService', function () {
    return {
        calculateExpressLoan: function($amount, $duration, $interestRate, $periodsInYear, $initialPayment, $finalPayment) {
            var $result = {
                payment: 0,
                totalRepayment: 0,
                interestPayable: 0,
                representativeApr: 0 
            };

			var interestRatePercentage = ($interestRate / 100);
			var interestRatePerPeriod = interestRatePercentage / $periodsInYear;
			var p1 = interestRatePerPeriod / (1-(Math.pow(1+interestRatePerPeriod, -$duration)));
			
			$result.payment = evenRound($amount * p1, 2);
			$result.totalRepayment = evenRound($result.payment * $duration, 2);
			$result.interestPayable = $result.totalRepayment - $amount;

            // Calculate APR
            var x = 1.0001;
            var fx = 0;
            var dx = 0;
            var z = 0;
            do {
                fx = $initialPayment + $result.payment * (Math.pow(x, $duration + 1) - x) / (x - 1) + $finalPayment * Math.pow(x, $duration) - $amount;
                dx = $result.payment * ($duration * Math.pow(x, $duration + 1) - ($duration + 1) * Math.pow(x, $duration) + 1) / Math.pow(x - 1, 2) + $duration * $finalPayment * Math.pow(x, $duration - 1);
                z = fx / dx;
                x = x - z;
            } while (Math.abs(z) > 1e-9);
            $result.representativeApr = evenRound(100 * (Math.pow(1 / x, $periodsInYear) - 1), 1);
			
            return $result;
        },
		
        calculateLoan: function($amount, $duration, $interestRate, $periodsInYear, $initialPayment, $finalPayment) {
            var $result = {
                payment: 0,
                totalRepayment: 0,
                interestPayable: 0,
                representativeApr: 0
            };

            // Calculate Repayment Amount
            $result.payment = evenRound(
				(
					Math.round(
						(
							($amount * 
								(1 + (
										($interestRate / 100) * ($duration / $periodsInYear)
									)
								)
							) / $duration
						) * 100
					)
				) / 100, 2);
				
            $result.totalRepayment = evenRound($result.payment * $duration, 2);
            $result.interestPayable = evenRound($result.totalRepayment - $amount, 2);

            // Calculate APR
            var x = 1.0001;
            var fx = 0;
            var dx = 0;
            var z = 0;
            do {
                fx = $initialPayment + $result.payment * (Math.pow(x, $duration + 1) - x) / (x - 1) + $finalPayment * Math.pow(x, $duration) - $amount;
                dx = $result.payment * ($duration * Math.pow(x, $duration + 1) - ($duration + 1) * Math.pow(x, $duration) + 1) / Math.pow(x - 1, 2) + $duration * $finalPayment * Math.pow(x, $duration - 1);
                z = fx / dx;
                x = x - z;
            } while (Math.abs(z) > 1e-9);

            $result.representativeApr = evenRound(100 * (Math.pow(1 / x, $periodsInYear) - 1), 1);

            return $result;
        }
    }

    function evenRound(num, decimalPlaces) {
        var d = decimalPlaces || 0;
        var m = Math.pow(10, d);
        var n = +(d ? num * m : num).toFixed(8); // Avoid rounding errors
        var i = Math.floor(n), f = n - i;
        var e = 1e-8; // Allow for rounding errors in f
        var r = (f > 0.5 - e && f < 0.5 + e) ?
                    ((i % 2 == 0) ? i : i + 1) : Math.round(n);
        return d ? r / m : r;
    };
});