<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayersController extends Controller
{
    public function getPlayers(Request $request)
    {
        $players = [];
        if($request->sort == "order") {
            $players = Player::getSortedPlayers();
        }else{
            $players = Player::getPlayers();
        }
        return response()->json([
            'message' => 'Players got successfully',
            'data' => $players
        ], 200);
    }

    public function postPlayers(Request $request)
    {
        $createdPlayers = Player::createPlayers($request->players);

        if($createdPlayers){
            return response()->json([
                'message' => 'Players created successfully',
                'data' => $createdPlayers
            ], 200);
        }else{
            return response()->json([
                'message' => 'error',
            ], 400);
        }
    }

    public function putPlayer(Request $request)
    {
        $updatedPlayer = Player::putPlayer($request);

        if($updatedPlayer){
            return response()->json([
                'message' => 'Players updated successfully',
                'data' => $updatedPlayer
            ], 200);
        }else{
            return response()->json([
                'message' => 'error',
            ], 400);
        }
    }

    public function resetPlayersPositon()
    {
        $resetPlayers = Player::resetPlayersPositon();

        if($resetPlayers){
            return response()->json([
                'message' => 'Players reset successfully',
                'data' => $resetPlayers
            ], 200);
        }else{
            return response()->json([
                'message' => 'error',
            ], 400);
        }
    }
}
