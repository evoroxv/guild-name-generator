<?php /*Template Name: RandomGuildName2.0*/ ?>
<!DOCTYPE html>
<html>
<head>
<title>Random Guild Generator</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
h1 { color: crimson; }
body { background-color: black; }
p { color: crimson; }
a { color: crimson; }
button { color: crimson; padding: 1% }
@media only screen and (max-width: 786px) { button { padding: 2%; } }
@media only screen and (max-width: 500px) { button { padding: 4%; } }
label { border: 2px solid slateblue padding 10px; color: crimson; margin: 5px; }
input[type=checkbox] { display: none }
</style>

</head>
<body>
<div style="text-align: center">
<h1>The Random Guild Name Generator</h1>
<a href="/">Back to Homepage</a>
<p>Inspired by the webcomic Kill Six Billion Demons and the /r/K6BD Discord Server</p>
<label>Generate Guild HQ? <input type="checkbox" id="guildHQ"> </label>
<label>Non-standard Generation [currently non-functional] <input type="checkbox" id="generator2"> </label>
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
        var adj = ['Delitescent', 'Demure', 'Daedelian', 'Blissful', 'Caliginous', 'Capricious', 'Coalescent', 'Coruscating', 'Blazing', 'Austere', 'Bilious', 'Empyrean', 'Beauteous', 'Locquacious', 'Most Venerable', 'Most Honourable', 'Acidulous', 'Bibliophilic'];
        var occupation1 = ['Herbalists', 'Falconers', 'Illustrators', 'Gravediggers', 'Gamblers', 'Fletchers', 'Painters', 'Poets', 'World-Sailors', 'Storytellers', 'Locksmiths', 'Wizards', 'Prophets', 'Armourers', 'Astrologers', 'Barber-Surgeons', 'Blacksmiths', 'Brewers', 'Cartwrights', 'Clerks', 'Cobblers']
        var occupation2 = ['Engineers', 'Needlemakers', 'Jailers', 'Masons', 'Clock-makers', 'Gunsmiths', 'Witches', 'Thatchers', 'Stonecutters', 'Servants', 'Tax Collectors', 'Gong Farmers','Weaponsmiths', 'Woodcarvers', 'Apothecaries', 'Woolwinders', 'Architects', 'Bankers', 'Bookbinders', 'Tailors', 'Swineherds']
		var hq_type = ['Bastille', 'Fortress', 'Fort', 'Keep', 'Castle', 'Vault', 'Spire', 'Tower', 'Bank', 'Sanctuary', 'Zeppelin', 'Manor', 'Stable', 'Pyramid']
		var hq_style = ['Secret', 'Hidden', 'Mystical', 'Flying', 'Floating', 'Mundane', 'Grandiose', 'Giant', 'Wealthy', 'Terrifying', 'Regal', 'Non-Euclidean']
		var hq_feature = ['a network of tunnels', 'a heavily-gaurded room', 'an aqueduct', 'a throne room', 'a moat', 'a stable', 'lots of paintings', 'a throne room', 'an old king\'s court', 'a heavily-stocked armory',  'an endless hallway','a secret entrance']
    var hq_feature2 = ['is filled with gold and jewels', 'is constructed from the strongest materials', 'is invisible as long as the guild leader lives', 'is immune to magic', 'is feared by its own inhabitants', 'sometimes talks', 'was created long before the guild inhabited it', 'was taken over by the current guild from a previous owner', 'is still unknown to everyone else']

        var r1 = getRandomInt(adj.length);
        var r2 = getRandomInt(occupation1.length);
        var r3 = getRandomInt(occupation2.length);
		var r4 = getRandomInt(hq_type.length);
		var r5 = getRandomInt(hq_style.length);
		var r6 = getRandomInt(hq_feature.length);
    var r7 = getRandomInt(hq_feature2.length);

        var out = "The {0} Guild of {1} and {2}".formatUnicorn(adj[r1], occupation1[r2], occupation2[r3]);
		var extra = " This guild's HQ is a {0} {1} that has {2} and {3}.".formatUnicorn(hq_style[r5], hq_type[r4], hq_feature[r6], hq_feature2[r7]);

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
