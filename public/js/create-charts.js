(function ($) {

	var charts = {
		init: function () {
			Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif'
			Chart.defaults.global.defaultFontColor = '#010101'

			this.ajaxGetDadosTemp()
			this.ajaxGetDadosTensao()
			this.ajaxGetDadosCorrente()
			this.ajaxGetDadosFluxo()
			this.ajaxGetDadosGas()
			this.ajaxGetDadosUmidade()
			this.ajaxGetDadosPotencia()
			this.ajaxGetDadosVazao()
		},

		/**
		 * PEGA DADOS
		 */
		ajaxGetDadosTemp: function () {
			var urlPath = 'http://' + window.location.hostname + ':8000' + '/chartmain'
			var request = $.ajax({
				method: 'GET',
				url: urlPath
			})

			request.done(function (response) {
				// console.log(response)
				charts.createCompletedJobsChartTemp(response)
			})
		},

		ajaxGetDadosCorrente: function () {
			var urlPath = 'http://' + window.location.hostname + ':8000' + '/chartmain'
			var request = $.ajax({
				method: 'GET',
				url: urlPath
			})

			request.done(function (response) {
				// console.log(response)
				charts.createCompletedJobsChartCorrente(response)
			})
		},

		ajaxGetDadosUmidade: function () {
			var urlPath = 'http://' + window.location.hostname + ':8000' + '/chartmain'
			var request = $.ajax({
				method: 'GET',
				url: urlPath
			})

			request.done(function (response) {
				// console.log(response)
				charts.createCompletedJobsChartUmidade(response)
			})
		},

		ajaxGetDadosVazao: function () {
			var urlPath = 'http://' + window.location.hostname + ':8000' + '/chartmain'
			var request = $.ajax({
				method: 'GET',
				url: urlPath
			})

			request.done(function (response) {
				// console.log(response)
				charts.createCompletedJobsChartVazao(response)
			})
		},

		ajaxGetDadosTensao: function () {
			var urlPath = 'http://' + window.location.hostname + ':8000' + '/chartmain'
			var request = $.ajax({
				method: 'GET',
				url: urlPath
			})

			request.done(function (response) {
				// console.log(response)
				charts.createCompletedJobsChartTensao(response)
			})
		},

		ajaxGetDadosPotencia: function () {
			var urlPath = 'http://' + window.location.hostname + ':8000' + '/chartmain'
			var request = $.ajax({
				method: 'GET',
				url: urlPath
			})

			request.done(function (response) {
				// console.log(response)
				charts.createCompletedJobsChartPotencia(response)
			})
		},

		ajaxGetDadosGas: function () {
			var urlPath = 'http://' + window.location.hostname + ':8000' + '/chartmain'
			var request = $.ajax({
				method: 'GET',$
				url: urlPath
			})

			request.done(function (response) {
				// console.log(response)
				charts.createCompletedJobsChartGas(response)
			})
		},

		ajaxGetDadosFluxo: function () {
			var urlPath = 'http://' + window.location.hostname + ':8000' + '/chartmain'
			var request = $.ajax({
				method: 'GET',
				url: urlPath
			})

			request.done(function (response) {
				// console.log(response)
				charts.createCompletedJobsChartFluxo(response)
			})
		},


		/**
		 * Created the Completed Jobs Chart
		 */
		createCompletedJobsChartTemp: function (response) {

			var ctx = document.getElementById("chartTemp")
			var myLineChart = new Chart(ctx, {
				type: 'bar',
				responsive: true,
				data: {
					// labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
					labels: response.temperaturas.meses,
					datasets: [{
						label: "Qtd",
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
						data: response.temperaturas.dados
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
								// max: response.temperaturas.max,
								// maxTicksLimit: 5
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

		createCompletedJobsChartCorrente: function (response) {

			/**
			 * MONTA GRÁFICO correntes
			 */
			var ctx = document.getElementById("chartCorrente")
			var myLineChart = new Chart(ctx, {
				type: 'bar',
				responsive: true,
				data: {
					// labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
					labels: response.correntes.meses,
					datasets: [{
						label: "Qtd",
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
						data: response.correntes.dados
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
								// max: response.correntes.max,
								// maxTicksLimit: 5
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

		createCompletedJobsChartTensao: function (response) {

			var ctx = document.getElementById("chartTensao")
			var myLineChart = new Chart(ctx, {
				type: 'bar',
				responsive: true,
				data: {
					// labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
					labels: response.tensoes.meses,
					datasets: [{
						label: "Qtd",
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
						data: response.tensoes.dados
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
								// max: response.tensoes.max,
								// maxTicksLimit: 5
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

		createCompletedJobsChartGas: function (response) {

			var ctx = document.getElementById("chartGas")
			var myLineChart = new Chart(ctx, {
				type: 'bar',
				responsive: true,
				data: {
					// labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
					labels: response.gas.meses,
					datasets: [{
						label: "Qtd",
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
						data: response.gas.dados
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
								// max: response.gas.max,
								// maxTicksLimit: 5
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

		createCompletedJobsChartUmidade: function (response) {

			var ctx = document.getElementById("chartUmidade")
			var myLineChart = new Chart(ctx, {
				type: 'bar',
				responsive: true,
				data: {
					// labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
					labels: response.umidade.meses,
					datasets: [{
						label: "Qtd",
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
						data: response.umidade.dados
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
								// max: response.umidade.max,
								// maxTicksLimit: 5
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

		createCompletedJobsChartPotencia: function (response) {

			var ctx = document.getElementById("chartPotencia")
			var myLineChart = new Chart(ctx, {
				type: 'bar',
				responsive: true,
				data: {
					// labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
					labels: response.potencia.meses,
					datasets: [{
						label: "Qtd",
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
						data: response.potencia.dados
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
								// max: response.potencias.max,
								// maxTicksLimit: 5
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

		createCompletedJobsChartVazao: function (response) {

			var ctx = document.getElementById("chartVazao")
			var myLineChart = new Chart(ctx, {
				type: 'bar',
				responsive: true,
				data: {
					// labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
					labels: response.vazao.meses,
					datasets: [{
						label: "Qtd",
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
						data: response.vazao.dados
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
								// max: response.vazao.max,
								// maxTicksLimit: 5
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

		createCompletedJobsChartFluxo: function (response) {

			var ctx = document.getElementById("chartFluxo")
			var myLineChart = new Chart(ctx, {
				type: 'bar',
				responsive: true,
				data: {
					// labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
					labels: response.fluxo.meses,
					datasets: [{
						label: "Qtd",
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
						data: response.fluxo.dados
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
								// max: response.fluxo.max,
								// maxTicksLimit: 5
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

	}

	charts.init()

})(jQuery)