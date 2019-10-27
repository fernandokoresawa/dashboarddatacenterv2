<h2 align="center">Alerta! Falha identificada no sistema! Verifique os sensores.</h2>

<p>Nome de usuário: Yasmin Uchôa</p>


<p>
	<b>Sensor: </b>
	{{ $lastTemp->sensor->nome_sensor }}
</p>

<p>
	<b>Dado: </b>
	{{ $lastTemp['dados'] }}
</p>

<p>
	<b>Data e hora: </b>
	{{ $lastTemp['data_hora'] }}
</p>
