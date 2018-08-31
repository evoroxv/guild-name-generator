<?php /*Template Name: NPCGenerator*/ ?>
<!DOCTYPE html>
<html>
<head>
<title>Random NPC Generator</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
h1 { color: #0a0a0a;
font: helvetica;
 }
body { background-color: #e8e8e8; }
p { color: #0a0a0a; }
a { color: #0a0a0a; }
button { color: #0a0a0a; padding: 1% }
@media only screen and (max-width: 786px) { button { padding: 2%; } }
@media only screen and (max-width: 500px) { button { padding: 4%; } }
label { border: 2px solid slateblue padding 10px; color: crimson}
input[type=checkbox] { display: none }
</style>

</head>
<body>
<div style="text-align: center">
<h1>The Random NPC Generator</h1>
<a href="/">Back to Homepage</a>
<br><br><button id="the_button">Generate!</button>
<p id="the_name">Click the button to generate a Guild Name (The most recent name appears at the top!)</p>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script type="text/javascript">
function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}

String.prototype.formatUnicorn = String.prototype.formatUnicorn ||
function () {
    "use strict";
    var str = this.toString();
    if (arguments.length) {
        var t = typeof arguments[0];
        var key;
        var args = ("string" === t || "number" === t) ?
            Array.prototype.slice.call(arguments)
            : arguments[0];

        for (key in args) {
            str = str.replace(new RegExp("\\{" + key + "\\}", "gi"), args[key]);
        }
    }
    return str;
};

$(document).ready(function(){
	 $("input[type=checkbox]").change(function(){
        if ($(this).is(":checked")) {
            $(this).parent().css("border-color","crimson");
        } else {
            $(this).parent().css("border-color","slateblue");
        }
        //alert($(this).is(":checked"));
    });

    $("#the_button").click(function(){
        var name = ['Todd', 'Jeff', 'Steve', 'Tom', 'John', 'Sarah', 'Elizabeth', 'Lucy', 'Derrick', 'Frank', 'Kale', 'Kane', 'Zack', 'Carl', 'Karl', 'Harry', 'Harrison', 'Martin', 'Mark', 'Marcy', 'Acantha', 'Abigail', 'Adon', 'Adraste', 'Aron', 'Agalia', 'Ajax', 'Alexander', 'Abilene', 'Abraham', 'Adrian', 'Agnes', 'Bartholomew', 'Baxter', 'Beckett', 'Bernard', 'Beryl', 'Blair', 'Bonnie', 'Brandon', 'Caitlin', 'Cairo', 'Calista', 'Callum', 'Camille', 'Carly', 'Caroline', 'Coraline', 'Cheyenne', 'Christine', 'Damian', 'Dan', 'Darren', 'Daryl', 'Delilah', 'Denise', 'Dwayne', 'Dyson', 'Earl', 'Edna', 'Elenor', 'Elliot', 'Elijah', 'Emma'];
        var lastname = ['Alden', 'Alexander', 'Alvin', 'Anderson', 'Avery', 'Barton', 'Bates', 'Baxter', 'Bonham', 'Bryant', 'Caldwell', 'Carver', 'Caulfield', 'Cline', 'Craig', 'Dermot', 'Davies', 'Daube', 'Dalton', 'Dwight', 'Earle', 'Engel', 'Ennes', 'Ellison', 'Everly', 'Fitzroy', 'Forrest', 'Freud', 'Ferguson', 'Freeman', 'Gardiner', 'Garnett', 'Graves', 'Gerst', 'Graham', 'Gallagher'];
        var adj = ['Delitescent', 'Demure', 'Cunning', 'Blissful', 'Caliginous', 'Capricious', 'Coalescent', 'Coruscating', 'Blazing', 'Austere', 'Bilious', 'Empyrean', 'Beauteous', 'Loquacious', 'Most Venerable', 'Most Honourable', 'Acidulous', 'Bibliophilic', 'Slothful', 'Wrathful', 'Lustful', 'Mad', 'Stern', 'Perfectionist', 'Heavy-set', 'Lithe'];
        var occupation1 = ['Herbalist', 'Falconer', 'Illustrator', 'Gravekeeper', 'Gambler', 'Fletcher', 'Painter', 'Poet', 'World-Sailor', 'Storyteller', 'Locksmith', 'Wizard', 'Prophet', 'Armourer', 'Astrologer', 'Barber-Surgeon', 'Blacksmith', 'Brewer', 'Cartwright', 'Clerk', 'Cobbler', 'Engineer', 'Needlemaker', 'Jailer', 'Mason', 'Clock-maker', 'Gunsmith', 'Witch', 'Thatcher', 'Stonecutter', 'Servant', 'Tax Collector', 'Gong Farmer','Weaponsmith', 'Woodcarver', 'Apothecary', 'Woolwinder', 'Architect', 'Banker', 'Bookbinder', 'Tailor', 'Swineherd'];
		var hq_type = ['Bastille', 'Fortress', 'Fort', 'Keep', 'Castle', 'Vault', 'Spire', 'Tower', 'Bank', 'Sanctuary', 'Zeppelin', 'Manor', 'Stable', 'Pyramid']
		var hq_style = ['Secret', 'Hidden', 'Mystical', 'Flying', 'Floating', 'Mundane', 'Grandiose', 'Giant', 'Wealthy', 'Terrifying', 'Regal', 'Non-Euclidean']
		var hq_feature = ['a network of tunnels', 'a heavily-gaurded room', 'an aqueduct', 'a throne room', 'a moat', 'a stable', 'lots of paintings', 'a throne room', 'an old king\'s court', 'a heavily-stocked armory',  'an endless hallway','a secret entrance']
    var hq_feature2 = ['is filled with gold and jewels', 'is constructed from the strongest materials', 'is invisible as long as the guild leader lives', 'is immune to magic', 'is feared by its own inhabitants', 'sometimes talks', 'was created long before the guild inhabited it', 'was taken over by the current guild from a previous owner', 'is still unknown to everyone else']

        var r1 = getRandomInt(name.length);
        var r2 = getRandomInt(lastname.length);
        var r3 = getRandomInt(adj.length);
		    var r4 = getRandomInt(occupation1.length);
/*		var r5 = getRandomInt(npc_hair.length);
		var r6 = getRandomInt(hq_feature.length);
    var r7 = getRandomInt(hq_feature2.length);
*/
        var out = "{0} {1}, the {2} {3}.".formatUnicorn(name[r1], lastname[r2], adj[r3], occupation1[r4]);
/*		var extra = " This guild's HQ is a {0} {1} that has {2} and {3}.".formatUnicorn(hq_style[r5], hq_type[r4], hq_feature[r6], hq_feature2[r7]);
*/
        if ($("#guildHQ").is(":checked")) {
			$("p#the_name").after("<p>" + out + "<br>" + extra + "</p>");
			}
		else
			$("p#the_name").after("<p>" + out + "</p>");
		if ($("p").length > 20) { $("p").last().remove(); }


	});


});

</script>
</div>
</body>
</html>
