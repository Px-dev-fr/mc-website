<script>
setTimeout(function(){loadmi("1");}, 100);
setTimeout(function(){loadmi("2");loadmi("4");}, 200);
setTimeout(function(){loadmi("3");loadmi("5");}, 300);
setTimeout(function(){loadmi("6");}, 400);
function loadmi(mi){document.getElementById("mi"+mi).classList.add("loaded");}
var mi=0;
function changemi(){
	if (mi>0) document.getElementById("mi"+mi).nextElementSibling.classList.remove("active");
	mi++;if (mi>6) mi=1;
	document.getElementById("mi"+mi).nextElementSibling.classList.add("active");
	setTimeout(changemi, 3000);
}
setTimeout(changemi, 1000);
</script>