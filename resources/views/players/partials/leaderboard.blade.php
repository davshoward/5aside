<table class="leaderboard">
	<thead>
		<tr>
			<th colspan="10"></th>
			<th colspan="3" class="handicap">Handicap</th>
			<th></th>
		</tr>
		<tr>
			<th>Player</th>
			<th>Pld</th>
			<th>W</th>
			<th>D</th>
			<th>L</th>
			<th>F</th>
			<th>A</th>
			<th>GD</th>
			<th>Pts</th>
			<th>Win %</th>
			<th>Pld</th>
			<th>W</th>
			<th>L</th>
			<th>Last App</th>
		</tr>
	</thead>
	@foreach ($players as $player)
	<tr>
		<td class="name">
			{!! link_to_route('players.show', $player->first_name . ' ' . $player->last_name, $player->id) !!}
		</td>
		<td>{{ $player->apps }}</td>
		<td>{{ $player->wins }}</td>
		<td>{{ $player->draws }}</td>
		<td>{{ $player->losses }}</td>
		<td>{{ $player->goals_for }}</td>
		<td>{{ $player->goals_against }}</td>
		<td>{{ $player->diff }}</td>
		<td>{{ $player->wins * 3 + $player->draws}}</td>
		<td>{{ round($player->win_percentage, 1) }}%</td>
		<td>{{ $player->handicap_apps }}</td>
		<td>{{ $player->handicap_wins }}</td>
		<td>{{ $player->handicap_losses }}</td>
		<td>{{ $player->last_app }}</td>
	</tr>
	@endforeach
</table>