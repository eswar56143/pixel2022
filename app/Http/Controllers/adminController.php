<?php

namespace App\Http\Controllers;

use App\Models\registrations;
use App\Models\teams;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class adminController extends Controller
{
    public function index(Request $request) {
        if($request->username == 'Admin' && $request->password == 'Pixel@2022') {
            if ($request->table == null) {
                return view('dashboard');
            }
        }
        else {
            return redirect('/login')->withErrors(
                [
                    'error' => 'Invalid Login Credentials'
                ]
            );
        }
    }
    public function fetch(Request $request) {
        $table = $request->table;
        if ($table == 'users') {
            $users = User::all();
            $this->response($users, 'users');
        }
        elseif ($table == 'code-combat') {
            $cc = registrations::where(function ($query) {
                        $query->where('event_id', '=', 1)
                        ->orWhere('event_id', '=', 9);
                    })->where('payment_done', true)->pluck('email');

            $users = User::whereIn('email', $cc)->get();
            // dd($cc);
            if($users->count() == 0) {
                echo 'no code-combat users to show';
            }
            else {
                $this->response($users, 'Code-combat');
            }
        }
        elseif ($table == 'debugging') {
            $cc = registrations::where(function ($query) {
                        $query->where('event_id', '=', 2)
                        ->orWhere('event_id', '=', 9);
                    })->where('payment_done', true)->pluck('email');
            $users = User::whereIn('email', $cc)->get();
            if($users->count() == 0) {
                echo 'no debugging users to show';
            }
            else {
                $this->response($users, 'Debugging');
            }
        }
        elseif ($table == 'gaming') {
            $cc = registrations::where('event_id', 3)->where('payment_done', true)->pluck('email');
            $users = User::whereIn('email', $cc)->get();
            if($users->count() == 0) {
                echo 'no gaming users to show';
            }
            else {
                $this->response($users, 'Gaming');
                $teams = teams::join('team_members', 'team_members.team_id', '=' , 'teams.team_id')->wherein('th_email', $cc)->get();
                if($teams->count() == 0) {
                    echo 'no gaming teams to show';
                }
                else {
                    $this->teams($teams, 'Gaming-teams');
                }
            }
        }
        elseif ($table == 'hackathon') {
            $cc = registrations::where('event_id', 4)->where('payment_done', true)->pluck('email');
            $users = User::whereIn('email', $cc)->get();
            if($users->count() == 0) {
                echo 'no hackathon users to show';
            }
            else {
                $this->response($users, 'Hackathon');
                $teams = teams::join('team_members', 'team_members.team_id', '=' , 'teams.team_id')->wherein('th_email', $cc)->get();
                if($teams->count() == 0) {
                    echo 'no hackathon teams to show';
                }
                else {
                    $this->teams($teams, 'Hackathon-teams');
                }
            }
        }
        elseif ($table == 'meme-gram') {
            $cc = registrations::where('event_id', 5)->where('payment_done', true)->pluck('email');
            $users = User::whereIn('email', $cc)->get();
            if($users->count() == 0) {
                echo 'no meme gram users to show';
            }
            else {
                $this->response($users, 'Meme Gram');

            }
        }
        elseif ($table == 'paper-presentation') {
            $cc = registrations::where(function ($query) {
                        $query->where('event_id', '=', 6)
                        ->orWhere('event_id', '=', 10);
                    })->where('payment_done', true)->pluck('email');
            $users = User::whereIn('email', $cc)->get();
            if($users->count() == 0) {
                echo 'no paper presentation users to show';
            }
            else {
                $this->response($users, 'Paper-presentation');
                $teams = teams::join('team_members', 'team_members.team_id', '=' , 'teams.team_id')->wherein('th_email', $cc)->where(function ($query) {
                        $query->where('event_id', '=', 6)
                        ->orWhere('event_id', '=', 10);
                    })->get();
                if($teams->count() == 0) {
                    echo 'no paper-presentation teams to show';
                }
                else {
                    $this->teams($teams, 'Paper-presentation-teams');
                }
            }
        }
        elseif ($table == 'natyakshetra') {
            $cc = registrations::where('event_id', 7)->where('payment_done', true)->pluck('email');
            $users = User::whereIn('email', $cc)->get();
            if($users->count() == 0) {
                echo 'no natyakshetra users to show';
            }
            else {
                $this->response($users, 'Natyakshetra');
                $teams = teams::join('team_members', 'team_members.team_id', '=' , 'teams.team_id')->wherein('th_email', $cc)->get();
                if($teams->count() == 0) {
                    echo 'no natyakshetra teams to show';
                }
                else {
                    $this->teams($teams, 'NatyakshetraHackathon-teams');
                }
            }
        }
        elseif ($table == 'quiz') {
            $cc = registrations::where(function ($query) {
                        $query->where('event_id', '=', 8)
                        ->orWhere('event_id', '=', 10);
                    })->where('payment_done', true)->pluck('email');
            $users = User::whereIn('email', $cc)->get();
            if($users->count() == 0) {
                echo 'no Quiz users to show';
            }
            else {
                $this->response($users, 'Quiz');
                $teams = teams::join('team_members', 'team_members.team_id', '=' , 'teams.team_id')->wherein('th_email', $cc)->where(function ($query) {
                        $query->where('event_id', '=', 8)
                        ->orWhere('event_id', '=', 10);
                    })->get();
                if($teams->count() == 0) {
                    echo 'no quiz teams to show';
                }
                else {
                    $this->teams($teams, 'Quiz-teams');
                }
            }
        }
    }

    public function response($users, $table) {
        $output = '<table id="table1" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Branch</th>
                        <th>Admission no</th>
                        <th>College</th>
                        <th>Location</th>
                    </tr>
                    </thead>';
        foreach ($users as $rows) {
            $output .= "<tr> <td>".$rows['id']."</td>
                        <td>".$rows['name']."</td>
                        <td>".$rows['email']."</td>
                        <td>".$rows['contact']."</td>
                        <td>".$rows['branch']."</td>
                        <td>".$rows['admnno']."</td>
                        <td>".$rows['college']."</td>
                        <td>".$rows['location']."</td>";
        }
        $output .="</table><br><button onclick=\"ExportToExcel('xlsx', '".$table."')\">Export table to excel</button> <br><br>";
        if ($table != 'users') {
            echo "<h5>Users registered for ".$table." are :</h5>";
        }
        echo $output;
    }

    public function teams($teams, $table) {

        echo "<h5 style='border:none'>Deatils of ".$table." are :</h5> ";

        echo '<table id="table2" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Team ID</th>
                        <th>Team Name</th>
                        <th>Team Head Email</th>
                        <th>Team Member Name</th>
                        <th>Branch</th>
                        <th>College</th>
                    </tr>
                    </thead>';
        foreach ($teams as $rows) {
            echo "<tr> <td>".$rows['team_id']."</td>
                        <td>".$rows['team_name']."</td>
                        <td>".$rows['th_email']."</td>
                        <td>".$rows['member_name']."</td>
                        <td>".$rows['branch']."</td>
                        <td>".$rows['college']."</td>";
        }
        echo"</table><br><button onclick=\"ExportTeams('xlsx', '".$table."')\">Export table to excel</button>";


    }
}
