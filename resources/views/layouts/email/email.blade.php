<div class="card-header">
	<h2 align="center">Alerta! Falha identificada no sistema! Verifique os sensores.</h2>
</div>

<div class="card-body" style="font-size: 1.3em">
	<p>
		<b>Nome de usuário:</b> {{ $user }}
	</p>

	<p>
		<b>Sensor: </b> {{ $lastSensor->sensor->nome_sensor }}
	</p>

	<p>
		<b>Dado: </b> {{ $lastSensor['dados'] }}
	</p>

	<p>
		<b>Data e hora: </b> {{ $lastSensor['data_hora'] }}
	</p>
</div>
