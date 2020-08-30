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
                <td class="server-value">Season 15 Part 1-3</td>
            </tr>
            <tr>
                <td class="server-stat">Normal Experience</td>
                <td class="server-value">x1500</td>
            </tr>
            <tr>
                <td class="server-stat">Master Experience</td>
                <td class="server-value">x1500</td>
            </tr>
            <tr>
                <td class="server-stat">Majestic Experience</td>
                <td class="server-value">x1500</td>
            </tr>
            <tr>
                <td class="server-stat">Experience Multiplies</td>
                <td class="server-value">x3 multiplier bonus per party member</td>
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
                <td class="server-value">400</td>
            </tr>
            <tr>
                <td class="server-stat">Reset</td>
                <td class="server-value">None</td>
            </tr>
            <tr>
                <td class="server-stat">Offlevel</td>
                <td class="server-value">None</td>
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
                <td class="server-value">Max 2 Options. 3 Options with Jewel of Excess</td>
            </tr>
            <tr>
                <td class="server-stat">Socket Items</td>
                <td class="server-value">Max 5 Socket. No Excellent Socket</td>
            </tr>
            <tr>
                <td class="server-stat">Seed Sphere Max Level</td>
                <td class="server-value">Level 10</td>
            </tr>
            <tr>
                <td class="server-stat">Ancient Items</td>
                <td class="server-value">No Excellent</td>
            </tr>
            <tr>
                <td class="server-stat">Wcoins Bonus</td>
                <td class="server-value">3wcoins per hour online</td>
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
                <td class="server-stat">Jewel of Dark Life</td>
                <td class="server-value">Used to upgrade item option to max +28 with 70% success rate</td>
            </tr>
            <tr>
                <td class="server-stat">Jewel of Dark Soul</td>
                <td class="server-value">Used to upgrade item to +11 with 70% success rate</td>
            </tr>
            <tr>
                <td class="server-stat">Jewel of Luck</td>
                <td class="server-value">Used to add luck on item  with 70% success rate</td>
            </tr>
            <tr>
                <td class="server-stat">Jewel of Excess</td>
                <td class="server-value">Used to add 3 exc option on non exc, excellent and mastery item or weapon  with 70% success rate</td>
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
                <td class="server-value">Max 4 entries per day.
                <br>
                Rewards: 
                    <ul>
                        <li>Random Jewels</li>
                        <li>Gremory Mastery Box (Minor) - 100 to 300 RUUDS</li>
                        <li>Gremory Mastery Box (Standard) - 200 to 500 RUUDS</li>
                        <li>Gremory Mastery Box (Greater) - 300 to 1000 RUUDS</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="server-stat">Devil Square</td>
                <td class="server-value">Max 4 entries per day.
                Rewards: 
                    <ul>
                        <li>Gremory Mastery Box (Minor) - 100 to 300 RUUDS</li>
                        <li>Gremory Mastery Box (Standard) - 200 to 500 RUUDS</li>
                        <li>Gremory Mastery Box (Greater) - 300 to 1000 RUUDS</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="server-stat">Chaos Castle</td>
                <td class="server-value">Max 4 entries per day.
                Rewards: 
                    <ul>
                        <li>Gremory Mastery Box (Minor) - 100 to 300 RUUDS</li>
                        <li>Gremory Mastery Box (Standard) - 200 to 500 RUUDS</li>
                        <li>Gremory Mastery Box (Greater) - 300 to 1000 RUUDS</li>
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
                <td class="server-stat">Heart Of Love</td>
                <td class="server-value">Drop Random normal items. +0 to +7. <br>10% Jewel of Chaos <br> 5% Loch Feather/Crest of Monarch</td>
            </tr>
            <tr>
                <td class="server-stat">Box of Kundun</td>
                <td class="server-value">Huntable on Golden Monster. Drops WCoins and random Jewels
                    <ul>
                        <li>Box of Kundun+1 - 5wc and 1 random jewel at 70% rate</li>
                        <li>Box of Kundun+2 - 10wc and 2 random jewels at 70% rate</li>
                        <li>Box of Kundun+3 - 15wc and 3 random jewels at 70% rate</li>
                        <li>Box of Kundun+4 - 20wc and 4 random jewels at 70% rate</li>
                        <li>Box of Kundun+5 - 25wc and 5 random jewels at 70% rate</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="server-stat">Mini Boss</td>
                <td class="server-value">Drops Random Bless, Souls, Intermediate Stone
                    <ul>
                        <li>Ice Queen - Devias 4</li>
                        <li>Gorgon - Dungeon 3</li>
                        <li>Balrog - Losttower 7</li>
                        <li>Zaikan - Tarkan 2</li>
                        <li>Hydra - Atlans 2-3</li>
                    </ul>
                </td>
            </tr>
          </tbody>
        </table>
    </div>
    
    
    <div class="content-wrapper" id="serverinfo">
        <h4 style="padding:10px;">Wcoin System</h4>
        <table  class="table table-dark">
            
          <thead>
            
          </thead>
          <tbody>
            <tr>
                <td class="server-stat">Wcoins Bonus</td>
                <td class="server-value">3wcoins per hour online</td>
            </tr>
            <tr>
                <td class="server-stat">Boss Kill Wcoins Bonus</td>
                <td class="server-value">100 Wcoins</td>
            </tr>
            <tr>
                <td class="server-stat">Mini Boss Kill Wcoins Bonus</td>
                <td class="server-value">10 Wcoins</td>
            </tr>
          </tbody>
        </table>
    </div>
    
    
</div>
@stop