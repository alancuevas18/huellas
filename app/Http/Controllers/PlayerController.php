<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        // SearchPlayer($request->nombre)->
            if($request->ano_nac) {
                $players = Player::Search($request->nombre)->Year($request->ano_nac)->orderBy('nombre', 'desc')->paginate(10);
            }else {
                $players = Player::Search($request->nombre)->orderBy('nombre', 'asc')->paginate(10);
            }
        
        return view('player.list', 
            [
                'players' => $players
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('player.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $this->validate($request, [
            'nombre' => 'required|max:100',
            'apellido' => 'required',
            'fecha_nac' => 'required',
            'direccion' => 'required|max:100',
            'telefono' => 'required',
            'correo' => 'email|unique:players',
            'foto' => 'required|mimes:jpeg,bmp,png',
            'acta_nac' => 'required|mimes:jpeg,bmp,png'
        ]);
        $foto = $request->file('foto')->store('fotos');
        $acta_nac = $request->file('acta_nac')->store('actas');
        $player = new Player;
        $player->nombre = $request->nombre;
        $player->apellido = $request->apellido;
        $player->fecha_nac = $request->fecha_nac;
        $player->direccion = $request->direccion;
        $player->telefono = $request->telefono;
        $player->correo = $request->correo;
        $player->foto = $foto;
        $player->acta_nac = $acta_nac;
        $player->edad = Carbon::parse($player->fecha_nac)->age;
        $player->save();
        flash('Jugador agregado con exito!')->success()->important();
        return back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player, $categoria, $edad, $edad2)
    {//Between
        $players = Player::all()->where('edad', '>=', $edad)->where('edad', '<=', $edad2);

        return view('pages.jugadores',
        [
            'players' => $players
        ]);


    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player, $id)
    {
        $player = Player::FindOrFail($id);
        $player->delete();
        flash('Jugador eliminado con exito!')->error()->important();
        return back();
    }

}
