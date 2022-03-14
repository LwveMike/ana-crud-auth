<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;
use Auth;

class TweetsController extends Controller
{
    
    public function store(Request $request)
    {
        $id = Auth::user()->id;

        $request->validate([
            'body' => 'required',
        ]);

        $data = [
            'body' => $request->body,
            'user_id' => $id

        ];

        Tweet::create($data);

        return redirect('/');


    }

    public function addTweet() {
        return view('add-article');
    }

    public function getUpdate() {
        return view('update-article');
    }

    public function update($id, Request $request) {
        $userId = Auth::user()->id;

        $tweet = Tweet::where(['id' => intval($id)])->get();

        $request->validate(['body' => 'required']);

        if(empty($tweet[0])) {
            return redirect('/');
        } else {
            if($tweet[0]->user_id === $userId) {
                Tweet::where(['id' => intval($id)])->update(['body' => $request->body]);
                return redirect('/');
            }
            return redirect('/');

        }
    }

    public function index() {
        $tweets = Tweet::all();

        return view('home')->with('tweets', $tweets);
    }

    public function destroy($id)
    {
        $userId = Auth::user()->id;

        $tweet = Tweet::where(['id' => intval($id)])->get();

        if(empty($tweet[0])) {
            return redirect('/');
        } else {
            if($tweet[0]->user_id === $userId) {
                Tweet::where(['id' => intval($id)])->delete();
                return redirect('/');
            }
            return redirect('/');
        }
    }
}
