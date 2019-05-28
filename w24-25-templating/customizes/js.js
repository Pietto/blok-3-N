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