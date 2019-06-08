var profilepic = document.getElementById('profilepic');
profilepic.onclick=expandpf

function expandpf(){
	profilepic.style.marginRight='-125px';
	profilepic.style.right='50vw';
	profilepic.style.top='5vw';
	profilepic.style.height='250px';
	profilepic.style.width='auto';
	profilepic.style.borderRadius='5vw';
	profilepic.style.transition='.25s';

	profilepic.onclick=inpandpf
}

function inpandpf(){
	profilepic.style.marginRight='0';
	profilepic.style.right='0';
	profilepic.style.top='0';
	profilepic.style.height='50px';
	profilepic.style.width='auto';
	profilepic.style.borderRadius='10px';
	profilepic.style.transition='.5s';

	profilepic.onclick=expandpf
}
var title = document.title;
if(title=='Home'){
	var clicker = document.getElementById('clicker');
	var clickertext = document.getElementById('clickertext');
	clicker.onclick=expand

	function expand(){
		setTimeout(function() {
			document.getElementById('card1').style.visibility='visible';
			document.getElementById('card2').style.visibility='visible';
			document.getElementById('card3').style.visibility='visible';
			document.getElementById('card1').style.opacity='1';
			document.getElementById('card2').style.opacity='1';
			document.getElementById('card3').style.opacity='1';
			clicker.onclick=inpand
			clickertext.innerHTML='Inklappen';
		}, 500);
		setTimeout(function() {
			document.getElementById('buttondiv').style.visibility='visible';
			document.getElementById('buttondiv').style.opacity='1';
		}, 1000);

		document.getElementById('divider').style.marginBottom='0';
		document.getElementById('footer').style.marginTop='0';
		document.getElementById('footer').style.height='auto';

		clicker.id = "clicker2";
	}
	function inpand(){
		document.getElementById('card1').style.visibility='hidden';
		document.getElementById('card2').style.visibility='hidden';
		document.getElementById('card3').style.visibility='hidden';
		document.getElementById('card1').style.opacity='0';
		document.getElementById('card2').style.opacity='0';
		document.getElementById('card3').style.opacity='0';

		setTimeout(function() {
			document.getElementById('divider').style.marginBottom='-10vw';
			document.getElementById('footer').style.marginTop='-10vw';
			document.getElementById('footer').style.height='100px';
			clicker.onclick=expand
			clickertext.innerHTML='Uitbreiden';
		}, 500);
		document.getElementById('buttondiv').style.visibility='hidden';
		document.getElementById('buttondiv').style.opacity='0';

		clicker.id = "clicker";
	}
var newpage = document.getElementById('expandbtn');
newpage.onclick=URL
}else{}

function URL() {
    location.href = 'werkenskills.php';
}
	document.getElementById('spooter').onclick=linked
	function linked(){
		window.open('https://www.linkedin.com/in/pieterjan-van-dijk-82b320182/');
	}