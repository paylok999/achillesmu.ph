@extends('layout')

@section('content')
<div id="page-content">
<h1>Season 15 Server Information</h1>
    <div class="content-wrapper" id="serverinfo">
        <h4 style="padding:10px;">Basic Information</h4>
        <table  class="table table-dark">
            
          <thead>
            
          </thead>
          <tbody>
            <tr>
                <td class="server-stat">Version</td>
                <td class="server-value">Season 18 Part 1</td>
            </tr>
            <tr>
                <td class="server-stat">Normal Experience</td>
                <td class="server-value">x30000</td>
            </tr>
            <tr>
                <td class="server-stat">Master Experience</td>
                <td class="server-value">x30000</td>
            </tr>
            <tr>
                <td class="server-stat">Majestic Experience</td>
                <td class="server-value">x30000</td>
            </tr>
            <tr>
                <td class="server-stat">Experience Multiplies</td>
                <td class="server-value">x1 multiplier bonus per party member</td>
            </tr>
            <tr>
                <td class="server-stat">Seal Experience</td>
                <td class="server-value">None</td>
            </tr>
            <tr>
                <td class="server-stat">VIP Server</td>
                <td class="server-value">None</td>
            </tr>

            <tr>
                <td class="server-stat">Max Normal Level</td>
                <td class="server-value">400</td>
            </tr>
            <tr>
                <td class="server-stat">Max Master Level</td>
                <td class="server-value">400</td>
            </tr>
            <tr>
                <td class="server-stat">Max Majestic Level</td>
                <td class="server-value">650</td>
            </tr>
            <tr>
                <td class="server-stat">Reset</td>
                <td class="server-value">None</td>
            </tr>
            <tr>
                <td class="server-stat">Offlevel</td>
                <td class="server-value">None</td>
            </tr>
            <tr>
                <td class="server-stat">Max Client</td>
                <td class="server-value">5</td>
            </tr>
          </tbody>
        </table>
    </div>
    
    <div class="content-wrapper" id="serverinfo">
        <h4 style="padding:10px;">Starting Gear</h4>
        <table  class="table table-dark">
            
          <thead>
            
          </thead>
          <tbody>
            <tr>
                <td class="server-stat">Armory</td>
                <td class="server-value">
                    <ul>
                        <li>Apprentice Set +11 (Bounded)</li>
                    </ul>
                </td>

            </tr>
            <tr>
                <td class="server-stat">Weapon</td>
                <td class="server-value">
                    <ul>
                        <li>Excellent Weapon +11 (Bounded)</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="server-stat">Wings</td>
                <td class="server-value">
                    <ul>
                        <li>Conqueror Wing (Bounded))</li>
                        <li>7 Days Expirable</li>
                    </ul>
                </td>
            </tr>
          </tbody>
        </table>
    </div>
    
    <div class="content-wrapper" id="serverinfo">
        <h4 style="padding:10px;">Item System</h4>
        <table  class="table table-dark">
            
          <thead>
            
          </thead>
          <tbody>
            <tr>
                <td class="server-stat">Excellent Items</td>
                <td class="server-value">Max 2 Options</td>
            </tr>
            <tr>
                <td class="server-stat">Socket Items</td>
                <td class="server-value">Max 5 Socket. No Excellent Socket</td>
            </tr>
            <tr>
                <td class="server-stat">Seed Sphere Max Level</td>
                <td class="server-value">Level 20</td>
            </tr>
            <tr>
                <td class="server-stat">Ancient Items</td>
                <td class="server-value">No Excellent</td>
            </tr>
          </tbody>
        </table>
    </div>
    
    <div class="content-wrapper" id="serverinfo">
        <h4 style="padding:10px;">Vulcanus Drop System</h4>
        <table  class="table table-dark">
            
          <thead>
            
          </thead>
          <tbody>
            <tr>

            <tr>
                <td class="server-stat">Ancient Drop</td>
                <td class="server-value">
                    <ul>
                        <li>Random Ancient Items</li>
                    </ul>
                </td>
            </tr>
          </tbody>
        </table>
    </div>
    
    <div class="content-wrapper" id="serverinfo">
        <h4 style="padding:10px;">Jewel System</h4>
        <table  class="table table-dark">
            
          <thead>
            
          </thead>
          <tbody>
            <tr>
                <td class="server-stat">Mysterious Stone</td>
                <td class="server-value">Used to changed Mastery Item option, stat and luck with 70% success rate</td>
            </tr>
            <tr>
                <td class="server-stat">Jewel of Soul</td>
                <td class="server-value">.010% Drop Rate all maps</td>
            </tr>
            <tr>
                <td class="server-stat">Jewel of Bless</td>
                <td class="server-value">.020% Drop Rate all maps</td>
            </tr>
          </tbody>
        </table>
    </div>
    
    <div class="content-wrapper" id="serverinfo">
        <h4 style="padding:10px;">Pentagram System</h4>
        <table  class="table table-dark">
            
          <thead>
            
          </thead>
          <tbody>
            <tr>
                <td class="server-stat">Max Rank (PVP)</td>
                <td class="server-value">Rank 3</td>
            </tr>
            <tr>
                <td class="server-stat">Max Rank (PVM)</td>
                <td class="server-value">Rank 4</td>
            </tr>
            <tr>
                <td class="server-stat">Max Option</td>
                <td class="server-value">10</td>
            </tr>
          </tbody>
        </table>
    </div>
    
    <div class="content-wrapper" id="serverinfo">
        <h4 style="padding:10px;">Ingame Event System</h4>
        <table  class="table table-dark">
            
          <thead>
            
          </thead>
          <tbody>
            <tr>
                <td class="server-stat">Blood Castle</td>
                <td class="server-value">Max 10 entries per day.
                <br>
                Rewards: 
                    <ul>
                        <li>Random Jewels</li>
                        <li>Gremory Mastery Box (Minor) - 100 to 300 RUUDS</li>
                        <li>Gremory Mastery Box (Standard) - 300 to 500 RUUDS</li>
                        <li>Gremory Mastery Box (Greater) - 500 to 1000 RUUDS</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="server-stat">Devil Square</td>
                <td class="server-value">Max 10 entries per day.
                Rewards: 
                    <ul>
                        <li>Gremory Mastery Box (Minor) - 100 to 300 RUUDS</li>
                        <li>Gremory Mastery Box (Standard) - 300 to 500 RUUDS</li>
                        <li>Gremory Mastery Box (Greater) - 500 to 1000 RUUDS</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="server-stat">Chaos Castle</td>
                <td class="server-value">Max 10 entries per day.
                Rewards: 
                    <ul>
                        <li>Gremory Mastery Box (Minor) - 100 to 300 RUUDS</li>
                        <li>Gremory Mastery Box (Standard) - 300 to 500 RUUDS</li>
                        <li>Gremory Mastery Box (Greater) - 500 to 1000 RUUDS</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="server-stat">Gaions</td>
                <td class="server-value">Max 10 entries per day.
                Rewards: 
                    <ul>
                        <li>Gremory Mastery Box (Minor) - 100 to 300 RUUDS</li>
                        <li>Gremory Mastery Box (Standard) - 300 to 500 RUUDS</li>
                        <li>Gremory Mastery Box (Greater) - 500 to 1000 RUUDS</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="server-stat">Maze</td>
                <td class="server-value">Reset Once a Week
                Rewards: 
                    <ul>
                        <li>Labyrinth Box (Lower) - 100 to 300 RUUDS</li>
                        <li>Labyrinth Mastery Box (Medium) - 300 to 500 RUUDS</li>
                        <li>Labyrinth Mastery Box (Higher) - 500 to 1000 RUUDS</li>
                    </ul>
                </td>
            </tr>
          </tbody>
        </table>
    </div>
    
    <div class="content-wrapper" id="serverinfo">
        <h4 style="padding:10px;">Event Item System</h4>
        <table  class="table table-dark">
            
          <thead>
            
          </thead>
          <tbody>
            <tr>
                <td class="server-stat">Star of Sacred Birth</td>
                <td class="server-value">Drops all over maps<br>Drop Random excellent items.</td>
            </tr>
            <tr>
                <td class="server-stat">MUU Egg</td>
                <td class="server-value">Drops random MUUN and Evolution Stone (1 Week)</td>
            </tr>
            <tr>
                <td class="server-stat">Box of Kundun</td>
                <td class="server-value">Huntable on Golden Monster. Drops WCoins and random Jewels
                    <ul>
                        <li>Box of Kundun+1 - 1wc and 1 random jewel</li>
                        <li>Box of Kundun+2 - 2wc and 2 random jewels</li>
                        <li>Box of Kundun+3 - 3wc and 3 random jewels</li>
                        <li>Box of Kundun+4 - 4wc and 4 random jewels</li>
                        <li>Box of Kundun+5 - 5wc and 5 random jewels</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="server-stat" id="miniboss">Mini Boss</td>
                <td class="server-value">Respawn every 6 Hours from the time killed. Drops PlayMU Diamonds (Bronze)
                    <ul>
                        <li>Ice Queen - Devias 4</li>
                        <li>Gorgon - Dungeon 3</li>
                        <li>Balrog - Losttower 7</li>
                        <li>Zaikan - Tarkan 2</li>
                        <li>Hydra - Atlans 2-3</li>
                    </ul>
                </td>
            </tr>
			<tr>
                <td class="server-stat" id="miniboss">Main Boss</td>
                <td class="server-value">Respawn every 6 Hours from the time killed. Drops PlayMU Diamonds (Silver)
                    <ul>
                        <li>Kundun - Kalima 7</li>
                        <li>Erohim - Valley of Loren</li>
                        <li>Selupan - Raklion</li>
                        <li>Nightmare - Kantur Relic</li>
                        <li>Medusa - Swamp of Calmness</li>
                    </ul>
                </td>
            </tr>
			<tr>
                <td class="server-stat" id="miniboss">Super Main Boss</td>
                <td class="server-value">Respawn every 6 Hours from the time killed. Drops PlayMU Diamonds (Gold)
                    <ul>
                        <li>Lord Silvester</li>
                        <li>Core Magnify</li>
                        <li>Ferea</li>
                        <li>Nix</li>
                        <li>God of Darkness</li>
                    </ul>
                </td>
            </tr>
          </tbody>
        </table>
    </div>
    
    <div class="content-wrapper" id="serverinfo">
        <h4 style="padding:10px;">Invation System</h4>
        <table  class="table table-dark">
            
          <thead>
            
          </thead>
          <tbody>
            <tr>
                <td class="server-stat">Red Dragon Invasion</td>
                <td class="server-value">
                    <ul>
                        <li>7 AM</li>
                        <li>11 AM</li>
                        <li>3 PM</li>
                        <li>7 PM</li>
                    </ul>
                </td>
             
            </tr>
            <tr>
               <td class="server-stat">Skeleton King Invasion</td>
                <td class="server-value">
                    <ul>
                        <li>8 AM</li>
                        <li>12 noon</li>
                        <li>4 PM</li>
                        <li>8 PM</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="server-stat">Golden Invasion</td>
                <td class="server-value">
                    <ul>
                        <li>9 AM</li>
                        <li>1 PM</li>
                        <li>5 PM</li>
                        <li>9 PM</li>
                    </ul>
                </td>
             </tr>
             <tr>
                <td class="server-stat">White Wizard Invasion</td>
                <td class="server-value">
                    <ul>
                        <li>2:30 AM</li>
                        <li>5:30 AM</li>
                        <li>8:30 AM</li>
                        <li>11:30 AM</li>
                        <li>2:30 PM</li>
                        <li>5:30 PM</li>
                        <li>8:30 PM</li>
                        <li>11:30 PM</li>
                    </ul>
                </td>
             <tr>
          </tbody>
        </table>
    </div>
    
    <div class="content-wrapper" id="serverinfo">
        <h4 style="padding:10px;">Weekly Events</h4>
        <table  class="table table-dark">
            
          <thead>
            
          </thead>
          <tbody>
            <tr>
                <td class="server-stat">Monday</td>
                <td class="server-value">Facebook Event</td>
            </tr>
            <tr>
                <td class="server-stat">Tuesday</td>
                <td class="server-value">Facebook Event</td>
            </tr>
            <tr>
                <td class="server-stat">Wednesday</td>
                <td class="server-value">Arka War</td>
            </tr>
            <tr>
                <td class="server-stat">Thursday</td>
                <td class="server-value">Facebook Event</td>
            </tr>
            <tr>
                <td class="server-stat">Friday</td>
                <td class="server-value">Facebook Event</td>
            </tr>
            <tr>
                <td class="server-stat">Saturday</td>
                <td class="server-value">Castle Siege (Time to TBA)</td>
            </tr>
            <tr>
                <td class="server-stat">Sunday</td>
                <td class="server-value">In Game Event (time to TBA)</td>
            </tr>
          </tbody>
        </table>
    </div>
    
    
    <div class="content-wrapper" id="serverinfo">
        <h4 style="padding:10px;">Coin System</h4>
        <table  class="table table-dark">
            
          <thead>
            
          </thead>
          <tbody>
            <tr>
                <td class="server-stat">Goblin Points Bonus</td>
                <td class="server-value">5 Goblin Points per hour online</td>
            </tr>
            <tr>
                <td class="server-stat">Boss Kill Wcoins Bonus</td>
                <td class="server-value">10 Wcoins</td>
            </tr>
            <tr>
                <td class="server-stat">Mini Boss Kill Goblin Points Bonus</td>
                <td class="server-value">10 Goblin Points</td>
            </tr>
          </tbody>
        </table>
    </div>
    
    <div class="content-wrapper" id="serverinfo">
        <h4 style="padding:10px;">Donate System</h4>
        <table  class="table table-dark">
            
          <thead>
            
          </thead>
          <tbody>
            <tr>
                <td class="server-stat">Raffle</td>
                <td class="server-value">Available once every 2 months</td>
            </tr>
            <tr>
                <td class="server-stat">Wcoins</td>
                <td class="server-value">Available via website anytime. 1:1 WC to PHP Ratio</td>
            </tr>
          </tbody>
        </table>
    </div>
    
    <div class="content-wrapper" id="serverinfo">
        <h4 style="padding:10px;">Bonus System</h4>
        <table  class="table table-dark">
            
          <thead>
            
          </thead>
          <tbody>
            <tr>
                <td class="server-stat">Refer a friend</td>
                <td class="server-value">Prizes and info TBA. Claimable via website</td>
            </tr>
            <tr>
                <td class="server-stat">Coupon Code</td>
                <td class="server-value">Prizes and info TBA. Claimable via website</td>
            </tr>
          </tbody>
        </table>
    </div>
    
    
</div>
@stop