@if($player->position == 'GK')
<span class="badge" style="background-color:#e9573e">{{$player->position}}</span>
@elseif($player->position == 'CB' || $player->position == 'LB' || $player->position == 'RB')
<span class="badge" style="background-color:#f6bb43">{{$player->position}}</span>
@elseif($player->position == 'CM' || $player->position == 'CDM' || $player->position == 'LM' || $player->position == 'CAM' || $player->position == 'RM')
<span class="badge" style="background-color:#8dc153">{{$player->position}}</span>
@elseif($player->position == 'ST' || $player->position == 'LW' || $player->position == 'RW')
<span class="badge" style="background-color:#4b89dc">{{$player->position}}</span>
@endif