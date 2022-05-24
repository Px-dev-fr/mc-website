<style>
<?php if ($quadcss!=""):?>
	<?php echo reduce(file_get_contents($quadcss));?>
<?php endif;?>
	<?php echo reduce(file_get_contents("template/contact.min.css"));?>
	<?php echo reduce(file_get_contents("template/bblocs.min.css"));?>
	<?php echo reduce(file_get_contents("template/bloc.min.css"));?>
	<?php echo reduce(file_get_contents("template/print.min.css"));?>
</style>
<script>
// Fonction
function getnextSibling(element) {var p = element;do p = p.nextSibling;while (p && p.nodeType != 1);return p;}
function hasClass(element, classname){
	if ( (" " + element.className + " ").replace(/[\n\t]/g, " ").indexOf(classname) > -1 ) return true;return false;
}
function isScrolledIntoView(el) {
    var rect = el.getBoundingClientRect();
    var elemTop = rect.top;
    var elemBottom = rect.bottom;
    isVisible = elemTop < window.innerHeight && elemBottom >= 0;
    return isVisible;
}
// Lazy
function affichelazy(){
	var lzs = document.querySelectorAll(".lazy");
	for (var i = 0; i < lzs.length; i++) {		
		var el=lzs[i];
		if (hasClass(el, "loaded")!==true) if (isScrolledIntoView(el)){
			el.className+=" loaded";
			el.setAttribute("srcset", el.getAttribute("data-srcset"));
			el.setAttribute("sizes", el.getAttribute("data-sizes"));}
	}
}
affichelazy();
// Scroll+menu
window.onscroll = function() {
	affichelazy();
	var sT = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;    
	if (sT>0) {document.getElementById("me").classList.add("scrolled");document.getElementById("container").className="scrolled";}
	else {document.getElementById("me").classList.remove("scrolled");document.getElementById("container").className="";}
	if (sT>500) {if (bsd==0) bbs(1);}
};
// Lang mobile
document.getElementById("lg").addEventListener('click', function(){
	if (this.className=="") this.className="active";
	else this.className="";
});
// Menu mobile
document.getElementById("mu").addEventListener('click', function(){
	var mlk=document.getElementById("mks");
	var sr=document.getElementById("sr");
	if (mlk.className=="active") {mlk.className="";document.getElementById("me").classList.remove("active");}
	else {mlk.className="active";sr.className="active";document.getElementById("me").classList.add("active");}
});

var els = document.querySelectorAll(".sbb span");
for (var i=0;i<els.length;i++){
	els[i].addEventListener("click", function(){
		var parent=this.parentNode;
		if (hasClass(parent, "act")) parent.classList.remove("act");
		else parent.classList.add("act");
	});
}
// Onload
window.onload = function(e){quadheight();}
window.onresize = function() {quadheight();}
imgrez();
// Résolution des images
function imgrez(){
		var img=document.getElementById("mainimg");
		if (img!=undefined){
			setTimeout(function(){document.getElementById("mainimg").className="loaded";}, 100);}
}
function quadheight(){
	var max=0;
	var elems=document.querySelectorAll("#quad > div");
	for (var i = 0; i < elems.length; i++){elems[i].style.height="auto";if (elems[i].offsetHeight > max) max=elems[i].offsetHeight;}
	for (var i = 0; i < elems.length; i++) elems[i].style.height=max+"px";
	var max=0;
	var elems=document.querySelectorAll("#bblocs > div");
	for (var i = 0; i < elems.length; i++){elems[i].style.height="auto";if (elems[i].offsetHeight > max) max=elems[i].offsetHeight;}
	for (var i = 0; i < elems.length; i++) elems[i].style.height=max+"px";	
}
function trim(s) {if (typeof s === "string") {s = s.replace(/^\s+|\s+$/g, "");}return s;}
// Récupération du titre h1
var el = document.getElementsByTagName("h1")[0], text = "textContent" in el ? "textContent" : "innerText";
var title = trim(el[text]);
var mt = document.createElement('meta');
mt.setAttribute('property', 'og:title');
mt.setAttribute('content', title);
document.getElementsByTagName('head')[0].appendChild(mt)
// Type
var mt = document.createElement('meta');
mt.setAttribute('property', 'og:type');
mt.setAttribute('content', 'article');
document.getElementsByTagName('head')[0].appendChild(mt);
// Url
var mt = document.createElement('meta');
mt.setAttribute('property', 'og:url');
mt.setAttribute('content', window.location.href );
document.getElementsByTagName('head')[0].appendChild(mt);
// Format
function nbf(valeur){
	var val_format=valeur+"";var nb=val_format.length;
	for (var i=1; i<4; i++) if (valeur >=Math.pow(10,(3*i))) val_format=val_format.substring(0,nb-(3*i))+"'"+val_format.substring(nb-(3*i));return val_format;
}
// Bblocs
var bsd=0;
function bbs(pc){
	bsd=1;var elements = document.querySelectorAll("#bblocs span");
	for (var i=0; i<elements.length; i++) {
		var max=elements[i].getAttribute("data-max");
		var val=parseInt(max*pc/100);
		elements[i].innerHTML=nbf(val);}
	pc+=1;if (pc<101) setTimeout(function(){bbs(pc);}, 100);
}

// Simuls
function ajload(form, destination="<?php echo $link;?>"){
var el=document.getElementById('ms');
el.classList.remove('vis');
var params='langue=<?php echo $lang;?>&action='+destination+'&simulateur='+form;
var url='/includes/ajax.php';
var xhr;xhr=new XMLHttpRequest();
xhr.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
el.innerHTML=this.responseText;el.classList.add('vis');
var scriptElements = el.getElementsByTagName('script');
for (i = 0; i < scriptElements.length; i ++) {
var scriptElement = document.createElement('script');
scriptElement.type = 'text/javascript';
if (!scriptElements[i].src) {
scriptElement.innerHTML = scriptElements[i].innerHTML;
} else {scriptElement.src = scriptElements[i].src;}
document.head.appendChild(scriptElement);}

var divs = document.querySelectorAll('.mcc');
[].forEach.call(divs, function(div) {div.classList.remove('current');});

var mcc=document.getElementById('mcc-'+form);
if (typeof(mcc) != 'undefined' && mcc != null) mcc.classList.add('current');
}};
xhr.open('POST', url, true);
xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
xhr.send(params);
}

// Valide simuls
var hb =  document.getElementById('h1b');
if (typeof(hb) != 'undefined' && hb != null){
	hb.addEventListener('click', function(e){
		var form =  document.getElementById('credit_form');
		if (typeof(form) != 'undefined' && form != null){
		e.preventDefault();
		form.submit();
		}
	});
}

<?php if ($addjs!==false) foreach ($addjs as $add) echo $add;?>
</script>
<?php include("includes/ga.php");?>