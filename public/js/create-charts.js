(function ($) {

	var charts = {
		init: function () {
			Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif'
			Chart.defaults.global.defaultFontColor = '#010101'

			this.ajaxGetDadosMensaisTemp()
			this.ajaxGetDadosMensaisTempRuim()
			this.ajaxGetDadosMensaisTempBar()
			this.ajaxGetDadosMensaisTempBarRuim()
		},

		/**
		 * PEGA DADOS TEMPERATURAS BOAS
		 */
		ajaxGetDadosMensaisTemp: function () {
			var urlPath = 'http://' + window.location.hostname + ':8000' + '/chartmain'
			var request = $.ajax({
				method: 'GET',
				url: urlPath
			})

			request.done(function (response) {
				console.log(response)
				charts.createCompletedJobsChart(response)
			})
		},

		/**
		 * PEGA DADOS TEMPERATURAS RUINS
		 */
		ajaxGetDadosMensaisTempRuim: function () {
			var urlPath = 'http://' + window.location.hostname + ':8000' + '/chartmain'
			var request = $.ajax({
				method: 'GET',
				url: urlPath
			})

			request.done(function (response) {
				console.log(response)
				charts.createCompletedJobsChartRuim(response)
			})
		},

		/**
		 * PEGA DADOS TEMPERATURAS RUINS
		 */
		ajaxGetDadosMensaisTempBar: function () {
			var urlPath = 'http://' + window.location.hostname + ':8000' + '/chartmain'
			var request = $.ajax({
				method: 'GET',
				url: urlPath
			})

			request.done(function (response) {
				console.log(response)
				charts.createCompletedJobsChartBar(response)
			})
		},

		ajaxGetDadosMensaisTempBarRuim: function () {
			var urlPath = 'http://' + window.location.hostname + ':8000' + '/chartmain'
			var request = $.ajax({
				method: 'GET',
				url: urlPath
			})

			request.done(function (response) {
				console.log(response)
				charts.createCompletedJobsChartBarRuim(response)
			})
		},

		/**
		 * Created the Completed Jobs Chart
		 */
		createCompletedJobsChart: function (response) {

			/**
			 * MONTA GRÁFICO TEMPERATURAS BOAS
			 */
			var ctx = document.getElementById("chartTempBoas")
			var myLineChart = new Chart(ctx, {
				type: 'bar',
				responsive: true,
				data: {
					// labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
					labels: response.tempRuins.meses,
					datasets: [{
						label: "Temp",
						lineTension: 0.3,
						backgroundColor: "rgba(2,117,216,0.2)",
						borderColor: "rgba(2,117,216,1)",
						pointRadius: 5,
						pointBackgroundColor: "rgba(2,117,216,1)",
						pointBorderColor: "rgba(255,255,255,0.8)",
						pointHoverRadius: 5,
						pointHoverBackgroundColor: "rgba(2,117,216,1)",
						pointHitRadius: 20,
						pointBorderWidth: 2,
						data: response.tempRuins.temp_dados
					}],
				},
				options: {
					scales: {
						xAxes: [{
							time: {
								unit: 'date'
							},
							gridLines: {
								display: false
							}
						}],
						yAxes: [{
							ticks: {
								min: 0,
								// max: response.max,
								maxTicksLimit: 5
							},
							gridLines: {
								color: "rgba(0,0,0,0,125)",
							}
						}],
					},
					legend: {
						display: false
					}
				}
			})
		},

		createCompletedJobsChartRuim: function (response) {

			/**
			 * MONTA GRÁFICO TEMPERATURAS RUINS
			 */
			var ctx = document.getElementById("chartTempRuim")
			var myLineChart = new Chart(ctx, {
				type: 'line',
				data: {
					// labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
					labels: response.tempRuins.meses,
					datasets: [{
						label: "Temp",
						lineTension: 0.3,
						backgroundColor: "rgba(2,117,216,0.2)",
						borderColor: "rgba(2,117,216,1)",
						pointRadius: 5,
						pointBackgroundColor: "rgba(2,117,216,1)",
						pointBorderColor: "rgba(255,255,255,0.8)",
						pointHoverRadius: 5,
						pointHoverBackgroundColor: "rgba(2,117,216,1)",
						pointHitRadius: 20,
						pointBorderWidth: 2,
						data: response.tempRuins.temp_dados
					}],
				},
				options: {
					scales: {
						xAxes: [{
							time: {
								unit: 'date'
							},
							gridLines: {
								display: false
							},
							ticks: {
								maxTicksLimit: 7
							}
						}],
						yAxes: [{
							ticks: {
								min: 0,
								// max: response.max,
								maxTicksLimit: 5
							},
							gridLines: {
								color: "rgba(255, 255, 255,0.5)",
							}
						}],
					},
					legend: {
						display: false
					}
				}
			})
		},

		createCompletedJobsChartBar: function (response) {

			/**
			 * MONTA GRÁFICO TEMPERATURAS RUINS
			 */
			var ctx = document.getElementById("chartTempBar")
			var myLineChart = new Chart(ctx, {
				type: 'bar',
				data: {
					// labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
					labels: response.tempRuins.meses,
					datasets: [{
						label: "Temp",
						lineTension: 0.3,
						backgroundColor: "rgba(2,117,216,0.2)",
						borderColor: "rgba(2,117,216,1)",
						pointRadius: 5,
						pointBackgroundColor: "rgba(2,117,216,1)",
						pointBorderColor: "rgba(255,255,255,0.8)",
						pointHoverRadius: 5,
						pointHoverBackgroundColor: "rgba(2,117,216,1)",
						pointHitRadius: 20,
						pointBorderWidth: 2,
						data: response.tempRuins.temp_dados
					}],
				},
				options: {
					scales: {
						xAxes: [{
							time: {
								unit: 'date'
							},
							gridLines: {
								display: false
							},
							ticks: {
								maxTicksLimit: 7
							}
						}],
						yAxes: [{
							ticks: {
								min: 0,
								// max: response.max,
								maxTicksLimit: 5
							},
							gridLines: {
								color: "rgba(255, 255, 255,0.5)",
							}
						}],
					},
					legend: {
						display: false
					}
				}
			})
		}, 

		createCompletedJobsChartBarRuim: function (response) {

			/**
			 * MONTA GRÁFICO TEMPERATURAS RUINS
			 */
			var ctx = document.getElementById("chartTempBarRuim")
			var myLineChart = new Chart(ctx, {
				type: 'bar',
				data: {
					// labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
					labels: response.tempRuins.meses,
					datasets: [{
						label: "Temp",
						lineTension: 0.3,
						backgroundColor: "rgba(2,117,216,0.2)",
						borderColor: "rgba(2,117,216,1)",
						pointRadius: 5,
						pointBackgroundColor: "rgba(2,117,216,1)",
						pointBorderColor: "rgba(255,255,255,0.8)",
						pointHoverRadius: 5,
						pointHoverBackgroundColor: "rgba(2,117,216,1)",
						pointHitRadius: 20,
						pointBorderWidth: 2,
						data: response.tempRuins.temp_dados
					}],
				},
				options: {
					scales: {
						xAxes: [{
							time: {
								unit: 'date'
							},
							gridLines: {
								display: false
							},
							ticks: {
								maxTicksLimit: 7
							}
						}],
						yAxes: [{
							ticks: {
								min: 0,
								// max: response.max,
								maxTicksLimit: 5
							},
							gridLines: {
								color: "rgba(255, 255, 255,0.5)",
							}
						}],
					},
					legend: {
						display: false
					}
				}
			})
		}
	}

	charts.init()

})(jQuery)